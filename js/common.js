//навигация по якорям
$(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
});

//логика отправки формы
$('#marathonForm').on("submit", function() {
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