<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

	public $timestamps = false;

	protected $fillable = [		
		'client_company_name',
		'client_name',
		'client_phone',
		'client_email',
		'client_address',
		'project_name'
	];

	public function quotes(){
		
		return $this->hasMany(Quote::class);
	}


}
