<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFilmsAPIRequest;
use App\Http\Requests\API\UpdateFilmsAPIRequest;
use App\Models\Films;
use App\Models\Genres;
use App\Repositories\FilmsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class FilmsController
 * @package App\Http\Controllers\API
 */

class FilmsAPIController extends AppBaseController
{
    /** @var  FilmsRepository */
    private $filmsRepository;

    public function __construct(FilmsRepository $filmsRepo)
    {
        $this->filmsRepository = $filmsRepo;
    }

    /**
     * Display a listing of the Films.
     * GET|HEAD /films
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $films = $this->filmsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($films->toArray(), 'Films retrieved successfully');
    }

    /**
     * Store a newly created Films in storage.
     * POST /films
     *
     * @param CreateFilmsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFilmsAPIRequest $request)
    {
        $input = $request->all();
        $films = $this->filmsRepository->create($input);
        
        if( !empty($films) ) {
            $films->genres()->sync($request['genre']);
            
            if(!empty($input['photo'])) {
                $films->photo   = upload_image($input['photo'], '/film/images/');
                $films->slug    = $this->filmsRepository->createSlug($films->film, $films->id);
                $res            = $this->filmsRepository->update($films->toArray(), $films->id);
            }
        }
        
        if( !empty($input['_token'])) {
            return redirect(route('films.index'))->with('success','addess');
        }

        return $this->sendResponse($films->toArray(), 'Films saved successfully');
    }

    /**
     * Display the specified Films.
     * GET|HEAD /films/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Films $films */
        $films = $this->filmsRepository->find($id);

        if (empty($films)) {
            return $this->sendError('Films not found');
        }

        return $this->sendResponse($films->toArray(), 'Films retrieved successfully');
    }

    /**
     * Update the specified Films in storage.
     * PUT/PATCH /films/{id}
     *
     * @param int $id
     * @param UpdateFilmsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFilmsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Films $films */
        $films = $this->filmsRepository->find($id);

        if (empty($films)) {
            return $this->sendError('Films not found');
        }

        $films = $this->filmsRepository->update($input, $id);

        return $this->sendResponse($films->toArray(), 'Films updated successfully');
    }

    /**
     * Remove the specified Films from storage.
     * DELETE /films/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Films $films */
        $films = $this->filmsRepository->find($id);

        if (empty($films)) {
            return $this->sendError('Films not found');
        }

        $films->delete();

        return $this->sendSuccess('Films deleted successfully');
    }
}
