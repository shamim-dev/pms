<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class im_client extends Model
{
    protected $fillable =[
    					'id',
    					'name',
    					'company',
    					'email',
    					'phone',
    					'address'

                   ];
}
