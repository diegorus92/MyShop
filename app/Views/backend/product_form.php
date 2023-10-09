<div class="container-sm">

    <?= session()->getFlashdata('error'); ?>
    <?= validation_list_errors(); ?>

    <?php $validation = \Config\Services::Validation(); //Used for get error messages in every input?>
    <form method="post" action="<?php echo base_url('/create-product') ?>">
        <?= csrf_field(); ?> <!-- creates a hidden input with a CSRF token that helps protect against some common attacks. -->
        
        <!-- Show message wether the post was fail or not -->
        <?php if(!empty(session()->getFlashdata('fail'))){ ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
        <?php } ?>

        <?php if(!empty(session()->getFlashdata('success'))){ ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
        <?php } ?>
        <!-------------------------------------------------------->



        <input class="form-control" type="text" name="name" placeholder="Product name..." aria-label="default input example">
        <!--Error control-->
        <?php if($validation->getError('name')) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError('name'); ?>
            </div>
        <?php } ?>



        <input class="form-control" type="number" name="price" placeholder="Price...$" aria-label="default input example">
        <!--Error control-->
        <?php if($validation->getError('price')) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError('price'); ?>
            </div>
        <?php } ?>




        <input class="form-control" type="number" name="stock" placeholder="qty stock..." aria-label="default input example">
        <!--Error control-->
        <?php if($validation->getError('stock')) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError('stock'); ?>
            </div>
        <?php } ?>




        <select class="form-select" name="category" aria-label="Default select example">
            <option selected>Category</option>
            <?php foreach($categories as $category): ?>
                <option value="<?= $category['categoryId']; ?>"> <?= $category['name']; ?></option>
            <?php endforeach ?>
        </select>
        <!--Error control-->
        <?php if($validation->getError('category')) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError('category'); ?>
            </div>
        <?php } ?>



        <button type="submit" class="btn btn-primary">Save Product</button>
        <button type="reset" class="btn btn-danger">Clear</button>

    </form>

    <a href="<?php echo base_url('products'); ?>"><button type="button" class="btn btn-secondary">Close</button></a>
    
</div>