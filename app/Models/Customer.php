<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','business_type','service_type','email','phone_number','address','facebook',
        'emp_id','instgram','twiter','snap','ticktok','note','x','y',
        'meeted_person_position','money'
    ];
}
