<main>

    <div class="container">


        <div class="row">
            <?php
            foreach ($products as $product) {
            ?>

                <div class="col-auto">

                    <div class="card m-0 p-0 ' style='width: 15rem;" style="width: 18rem;">
                        <img src="<?= $product->image ?>" class='object-fit-contain rounded-top-1 ' style='height: 25rem;'>
                        <div class="card-body">
                            <h5><?= $product->name ?></h5>
                            <h6><?= $userConnected->getPrice($product->price) . "€" ?></h6>
                            <span><?= $product->category->icon ?></span>
                            <span><?= is_a($product, 'Food') ? $product->weight : ''; ?></span>
                            <span><?= is_a($product, 'Game') && $product->hasBattery == true ? "Richiede batterie" : ''; ?></span>


                        </div>
                    </div>

                </div>

            <?php
            }
            ?>

        </div>

    </div>



</main>