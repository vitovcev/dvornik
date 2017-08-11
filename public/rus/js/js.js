jQuery(document).ready(function($) {

    // jQuery placeholder
    $("input, textarea").placeholder();

    // Scroll to top button
    $('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

    $('#basket').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var recipient = button.data('whatever');
        var modal = $(this);
        modal.find('.order').text('Ваш заказ: рамка RCS ' + recipient);
    });

    $('.phone-mask').inputmask('+7 (999) 999-99-99');

    $('.email-mask').inputmask({
        mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
            pastedValue = pastedValue.toLowerCase();
            return pastedValue.replace("mailto:", "");
        },
        definitions: {
            '*': {
                validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
                cardinality: 1,
                casing: "lower"
            }
        }
    });
    $('.email-mask').inputmask({ alias: "email"})

    $('.bxslider-avto').bxSlider({
        auto: true,
    });
    $('.bxslider').bxSlider({
    });

});