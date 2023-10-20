$(document).ready(function(){
    $('.slider').slick({
        arrows:false,
        dots:true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
    });
});

var target='.catalog-card__pregnancy , .catalog-card__health , .catalog-card__true , .catalog-card__publicity ,.catalog-card__body , .catalog-card__protection , .catalog-card__abundance , .catalog-card__protection, .slider-item__sfera , .slider-item__activet , .slider-item__about';

jQuery(target).each(function(){
    jQuery(this).click(function(){
        location = jQuery(this).find('a').attr('href');});
    jQuery(this).css('cursor','pointer');
});



