<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;
use App\Minecraft\Jsonapi;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Network\Exception\NotFoundException;
use Cake\Network\Exception\BadRequestException;

class PlayersController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['index', 'view', 'stats', 'health', 'hunger']);
    }

    public function index() {
        // get list of all player names and return that
        $statsPlayersTable = TableRegistry::get('StatsPlayers');
        $players = $statsPlayersTable->find('all', ['order' => ['name' => 'ASC']])->contain(['StatsPlaytime', 'StatsLastSeen', 'StatsLastJoin']);

        $this->set('players', $players);
        $this->set('_serialize', ['players']);
    }

    public function view($name = null) {
        $this->viewClass = 'Json';

        if (!$name) {
            throw new NotFoundException();
        }

        $statsPlayersTable = TableRegistry::get('StatsPlayers');
        $player = $statsPlayersTable->findByName($name)->contain([
            'StatsArrows', 'StatsBedsEntered', 'StatsBlocksBroken', 'StatsBlocksPlaced',
            'StatsBucketsEmptied', 'StatsBucketsFilled', 'StatsCommandsDone', 'StatsDamageTaken',
            'StatsDeath', 'StatsEggsThrown', 'StatsFishCaught', 'StatsItemsCrafted', 'StatsItemsDropped',
            'StatsItemsPickedUp', 'StatsJoins', 'StatsKill', 'StatsLastJoin', 'StatsLastSeen',
            'StatsLocks', 'StatsMove', 'StatsOmnomnom', 'StatsPlaytime', 'StatsPvpStreak', 'StatsPvp',
            'StatsPvpTopStreak', 'StatsShears', 'StatsTeleports', 'StatsTimesChangedWorld',
            'StatsTimesKicked', 'StatsToolsBroken', 'StatsTrades', 'StatsVotes', 'StatsWordsSaid', 'StatsXpGained'
        ]);

        $this->set('player', $player);
        $this->set('_serialize', ['player']);
    }

    public function health($name = null) {
        if (!$name) {
            throw new NotFoundException();
        }

        $JSONAPI = new JSONAPI('mc.moosemanstudios.local', 20059, 'admin', 'D+eVasTv');

        $result = $JSONAPI->call('players.name', [$name])[0];

        if ($result['result'] != 'success') {
            throw new BadRequestException();
        }

        $this->set('health', $result['success']['health']);
        $this->set('_serialize', ['health']);
    }

    public function hunger($name = null) {
        if (!$name) {
            throw new NotFoundException();
        }

        $JSONAPI = new JSONAPI('mc.moosemanstudios.local', 20059, 'admin', 'D+eVasTv');

        $result = $JSONAPI->call('players.name', [$name])[0];

        if ($result['result'] != 'success') {
            throw new BadRequestException();
        }

        $this->set('hunger', $result['success']['foodLevel']);
        $this->set('_serialize', ['hunger']);
    }

    public function stats($name = null) {
        if (!$name) {
            throw new NotFoundException();
        }

        $JSONAPI = new JSONAPI('mc.moosemanstudios.local', 20059, 'admin', 'D+eVasTv');

        $result = $JSONAPI->call('players.name', [$name])[0];

        if ($result['result'] != 'success') {
            throw new BadRequestException();
        }

        $this->set('stats', $result['success']);
        $this->set('_serialize', ['stats']);
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->response->header([
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Headers' => 'Content-Type'
        ]);
    }
}
