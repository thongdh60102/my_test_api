<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartmentTeamsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartmentTeamsTable Test Case
 */
class DepartmentTeamsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartmentTeamsTable
     */
    public $DepartmentTeams;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DepartmentTeams',
        'app.Teams',
        'app.Departments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DepartmentTeams') ? [] : ['className' => DepartmentTeamsTable::class];
        $this->DepartmentTeams = TableRegistry::getTableLocator()->get('DepartmentTeams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DepartmentTeams);

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
