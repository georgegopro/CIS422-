<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            $output = $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            $output = $message;
        }
    }
}
?>

<!-- register form -->
<!DOCTYPE html>

<!-- login form box -->
<style>
 /* Bordered form */
form {
    border: 5px solid darkgrey;
    max-width: 500px;
    margin: auto;
    background-color: white;
}

body {
    background-color: darkcyan;
}

/* Full-width inputs */
input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: lightgreen;
    color: white;
    font-size: medium;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.output {
    text-align: center;
    color: darkred;
    font-size: small;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: darkslateblue;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    background-color: white;
}

/* Avatar image */
img.avatar {
    width: 40%;
    border-radius: 50%;
    background-color: white;
}

/* Add padding to containers */
.container {
    padding: 16px;
    max-width: 500px;
    background-color: white;
}

/* The "Forgot password" text */
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}

</style>
<form class="register-form" method="post" action="register.php" name="registerform">
 <div class="imgcontainer">
  <img src="DTLogo.png" alt="DollaTree" class"avatar">
 </div>
 <div class="container">
    <!-- the user name input field uses a HTML5 pattern check -->
    <!--<label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>-->
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="name" required />

    <!-- the email input field uses a HTML5 email type check -->
    <!--<label for="login_input_email">User's email</label>-->
    <input id="login_input_email" class="login_input" type="email" name="user_email" placeholder="email address" required />

   <!-- <label for="login_input_password_new">Password (min. 6 characters)</label>-->
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" placeholder="password" pattern=".{6,}" required autocomplete="off" />

    <!--<label for="login_input_password_repeat">Repeat password</label>-->
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" placeholder="repeat password" pattern=".{6,}" required autocomplete="off" />
    <?php
	echo '<p class="output">'; echo $output; echo '</p>';
    ?>
    <button type="submit" name="register" value="register">Register</button>
 </div>
 <div class="container" style="background-color:darkgrey">
  <a href="signIn.php"><button type="button" class="cancelbtn">Log In</button></a>
 </div>

</form>

<!-- backlink-->
<!--<a href="signIn.php">Back to Login Page</a>-->

