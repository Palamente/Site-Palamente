$(document).ready(function() 
{
	$('#but_crois, #btn_crois').click(function()
	{
		$('#ancre').get(0).play();
		$('#image_anchor').remove();
		$('#but_crois').append('<img id="image_anchor" src="images/anchor.png">');
		$('#text_form').hide();
		$('#text_crois').show();
		$('html,body').animate({scrollTop: $("#text_crois").offset().top}, 'slow'      );
	});

	$('#but_form, #btn_form').click(function()
	{
		$('#ancre').get(0).play();
		$('#image_anchor').remove();
		$('#but_form').append('<img id="image_anchor" src="images/anchor.png">');
		$('#text_crois').hide();
		$('#text_form').show();
		$('html,body').animate({scrollTop: $("#text_form").offset().top}, 'slow'      );
	});


});