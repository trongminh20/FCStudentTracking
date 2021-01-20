<?php
	include "file.php ";
	require "file.php";
//  naming style for constant
    define("CONSTANT_NAME", "constant value");

	class ClassName{

		//naming style for variables			
		private $VariableName;
		public $VariableName;
		

		//naming style for functions

		public static function do_sth_function(){
			//do sth here
		}

		private function do_sth_function(){
			//do sth here
		}

	}

?>
<!--- HTML CODE AND PHP CODE SHOULD BE IN SEPERATE FILE IF POSSIBLE --> 
<!-- NAMING FOR HTML TAGS -->
<TAGNAME class="class_name" id="div-id"></TAGNAME>

<?php
// NAMING FILE
// File name should have
//"v_" if it is a View
// "c_" if it is a Controller
// "m_" if it is a Model
// for example:
// Home page view should be named: v_home_page.php
// Controller get data should be named : c_get_data.php
// Model Admin should be named: m_admin.php

/* COMMIT MESSAGE MUST INCLUDE
     *  WHO / branch committed
     *  FILE comitted
     *  WHAT changed /updated
     * */


	

	
