# Ace in the Hole Multisport Events

This website was developed to promote sporting events and manage registration for athletes and volunteers.  

Visit the site at http://bdtripp.com/ace_in_the_hole/  

Code Highlights and Website Functionality:  

- Weather feed  
    - Go to index.php     lines 409 - 414  
- Social Media
    - Go to index.php     lines 420 - 422
- Photo slides using JavaScript
    - Go to image_slider.js
- Information about the events include: 
    - About section
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
        - Go to index.php lines 258 - 281 and includes/form_processing.php lines 164 - 172
    - Field Validation using JavaScript
        - All fields on form are required except Special Accommodations Needed
        - Phone number must be a valid format 
            - (nnn)nnn-nnnn
            - (nnn) nnn-nnnn
            - nnn-nnn-nnnn
            - nnnnnnnnn
            - nnn nnn nnnn
        - Email address must be a valid format -@-.com
        - Age must be between 1 – 130
        - Select Saturday and/or Sunday event
        - Go to aithme.js lines 163 – 301
    - Forms submissions to database using JSON and AJAX
        - Go to aithme.js lines 71 – 161
    - Some field validation with PHP and MySQL queries
        - Are you already signed up for the event?
        - Are you signed up for a different event that is scheduled the same day?
        - Go to includes/form_processing.php  lines 48 – 98 and lines 157 - 162
    - Registration for event is submitted to the database when all validation is successful. 
        - Go to includes/form_processing.php  lines 146 - 155
    - Message “You have successfully registered” is displayed.
- Contact Form:
  	- Field Validation
		- All fields on form are required
		- Email address must be a valid format -@-.com
	- Message is saved to the database
		- Go to includes/form_processing.php  lines 138 - 144
	- Message "Your message has been sent!" is displayed  

Note:  If this was a real site, there would be additional edits on name and different edits on phone number.  

- Responsive Design using LESS
    - Go to css/aithme.less