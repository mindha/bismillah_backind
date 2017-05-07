<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{    
		$this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required');
        if($this->form_validation->run()==FALSE){
            $data['message'] = "Silahkan Data dengan Benar !";
            $this->load->view('register', $data);
        }
        else{
            $username = $this->security->xss_clean($this->input->post('username'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $nama = $this->security->xss_clean($this->input->post('nama'));
            $email = $this->security->xss_clean($this->input->post('email'));
            $no_hp = $this->security->xss_clean($this->input->post('no_hp'));
            $role = $this->input->post('role');
            if(empty($username) || empty($password) || empty($nama) || empty($email)|| empty($no_hp)){
                $data['message'] = "Data harus diisi !";
                $this->load->view('register', $data);
            }
            else{
                $result = $this->login_model->register();
            }
        }
    }
}
