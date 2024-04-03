<main>

    <div class="container">


        <div class="row">
            <?php
            foreach ($products as $product) {
            ?>

                <div class="col-auto">

                    <div class="card" style="width: 18rem;">
                        <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5><?= $product->name ?></h5>
                            <h6><?= $product->price ?></h6>
                            <span><?= $product->category->icon ?></span>
                            <span><?= isset($product->weight) ? $product->weight : ''; ?></span>
                            <span><?= isset($product->hasBattery) ? "Richiede batterie" : ''; ?></span>





                        </div>
                    </div>

                </div>

            <?php
            }
            ?>

        </div>

    </div>



</main>