<?php
namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class adminpanel extends Model
{
    protected $fillable = ['name', 'email','cnic','number','address','age','city'];
}
?>