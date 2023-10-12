<div class="container-fluid">
    <h2><?= $title ?></h2>

    <?php if(! empty($products) && is_array($products)): ?>

        <?php foreach($products as $product): ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <a href="<?php echo base_url('/show'); echo("/"); echo($product['productId']); ?>">
                            <h5 class="card-title"><?php echo($product['name']); ?></h5>
                        </a>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo('$'); echo($product['price']); ?></h6>
                        
                        <section>
                            <a href="<?php echo base_url('/product-edition-form'); echo("/"); echo($product['productId']); ?>" style="text-decoration:none">
                                <button class="btn btn-primary">
                                    <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                </button>
                            </a>
                            <a href="#" style="text-decoration:none">
                                <button class="btn btn-danger"  >
                                    <i class="fa-sharp fa-solid fa-trash"></i>
                                </button>
                            </a> 
                        </section> 
                    </div>
                </div>
        <?php endforeach ?>
    
    <?php else: ?>
        <p>There is no products here yet</p> 
    <?php endif ?>
</div>