<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class CartController extends Controller
{
//    public function add_to_cart(Request $request, $customer_id)
  public function add_to_cart(Request $request)
    {
        $qty = $request->qty;
        $product_id = $request->product_id;
        $product_info = DB::table('tbl_products')
            ->where('product_id', $product_id)
            ->first();

        $data['qty'] = $qty;
        $data['id'] = $product_info->product_id;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['options']['image'] = $product_info->product_image;

//        $des = array();
//        $des['qty'] = $qty;
//        $des['id'] = $product_info->product_id;
//        $des['name'] = $product_info->product_name;
//        $des['price'] = $product_info->product_price;
//        $des['customer_id'] = $customer_id;

      //  DB::table('tbl_cart')->insert($des);
        Cart::add($data);
        return Redirect::to('/show-cart');
    }

    public function show_cart()
    {
        $all_published_category = DB:: table('tbl_category')
            ->where('publication_status', 1)
            ->get();

        $manage_published_category = view('pages.add_to_cart')
            ->with('all_published_category', $all_published_category);
        return view('layout')
            ->with('pages.add_to_cart', $manage_published_category);
    }

    public function delete_to_cart($rowId)
    {
        Cart::update($rowId, 0);
        return Redirect::to('/show-cart');
    }

    public function add_product_details_page(Request $request)
    {
        $all_published_category = DB:: table('tbl_category')
            ->where('publication_status', 1)
            ->get();
        $rowId = $request->rowId;
        $manage_published_category = view('pages.add_product_details_page')
            ->with('all_published_category', $all_published_category);
        return view('layout')
            ->with('pages.add_product_details_page', $manage_published_category, $rowId);
    }

    public function add_details_cart(Request $request)
    {
        //$phone = $request->phone;
        //$description = $request->description;
        //Cart::update($phone, $description);
        $data=array();
        $data['customer_name']=$request->customer_name;
        $data['customer_number']=$request->customer_number;
        $data['description']=$request->description;
        DB::table('tbl_details')->insert($data);
        Session::put('message','Details added successfully!!---');
       return view('pages.add_product_details_page');
        
    }

    public function update_cart(Request $request)
    {
        $qty = $request->qty;
        $rowId = $request->rowId;
        Cart::update($rowId, $qty);
        return Redirect::to('/show-cart');

        // echo $qty;
        // echo"<br>";
        // echo $rowId;
    }
    public function product_details()
    {
        //$phone = $request->phone;
        //$description = $request->description;
        //Cart::update($phone, $description);
        //return view('admin.Product_details');
        $all_products_details=DB::table('tbl_details')->get();
    $manage_product=view('admin.Product_details')
    ->with('all_products_details',$all_products_details);

    return view('admin_layout')
    ->with('admin.Product_details',$manage_product);
    }
}
