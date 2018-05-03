with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && user.value==""){
			ok=false;
			alert("Debe escribir nombre del usuario");
			user.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su contraseña");
			password.focus();
		}
		if(ok){ submit(); }
	}
}
