<div class="container-sm">

    <?= session()->getFlashdata('error'); ?>
    <?= validation_list_errors(); ?>

    <h3><?= $mode ?></h3>

    <?php $validation = \Config\Services::Validation();?>
    <form method="post" action="<?php echo base_url('/edit-product'); echo('/'); echo($product['productId']); ?>">
        <?= csrf_field(); ?> <!-- creates a hidden input with a CSRF token that helps protect against some common attacks. -->
        
        <!-- Show message wether the post was fail or not -->
        <?php if(!empty(session()->getFlashdata('fail'))){ ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
        <?php } ?>

        <?php if(!empty(session()->getFlashdata('success'))){ ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
        <?php } ?>
        <!-------------------------------------------------------->



        <input class="form-control" type="text" name="name" placeholder="Product name..." value="<?= $product['name'] ?>" aria-label="default input example">
        <!--Error control-->
        <?php if($validation->getError('name')) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError('name'); ?>
            </div>
        <?php } ?>



        <input class="form-control" type="number" name="price" placeholder="Price...$" value="<?= $product['price'] ?>" aria-label="default input example">
        <!--Error control-->
        <?php if($validation->getError('price')) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError('price'); ?>
            </div>
        <?php } ?>




        <input class="form-control" type="number" name="stock" placeholder="qty stock..." value="<?= $product['stock'] ?>" aria-label="default input example">
        <!--Error control-->
        <?php if($validation->getError('stock')) { ?>
            <div class="alert alert-danger mt-2">
                <?= $validation->getError('stock'); ?>
            </div>
        <?php } ?>




        <select class="form-select" name="category" aria-label="Default select example">

            <?php foreach($categories as $category): ?>
                <?php if($product['categoryProduct'] == $category['categoryId']): ?>
                    <option selected value="<?= $category['categoryId']; ?>"> <?= $category['name']; ?></option>
                <?php else: ?>
                    <option value="<?= $category['categoryId']; ?>"> <?= $category['name']; ?></option>
                <?php endif; ?>
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