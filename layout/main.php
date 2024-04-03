<main>

    <?php
    foreach ($products as $product) {
    ?>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5><?= $product->name ?></h5>
                    <h6><?= $product->price ?></h6>
                    <small><?= $product->category->name ?></small>
                    <span><?= $product->category->icon ?></span>



                </div>
            </div>
        </div>
    <?php
    }
    ?>

</main>