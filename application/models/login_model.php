<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    
    function getOne($table, $where){
        return $this->db->get_where($table, $where)->row();
    }
    public function login(){
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = md5($this->security->xss_clean($this->input->post('password')));
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->from('user');
        $result = $this->db->get();
        if($result->num_rows() > 0) {
            foreach($result->result_array() as $row) {
                if($row['role'] =='1'){
                    redirect('transportasi/dashboard');
                }else{
                    redirect('../user/dashboard');
                }
            
            }
        }else{
            $data['message'] = "User dan Password salah !";
            $this->load->view('index', $data);
        }
       
    }
    public function register(){
        $nama = $this->security->xss_clean($this->input->post('nama'));
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = md5($this->security->xss_clean($this->input->post('password')));
        $email = $this->security->xss_clean($this->input->post('email'));
        $no_hp = $this->security->xss_clean($this->input->post('no_hp'));
        $this->db->query("insert into user value(NULL,'".$nama."','".$username."','".$password."','".$email."',2,'".$no_hp."')");

        if($this->db->affected_rows() !=1 ){
            $data['message'] = "Register gagal";
            $this->load->view('index', $data);
        }else{
            $data['message'] = "register berhasil";
            $this->load->view('index', $data);
        }



    }
    
    public function validate(){
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = md5($this->security->xss_clean($this->input->post('password')));
        $role = $this->input->post('role');
        
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get($role);
        
        if($query->num_rows() == 1)
        {
            $row = $query->row();
            if($role=='petugas'){
                $idUser = $row->idpetugas;
                $login_gagal = $this->db->get_where('petugas', array('idpetugas' => $idUser))->row()->login_gagal;
                $maks_login_petugas = $this->sistem_model->getSistem('maks_login_petugas');
                if($login_gagal <= $maks_login_petugas){
                    $data = array(
                            'idpetugas' => $row->idpetugas,
                            'username' => $row->username,
                            'role' => $role,
                            'validated' => true
                            );
                    $this->session->set_userdata($data);
                    return true;
                }else{
                    return false;
                }
            }elseif($role=='admin'){
                $data = array(
                        'idadmin' => $row->idadmin,
                        'username' => $row->username,
                        'role' => $role,
                        'validated' => true
                        );
                $this->session->set_userdata($data);
                return true;
            }
        }
        return false;
    }
    
    function updateSession($where, $role) {
        $this->db->where($where);
        $query = $this->db->get($role);
        $array = $this->session->all_userdata();
//        echo element('idadmin', $array);
//        echo element('username', $array);
//        echo element('role', $array);
//        echo element('validated', $array);
//        die;
        if($query->num_rows() == 1)
        {
            if($role=="petugas"){
                $row = $query->row();
                $data = array(
                        'idpetugas' => $row->idpetugas,
                        'username' => $row->username,
                        'role' => $role,
                        'validated' => true
                        );
                $this->session->set_userdata($data);
//                return true;
            }elseif($role=="admin"){
                $row = $query->row();
                $data = array(
                        'idadmin' => $row->idadmin,
                        'username' => $row->username,
                        'role' => $role,
                        'validated' => true
                        );
                $this->session->set_userdata($data);
//                return true;
            }
        }
//        return false;
    }
    
    public function check_isvalidated(){
        if(!$this->session->userdata('validated')){
            redirect('login/login');
        }
    }
    
    public function logUser($logAktivitas) {
        if($this->session->userdata('role') == "petugas"){
            $idUser = ucfirst($this->session->userdata('idpetugas'));
        }elseif($this->session->userdata('role') == "admin"){
            $idUser = ucfirst($this->session->userdata('idadmin'));
        }
        $log = array(
                    'log_aktivitas' => $logAktivitas,
                    'id_user' => $idUser
                );
        $this->db->insert('log_aktivitas', $log);
    }
}