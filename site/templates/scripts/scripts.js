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

		/*==============================================================
		   AJAX
		=============================================================*/
		$("body").on("click", ".load-into-modal", function(e) {
			e.preventDefault();
			var button = $(this);
			var ajaxloader = new ajaxloadedmodal(button);
			$(this).closest('.modal').modal('hide');
			ajaxloader.url = URI(ajaxloader.url).addQuery('modal', 'modal').normalizeQuery().toString();
			$(ajaxloader.loadinto).loadin(ajaxloader.url, function() {
				$(ajaxloader.modal).resizemodal(ajaxloader.modalsize).modal();
			});
		});
		/*==============================================================
		  FORM FUNCTIONS
		=============================================================*/
			$("body").on("click", ".dropdown-menu .searchfilter", function(e) {
				e.preventDefault();
				var inputgroup = $(this).closest('.input-group');
				var param = $(this).attr("href").replace("#","");
				var concept = $(this).text();
				inputgroup.find('span.showfilter').text(concept);
				inputgroup.find('.search_param').val(param);
			});
});

/*==============================================================
   CONTENT
=============================================================*/
function duplicateelement(element, appendto) {
	var input = $(element).first().clone().find("input:text").val("").end().appendTo(appendto);
}

function setequalheight(container) {
	var height = 0;
	$(container).each(function() {
		if ($(this).actual( 'height' ) > height) {
			height = $(this).actual('height');
		}
	});
	$(container).height(height);
}

/*==============================================================
   AJAX FUNCTIONS
=============================================================*/
$.fn.extend({
	loadin: function(href, callback) {
		var element = $(this);
		var parent = element.parent();
		console.log('loading ' + element.returnelementdescription() + " from " + href);
		parent.load(href, function() { callback(); });
	},
	returnelementdescription: function() {
		var element = $(this);
		var tag = element[0].tagName.toLowerCase();
		var classes = element.attr('class').replace(' ', '.');
		var id = element.attr('id');
		var string = tag;
		if (classes) { if (classes.length) { string += '.' + classes; } }
		if (id) { if (id.length) { string += '#'+id; } }
		return string;
	},

	resizemodal: function (size) {
		$(this).children('.modal-dialog').removeClass('modal-xl').removeClass('modal-lg').removeClass('modal-sm').removeClass('modal-md').removeClass('modal-xs').addClass('modal-'+size);
		return $(this);
	},
	// CONTENT FUNCTIONS
	animatecss: function (animationName) {
		var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		this.addClass('animated ' + animationName).one(animationEnd, function() {
			$(this).removeClass('animated ' + animationName);
		});
		return $(this);
	}
});
