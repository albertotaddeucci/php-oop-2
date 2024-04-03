<main>

    <?php
    foreach ($products as $product) {
    ?>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5><?= $product->name ?></h5>
                    <h6><?= $product->price ?></h6>
                    <small><?= $product->category->name ?></small>



                </div>
            </div>
        </div>
    <?php
    }
    ?>

</main>