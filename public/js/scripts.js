/**
 * scripts.js
 *
 * Computer Science 50
 * Problem Set 7
 *
 * Global JavaScript, if any.
 */
$(document).ready(function(){

	$("#chatSendButton").click(function(){
		var message = $("#messageText").val();
        $("#incomingMessages").append("<div class='message'>Justin Meretab: " + message + "</div>");
        $("#incomingMessages").scrollTop($("#incomingMessages")[0].scrollHeight);
        $("#messageText").val("");
    });


});