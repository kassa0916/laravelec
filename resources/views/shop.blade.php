@extends('layouts.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
           <div class="">
               <div class="d-flex flex-row flex-wrap">
           
                       <!-- 配列$stocksを展開 -->
                       @foreach($stocks as $stock)
                           <div class="col-xs-6 col-sm-4 col-md-3 ">
                               <div class="mycart_box">
                                   {{ $stock->name }} <br>
                                   <img src="/image/{{$stock->imgpath}}" alt="" class="incart">
                                   {{$stock->fee}}円<br>

                                   <!-- 商品をカートに入れる -->
                                   <form action="mycart" method="post">
                                       @csrf
                                       <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                                       <input type="submit" class="btn btn-info" style="color:#ffffff" value="カートに入れる">
                                   </form>
                                   <p class="detail">{{ $stock->detail }}</p><br>
                               </div>
 
                           </div>
                       @endforeach                    
               </div>
               <div class="text-center" style="width: 200px;margin: 20px auto;">

                <!-- ページネーション処理 -->
               {{  $stocks->links() }} 
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
