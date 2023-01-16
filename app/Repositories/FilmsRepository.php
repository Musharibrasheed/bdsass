<?php

namespace App\Repositories;

use App\Models\Films;
use App\Repositories\BaseRepository;

/**
 * Class FilmsRepository
 * @package App\Repositories
 * @version January 15, 2023, 6:07 pm UTC
*/

class FilmsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'film',
        'description',
        'release_date',
        'rating',
        'ticket_price',
        'counrty',
        'photo'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Films::class;
    }

    public function getFilmByslug($slug='') {
        return $this->model()::where('slug',$slug)->first();
        // echo $this->model()::where();
        // dd($a->toArray());
        // exit;
    }
}
