<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class description extends Model
{
    use HasFactory;

    protected $table = 'descriptions';

	protected $fillable = [
		'establishment','answerable','direction','phone','days','hours','district_id'
	];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

