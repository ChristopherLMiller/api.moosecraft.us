<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class MediaController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['index', 'slider']);
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->response->header('Access-Control-Allow-Origin', '*');
    }

    public function slider() {
        $sliderTable = TableRegistry::get('WebsiteSlider');
        $sliderElements = $sliderTable->find('all');

        $this->set('slider', $sliderElements);
        $this->set('_serialize', ['slider']);
    }
}
