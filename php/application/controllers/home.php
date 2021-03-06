<?php
	class Home extends CI_Controller {

		public function __construct() {
            parent::__construct();
       }

		public function index() {
			$this->load->model('semester_model');

			$data['status_title'] = $this->semester_model->getCurrentSemesterStatus();
			$data['semester_title'] = $this->semester_model->getCurrentSemesterTitle();
			
			$this->load->view('infopage', $data);
		}
	}
?>