var xmlHttp;

function getVote(str){
	if(str.length == 0){
		document.getElementById('poll').innerHTML = "";
		return;
	}
	xmlHttp = GetXmlHttpObject();
	if(xmlHttp == null){
		alert ("Browser does not support HTTP Request");
  		return;
	}
	var url = "js/poll_vote.php";
	url = url + "?q=" + str;
	url = url + "&sid=" + Math.random();
	xmlHttp.onreadystatechange = stateChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}

function stateChanged(){
	if(xmlHttp.readyState == 4 || xmlHttp.readyState == "complete"){
		document.getElementById('poll').innerHTML = xmlHttp.responseText;
	}
}

function GetXmlHttpObject(){
	var xmlHttp = null;
	try{
		xmlHttp = new XMLHttpRequest();
	}
	catch(e){
		try{
			xmlHttp = new ActiveXObject('msxml2.XMLHTTP');
		}
		catch(e){
			xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
	}
	return xmlHttp;
}