<?php




class ContactController extends BaseController  {


	public function getIndex(){

		return View::make('contacts.index');
	}


}