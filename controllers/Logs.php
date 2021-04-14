<?php namespace Codecycler\Airdesk\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class Logs extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage_logs'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Codecycler.Airdesk', 'airdesk', 'logs');
    }

    public function create()
    {
        BackendMenu::setContext('Codecycler.Airdesk', 'airdesk', 'create-log');
        return $this->asExtension('FormController')->create();
    }
}
