<?php
class Webservice extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    private function getWSdata()
    {
        $apiKey = "2e49f9a5dc3f7ed3bddbb8876b10e091";
        $location = "Philippines";
        $apiUrl = "http://api.weatherstack.com/current?";
        $apiUrl .= "access_key={$apiKey}&query={$location}";

        // Initialize cURL session
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Execute cURL session and store the response
        $response = curl_exec($ch);

        // Close cURL session
        curl_close($ch);

        // Decode the JSON response
        $weatherData = json_decode($response, true);

        return $weatherData;
    }

    public function consume()
    {
        $data['weatherData'] = $this->getWSdata();
        $this->load->view('wsconsume', $data);
    }

    // Annex-E: WS Controller (Broadcast) method
    public function broadcast()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            show_error('Method not allowed.', 405);
            return;
        } else {
            $this->load->model('Blogs_model', 'blogs');
            $data = $this->blogs->getSome();

            $wsdata = json_encode([
                'status' => true,
                'data' => $data
            ]);

            print_r($wsdata);
        }
    }
}
?>