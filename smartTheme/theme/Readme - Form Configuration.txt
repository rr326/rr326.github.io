FORM CONFIGURATION

IMPORTANT NOTE: To use this file, your host must work with php files. If you are not sure, please ask to your provider.

---*** EASY METHOD ***---
If you are happy with the fields configured in your theme, you only need to change
contact.php with your information.

Steps: 

1 - Open/Edit contact.php
2 - Locate the line 7: $mail_to= 'YOUR_MAIL@GOES_HERE.com'
3 - Add your mail inside the quotes.
4 - Locate the line 28. Change the error message adding your mail address.
5 - Done! - You'll receive an email each time someone fills the form.


Upload with your other files the contact.php file (must be in the same folder as Index.html)


---*** ADVANCE METHOD ***---
If you change or add new fields in your contact form, you should reference these fields in the contact.php file to receive the information in your email.

Example:
You wish to add a filed for the surname.

<input type="name" name="Surname" class="form-control" id="surname1" placeholder="Your Surname">

To collect this information, you should add in the contact.pho file the proper field name.

$field_surname = $_POST['Surname'];

Finally, you should add the proper command to receive this information:

$body_message = 'From: '.$field_surname."\n";

Once you add or remove your desired fields, change the email information with yours.

If you have any question, please let me know. carlos@alvarez.is