<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  im_asign_task extends Model
{
    protected $fillable =[   
						'id',
						'tasks_id',
						'developers_id',
						'submit_date',
						'status',
						'remark',
						'updated_at',
						'created_at',
						'unit_id'
						];
}