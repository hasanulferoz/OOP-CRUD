<?php

namespace App\Controller\Teacher;
use App\support\Database;


class Teacher extends Database{
	public function addTeacher($name, $email, $cell, $uname){

		$data = $this->create("INSERT INTO teachers (name, email, cell, uname) VALUES ('$name','$email','$cell','$uname')");
		if($data){
			return '<p class="alert alert-success">Teacher created successful ! <button class="close" data-dismiss="alert">&times;</button></p>';
		}

	}

	public function showAllData(){
		$data = $this->all('teachers');

		return $data;
	}

	public function singleTeacher($id){
		$data = $this->find('students', $id);

		return $data;
	}

	public function delete_teach($id){
		$data = $this->delete('teachers', $id);

		if($data){
			return '<p class="alert alert-success">Teacher deleted successfully ! <button class="close" data-dismiss="alert">&times;</button></p>';
		}
	}

	public function editTeacherData($id){
		$data = $this->find('teachers', $id);
		return $data;
	}

	public function updateTeacherInfo($name, $email, $cell, $uname, $id){
		$this->update("UPDATE teachers SET name='$name', email='$email', cell='$cell', uname='$uname' WHERE id='$id'");
		header('location:teachers.php');
	}
}



