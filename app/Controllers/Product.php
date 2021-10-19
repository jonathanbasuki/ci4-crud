<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Product extends ResourceController
{
    public function __construct() 
    {
        $this->model = new \App\Models\ProductModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $dataProduct = $this->model->findAll();

        return view('product/index', ['products' => $dataProduct]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $dataProduct = $this->model->where('id', $id)->first();

        return view('product/show', ['product' => $dataProduct]);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('product/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $dataProduct = $this->request->getPost();
        $this->model->insert($dataProduct);

        return redirect()->to('/product');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $dataProduct = $this->model->where('id', $id)->first();

        return view('product/edit', ['product' => $dataProduct]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $dataProduct = $this->request->getPost();
        $this->model->where('id', $id)->set($dataProduct)->update();

        return redirect()->to('/product');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {   
        $this->model->delete($id);

        return redirect()->to('/product');
    }
}
