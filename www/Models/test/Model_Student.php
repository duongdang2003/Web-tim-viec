<?php
include_once("Entity_Student.php");

class Model_Student
{
	public function __construct()
	{}

	public function getAllStudent()
	{
		// Instance of load data from DB
		return array(
			"1" => new Entity_Student(1, "Nguyen Van A", 22, "University FPT"),
			"2" => new Entity_Student(2, "Tran Van B", 23, "University of Science"),
			"3" => new Entity_Student(3, "Pham Thi C", 21, "University of Technology"),
		);
	}

	public function getStudentDetail($studentId)
	{
		$allStudent = $this->getAllStudent();
		return $allStudent[$studentId];
	}
}

?>