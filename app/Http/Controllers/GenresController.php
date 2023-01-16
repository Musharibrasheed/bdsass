<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGenresRequest;
use App\Http\Requests\UpdateGenresRequest;
use App\Repositories\GenresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class GenresController extends AppBaseController
{
    /** @var GenresRepository $genresRepository*/
    private $genresRepository;

    public function __construct(GenresRepository $genresRepo)
    {
        $this->genresRepository = $genresRepo;
    }

    /**
     * Display a listing of the Genres.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $genres = $this->genresRepository->all();

        return view('genres.index')
            ->with('genres', $genres);
    }

    /**
     * Show the form for creating a new Genres.
     *
     * @return Response
     */
    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created Genres in storage.
     *
     * @param CreateGenresRequest $request
     *
     * @return Response
     */
    public function store(CreateGenresRequest $request)
    {
        $input = $request->all();
        
        if( !empty($input['genre']) )
            $input['slug'] = $this->genresRepository->createSlug($input['genre']);
        
        $genres = $this->genresRepository->create($input);

        Flash::success('Genres saved successfully.');

        return redirect(route('genres.index'));
    }

    /**
     * Display the specified Genres.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $genres = $this->genresRepository->find($id);

        if (empty($genres)) {
            Flash::error('Genres not found');

            return redirect(route('genres.index'));
        }

        return view('genres.show')->with('genres', $genres);
    }

    /**
     * Show the form for editing the specified Genres.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $genres = $this->genresRepository->find($id);

        if (empty($genres)) {
            Flash::error('Genres not found');

            return redirect(route('genres.index'));
        }

        return view('genres.edit')->with('genres', $genres);
    }

    /**
     * Update the specified Genres in storage.
     *
     * @param int $id
     * @param UpdateGenresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGenresRequest $request)
    {
        $genres = $this->genresRepository->find($id);

        if (empty($genres)) {
            Flash::error('Genres not found');

            return redirect(route('genres.index'));
        }

        $genres = $this->genresRepository->update($request->all(), $id);

        Flash::success('Genres updated successfully.');

        return redirect(route('genres.index'));
    }

    /**
     * Remove the specified Genres from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $genres = $this->genresRepository->find($id);

        if (empty($genres)) {
            Flash::error('Genres not found');

            return redirect(route('genres.index'));
        }

        $this->genresRepository->delete($id);

        Flash::success('Genres deleted successfully.');

        return redirect(route('genres.index'));
    }
}
