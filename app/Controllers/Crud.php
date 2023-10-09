<?php 
    namespace App\Controllers;
    use App\Models\ProductsModel;
    use App\Models\CategoriesModel;

    class Crud extends BaseController{
        
        public function showProductForm(){
            
            helper('form');

            $modelProducts = new ProductsModel();
            $modelCategories = new CategoriesModel();
            $data = [
                'products' => $modelProducts->getProducts(),
                'categories' => $modelCategories->getCategories(),
                'title' => 'Products',
                'nameBussines' => 'My Shop'
            ];

            return view('frontend/header', $data).
                view('frontend/menu', $data).
                view('backend/product_form', $data).
                view('frontend/products', $data).
                view('frontend/footer');
        }


        public function create(){
            helper('form');

            $post = $this->validate([
                'name' => 'required|min_length[3]|max_length[50]',
                'price' => 'required|min_length[2]',
                'stock' => 'required|min_length[1]|max_length[9]',
                'category' => 'required'
            ]);

            //check if submited data passed the validation rules
            if(! $post){
                //If validation fails...
                $modelProducts = new ProductsModel();
                $modelCategories = new CategoriesModel();
                $data = [
                    'products' => $modelProducts->getProducts(),
                    'categories' => $modelCategories->getCategories(),
                    'title' => 'Products',
                    'nameBussines' => 'My Shop',
                ];
    
                return view('frontend/header', $data).
                    view('frontend/menu', $data).
                    view('backend/product_form', [$data, 'validation' => $this-> validator]).
                    view('frontend/products', $data).
                    view('frontend/footer');
            }
            else{

                $productModel = new ProductsModel();

                $productModel->save([
                    'name' => $this->request->getVar('name'),
                    'price' => $this->request->getVar('price'),
                    'stock' => $this->request->getVar('stock'),
                    'categoryProduct' => $this->request->getVar('category')
                ]);

                session()->setFlashdata('success', 'Product added!');
                return $this->response->redirect('products');
            }
        }
    }
?>