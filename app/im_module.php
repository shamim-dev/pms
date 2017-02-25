<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class im_module extends Model
{
    protected $fillable =[    					
					 'id',
					 'code',
					 'name',
					 'project_id',
					 'description',
					 'start_date',
					 'end_date',
					 'duration',
					 'status',
					 'proj_status_id'
                  ];
              }

