<?php

class Payment extends Eloquent {

	protected $table = 'payments';

	public function networks() {
		return $this->belongdTo('Order');
	}


	public static function automateDelete($order) {

		$orders = Order::find($order);
		$id = Order::find($order)->delete();
	}
}