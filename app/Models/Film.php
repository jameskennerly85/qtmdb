<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
	protected $table = 'film';
	protected $primaryKey = 'film_id';

	public $timestamps = false;

	public function getTitleSlugAttribute() {
		return str_slug( $this->title );
	}

	public function actors() {
		return $this->belongsToMany( 'App\Models\Actor', 'film_actor', 'film_id', 'actor_id' );
	}

}
