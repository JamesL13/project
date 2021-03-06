<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>Modify Course</title>
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    	<link href="<?php echo base_url(); ?>css/bespoke.css" rel="stylesheet">
	</head>
	<body>
		<?php
			include 'nav.php';
		?>
		<div class="container">
			<div class="page-header">
				<h2>Modify Course</h2>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Edit Course</h3>
					<form method="post" accept-charset="utf-8" action="<?php echo base_url().'index.php/adminEditCourseController/edit/'.$course->course_id; ?>" />
						<div class="form-group">
							<label for="courseName">Course Name: </label>
							<input type="text" class="form-control" name="course_name" id="courseName" value="<?php echo $course->course_name ?>">
						</div>
						<div class="form-group">
							<label for="semester">Semester: </label>
							<select name="semester" class="form-control">
					  		<?php
					  			if(isset($semesters)) {
						    		foreach($semesters as $row) {
						    		echo'<option value="'.$row->semester_title.'">'.$row->semester_title.'</option>';
						    	}
						    }
							?>
							</select>
						</div>
						<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Finish Editing</button>
					</form>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	</body>
</html>
