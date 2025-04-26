<?php
class Activities extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function view() {
        $this->load->model('Blogs_model', 'blogs');

        // Use 'records' to match the variable name in the view
        $data['records'] = $this->blogs->getSome(5);

        $this->load->view('msgview', $data);
    }
}
?>

