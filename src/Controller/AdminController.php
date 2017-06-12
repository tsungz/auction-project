<?php

namespace App\Controller;

//use Cake\ORM\TableRegistry;
//use Cake\Core\Configure;

class AdminController extends AppController
{

    public function index()
    {
        $user = $this->request->session()->read('User.username');
        $this->set('userName', $user);
    }
//    public function add()
//    {
//        $roles = Configure::read('role');
//        $usersTable = TableRegistry::get('Users');
//        $user = $usersTable->newEntity();
//        if ($this->request->is('post')) {
//            $data = $this->request->data;
//            $data['password'] = md5($data['password']);
//            $user = $usersTable->patchEntity($user, $data);
//            if ($usersTable->save($user)) {
//                $this->Flash->success(__('OK'));
//                return $this->redirect(['action' => 'index']);
//            }
//            $this->Flash->error(__('NOOO'));
//        }
//        $this->set('role', $roles);
//        $this->set('user', $user);
//    }
//
//    public function edit($id)
//    {
//        $roles = Configure::read('role');
//        $userTable = TableRegistry::get('Users');
//        $user = $userTable->get($id);
//        if ($this->request->is(['post', 'put'])) {
//            $data = $this->request->data;
//            $data['password'] = md5($data['password']);
//            $userTable->patchEntity($user, $data);
//            if ($userTable->save($user)) {
//                $this->Flash->success(__('Đã sửa'));
//                return $this->redirect(['action' => 'risuto']);
//            }
//            $this->Flash->error(__('Không sửa được!'));
//        }
//        $this->set('role', $roles);
//        $this->set('user', $user);
//    }
//
//    public function delete($id)
//    {
//        $this->request->allowMethod(['post', 'delete']);
//
//        $userTable = TableRegistry::get('Users');
//        $user = $userTable->get($id);
//        if ($userTable->delete($user)) {
//            $this->Flash->success(__('Đã xóa user_id = {0}', h($id)));
//            return $this->redirect(['action' => 'risuto']);
//        }
//    }
//
//    public function search()
//    {
//        $totalUser = 0;
//        $data = array();
//        if ($this->request->is('post')) {
//            $usersTable = TableRegistry::get('Users');
//            $users = $usersTable->find();
//            $data = $this->request->data;
//
//            foreach ($data as $k => $v) {
//                if ($v !== "") {
//                    if ($k == "role") {
//                        $users->where(["$k" => $v]);
//                    } else {
//                        $users->where(["$k LIKE" => "%$v%"]);
//                    }
//                }
//            }
//            $totalUser = $users->count();
//            $this->set('users', $users);
//        }
//
//        $roles = Configure::read('role');
//        $this->set('role', $roles);
//        $this->set('totalUser', $totalUser);
//        $this->set('data', $data);
//    }
//
//    public function risuto()
//    {
//        $userTable = TableRegistry::get('Users');
//        $users = $userTable->find('all')->toArray();
//        $this->set('users', $users);
//    }
//
}
