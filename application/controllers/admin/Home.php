<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model', 'member');
	}
	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('admin/auth/login', $data);
	}

	public function validate()
	{
		 $where = [
           'email'=>$this->input->post('email'),
           'password'=>$this->input->post('password'),
          ];

         $query = $this->member->validate_credentials($where);

          if ($query)
             {
        	    $userdata = [
        		     'fullname'=>$query->fullname,
        		     'email'=>$query->email,
        		     'member_id'=>$query->id,
        		     'is_logged_in'=> TRUE,
        		]; 

           $this->session->set_userdata($userdata);
           redirect('/admin/brand', 'refresh');
         }

         else{
         	redirect('/admin', 'refresh');
         }
	}
    
    public function logout()
	{
		$this->session->sess_destroy();
		redirect('/admin','refresh');
	}

	public function change_password()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') 
		{
			$this->form_validation->set_rules('old_password', 'old Password', 'required');
			$this->form_validation->set_rules('new_password', 'New Password', 'required');
			$this->form_validation->set_rules('retype_password', 'Retype Password', 'required|matches[new_password]');

		  if ($this->form_validation->run() == TRUE) 
		  {
		  	$old_password = $this->input->post('old_password');
		  	if ($this->member->verify_password($old_password))
		  		$data['message'] = 'Your Password has been changed!';
		  	else
		  		$data['message'] = 'opps! something went wrong';
		  }
		 
		}
		$data['title'] = "Change Password";
		$data['mainContent'] = 'admin/auth/change_password';
		$this->load->view('admin/layout/master', $data);
	}

	public function forgot_password()
	{

		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$email = $this->input->post('email');
			$row = $this->member->validate_credentials(['email' => $email]);
			if ($row) 
			{
				$hashKey = random_string('alnum', 50);
				$email_template = $this->load->view('admin/auth/email_template', ['token' => $hashKey], TRUE);
				
				 $config = Array(
				  'protocol' => 'smtp',
				  'smtp_host' => 'smtp.mailtrap.io',
				  'smtp_port' => 2525,
				  'mailtype'  => 'html',
				  'smtp_user' => 'b224a47452dddf',
				  'smtp_pass' => 'e56aa0a874bf10',
				  'crlf' => "\r\n",
				  'newline' => "\r\n"
				);

				$this->load->library('email', $config);
				
				$this->email->from('info@laptopstation.com', 'Laptop Station');
				$this->email->to($email);
				$this->email->message($email_template);
				$this->email->send();
				$this->member->update(['hash_key' => $hashKey], ['email' => $email]);
				$data['message'] = "Your password request has been sent to your Email";
			}
			else
			{
				echo "<h1>Not Matched!</h1>";

			}
		}
		$data['title'] = "Forgot Password";
		$this->load->view('admin/auth/forgot_password', $data);
	}

    public function reset($token)
    {
       $where = ['hash_key'=> $token];
       $row = $this->member->validate_credentials($where);
       
       if (! $row)
       { 
       	show_error("Token has been expired! ");
       }

        if($this->input->server('REQUEST_METHOD') == 'POST')
        {
        	$affected = $this->member->update([
        		'password'=> $this->input->post('retype_password'),
        		'hash_key'=> Null
        	],[
        		'id'=> $row->id
        	]);

        	if ($affected)
        	{ redirect('/admin', 'refresh');
             }
        }

     $data['title'] = "Reset Password";
     $this->load->view('admin/auth/reset', $data);
    }
}

