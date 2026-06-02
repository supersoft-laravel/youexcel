<?php
namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class adminpanel extends Model
{
    protected $fillable = ['email', 'chooseprogramme','name','fathername','address','city','employeename','designation','cellnumber','dateofbirth','cnic','qualification','Image'];
}
?>