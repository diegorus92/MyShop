<?php
    namespace App\Controllers;
    use App\Models\ProductsModel;

    class Products extends BaseController
    {
        public function index()
        {
            $model = new ProductsModel();
            $data = [
                'products' => $model->getProducts(),
                'title' => 'Products',
                'nameBussines' => 'My Shop'
            ];

            return view('frontend/header', $data).
                view('frontend/menu', $data).
                view('backend/add_button').
                view('frontend/products', $data).
                view('frontend/footer');
        }

        public function showProduct($id)
        {
            $model = new ProductsModel();
            $data = [
                'product' => $model->getProducts($id),
                'title' => 'Selected Product',
                'nameBussines' => 'My Shop'
            ];

            return view('frontend/header', $data).
                view('frontend/menu', $data).
                view('frontend/selected_product', $data).
                view('frontend/footer');
        }
    }
?>