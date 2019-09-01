<?php
namespace rizkymiff\zenzivasms;
use rizkymiff\zenzivasms\Api
/**
 * 
 */
class Zenziva extends Api
{
	public function message($text)
	{
		if (!is_string($text)) {
			return throw new \Exception("Text should be string type.");
			
		}
		return $this->message = $text;
	}

	public function to($phone)
	{
		if (empty($phone)) {
			return throw new \Exception("Phone cant be empty");
		}
		return $this->phone = $phone;
	}
}