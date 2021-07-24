<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsWordsSaidTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsWordsSaidTable Test Case
 */
class StatsWordsSaidTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsWordsSaidTable
     */
    public $StatsWordsSaid;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_words_said'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsWordsSaid') ? [] : ['className' => 'App\Model\Table\StatsWordsSaidTable'];
        $this->StatsWordsSaid = TableRegistry::get('StatsWordsSaid', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsWordsSaid);

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
