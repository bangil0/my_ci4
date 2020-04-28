<?php namespace App\Controllers;

class Xboq extends BaseController
{
	public function index()
	{
        // redirect('homepage/template');
        return redirect()->to('xboq/menu');
    }

    function menu(){
        $data['title'] = "Belajar CI4 Mobile version";
        $data['pageTitle'] = "Xboq in Mobile version";
        $data['view_file'] = "xboq/v_content";
        $data['js_file'] = "xboq/js_xboq";
        return view('template/v_mobileapp', $data);
    }

    function list(){
        $data['title'] = "Belajar CI4 Mobile version";
        $data['pageTitle'] = "Xboq in Mobile version";
        $data['view_file'] = "xboq/v_list";
        // $data['js_file'] = "xboq/js_xboq";
        return view('template/v_mobileapp', $data);
    }

}
