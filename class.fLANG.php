<?php

/*
	Author : Orhan BAHAR
	Web Site : www.orhanbhr.com
	Mail : orhanbhr@hotmail.com
	GitHub : www.github.com/orhanbhr
	Created : 30.09.2014
*/

/*
	Yandex Translation API - Thank You!
*/

class fLANG {

	private $api_key = "trnsl.1.1.20141005T221429Z.301657592c3e2deb.5fa17521595094480fcd8afdba07fb70906f3b08"; // Default API Key : by Yandex
	public $from = "tr"; // Default from : tr
	public $to = "en"; // Default to : en
	private $text;

	public function exec($text){
		$url = file_get_contents("https://translate.yandex.net/api/v1.5/tr.json/translate?key=".$this->api_key."&lang=".$this->from."-".$this->to."&text=".$text);
		$json = json_decode($url);
		echo $json->text[0];
	}

}

/*
	Class Finished
*/

?>
