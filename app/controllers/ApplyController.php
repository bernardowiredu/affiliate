<?php




class ApplyController extends BaseController {



	public function getIndex(){

		return View::make('apply.index');
	}


	public function getStatus(){

		return View::make('track.index');
	}
}