<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
        // redirect('homepage/template');
        return redirect()->to('admin/template');
    }
    
    public function template()
    {
        $data['title'] = "Belajar CI4";
        return view('template/v_admin', $data);
    }

}
