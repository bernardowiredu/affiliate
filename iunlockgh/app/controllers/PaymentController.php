<?php


class PaymentController extends BaseController {


	public function getIndex(){

		return View::make('payments.index');
	}


	public function getAll(){

		return View::make('admin.payments');
	}

	public function getSuccess(){

		return View::make('payments.payment-successful');
	}


	public function postPayed(){

		$posted = Input::all();

		$order = $posted['id'];

		$verified = $posted['verified_code'];

		$generated = $posted['generated_code'];

		$api_key = '5526d8e9e0ebe5526d8e9e0f32';

        $phone = $posted['telephone'];

        $sender_id = 'IunlockGh';

        $message = 'You have successfully payed';

		$rules = array(

			'telephone' => 'Required'
			
		);


		$validator = Validator::make($posted, $rules);

		if($validator->passes()) {

			if($verified != $generated){

				return Redirect::back()->with('error', 'The PAYCODE <b>' .$verified.'</b> entered is incorrect');
			}

			try{

			$url = "http://sms.nasaramobile.com/api?api_key=5526d8e9e0ebe5526d8e9e0f32&&sender_id=Iunlockgh&&phone=$phone&&message=".urlencode($message)."";

			/*$response = file_get_contents($url);
*/
			$payment = new Payment;

			$payment->product_model = $posted['product_model'];
			$payment->network_name = $posted['network_name'];
			$payment->price = $posted['price'];
			$payment->imei = $posted['imei'];
			$payment->telephone = $posted['telephone'];
			$payment->generated_code = $posted['generated_code'];
			$payment->verified_code = $posted['verified_code'];
			$payment->delivery_time = $posted['delivery_time'];
			

			$payment->save();

			Payment::automateDelete($order);

			return Redirect::to('payment-successful')->with('complete', 'Your <b>'. $posted['product_model'].'</b> would be unlocked between <b>'. $posted['delivery_time'].'</b>.');
			
			}catch (Exception $e){

			return Redirect::back()->with('eror', 'The paycode you entered is incorrect')->withErrors($validator);
		}

			
		}


	}
}