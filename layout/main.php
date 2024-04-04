<main>

    <div class="container">


        <div class="row justify-content-center gap-3 ">
            <?php
            foreach ($products as $product) {
            ?>

                <div class="col-auto ">

                    <div class="card" style="width: 18rem;">
                        <img src="<?= $product->image ?>" class='object-fit-contain rounded-top-1 p-2' style='height: 200px;'>
                        <div class="card-body bg-body-secondary " style='height: 200px;'>
                            <h5 class="pb-3 text-center "><?= $product->name ?></h5>
                            <hr>
                            <div class="d-flex justify-content-between ">

                                <span class="me-3"><?= $product->category->icon ?></span>
                                <h6 class="pb-2"><?= $userConnected->getPrice($product->price) . "€" ?></h6>

                            </div>
                            <i><?= is_a($product, 'Food') ? "Quantità: " . $product->weight : ''; ?></i>
                            <i><?= is_a($product, 'Game') && $product->hasBattery == true ? "Richiede batterie" : ''; ?></i>
                            <div class="pt-2"><?= is_a($product, 'Game') || is_a($product, 'Kennel') ? $product->getDimension() : '' ?></div>


                        </div>
                    </div>

                </div>

            <?php
            }
            ?>

        </div>

    </div>



</main>