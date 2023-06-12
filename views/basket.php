<?php 
$tovars = allTovar('storage/tovar.ser');
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
 <span class="navbar-brand">Кошик</span>
 <ul class="navbar-nav px-3 ml-auto">
 <li class="nav-item text-nowrap">
 <a class="nav-link" href="index.php">На головну</a>
 </li>
 </ul>
</nav>
<main role="main" class="container pt-3">
<?php 
session_start();
if (!isset($_SESSION['cart'])):?>

<h2>Кошик порожній</h2>

<?php else :?>
<?php $temp=$_SESSION['cart'];
    $amount = 0;
    $num = 0;
?>       
<h2>Обрані товари</h2>
 <table class="table table-striped table-sm">
 <thead>
 <tr>
 <th>#</th>
 <th>Назва товару</th>
 <th>Ціна</th>
 <th>Кількість</th>
 <th>Вартість</th>
 <th></th>
 </tr>
 </thead>
 <tbody>
 <?php foreach ($temp as $id=>$cou): ?>
<?php $amount+=$tovars[$id-1][3] * $cou; ?>
 <tr>
 <td><?=++$num;?></td>
 <td><?= $tovars[$id-1][1] ?></td>
 <td><?= $tovars[$id-1][3] ?>,00</td>
 <td><input type="number" class="count-product" id="<?= $id ?>" value="<?= $cou ?>"></td>
 <td><span amount="<?= $tovars[$id-1][3] * $cou ?>"><?= $tovars[$id-1][3] * $cou ?>,00</td>
 <td><a href="#" class="text-secondary tov-del" id="<?= $id ?>">Видалити</a></td>
 </tr>
 <?php endforeach; ?>
 </tbody>
 <tfoot>
    <td colspan="3"></td>
    <td><strong>Загальна вартість:</strong></td>
    <td><strong><?= $amount ?>,00 грн.</strong> </td>
    <td></td>
</tfoot>
 </table>
 <div class="row row-col-2">
    <div class="col">
    <a href="source/cartclear.php" class="btn btn-secondary btn-block clear">Очистити кошик</a>
    </div>
    <div class="col">
    <button class="btn btn-primary btn-block delivery">Оформити замовлення</button>
    </div>
 </div>
 
 <?php endif; ?>
</main>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    console.log(jQuery().jquery);
    $('.count-product').change(function () {      
        var col = $(this).val();
        if (col<1){ col = 1; $(this).val(1); }
        var id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'source/cartcount.php',
            data: {col_tov: col, id_tov: id},
            success: function() {
                location.reload();
            }
        });
    });
    $('.tov-del').click(function () {   
    var id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: 'source/cartdel.php',
            data: {id_tov: id},
            success: function(data) {
                location.reload();
            }
        });
    });
</script>