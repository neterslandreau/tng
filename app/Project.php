<?php namespace App;

class Project extends Model
{
	protected $table = 'projects';

	protected $fillable = ['description', 'name', 'location', 'slug'];

}
