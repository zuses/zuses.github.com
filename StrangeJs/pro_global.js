function global(){}
function createGlobal(){
	return new global();
}
var a = createGlobal();
a.prototype.checkBrowser = function(){
	var u     =   window.navigator.userAgent.toLocaleLowerCase(),
	msie    =   /(msie) ([\d.]+)/,
	chrome  =   /(chrome)\/([\d.]+)/,
	firefox =   /(firefox)\/([\d.]+)/,
	safari  =   /(safari)\/([\d.]+)/,
	opera   =   /(opera)\/([\d.]+)/,
	ie11    =   /(trident)\/([\d.]+)/,
	b       =   u.match(msie)||u.match(chrome)||u.match(firefox)||u.match(safari)||u.match(opera)||u.match(ie11);
	return {name: b[1], version: parseInt(b[2])};
}