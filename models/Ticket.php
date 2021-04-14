<?php namespace Codecycler\Airdesk\Models;

use Model;

/**
 * Model
 */
class Ticket extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = [
        'deleted_at',
        'due_at',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'codecycler_airdesk_tickets';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'organisation' => Organisation::class,
    ];
}
