<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email','phone', 'dt_birth','cep','city', 'uf', 'district', 'street', 'number'];

    public function Solicits(){
        return $this->hasMany(Request::class);
    }
}
