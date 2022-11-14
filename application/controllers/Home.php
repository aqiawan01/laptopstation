<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('brand_model', 'brand');
		$this->load->model('product_model', 'product');
		$this->load->model('media_model', 'media');



	}

	public function index()
	{
		$data['title'] = 'Home';
		$this->load->view('index' , $data);
	}

	public function about()
	{
		$data['title'] = 'About Us';
		$this->load->view('pages/about', $data);
	}
	public function our_vision()
	{
		$data['title'] = 'Our Vision';
		$this->load->view('pages/our_vision', $data);
	}
	public function our_mission()
	{
		$data['title'] = 'Our Mission';
		$this->load->view('pages/our_mission', $data);
	}
	public function contact()
	{
		$data['title'] = 'Contact Us';
		$this->load->view('pages/contact', $data);
	}
}
