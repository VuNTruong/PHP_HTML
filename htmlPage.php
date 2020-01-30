<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Section 2: JavaScript Language Basics</title>
    </head>

    <body>
        <form action = './registration_handle.inc.php' method = 'POST' name = 'registration_form' id = 'registration_form'>
            Name <input type='text' 
            size='15' 
            maxlength='20' 
            name='first_name' 
            id='first_name' 
            placeholder='first name goes here' required autofocus title='write your first name here' autocomplete 
            pattern='[A-Za-z]{2,20}' /><br><br>

            Password <input type='password' 
            size='15' 
            maxlength='20' 
            name='first_password' 
            id='first_password' 
            placeholder='Password' 
            pattern='[A-Za-z]{2,10}' /><br><br>

            Comments <textarea name='first_textarea' 
            id='first_textarea' 
            rows='4' 
            cols='40'
            placeholder='Comment'>
            </textarea> <br><br>

            <fieldset><legend>Field of interest</legend>
                Computer science <input type='checkbox' name='cs_checkbox' id='cs_checkbox' value='CS Checkbox' checked='checked' /><br>
                Aerospace <input type='checkbox' name='aerospace_checkbox' id='aerospace_checkbox' value='Aerospace Checkbox' /><br>
                Robotics <input type='checkbox' name='robotics_checkbox' id='robotics_checkbox' value='Robotics Checkbox' /><br><br>
            </fieldset>

            <fieldset><legend>Class rank</legend>
                Freshman <input type='radio' name='radio_buttons' id='freshman_radio' value='Freshman Radio Button' checked='checked' /><br>
                Sophomore <input type='radio' name='radio_buttons' id='sophomore_radio' value='Sophomore Radio Button' /><br>
                Junior <input type='radio' name='radio_buttons' id='junior_radio' value='Junior Radio Button' /><br>
                Senior <input type='radio' name='radio_buttons' id='senior_radio' value='Senior Radio Button' /><br>
            </fieldset>

            <label for='first_pull_down_menu'>Select an Option </label>
            <select name='first_pull_down' id='first_pull_down' size='1' >
            <optgroup label='Group 1'>
                <option value="About_Us">About Us</option>
                <option value="Contact_Us">Contact Us</option>
                <option value="Our_Products" selected='selected'>Our Products</option>
            </optgroup>
            <optgroup label='Group 2'>
                <option value="Prior_Orders">Prior Orders</option>
                <option value="Account_Info">Account Info</option>
                <option value="Payment_Info">Payment Info</option>	
            </optgroup>
            </select><br>

            <input type='submit' 
            name='first_submit' 
            id='first_submit' 
            value='Click to Submit' /><br>

            <input type='reset' name='first_reset' id='first_reset' value='Click to Reset' /><br>
        </form>
    </body>
</html>