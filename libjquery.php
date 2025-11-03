<?php
class lJquery{
	private $lib;
	
	function __construct(){
		//$this->lib = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js";
		//$this->lib = "http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js";
		//$this->lib = "https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js";
		//$this->lib = "jquery-1.10.2.min.js";
		$this->lib = "jquery/jquery-1.6.0.min.js";
	}
	
	function libreria(){
        echo '<script type="text/javascript" src="'.$this->lib.'"></script>';	
	}
}?>