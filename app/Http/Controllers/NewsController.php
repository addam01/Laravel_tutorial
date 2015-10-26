<?php

namespace App\Http\Controllers;
	/**
	* 
	*/
	class NewsController extends Controller
	{
		public function home(){
			return view('news.create');
		}
		public function index()
		{
			//Passing data to View, the view will use the array KEY as a variable name
			$data = [];
			$data['name'] = "Herp Derp";
			$data['address'] = "Otaku Zone";
			$data['fruits'] = ['Banana','Durian','Passion'];
			return view('news.list', $data);		
		}
		public function getJSON(){
			$data = array('status' => 'ok','message' => 'succesfully delivered');
			return response() ->json($data);
		}
		public function store(){
			return "hello";
		}
	}
?>
