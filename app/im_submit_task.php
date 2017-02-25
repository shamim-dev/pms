<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  im_submit_task extends Model
{
    protected $fillable =[   
						'id',
						'tasks_id',
						'developers_id',
						'status',
						'remark',
						'updated_at',
						'created_at'
						];
}