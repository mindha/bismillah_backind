<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sistem_model extends CI_Model {
    var $gallery_path;
    var $gallery_path_url;
        
    function __construct(){
        parent::__construct();
        $this->gallery_path = realpath(APPPATH . '../assets/images/sistem');
        $this->gallery_path_url = base_url().'assets/images/sistem';
    }
    function getAll($table,$limit){
            $data = array();
            $this->db->select("*");
            $this->db->from($table);
            $this->db->limit($limit);
            $hasil = $this->db->get();
            if($hasil->num_rows() > 0){
                    $data = $hasil->result();
            }
            $hasil->free_result();
            return $data;
    }
function getalluser()
    {
        //select produk berdasarkan id yang dimiliki    
        $this->db->select("*");
        $this->db->from('user');
        $this->db->where('role','2');
        
        return $this->db->get();
    }
function getallreview()
{
    $this->db->select("*");
    $this->db->from('review');
    return $this->db->get();
}
    function getuser($id)
    {
        //select produk berdasarkan id yang dimiliki    
        $this->db->select("*");
        $this->db->from('user');
        $this->db->where('role','2');
        $this->db->where('id_user',$id);
        
        return $this->db->get();
    }
    public function inputreview($judul,$isi,$destination){

        $this->db->query("insert into review value(NULL,'ariapridana','".$judul."','".$isi."','".$destination."')");

        if($this->db->affected_rows() !=1 ){
            $data['message'] = "Register gagal";
            
        }else{
            $data['message'] = "register berhasil";
           
        }



    }
    function updateuser($id,$email,$nama,$no_hp,$password)
    {
        $data=array('email'=>$email,'nama'=>$nama,'no_hp'=>$no_hp,'password'=>$password);
        $this->db->where('id_user',$id);
        //select produk berdasarkan id yang dimiliki    
        $this->db->update('user',$data);
    }
    function deleteuser($id)
    {
        $this -> db -> where('id_user', $id);
        $this -> db -> delete('user');
    }

    function getWhere($table, $where){
        return $this->db->get_where($table, $where);
    }
    function getOne($table, $where){
        return $this->db->get_where($table, $where)->row();
    }
    function getOneWithoutWhere($table){
        return $this->db->get($table)->row();
    }
    function countAll($table){
        return $this->db->count_all($table);
    }
    function insert($table, $data){
        return $this->db->insert($table, $data); 
    }
    function update($table,$data,$where){
        return $this->db->update($table,$data,$where);
    }
    function checkId($table, $id){
        $this->db->where($id);
        $this->db->from($table);
        return $this->db->count_all_results();
    }
    
    function delete($table, $where){
        return $this->db->delete($table, $where);
    }
    function getSistem($where){
        $row = $this->db->get('sistem')->row();
        if(isset($row->$where)){
            return $row->$where;
        }else{
            return false;
        }
    }
    
        
}