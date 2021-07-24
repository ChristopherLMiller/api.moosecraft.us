<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;
use Cake\Event\Event;
use Cake\Utility\Text;

class ArticlesController extends AppController {

    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'sorthWhitelist' => [
            'id', 'title'
        ]
    ];

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['index', 'view', 'feed']);
    }

    public function index() {
        $this->Crud->on('beforePaginate', function(Event $event) {
            $this->paginate = [
                'order' => [
                    'Articles.created' => 'DESC'
                ]
            ];
        });

        return $this->Crud->execute();
    }

    public function view($slug = null) {
        if (!$slug) {
            throw new NotFoundException();
        }

        $article = $this->Articles->findBySlug($slug)->first();

        $this->set('article', $article);
        $this->set('_serialize', 'article');
    }

    public function feed() {
        $this->viewBuilder()->className('Feed.Rss');

        $atomLink = array('controller' => 'articles', 'action' => 'feed', '_ext' => 'rss');

        $articles = $this->Articles->find('all', [
            'fields' => ['title', 'slug', 'body'],
            'order' => ['Articles.Created' => 'DESC']
        ])->toArray();

        foreach ($articles as $article) {
            $article['link'] = 'http://moosecraft.us/articles/' . $article['slug'];
            $article['body'] = Text::truncate($article['body'], 50, ['ellipses' => '...', 'exact' => false]);
            unset($article['slug']);
        }

        $data = array(
            'channel' => array(
                'title' => 'Moosecraft',
                'link' => 'http://moosecraft.us',
                'description' => 'Latest News',
                'atom:link' => array('@href' => $atomLink),
            ),
            'items' => $articles,
        );

        $this->set(array('data' => $data, '_serialize' => 'data'));
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->response->header('Access-Control-Allow-Origin', '*');
    }
}
