<?php 
class m_Login extends CI_Model{
    
    public function cekuname($username){
        //cek username
        return $this->db->get_where('users', ['username' => $username])->num_rows() > 0;
    }
    
    public function login($data) {
        //cek data ada pada db atau tidak
        return $this->db->get_where('users', $data)->num_rows() == 1;
    }
    
    public function signup($data) {
        //insert data ke table users
        return $this->db->insert('users', $data);
    }

    public function getusers($username) {
        //menampilkan data berdasarkan username, jika tidak ada maka melakukan return false
        return $this->cekuname($username) ? $this->db->get_where('users', ['username' => $username])->row_array() : false;
    }

    public function GetAllUser() {
        
        $this->db->select('*');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }

    public function hapus_User($id) {
        
		return $this->db->delete("users", array("id_users" => $id));
	}

    public function edit_Users($id, $data)
    {
        $this->db->set($data);
        $this->db->where('id_users', $id);
        return $this->db->update('users');
    }
}
?>