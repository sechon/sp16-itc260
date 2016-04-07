<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        //associative array of data to pass to view
        $data['title'] = 'My unique ID tag!';
        $data['page_id'] = 'My clever page ID!';
        
        $data['guts'] = '<p>I am the creamy filling inside!</p>';
        //data is passed as second parameter in view creation
		$this->load->view('welcome_message',$data);
	}
}
