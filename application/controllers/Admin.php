<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('admin_m', 'm');
		
	}

	function index(){
		$this->load->view('layout/header');
		$this->load->view('admin/index');
		$this->load->view('layout/footer');
	}

	public function showAllProduct(){
		$result = $this->m->showAllProduct();
		echo json_encode($result);
	}
	
	public function editProduct(){
		$result = $this->m->editEmployee();
		echo json_encode($result);
	}

	public function addProduct(){
		if($_POST["action"] == "Add")
		{
			$insert_data = array(
				'product_name' 	=> 	$this->input->post('product_name'),
				'product_code' 	=> 	$this->input->post('product_code'),
				'product_stock' =>	$this->input->post('product_stock'),
				'image' =>	$this->upload_image(),
				'product_price' =>	$this->input->post('product_price')
			);
			$this->load->model('admin_m');
			$this->admin_m->insert_crud($insert_data);
			echo "Data inserted";
		}
	}

	function upload_image()
	{
		if(isset($_FILES['product_image']))
		{
			$extension = explode('.', $_FILES['product_image']['name']);
			$new_name = rand(). '.'. $extension[1];
			$destination = './image/' . $new_name;
			move_uploaded_file($_FILES['product_image']['tmp_name'], $destination);
			return $new_name;
		}
	}

}