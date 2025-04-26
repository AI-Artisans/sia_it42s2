<?php
class Webservice extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    private function getWSdata() {
        $apiKey = "28394756fca98ef6be959cd0368c9b4f";
        $location = "Philippines";
        $apiUrl = "http://api.weatherstack.com/current?";
        $apiUrl .= "access_key={$apiKey}&query={$location}";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        $weatherData = json_decode($response, true);

        return $weatherData;
    }

    public function consume() {
        $data['weatherData'] = $this->getWSdata();
        $this->load->view('wsconsume', $data);
    }
    public function broadcast(){ if($_SERVER['REQUEST_METHOD'] !== 'GET'){
      show_error('Method not allowed.', 405); return;
      } else {
      $this->load->model('Blogs_model', 'blogs');
      
      $data = $this->blogs->getSome();
      $wsdata = json_encode([ 'status' => true, 'data' => $data
      ]);
      print_r($wsdata);
      }
      }
      
}
?>
