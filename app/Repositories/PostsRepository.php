<?php

namespace App\Repositories;

use App\Models\Posts;
use App\Repositories\BaseRepository;

/**
 * Class PostsRepository
 * @package App\Repositories
 * @version January 16, 2023, 7:49 pm UTC
*/

class PostsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'user_id'
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
        return Posts::class;
    }
}
