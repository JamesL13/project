<?php
	class instructorAddCourseController extends CI_Controller {

		public function __construct() {
			parent::__construct();
       }

		public function index() {
			$this->load->model('course_model');
			$this->load->model('semester_model');
			
			$result = $this->course_model->getCourses($this->semester_model->getCurrentSemesterTitle());
			$data['courses'] = $result->result_array();

			$this->load->view('instructorAddCourse', $data);
		}

		public function add($course_id) {
			$this->load->model('course_model');
			$this->load->model('semester_model');

    		$result = $this->course_model->assignCourse($course_id, $this->session->userdata('user_id'));

    		if($result == TRUE) {
				redirect('instructorAddCourseController', 'refresh');
			} else {
				redirect('instructorAddCourseController', 'refresh');
			}
		}
	}
?>