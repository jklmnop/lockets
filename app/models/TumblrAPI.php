<?php

class TumblrAPI {
	protected $apikey;
	protected $endpoint;
	protected $client; 

	public function __construct() {
		$this->apikey = $_ENV['TUMBLR_API_KEY'];
		$this->endpoint = $_ENV['TUMBLR_ENDPOINT'];

		$this->client = new Tumblr($this->apikey);
	}

	public function get($tag) {
		$results = $this->client->getBlogPosts($this->endpoint, array('tag' => $tag));
		return $results->posts;
	}


}