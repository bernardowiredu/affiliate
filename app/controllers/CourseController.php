<?php



class CourseController extends BaseController {


	public function getIndex(){

		return View::make('courses.masters');
	}



	public function getDiploma(){

		return View::make('courses.diploma');
	}



	public function getUndergraduate(){

		return View::make('courses.undergraduate');
	}





}