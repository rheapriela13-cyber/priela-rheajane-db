<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->call->library('session');
        $this->call->model('ProductModel');

        if(!$this->session->userdata('logged_in')) {
            redirect('auth/login');
            exit;
        }
    }

    private function require_admin() {
        if($this->session->userdata('role') !== 'admin') {
            http_response_code(403);
            exit('Only administrators can modify products.');
        }
    }

    public function index() {
        $data['products'] = $this->ProductModel->get_all();
        $data['can_manage_products'] = $this->session->userdata('role') === 'admin';
        $this->call->view('products/index', $data);
    }

    public function create() {
        $this->require_admin();
        $this->call->view('products/create');
    }

    public function store() {
        $this->require_admin();
        $data = array(
            'product_name' => $this->io->post('product_name'),
            'description'  => $this->io->post('description'),
            'price'        => $this->io->post('price'),
            'quantity'     => $this->io->post('quantity')
        );

        $this->ProductModel->insert($data);
        redirect('products');
    }

    public function edit($id) {
        $this->require_admin();
        $data['product'] = $this->ProductModel->get_one($id);
        $this->call->view('products/edit', $data);
    }

    public function update($id) {
        $this->require_admin();
        $data = array(
            'product_name' => $this->io->post('product_name'),
            'description'  => $this->io->post('description'),
            'price'        => $this->io->post('price'),
            'quantity'     => $this->io->post('quantity')
        );

        $this->ProductModel->update($id, $data);
        redirect('products');
    }

    public function delete($id) {
        $this->require_admin();
        $this->ProductModel->delete($id);
        redirect('products');
    }
}
?>