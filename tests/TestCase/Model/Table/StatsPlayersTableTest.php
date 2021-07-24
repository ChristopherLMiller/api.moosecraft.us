<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsPlayersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsPlayersTable Test Case
 */
class StatsPlayersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsPlayersTable
     */
    public $StatsPlayers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_players'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsPlayers') ? [] : ['className' => 'App\Model\Table\StatsPlayersTable'];
        $this->StatsPlayers = TableRegistry::get('StatsPlayers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsPlayers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
