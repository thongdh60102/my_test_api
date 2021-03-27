<?php
namespace App\Controller;

use Rest\Controller\RestController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends RestController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function getAllUsers()
    {
        $users = $this->Users->find('all')
                ->contain(['Teams' => function ($q) {
                    return $q->find('all')->contain(['Departments']);
                 }])
                ->contain(['Departments']);
        $json = $this->set(compact('users'));
    }
}
