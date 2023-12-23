document.getElementById('reg').addEventListener("click",function(){
    window.location.href='signup.php';

});
document.getElementsByClassName('shop').addEventListener("click",function(){
    window.location.href='shop.php';

});

$(document).ready(function(){
    $('.card-text').slideLeft();
});

$('.card').mouseenter(function(){
   $(this).children('.card-text').slideRight();
});

$('.card').mouseleave(function(){
    $(this).children('.card-text').slideLeft();
});