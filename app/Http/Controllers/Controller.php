<?php
namespace App\Http\Controllers;

// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Services\Film;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
	// use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function home( Film $filmService )
	{
		$films = $filmService->randomize();

		return view( 'home', [
			'films' => $films
		]);
	}

	public function film( $film_slug, Film $filmService )
	{
		$name = str_replace( '-', ' ', strtoupper( $film_slug ) );
		$film = $filmService->getByTitle( $name );

		if(!count($film)){
			return redirect('/');
		}		

		return view( 'single', [
			'film' => $film
		]);
	}

    public function search(Request $request, Film $filmService)
    {
        $term = $request->get('term');

        $films = $filmService->searchByTerm($term);

        return view( 'search', [
            'films' => $films
        ]);
    }

}
