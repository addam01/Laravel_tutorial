<?php

namespace App\Http\Controllers;
	/**
	* 
	*/
	class NewsController extends Controller
	{
		
		public function index()
		{
			//Passing data to View, the view will use the array KEY as a variable name
			$data = [];
			$data['name'] = "Herp Derp";
			$data['address'] = "Otaku Zone";
			$data['fruits'] = ['Banana','Durian','Passion'];
			return view('news.list', $data);		
		}
	}
?>
