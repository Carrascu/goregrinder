function checkdata() {
	with(document.enviar) {	
	        if (com_nome.value == "") {
			alert("Digite o seu nome!");
			com_email.focus();
			return false; }
		 if (com_texto.value == "") {
			alert("Digite o coment�rio!");
			com_site.focus();
			return false; 
		}
                        submit();
	}
}