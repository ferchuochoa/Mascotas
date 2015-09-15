function validar(formulario)
{




var name = formulario.nombre.value;
if( name.length != 0 )
	 if (!/^([abcdefghijklmn�opqrstuvwxyzABCDEFGHIJKLMN�OPQRSTUVWXYZ�����])*$/.test(name))
		{alert("Error en el campo Nombre. No utilice caracteres especiales ni espacios.");
	 	 return false;
		}




var otra = formulario.otra_raza.value;
if( otra.length != 0 )
  { var raza = formulario.razas.value;
    if (raza.length != 0 )
 	{alert("Error en el campo raza.");
	 return false;
	}
    else
	 if (!/^([abcdefghijklmn�opqrstuvwxyzABCDEFGHIJKLMN�OPQRSTUVWXYZ�����])*$/.test(otra))
		{alert("Error en el campo Otra Raza. No utilice caracteres especiales ni espacios.");
	 	 return false;
		}
  }




var local = formulario.localidad.value;
if( local == null || local.length == 0 )
  {alert("Por favor selecciona una localidad. Si no encuentras tu localidad en la lista se debe a que por ahora, s�lo trabajamos en esas zonas.");
   return false;
  }


var foto = formulario.archivo.value;
if ( foto.length != 0 )
	{var extension = (foto.substring(foto.lastIndexOf("."))).toLowerCase();
	 if (extension != ".jpg" && extension != ".jpeg" && extension != ".png")
		{alert("Comprueba la extensi�n del archivo a subir. \nS�lo se pueden subir archivos con extensiones: .jpg, .jpeg o .png ");
		 return false;
		}
	}








return true;
}

