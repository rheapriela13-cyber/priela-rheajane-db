<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Auth extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->library('session');
    }

    public function login() {
        if($this->session->userdata('logged_in')) {
            redirect('products');
        }
        $this->call->view('auth/login');
    }

    public function login_process() {
    $username = $this->io->post('username');
    $password = $this->io->post('password');

    $user = $this->db->table('users')->where('username', $username)->get();

    if($user && password_verify($password, $user['password'])) {
        $this->session->set_userdata([
            'user_id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['role'] ?? 'user',
            'logged_in' => TRUE
        ]);
        redirect('products');
    } else {
        if (!$user) {
            $data['error'] = 'DEBUG: user not found in database';
        } else {
            $data['error'] = 'DEBUG: user found, password does not match';
        }
        $this->call->view('auth/login', $data);
    }
}

    public function logout() {
        $this->session->unset_userdata(['user_id', 'username', 'role', 'logged_in']);
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
?>