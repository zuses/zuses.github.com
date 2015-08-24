/*收集的一些有用的Js*/

// 跨浏览器添加事件
function addEvent(obj,type,fn){
	// obj对象用原生Js获取
	if(obj.addEventListener){
		obj.addEventListener(type, fn, false);
	} else if(obj.attachEvent){ // IE
		obj.attachEvent('on' + type, fn);
	}
}

// 跨浏览器移除事件
function removeEvent(obj,type,fn){
	if(obj.removeEventListener){
		obj.removeEventListener(type, fn, false);
	} else if(obj.detachEvent){ // IE
		obj.detachEvent('on' + type,fn)
	}
}

// 跨浏览器阻止默认事件
function preDef(ev){
	var e = ev || window.event;
	if(e.preventDefault){
		e.preventDefault();
	} else{
		e.returnValue = false;
	}
}

// 跨浏览器阻止事件冒泡
function preBub(ev){
	var e = ev || window.event;
	if(e.stopPropagation){
		e.stopPropagation();
	} else{  // IE
		e.cancelBubble = true;
	}
}

// 跨浏览器获取滚动条的位置
function getSp(){
	return {
		top: document.documentElement.scrollTop || document.body.scrollTop,
		left: document.documentElement.scrollLeft || document.body.scrollLeft
	}
}

// 跨浏览器获取可视窗口大小
function getWindow(){
	if(typeof window.innerWidth != 'undefined'){
		return {
			width: window.innerWidth,
			height: window.innerHeight
		}
	} else{
		return {  // IE8及以下
			width: document.documentElement.clientWidth,
			height: document.documentElement.clientHeight
		}
	}
}