<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class im_developer extends Model
{
    protected $fillable=['id','code','name','dev_langs_id','designation','job_desc','email','phone','status'];
}
