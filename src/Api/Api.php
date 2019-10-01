<?php

namespace rizkymiff\zenzivasms\Api
/**
 * 
 */
abstract class Api
{
	/**
	 * Zenziva Userkey
	 *
	 * @var string
	 */
	protected $userkey;
	
	/**
	 * Zenziva Passkey
	 *
	 * @var string
	 */
	protected $passkey;

	/**
	 * Zenziva Account type
	 *
	 * @var string
	 */
	protected $type;

	/**
	 * Zenziva Url end point
	 *
	 * @var string
	 */
	protected $url = 'https://{type}.zenziva.net/apps/smsapi.php';

	/**
	 * Message can send
	 *
	 * @var string
	 */
	protected $message;

	/**
	 * to phone number
	 *
	 * @var string
	 */
	protected $phone;

	public function __construct()
	{
		$this->userkey = config('zenziva.userkey', 'XXXXX');
		$this->passkey = config('zenziva.passkey', 'xxxxx');
		$this->type    = config('zenziva.type', 'reguler');
	}

	private function send($number = '', $message = '') {
		$to = (empty($number)) ? $this->phone : $number;
		$msg = (empty($message)) ? $this->message : $message;
		$url = str_replace("{type}", $this->type, $this->url);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POSTFIELDS,
		'userkey='.$this->userkey.
		'&passkey='.$this->passkey.
		'&nohp='.$to.
		'&pesan='.urlencode($msg));
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_TIMEOUT,30);
		curl_setopt($ch, CURLOPT_POST, 1);
		$results = curl_exec($ch);
		curl_close($ch);
		
		return $results;
	}
}