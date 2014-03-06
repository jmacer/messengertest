
<form action="game.php" method="post" id="setupform"> 
	
	<strong>Player 1</strong>
	<label><input type="checkbox" id="checkbox-1" class="no-profile" name="checkbox-1" data-mini="true"/> Don't Use A Profile </label>
	
	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="name-1" id="name-1" value="" placeholder="Name"/>		
	</div>

	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="username-1" id="username-1" value placeholder="Username"/>
	</div>

	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="password-1" id="password-1" value  placeholder="Password"/>
	</div>

	
	<strong>Player 2</strong>
	<label><input type="checkbox" class="no-profile" id="checkbox-2" name="checkbox-2" data-mini="true"/> Don't Use A Profile </label>
	
	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="name-2" id="name-2" value="" placeholder="Name"/>		
	</div>

	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="username-2" id="username-2" value placeholder="Username"/>
	</div>

	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="password-2" id="password-2" value  placeholder="Password"/>
	</div>

	<strong>Player 3</strong>
	<label><input class="no-profile" type="checkbox" id="checkbox-3" name="checkbox-3" data-mini="true"/> Don't Use A Profile </label>
	
	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="name-3" id="name-3" value="" placeholder="Name"/>		
	</div>

	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="username-3" id="username-3" value placeholder="Username"/>
	</div>

	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="password-3" id="password-3" value  placeholder="Password"/>
	</div>

	<strong>Player 4</strong>
	<label><input class="no-profile" type="checkbox" id="checkbox-4" name="checkbox-4" data-mini="true"/> Don't Use A Profile </label>
	
	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="name-4" id="name-4" value="" placeholder="Name"/>		
	</div>

	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="username-4" id="username-4" value placeholder="Username"/>
	</div>

	<div data-role="fieldcontain" class="ui-hide-label">		
		<input type="text" name="password-4" id="password-4" value  placeholder="Password"/>
	</div>

	<fieldset>
    	<button type="submit" id='startgame' data-theme="b" name="submit-gamesetup">Start Game</button>
	</fieldset>


</form>

<script>
	
	// store name inputs as cookies
	$(":input").change(function () { 
		$.cookie('p1name', $("#name-1").val());
		$.cookie('p2name', $("#name-2").val());
		$.cookie('p3name', $("#name-3").val());
		$.cookie('p4name', $("#name-4").val());
	});

	// check all of these boxes as the page loads (makes more sense given that database is not in place)
	$(".no-profile").each(function() {
		$this = $(this);
		$this.attr('checked', true);
	})
	// disable fields accordingly
	$(document).ready(function () {
		$("#username-1").attr('disabled', true);
		$("#password-1").attr('disabled', true);
		$("#username-2").attr('disabled', true);
		$("#password-2").attr('disabled', true);
		$("#username-3").attr('disabled', true);
		$("#password-3").attr('disabled', true);
		$("#username-4").attr('disabled', true);
		$("#password-4").attr('disabled', true);
	});


	// if these checkboxes are checked/unchecked by user, disable/enable the username and password fields
	$("#checkbox-1").click(function(){   
    	$("#username-1").attr('disabled', this.checked)
    	$("#password-1").attr('disabled', this.checked)
	});

	$("#checkbox-2").click(function(){   
    	$("#username-2").attr('disabled', this.checked)
    	$("#password-2").attr('disabled', this.checked)
	});

	$("#checkbox-3").click(function(){   
    	$("#username-3").attr('disabled', this.checked)
    	$("#password-3").attr('disabled', this.checked)
	});

	$("#checkbox-4").click(function(){   
    	$("#username-4").attr('disabled', this.checked)
    	$("#password-4").attr('disabled', this.checked)
	});



	

		
</script>

