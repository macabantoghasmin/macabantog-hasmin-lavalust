<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->database();
        $this->call->library('session');
    }

    public function login()
    {
        $data = [];
        $error = '';

        if ($this->request->method() == 'post') {

            $username = $this->request->post('username');
            $password = $this->request->post('password');

            $user = $this->db
                ->table('users')
                ->where('username', $username)
                ->get();

            if ($user && $password === $user['password']) {

                $this->session->set_userdata([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'logged_in' => true
                ]);

                redirect('/products');
                return;
            }

            $error = 'Invalid username or password.';
        }

        $data['error'] = $error;

        $this->call->view('login', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata([
            'user_id',
            'username',
            'logged_in'
        ]);

        redirect('/login');
    }
}