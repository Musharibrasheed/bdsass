<?php

namespace App\Repositories;

use App\Models\Genres;
use App\Repositories\BaseRepository;

/**
 * Class GenresRepository
 * @package App\Repositories
 * @version January 15, 2023, 4:00 pm UTC
*/

class GenresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'genre',
        'slug'
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
        return Genres::class;
    }
}
