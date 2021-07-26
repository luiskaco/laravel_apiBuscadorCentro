<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    use HasFactory;

    protected $table = 'districts';

	protected $fillable = [
		'name','zones_id','code'
	];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
