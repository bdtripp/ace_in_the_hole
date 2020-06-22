# Ace in the Hole Multisport Events

This website was developed to promote sporting events and manage registration for athletes and volunteers.  

Visit the site at http://bdtripp.com/ace_in_the_hole/  

Code Highlights and Website Functionality:  

- Weather feed  
    - Go to template/index.php     line ??? - ???  
- Social Media
    - Go to template/index.php     line ??? - ???
- Photo slides using JavaScript
    - Go to template/image_slider.js
- Information about the events include: 
    - About the Event
    - Event Schedule
    - Course Details for each event
    - Frequently asked questions
    - Registration Fees
    - Packet Pickup
    - What to Bring
    - Our Mission
- Registration: 
    - Registration form for athletes and volunteers
    - Event drop-down list of events
        - Go to xxxxxxxxx
    - Field Validation using JavaScript
        - All fields on form are required except Special Accommodation Needs
        - Phone number must be a valid format 
            - (nnn)nnn-nnnn
            - (nnn) nnn-nnnn
            - nnn-nnn-nnnn
            - nnnnnnnnn
            - nnn nnn nnnn
        - Email address must be a valid format -@-.com
        - Age must be between 1 – 130
        - Select Saturday and/or Sunday event
        - Go to template/aithme.js line line 163 – 259 ????
    - Submit form
        - Go to template/aithme.js line 71 – 92   is some of this code commented out
    - Field Validation PHP and MySQL database
        - Are you already signed up for the event?
        - Are you signed up for a different event that is schedule at the same time?
        - Go to template/includes/form_processing.php  line 42 – 92
    - Input Validation and forms submissions to database using JSON and AJAX ???
        - Go to template/includes/form_processing.php???  line ???
    - Registration for event is inserted to the database when all validation is successful. 
        - Go to template/includes/form_processing.php???  line ???
    - Message “You have successfully registered” is displayed.
- Contact Form:
  	- Field Validation
		- All fields on form are required
		- Email address must be a valid format -@-.com
	- Where does the contact message go?
	- Your message has been sent!  

Note:  If this was a real site, there would be additional edits on name and different edits on phone number.  

- Responsive Design using LESS
    - Go to template/aithme.less