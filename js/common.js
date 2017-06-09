//навигация по якорям
$(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
});

var $collapse = $('.collapse');

$collapse.on('show.bs.collapse', function () {
    $(this).parents('.card').find('.btn').html('Скрыть')
});
$collapse.on('hide.bs.collapse', function () {
    $(this).parents('.card').find('.btn').html('Подробнее')
});

$('.step-content').each(function () {
   var $bsBox = $('.bs-box'),
       $bsParticipant = $('.participant'),
       $bsListener = $('.listener'),
       $radioBox = $(this).find('.radio-box');

    $bsParticipant.show();

   $radioBox.find('input').on( "click", function() {

       $bsBox.hide();

       var $thisChecked = $( "input:checked" ).val();

       if ($thisChecked === 'Участник') {
           console.log('1');
           $bsParticipant.show();

       }
       else if ($thisChecked === 'Слушатель') {
           console.log('2');
           $bsListener.show();
       }
    });

});

//логика отправки формы
$('#registrationForm').on("submit", function() {
    var form = $(this),
        data = form.serialize();

    $.post('http://purnov.com/googledrive/gd.php', $(this).serialize(), function (data) {});

    $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: data,
        beforeSend: function (data) {
            form.find('input[type="submit"]').attr('disabled', 'disabled');
        },
        success: function (data) {
            if (data['error']) {
                console.log(data['error']);
            } else {
                $('.box-data-text').hide();
                form.html('<p class="success text-center">Спасибо, подписка прошла успешно!</p>');
            }
        },
        complete: function (data) {
            form.find('input[type="submit"]').prop('disabled', false);
        }
    });

    $.ajax({
        type: form.attr('method'),
        url: 'http://email.purnov.com/add_subscriber.html',
        data: data,
        success: function (data) {
        }
    });

    return false;
});


$(document).ready(function() {

    $('.img-graph-wrapper').animate({width:'100%'}, 7000);

});