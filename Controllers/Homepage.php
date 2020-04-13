<?php namespace App\Controllers;

class Homepage extends BaseController
{
	public function index()
	{
        // redirect('homepage/template');
        return redirect()->to('homepage/template');
    }
    
    public function template()
    {
        $data['title'] = "Belajar CI4";
        return view('template/v_homepage', $data);
    }

}
