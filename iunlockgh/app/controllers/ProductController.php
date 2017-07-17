<?php


class ProductController extends BaseController {

	public function getIndex() {

		return View::make('products.index');
	}


	public function getProduct($id) {

		$phones = Product::find($id);
		if($id <= 10) {
		$network = Network::where('category_id','=','1')->get();
		
		}
		elseif($id <= 14) {
		$network = Network::where('category_id','=','2')->get();		
		}		
		
		return View::make('products.product')->with('phones', $phones)->with('network', $network);
	}


	public function getSearch(){

		return View::make('search.index');
	}


	



	public function getAllPro(){

		return View::make('admin.add-products');
	}


	public function postCreate() {
		$posted = Input::all();

		$product = new Product;

		$product->product_name = $posted['product_name'];
		$product->category_id = $posted['category_id'];
		$product->description = $posted['description'];

		$product->save();

		return Redirect::back()->with('success', 'Product has been successfully created');
	}

		public function getProductSearch(){

		$keyword = Input::get('keyword');
		$results = Product::where('product_name', 'LIKE', '%'.$keyword.'%')->get();
		return View::make('search.index')->with('products', Product::where('product_name', 'LIKE', '%'.$keyword.'%')->get())
		->with('results', $results)->with('keyword',$keyword);
	}
}  