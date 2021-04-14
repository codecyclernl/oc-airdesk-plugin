<?php namespace Codecycler\Airdesk\Models;

use Model;

/**
 * Model
 */
class Organisation extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'codecycler_airdesk_organisations';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'contacts' => Contact::class,
        'logs' => Log::class,
        'tickets' => Ticket::class,
    ];
}
