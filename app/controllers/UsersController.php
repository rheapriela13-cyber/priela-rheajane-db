<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->model('UsersModel');
    }

    public function index() {
        // Kunin ang records mula sa model
        $data['users'] = $this->UsersModel->all();

        // I-load ang view at ipasa ang $data (Huwag nang gagamit ng print_r dito)
        $this->call->view('users', $data);
    }
}
?>