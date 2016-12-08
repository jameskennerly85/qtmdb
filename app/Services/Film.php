<?php
namespace App\Services;

use App\Models\Film as FilmModel;

class Film
{
	function __construct( FilmModel $filmModel ) {
		$this->model = $filmModel;
	}

	public function paginate( $page = 1, $limit = 5 )
	{
		$skip = ($page -1) * $limit;
		return $this->model->with('actors')->skip( $skip )->take( $limit )->get();
	}

	public function randomize( $limit = 5 ) {
		return $this->model->with('actors')->take( $limit )->inRandomOrder()->get();
	}

	public function getByTitle( $title ) {
		return $this->model->with('actors')->where( 'title', $title )->first();
	}

    public function searchByTerm( $term ) {
        return $this->model->with('actors')->where( 'title', 'like', "%$term%" )->get();
    }
}
