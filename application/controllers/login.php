<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Login  extends CI_Controller {
	public function index(){

               // $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                //$this->form_validation->set_rules('username', 'Username', 'required');
               // $this->form_validation->set_rules('password', 'Password', 'required',
               //         array('required' => 'You must provide a %s.')
               // );
               // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
               // $this->form_validation->set_rules('email', 'Email', 'required');

                if ($this->input->post('submit'))
                {
                       
                         $this->load->view('welcome_message');  
                        
                }
                else
                {
                       $this->load->view('login');     
                }
                
		/*$this->load->library('form_validation');
		if($this->input->post('submit')){
			echo $this->input->post('email');
		}
		$data['title'] = "Systeme de Gestion des Etablissements Scolaires";
		$this->load->view('login',$data);*/
	}

}