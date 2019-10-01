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
			throw new Exception("Text should be string type.");
			
		}
		return $this;
	}

	public function to($phone)
	{
		if (empty($phone)) {
			throw new Exception("Phone cant be empty");
		}
		return $this;
	}
}