	menuOpen=Array();
	function changeMenu(id)
	{
		if(menuOpen[id]==0 || menuOpen[id]==undefined)
		{
			document.getElementById('menu_img_'+id).src='more-.gif';
			document.getElementById('menuSource_'+id).style.display="block";
			menuOpen[id]=1;
		}
		else
		{
			document.getElementById('menu_img_'+id).src='more+.gif';
			document.getElementById('menuSource_'+id).style.display="none";
			menuOpen[id]=0;
		}
	}
