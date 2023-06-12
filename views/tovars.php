<?php
    $tovars = allTovar('storage/tovar.ser');
?>
<div class="blends-cards row row-cols-1 row-cols-md-2 row-cols-lg-3 g-6">
    <?php foreach ($tovars as list($index, $name, $descr, $price, $img)):  ?>
    <div class="col mb-4">
        <div class="card">
            <img src="img/blends/<?= $img ?>" class="card-img-top" alt="Магазин кави">
            <div class="card-body">
                <h5 class="card-title"><?= $name ?></h5>
                <p class="card-text"> <?= $descr ?> </p>
                <div class="d-flex flex-inline align-items-center">
                    <h5 class="price me-4" id="price_<?= $index+1 ?>"> <?= $price ?>,00 грн. </h5>
                    <button class="btn btn-dark btn-buy" id="<?= $index+1 ?>" type="button">Купити</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>