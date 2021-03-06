<?php 
    class Desired_Courses_model extends CI_Model {
        function __construct(){
            parent::__construct();
        }

        public function insert($course_id, $course_name, $form_data_id, $grade) {
            $sql = 'INSERT INTO desired_courses(course_id, course_name, form_data_id, grade) VALUES (?, ?, ?, ?)';

            $this->db->query($sql, array($course_id, $course_name, $form_data_id, $grade));

            if($this->db->affected_rows() == 1) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function getByCourseId($course_Id){
            $q = 'SELECT * FROM tasub.desired_courses INNER JOIN tasub.form ON tasub.form.form_data = tasub.desired_courses.form_data_id INNER JOIN tasub.form_data ON tasub.form_data.form_data_id = tasub.form.form_data WHERE tasub.desired_courses.course_id = ?';     
            $result = $this->db->query( $q, array( $course_Id ) );
            
            if( $result->num_rows() > 0 ){
                return $result;
            }
            else{
                return false;
            }
            
        }//  end getPreferenceByCourse
        public function update($id, $grade) {
            $sql = 'UPDATE desired_courses SET grade = ? WHERE desired_course_id = ?';

            $this->db->query($sql, array($grade, $id));

            if($this->db->affected_rows() == 1) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function checkForEntry($course_id, $course_name, $form_data_id) {
            $sql = 'SELECT * FROM tasub.desired_courses WHERE course_id = ? AND course_name = ? AND form_data_id = ?';

            $query = $this->db->query($sql, array($course_id, $course_name, $form_data_id));

            if($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
        }

        public function getAll($form_data_id) {
            $sql = 'SELECT * FROM tasub.desired_courses WHERE form_data_id = ?';

            $query = $this->db->query($sql, array($form_data_id));

            if($query->num_rows() > 0) {
                return $query->result();
            } else {
                return FALSE;
            }
        }

        public function delete($id, $course_id, $course_name, $form_data_id) {
            $sql = 'DELETE FROM tasub.desired_courses WHERE desired_course_id = ? AND course_id = ? AND course_name = ? AND form_data_id = ?';

            $query = $this->db->query($sql, array($id, $course_id, $course_name, $form_data_id));

            if($this->db->affected_rows() > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function getById($course_id) {
            $sql = 'SELECT * FROM tasub.desired_courses WHERE course_id = ?';

            $query = $this->db->query($sql, array($course_id));
            
            if($query->num_rows() > 0) {
                return $query;
            } else {
                return FALSE;
            }
        }
    }
?>