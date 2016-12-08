<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
	protected $table = 'actor';
	protected $primaryKey = 'actor_id';

	public $timestamps = false;

	public function getFullnameAttribute() {
		return sprintf( '%s %s', $this->first_name, $this->last_name );
	}

}
