<?php namespace App\Controllers;

class Copythis_ctr extends BaseController
{
	public function index()
	{
		helper('Copythis');
		$data['title'] = "Belajar CI4";
		$data['page_title'] = "Welcome";
		$x = get_custom_number(10, 5, "XL-");
		die($x);
		$data['view_file'] = "homepage/v_content";
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
