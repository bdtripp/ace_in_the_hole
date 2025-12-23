<?php

require_once("includes/form_processing.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5XF983C');</script>
        <!-- End Google Tag Manager -->
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135450898-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-135450898-2');
        </script>

        <title>Ace in the Hole Multisport Events</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="css/collapsable_menu.css" type="text/css">
        <link rel="stylesheet" href="css/aithme.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <script src="aithme.js"></script>
        <script src="image_slider.js"></script>
    </head>
    
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XF983C"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v24.0&appId=APP_ID"></script>

        <?php include 'includes/header.php'; ?>
        <main>
            <div class="left_col_container">
                <article>
                    <img id="large_image" class="show_in_mobile" src="images/event/mobile.jpg">
                    <img id="slideshow" class="hide_in_mobile" src="images/slideshow_placeholder.png">
                    <img src="images/back.png" class="left_slide_btn hide_in_mobile" alt="Back button for slideshow">
                    <img src="images/forward.png" class="right_slide_btn hide_in_mobile" alt="Forward button for slideshow">
                </article>
                    <span class="anchor" id="upcoming_events"></span>
                <article>
                    <h2 id="upcoming_events">Upcoming Events</h2>
                    <h3>Annual Ace in the Hole Multisport Weekend</h3>
                    <section>
                        <h4>About the Event</h4>
                        <div class="about card">
                            <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation. </p>

                            <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
                        </div>
                    </section>
                    <section>
                        <h4>Event Schedule</h4>
                        <table class="event_schedule">
                            <tr>
                                <th colspan="2">Saturday - March 23<sup>rd</sup></th>
                            </tr>
                            <tr>
                                <td>Long Course Triathlon</td>
                                <td>7:00 AM </td>
                            </tr>
                            <tr>
                                <td>Olympic Triathlon</td>
                                <td>7:30 AM</td>
                            </tr>
                            <tr>
                                <td>10K</td>
                                <td>7:15 AM</td>
                            </tr>
                            <tr>
                                <td>Half Marathon</td>
                                <td>7:15 AM</td>
                            </tr>
                        </table>
                        
                        <table class="event_schedule">
                            <tr>
                                <th colspan="2">Sunday - March 24<sup>th</sup></th>
                            </tr>
                            <tr>
                                <td>Sprint Triathlon</td>
                                <td>8:00 AM</td>
                            </tr>
                            <tr>
                                <td>Try-a-Tri   </td>
                                <td>8:20 AM</td>
                            </tr>
                            <tr>
                                <td>Splash n Dash</td>
                                <td>12:00 PM</td>
                            </tr>
                        </table>
                    </section>
                    <section class="clear">
                        <h4>Course Details</h4>
                        <div class="column_container">
                            <div class="courses_container card">
                                <h5>Long Triathlon Course</h5>
                                <h6>Swim</h6>
                                <p class="distance">Distance: 1.2 miles</p>
                                <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

                                <h6>Bike</h6>
                                <p class="distance">Distance: 58 miles</p>
                                <p>A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>

                                <h6>Run</h6>
                                <p class="distance">Distance: 13.1 miles</p>
                                <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>
                            </div>

                            <div class="courses_container card">
                                <h5>Olympic Triathlon Course</h5>
                                <h6>Swim</h6>
                                <p class="distance">Distance: 1,500 meters</p>
                                <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>

                                <h6>Bike</h6>
                                <p class="distance">Distance: 28 miles</p>
                                <p>A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.</p>

                                <h6>Run</h6>
                                <p class="distance">Distance: 10 kilometers</p>
                                <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>
                            </div>

                            <br class="clear">

                            <div class="courses_container card">
                                <h5>Sprint Triathlon Course</h5>
                                <p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>
                            </div>

                            <div class="courses_container card">
                                <h5>Try-A-Tri Course</h5>
                                <p>This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>
                            </div>

                            <div class="courses_container card">
                                <h5>Half-Marathon Course</h5>
                                <p class="distance">Distance: 13.1 miles</p>
                                <p>Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports &amp; Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</p> 
                            </div>

                            <div class="courses_container card">
                                <h5>10k Course</h5>
                                <p>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p> 
                            </div>
                        </div>
                    </section>
                    <section>
                        <h4 class="clear">FAQ's</h4>
                        <div class="card">
                            <p class="question">What are the Rules?</p> 
                            <p>We currently adhere to the USAT Rules for Triathlon &amp; Duathlon.  Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p> 
                        </div>

                        <div class="card">
                            <p class="question">Can I use a personal music device while cycling?</p>
                            <p>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p> 
                        </div>      
                        
                        <div class="card">
                            <p class="question">Can I use a personal music device while running?</p>
                            <p>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</p> 

                            <p class="note">If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice…music or awards/points/rankings.</p>

                            <p class="note">If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don’t want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</p> 

                            <p class="note">We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p> 
                        </div>

                        <div class="card">
                            <p class="question">Do I need to wear a wetsuit?</p>
                            <p>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p>

                            <p class="note"><span class="bold">WATER TEMPERATURE</span> is expected to be between 62 – 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>
                        </div>

                        <div class="card">
                            <p class="question">Do I have to use a road or racing bike?</p>
                            <p>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
                        </div>
                    </section>
                    <section>
                        <h4>Registration Fees</h4>
                        <table class="registration_fees">
                            <tr>
                                <th>Course</th>
                                <th>Fee</th>
                            </tr>
                            <tr>
                                <td>Long Course</td>
                                <td>$240</td>
                            </tr>
                            <tr>
                                <td>Olympic</td>
                                <td>$110</td>
                            </tr>
                            <tr>
                                <td>10K</td>
                                <td>$50</td>
                            </tr>
                            <tr>
                                <td>Half Marathon</td>
                                <td>$75</td>
                            </tr>
                            <tr>
                                <td>Sprint</td>
                                <td>$90</td>
                            </tr>
                            <tr>
                                <td>Try-a-Tri</td>
                                <td>$65</td>
                            </tr>
                        </table>
                        <div class="cost_includes card">
                            <h5>Cost Includes</h5>
                            <ul>
                                <li>Food &amp; Beer</li>
                                <li>Access to the weekend’s live entertainment &amp; Fitness Expo</li>
                                <li>Commemorative Finisher medal</li>
                                <li>Accurate Chip Timing for competitive races</li>
                                <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                                <li>Post-event party &amp; entertainment</li>
                            </ul>
                            <p class="note"><span class="bold">NOTE: </span>Tech shirts guaranteed to pre-registered participants only.</p>
                        </div>
                    </section>
                    <span class="anchor clear" id="register"></span>
                    <section>
                        <h4>Register</h4>
                        <form id="registration_form" method="post" action="includes/form_processing.php">
                            <div>
                                <label><span class="required_mark">* </span>First Name: </label>
                                <input id="first_name_register" class="required" name="firstName" type="text">
                            </div>
                            <div>
                                <label><span class="required_mark">* </span>Last Name: </label>
                                <input id="last_name_register" class="required" name="lastName" type="text">
                            </div>
                            <div>
                                <label><span class="required_mark">* </span>Email Address: </label>
                                <input id="email_register" class="required" name="email" type="text">
                            </div>
                            <div>
                                <label><span class="required_mark">* </span>Age: </label>
                                <input id="age_register" class="required" name="age" type="text">
                            </div>
                            <div>
                                <label><span class="required_mark">* </span>Gender Identification: </label>
                                <div class="radio_group_container required">
                                    <div class="radio_container">
                                        <input class="radio_btn" type="radio" name="gender_register" value="female"> Female<br>
                                    </div>
                                    <div class="radio_container">
                                        <input class="radio_btn" type="radio" name="gender_register" value="male"> Male<br>
                                    </div>
                                    <div class="radio_container">
                                        <input class="radio_btn" type="radio" name="gender_register" value="non-binary"> Non-binary
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label><span class="required_mark">* </span>Event Registering For:</label>
                                <?php
                                $events = getEvents();
                                echo "<label class='bottom_space center'>Saturday's Events</label>";
                                echo "<span class='placeholder'></span>";
                                echo '<select id="saturday_event_name_register" class="required bottom_space" name="saturdayEventName">';
                                echo '    <option></option>';
                                        for($i = 0; $i < count($events); $i++) {
                                            if($events[$i]["Date"] == "2019-03-23") {
                                                echo "<option value='" . $events[$i]["EventName"] . "'>" . $events[$i]["EventName"] . "</option>";
                                            }
                                        }
                                echo '</select>';
                                echo "<span class='placeholder'></span>";
                                echo "<label class='bottom_space center'>Sunday's Events</label>";
                                echo "<span class='placeholder'></span>";
                                echo '<select id="sunday_event_name_register" class="required bottom_space" name="sundayEventName">';
                                echo '    <option></option>';
                                for($i = 0; $i < count($events); $i++) {
                                    if($events[$i]["Date"] == "2019-03-24") {
                                        echo "<option value='" . $events[$i]["EventName"] . "'>" . $events[$i]["EventName"] . "</option>";
                                    }
                                }
                                echo '</select>';
                                ?>
                            </div>
                            <div>
                                <label><span class="required_mark">* </span>Register as a(n): </label>
                                <div class="radio_group_container required">
                                    <div class="radio_container">
                                        <input class="radio_btn" type="radio" name="participation_type_register" value="athlete"> Athlete<br>
                                    </div>
                                    <div class="radio_container">
                                        <input class="radio_btn" type="radio" name="participation_type_register" value="volunteer"> Volunteer
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label><span class="required_mark">* </span>Emergency Contact Name: </label>
                                <input id="emergency_contact_name_register" class="required" name="emergencyContactName" type="text">
                            </div>
                            <div>
                                <label><span class="required_mark">* </span>Emergency Contact Phone Number: </label>
                                <input id="emergency_contact_phone_register" class="required" name="emergencyContactPhone" type="text">
                            </div>
                            <div>
                                <label class="textarea_label">Special Accommodations Needed: </label>
                                <textarea id="accommodations_register" class="accommodations_textarea" name="accommodations"></textarea>
                            </div>
                            <input id="submit_register" type="submit" name="registerSubmit">
                        </form>
                    </section>
                    <section>
                        <h4>Packet Pick Up</h4>
                        <div class="packet_pickup card">
                            <p class="bold">All packet pick up will occur at:</p>
                            <p class="address">Why Worry Racing<br>123 NW Everett<br>Portland OR &nbsp;97209</p>
                            <p class="bold">Packet pick up hours:</p>
                            <table class="hours">
                                <tr>
                                    <td>Thursday</td>
                                    <td>8 - 5</td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>9 - noon</td>
                                </tr>
                            </table>
                            <p class="note">No day of event packet pick up.</p>
                        </div>
                    </section>
                    <section>
                        <h4>What to Bring</h4>
                        <div class="column_container">
                            <div class="race_segment card">
                                <h5>Chip Timing Devices</h5>
                                <p>You must wear your chip timing piece during the entire event.  You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly.</p>

                                <p>Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race.</p>

                                <p> If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p> 

                                <p>Remember to bring a change of clothing so you can enjoy the post-event festivities.</p>

                                <p class="note">Watch the weather closely.  The show goes on no matter what the weather is doing.</p>
                            </div>

                            <div class="race_segment card">
                                <h5>Swimming Gear</h5>
                                <p>Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries.  We will provide you with a swim cap but you will want to bring your own goggles.</p>

                                <p class="note"><span class="bold">WATER TEMPERATURE</span> is expected to be between 62 – 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>
                            </div>

                            <div class="race_segment card">
                            <h5>Biking Gear</h5>
                                <p>A biking helmet is mandatory.  You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet.  The bigger sticker will wrap around your bike frame.  Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>
                            </div>

                            <div class="race_segment card">
                                <h5>Running Gear</h5>
                                <p>You must finish the race with your bib number on the front of you.  Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it.  Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.  Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.</p> 
                            </div>
                        </div>
                    </section>
                </article>
                <span class="anchor clear" id="our_mission"></span>
                <article>
                    <h2>Our Mission</h2>
                    <div class="mission card">
                        <p class="our_mission">Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.</p>
                    </div>
                </article>
                <span class="anchor" id="contact"></span>
                <article >
                    <h2>Contact Us</h2>
                    <form id="contact_form" method="post" action="includes/form_processing.php">
                        <div>
                            <label><span class="required_mark">* </span>First Name: </label>
                            <input id="first_name_contact" class="required" name="firstName" type="text">
                        </div>
                        <div>
                            <label><span class="required_mark">* </span>Last Name: </label>
                            <input id="last_name_contact" class="required" name="lastName" type="text">
                        </div>
                        <div>
                            <label><span class="required_mark">* </span>Email Address: </label>
                            <input id="email_contact" class="required" name="email" type="text">
                        </div>
                        <div>
                            <label><span class="required_mark">* </span>Are you a(n)</label>
                            <div class="radio_group_container required">
                                <div class="radio_container">
                                    <input class="radio_btn required" type="radio" name="relation_contact" value="athlete"> Athlete<br>
                                </div>
                                <div class="radio_container">
                                    <input class="radio_btn required" type="radio" name="relation_contact" value="volunteer"> Volunteer
                                </div>
                                <div class="radio_container">
                                    <input class="radio_btn required" type="radio" name="relation_contact" value="interested party"> Interested Party
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="textarea_label"><span class="required_mark">* </span>Message: </label>
                            <textarea id="message_contact" class="required" name="message"></textarea>
                        </div>
                        <input id="submit_contact" type="submit" name="contactSubmit">
                    </form>
                </article>
            </div>
            <aside>
                <section class="feed">
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="Weather" data-theme="pure" >PORTLAND Weather</a>
                <script>
                     !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
                </section>
<!-- removed this because this facebook page no longer exists. Could replace it with something else though
                <section class="feed">
                    <div class="fb-page" data-href="https://www.facebook.com/cas222cascade/" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cas222cascade/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade/">CAS 222</a></blockquote></div>
                </section>
-->

                <section>
                    <!-- <a class="twitter-timeline" data-height="500" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  -->
                    <img class="route" src="images/route.jpg"></img>
                    <img class="route" src="images/route2.png"></img>
                </section>
                
            </aside>
        </main>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
