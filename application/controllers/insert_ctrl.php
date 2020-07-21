<?php

class insert_ctrl extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->model('insert_model');
$this->load->helper('url_helper');
}

function index() {
	
//Including validation library
$this->load->library('form_validation');

$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

//Validating Name Field
$this->form_validation->set_rules('dtype', 'reportType', 'required|min_length[5]|max_length[15]');

//Validating Email Field
$this->form_validation->set_rules('dtitle', 'Title', 'required|min_length[5]|max_length[15]');

//Validating Mobile no. Field
$this->form_validation->set_rules('dcontent', 'Content.', 'required|min_length[5]|max_length[115]');

//Validating Address Field
$this->form_validation->set_rules('dslug', 'Slug', 'required|min_length[10]|max_length[50]');

if ($this->form_validation->run() == FALSE) {
$this->load->view('dashboard_view');
$this->load->view('insert_view');
$this->load->view('templates/footer');

} else {
//Setting values for tabel columns
$data = array(
'reportType' => $this->input->post('dtype'),
'title' => $this->input->post('dtitle'),
'content' => $this->input->post('dcontent'),

'slug' => $this->input->post('dslug'),

);
//Transfering data to Model
$this->insert_model->form_insert($data);
$data['message'] = 'Data Inserted Successfully';
//Loading View

//$this->load->view('insert_view');

}

}
}