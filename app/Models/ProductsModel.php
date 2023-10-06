<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class ProductsModel extends Model
    {
        protected $table = 'products';
        protected $primaryKey = 'productId';

        protected $useAutoIncrement = true;

        protected $allowedFields = ['name', 'price', 'stock', 'categoryProduct'];



        public function getProducts($id = null)
        {
            if(! $id == null){
                return $this->where(['productId' => $id])->first();
            }

            return $this->findAll();
        }
    }
?>