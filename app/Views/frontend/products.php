<div class="container-fluid">
    <h2><?= $title ?></h2>

    <?php if(! empty($products) && is_array($products)): ?>

        <?php foreach($products as $product): ?>
            <a href="<?php echo base_url('/show'); echo("/"); echo($product['productId']); ?>">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo($product['name']); ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo('$'); echo($product['price']); ?></h6>
                </div>
            </div>
            </a>
        <?php endforeach ?>
    
    <?php else: ?>
        <p>There is no products here yet</p> 
    <?php endif ?>
</div>