<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicit extends Model
{
    use HasFactory;
    protected $fillable = ['client_id','product_id','product_name','quantity'];
    public function Products(){
        return $this->hasMany(Product::class);
    }
    public function Clients(){
        return $this->belongsTo(Client::class);
    }
}
