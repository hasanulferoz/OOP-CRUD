<?php

namespace  App\Controller;

use App\Support\Database;




class Student extends Database{

	public function studentTumiJao($name, $email, $cell, $uname){

		$data = $this->create("INSERT INTO students (name, email, cell, uname) VALUES ('$name','$email','$cell','$uname')");
		if($data){
			return '<p class="alert alert-success">Student created successful ! <button class="close" data-dismiss="alert">&times;</button></p>';
		}

	}

	public function sobDataNeyaAoo(){

		$data = $this->all('students');

		return $data;

	}		

	public function delete_stu($id){
		$data = $this->delete('students', $id);

		if($data){
			return '<p class="alert alert-success">Student deleted successfully ! <button class="close" data-dismiss="alert">&times;</button></p>';
		}
	}
	public function singleStudent($id){
		$data = $this->find('students', $id);

		return $data;
	}
	public function editStudentData($id){

		$data = $this->find('students', $id);
		return $data;
	}
	public function updateStudentInfo($name, $email, $cell, $uname, $id){
		$this->update("UPDATE students SET name='$name', email='$email', cell='$cell', uname='$uname' WHERE id='$id'");
		header('location:students.php');
	}


}




