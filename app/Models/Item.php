<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable =[ 'item_name','category_id',
    'price','description','item_con','item_type','status','item_photo',

    'ownerName','address','contNo','ownerAddress'];
    use HasFactory;
}
