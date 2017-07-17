<?php


class RequestController extends BaseController {


	public function getIndex(){

		return View::make('request.index');
	}


	public function getUnlockRequest(){

		return View::make('request.unlock-request');
	}


	public function getAllRequest(){

		return View::make('admin.unlock');
	}
}