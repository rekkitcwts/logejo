<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
	// Method that checks if a login is needed or not
	// Redirects to login page if authentication is needed
	public function beforeFilter(\Cake\Event\EventInterface $event)
	{
    	parent::beforeFilter($event);
    	// Configure the login action to not require authentication, preventing
    	// the infinite redirect loop issue
    	$this->Authentication->addUnauthenticatedActions(['login', 'add']);
	}

	public function login()
	{
	// UsersController - In the add, login, and logout methods
	// This will skip authorisation on specific pages
	$this->Authorization->skipAuthorization();

    	$this->request->allowMethod(['get', 'post']);
    	$result = $this->Authentication->getResult();
    	// regardless of POST or GET, redirect if user is logged in
    	if ($result->isValid()) {
        	// TEMPORARY: redirect to /users after login success
			// TBD: redirect depending if user is internal or external
        	$redirect = $this->request->getQuery('redirect', [
            	'controller' => 'Users',
            	'action' => 'index',
        	]);

        	return $this->redirect($redirect);
    	}
    	// display error if user submitted and authentication failed
    	if ($this->request->is('post') && !$result->isValid()) {
        	$this->Flash->error(__('Invalid username or password'));
    	}
	}

	// Logs the user out
	// Affects: Internal users, external users
    public function logout()
	{
	// UsersController - In the add, login, and logout methods
	// This will skip authorisation on specific pages
	$this->Authorization->skipAuthorization();
    	$result = $this->Authentication->getResult();
    	// regardless of POST or GET, redirect if user is logged in
    	if ($result->isValid()) {
        	$this->Authentication->logout();
        	return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    	}
	}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
	// View and index actions are public methods
	// and don't require authorization checks.
	// TBD: only selected View actions (e.g. flats) should be public
	$this->Authorization->skipAuthorization();
        $users = $this->paginate($this->Users);

	// TEST - switches layouts depending on user's role.
	// Tests for guests
	if (is_null($this->request->getAttribute('identity')->role))
	{
	    $this->viewBuilder()->setLayout('default');	
	}
	// Tests for internal users
	if ($this->request->getAttribute('identity')->role == 'int_admin')
	{
	    $this->viewBuilder()->setLayout('aonghas');	
	    // TEST VARIABLE - shows the role and username of the logged in user
	    $this->set('currentUser', $this->request->getAttribute('identity')->username);
	    // Avoid accidental self-deletion: pass user's ID for view use.
	    $this->set('currentUserID', $this->request->getAttribute('identity')->id);
	}
	
        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
	// View and index actions are public methods
	// and don't require authorization checks.
	// TBD: only selected View actions (e.g. flats) should be public
	$this->Authorization->skipAuthorization();
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
	// UsersController - In the add, login, and logout methods
	// This will skip authorisation on specific pages
	// $this->Authorization->skipAuthorization();

        $user = $this->Users->newEmptyEntity();
    	$this->Authorization->authorize($user);

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
