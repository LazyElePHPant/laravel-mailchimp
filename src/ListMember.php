<?php

namespace LazyElePHPant\MailChimp;

use GuzzleHttp\Client as GuzzleClient;

class ListMember
{
	/** @var GuzzleHttp\Client as GuzzleClient */
	protected $client;

	public function __construct()
	{
		$this->client = new GuzzleClient([
			'base_uri' => config('mailchimp.api_url')
		]);
	}

	public function call(string $method, string $path, array $params = [])
	{
		if (is_null(config('mailchimp.username')) || is_null(config('mailchimp.api_key'))) return false;

		try {
			return $this->client->request('POST', $path, [
				'auth' => [
					config('mailchimp.username'),
					config('mailchimp.api_key')
				],
				'json' =>  $params
			]);
		} catch(Exception $e) {
			return $e->getMessage();
		}
	}

	public function subscribe(string $email = '')
	{
		$list_id = config('mailchimp.list_id');

		if (is_null($list_id) || empty($email)) return false;

 		return $this->call('POST', "/3.0/lists/{$list_id}/members/", [
 			'email_address' => $email,
 			'status' => 'subscribed'
 		]);
	}
}
