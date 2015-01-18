<?php
/****************************************************************************
 * DRBPoll
 * http://www.dbscripts.net/poll/
 * 
 * Copyright © 2007-2010 Don B 
 ****************************************************************************/

// Valid control types
$CONTROL_COMBOBOX = 1;
$CONTROL_RADIOBUTTONS = 2;
 
// This class is used to define the polls and their possible values
// See config.php for usage.
class Poll {
	
	// Values in poll
    var $values = array();
    var $urls = array();
    
    // Poll question
    var $question;
    
    // Return to page
    var $returnToURL = "..";

    // Legend
    var $legend = "";
    
    // Control type ($CONTROL_COMBOBOX or $CONTROL_RADIOBUTTONS)
    var $control_type;

    // Contructor
    function Poll() {
    	global $CONTROL_RADIOBUTTONS;
    	$this->control_type = $CONTROL_RADIOBUTTONS;
    }

    function add_value($id, $description, $url = NULL) {
        $this->values[$id] = $description;
        $this->urls[$id] = $url;
    }

}

?>