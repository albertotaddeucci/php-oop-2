<main>

    <div class="container">


        <div class="row justify-content-center ">
            <?php
            foreach ($products as $product) {
            ?>

                <div class="col-auto">

                    <div class="card m-0 p-0 ' style='width: 15rem;" style="width: 18rem;">
                        <img src="<?= $product->image ?>" class='object-fit-contain rounded-top-1 p-2' style='height: 25rem;'>
                        <div class="card-body bg-body-secondary ">
                            <h5 class="pb-3 text-center "><?= $product->name ?></h5>
                            <hr>
                            <h6 class="pb-2"><?= $userConnected->getPrice($product->price) . "€" ?></h6>
                            <span class="me-3"><?= $product->category->icon ?></span>
                            <i class="text-empa"><?= is_a($product, 'Food') ? "Quantità: " . $product->weight : ''; ?></i>
                            <i class="text-empa"><?= is_a($product, 'Game') && $product->hasBattery == true ? "Richiede batterie" : ''; ?></i>


                        </div>
                    </div>

                </div>

            <?php
            }
            ?>

        </div>

    </div>



</main>