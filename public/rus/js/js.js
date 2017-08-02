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
    })

});