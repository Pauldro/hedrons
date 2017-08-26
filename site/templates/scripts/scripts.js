$(function() {
	/*==============================================================
	   PAGE SCROLLING FUNCTIONS
	=============================================================*/
		$(window).scroll(function() {
			if ($(this).scrollTop() > 50) { $('#back-to-top').fadeIn(); } else { $('#back-to-top').fadeOut(); }
		});

		// scroll body to 0px on click
	   $('#back-to-top').click(function () {
		   $('#back-to-top').tooltip('hide');
		   $('body,html').animate({ scrollTop: 0 }, 800);
		   return false;
	   });


	/*==============================================================
	   YOUTUBE NAVIGATION
	=============================================================*/
		$('.slide-menu-open').on('click', function(e) { //Youtube-esque navigation
			e.preventDefault();
			$('#slide-menu').toggle('show');
			$('.close-menu').toggle('show');
			$('<div class="modal-backdrop dementor fade in" id="nav-bkgd"></div>').appendTo('body');
		});

		$('.close-menu').on('click', function() {
			$('#slide-menu').hide();
			$('.close-menu').hide();
			$('#nav-bkgd').remove();
		});
});

function duplicateelement(element, appendto) {
	var input = $(element).first().clone().find("input:text").val("").end().appendTo(appendto);
}

function setequalheight(container) {
	var height = 0;
	$(container).each(function() {
		if ($(this).actual( 'height' ) > height) {
			height = $(this).actual( 'height' );
		}
	});
	$(container).height(height);
}
