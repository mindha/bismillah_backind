<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if($this->form_validation->run()==FALSE){
            $data['message'] = "Silahkan Masukkan Username dan Password !";
            $this->load->view('index', $data);
        }
        else{
            $username = $this->security->xss_clean($this->input->post('username'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $role = $this->input->post('role');
            if(empty($username) || empty($password)){
                $data['message'] = "Username dan Password Harus Diisi !";
                $this->load->view('index', $data);
            }
            else{
                $result = $this->login_model->login();
            }
        }
    }

    public function check_isvalidated(){
        if(!$this->session->userdata('validated')){
            redirect('index');
        }
    }
    
    public function logout(){
        $username = ucfirst($this->session->userdata('username'));
        $role = ucfirst($this->session->userdata('role'));
        $logAktivitas = ucfirst($role)." ".ucfirst($username)." Keluar Aplikasi";
        $log = $this->login_model->logUser($logAktivitas);
        if($this->session->userdata('role') == "petugas"){
            $data = array(
                        'idpetugas' => '',
                        'username' => '',
                        'role' => '',
                        'validated' => false
                        );
        }elseif($this->session->userdata('role') == "admin"){
            $data = array(
                        'idadmin' => '',
                        'username' => '',
                        'role' => '',
                        'validated' => false
                        );
        }
        $this->session->unset_userdata($data);
        redirect('index');
    }    
}