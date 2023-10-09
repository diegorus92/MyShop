<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class CategoriesModel extends Model{
        protected $table = 'categories';
        protected $primaryKey = 'categoryId';

        protected $useAutoIncrement = true;

        protected $allowedFields = ['name'];

        
        public function getCategories(){
            
            return $this->findAll();
        }
    }
?>