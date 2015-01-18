<?php
/****************************************************************************
 * DRBPoll
 * http://www.dbscripts.net/poll/
 * 
 * Copyright © 2007-2010 Don B 
 ****************************************************************************/
 
require_once(dirname(__FILE__) . '/poll.php');
 
 // Handle action
if(isset( $_GET[$POLL_ID_PARAM_NAME] )) {
	
	// Get poll ID
	global $requested_poll_id;
	$requested_poll_id = trim($_GET[$POLL_ID_PARAM_NAME]);
	
	// Validate poll ID
	if( is_valid_poll_id($requested_poll_id) ) {
		
		// Display results page from template
		include_once(dirname(__FILE__) . '/template/results.php');
		
	} else {
		
		die("Invalid poll ID.");
		
	}
	
	
} else {

	die("Invalid request.");
	
}
 
 
 ?>
 