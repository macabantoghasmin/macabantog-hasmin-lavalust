<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function before_action()
    {
        $this->call->library('database');
        $this->call->library('session');
        $this->call->model('ProductModel');
    }

    // READ - list all products
    public function index()
    {
        $data['products'] = $this->ProductModel->all();
        $this->call->view('product_view', $data);
    }

    // CREATE - show blank form
    public function create()
    {
        $this->call->view('product_create');
    }

    // CREATE - save new product
    public function store()
    {
        $this->ProductModel->insert([
            'product_name' => trim($this->request->post('product_name')),
            'description'  => trim($this->request->post('description')),
            'price'        => $this->request->post('price'),
            'quantity'     => $this->request->post('quantity'),
        ]);
        $this->response->redirect_after_post('/products');
    }

    // UPDATE - show edit form
    public function edit($id)
    {
        $product = $this->ProductModel->find($id);
        if (!$product) {
            $this->response->redirect('/products');
            return;
        }
        $data['product'] = $product;
        $this->call->view('product_edit', $data);
    }

    // UPDATE - save changes
    public function update($id)
    {
        $this->ProductModel->update($id, [
            'product_name' => trim($this->request->post('product_name')),
            'description'  => trim($this->request->post('description')),
            'price'        => $this->request->post('price'),
            'quantity'     => $this->request->post('quantity'),
        ]);
        $this->response->redirect_after_post('/products');
    }

    // DELETE
    public function delete($id)
    {
        $this->ProductModel->delete($id);
        $this->response->redirect_after_post('/products');
    }
}