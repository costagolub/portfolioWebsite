(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

	// portfolio slide image
	$('#portfolio-container').on('mouseenter mouseleave', '.portfolio-img', function(event){
		var strPos = '',
			strPx = '';
		var myPos = ['marginLeft', 'marginTop'];
		var myPx = ['-60px', '60px'];
		var thisRandPx = Math.floor(Math.random() * 2);
		var thisRand = Math.floor(Math.random() * myPos.length);
		var strPos = myPos[thisRand];
		var strPx = myPx[thisRandPx];
		var animateOption = {};
		animateOption[strPos] = strPx;

		if(event.type == 'mouseenter') {
			$(this).find('img').stop().animate(animateOption, 300);
		} else {
			$(this).find('img').stop().animate({margin: '0px'}, 300);
		}
	});
	
		var aboutSection = $('#about');
	//slideDown personal info
	$('.menu-list a[href="#about"]').live('click', function(e){
		e.preventDefault();
		if(aboutSection.is(':hidden')) {
			$('.close-about').remove();
		}
		var offsetAbout = $('.hero-unit').offset().top;
		$('html, body').animate({scrollTop: offsetAbout}, 'slow');
		aboutSection.slideToggle('slow', function(){
			$(this).children('.container').append('<div class="close-about"></div>');
			$('.close-about').animate({
				'top': '-30px',
			},'slow');
			$('.close-about').click(function(){
				aboutSection.slideUp('slow');
				$(this).animate({'top':'-150px'});
				$('html, body').animate({scrollTop: '0px'}, 'slow');
			});
			$('.close-about').on('mouseover mouseout', function(e){
				if(e.type == 'mouseover') {$(this).animate({'top': '-40px'});} 
				else {$(this).animate({'top': '-30px'});}
			});
		});
	});
	
	var contactSection = $('#contact-form');
	//slideDown contact
	$('a[href="#contacts"]').live('click', function(e){
		e.preventDefault();
		if(contactSection.is(':hidden')) {
			$('.close-contact').remove();
		}
		var offsetContact = $('.more-works').offset().top + 30;

		$('html, body').animate({scrollTop: offsetContact}, 'slow');
		contactSection.slideToggle('slow', function(){
			$(this).children('.container').append('<div class="close-contact"></div>');
			$('.close-contact').animate({
				'bottom': '-30px',
			},'slow');
			$('.close-contact').click(function(){
				contactSection.slideUp('slow');
				$(this).animate({'bottom':'-150px'});
			});
			$('.close-contact').on('mouseover mouseout', function(e){
				if(e.type == 'mouseover') {$(this).animate({'bottom': '-40px'});} 
				else {$(this).animate({'bottom': '-30px'});}
			});
		});
	});
	
	// portfolio scrollTop
	$('.menu-list a[href="#portfolio"]').click(function(){
		offsetEl = $('#portfolio').offset().top;
		
		$('html, body').animate({scrollTop: offsetEl}, 'slow');
		return false;
	});
	
	var mainHeader = $('#main-header').offset().top + 200;
	$(window).scroll(function(){ 
		var offsetAbout = $('.hero-unit').offset().top;
		var offsetContact = $('.more-works').offset().top;
		if($(window).scrollTop() > offsetAbout && $(window).scrollTop() < offsetContact) {
			$('.dot-effect').css({'left': '37%'});
		} else if ($(window).scrollTop() > offsetContact && $(window).scrollTop() > offsetAbout){
			$('.dot-effect').css({'left': '78%'});
		} else{
			$('.dot-effect').css({'left': ''});
		} 
		if($('#main-header').is(':visible')) {
		if($(window).scrollTop() > mainHeader) {
			var thisMainHeader = $('#main-header');
			var headerHeight = thisMainHeader.outerHeight();
			$('body').css({'padding-top': headerHeight + 'px'});
			$('#main-header').addClass('fixedHeader');
		} else {
			$('#main-header').removeClass('fixedHeader');
			$('body').css({'padding-top': '0px'});
		}
		} else {}
	});
	
	
	// generate more works by events
	// trigger get works 
	$('#get-works').click(function(){
		$(this).trigger('nextPage');
		return false;
	});
	
	$(document).bind('nextPage', function(event, scrollToVisible){ 
		var url = $('#get-works').attr('href');
		if(url) {
			$.get(url, function(data){
				var $data = $(data).appendTo('#portfolio-container');
				$data.preloader();
				var footerHeight = $('#main-footer').outerHeight();	
					var offsetTop = $data.offset().top - footerHeight;
					$('html, body').animate({scrollTop: offsetTop}, 'slow');
			});
		}
		});
	var pageNum = 1;
	$(document).bind('nextPage', function(){ 
			pageNum++;
			if(pageNum < 3) {
				$('#get-works').attr('href', 'portfolio-' + pageNum + '.html');
			} else {
				$('#get-works').parent().remove();
			}
	});
	
	$(".portfolio-work").preloader();
	var thisPortWrap = $('#portfolio-wrap');
	var windowW = $(window).width();
	// load portfolio image by click
	$(window).resize(function(){ 
		windowW = $(window).width();
	});
	$('#portfolio-container a').live('click', function(){
		var requestData = {term: $(this).attr('href')};
		$('body, html').animate({'left': -windowW + 'px', scrollTop: $('#portfolio-wrap').offset().top});
		$('#main-header, #super-height').fadeOut('fast');
		
		$.get('portfolio.php', requestData, function(data){
			thisPortWrap.html(data);
			thisPortWrap.css({'left': windowW + 'px', 'width': '100%'});
			$('.entry').preloader();
			});
		return false;
	});
	
	var offsetEl = $('#portfolio').offset().top;
	$('.close').live('click', function(){
		$('body, html').animate({'left': '0px', scrollTop: offsetEl});
		$('#main-header, #super-height').fadeIn('fast');
		thisPortWrap.html('');
		
		return false;
	});
	
	// contact form
	$('form#send-form').submit(function() {
			$('form#send-form .help-inline').remove();
			$('form#send-form .control-group').removeClass('error');
			var hasError = false;
			$('.requiredField').each(function() {
				if($.trim($(this).val()) == '') {
					var labelText = $(this).parent('.controls').prev('label').text();
					$(this).parent().append('<span class="help-inline">You have entered a wrong '+labelText+'.</span>');
					$(this).parents('.control-group').addClass('error');
					hasError = true;
				} else if($.trim($(this).val()) == '' && $(this).hasClass('subject')){
						$(this).parent().append('<span class="help-inline">You have entered a wrong Subject.</span>');
						$(this).parents('.control-group').addClass('error');
						hasError = true;
				} else if($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test($.trim($(this).val()))) {
						var labelText = $(this).parent('.controls').prev('label').text();
						$(this).parent().append('<span class="help-inline">You have entered a wrong Email.</span>');
						$(this).parents('.control-group').addClass('error');
						hasError = true;
					}
				} else if($(this).hasClass('anti-spam')) {
					var spamValue = $(this).val();
					if(spamValue !== '86') {
						var labelText = $(this).parent('.controls').prev('label').text();
						$(this).parent().append('<span class="help-inline">You have entered a wrong '+labelText+'.</span>');
						$(this).parents('.control-group').addClass('error');
						hasError = true;
					}
				}
			});
			if(!hasError) {
				$('form#send-form input[type="submit"]').attr('disabled','disabled');
				var formInput = $(this).serialize();
				$.post($(this).attr('action'),formInput, function(data){
					$('form#send-form').slideUp("fast", function() {				   
						$(this).before('<h2 class="text-center text-success">Thanks! Your letter sent. I'll try not to linger with the answer!</h2>');
						setTimeout(function(){
							$('#contact-form').slideUp();
						}, 4000);
					});
				});
			}
			return false;	
		});
		
		// restricting input 
		$('.anti-spam').keypress(function(key){
			if(key.charCode < 48 || key.charCode > 57) return false;
		});
		
		// skills timer 
		function skillstimer(){
			var dateFrom = new Date("August 1, 2010 00:01:00");
			var nowDate = new Date();
			var totalTime = nowDate - dateFrom;
			
			var seconds = Math.floor(totalTime / 1000);
			var minutes = Math.floor(seconds / 60);
			var hours = Math.floor(minutes / 60);
			var days = Math.floor(hours / 24);
			var years = Math.floor(days / 365);
			
			document.getElementById('years').innerHTML = years + ' years';
			document.getElementById('days').innerHTML = days + ' days';
			document.getElementById('hours').innerHTML = hours + ' hours';
			document.getElementById('minutes').innerHTML = minutes + ' minutes';
			document.getElementById('seconds').innerHTML = seconds + ' seconds'; 
			
			setTimeout(skillstimer, 1000);
		}
		skillstimer();	
});




