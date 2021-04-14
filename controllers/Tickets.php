<?php namespace Codecycler\Airdesk\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Codecycler\Airdesk\Models\Ticket;
use Codecycler\Airdesk\VueComponents\TodoView;

class Tickets extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage_tickets'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Codecycler.Airdesk', 'airdesk', 'tasks');
    }

    public function todo()
    {
        $this->addJs('/plugins/codecycler/airdesk/assets/js/app.js');

        $this->vars['todoItems'] = Ticket::all();

        $this->registerVueComponent(TodoView::class);
    }
}
