function validar(formulario)
{


nombre = formulario.nombre.value;

// Le saco los espacios de adelante y de atrás a la cadena de caracteres.
nombre = nombre.replace(/^\s*/,'');
nombre = nombre.replace(/\s*$/,'');

if( nombre != null || nombre.length != 0)
	 if (!/^([abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíóú\s])*$/.test(nombre))
		{alert("Oops! Problemas en el campo 'Nombre'." );
	 	 return false;
		}
else
	{alert("Ingrese su nombre por favor." );
	 return false;
	}



correo1= formulario.email.value;

correo1 = correo1.replace(/^\s*/,'');
correo1 = correo1.replace(/\s*$/,'');

if( correo1 != null || correo1.length != 0)
	 if (!/^([abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789_-.])*$/.test(correo1))
		{alert("Oops! Problemas en el campo 'e-mail'." );
	 	 return false;
		}
else
	{alert("La dirección de correo electrónico es un campo obligatorio. Por favor, asegúrese de escribirla correctamente." );
	 return false;
	}



correo2= formulario.dominiomail.value;

correo2 = correo2.replace(/^\s*/,'');
correo2 = correo2.replace(/\s*$/,'');

if( correo2 != null || correo2.length != 0)
	 if (!/^([abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ.])*$/.test(correo2))
		{alert("Oops! Problemas en el campo 'e-mail'." );
	 	 return false;
		}
else
	{alert("La dirección de correo electrónico es un campo obligatorio. Por favor, asegúrese de escribirla correctamente." );
	 return false;
	}


return true;

}