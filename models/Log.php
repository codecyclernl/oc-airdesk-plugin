<?php namespace Codecycler\Airdesk\Models;

use Model;

/**
 * Model
 */
class Log extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'codecycler_airdesk_logs';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'organisation'  => Organisation::class,
        'contact'       => Contact::class,
    ];

    public function beforeSave()
    {
        if ($this->contact) {
            $this->organisation = $this->contact->organisation;
        }
    }
}
