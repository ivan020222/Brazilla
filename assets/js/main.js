console.log(jQuery().jquery);
// //цей скрипт для меню «бургера»
// $(document).on('click', '#burger', function () {
//  $('.nav-menu').toggleClass('active');
// });
// Submit subscription form using Ajax
$('#subscribe').on('submit', function (e) {
    e.preventDefault();
    var $form = $(this);
    $.ajax({
        type: 'POST',
        url: 'source/subscription_ajax.php',
        data: $form.serialize()
    }).done(function () {
        $form[0].reset()
        alert('Дякуємо за підписку!')
    }).fail(function () {
        alert('Щось пішло не так.')
    });
});

$('.btn-buy').click(function () {
    var id = $(this).attr('id');
    $.ajax({
        type: "POST",
        url: 'source/cart.php',
        data: {id_tov: id},
    }).done(function(){
        alert('Товар додано до кошика');
    }).fail(function(){
        alert('Помилка.');
    });
});

var btn = $('#scroller');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});