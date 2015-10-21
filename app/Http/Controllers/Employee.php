<?php
	namespace App\Http\Controllers;
	/**
	* 
	*/
	class Employee extends Controller
	{
		
		public function show()
		{
			// Using the master Layout
			return view('employeeChild');		
		}
		public function create(){
			
		}

	}

?>