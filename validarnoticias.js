function checkdata() {
	with(document.form1) {	
	        if (nc_nome.value == "") {
			alert("Digite o seu nome!");
			nc_nome.focus();
			return false; }
		 if (nc_texto.value == "") {
			alert("Digite o comentário!");
			nc_texto.focus();
			return false; 
		}
                        submit();
	}
}