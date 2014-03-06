<?php
	require("../includes/config.php");
	/* Attempts to handle game data and ultimately update a database
	$player1 = array(
	    "name" => "P1",
	    "username" => "null",
	    "hits" => "null",
	    "rimjobs" => "null",
	    "shots" => "shots",  

	);

	$player2 = array(
	    "name" => "P2",
	    "username" => "null",
	    "hits" => "null",
	    "rimjobs" => "null",  
    	"shots" => "shots",
	);

	$player3 = array(
	    "name" => "null",
	    "username" => "null",
	    "hits" => "null",
	    "rimjobs" => "null",  
    	"shots" => "shots",
	);

	$player4 = array(
	    "name" => "null",
	    "username" => "null",
	    "hits" => "null",
	    "rimjobs" => "null",  
	    "shots" => "shots",
	);

	$player1=$_POST["PLAYER1"]; 
    $player2=$_POST["PLAYER2"]; 
    $player3=$_POST["PLAYER3"]; 
    $player4=$_POST["PLAYER4"]; 
    $team1=$_POST["TEAM1"]; 
    $team1=$_POST["TEAM2"]; 
    $winners;
    $mvp;

    if ($team1["hits"] > $team2["hits"]) {
    	$winners = "TEAM 1"
    }
    else {
    	$winners = "TEAM 2" 
    }

	if ($player1["hits"] > ($player2["hits"] && $player3["hits"] && $player4["hits"])) {
		$mvp = $player1; 
	} 
	else if ($player2["hits"] > ($player3["hits"] && $player4["hits"])) {
		$mvp = $player2; 
	} 
	else if ($player3["hits"] > $player4["hits"]) {
		$mvp = $player3; 
	} 
	else  {
		$mvp = $player4; 
	} 
	*/     
 	render("../templates/debrief_template.php");

?>