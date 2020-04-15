<?php

namespace App\Repositories;

use App\Models\books;
use App\Repositories\BaseRepository;

/**
 * Class booksRepository
 * @package App\Repositories
 * @version April 12, 2020, 2:32 am UTC
*/

class booksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email_author',
        'publication_year'
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
        return books::class;
    }
}
