<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		$data['title'] = "Belajar CI4";
		$data['page_title'] = "Data Indonesia";
		
		$url = 'https://api.kawalcorona.com/indonesia';
		$dataCor = json_decode($this->curl_get_contents($url));
		// $dataCor = json_decode(file_get_contents("https://api.kawalcorona.com/indonesia"), true);
		echo $dataCor;die();
		$data['corNas'] = $dataCor;
		$data['view_file'] = "datacor/v_list";
        return view('template/v_homepage', $data);
	}

	function curl_get_contents($url)
	{
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

}
