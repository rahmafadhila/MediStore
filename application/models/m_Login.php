<?php 
class m_login extends CI_Model{
    
    public function cekuname($username){
        //cek username
        return $this->db->get_where('users', ['username' => $username])->num_rows() > 0;
    }
    
    public function login($data) {
        //cek data ada pada db atau tidak
        return $this->db->get_where('users', $data)->num_rows() == 1;
    }
    
    public function signup($data){
        //insert data ke table users
        return $this->db->insert('users', $data);
    }
    
    public function getusers($username){
        //menampilkan data berdasarkan username, jika tidak ada maka melakukan return false
        return $this->cekuname($username) ? $this->db->get_where('users', ['username' => $username])->row_array() : false;
    }
}
?>