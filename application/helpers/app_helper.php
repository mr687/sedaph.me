<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('ASSETS_DIR') ) {
	function ASSETS_DIR($q = ""){
		return base_url()."assets/".$q;
	}
}
