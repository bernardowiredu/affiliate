<?php


class OrderController extends BaseController {


	public function getStatus(){

		return View::make('orders.order-status');
	}



	public function getHistory(){

		return View::make('orders.order-history');
	}



	public function getTrack(){

		return View::make('orders.track-order');
	}


	public function getPayment($id){
		$order = Order::find($id);

		return View::make('orders.make-payment')->with('order', $order);
	}


	public function getConfirm(){

		$orders = Order::all();
		
		$count_orders = count($orders);
		return View::make('products.confirm-order')->with('orders', $orders)->with('count_orders', $count_orders);
	}

	public function getOrder(){

		return View::make('admin.order');
	}

	public function getCheckOrder(){

		return View::make('orders.check_order');
	}

	public function getDelete($id){

		$order = Order::find($id)->delete();

		return Redirect::to('products/1');


	}


	public function postPayOrder(){
		$posted = Input::all();

		$rules = array(

			'imei' => 'min:15|numeric|required'

		);


		$validator = Validator::make($posted, $rules);

		if($validator->passes()) {

			

		for($s=0; $s<10; $s++){
                $possible = '0123456789';
                $code = '';
                $i = 0;
                while($i < 7){
                    $code .= substr($possible, mt_rand(0, strlen($possible)+1),1);

                    $i++;
                }
            }
		
		$order = new Order;

		
		$order->product_name = $posted['product_name'];
		$order->network_name = $posted['network_name'];
		$order->price = $posted['price'];
		$order->email =$posted['email'];
		$order->imei = $posted['imei'];
		$order->delivery = $posted['delivery'];
		$order->status = 'processing';
		$order->order_contact =  $posted['order_contact'];;
		$order->order_code =$code;
		$order->net_id = $posted['network_name'];
		
		$order->save();



		return Redirect::to('confirm-order')->with('message', 'Confirm order and proceed to make payment');

		}else{
			return Redirect::back()->with('error','To create order, Enter a correct IMEI');
	
		}
	}



	

}