<?php
session_start();
echo "Welcome: ";

if (isset($_SESSION['user_name'])) { 
	echo $_SESSION['user_name'];
} else {
	echo "Guest";
}
?>
