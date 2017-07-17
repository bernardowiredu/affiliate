<?php

/**
* Controller intiation
*/
class NetworkController extends BaseController {


	public function postNetwork(){

		$posted = Input::all();


		$Network = new Network;

		$Network->category_id = $posted['category_id'];
		$Network->network_name = $posted['network_name'];
		$Network->delivery_time = $posted['delivery_time'];
		$Network->price = $posted['price'];

		$Network->save();


		return Redirect::back()->with('success','Network has been successfully added');


	}

	




}