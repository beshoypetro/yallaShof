<?php

namespace App\Repositories;

use App\Models\Like;
use App\Repositories\BaseRepository;

/**
 * Class LikeRepository
 * @package App\Repositories
 * @version October 10, 2019, 7:04 pm UTC
*/

class LikeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'to',
        'from'
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
        return Like::class;
    }
}
