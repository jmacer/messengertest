<?php
?>
<html>	

	<head> 
	    <title>Messenger</title> 
	    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	    <link rel="stylesheet" href="../public/css/stylesheet.css"/>
	    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	    <script src="../public/js/jquery.cookie.js"></script>
	    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
		
		<!-- Code for displaying sent messages in the conversation -->
		<script src="../public/js/scripts.js"></script>
	    
	</head> 	
	
	<body> 

	<div data-role="page" id="homescreen">

		<div data-role="panel" data-display="overlay" id="settings-panel-1">
		    <div class="ui-panel-inner">
		    	<a href="#" class="ui-btn ui-shadow">Settings</a>	
		    	<a href="#" class="ui-btn ui-shadow">Log Out</a>	
	    	</div>
		</div><!-- /panel -->

		<div data-role="panel" data-display="overlay" id="new-group-panel" data-position="right">
		    <div class="ui-panel-inner">
		    	<strong>Start a new group</strong>
		    	<input type="text" name="group-name" id="search" value="" placeholder="Group name">
		    	<div data-role="collapsible" data-theme="b" data-content-theme="a">
					<h2>Add contacts</h2>
			    	<ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true" data-icon="plus" data-filter-placeholder="Enter name/number">
					    <li><a href="#">Adam Kinkaid</a></li>
					    <li><a href="#">Alex Wickerham</a></li>
					    <li><a href="#">Avery Johnson</a></li>
					    <li><a href="#">Bob Cabot</a></li>
					    <li><a href="#">Caleb Booth</a></li>
					    <li><a href="#">Christopher Adams</a></li>
					    <li><a href="#">Culver James</a></li>
					</ul>
				</div>
				<a href="#" class="ui-btn ui-shadow">Create Group</a>		    	
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
			    	<div class="ui-bar"> <a href="#family">
			    		Family </br>
			    		<img src="img/family.jpg" />
		    		</a> </div>
	    		</div>

	    		<div class="ui-block-b">
			    	<div class="ui-bar"> <a href="index.php">
			    		Basketball </br>
			    		<img src="img/team.jpg"/>
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

	<div data-role="page" id="family" data-add-back-btn="true"><!-- Group screen prototype -->

		<div data-role="panel" data-display="overlay" id="settings-panel-1">
		    <div class="ui-panel-inner">
		    	<label for="notifications">Notifications?</label>
					<select name="notifications" id="notifications" data-role="slider" data-mini="true">
						<option value="on">On</option>
						<option value="off">Off</option>
					</select> 
					<div data-role="collapsible" data-theme="b" data-content-theme="a">
					<h2>Add members</h2>
				    	<ul data-role="listview" data-autodividers="true" data-filter="true" data-inset="true" data-icon="plus" data-filter-placeholder="Enter name/number">
						    <li><a href="#">Adam Kinkaid</a></li>
						    <li><a href="#">Alex Wickerham</a></li>
						    <li><a href="#">Avery Johnson</a></li>
						    <li><a href="#">Bob Cabot</a></li>
						    <li><a href="#">Caleb Booth</a></li>
						    <li><a href="#">Christopher Adams</a></li>
						    <li><a href="#">Culver James</a></li>
						</ul>
					</div>
	    	</div>
		</div><!-- /panel -->

		<div data-role="panel" data-display="overlay" id="new-thread-panel" data-position="right">
		    <div class="ui-panel-inner">
		    	<strong>Start a new thread</strong>
		    	<input type="text" name="thread-name" id="search" value="" placeholder="Thread name">		    	
		    	<div data-role="collapsible" data-theme="a" data-content-theme="a">
					<h2>Set notifications</h2>
			    	<ul data-role="listview" data-inset="true" data-icon="">
					    <li>
					    	<div data-role="fieldcontain">
								<label for="flip-1">Mom</label>
									<select name="flip-1" id="flip-1" data-role="slider" data-mini="true">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select> 
							</div>
						</li>
					    <li>
					    	<div data-role="fieldcontain">
								<label for="flip-2">Dad</label>
									<select name="flip-2" id="flip-2" data-role="slider" data-mini="true">
										<option value="yes">Yes</option>
										<option value="no">No</option>
							</div>
						</li>
					    <li>
					    	<div data-role="fieldcontain">
								<label for="flip-3">Robbie</label>
									<select name="flip-3" id="flip-3" data-role="slider" data-mini="true">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select> 
							</div>
						</li>
						<li>
					    	<div data-role="fieldcontain">
								<label for="flip-4">Kim</label>
									<select name="flip-4" id="flip-4" data-role="slider" data-mini="true">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select> 
							</div>
						</li>
						<li>
					    	<div data-role="fieldcontain">
								<label for="flip-5">Patrick</label>
									<select name="flip-5" id="flip-5" data-role="slider" data-mini="true">
										<option value="yes">Yes</option>
										<option value="no">No</option>
									</select> 
							</div>
						</li>
					</ul>
				</div><!-- /list -->
				<textarea cols="40" rows="8" name="textarea" id="textarea" placeholder="Enter message"></textarea>
				<a href="#" class="ui-btn ui-shadow">Start Thread</a>
			</div>    	
		</div><!-- /panel -->		

		<div data-role="header">
			<div class="ui-btn-left">
				<a href="#settings-panel-1" data-role="button" data-icon="gear" data-iconpos="notext">Settings</a>
	        	<a href="#" data-role="button" data-rel="back" data-icon="arrow-l" data-iconpos="notext">Back</a>
    		</div>
	        <h1>Family</h1>
	        <div class="ui-btn-right">
	        	<a href="#new-thread-panel" data-role="button" data-icon="plus" data-iconpos="notext">New Thread</a>
	    	</div>
	    </div><!-- /header -->

	    <div data-role="content" >
	    	<fieldset class="ui-grid-a">
			    <div class="ui-block-a">
			    	<div class="ui-bar"> <a href="#convo-screen">
			    		Graduation plans </br>
		    		</a> </div>
	    		</div>

	    		<div class="ui-block-b">
			    	<div class="ui-bar"> <a href="index.php">
			    		Next weekend </br>
		    		</a> </div>
	    		</div>
			</fieldset>

			<fieldset class="ui-grid-a">

			    <div class="ui-block-a">
			    	<div class="ui-bar"> <a href="index.php">
			    		Lisa's wedding </br>
		    		</a> </div>
	    		</div>

	    		<div class="ui-block-b">
			    	<div class="ui-bar"> <a href="index.php">
			    		August vacation </br>
		    		</a> </div>
	    		</div>	    		

			</fieldset>

			<fieldset class="ui-grid-a">

			    <div class="ui-block-a">
			    	<div class="ui-bar"> <a href="index.php">
			    		Basketball game </br>
		    		</a> </div>
	    		</div>

	    		<div class="ui-block-b">
			    	<div class="ui-bar"> <a href="index.php">
			    		Study Abroad</br>
		    		</a> </div>
	    		</div>	    		

			</fieldset>
		

		<div data-role="footer" data-position="fixed"> 
				Copyright &#169; James Acer | Justin Meretab
		</div> <!-- /footer -->
		</div><!-- /content -->
	</div><!-- /page -->


	<div data-role="page" id="convo-screen">
		<div data-role="header">
			<div class="ui-btn-left">
				<a href="#settings-panel-1" data-role="button" data-icon="gear" data-iconpos="notext">Settings</a>
	        	<a href="#" data-role="button" data-rel="back" data-icon="arrow-l" data-iconpos="notext">Back</a>
    		</div>
	        <h1>Graduation Plans</h1>
	        <div class="ui-btn-right">
	        	<a href="#new-thread-panel" data-role="button" data-icon="plus" data-iconpos="notext">New Thread</a>
	    	</div>
		</div>
		<div data-role="content">
			<!-- Fake Messages -->
			<div id="incomingMessages" name="incomingMessages" class="msgContainerDiv" >
				<div class='message'>James Acer: Hey dudes!</div>
				<div class='message'>Ankur Patel: Shut up Bro</div>				
			</div>
			<!-- Text Box for adding new messages -->
        	<label for="messageText"><strong>Message:</strong></label>
        	<textarea name="messageText" id="messageText"></textarea>
        	<div class="ui-block-b"><button data-theme="a" id="chatSendButton" name="chatSendButton">Send</input>
		<div data-role="footer" data-position="fixed"> 
				Copyright &#169; James Acer | Justin Meretab
		</div> <!-- /footer -->
		</div><!-- /content -->
	</div><!-- /page -->









	</body>
</html>

