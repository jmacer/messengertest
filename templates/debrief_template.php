<!DOCTYPE html> 
<html> 
<head> 
    <title>Pong++</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
    <<link rel="stylesheet" href="../public/css/stylesheet.css"/>
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>
    <script src="../public/js/jquery.cookie.js"></script>
    
</head> 
<body> 

<div data-role="page">

    <div data-role="header">
        <h1>Pong++</h1>
    </div><!-- /header -->
    <div data-role="content">


<div align='center' id='winner'>    
    
</div>
<div align='center' id='mvp'>

</div>
 </br>
 <a href="../public/index.php" data-role="button">Home Menu</a>
 <a href="../public/game.php" data-role="button">Rematch</a>

 <script>
	var winner = 'default';
	var mvp;
	var mvpname = 'default name';
	var mvphits = 'default cups';
	if (teamup==TEAM1) {
	    	winner = "TEAM 1"
	    }
	    else {
	    	winner = "TEAM 2" 
	    }

	if (PLAYER1.hits > (PLAYER2.hits && PLAYER3.hits && PLAYER4.hits)) {
		mvp = PLAYER1; 
	} 
	else if (PLAYER2.hits > (PLAYER3.hits && PLAYER4.hits)) {
		mvp = PLAYER2; 
	} 
	else if (PLAYER3.hits > PLAYER4.hits) {
		mvp = PLAYER3; 
	} 
	else if (PLAYER4.hits > PLAYER3.hits) {
		mvp = PLAYER4; 
	} 

	$('#winner').append(
		'<strong>Winner: ' + winner + ' !</strong>'
	);
	
	$('#mvp').append(
		'<strong>MVP: ' + mvp.name + ' with ' + mvp.hits + ' cups hits.</strong>'
	);
	
 </script>

 <div data-role="footer" data-position="fixed"> 
					Copyright &#169; James Acer
				</div> 

			</div><!-- /content -->

		</div><!-- /page -->

	</body>

</html>