$(document).ready(function(){
    $('.card-text').slideUp();
});

$('.card').mouseenter(function(){
   $(this).children('.card-text').slideDown();
});

$('.card').mouseleave(function(){
    $(this).children('.card-text').slideUp();
}); 