<?php
class m_Product extends CI_Model {

	public function insert_new_product($data) {
		//insert data ke table product
		return $this->db->insert('product', $data);
	}

	public function GetProduct() {

		$this->db->select('*');
		$this->db->from('product');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_Product($id) {

		return $this->db->delete("product", array("id_product" => $id));
	}

	public function edit_Product($id,$data) {

		$this->db->set($data);
		$this->db->where('id_product', $id);
		return $this->db->update('product');
	}
}
?>