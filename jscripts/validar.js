function checkdata() {
	with(document.form1) {	
	        if (ec_nome.value == "") {
			alert("Digite o seu nome!");
			ec_nome.focus();
			return false; }
	        if (ec_texto.value == "") {
			alert("Digite o seu comentário!");
			ec_texto.focus();
			return false; }
                        submit();
	}
}