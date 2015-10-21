function proto(){}
proto.prototype.checkBrowser = function(){
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
proto.prototype.bombBox = function(box){
	  var windows     =   $(window);
    var winWidth    =   windows.width();
    var winHeight   =   windows.height();
    var docHeight   =   $(document).height();
    var winCover    =   "<div class='window_cover'></div>";
    $('body').append(box).prepend(winCover);
    var boxWidth    =   $('.pop').outerWidth();
    var boxHeight   =   $('.pop').outerHeight();
    var scrollTops  =   windows.scrollTop();

    $('.pop').css({
      'left'        :  '50%',
      'top'         :  '50%',
      'marginLeft'  :  -boxWidth/2,
      'marginTop'   :  -boxHeight/2/* + scrollTops*/,
      'zIndex'      :  999999
    }).addClass('on');

    $('.pop-close').click(function(event) {
      $('#qrcode,.window_cover').remove();
    });

    $('.window_cover').css({
      'position'          : 'absolute',
      'left'              :  0,
      'top'               :  0,
      'backgroundColor'   : '#000',
      'opacity'           : .3,
      'width'             : '100%',
      'height'            : docHeight,
      'zIndex'            : 999998
    });
}
proto.prototype.browserBoolean = function(name,version){
    var flag = false;
    var brwer = globalMethod.checkBrowser();
    if (brwer.name === name && brwer.version === version) {
      flag = true;
    };
    return flag;
}
proto.prototype.IsPC = function(){
    var userAgentInfo   = navigator.userAgent;  
    var Agents        = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");  
    var flag          = true;  
    for (var v = 0; v < Agents.length; v++) {  
        if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }  
    }  
    return flag;
}
proto.prototype.tabSwitch = function(obj,els,autoPlay,fade){
    var num   = 0;
    var timer = null;
    var oLen  = $(obj).length;
    var eLen  = $(els).length;
    var lenDiff = eLen - oLen;
    if(lenDiff > 0){
      $(els).slice(eLen - lenDiff).remove();
    }
    if (fade) {
      $(obj).eq(0).css('opacity',1);
    };
    function swt(n){
      $(els).eq(n).addClass('on').siblings().removeClass('on');
      if (fade) {
        $(obj).eq(n).animate({opacity: 1}).css('zIndex',2).siblings('li').animate({opacity: 0}).css('zIndex',1);
      } else{
        $(obj).eq(n).show().siblings().hide();
      }
    }
    function startT(){
      timer = setInterval(function(){
        num++;
        if(num > oLen - 1){
          num = 0;
        }
        swt(num);
      },3000)
    }
    function clearT(){
      clearInterval(timer)
    }
    $(els).click(function(){
      var index = $(this).index();
      swt(index);
    });
    if(autoPlay){
       startT();
      $(obj + ',' + els).mouseover(function(){
        clearT();
      }).mouseout(function(){
        var index1 = $(this).index();
        num = index1;
        startT();
      });
    }
}
proto.prototype.getXmlhttp = function (){
    var xmlHttp = null;
    try{
      xmlHttp = new XMLHttpRequest();
    }catch(e){
      try{
        xmlHttp = new ActiveXObject('Msxml2.XMLHTTP');
      }
      catch(e){
        try{
          xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
        }
        catch(failed){
          xmlHttp = false;
        }
      }
    }
    return xmlHttp;
}
proto.prototype.printWord = function(obj,txt,interval,callback){
    txt = txt.split('');
    var num = 0;
    var timer = setInterval(function(){
      num++;
      if(num >= txt.length){
        num = txt.length;
        clearInterval(timer);
        if(callback){
          callback();
        }
      }
      obj.append(txt[num]);
    },interval)
}
proto.prototype.addEvent = function(obj,type,fn){
    // obj对象用原生Js获取
    if(obj.addEventListener){
      obj.addEventListener(type, fn, false);
    } else if(obj.attachEvent){ // IE
      obj.attachEvent('on' + type, fn);
    }
}
proto.prototype.removeEvent = function(obj,type,fn){
    if(obj.removeEventListener){
      obj.removeEventListener(type, fn, false);
    } else if(obj.detachEvent){ // IE
      obj.detachEvent('on' + type,fn)
    }
}
proto.prototype.preDef = function(ev){
    var e = ev || window.event;
    if(e.preventDefault){
      e.preventDefault();
    } else{
      e.returnValue = false;
    }
}
proto.prototype.preBub = function(ev){
    var e = ev || window.event;
    if(e.stopPropagation){
      e.stopPropagation();
    } else{  // IE
      e.cancelBubble = true;
    }
}
proto.prototype.getSp = function(){
    return {
      top: document.documentElement.scrollTop || document.body.scrollTop,
      left: document.documentElement.scrollLeft || document.body.scrollLeft
    }
}
proto.prototype.getWindow = function(){
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
var globalMethod = new proto();