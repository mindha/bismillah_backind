<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

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
		
		$data['data'] = $this->sistem_model->getalluser()->result();
		$this->load->view('transportasi/listuser',$data);
	}
	public function edit($id)
	{
		
		$data['data'] = $this->sistem_model->getuser($id)->result();
		$this->load->view('transportasi/edituser',$data);
	}
	public function update($id)
	{
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$pass = $this->input->post('pass');

		$this->sistem_model->updateuser($id,$email,$nama,$no_hp,$pass);

		$data['data'] = $this->sistem_model->getalluser()->result();
		$this->load->view('transportasi/listuser',$data);
	}
	public function delete($id)
	{
		$this->sistem_model->deleteuser($id);

		$data['data'] = $this->sistem_model->getalluser()->result();
		$this->load->view('transportasi/listuser',$data);
	
	}
}
