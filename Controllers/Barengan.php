<?php namespace App\Controllers;

class Barengan extends BaseController
{
	public function index()
	{
        // redirect('homepage/template');
        return redirect()->to('barengan/awal');
    }

    function awal(){
        $data['title'] = "Belajar CI4 Mobile version";
        $data['pageTitle'] = "Barengan yuuuk";
        $data['view_file'] = "barengan/v_content";
        // $data['js_file'] = "barengan/js_barengan";
        return view('template/v_mobileapp', $data);
    }

    function list(){
        $data['title'] = "Belajar CI4 Mobile version";
        $data['pageTitle'] = "Barengan yuuuk";
        $data['view_file'] = "barengan/v_list";
        // $data['js_file'] = "barengan/js_barengan";
        return view('template/v_mobileapp', $data);
    }

    function create(){
        $data['title'] = "Belajar CI4 Mobile version";
        $data['pageTitle'] = "Create";
        $data['view_file'] = "barengan/v_create";
        // $data['js_file'] = "barengan/js_barengan";
        return view('template/v_mobileapp', $data);
    }    

}
