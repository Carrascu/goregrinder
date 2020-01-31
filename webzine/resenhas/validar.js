function checkdata() {
	with(document.form1) {	
	        if (rcc_nome.value == "") {
			alert("Digite o seu nome!");
			rcc_email.focus();
			return false; }
	        if (rcc_texto.value == "") {
			alert("Digite o seu comentário!");
			rcc_texto.focus();
			return false; }
                        submit();
	}
}