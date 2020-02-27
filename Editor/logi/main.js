jQuery(document).on('submit','#form_login', function(event)
{
	event.preventDefault();

	jQuery.ajax
	({
		url: 'logi/logi.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function()
		{
			$('.botonlg').val('Entrando...');

		}
	})
	.done(function(respuesta)
	{
		console.log(respuesta);
		if(!respuesta.error)
		{
			if(respuesta.tipo == 'administrador')
			{
				location.href =  'tipo_user/Administrador/index.php';

			}
			else if(respuesta.tipo == 'editor')
			{
				location.href = 'tipo_user/Usuario/Bitacora/agregarBitacora.php';

			}
		}
		else 
		{
			$('.error').slideDown('slow');
			setTimeout(function()
			{
				$('.error').slideUp('slow');
			},3000);
			$('.botonlg').val('Entrar');			
		}
	})
	.fail(function(resp)
	{
		console.log(resp.responseText);
	})
	.always(function()
	{
		console.log("complete");
	});
})   