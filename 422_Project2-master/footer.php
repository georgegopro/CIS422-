<div id="footer">
        <table>
                <tr>
                        <td width = "100px"><a href="index.php">Home</a></td>
                        <td width = "100px"><a href="dolla.php">Games</a></td>
<?php session_start();
	if(isset($_SESSION['user_name'])) {
		echo '<td width = "100px"><a href="signIn.php?logout">Log Out</a></td>';
	}else{
		echo '<td width = "100px"><a href="signIn.php">Log In</a></td>';
                echo '<td width = "100px"><a href="register.php">Sign Up</a></td>';
	}
?>
                </tr>

                <tr><td><br></td></tr>

                <tr>
                        <td width = "100px"><a href="tictactoe.php">Tic Tac Toe</a></td>
                        <td width = "100px"><a href="memorycard.php">Memory Card</a></td>
                        <td width = "100px"><a href="blockbreaker.php">Brick Basher</a></td>  
                        <td width = "100px"><a href="navigator.php">Duck Flight</a></td>
                </tr>
        </table>
</div>

