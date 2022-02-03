<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dashboard Controller
 *
 * @method \App\Model\Entity\Dashboard[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DashboardController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
	{
    	parent::beforeFilter($event);
	$this->loadModel('Users');
    	// Configure the login action to not require authentication, preventing
    	// the infinite redirect loop issue
    	//$this->Authentication->addUnauthenticatedActions(['login']);
	}
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $user = $this->Users->newEmptyEntity();
	$this->Authorization->authorize($user, 'accessInternal');
	$this->viewBuilder()->setLayout('aonghas');	
	$this->set('selectedPage', "dashboard");
	// Shows the role and username of the logged in user
	$this->set('currentUser', $this->request->getAttribute('identity')->username);
	$this->set('currentUserRole', $this->request->getAttribute('identity')->role);
    }
}
