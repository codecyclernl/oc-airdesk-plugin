<?php namespace Codecycler\Airdesk\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Contacts extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\RelationController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relations.yaml';

    public $requiredPermissions = [
        'manage_contacts'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Codecycler.Airdesk', 'airdesk', 'contacts');
    }
}
