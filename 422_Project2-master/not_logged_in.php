<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            $output .= $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            $output .= $message;
        }
    }
}
?>

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
input[type=text], input[type=password] {
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
<body>
<form method="post" action="signIn.php" name="loginform">
 <div class="imgcontainer">
  <img src="DTLogo.png" alt="DollaTree" class"avatar">
 </div>
 <div class="container">
    <!--<label for="login_input_username">Username (or Email)</label>-->
    <input id="login_input_username" class="login_input" type="text" name="user_name" placeholder="Username or Email" required />

    <label for="login_input_password"> </label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" placeholder="Password" autocomplete="off" required />

    <button type="submit" name="login" value="Log in">Login</button>
    <?php
	echo '<p class="output">'; echo $output; echo '</p>';
    ?>
    <!--<input type="submit"  name="login" value="Log in" />-->
 </div>

 <div class="container" style="background-color:darkgrey">
  <a href="register.php"><button type="button" class="cancelbtn">Register</button></a>
 </div>
</form>
</body>
<!--<a href="register.php">Register new account</a>-->
