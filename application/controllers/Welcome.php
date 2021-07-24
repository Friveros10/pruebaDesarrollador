<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('myapi_model');
	}
	public function index()
	{
	
		$client = new \GuzzleHttp\Client();
		//$response = $client->request('GET', 'https://mindicador.cl/api');
		//$response()
		$url = 'https://mindicador.cl/api';

		try {
            $response = $client->request( 'GET',
                $url
            );
			$data = array();
			$data['data'] = json_decode($response->getBody());

			$this->load->view('chartjs', $data);
			
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
			$response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            print_r($responseBodyAsString);
        }
		
	}

	public function mantenedor()
	{
	
		$client = new \GuzzleHttp\Client();
		//$response = $client->request('GET', 'https://mindicador.cl/api');
		//$response()
		$url = 'https://mindicador.cl/api';

		try {
            $response = $client->request( 'GET',
                $url
            );
			$data = array();
			$data['data'] = json_decode($response->getBody());
		//	echo json_encode($data['data']);
			$this->load->view('welcome_message', $data);
			
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
			$response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            print_r($responseBodyAsString);
        }
		
	}

	public function getdatos()
	{
		$data= array(); 
		$data['b'] = $this->myapi_model->getDatos();
		echo json_encode($data);
	}

	
	public function sendDatos()
	{
		$data = array();
		$client = new \GuzzleHttp\Client();
		$url = 'https://mindicador.cl/api';

		try {
            $response = $client->request( 'GET',
                $url
            );
            $data['f'] = json_decode($response->getBody());
			
			
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            print_r($responseBodyAsString);
        }
		$this->myapi_model->sendDatos($data);
//		$this->load->view('welcome_message', $data);

	}



	public function getapi(){
		//echo json_encode($_GET);
		$selec = json_encode($_GET['tipo']);
		$selector = trim($selec,'"');
		//$selector = ltrim($select);
		$client = new \GuzzleHttp\Client();
		$urls = "https://mindicador.cl/api/$selector";
		$url = rtrim($urls);
		
		try {
            $response = $client->request( 'GET',
                $url
            );
        	echo $response->getBody()->getContents();
			
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            print_r($responseBodyAsString);
        } 
		
	}

	public function getApiAll(){
		$client = new \GuzzleHttp\Client();
		$url = 'https://mindicador.cl/api';

		try {
            $response = $client->request( 'GET',
                $url
            );
            $response->getBody();
			
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            print_r($responseBodyAsString);
        }
	}
}