<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsOmnomnomTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsOmnomnomTable Test Case
 */
class StatsOmnomnomTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsOmnomnomTable
     */
    public $StatsOmnomnom;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_omnomnom'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsOmnomnom') ? [] : ['className' => 'App\Model\Table\StatsOmnomnomTable'];
        $this->StatsOmnomnom = TableRegistry::get('StatsOmnomnom', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsOmnomnom);

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
