<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class RulesController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['index']);
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->response->header('Access-Control-Allow-Origin', '*');
    }

    public function index() {
        $rulesCategoriesTable = TableRegistry::get('RulesCategories');
        $categories = $rulesCategoriesTable->find('all')->contain(['Rules']);

        $this->set('categories', $categories);
        $this->set('_serialize', ['categories']);
    }
}
