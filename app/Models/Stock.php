<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //Stockデータベース変更防止	
    protected $guarded = [
     'id'
   ];
}
