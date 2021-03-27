<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTeamsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTeamsTable Test Case
 */
class UserTeamsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UserTeamsTable
     */
    public $UserTeams;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UserTeams',
        'app.Teams',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserTeams') ? [] : ['className' => UserTeamsTable::class];
        $this->UserTeams = TableRegistry::getTableLocator()->get('UserTeams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserTeams);

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
