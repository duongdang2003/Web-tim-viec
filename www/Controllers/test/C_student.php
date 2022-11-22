<?php 
include_once("../Models/Model_Student.php");

class  Ctrl_Student
{
	public function invoke(){
		if(isset($_GET['studentId']))
		{
			$modelStudent =  new Model_Student();
			$student = $modelStudent->getStudentDetail($_GET['studentId']);

			include_once("../Views/StudentDetail.php");
		}
		else
		{
			$modelStudent =  new Model_Student();
			$studentList = $modelStudent->getAllStudent();

			include_once("../Views/StudentList.php");
		}
	}
};

$C_Student = new Ctrl_Student();
$C_Student->invoke();

?>