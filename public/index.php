<?php
?>
<html>	

	<head> 
	    <title>Messenger</title> 
	    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	    <<link rel="stylesheet" href="../public/css/stylesheet.css"/>
	    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	    <script src="../public/js/jquery.cookie.js"></script>
	    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
	    
	</head> 	
	
	<body> 

	<div data-role="page" id="homescreen">

		<div data-role="panel" data-display="overlay" id="settings-panel-1">
		    <div class="ui-panel-inner">
		    	<p>Let's put some settings buttons in here...</p>
	    	</div>
		</div><!-- /panel -->

		<div data-role="panel" data-display="overlay" id="new-group-panel" data-position="right">
		    <div class="ui-panel-inner">
		    	<p>Let's put some buttons/contacts for making new groups in here...</p>
	    	</div>
		</div><!-- /panel -->

	    <div data-role="header">
	        <a href="#settings-panel-1" data-role="button" data-icon="gear" data-iconpos="notext">Settings</a>
	        <h1>Messenger</h1>
	        <a href="#new-group-panel" data-role="button" data-icon="plus" data-iconpos="notext">New Group</a>
	    </div><!-- /header -->

	    <div data-role="content">
	    	<fieldset class="ui-grid-a">

			    <div class="ui-block-a">
			    	<div class="ui-bar"> <a href="index.php">
			    		Family </br>
			    		<img src="img/family.jpg" />
		    		</a> </div>
	    		</div>

	    		<div class="ui-block-b">
			    	<div class="ui-bar"> <a href="index.php">
			    		Basketball </br>
			    		<img src="img/team.jpg" />
		    		</a> </div>
	    		</div>
			</fieldset>

			<fieldset class="ui-grid-a">

			    <div class="ui-block-a">
			    	<div class="ui-bar"> <a href="index.php">
			    		Cousins </br>
			    		<img src="img/cousins.jpg" />
		    		</a> </div>
	    		</div>

	    		<div class="ui-block-b">
			    	<div class="ui-bar"> <a href="index.php">
			    		My FRAT </br>
			    		<img src="img/frat.jpg" />
		    		</a> </div>
	    		</div>	    		

			</fieldset>

			<fieldset class="ui-grid-a">

			    <div class="ui-block-a">
			    	<div class="ui-bar"> <a href="index.php">
			    		Friends from home </br>
			    		<img src="img/highschool.jpg" />
		    		</a> </div>
	    		</div>

	    		<div class="ui-block-b">
			    	<div class="ui-bar"> <a href="index.php">
			    		Study Abroad</br>
			    		<img src="img/studyabroad.jpg" />
		    		</a> </div>
	    		</div>	    		

			</fieldset>



			<div data-role="footer" data-position="fixed"> 
				Copyright &#169; James Acer | Justin Meretab
			</div> 

		</div><!-- /content -->

		
	</div><!-- /page -->

	</body>

</html>

