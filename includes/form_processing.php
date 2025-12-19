<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 2/6/2019
 * Time: 7:14 PM
 */

//online version
const DB_SERVER = '127.0.0.1';
const DB_USER = 'bdtripp_root';
const DB_PASSWORD = 'zCRZDvZJVf8cUym';
const DB_DATABASE = 'bdtripp_aithme';

//offline version
//const DB_SERVER = 'localhost';
//const DB_USER = 'aithme';
//const DB_PASSWORD = 'xKP31jwQLDmstZTHfKrl';
//const DB_DATABASE = 'aithme';

function getPostValue($name) {
    if(isset($_POST[$name])) {
        return $_POST[$name];
    }
    return null;
}

$firstName = getPostValue("firstName");
$lastName = getPostValue("lastName");
$email = getPostValue("email");
$relation = getPostValue("relation");
$participationType = getPostValue("participationType");
$message = getPostValue("message");
$gender = getPostValue("gender");
$age = getPostValue("age");
$emergencyContactName = getPostValue("emergencyContactName");
$emergencyContactPhone = getPostValue("emergencyContactPhone");
$specialAccommodations = getPostValue("accommodations");
$saturdayEventName = getPostValue("saturdayEventName");
$sundayEventName = getPostValue("sundayEventName");

if(isset($_POST["contactSubmit"])) {
    savePersonalInfo($firstName, $lastName, $email, NULL, NULL);
    $personalID = lookupPersonalInfo($firstName, $lastName)["PersonalID"];
    saveMessage($personalID, $relation, $message);
}

if(isset($_POST["registerSubmit"])) {
    $saturdayEventInfo = getEventInfo($saturdayEventName);
    $saturdayEventID = $saturdayEventInfo["EventID"];
    $saturdayEventDate = $saturdayEventInfo["Date"];
    $sundayEventInfo = getEventInfo($sundayEventName);
    $sundayEventID = $sundayEventInfo["EventID"];
    $sundayEventDate = $sundayEventInfo["Date"];

    savePersonalInfo($firstName, $lastName, $email, $gender, $age);
    $personalID = lookupPersonalInfo($firstName, $lastName)["PersonalID"];
    $eventsRegisteredFor = lookupRegistrations($personalID);
    for($i = 0; $i < count($eventsRegisteredFor); $i++) {
        if($eventsRegisteredFor[$i]["EventName"] == $saturdayEventName || $eventsRegisteredFor[$i]["EventName"] == $sundayEventName) {
            $error = array(
                "errorCode" => 2,
                "errorName" => "Same Event",
                "errorMessage" => "You have already registered for the " . $eventsRegisteredFor[$i]["EventName"] .
                    " event.",
                "inputAtFaultID" => "saturday_event_name_register"
            );
            echo json_encode($error);
            return;
        } else if($eventsRegisteredFor[$i]["Date"] == $saturdayEventDate) {
            $error = array(
                "errorCode" => 1,
                "errorName" => "Same Date",
                "errorMessage" => "You previously registered for the " . $eventsRegisteredFor[$i]["EventName"] .
                    " event, which is held on " . $saturdayEventDate . ".<br><br>The " . $saturdayEventName . " event is being held on the same date. You can only register for one event per date.",
                "inputAtFaultID" => "saturday_event_name_register"
            );
            echo json_encode($error);
            return;
        } else if($eventsRegisteredFor[$i]["Date"] == $sundayEventDate) {
            $error = array(
                "errorCode" => 1,
                "errorName" => "Same Date",
                "errorMessage" => "You previously registered for the " . $eventsRegisteredFor[$i]["EventName"] .
                    " event, which is held on " . $sundayEventDate . ".<br><br>The " . $sundayEventName . " event is being held on the same date. You can only register for one event per date.",
                "inputAtFaultID" => "sunday_event_name_register"
            );
            echo json_encode($error);
            return;
        }
    }
    if(!empty($saturdayEventID)) {
        register($personalID, $saturdayEventID, $participationType, $emergencyContactName, $emergencyContactPhone, $specialAccommodations);
    }
    if(!empty($sundayEventID)) {
        register($personalID, $sundayEventID, $participationType, $emergencyContactName, $emergencyContactPhone, $specialAccommodations);
    }
}

function lookupRegistrations($personalID) {
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "SELECT * FROM registration JOIN event ON registration.EventID = event.EventID WHERE PersonalID = ";
    $query .= $db->real_escape_string($personalID) . ";";
    $result = $db->query($query);
    $events = [];
    while($event = $result->fetch_array(MYSQLI_ASSOC)) {
        $events[] = $event;
    };
    return $events;
}

function lookupPersonalInfo($firstName, $lastName) {
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "SELECT * FROM person WHERE FirstName = '" . $db->real_escape_string($firstName);
    $query .= "' AND LastName = '" . $db->real_escape_string($lastName) . "';";
    $result = $db->query($query);
    return $result->fetch_array(MYSQLI_ASSOC);
}

function savePersonalInfo($firstName, $lastName, $email, $gender, $age) {
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO person (FirstName, LastName, EmailAddress, GenderIdentification, Age) VALUES('";
    $query .= $db->real_escape_string($firstName) . "', '" .  $db->real_escape_string($lastName) . "', '";
    $query .= $db->real_escape_string($email) . "', ";
    $query .= (is_null($gender) ? "NULL"  : "'" . ($db->real_escape_string($gender)) . "'") . ", ";
    $query .= (is_null($gender) ? "NULL"  : "'" . ($db->real_escape_string($age)) . "'") . ")";
    $query .= " ON DUPLICATE KEY UPDATE EmailAddress = '" . $db->real_escape_string($email);
    if(isset($gender) && isset($age)) {
        $query .= "', " . "GenderIdentification = '";
        $query .= $db->real_escape_string($gender) . "'";
        $query .= ", " . "Age = '" . ($db->real_escape_string($age)) . "';";
    } else {
        $query .= "';";
    }
    $db->query($query);
}

function saveMessage($personalID, $relation, $message) {
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = " INSERT INTO message (PersonalID, Relation, Message) VALUES(" . $personalID . ", '";
    $query .= $db->real_escape_string($relation)  . "', '" . $db->real_escape_string($message) . "');";
    $db->query($query);
//    printf("Error: %s\n", $db->error);
}

function register($personalID, $eventID, $participationType, $emergencyContactName, $emergencyContactPhone, $specialAccommodations) {
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "INSERT INTO registration (PersonalID, EventID, ParticipationType, EmergencyContactName, EmergencyContactPhone, SpecialAccommodations)";
    $query .= "VALUES ('" . $db->real_escape_string($personalID) . "', '" . $db->real_escape_string($eventID) . "', '";
    $query .= $db->real_escape_string($participationType) . "', '";
    $query .= $db->real_escape_string($emergencyContactName) . "', '" . $db->real_escape_string($emergencyContactPhone);
    $query .= "', " . (!empty($specialAccommodations) ? "'" . $db->real_escape_string($specialAccommodations) . "'" : "NULL");
    $query .= ");";
    $db->query($query);
}

function getEventInfo($eventName) {
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "SELECT * FROM event WHERE EventName = '" . $eventName . "';";
    $result = $db->query($query);
    return $result->fetch_array(MYSQLI_ASSOC);
}

function getEvents() {
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
    $query = "SELECT * FROM event;";
    $result = $db->query($query);
    while($event = $result->fetch_array(MYSQLI_ASSOC)) {
        $events[] = $event;
    };
    return $events;
}