<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class im_project extends Model
{
    protected $fillable =[    					
					 'id',
					 'name',
					 'code',
					 'price',
					 'client_id',
					 'description',
					 'start_date',
					 'end_date',
					 'status',
					 'updated_at',
					 'created_at'
                  ];
              }

