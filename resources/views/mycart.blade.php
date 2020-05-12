@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 class="text-center font-weight-bold" style="color:#555555;  font-size:1.2em; padding:24px 0px;">
           {{ Auth::user()->name }}さんのカートの中身</h1>

           <div class="card-body" >
               <p class="text-center">{{ $message ?? '' }}</p><br>
                <a href="/">商品一覧へ</a>
              @if($my_carts->isNotEmpty())

              <!-- テーブルCartの情報を展開 -->
              @foreach($my_carts as $my_cart)
                <div class="mycart_box" >
                  {{$my_cart->stock->name}} <br>                                
                  {{ number_format($my_cart->stock->fee)}}円 <br>
                  <img src="/image/{{$my_cart->stock->imgpath}}" alt="item_photo" class="incart" ><br>
               
               <!-- カートからアイテム削除処理 -->
               <form action="/cartdelete" method="post">
                   @csrf
                   <input type="hidden" name="delete" value="delete">
                   <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                   <input type="hidden" name="stock_id" value="{{ $my_cart->stock->id }}">
                   <input type="submit" value="カートから削除する"><br>
               </form>
               </div>
                @endforeach

                <div class="text-center p-2">
                  品数：{{$count}}<br>
                  <p style="font-size:1.2em; font-weight:bold;">合計金額：{{number_format($sum)}}円</p>
               </div>

               <!-- 購入ボタンを押すと購入完了ページへ移動 -->
               <form action="/checkout" method="post">
                @csrf
                <button type="submit" class="btn btn-danger btn-lg text-center buy-btn">購入する</button>
               </form>

               <!-- カートに何も入っていないときに表示 -->
               @else
                  <p class="text-center">カートは何も入っていません</p>
               @endif

              
           </div>
       </div>
   </div>
</div>
@endsection