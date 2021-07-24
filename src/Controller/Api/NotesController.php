<?php 
namespace App\Controller\Api;

use App\Controller\Api\AppController;
use Cake\Event\Event;

class NotesController extends AppController {
    
    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 15,
        'sorthWhitelist' => [
            'id', 'player', 'poster', 'time'
        ]
    ];
}