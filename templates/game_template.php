



<div data-role="fieldcontain" id="Rack-A">

	<div>
		<fieldset style="position: relative; left: 12.5%;" data-role="controlgroup" data-type="horizontal" class="Rack-A">
		    <input type="checkbox" name="cup-a1" id="a1" class="custom activecup" />
		    <label for="a1">1</label>
		 
		    <input type="checkbox" name="cup-a2"  id="a2" class="custom activecup" />
		    <label for="a2"><em>2</em></label>
		 
		    <input type="checkbox" name="cup-a3"  id="a3" class="custom activecup" />
		    <label for="a3">3</label>

		    <input type="checkbox" name="cup-a4"  id="a4" class="custom activecup" />
		    <label for="a4">4</label>  

		</fieldset>
	</div>

	<fieldset style="position: relative; left: 14%;" data-role="controlgroup" data-type="horizontal" class="Rack-A">
	    <input type="checkbox" name="cup-a5" id="a5" class="custom activecup" />
	    <label for="a5">5</label>
	 
	    <input type="checkbox" name="cup-a6"  id="a6" class="custom activecup" />
	    <label for="a6"><em>6</em></label>
	 
	    <input type="checkbox" name="cup-a7"  id="a7" class="custom activecup" />
	    <label for="a7">7</label>

	</fieldset>

	<fieldset style="position: relative; left: 15.5%;" data-role="controlgroup" data-type="horizontal" class="Rack-A">
	    <input type="checkbox" name="cup-a8" id="a8" class="custom activecup" />
	    <label for="a8">8</label>
	 
	    <input type="checkbox" name="cup-a9"  id="a9" class="custom activecup" />
	    <label for="a9"><em>9</em></label>

	</fieldset>

	<fieldset style="position: relative; left: 17%;" data-role="controlgroup" data-type="horizontal" class="Rack-A">
	    <input type="checkbox" name="cup-a10" id="a10" class="custom activecup" />
	    <label for="a10">10</label>
	</fieldset>

</div>

<div class="ui-grid-a">
	<div class="ui-block-a">
		<div id = 'player-3-text'> </div> 
		<div id="turn-3">
			<img src="../public/img/ball.jpeg" style="height: 10%; width: 10%;">
		</div>
	</div>

	<div class="ui-block-b" style="text-align:right !important;">
		<div id = 'player-4-text'> </div> 
		<div id="turn-4">
			<img src="../public/img/ball.jpeg" style="height: 10%; width: 10%;">
		</div>
	</div>
</div><!-- /grid-a -->

<div data-role="popup" id="errormessage">
	<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
	<p>Error! Make sure exactly one cup is selected to record a hit or rimjob. For island, two cups must be selected.</p>
</div>


<div data-role="fieldcontain">
	<fieldset>
		<input type="checkbox" name="island" id="island" value="island" data-mini="true"/>
	    <label for="island">Island?</label>
    </fieldset>

	<fieldset style="text-align:center !important;" data-role="controlgroup" data-type="horizontal">
         	<input type="radio" name="shot-result" id="airball" value="airball" />
         	<label for="airball">Airball</label>

         	<input type="radio" name="shot-result" id="rimjob" value="rimjob"  />
         	<label for="rimjob">Rimjob</label>

         	<input type="radio" name="shot-result" id="hit" value="hit"  />
         	<label for="hit">Hit!</label>
    </fieldset>

	
    <fieldset>
    	<button type="submit" id="recordshot" data-theme="b" name="submit-shot" value="">Record shot</button>
	</fieldset>
	
<div class="ui-grid-a">
	<div class="ui-block-a">
		<div id = 'player-1-text'> </div> 
		<div id="turn-1">
			<img src="../public/img/ball.jpeg" style="height: 10%; width: 10%;">
		</div>
	</div>

	<div class="ui-block-b" style="text-align:right !important;">
		<div id = 'player-2-text'> </div>
		<div id="turn-2">
			<img src="../public/img/ball.jpeg" style="height: 10%; width: 10%;">
		</div>
	</div>
</div><!-- /grid-a -->

<div data-role="fieldcontain" id="Rack-B">

	<fieldset style="position: relative; left: 17.5%;" data-role="controlgroup" data-type="horizontal" class="Rack-B">
	    <input type="checkbox" name="cup-b10" id="b10" class="custom activecup rackb" />
	    <label for="b10">10</label>
	</fieldset>

	<fieldset style="position: relative; left: 15.7%;" data-role="controlgroup" data-type="horizontal" class="Rack-B">
	    <input type="checkbox" name="cup-b9"  id="b9" class="custom activecup rackb" />
	    <label for="b9"><em>9</em></label>
	    <input type="checkbox" name="cup-b8" id="b8" class="custom activecup rackb" />
	    <label for="b8">8</label> 
	    
	</fieldset>

	<fieldset style="position: relative; left: 14%;" data-role="controlgroup" data-type="horizontal" class="Rack-B">
		<input type="checkbox" name="cup-b7"  id="b7" class="custom activecup" />
	    <label for="b7">7</label>  
	    <input type="checkbox" name="cup-b6"  id="b6" class="custom activecup" />
	    <label for="b6"><em>6</em></label>	 
	    <input type="checkbox" name="cup-b5" id="b5" class="custom activecup rackb" />
	    <label for="b5">5</label>
	</fieldset>
	

	<div>
		<fieldset style="position: relative; left: 12.5%;" data-role="controlgroup" data-type="horizontal" class="Rack-B">
		    
		    <input type="checkbox" name="cup-b4"  id="b4" class="custom activecup rackb" />
		    <label for="b4">4</label> 
		    <input type="checkbox" name="cup-b3"  id="b3" class="custom activecup rackb" />
		    <label for="b3">3</label>		     
		    <input type="checkbox" name="cup-b2"  id="b2" class="custom activecup rackb" />
		    <label for="b2"><em>2</em></label>
	    	<input type="checkbox" name="cup-b1" id="b1" class="custom activecup rackb" />
		    <label for="b1">1</label>
		 
		</fieldset>
	</div>
</div>


</br>
<a href="../public/index.php">Quit game</a>


<script type="text/javascript">
	
	// declare arrays to track each player's and each team's progress
	var PLAYER1 = {
        name: 'player1',
        username: null,
        shots: 0,
        hits: 0,
        rimjobs: 0,
        streak: 0,
        island: true,
        fire: false,	    
	};

	var PLAYER2 = {	    
        name: 'player2',
        username: null,
        shots: 0,
        hits: 0,
        rimjobs: 0,
        streak: 0,
        island: true,
        fire: false,	    
	};

	var PLAYER3 = {	    
        name: 'player3',
        username: null,
        shots: 0,
        hits: 0,
        rimjobs: 0,
        streak: 0,
        island: true,
        fire: false,	    
	};


	var PLAYER4 = {	    
        name: 'player4',
        username: null,
        shots: 0,
        hits: 0,
        rimjobs: 0,
        streak: 0,
        island: true,
        fire: false,	    
	};


	var TEAM1 = {	           
        shots: 0,
        hits: 0,
        rimjobs: 0,
        balls_back: 0,
	};


	var TEAM2 = {	           
        shots: 0,
        hits: 0,
        rimjobs: 0,
        balls_back: 0,    
	};

	
	// assign names from these cookies, which were populated on the previous page.
	PLAYER1.name = $.cookie('p1name');
	PLAYER2.name = $.cookie('p2name');
	PLAYER3.name = $.cookie('p3name');
	PLAYER4.name = $.cookie('p4name');
		
	

	
	//Display players' names
	$('#player-1-text').append(
		'<strong>Player 1: ' + PLAYER1.name + '</strong>'
	);


	$('#player-2-text').append(
		'<strong>Player 2: ' + PLAYER2.name + '</strong>'
	);

	$('#player-3-text').append(
		'<strong>Player 3: ' + PLAYER3.name + '</strong>'
	);

	$('#player-4-text').append(
		'<strong>Player 4: ' + PLAYER4.name + '</strong>'
	);


	// global variables to track the game's progress
	var airball = false;
	var rimjob = false;
	var hit = false;
	var island = false; 
	var turn = 0;
	var current_turn= 0;
	var selectcups = 0; 

	// these will be temporary variables used to modify the PLAYER and TEAM arrays declared above
	var playerup = PLAYER1;
	var teamup = TEAM1;
	
	var err = false;

	// when the game starts, Player 1 is up by default. This disables the rack that Team 2 shoots at, and displays the pong ball only next to Player 1's name.
	$('.Rack-A').removeClass('ui-disabled');
	$('.Rack-B').addClass('ui-disabled');
	$('#turn-2').fadeOut(); 
	$('#turn-3').fadeOut();
	$('#turn-4').fadeOut();
	
	// modify the style of all checkboxes to be red (like solo cups)
	$('.activecup').css( "background", "#ed1c24");
	
	// also modify the style of all labels to be red. Modify the border-radius so that square checkboxes appear rounded like cups
	$('.activecup').each(function() {
		$this=$(this);
		var $label = $this.next('label');
		$label.css( "border-radius", "50%");
		$label.css( "width", "80%");
		$label.css( "color", "#ffffff");
		$label.css( "background", "#ed1c24");		
	});


	// if a cup is selected, highlight it a darker shade of red. Also use selectcups to track how many cups are selected at any one time
	$('.activecup').click(function() {
		$this=$(this);
		var $label = $this.next('label');
		if ($this.is(':checked')){
			$label.css( "background", "#905151");	
			selectcups++;
		}
		else {
			$label.css( "background", "#ed1c24");
			selectcups--;
		}
					
	});


	// if airball button is selected, update all variables accordingly
	$('#airball').click(function () {
		
		$this = $(this);
		if ($this.is(':checked')) {
			airball=true;
			rimjob=false;
			hit=false;
		} 
		else {
			airball=false;
		}				
	});

	// if rimjob button is selected, update all variables accordingly
	$('#rimjob').click(function () {
		$this = $(this);
		if ($this.is(':checked')) {
			airball=false;
			rimjob=true;
			hit=false;
		} 
		else {
			rimjob=false;
		}		
	});

	// if hit button is selected, update all variables accordingly
	$('#hit').click(function () {
		$this = $(this);
		if ($this.is(':checked')) {
			airball=false;
			rimjob=false;
			hit=true;
		} 
		else {
			hit=false;
		}
	});

	// if island box is checked, update all variables accordingly
	$('#island').click(function () {
		$this = $(this);
		if ($this.is(':checked')) {
			island=true;
		} 
		else {
			island=false;
		}
	});				
	
	// if "record shot" button is clicked, attempt to register shot and update board
	$('#recordshot').click(function() {
	    err = false;	       

	    // if airball is selected, there is not much to check
	    if (airball == true) {
	    	err = false; 
	    }

	    // if hit is selected, there must be only one cup selected (uneless island is also checked, in which case two cups must be selected)
	    else if (hit == true) {
	    	if ((island == false && selectcups != 1) ) {		
	    		err = true; 
	    	}
	    	else if (island == true && selectcups != 2 ) {	    		
	    		err = true;
	    	}
	    	else {	    		
	    		err = false;
	    	}
	    	
	    }

	    // if rimjob is selected, one cup must be selected
	    else if (rimjob == true) {	    	
	    	if (selectcups != 1) {
	    		err = true; 
	    	}
	    	else {
	    		err=false;
	    	}
	    }

	    // if none of the three shot results are selected, we have an error
	    else {	    	
	    	err = true; 
	    }

	    // show a generic error message asking user to fix the selections
	    if (err == true) {	    	
	    	$( "#errormessage" ).popup( "open" );	    		        	
	    }

	    // if there was no error, record the shot
	    else {

	    	// if island is selected, the playerup no longer has an island (one a game)
			if (island == true) {
					playerup.island = false; 
				}

			// if this was recorded as a hit
			if (hit == true) {	
				// hide the selected cup(s). We also need to hide the label associated with the checkbox to make it invisible.
				$('.activecup').each(function() {
	    			$this=$(this);
	    			var $label = $this.next('label');
	    			if ($this.is(':checked')) {       
	    				// create a wrapper around the now hidden cup elements, as we want to show blank space in their absence. 		
        				var $wrapper = $this.wrap('<div></div>').parent();  						
  						$wrapper.height( $label.height() );
  						$wrapper.width( $label.width() );
        				$this.hide(); 
        				$label.fadeOut();
   				 	}

  
 
				});

				// update all of these statistics				
				playerup.shots++;
				playerup.hits++;
				// track a player's consecutive makes so as to assign "fire"
				playerup.streak++;
				teamup.shots++;
				teamup.hits++;
				teamup.balls_back++;

				// if this was an island, two cups were hit
				if (island == true) {
					playerup.hits++;
					teamup.hits++;
				}
			}
					
			// if this shot merely hit the rim, increment the relevant statistic variables
			else if (rimjob == true) {
				playerup.shots++;
				playerup.rimjobs++;
				teamup.shots++;
				teamup.rimjobs++;
				// reset streak to zero
				playerup.streak = 0;
				// reset the team's "ball's back" count to zero, unless this is a miss following a make that earned "fire"
				if (playerup.fire == false || (playerup == PLAYER2 || PLAYER4)) {
					teamup.balls_back = 0; 
				}
				// no longer on fire
				playerup.fire = false; 
				
			}

			// if this is an airball, do pretty much the same thing as if it rimmed out
			else if (airball == true) {
				playerup.shots++;
				teamup.shots++;
				playerup.streak = 0;
				teamup.balls_back = 0; 
				if (playerup.fire == false || (playerup == PLAYER2 || PLAYER4)) {
					teamup.balls_back = 0; 
				}
				playerup.fire = false; 
			}
			
			// if this team has now hit 10 cups, the game is over
			if (teamup.hits >= 10) {
				//post game data to be handled in PHP
	    		$.post("debrief.php", {
	        		PLAYER1: PLAYER1,
	        		PLAYER2: PLAYER2,
	        		PLAYER3: PLAYER3,
	        		PLAYER4: PLAYER4,
	        		TEAM1: TEAM1,
	        		TEAM2: TEAM2,
	    		});	    		

	    		// load debriefing page
	    		$.mobile.changePage("../templates/debrief_template.php", {transition: "slideup", changeHash: false }); 
  
			}

			// if the playerup has made 3 straight, it is still his or her turn
			if (playerup.streak >= 3) {
				playerup.fire = true;
				turn = turn;
			}			

			// else if both players made cups during their team's turn, the team gets an additional turn
			else if (teamup.balls_back >= 2 && (playerup == PLAYER2 || PLAYER4)) {
				turn = turn - 1; 
			}	 

			// else increment turn and move to the next player
	    	else {
	    		turn++;
	    	}

	    	// uncheck all cups on the screen
	    	$('.activecup').each(function () {
	        		$this = $(this);
	        		$this.attr("checked",false).checkboxradio("refresh");
			});

			// uncheck the island box
			$('#island').attr("checked",false).checkboxradio("refresh");
			// set the island variable to false
			island = false; 

			// calculate whose turn it is
	    	current_turn = turn%4;
			switch (current_turn) {
		    	// Player 1
		    	case 0:
		    		playerup = PLAYER1;
		    		teamup = TEAM1;
		    		$('.Rack-A').removeClass('ui-disabled');
		    		$('.Rack-B').addClass('ui-disabled');
		    		$('#turn-1').fadeIn(); 
		    		$('#turn-2').fadeOut(); 
		    		$('#turn-3').fadeOut();
		    		$('#turn-4').fadeOut();
		    		break; 
		    	// Player 2 	
				case 1:
		    		playerup = PLAYER2;
		    		teamup = TEAM1;
		    		$('.Rack-A').removeClass('ui-disabled');
		    		$('.Rack-B').addClass('ui-disabled');
		    		$('#turn-1').fadeOut(); 
		    		$('#turn-2').fadeIn(); 
		    		$('#turn-3').fadeOut();
		    		$('#turn-4').fadeOut();
		    		break; 
				// Player 3
				case 2:
		    		playerup = PLAYER3;
		    		teamup = TEAM2;
		    		$('.Rack-A').addClass('ui-disabled');
		    		$('.Rack-B').removeClass('ui-disabled');
		    		$('#turn-1').fadeOut(); 
		    		$('#turn-2').fadeOut(); 
		    		$('#turn-3').fadeIn();
		    		$('#turn-4').fadeOut();
		    		break; 
				// Player 4
				case 3:
		    		playerup = PLAYER4;
		    		teamup = TEAM2;
		    		$('.Rack-A').addClass('ui-disabled');
		    		$('.Rack-B').removeClass('ui-disabled');
		    		$('#turn-1').fadeOut(); 
		    		$('#turn-2').fadeOut(); 
		    		$('#turn-3').fadeOut();
		    		$('#turn-4').fadeIn();
		    		break; 
		    }

		    // if the current player has already used their island, disable that checkbox. If not, enable it. 
		    if (playerup.island == false) {
		    	$('#island').attr('disabled', true).checkboxradio("refresh");	
		    }  
		    else {
		    	$('#island').attr('disabled', false).checkboxradio("refresh");
		    }
		    
		    // reset the selectcups variable
		    selectcups = 0;
    	}
    });

    

</script>
