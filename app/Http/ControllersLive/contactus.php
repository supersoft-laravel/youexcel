<?php
namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class adminpanel extends Model
{
    protected $fillable = ['Fullname', 'Email','Subject','Message'];
}
?>