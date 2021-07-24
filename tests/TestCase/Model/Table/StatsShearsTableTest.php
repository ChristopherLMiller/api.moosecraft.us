<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsShearsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsShearsTable Test Case
 */
class StatsShearsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsShearsTable
     */
    public $StatsShears;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_shears'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsShears') ? [] : ['className' => 'App\Model\Table\StatsShearsTable'];
        $this->StatsShears = TableRegistry::get('StatsShears', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsShears);

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
