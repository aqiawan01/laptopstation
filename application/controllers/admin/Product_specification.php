<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_specification extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('product_specification_model','Specification');

     if (! $this->session->userdata('is_logged_in')) redirect('/admin','refresh');
  }

	public function add($product_id)
	{
		
		if($this->input->server('REQUEST_METHOD') == 'POST') 
		{
		     $this->form_validation->set_rules('processor_type','Processor_type','required');
         $this->form_validation->set_rules('processor_speed','processor_speed','required');
         $this->form_validation->set_rules('hard_drive_size','hard_drive_size','required');
        $this->form_validation->set_rules('installed_ram','installed_ram','required');

           if ($this->form_validation->run() == 'TURE')
            {
             
              $options = [
                    'product_id' => $product_id,
                   'processor_type' => $this->input->post('processor_type'),
                   'processor_speed' => $this->input->post('processor_speed'),
                   'hard_drive_size' => $this->input->post('hard_drive_size'),
                   'installed_ram' => $this->input->post('installed_ram'),
                   'screen_size' => $this->input->post('screen_size'),
                   'camera' => $this->input->post('camera'),
                   'color' => $this->input->post('color'),
                   'operating_system' => $this->input->post('operating_system'),
                   'bluetooth' => $this->input->post('bluetooth'),
                   'wifi' => $this->input->post('wifi'),
                   'lan' => $this->input->post('lan'),
                   'modem' => $this->input->post('modem')
                   
         ];

             $this->specification->create($options);
             redirect('/admin/product','refresh');
            }

            }
          $data['title'] = 'Create Product Specification';
		      $data['mainContent'] = '/admin/product_specification/add';
		      $this->load->view('/admin/layout/master', $data);
	}

	public function edit($product_specification_id)
	{
	   

	   if ($this->input->server('REQUEST_METHOD') == 'POST') 
	   {
	   		$options = [
                   'product_id' => $product_id,
                   'processor_type' => $this->input->post('processor_type'),
                   'processor_speed' => $this->input->post('processor_speed'),
                   'hard_drive_size' => $this->input->post('hard_drive_size'),
                   'installed_ram' => $this->input->post('installed_ram'),
                   'screen_size' => $this->input->post('screen_size'),
                   'camera' => $this->input->post('camera'),
                   'color' => $this->input->post('color'),
                   'operating_system' => $this->input->post('operating_system'),
                   'bluetooth' => $this->input->post('bluetooth'),
                   'wifi' => $this->input->post('wifi'),
                   'lan' => $this->input->post('lan'),
                   'modem' => $this->input->post('modem')
                   
         ];

             $this->Specification->update($product_specification_id, $options);
             redirect('/admin/product','refresh');
	   	}
	   	$data['Specification'] = $this->Specification->get_by($product_specification_id);
		  $data['title'] = 'Edit Product Specification';
		  $data['mainContent'] = '/admin/product_specification/edit';
		  $this->load->view('/admin/layout/master', $data);
	}

   public function product_specification_seed()
     {
         

         $faker = Faker\Factory::Create();
         for ($i = 0; $i < 50; $i++){
        $title = $faker->name;
        $options = [
          'product_id' => $faker->postcode,
          'processor_type' => $faker->jobTitle,
          'processor_type' => $faker->randomElement(['core i3','core i5','core i7','core i9']),
           'processor_speed' =>$faker->randomElement(['1.70GHz','2.75GHz','3.5GHz','4.2GHz']),
           'hard_drive_size' => $faker->randomElement(['128GB','264GB','500GB','1TB','10TB','128TB']),
           'installed_ram' =>$faker->randomElement(['4GB','8GB','16GB','32GB','64GB','128GB']),
           'screen_size' => $faker->randomElement(['14 Inches','16 Inches','18 Inches']),
           'camera' => $faker->randomElement(['YES','NO']),
           'color' => $faker->randomElement(['Black','White','Rose Gold','Blue']),
           'operating_system' => $faker->randomElement(['Window7','window10','window8','window11','Macos']),
           'bluetooth' => $faker->randomElement(['YES','NO']),
           'wifi' => $faker->randomElement(['YES','NO']),
           'lan' => $faker->randomElement(['YES','NO']),
           'modem' => $faker->randomElement(['YES','NO'])                   
         ];

             $this->specification->create($options);
             
            }
            redirect('/admin/product','refresh');
              }
}
