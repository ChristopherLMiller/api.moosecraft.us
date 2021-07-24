<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use App\Minecraft\Jsonapi;
use App\Minecraft\MinecraftQuery;
use App\Minecraft\MinecraftQueryException;

class ServerController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['index', 'view', 'online', 'status', 'stats']);
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

    /*
    * Returns list of online players
    */
    public function online() {
        $this->viewClass = 'Json';

        $JSONAPI = new JSONAPI('mc.moosemanstudios.local', 20059, 'admin', 'D+eVasTv');

        $players_raw = $JSONAPI->call('players.online')[0]['success'];  // who's online
        $online = $JSONAPI->call('players.online.count')[0]['success'];  // how many are online
        $max = $JSONAPI->call('players.online.limit')[0]['success'];  // how many the server can support

        $players = array();
        foreach ($players_raw as $player) {
            $players[] = $player['name'];
        }

        $this->set('players', $players);
        $this->set('online', $online);
        $this->set('max', $max);
        $this->set('_serialize', ['players', 'online', 'max']);
    }

    /*
    * Returns the status specified server
    * @Param the server to check
    */
    public function status($server = "all") {
        $this->viewClass = 'Json';

        $status = '';

        // Options here are moosecraft, mojang, or all
        if ($server == "moosecraft") {
            try {
                // get status of the minecraft server itself
                $query = new MinecraftQuery();
                $query->Connect('mc.moosemanstudios.local', 25565);

                // query was able to connect, so lets append to statuses
                $status = "green";
            } catch (MinecraftQueryException $e) {
                // not able to connect, append but with red status
                $status = "red";
            }
        } else if ($server == "mojang") {
            $URL = 'http://status.mojang.com/check';
            $mojang_servers = json_decode(@file_get_contents($URL));
            if ( $mojang_servers != null) {

                // default is green.
                $indicator = 'green';

                foreach($mojang_servers as $server) {
                    foreach($server as $name => $server_status) {
                        if ($indicator == "green" && ($server_status == "yellow" || $server_status == "red")) {
                            $indicator = $server_status;
                        } elseif ($indicator == "yellow" && $server_status == "red") {
                            $indicator  = $server_status;
                        }
                    }
                }
                $status = $indicator;
            }
        } else {
            // implement to return all
        }

        $this->set('status', $status);
        $this->set('_serialize', ['status']);
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);

        $this->response->header([
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Headers' => 'Content-Type'
        ]);
    }

    public function stats() {
        $this->viewClass = 'Json';

        $statsPlayersTable = TableRegistry::get('StatsPlayers');
        $player = $statsPlayersTable->find('all')->contain([
            'StatsArrows', 'StatsBedsEntered', 'StatsBlocksBroken', 'StatsBlocksPlaced',
            'StatsBucketsEmptied', 'StatsBucketsFilled', 'StatsCommandsDone', 'StatsDamageTaken',
            'StatsDeath', 'StatsEggsThrown', 'StatsFishCaught', 'StatsItemsCrafted', 'StatsItemsDropped',
            'StatsItemsPickedUp', 'StatsJoins', 'StatsKill', 'StatsLastJoin', 'StatsLastSeen',
            'StatsLocks', 'StatsMove', 'StatsOmnomnom', 'StatsPlaytime', 'StatsPvpStreak', 'StatsPvp',
            'StatsPvpTopStreak', 'StatsShears', 'StatsTeleports', 'StatsTimesChangedWorld',
            'StatsTimesKicked', 'StatsToolsBroken', 'StatsTrades', 'StatsVotes', 'StatsWordsSaid', 'StatsXpGained'
        ]);
    }
}
