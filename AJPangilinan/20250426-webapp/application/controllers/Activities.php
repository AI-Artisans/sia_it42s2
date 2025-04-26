<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activities extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Make sure the model is loaded properly in the constructor
        $this->load->model('Blogs_model', 'blogs');
    }

    public function view() {
        // Ensure the model method is correct and the data is passed correctly
        $data['query'] = $this->blogs->getSome(5);

        // Load the view and pass the data to it
        $this->load->view('msgview', $data);
    }
}
?>
