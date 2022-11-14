<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('brand_model', 'brand');
		$this->load->model('product_model', 'product');
		$this->load->model('media_model', 'media');
		$this->load->model('product_gallery_model', 'gallery');
		$this->load->model('product_review_model', 'review');


	}

	public function index()
	{
		if ($this->input->get('price'))
		 {
			$priceItem = explode('-', $this->input->get('price'));
			$this->db->where('price >=', $priceItem[0]);
			$this->db->where('price <=', $priceItem[1]);
		}
	    if ($this->input->get('type'))
	    {
			$this->db->like('title' , $this->input->get('type'), 'BOTH');
		}

		if ($this->input->get('s')) 
		{
			$this->db->like('title', $this->input->get('s'), 'BOTH');
		}
		
	  $data['products'] = $this->product->show_all();
		$data['title'] = 'Product Filter';
		$this->load->view('product/index', $data);
	}


	public function detail($slug)
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') 
		{
			$options = [
				    'product_id'  => $this->input->post('id'),
                    'create_date' => date('d-m-y'),
                    'fullname' => $this->input->post('fullname'),
                    'email' => $this->input->post('email'),
                    'review' => $this->input->post('review'),
                    'status' => 'ACTIVE'
       ];

             $this->review->create($options);
             redirect('home', 'refresh');

		}

		

		
		$row = $this->product->show_by($slug);
		$this->db->where('id !=', $row->id);
		$this->db->where('brand_id', $row->brand_id);
		$this->db->limit(6);
		$this->db->order_by('id', 'RANDOM');
	   $data['relatedProducts'] = $this->product->show_all();

         
		$data['product'] = $row;
		$data['reviews'] = $this->review->show_all($row->product_id);
		$data['brand_array'] = $this->brand->brand_array();
		$data['title'] = $row->title;
		$this->load->view('product/detail', $data);
	}

	


}
