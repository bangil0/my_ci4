<?php namespace App\Controllers;

class Template extends BaseController
{
	public function index()
	{
        // redirect('homepage/template');
        return redirect()->to('template/homepage');
    }
    
    public function homepage()
    {
        $data['title'] = "Belajar CI4";
        return view('template/v_homepage', $data);
    }

    public function admin()
    {
        $data['title'] = "Belajar CI4";
        return view('template/v_admin', $data);
    }   
    
    public function blank_page()
    {
        $data['title'] = "Belajar CI4";
        return view('template/v_blank', $data);
    }    

}
