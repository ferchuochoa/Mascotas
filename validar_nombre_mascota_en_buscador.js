function validar(formulario)
{

var name = formulario.nombre.value;

// Le saco los espacios de adelante y de atr�s a la cadena de caracteres.
name = name.replace(/^\s*/,'');
name = name.replace(/\s*$/,'');

if( name != null || name.length != 0)
	 if (!/^([abcdefghijklmn�opqrstuvwxyzABCDEFGHIJKLMN�OPQRSTUVWXYZ�����\s])*$/.test(name))
		{alert("Oops! Problemas en el campo 'Nombre'." );
	 	 return false;
		}

return true;

}

