<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct(){
	    parent::__construct();
	}

	public function home()
	{
		try{
			$myJson = file_get_contents('https://newsapi.org/v2/top-headlines?country=id&apiKey=6ddb1515441c4fc288275a4e023d8909');

			$data['jsonIterator'] = new RecursiveIteratorIterator(
			    new RecursiveArrayIterator(json_decode($myJson, TRUE)),
			    RecursiveIteratorIterator::SELF_FIRST);

			// $jsonIterator = new RecursiveIteratorIterator(
			//     new RecursiveArrayIterator(json_decode($myJson, TRUE)),
			//     RecursiveIteratorIterator::SELF_FIRST);

			// foreach ($jsonIterator as $key => $val) {
			//     if(is_array($val)) {
			//         // echo "$key:<br/>";
			//     } else {
			//         echo "$key => $val<br/>";
			//     }
			// }
			$this->load->view('home', $data);
		}catch(Exception $e){
			// echo "Please check your internet connection and refresh the page";
  var_dump($e->getMessage());
		}
	}

	public function category($cat)
	{
		$myJson = file_get_contents('https://newsapi.org/v2/top-headlines?country=id&category='.$cat.'&apiKey=6ddb1515441c4fc288275a4e023d8909');

		$data['jsonIterator'] = new RecursiveIteratorIterator(
		    new RecursiveArrayIterator(json_decode($myJson, TRUE)),
		    RecursiveIteratorIterator::SELF_FIRST);
		$data['cat']=$cat;

		// $jsonIterator = new RecursiveIteratorIterator(
		//     new RecursiveArrayIterator(json_decode($myJson, TRUE)),
		//     RecursiveIteratorIterator::SELF_FIRST);

		// foreach ($jsonIterator as $key => $val) {
		//     if(is_array($val)) {
		//         // echo "$key:<br/>";
		//     } else {
		//         echo "$key => $val<br/>";
		//     }
		// }
		$this->load->view('category', $data);
	}

	// public function post($key)
	// {
	// 	$myJson = file_get_contents('https://newsapi.org/v2/top-headlines?country=id&category='.$cat.'&apiKey=6ddb1515441c4fc288275a4e023d8909');

	// 	$data['jsonIterator'] = new RecursiveIteratorIterator(
	// 	    new RecursiveArrayIterator(json_decode($myJson, TRUE)),
	// 	    RecursiveIteratorIterator::SELF_FIRST);
	// 	// $data['cat']=$cat;
	// 	$data['$key'] = $key;

	// 	// $jsonIterator = new RecursiveIteratorIterator(
	// 	//     new RecursiveArrayIterator(json_decode($myJson, TRUE)),
	// 	//     RecursiveIteratorIterator::SELF_FIRST);

	// 	// foreach ($jsonIterator as $key => $val) {
	// 	//     if(is_array($val)) {
	// 	//         // echo "$key:<br/>";
	// 	//     } else {
	// 	//         echo "$key => $val<br/>";
	// 	//     }
	// 	// }
	// 	$this->load->view('single-post', $data);
	// }
}
