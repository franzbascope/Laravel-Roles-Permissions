<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class books
 * @package App\Models
 * @version April 12, 2020, 2:32 am UTC
 *
 * @property string name
 * @property string email_author
 * @property integer publication_year
 */
class books extends Model
{
    use SoftDeletes;

    public $table = 'books';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email_author',
        'publication_year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email_author' => 'string',
        'publication_year' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email_author' => 'email'
    ];

    
}
