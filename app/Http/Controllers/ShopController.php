<?php

namespace App\Http\Controllers;

use App\Models\Stock;

use App\Models\Cart;

use App\Mail\Thanks;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;

class ShopController extends Controller
{

    // stocksテーブルの情報を取得
    public function index()
    {
    	$stocks = Stock::Paginate(8);
    	return view('shop',compact('stocks'));
    }

    //カート内の情報を取得
    public function myCart(Cart $cart)
    {
    	$data = $cart->showCart();
    	return view('mycart',$data);
    }

    //カートへ追加情報を取得
    public function addMycart(Request $request,Cart $cart)
   {
       //カートに追加処理
       $stock_id=$request->stock_id;
       $message=$cart->addCart($stock_id);

       //追加後の情報を取得
       $data = $cart->showCart();

       return view('mycart',$data)->with('message',$message);

   }

   //カートの中身を削除処理
   public function deleteCart(Request $request,Cart $cart)
   {

    //カートから削除の処理
    $stock_id=$request->stock_id;
    $message=$cart->deleteCart($stock_id);

    //削除後の情報を取得
    $data=$cart->showCart();

    return view('mycart',$data)->with('message',$message);

   }

    //購入完了
     public function checkout(Cart $cart)
   {
     return view('checkout');
   }
}
