<?php

namespace App\Repositories;

use App\Models\Comments;
use App\Repositories\BaseRepository;

/**
 * Class CommentsRepository
 * @package App\Repositories
 * @version January 16, 2023, 7:19 pm UTC
*/

class CommentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'comments'
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
        return Comments::class;
    }
}
