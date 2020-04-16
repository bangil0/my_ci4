<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{


	}

SQL - Invoice without prefix: SELECT id, LPAD(id,7,'0') FROM invoice WHERE id = 1;

// Result: 0000001

SQL - Invoice with prefix: SELECT id, CONCAT( 'F-', LPAD(id,7,'0') ) FROM invoice;

// Result: F-0000001

}
