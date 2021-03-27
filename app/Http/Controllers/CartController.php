<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart($id){
		

		/*$product = array(1,2,3,4);

		Session::push('cart', $product);
		*/


		Session::push('cart', $id);

		dd(Session::get('cart'));

		//$request->session()->input('user', $data['user']);
	}
}
