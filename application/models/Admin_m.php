<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model{
	public function showAllProduct(){
		$query = $this->db->get('product');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


	public function editEmployee(){
		$product_id = $this->input->get('product_id');
		$this->db->where('product_id', $product_id);
		$query = $this->db->get('product');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


	public function addProduct(){
		$field = array(
			'product_name'=>$this->input->post('product_name'),
			'product_code'=>$this->input->post('product_code'),
			
			);
		$this->db->insert('product', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function insert_crud($data)
	{
		$this->db->inserted('product', $data);
	}
	
}