<?php
	
	namespace App\Http\Controllers;
	/**
	* 
	*/
	class MasterLayout extends Controller
	{
		
		public function index()
		{
			// Using the master Layout
			return view('child');		
		}
	}
?>