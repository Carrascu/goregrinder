<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from goregrinder.net/index.php?s=3&id=899 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 20:51:18 GMT -->
<head>
<script type='text/javascript' src='jscripts/jquery.js'></script>
<script type='text/javascript' src='jscripts/easyTooltip.js'></script>
<script type='text/javascript'>
	$(document).ready(function(){	
		$('a').easyTooltip();
	});
</script><script type='text/javascript' src='jscripts/jquery.js'></script>
<script type='text/javascript' src='jscripts/easyTooltip.js'></script>
<script type='text/javascript'>
	$(document).ready(function(){	
		$('a').easyTooltip();
	});
</script>
<title>Predator divulga nota sobre acusação [GOREGRINDER Web Zine]</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="gg.css" rel="stylesheet" type="text/css" />
</head>

<body class="fundo_index">

<table width="1013" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <th height="138" background="imagens/topo.png" scope="row">		<link rel="stylesheet" href="jscripts/MenuMatic.css" type="text/css" media="screen" charset="utf-8" />
		<!--[if lt IE 7]>
			<link rel="stylesheet" href="jscripts/MenuMatic-ie6.css" type="text/css" media="screen" charset="utf-8" />
		<![endif]-->

        		<!-- BEGIN Menu -->

<div style="margin-top:120px; margin-left:-30px;"
	    <ul id="nav">
			<li><a href="index73bb.html?s=1">Capa</a>
				<ul>
					<li><a href="index5c8b.html?s=3">Not&iacute;cias</a></li>
					<li><a href="index6827.html?s=4">Agenda</a></li>
				</ul>
			</li>

			<li><a href="#">Mat&eacute;rias</a>
				<ul>
					<li><a href="indexd7c2.html?s=14">Especiais</a></li>
					<li><a href="index158d.html?s=10">Resenhas</a></li>
					<li><a href="indexa9d0.html?s=11">Curto e Grosso</a></li>
					<li><a href="indexfa11.html?s=13">Entrevistas</a></li>
				</ul>
			</li>

			<li><a href="index8033.html?s=9">Blogs</a>
				<ul>
					<li><a href="index6ce8.html?blogid=3">Bleeeeergh</a></li>
					<li><a href="indexeae5.html?blogid=1">Guilhotinando</a></li>
					<li><a href="index316c.html?blogid=4">Laskeras</a></li>
					<li><a href="index29fb.html?blogid=5">Olderground</a></li>
					<li><a href="index23e3.html?blogid=2">Scat</a></li>
				</ul>
			</li>

			<li><a href="#">Multim&iacute;dia</a>
				<ul>
					<li><a href="index1882.html?s=17">GoreTube</a></li>
					<li><a href="index6a3b.html?s=15">MP3 Online</a></li>
					<li><a href="indexea98.html?s=16">&Aacute;lbuns Completos</a></li>
				</ul>
			</li>
		</ul>

</div>	

		<!-- END Menu -->

	<!-- Load the Mootools Framework 
	<script src="http://www.google.com/jsapi"></script><script>google.load("mootools", "1.2.1");</script>	
    -->
	<!-- Load the MenuMatic Class -->
	<script src="jscripts/MenuMatic_0.68.3.js" type="text/javascript" charset="utf-8"></script>
	<!-- Create a MenuMatic Instance -->
	<script type="text/javascript" >
		window.addEvent('domready', function() {			
			var myMenu = new MenuMatic();
		});		
	</script></th>
  </tr>
  <tr height="500">
    <th background="imagens/fundo.png" scope="row" valign="top">
    
<script type="text/javascript" src="jscripts/validar.js"></script>
<SCRIPT LANGUAGE="JavaScript">
function ValidaEmail()
{
  var obj = eval("document.forms[0].cgc_email");
  var txt = obj.value;
  if ((txt.length != 0) && ((txt.indexOf("@") < 1) || (txt.indexOf('.') < 7)))
  {
    alert('Email incorreto');
	obj.focus();
  }
}
</script>
<script type="text/javascript" language="javascript" src="jscripts/lytebox.js"></script>
<link rel="stylesheet" href="jscripts/lytebox.css" type="text/css" media="screen" />
<!-- Incluimos a biblioteca do jquery -->
<script type="text/javascript" language="javascript" src="jquery-1.3.2.html"></script>
<!-- Criamos as funÃ§Ãµes necessÃ¡rias para envio do formulÃ¡rio -->
<script type="text/javascript" language="javascript">
$(function($) {
	// Quando o formulÃ¡rio for enviado, essa funÃ§Ã£o Ã© chamada
	$("#formulario").submit(function() {
		// Colocamos os valores de cada campo em uma vÃ¡riavel para facilitar a manipulaÃ§Ã£o
		var nome = $("#nome").val();
		var email = $("#email").val();
		var mensagem = $("#mensagem").val();
		var nc_not_id = $("#nc_not_id").val();
		var nc_ver = $("#nc_ver").val();
		var codigoimg = $("#codigoimg").val();
		// Exibe mensagem de carregamento
		$("#status").html("<img src='loader.gif' alt='Enviando' />");
		// Fazemos a requisÃ£o ajax com o arquivo envia.php e enviamos os valores de cada campo atravÃ©s do mÃ©todo POST
		$.post('com_not2d56.html?id=899', {nome: nome, email: email, mensagem: mensagem, nc_not_id: nc_not_id, nc_ver: nc_ver, codigoimg: codigoimg, }, function(resposta) {
				// Quando terminada a requisiÃ§Ã£o
				// Exibe a div status
				$("#status").slideDown();
				// Se a resposta Ã© um erro
				if (resposta != false) {
					// Exibe o erro na div
					$("#status").html(resposta);
				} 
				// Se resposta for false, ou seja, nÃ£o ocorreu nenhum erro
				else {
					// Exibe mensagem de sucesso
					$("#status").html("<p>Mensagem enviada com sucesso!<br>Assim que for aprovada, aparecer&aacute; nessa p&aacute;gina.<br>Agradecemos a sua participa&ccedil;&atilde;o no site!</p>");
					// Coloca a mensagem no div de mensagens
					$("#mensagens").prepend("<strong>"+ nome +"</strong> disse: <em>" + mensagem + "</em><br />");
					// Limpando todos os campos
					$("#nome").val("");
					$("#email").val("");
					$("#mensagem").val("");
					$("#codigoimg").val("");
				}
		});
	});
});
</script>

<table width="100%" height="500"  border="0" cellspacing="0" cellpadding="0" class="corpotab"><tr><th scope="row" valign="top" style="padding:25px; padding-top:30px; padding-left:35px;">



<div class="ceg_conteudo">
              
<div class="ceg_titulo">
<a href="index9897.html?s=3&amp;id=900" title="Pr&oacute;xima not&iacute;cia:<br><b>NEóFITO RETORNA COM NOVA FORMAçãO</b>"><div class="ceg_proxima"> <img src="imagens/next_button.gif" border="0" /> </div></a>
<a href="index2685.html?s=3&amp;id=898" title="Not&iacute;cia anterior:<br><b>THE ORDHER FARá SHOWS NO MéXICO EM FEVEREIRO</b>"><div class="ceg_anterior"> <img src="imagens/back_button.gif" border="0" /> </div></a>
<strong>PREDATOR DIVULGA NOTA SOBRE ACUSAçãO</strong></div>
<div class="ceg_texto"> 
                   Em resposta ao zine &quot;<em>Satanic Destruction Zine</em>&quot;, que publicou recentemente um &quot;<em>Manifesto ao Death Metal Crist&atilde;o</em>&quot;, onde citava que a banda <strong>Predator</strong> seria uma banda &quot;White Metal&quot;, Roberto Ceccato, baterista da banda, responde:<br /><br />&quot;<em>Sauda&ccedil;&otilde;es a todos!<br />Aqui Roberto Ceccato, baterista do Predator. Muitos de voc&ecirc;s me conhecem pessoalmente e sabem que eu n&atilde;o precisaria estar respondendo a essa cal&uacute;nia contra o PREDATOR.<br />Tivemos a arte da demo &quot;Hell on Earth&quot; modificada por um ex membro que foi expulso do Predator por ser Crist&atilde;o!<br />Sabemos que existem algumas c&oacute;pias com essa vers&atilde;o de agradecimentos mentirosos.<br />Queremos deixar claro que N&Atilde;O SOMOS E NUNCA FOMOS LIGADOS AO CRISTIANISMO! Muito pelo Contr&aacute;rio!!!<br />Sabemos que quem trabalha s&eacute;rio e se dedica ao verdadeiro Metal Negro est&aacute; exposto a cal&uacute;nias como essa de falsos e INVEJOSOS!<br />Eu tenho as demos originais e posso scanear e mandar para quem quiser. Quem tiver d&uacute;vidas tamb&eacute;m podem conferir nos agradecimentos de &quot;Homo Infimus&quot;, o qual n&atilde;o p&ocirc;de ser manipulado!<br />Mas, mentiras e fofocas s&atilde;o para os fracos e crist&atilde;os.... n&atilde;o perdemos tempo com fofoquinhas e mentiras!<br />Viajamos mais de 20 estados do Brasil e Am&eacute;rica do Sul levando o verdadeiro &oacute;dio do Death metal Brasileiro para todos os cantos!<br />Todos sabem da nossa luta, que somos humildes e fazemos tudo na ra&ccedil;a como verdadeiros guerreiros do Undergroud!<br />Essa ofen&ccedil;a n&atilde;o abala a for&ccedil;a e o &oacute;dio do Predator que os verdadeiros irm&atilde;os do underground conhecem!<br />Estou enviando em anexo os cartazes dos shows que organizamos em Dezembro, o NATAL SEM CRISTO, para tirar qualquer poss&iacute;vel d&uacute;vida da ideologia do Predator!<br />Sim, pois n&oacute;s organizamos festivais, compramos material de bandas undergrounds, zines e vamos a todos os shows, ao inv&eacute;s de ficar atr&aacute;z do computador tentando denegrir a imagem de pessoas s&eacute;rias que trabalham de verdade em pr&oacute; do Underground brasileiro!<br />Somos contra todos os tipos de Religi&otilde;es e formas de imposi&ccedil;&otilde;es! Basta ler em qualquer letra!<br />Agrade&ccedil;o o apoio de todos os verdadeiros irm&atilde;os! Morte ao White(Que n&atilde;o &eacute; Metal) aos falsos e invejosos!<br />Grande abra&ccedil;o e nos vemos na estrada, pois n&atilde;o somos banda que se esconde atr&aacute;z da internet!<br />Somos old school e banda da estrada!!! Vamos nos encontrar novamente em breve!</em>&quot;<br /><br />Lembrando que a <strong>Predator</strong> segue na turn&ecirc; &quot;<em>Masters of Hate</em>&quot; com a banda de Death Metal <strong>Master</strong> e os ingleses do <strong>After Death</strong> por 24 shows no Brasil, contando com as seguintes datas:<br /><br />15/01 - Ipatinga/MG - Garajao Pub Underground<br />16/01 - Vila Velha/ES - Bojangles Music Bar<br />17/01 - Salvador/BA - Boomerang<br />22/01 - Aracaju/SE - Estacionamento<br />23/01 - Macei&oacute;/AL - Oraculo<br />24/01 - Recife/PE<br />29/01 - Natal/RN<br />30/01 - Campina Grande/PB - Clube Ypiranga<br />31/01 - Fortaleza/CE - Reggae Club<br />04/02 - Picos/PI<br />05/02 - Teresina/PI - Bueiro do Rock<br />06/02 - Imperatriz/MA<br />07/02 - Bel&eacute;m/PA - Lux<br />12/02 - Palmas/TO - Tendencies Rock Bar<br />13/02 - Goiania/GO - DCE UFG<br />14/02 - Bras&iacute;lia/-DF - Circulo Operario Cruzeiro Velho<br />15/02 - Belo Horizonte/MG<br />16/02 - Catanduva/SP<br />17/02 - Ribeir&atilde;o Preto/SP<br />18/02 - Jaboticabal/SP<br />19/02 - Campinas/SP<br />20/02 - S&atilde;o Paulo/SP - Clube Guaraci<br />21/02 - Otac&iacute;lio Costa/SC - Otacilio Rock Fest<br /><br />Mais informa&ccedil;&otilde;es:<br /><a href="http://mastersofhatetour.blogspot.com/" target="_blank">http://mastersofhatetour.blogspot.com/</a><br /><a href="http://www.myspace.com/predatordeath" target="_blank">http://www.myspace.com/predatordeath</a></div>
<div class="ceg_por">
<div class="ceg_data">
Terça, 26 de Janeiro de 2010</div>

Por: <a href="mailto:carrascu@bol.com.br" class="ceg_por_link">Carrascu</a>
</div>
<div class="ceg_divulgue">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style " style="width:400px; vertical-align:central;">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<!-- Inclua esta tag onde desejar que o botÃ£o +1 seja exibido -->
<script type="text/javascript" src="../apis.google.com/js/plusone.js">
  {lang: 'pt-BR'}
</script>
<g:plusone size="medium"></g:plusone>
<a class="addthis_button">Divulgue!</a>
</div>
<script type="text/javascript">
var addthis_config = {"data_track_clickback":true,
ui_header_color: "#ffffff",
ui_header_background: "#000000" 
};</script>
<script type="text/javascript" src="../s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e0e369f4a807b4b"></script>
<!-- AddThis Button END -->
</div>
</div>

<div class="ceg_moreabout_coluna">

<div class="ceg_moreabout">
<div class="ceg_moreabout_titulo">Mais sobre <u><b>Predator</b></u> no site:</div>





<div class='more_setores'><div class='more_titulo_setor'>Notícias <span class='more_noticia_maisde10'>(Últimas 10 publicadas)</span>:</div><div class='more_texto_setor'><div class='more_txt_interno'><a href='indexca1b.html?s=3&amp;id=1155' title=' 22/08/11  - Predatory divulga nova música e infos sobre debut' class='more_txt_interno'>- Predatory divulga nova música e i...</a></div><div class='more_txt_interno'><a href='indexd647.html?s=3&amp;id=1120' title=' 01/07/11  - Gestos Grosseiros lança novo CD' class='more_txt_interno'>- Gestos Grosseiros lança novo CD</a></div><div class='more_txt_interno'><a href='indexdcd3.html?s=3&amp;id=983' title=' 16/09/10  - Gestos Grosseiros divulga tracklist do novo CD' class='more_txt_interno'>- Gestos Grosseiros divulga trackli...</a></div><div class='more_txt_interno'><a href='indexf34e.html?s=3&amp;id=917' title=' 21/02/10  - Chemical Disaster divulga música nova' class='more_txt_interno'>- Chemical Disaster divulga música ...</a></div><div class='more_txt_interno'><a href='indexe59c.php?s=3&amp;id=899' title=' 26/01/10  - Predator divulga nota sobre acusação' class='more_txt_interno'>- Predator divulga nota sobre acusa...</a></div><div class='more_txt_interno'><a href='index11f7.html?s=3&amp;id=890' title=' 15/12/09  - Predator participará de coletânea virtual' class='more_txt_interno'>- Predator participará de coletânea...</a></div><div class='more_txt_interno'><a href='indexc072.html?s=3&amp;id=887' title=' 15/12/09  - Predator divulga nome e capa de novo material' class='more_txt_interno'>- Predator divulga nome e capa de n...</a></div><div class='more_txt_interno'><a href='indexaf45.html?s=3&amp;id=863' title=' 18/10/09  - Vulcano: Tributo para a banda sairá em 2010' class='more_txt_interno'>- Vulcano: Tributo para a banda sai...</a></div><div class='more_txt_interno'><a href='index2fce.html?s=3&amp;id=822' title=' 19/08/09  - Psychotic Eyes: novo vídeo clipe a caminho ' class='more_txt_interno'>- Psychotic Eyes: novo vídeo clipe ...</a></div><div class='more_txt_interno'><a href='indexfa2b.html?s=3&amp;id=788' title=' 17/06/09  - Predator anuncia mini turnê em junho' class='more_txt_interno'>- Predator anuncia mini turnê em ju...</a></div><a href='index638f.html?s=3&amp;noticia=predator'><div class='more_noticia_mais'><span class='more_noticia_mais_texto'>> Ler todas relacionadas <</span></div></a></div></div><div class='more_setores'><div class='more_titulo_setor'>Resenha:</div><div class='more_texto_setor'><div class='more_txt_interno'><a href='indexa060.html?s=10&amp;id=63' class='more_txt_interno'>- <i>Homo Infimus</i></a></div></div></div><div class='more_setores'><div class='more_titulo_setor'>Entrevista:</div><div class='more_texto_setor'><div class='more_txt_interno'><a href='indexe084.html?s=13&amp;id=46' class='more_txt_interno'>- com <i>Roberto Ceccato</i> em 2009</a></div></div></div><div class='more_setores'><div class='more_titulo_setor'>Videos:</div><div class='more_texto_setor'><div class='more_txt_interno'><a href='index3dbc.html?s=17&amp;id=208' class='more_txt_interno'>- <i>Hate In Your Heart</i></a></div><div class='more_txt_interno'><a href='index4500.html?s=17&amp;id=116' class='more_txt_interno'>- <i>Osiris</i></a></div><div class='more_txt_interno'><a href='index8959.html?s=17&amp;id=97' class='more_txt_interno'>- <i>Hommo Infimus</i></a></div></div></div><div class='more_setores'><div class='more_titulo_setor'>1 MP3 online:</div><div class='more_texto_setor'><script>
	menuOpen=Array();
	function changeMenu(id, name)
	{
		if(menuOpen[id]==0 || menuOpen[id]==undefined)
		{
			document.getElementById('menu_img_'+id).src='more-.gif';
			document.getElementById('menuSource_'+id).style.display='block';
			menuOpen[id]=1;
		}
		else
		{
			document.getElementById('menu_img_'+id).src='more.gif';
			document.getElementById('menuSource_'+id).style.display='none';
			menuOpen[id]=0;
		}
	}
</script><div class='more_txt_interno'><a href='javascript:changeMenu(63);' class='more_txt_interno'> - <i>Homo Infimus</i> <img src='imagens/more.gif' border=0 id='menu_img_63'></a><div id='menuSource_63' style='float:right; display: none;'><object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0' width='35' height='18'>  <param name='movie' value='../www.goregrinder.net/mp3/PREDATOR_-_Homo_Infimus.swf' />  <param name='quality' value='high' />  <param name='wmode' value='transparent'>     <embed src='../www.goregrinder.net/mp3/PREDATOR_-_Homo_Infimus.swf'      quality='high'      type='application/x-shockwave-flash'      WMODE='transparent'      width='35'      height='18'      pluginspage='http://www.macromedia.com/go/getflashplayer' /></object></div></div></div><div class='more_setores'><div class='more_titulo_setor'>Site:</div><div class='more_texto_setor'><div class='more_txt_interno'><a href='http://www.predatordeath.com/' target='_blank' class='more_txt_interno'>- www.predatordeath.com</a></div></div></div>
        </div></div>
</div>


<div style="width:700px; text-align:center; position:relative; float:left; margin-top:20px; margin-bottom:10px;"><a href="#comentarios" class="txt-cur-album">Envie seu coment&aacute;rio sobre essa not&iacute;cia! </a></div>



<div class="not_formulario">

<div id="status" style="width:99%; text-align:center; font:11pt Arial, Helvetica, sans-serif; color:#C30;"></div>
              
<form id="formulario" action="javascript:func()" method="post" OnSubmit='JavaScript:return checkdata()'>
<a name="comentarios"></a> 
<div style="width:50%; height:25px; float:left;" class="not_formulario_texto">Nome: <input type="text" name="nome" id="nome" value="" size="25" class="formularios"></div>
<div style="width:50%; height:25px; float:left;" class="not_formulario_texto">E-mail: <input type="text" name="email" id="email" onBlur="ValidaEmail();" value="" size="25" class="formularios"></div>
<div style="width:100%; vertical-align:top;" class="not_formulario_texto">Texto: <textarea name="mensagem" id="mensagem" cols="53" rows="5" class="formularios"></textarea></div>
<div style="width:50%; text-align:left; float:left; padding-left:10px;"><img src="imgauth.png" align="baseline"> = <input type="text" size="4" name="codigoimg" id="codigoimg" class="formularios"></div>
<div style="width:40%; text-align:right; float:right; margin-right:15px; padding-top:3px;"><input type="submit" value="Enviar" class="formularios_botoes"></div>
                  <input type="hidden" name="nc_not_id" id="nc_not_id" value="899">
                  <input type="hidden" name="nc_ver" id="nc_ver" value="n">
                </form>
</div>








<!--<p style="position:relative; float:left; width:100%; text-align:center;"><a href="#comentarios" class="txt-cur-album">Envie seu coment&aacute;rio sobre essa not&iacute;cia! </a></p>



<div class="ceg_formulario">

<div id="status" style="width:99%; text-align:center; font:11pt Arial, Helvetica, sans-serif; color:#C30;"></div>
              
<form id="formulario" action="javascript:func()" method="post" OnSubmit='JavaScript:return checkdata()'>
<a name="comentarios"></a> 
<div style="width:50%; height:25px; float:left;" class="ceg_formulario_texto">Nome: <input type="text" name="nome" id="nome" value="" size="25" class="formularios"></div>
<div style="width:50%; height:25px; float:left;" class="ceg_formulario_texto">E-mail: <input type="text" name="email" id="email" onBlur="ValidaEmail();" value="" size="25" class="formularios"></div>
<div style="width:100%; vertical-align:top;" class="ceg_formulario_texto">Texto: <textarea name="mensagem" id="mensagem" cols="53" rows="5" class="formularios"></textarea></div>
<div style="width:50%; text-align:left; float:left; padding-left:10px;"><img src="imgauth.php" align="baseline"> = <input type="text" size="4" name="codigoimg" id="codigoimg" class="formularios"></div>
<div style="width:40%; text-align:right; float:right; margin-right:15px; padding-top:3px;"><input type="submit" value="Enviar" class="formularios_botoes"></div>
                  <input type="hidden" name="nc_not_id" id="nc_not_id" value="899">
                  <input type="hidden" name="nc_ver" id="nc_ver" value="n">
                </form>
</div> -->


</th></tr></table>   </th>
  </tr>
  <tr>
    <th height="300" background="imagens/base.png" scope="row"><div class="rodape_col1">
<a href="index-2.html" class="rodape_txt">Capa</a><br>
<a href="index73bb.html?s=1" class="rodape_txt">In&iacute;cio</a><br>
<a href="index5c8b.html?s=3" class="rodape_txt">Not&iacute;cias</a><br>
<a href="index6827.html?s=4" class="rodape_txt">Agenda</a><br>
</div>

<div class="rodape_col2">
<a href="indexd7c2.html?s=14" class="rodape_txt">Mat&eacute;rias Especiais</a><br>
<a href="index158d.html?s=10" class="rodape_txt">Resenhas</a><br>
<a href="indexa9d0.html?s=11" class="rodape_txt">Curto e Grosso</a><br>
<a href="indexfa11.html?s=13" class="rodape_txt">Entrevistas</a><br>
</div>

<div class="rodape_col3">
<a href="index8033.html?s=9" class="rodape_txt">Blogs</a><br>
<a href="index6ce8.html?blogid=3" class="rodape_txt">Blog Bleeeeergh</a><br>
<a href="indexeae5.html?blogid=1" class="rodape_txt">Blog Guilhotinando</a><br>
<a href="index23e3.html?blogid=2" class="rodape_txt">Blog Scat</a><br>
</div>

<div class="rodape_col4">
<a href="index1882.html?s=17" class="rodape_txt">GoreTube</a><br>
<a href="index6a3b.html?s=15" class="rodape_txt">MP3 Online</a><br>
<a href="indexea98.html?s=16" class="rodape_txt">&Aacute;lbuns completos</a><br>
</div>

<div class="rodape_col5">
<a href="index23b5.html?s=2" class="rodape_txt">A GoreGrinder</a><br>
<a href="indexcb2e.html?s=19" class="rodape_txt">Coment&aacute;rios</a><br>
<a href="indexb5f2.html?s=20" class="rodape_txt">Promo&ccedil;&otilde;es</a><br>
<a href="index6ace.html?s=21" class="rodape_txt">Mat&eacute;rias antigas</a><br>
<a href="indexf53a.html?s=8" class="rodape_txt">Links</a><br>
</div>

<div class="rodape_col6">
<a href="http://edicaoespecial.goregrinder.net/" target="_blank" class="rodape_txt">Edi&ccedil;&atilde;o Especial Impressa</a><br>
<a href="http://festival.goregrinder.net/" target="_blank" class="rodape_txt">GoreGrinder Festival</a>
</div>

<div class="rodape_midias">
<a href="http://www.facebook.com/GoreGrinder.wz" target="_blank" title="Visite nossa p&aacute;gina no Facebook"><img src="imagens/facebook-logo.png" width="30" height="30" style="margin-bottom:10px;" border="0"></a><br>
<a href="http://www.twitter.com/goregrinder_wz" target="_blank" title="Siga-nos pelo Twitter"><img src="imagens/twitter-logo.png" width="30" height="30" border="0"></a>
</div>


<div class="rodape_parceiros_topo">Parceiros</div>
<div class="rodape_parceiros">
<a href="http://baronshell.com/" target="_blank" title="Baron's Hell"><img src="imagens/logo-barons.png" border="0" /></a>
<a href="http://metalmaniacszine.blogspot.com/" target="_blank" title="Metal Maniacs Zine"><img src="imagens/logo-metal-maniacs.png" border="0" /><br /></a>
<a href="http://www.cgzine.blogger.com.br/" target="_blank" title="CGZINE"><img src="imagens/logo-cgzine.png" border="0" /></a>
<a href="http://alcoholocaustbrutalinformation.blogspot.com/" target="_blank" title="Alcoholocaust Brutal Information"><img src="imagens/logo-alcoholocaust.png" border="0" /></a>
</div></th>
  </tr>
</table>
</body>

<!-- Mirrored from goregrinder.net/index.php?s=3&id=899 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 20:51:18 GMT -->
</html>
