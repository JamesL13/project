<?php

class applicantPoolController extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }// end constructor
    
    public function index(){
       $this->load->model('form_model');
       $this->load->model('form_data_model');
       $this->load->model('semester_model');
       
       $data['applicants'] = $this->form_model->getAllBySemesterId(($this->semester_model->getCurrentSemester())->row()->semester_id);
       
	   $this->load->view('applicant_pool', $data);
    }// end index

}// end class

?>