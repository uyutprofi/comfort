$(document).ready(function() {

    $("#scroll, #menu, .hypercomments").on("click", "a", function(event) {

        event.preventDefault();
        var attr_id = $(this).attr('class') && $(this).attr('class') == 'hypercomments' ? 'hypercomments' : '',
            id = attr_id == 'hypercomments' ? $(this).attr('data-href') : $(this).attr('href'),
            speed = attr_id == 'hypercomments' ? 1000 : 1500,
            top = $(id).offset().top;
        //console.log(speed);
        $('html, body').animate({ scrollTop: top }, speed);

    });

    $(".start").on("click", function(event) {
        event.preventDefault();
        var id = $(this).attr('data-href'),
            top = $('#' + id).offset().top;
        $('body,html').animate({ scrollTop: top }, 1500);

    });


    $('form input[name=phone]').mask("+38(999) 999-99-99");

    $('#free-diagnostic .close').click(function(e) {
        $('#free-diagnostic').hide();
    });

    if (window.matchMedia('(min-width: 768px)').matches) {
        setTimeout(function() {
            $('#free-diagnostic').show();
        }, 2000);
    }

    $('form').submit(function(e) {
        e.preventDefault();

        var phoneInput = $(this).find("input[name='phone']"),
            deviceType = getPlatformType(),
            form = $(this);
        if (phoneInput.val() !== '') {
            form.append('<input type="hidden" name="device" value="' + deviceType + '">');
            form.find('button[type="submit"]').hide();
            $.ajax({
                url: './post.php',
                type: 'post',
                data: form.serialize(),
                success: function() {
                    form.html('<p style="white-space: normal;">Cпасибо!<br>Ваша заявка отправлена!<br>Мы перезвоним Вам в ближайшее время и ответим на все вопросы!</p>');
                    setTimeout(function() {
                        $('#free-diagnostic').hide();
                    }, 6000);
                },
                error: function() {
                    form.html('<p class="bg-danger">Произошла ошибка! Попробуйте позже!<p>');
                }
            });

        } else {
            phoneInput.css('border', '1px solid red');
            if (!form.find('.phone-error').length) {
                phoneInput.before('<p class="phone-error" style="color:red">Введите телефон</p>');
            }
        }
    });

    $('.service-icon').click(function() {
        var tagretId = $(this).attr('id');
        // console.log(tagretId);
        $('#service-dialog').modal('show');
        $('#service-dialog').find('.modal-title, .modal-body').hide();
        $('#service-dialog').find('.modal-title.' + tagretId).show();
        $('#service-dialog').find('.modal-body.' + tagretId).show();
    });


    //get device type
    function getPlatformType() {
        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i) ? 'Android' : false;
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i) ? 'BlackBerry' : false;
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone/i) ? 'iPhone' : false;
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i) ? 'Opera Mini' : false;
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i) ? 'IEMobile' : false;
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };
        var isTablet = {
            iPad: function() {
                return navigator.userAgent.match(/iPad/i) ? 'iPad' : false;
            },
            iPod: function() {
                return navigator.userAgent.match(/iPod/i) ? 'iPod' : false;
            },
            Touch: function() {
                return navigator.userAgent.match(/Touch/i) ? 'Touch' : false;
            },
            any: function() {
                return (isTablet.iPad() || isTablet.iPod() || isTablet.Touch());
            }
        };

        if (isMobile.any()) {
            return 'Mobile ' + isMobile.any();
        } else if (isTablet.any()) {
            return 'Tablet ' + isTablet.any();
        } else {
            return 'Desktop';
        }
    }
});