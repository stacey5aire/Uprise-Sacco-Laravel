<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loanrequest extends Model
{
    use HasFactory;
    protected $table = 'loanrequests';

protected $fillable = ['approval'];


}
