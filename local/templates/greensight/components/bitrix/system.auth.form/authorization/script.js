$(document).ready(function()
{
	var form 	= $('div#authorization form#auth-form');
	var result	= $('div#authorization div.result');
	
	form.on('click', 'input#sign-in', function()
	{
		$.post('/auth.php', form.serialize(), function(response)
		{
			console.log(response);
			
			if(response.success) location.reload();
			else
			{
				result
					.html(response.MESSAGE)
					.css('color', 'red')
					.slideDown()
				;
			}
		}, 'json');
	});
});