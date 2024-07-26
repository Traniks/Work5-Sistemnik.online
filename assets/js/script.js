$('.reviews__slick-wrapper').slick(
    {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.slick__prev'),
        nextArrow: $('.slick__next'),
    }
);
$('.reviews__slick-wrapper-video').slick(
    {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: $('.slick__prev-video'),
        nextArrow: $('.slick__next-video'),
    }
);
$(document).ready(function () {
    $('.question__acc-body').slideUp();
    $('.question__acc-head').click(function () {
        var $accBody = $(this).next('.question__acc-body');
        $accBody.slideToggle();
        $(this).find('.arrow').toggleClass('down');
        $('.question__acc-body').not($accBody).slideUp();
        $('.question__acc-head').not($(this)).find('.arrow').removeClass('down');
    });
});

$(".get__popup").click(function () {
    $(".modalbox").toggleClass("modalbox__active");
});
$(".get__price-popup").click(function () {
    var serviceName = $(this).find("td:eq(2)").text();
    $(".service__title").text(serviceName);
    $(".modalbox__price").toggleClass("modalbox__price-active");
});
$(".modal__send").submit(function (event) {
    event.preventDefault();
    $(".modalbox__second").fadeIn();
});
$(".get__free-diagnostic").click(function() {
    $(".modalbox__diagnostics").toggleClass("modalbox__diagnostics-active")
})
$(".get__master").click(function() {
    $(".modalbox__master").toggleClass("modalbox__master-active")
})
$(".get__review").click(function() {
    $(".modalbox__review").toggleClass("modalbox__review-active")
})
$(".open__tel").click(function () {
    $(this).css("display", "none")
})
$(function () {
    $(document).click((e) => {
        const { target } = e;
        if (target.nodeName === 'A' && target.getAttribute('href') === '#') {
            e.preventDefault();
        }
    });
});
$(document).ready(function () {
    var links = $('.zone__nav-links-random li a');
    var randomIndex = Math.floor(Math.random() * links.length);
    var randomLink = links.eq(randomIndex);

    randomLink.css('color', '#2CB742');
});
$('.find__map-tel-input').hide();

$('.find__map-tel-btn').prop('disabled', true);

$(document).ready(function () {
    $('input[placeholder="Укажите ваш адрес"]').on('input', function () {
        var addressValue = $(this).val();

        if (addressValue) {
            $('.find__map-tel-input').show();
        } else {
            $('.find__map-tel-input').hide();
        }
    });

    function checkFields() {
        var addressValue = $('input[placeholder="Укажите ваш адрес"]').val();
        var telValue = $('.find__map-tel-input').val();

        if (addressValue && telValue) {
            $('.btn__red').prop('disabled', false);
        } else {
            $('.btn__red').prop('disabled', true);
        }
    }

    $('input[placeholder="Укажите ваш адрес"], .find__map-tel-input').on('input', checkFields);
});


document.getElementById("my-button").addEventListener("click", function() {
    this.style.display = "none";
    });
document.getElementById("my-button-mob").addEventListener("click", function() {
        this.style.display = "none";
        });
document.getElementById("my-button-garanty").addEventListener("click", function() {
        this.style.display = "none";
        });


        
        function bloc_open_mes() {
            $(".modalbox-contact__messenge").toggleClass("modalbox-contact__active")
          };
        
        function close__modal_mes() {
            $(".modalbox-contact__messenge").toggleClass("modalbox-contact__active")
        };

        
        function bloc_open_tel() {
            $(".modalbox-contact__tel").toggleClass("modalbox-contact__active")
          };
        
        function close__modal_tel() {
            $(".modalbox-contact__tel").toggleClass("modalbox-contact__active")
        };
        
        window.addEventListener('click', function(event) {
          if (event.target == modal) {
            modal.style.display = 'none';
          }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const phoneInput = document.querySelector('input[name="user__phone"]');
            const submitBtn = document.getElementById('submitBtn');
        
            phoneInput.addEventListener('input', function() {
                if (phoneInput.value.trim() !== '') {
                    submitBtn.disabled = false;
                } else {
                    submitBtn.disabled = true;
                }
            });
        });