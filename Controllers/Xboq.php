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
	
	function saranCari(){
        $term = $this->input->post('term',TRUE);
        if (strlen($term) < 2) break;
        $rows = $this->autocomplete_model->GetAutocomplete(array('keyword' => $term));
        $keywords = array();
        foreach ($rows as $row)
        array_push($keywords, $row->keyword);
        echo json_encode($keywords);
    }

    //in model:
    // class Autocomplete_Model extends CI_Model
    function GetAutocomplete($options = array()){
        $this->db->select('keyword');
        $this->db->like('keyword', $options['keyword'], 'after');
        
        $query = $this->db->get('autocomplete');
        return $query->result();
    }	

}
