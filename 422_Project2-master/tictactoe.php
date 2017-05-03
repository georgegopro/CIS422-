<html>
<head>

<title>Dolla Tree TicTacToe</title>
<link href="dolla.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

	var count = 0;
	var squares = new Array(0,0,0,0,0,0,0,0,0);
	var tie = 0;

	function xWins(){
		alert("The Xs win.");
		window.location.reload();
		tie = 1;
	}
	
	function oWins(){
		alert("The Os win.");
		window.location.reload();
		tie = 1;
	}
	
	function selectSquare(place)
	{	
		if (squares[place] != 0)
		{
			alert("That square has already been chosen. You have to choose squares that have not been chosen yet.");
		}
		
		else if (count % 2 == 0)
		{
			makeX(place);
			count++;
			isGameOver();
		}
		
		else
		{
			makeO(place);
			count++;
			isGameOver();
		}
	} 

	function makeX(place)
	{
		document.getElementById('cell_' + place).innerHTML = '<img src="x.jpg" width="80" height="80"/>';	
		squares[place] = 1;
	}

	function makeO(place)
	{
		document.getElementById('cell_' + place).innerHTML = '<img src="o.png" width="80" height="80"/>';
		squares[place] = 2;
	}

	function isGameOver()
	{
		//X wins
		if((squares[0]==1 && squares[1]==1 && squares[2]==1) 
		|| (squares[3]==1 && squares[4]==1 && squares[5]==1)
		|| (squares[6]==1 && squares[7]==1 && squares[8]==1)
		|| (squares[0]==1 && squares[3]==1 && squares[6]==1)
		|| (squares[1]==1 && squares[4]==1 && squares[7]==1)
		|| (squares[2]==1 && squares[5]==1 && squares[8]==1)
		|| (squares[0]==1 && squares[4]==1 && squares[8]==1)
		|| (squares[2]==1 && squares[4]==1 && squares[6]==1))
		{
			xWins();
		}
		//O wins
		if((squares[0]==2 && squares[1]==2 && squares[2]==2) 
		|| (squares[3]==2 && squares[4]==2 && squares[5]==2)
		|| (squares[6]==2 && squares[7]==2 && squares[8]==2)
		|| (squares[0]==2 && squares[3]==2 && squares[6]==2)
		|| (squares[1]==2 && squares[4]==2 && squares[7]==2)
		|| (squares[2]==2 && squares[5]==2 && squares[8]==2)
		|| (squares[0]==2 && squares[4]==2 && squares[8]==2)
		|| (squares[2]==2 && squares[4]==2 && squares[6]==2))
		{
			oWins();
		}
		//game is full
		
		var temp = 1;
		for (var i = 0; i <= squares.length; i++)
		{
			if(squares[i] == 0)
			temp = 0;
		}
		if (temp == 1 && tie == 0)
		{
			alert("This is a draw. Press OK for new game.");
			window.location.reload()
		}
	}
	function reloadPage()
	{
		window.location.reload()
	}
</script>
</head>

<body>


<div id="header">
	Free Dolla Games
</div>

<div id="intro">
	Welcome to tic tac toe. To win you want to get three x's or three o's in a row.<br>
	The winning three can be in the same row, column, or diagonal line.<br>
</div>

<div id="pageStuff">
	<table id="table" name="table" border="1" align="center">
		<tr>
			<td id ="cell_0" height = "85px" width = "85px" name="zero" onClick="selectSquare(0)"></td>
			<td id ="cell_1" height = "85px" width = "85px" name="one" onClick="selectSquare(1)"></td>
			<td id ="cell_2" height = "85px" width = "85px" name="two" onClick="selectSquare(2)"></td>
		</tr>
		<tr>
			<td id ="cell_3" height = "85px" width = "85px" name="three" onClick="selectSquare(3)"></td>
			<td id ="cell_4" height = "85px" width = "85px" name="four" onClick="selectSquare(4)"></td>
			<td id ="cell_5" height = "85px" width = "85px" name="five" onClick="selectSquare(5)"></td>
		</tr>
		<tr>
			<td id ="cell_6" height = "85px" width = "85px" name="six" onClick="selectSquare(6)"></td>
			<td id ="cell_7" height = "85px" width = "85px" name="seven" onClick="selectSquare(7)"></td>
			<td id ="cell_8" height = "85px" width = "85px" name="eight" onClick="selectSquare(8)"></td>
		</tr>
	</table>

	<div id="button">
	<br>
		<a href = "tictactoe.php" class="button">New Game</a>
	</div>
	
</div>

<table border="1" align="center">
	<tr>
		<td id ="" height = "20px" width = "150px" name="">Your High Score</td>
		<td id ="" height = "20px" width = "150px" name="">Overall High Score</td>
	</tr>

	<tr>
		<td id ="" height = "20px" width = "150px" name=""></td>
		<td id ="" height = "20px" width = "150px" name=""></td>
	</tr>
</table>
<br><br>

<?php
	include_once('footer.php');
?>

</body>
</html>
