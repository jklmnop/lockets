<?php

class PagesController extends BaseController {

	public function index() {
    	return View::make('pages.index');
	}

	public function music() {
		$client = new TumblrAPI();
		$results = $client->get('music');

    	return View::make('pages.music', ['results' => $results]); 
	}

	public function live() {
		$client = new BandsintownAPI();
		$results = $client->getAllShows();

		//$results = Collection($results);

		return View::make('pages.live', ['results' => $results]);
	}

	public function video() {
		$client = new TumblrAPI();
		$results = $client->get('video');

		return View::make('pages.video', ['results' => $results]); 
	}

	public function shop() {
		$client = new TumblrAPI();
		$results = $client->get('shop');

		return View::make('pages.shop', ['results' => $results]); 
	}

	public function contact() {
		$client = new TumblrAPI();
		$results = $client->get('contact');

		return View::make('pages.contact', ['results' => $results]);
	}

}