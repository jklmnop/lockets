<?php
use Illuminate\Http\Request;

class BandsintownAPI {

	//'http://api.bandsintown.com/artists/Lockets/events.json?api_version=2.0&app_id=lockets&date=all';
	protected $client;

	public function __construct() {

		$this->client = new \GuzzleHttp\Client();
		
	}

	public function getAllShows() {
		$results = $this->client->get('http://api.bandsintown.com/artists/Lockets/events.json?api_version=2.0&app_id=lockets&date=all');
		return $results->json();
	}
}