<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller {
	public function construct() {
		parent::_construct();
	}

	public function index() {
		$this->load->model('Blogs_model', 'blogs');
		$data['query'] = $this->blogs->getSome(5);

		$this->load->view('msgview', $data);
	}
}
