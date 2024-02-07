var xmlhttp

function getProducts(category)
{
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
	  {
	  alert ("Your browser does not support AJAX!");
	  return;
	  }
	var url="get_products.php";
	url=url+"?category="+category;
	url=url+"&sid="+Math.random();
	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("post",url,true);
	xmlhttp.send(null);

}

function stateChanged()
{
	if (xmlhttp.readyState==4)	  {
	  	document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
   }
}

//*****************************************

function showProductInfo(id)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  }
var url="show_product_info.php";
url=url+"?id="+id;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged2;
xmlhttp.open("post",url,true);
xmlhttp.send(null);

}

function stateChanged2()
{
if (xmlhttp.readyState==4)
  {
  document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
  }
}




//*****************************************


function showProductInfoByCode(code)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  }
var url="show_product_info_by_code.php";
url=url+"?code="+code;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged2;
xmlhttp.open("post",url,true);
xmlhttp.send(null);

}

function stateChanged3()
{
if (xmlhttp.readyState==4)
  {
  document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
  }
}




//*****************************************

function getProductsDelete(category)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  }
var url="get_products_delete.php";
url=url+"?category="+category;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged4;
xmlhttp.open("post",url,true);
xmlhttp.send(null);

}

function stateChanged4()
{
if (xmlhttp.readyState==4)
  {
  document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
  }
}



//*********************************************

function showProductInfoByCodeDelete(code)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  }
var url="show_product_info_by_code_delete.php";
url=url+"?code="+code;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged5;
xmlhttp.open("post",url,true);
xmlhttp.send(null);

}

function stateChanged5()
{
if (xmlhttp.readyState==4)
  {
  document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
  }
}



//**********************************************

function showProductInfoDelete(id)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  }
var url="show_product_info_delete.php";
url=url+"?id="+id;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=stateChanged6;
xmlhttp.open("post",url,true);
xmlhttp.send(null);

}

function stateChanged6()
{
if (xmlhttp.readyState==4)
  {
  document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
  }
}



//**********************************************


function removeFeaturedProduct(id)
{
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Your browser does not support AJAX!");
  return;
  }
  
var url="remove_featured_product.php";
url=url+"?id="+id;
url=url+"&sid="+Math.random();

xmlhttp.onreadystatechange=stateChanged7;
xmlhttp.open("post",url,true);
xmlhttp.send(null);

alert('Product Successfully Removed From Featured List');

}

function stateChanged7()
{
if (xmlhttp.readyState==4)
  {
  document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
  }
}



//**********************************************






function GetXmlHttpObject()
{
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  }
return null;
}



