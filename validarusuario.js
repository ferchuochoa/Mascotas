function validar(formulario)
{
usuario = formulario.usuario.value;
if( usuario == null || usuario.length == 0 || /^\s+$/.test(usuario) )
  {alert("Por favor complete el campo usuario.");
   return false;
  }

contra = formulario.contrasenia.value;
if( contra == null || contra.length == 0 || contra.length < 8 || contra.length > 16)
  {alert("La contraseña es un campo obligatorio, debe tener una logitud entre 8 y 16 caracteres");
   return false;
  }

apellido = formulario.apellido.value;
if( apellido == null || apellido.length == 0 || /^\s+$/.test(apellido) )
    {alert("Por favor ingrese su apellido, y ayudará a construir un servicio confiable para todos los visitantes.");
     return false;
    }
else 
    if (!/^([abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíóú])*$/.test(apellido))
	{alert("Error en el campo Apellido. No utilice caracteres especiales ni espacios.");
	 return false;
    	}

nombre = formulario.nombre.value;
if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) )
  {alert("Por favor ingrese su nombre, y ayudará a construir un servicio confiable para todos los visitantes.");
   return false;
  }
else 
    if (!/^([abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZáéíóú])*$/.test(nombre))
	{alert("Error en el campo Nombre. No utilice caracteres especiales ni espacios.");
	 return false;
    	}


dni = formulario.nrodoc.value;
if( dni == null || dni.length == 0 || !(/^\d{8}$/.test(dni)) )
	if (!(/^\d{7}$/.test(dni)))
  	{ alert("El número de documento es un campo obligatorio. No utilice puntos (.)");
   	  return false;
  	}


n = formulario.nro.value;
if( n.length != 0 )
	if (!(/^\d{3}$/.test(n))) 
	  if (!(/^\d{4}$/.test(n)))
		{
		 alert("Error en el campo Nro.");
	  	 return false;
		}


p = formulario.piso.value;
if( p.length != 0 )
	if (!(/^\d{1}$/.test(p))) 
	  if (!(/^\d{2}$/.test(p)))
		{
		 alert("Error en el campo piso.");
	  	 return false;
		}
	

telefono = formulario.tel.value;
if( telefono == null || telefono.length == 0 || !(/^\d{10}$/.test(telefono)) )
  {alert("El número de teléfono es un campo obligatorio.No utilice guiones. Incluya el código de área sin cero. Ej: 2262451478, donde 2262 es el código de área de Necochea.");
   return false;
  }


celular = formulario.cel.value;
if ( celular.length != 0)
	if (!(/^\d{10}$/.test(celular)))
	  {alert("Error en el campo Celular.No utilice guiones. Incluya el código de área sin cero. Ej: 2262591798, donde 2262 es el código de área de Necochea.");
  	   return false;
  	  }


correo1= formulario.email.value;
correo2= formulario.dominiomail.value;
if( correo1 == null || correo1.length == 0|| correo2.length == 0 || correo2 == null )
  {alert("La dirección de correo electrónico es obligatoria. Por favor,  asegúrese de escribirla correctamente.");
   return false;
  }

return true;
}
