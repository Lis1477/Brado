// устанавливаем высоту блока и размер шрифа
var height = $(window).width() * .34;
var font_size = $(window).width() * .0115;

if ($(this).width() > 768) {
    $('.main-page_block-1').css('height', height);
    $('.main-page_block-1_center-text').css('fontSize', font_size);
    // вставляем изображения
    $('.main-page_block-1_left').html('<img src="img/main_page_pic_1.jpg">');
    $('.main-page_block-1_right').html('<img src="img/main_page_pic_3.jpg">');
} else {
    height = (height * 4) + 320;
    $('.main-page_block-1').css('height', height);
    // вставляем изображения
    $('.main-page_block-1_left').html('<img src="img/main_page_pic_1_sm.jpg">');
    $('.main-page_block-1_right').html('<img src="img/main_page_pic_3_sm.jpg">');
}

// меняем высоту блока и размер шрифта при изменении ширины
$(window).resize(function() {
    if ($(this).width() > 768) {
        height = $(this).width() * .34;
        font_size = $(this).width() * .0115;
        $('.main-page_block-1').css('height', height);
        $('.main-page_block-1_center-text').css('fontSize', font_size);
        // вставляем изображения
        $('.main-page_block-1_left').html('<img src="img/main_page_pic_1.jpg">');
        $('.main-page_block-1_right').html('<img src="img/main_page_pic_3.jpg">');
    } else {
        $('.main-page_block-1').css('height', 'auto');
        $('.main-page_block-1_center-text').removeAttr('style');
        // вставляем изображения
        $('.main-page_block-1_left').html('<img src="img/main_page_pic_1_sm.jpg">');
        $('.main-page_block-1_right').html('<img src="img/main_page_pic_3_sm.jpg">');
    }
});

$(window).load(function() {
 
    // анимируем блок
    setTimeout(function () {
        $('.main-page_block-1_left').addClass('animate');
    }, 200);

    setTimeout(function () {
        $('.main-page_block-1_center, .main-page_block-1_center-text').addClass('animate');
    }, 500);

    setTimeout(function () {
        $('.main-page_block-1_right').addClass('animate');
    }, 800);

    console.log('анимация');

});