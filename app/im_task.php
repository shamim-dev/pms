<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class im_task extends Model
{
    protected $fillable = ['id',
						 'name',
						 'project_id',
						 'code',
						 'module_id',
						 'start_at',
						 'end_at',
						 'duration',
						 'description',
						 'status'
						];
}
