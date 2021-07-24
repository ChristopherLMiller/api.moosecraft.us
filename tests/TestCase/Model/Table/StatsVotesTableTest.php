<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsVotesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsVotesTable Test Case
 */
class StatsVotesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsVotesTable
     */
    public $StatsVotes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_votes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsVotes') ? [] : ['className' => 'App\Model\Table\StatsVotesTable'];
        $this->StatsVotes = TableRegistry::get('StatsVotes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsVotes);

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
