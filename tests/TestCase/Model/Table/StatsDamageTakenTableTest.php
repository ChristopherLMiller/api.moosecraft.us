<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatsDamageTakenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatsDamageTakenTable Test Case
 */
class StatsDamageTakenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StatsDamageTakenTable
     */
    public $StatsDamageTaken;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.stats_damage_taken'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StatsDamageTaken') ? [] : ['className' => 'App\Model\Table\StatsDamageTakenTable'];
        $this->StatsDamageTaken = TableRegistry::get('StatsDamageTaken', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatsDamageTaken);

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
