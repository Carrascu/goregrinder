		function mais() {
			$('div#loadmoreajaxloader').show();
			$.ajax({
				url: "ini.php?lastid=" + $(".postitem:last").attr("id"),
				success: function(html){
					if(html){
						$("#ini_atual_itens").append(html);
						$('div#loadmoreajaxloader').hide();
					}else{
						$('div#loadmoreajaxloader').html('<center>N&atilde;o há mais atualizações para exibir.</center>');
					}
				}
				})
			};
