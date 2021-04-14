<?php namespace Codecycler\Airdesk\Models;

use Model;

/**
 * Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'codecycler_airdesk_contacts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'organisation' => Organisation::class,
    ];

    public $hasMany = [
        'logs' => Log::class,
    ];
}
