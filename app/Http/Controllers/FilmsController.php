<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFilmsRequest;
use App\Http\Requests\UpdateFilmsRequest;
use App\Repositories\FilmsRepository;
use App\Repositories\GenresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\Http;

class FilmsController extends AppBaseController
{
    /** @var FilmsRepository $filmsRepository*/
    private $filmsRepository;
    private $genresRepository;

    public function __construct(
        FilmsRepository $filmsRepo, 
        GenresRepository $genresRepo
        )
    {
        $this->filmsRepository = $filmsRepo;
        $this->genresRepository = $genresRepo;
    }

    /**
     * Display a listing of the Films.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $film       = '';
        $skip       = ($request->skip > 0) ? $request->skip : 0;
        $limit      = 1;
        $response   = Http::get("http://localhost/bdsass/public/api/films?skip={$skip}&limit={$limit}");
        $film       =  json_decode($response->getBody(),true); 
        if( !empty($film['data']) ) {
            $film           =  (object) $film['data'][0]; 
            $film->prev     = $skip;
            $film->next     = $skip+1;
            $film->limit    = $limit;
            $film->comments       = $this->filmsRepository->find($film->id);
        } 
        


        return view('films.index')
            ->with('film', $film);
    }

    /**
     * Show the form for creating a new Films.
     *
     * @return Response
     */
    public function create()
    {
        $countries = getCountries();
        $genres = $this->genresRepository->all()->pluck('genre','id')->toArray();
        return view('films.create')->with('genres', $genres,)->with('countries', $countries);
    }

    /**
     * Store a newly created Films in storage.
     *
     * @param CreateFilmsRequest $request
     *
     * @return Response
     */
    public function store(CreateFilmsRequest $request)
    {
        $input = $request->all();

        $films = $this->filmsRepository->create($input);

        Flash::success('Films saved successfully.');

        return redirect(route('films.index'));
    }

    /**
     * Display the specified Films.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $films = $this->filmsRepository->find($id);

        if (empty($films)) {
            Flash::error('Films not found');

            return redirect(route('films.index'));
        }

        return view('films.show')->with('films', $films);
    }

    public function showDetails($slug)
    {
        $films = $this->filmsRepository->getFilmByslug($slug);
        if (empty($films)) {
            Flash::error('Films not found');

            return redirect(route('films.index'));
        }

        return view('films.show')->with('films', $films);
    }

    /**
     * Show the form for editing the specified Films.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $films = $this->filmsRepository->find($id);

        if (empty($films)) {
            Flash::error('Films not found');

            return redirect(route('films.index'));
        }

        return view('films.edit')->with('films', $films);
    }

    /**
     * Update the specified Films in storage.
     *
     * @param int $id
     * @param UpdateFilmsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFilmsRequest $request)
    {
        $films = $this->filmsRepository->find($id);

        if (empty($films)) {
            Flash::error('Films not found');

            return redirect(route('films.index'));
        }

        $films = $this->filmsRepository->update($request->all(), $id);

        Flash::success('Films updated successfully.');

        return redirect(route('films.index'));
    }

    /**
     * Remove the specified Films from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $films = $this->filmsRepository->find($id);

        if (empty($films)) {
            Flash::error('Films not found');

            return redirect(route('films.index'));
        }

        $this->filmsRepository->delete($id);

        Flash::success('Films deleted successfully.');

        return redirect(route('films.index'));
    }
}
