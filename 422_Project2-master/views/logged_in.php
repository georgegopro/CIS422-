<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
If you close your browser and come back to this site, then you should still be logged in :)

<a href="signIn.php?logout">Logout</a>
