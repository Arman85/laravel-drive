<?php

namespace App\Repositories;

use App\Models\Obj;
use App\Repositories\BaseRepository;

/**
 * Class ObjRepository
 * @package App\Repositories
 * @version June 10, 2019, 9:09 am UTC
*/

class ObjRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Obj::class;
    }
}
