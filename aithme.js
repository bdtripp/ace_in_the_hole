var init = function () {
    //the max-height of aside should be the height of the window minus the height of the header, and footer. Needs to change dynamically.
    function adjustAsideHeight() {
        var header = document.getElementsByTagName("header")[0];
        var footer = document.getElementsByTagName("footer")[0];
        var aside = document.getElementsByTagName("aside")[0];
        var windowHeight = window.innerHeight;
        var windowWidth = window.innerWidth;
        var headerHeight = document.defaultView.getComputedStyle(header).height;
        var footerHeight = document.defaultView.getComputedStyle(footer).height;
        var footerTop = footer.getBoundingClientRect().top;
        var footerHeightInView = windowHeight - footerTop;

        if (windowWidth > 600) {
            aside.style.maxHeight = windowHeight - parseInt(headerHeight) - (footerHeightInView >= 0 ? footerHeightInView : 0) + "px";
        } else {
            aside.style.maxHeight = "none";
        }

        //        console.log("Window Height: " + window.innerHeight);
        //        console.log("Header height: " + document.defaultView.getComputedStyle(header).height);
        //        console.log("Footer Height: " + document.defaultView.getComputedStyle(footer).height);
        //        console.log("Footer Top: " + footer.getBoundingClientRect().top);
        //        console.log("Footer Height In View: " + footerHeightInView);
    }

    function displayFormMessage(form, errorOccurred) {
        var messageContainer = document.createElement("div");
        var messageP = document.createElement("p");

        if (form.id == "registration_form") {
            if(errorOccurred) {
                messageP.innerText = "Error! Please check form fields above.";
                messageP.className = "error_message_span";
            } else {
                messageP.innerText = "You have registered successfully!";
                messageP.className = "success_message";
            }
            messageP.id = "registration_message";
        }
        if (form.id == "contact_form") {
            if(errorOccurred) {
                messageP.innerText = "Error! Please check form fields above.";
                messageP.className = "error_message_span";
            } else {
                messageP.innerText = "Your message has been sent!";
                messageP.className = "success_message";
            }
            messageP.id = "contact_message";
        }
        
        messageContainer.className = "messageContainer";
        messageContainer.appendChild(messageP);
        form.appendChild(messageContainer);
    }

    function removeFormMessage(form) {
        var message;
        
        if(form.id == "registration_form") {
            message = document.getElementById("registration_message");
        }
        if(form.id == "contact_form") {
            message = document.getElementById("contact_message");
        }
        if(message) {
            message.parentNode.removeChild(message);
        }
    }

    function submitForm(form) {
        var relationRadios;
        var i;
        var firstName;
        var lastName;
        var email;
        var relation;
        var message;
        var emergencyContactName;
        var emergencyContactPhone;
        var genderRadios;
        var gender;
        var age;
        var eventName;
        var accommodations
        var xhr = new XMLHttpRequest();
        
        // local versions
         xhr.open("POST", "includes/form_processing.php", true);
        
        // online version
//        xhr.open("POST", "includes/form_processing.php", true);
        
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        if (form.id === "registration_form") {
            firstName = document.getElementById("first_name_register").value;
            lastName = document.getElementById("last_name_register").value;
            email = document.getElementById("email_register").value;
            emergencyContactName = document.getElementById("emergency_contact_name_register").value;
            emergencyContactPhone = document.getElementById("emergency_contact_phone_register").value;
            genderRadios = document.getElementsByName("gender_register");
            age = document.getElementById("age_register").value;
            saturdayEventDropdown = document.getElementById("saturday_event_name_register");
            sundayEventDropdown = document.getElementById("sunday_event_name_register");
            saturdaySelectedEvent = saturdayEventDropdown.options[saturdayEventDropdown.selectedIndex].value;
            sundaySelectedEvent = sundayEventDropdown.options[sundayEventDropdown.selectedIndex].value;
            accommodations = document.getElementById("accommodations_register").value;
            participationTypeRadios = document.getElementsByName("participation_type_register");

            for (i = 0; i < genderRadios.length; i++) {
                if (genderRadios[i].checked) {
                    gender = genderRadios[i].value;
                }
            }
            for (i = 0; i < participationTypeRadios.length; i++) {
                if (participationTypeRadios[i].checked) {
                    participationType = participationTypeRadios[i].value;
                }
            }

            xhr.send("firstName=" + firstName + "&lastName=" + lastName + "&email=" + email + "&emergencyContactName=" + emergencyContactName + "&emergencyContactPhone=" + emergencyContactPhone + "&gender=" + gender + "&age=" + age + "&saturdayEventName=" + saturdaySelectedEvent + "&sundayEventName=" + sundaySelectedEvent + "&accommodations=" + accommodations + "&participationType=" + participationType + "&registerSubmit=true");
        }
        if (form.id === "contact_form") {
            relationRadios = document.getElementsByName("relation_contact");
            firstName = document.getElementById("first_name_contact").value;
            lastName = document.getElementById("last_name_contact").value;
            email = document.getElementById("email_contact").value;
            relation;
            message = document.getElementById("message_contact").value;
            
            for (i = 0; i < relationRadios.length; i++) {
                if (relationRadios[i].checked) {
                    relation = relationRadios[i].value;
                }
            }
            
            xhr.send("firstName=" + firstName + "&lastName=" + lastName + "&email=" + email + "&relation=" + relation + "&message=" + message + "&contactSubmit=true");
        }
        xhr.onreadystatechange = function () {
            if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
                var response;
                var inputAtFault;
                
                if(xhr.response) {
                    response = JSON.parse(xhr.response);
                    
                    if(response.errorCode !== undefined) {
                        errorMessageSpan = document.createElement("span");
                        errorMessageSpan.innerHTML = response.errorMessage;
                        errorMessageSpan.className = "error_message_span";
                        inputAtFault = document.getElementById(response.inputAtFaultID);
                        inputAtFault.parentNode.appendChild(errorMessageSpan);
                        displayFormMessage(form, true);
                    }
                } else {
                    form.reset();
                    displayFormMessage(form, false);
                }
            }
        }
    }

    function checkInputs(form) {
        var inputs;
        var i;
        var valid = true;
        var errorMessageSpan;
        var existingSpans;
        var relationRadios;
        var participationTypeRadios;
        var genderRadios;

        existingSpans = document.getElementsByClassName("error_message_span");
        for (; existingSpans.length > 0; i++) {
            existingSpans[0].parentNode.removeChild(existingSpans[0]);
        }
        inputs = form.getElementsByClassName("required");
        for (i = 0; i < inputs.length; i++) {
            if ((inputs[i].tagName === "INPUT" || inputs[i].tagName === "TEXTAREA") && !inputs[i].value) {
                errorMessageSpan = document.createElement("span");
                errorMessageSpan.innerText = "This field is required";
                errorMessageSpan.className = "error_message_span";
                inputs[i].parentNode.appendChild(errorMessageSpan);
                valid = false;
            }
        }
        if (form.id === "registration_form") {
            var participationRadioChecked = false;
            var genderRadioChecked = false;
            var saturdayEventDropdown = document.getElementById("saturday_event_name_register");
            var sundayEventDropdown = document.getElementById("sunday_event_name_register");
            var saturdaySelectedEvent = saturdayEventDropdown.options[saturdayEventDropdown.selectedIndex].value;
            var sundaySelectedEvent = sundayEventDropdown.options[sundayEventDropdown.selectedIndex].value;

            if ((saturdaySelectedEvent === "" && sundaySelectedEvent === "") && (saturdayEventDropdown.className.includes("required") || sundayEventDropdown.className.includes("required"))) {
                errorMessageSpan = document.createElement("span");
                errorMessageSpan.innerText = "This field is required";
                errorMessageSpan.className = "error_message_span";
                saturdayEventDropdown.parentNode.appendChild(errorMessageSpan);
                valid = false;
            }
            participationTypeRadios = document.getElementsByName("participation_type_register");
            participationGroupContainer = participationTypeRadios[0].parentNode.parentNode;
            if(participationGroupContainer.className.includes("required")) {
                for(i = 0; i < participationTypeRadios.length; i++) {
                    if (participationTypeRadios[i].checked) {
                        participationRadioChecked = true;
                    }
                }
                if (!participationRadioChecked) {
                    errorMessageSpan = document.createElement("span");
                    errorMessageSpan.innerText = "This field is required";
                    errorMessageSpan.className = "error_message_span";
                    participationTypeRadios[participationTypeRadios.length - 1].parentNode.parentNode.parentNode.appendChild(errorMessageSpan);
                    valid = false;
                }
            }

            genderRadios = document.getElementsByName("gender_register");
            genderGroupContainer = genderRadios[0].parentNode.parentNode;
            if(genderGroupContainer.className.includes("required")) {
                for(i = 0; i < genderRadios.length; i++) {
                    if (genderRadios[i].checked) {
                        genderRadioChecked = true;
                    }
                }
                if (!genderRadioChecked) {
                    errorMessageSpan = document.createElement("span");
                    errorMessageSpan.innerText = "This field is required";
                    errorMessageSpan.className = "error_message_span";
                    genderRadios[participationTypeRadios.length - 1].parentNode.parentNode.parentNode.appendChild(errorMessageSpan);
                    valid = false;
                }
            }
            return valid;
        }

        if (form.id === "contact_form") {
            var radioChecked = false;
            var relationRadios = document.getElementsByName("relation_contact");
            var relationGroupContainer = relationRadios[0].parentNode.parentNode;
            
            if(relationGroupContainer.className.includes("required")) {
                for(i = 0; i < relationRadios.length; i++) {
                    if (relationRadios[i].checked) {
                        radioChecked = true;
                    }
                }
                if (!radioChecked) {
                    errorMessageSpan = document.createElement("span");
                    errorMessageSpan.innerText = "This field is required";
                    errorMessageSpan.className = "error_message_span";
                    relationRadios[relationRadios.length - 1].parentNode.parentNode.parentNode.appendChild(errorMessageSpan);
                    valid = false;
                }
            }
        }
        return valid;
    }
    
    function adjustForFixedHeader() {
        var aside = document.getElementsByTagName("aside")[0];
        var slideshow = document.getElementById("slideshow");
        var header = document.getElementsByTagName("header")[0];
        var headerHeight = document.defaultView.getComputedStyle(header).height;
    
        slideshow.style.marginTop = headerHeight;
        aside.style.top = headerHeight;
    }
    
    function hideNavMenu() {
        document.getElementById("menu-btn").checked = false;
    }
    
    function adjustFbFeed(firstRender) {
        var aside = document.getElementsByTagName("aside")[0];
        var asideStyle = document.defaultView.getComputedStyle(aside);
        var fbFeed = document.getElementsByClassName("fb-page")[0];
        var fbIframe = fbFeed.getElementsByTagName("iframe")[0];
        var scrollBarWidth = aside.offsetWidth - aside.clientWidth;
        
        if(navigator.userAgent.toLowerCase().includes("firefox")) {
            fbFeed.dataset.width = (Math.floor(parseFloat(asideStyle.width)) - scrollBarWidth - 2) + "px";
            console.log("firefox");
        } else {
            fbFeed.dataset.width = (Math.floor(parseFloat(asideStyle.width)) - 2) + "px";
            console.log("other");
        }
//        fbIframe.style.width = (Math.floor(parseFloat(asideStyle.width)) - 1) + "px";

        FB.XFBML.parse();
        console.log("fb parse");
        //fbFeed.dataset.height = 500 + "px";
//        console.log(asideStyle.width);
        
    }

    return function () {
        var registrationForm = document.getElementById("registration_form");
        var contactForm = document.getElementById("contact_form");
        var registrationSubmit = document.getElementById("submit_register");
        var contactSubmit = document.getElementById("submit_contact");
        var valid;
        var timeout = null;
        var firstRender = true;

        adjustAsideHeight();
        adjustForFixedHeader();
        adjustFbFeed();
        FB.Event.subscribe('xfbml.render', function() {
            if(firstRender) {
                adjustFbFeed();
            }
            firstRender = false;
        });
        window.addEventListener("resize", function() {
            adjustAsideHeight();
            adjustForFixedHeader();
            
            if(timeout !== null) {
                clearTimeout(timeout);
            }
            timeout = setTimeout(function() {
                adjustFbFeed();
            }, 100);
        });
        window.addEventListener("scroll", adjustAsideHeight);
        registrationSubmit.addEventListener("click", function(event) {
            event.preventDefault();
            removeFormMessage(registrationForm);
            valid = checkInputs(registrationForm);
            if(valid) {
                submitForm(registrationForm);
            } else {
                displayFormMessage(registrationForm, true);
            }
        });
        contactSubmit.addEventListener("click", function(event) {
            event.preventDefault();
            removeFormMessage(contactForm);
            valid = checkInputs(contactForm);
            if(valid) {
                submitForm(contactForm);
            } else {
                displayFormMessage(contactForm, true);
            }
        });
        document.getElementsByTagName("nav")[0].addEventListener("click", function() {
            hideNavMenu();
        });
    }
}();

window.addEventListener("load", init);
