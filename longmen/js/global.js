/*
 *
 *    Javascript file Create By Shaojie.li
 *    Date  2015-07-16
 *    Last editor --- Shaojie.li
 *    Last date   --- 2015-10-12
 * 
 */ 

/*弹框结构*/
var winBomb = {

  bomb1 : "<div id='qrcode' class='pop'><div class='pop-ctn'><a href='javascript:;' title='关闭' class='pop-close'><span class='icons icons-popclose'></span></a><div class='media clear'><div class='f-left'><img src='/templets/xh3/img/xh3d_wei.jpg' width='130' height='130' class='media-object'></div><div class='media-body'><h4 class='pop-title'>如何关注<span class='highline'>校花的贴身高手3D</span>公众帐号</h4><ol class='list'><li>A 微信扫描二维码</li><li>B 微信搜索公众号： <span class='highline'>syxh3d</span></li></ol></div></div></div></div>",

  bomb2 : "<div id='qrcode' class='pop'><div class='pop-ctn'><a href='javascript:;' title='关闭' class='pop-close'><span class='icons icons-popclose'></span></a><div class='media clear'><div class='f-left'><img src='/templets/xh3/img/xh3d_pc_download.jpg' width='130' height='130' class='media-object'></div><div class='media-body'><h4 class='pop-title'>扫描左边二维码立即下载IOS正版</h4><ol class='list'><li>点击下方链接到iTunes下载</li><li><a href='http://lnk8.cn/BRtsw1' target='_blank' class='highline'>苹果IOS正版下载</a></li></ol></div></div></div></div>",

  bomb3 : "",

  bomb4 : "<div class='window_box'><div class='window_title clear'><span>提示</span><em>X</em></div><div class='window_content clear'><div class='ctn_left'>弹框2</div><div class='ctn_right'>弹框2</div></div></div>"
};
/*正则常用匹配对象*/
var Regexs = {
    telphone: (/^((\(\d{3}\))|(\d{3}\-))?(\(0\d{2,3}\)|0\d{2,3}-)?[1-9]\d{6,7}$/),  //座机手机号码
    allphone: (/^((13[0-9])|(14[57])|(15[0-9])|(17[678])|(18[0-9]))[0-9]{8}$/),          //所有手机号码
    ydphone: (/^((13[4-9])|(15[012789])|147|178|(18[23478]))[0-9]{8}$/),            //移动手机号码
    ltphone: (/^((13[0-2])|(145)|(15[56])|(176)|(18[56]))[0-9]{8}$/),                    //联通手机号码
    dxphone: (/^((133)|(153)|(177)|(180)|(181)|(189))[0-9]{8}$/),               //电信手机号码
    email: (/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/),        //邮箱
    url: (/(?:https|http|ftp|rtsp|mms):\/\/.+\/[\w]+\.[\w]+/),                  //网址
    cn: (/^[\u4e00-\u9fa5]+$/i),                                                //汉字
    image: (/\.jpg$|\.jpeg$|\.png$/i),                                                  //图片格式
    emscode: (/^[1-9]\d{5}$/),                                                  //邮政编码
    isint: (/^(\-)?[1-9]+\d*$/),                                                //整数
    isfloat: (/^[0-9]+\.?[0-9]*$/),                                 //判断是否为正小数
    isnumber: (/^[-\+]?\d+(\.\d+)?$/),                              //判断为实数
    words: (/^[A-Za-z]+$/),                                         //判断是否为英文字母
    wordsAndNum: (/^[A-Za-z0-9]+$/),                                //判断是否为字母+数字
    wordsAndNumAndDownline: (/^\w+$/),                              //判断是否由数字、26个英文字母或者下划线组成的字符串
    qq: (/^[1-9]\d{4,11}$/),                                        //QQ
    personCard18: (/^(\d{6})()?(\d{4})(\d{2})(\d{2})(\d{3})(\d|X)$/),   //身份证18位
    personCard15: (/^(\d{6})()?(\d{2})(\d{2})(\d{2})(\d{3})$/)         //身份证15位
};

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
      $('.pop').removeClass('on');
      $('#qrcode,.window_cover').remove();
    });

    $('.window_cover').css({
      'position'          : 'absolute',
      'left'              :  0,
      'top'               :  0,
      'backgroundColor'   : '#000',
      'opacity'           : 0,
      'width'             : '100%',
      'height'            : docHeight,
      'zIndex'            : 999998,
      'opacity'           : 0
    }).animate({'opacity':0.5},200);
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
    $(obj).eq(0).css('zIndex',2);
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
proto.prototype.returnTop = function(obj){
    var ctnHeight = $('.list_right').height();
    var winHeight = $(window).height()
    reIcon();
    $(window).scroll(function(){
      reIcon();
    });
    $(obj).click(function(){
       $('body,html').animate({
        'scrollTop':0
       },300);
    });
    function reIcon(){
      var s = globalMethod.getSp().top;
      if(s >= 200){
        $(obj).css({
          'display' : 'block',
          'bottom'     : 20
        });
      } else{
        $(obj).css('display','none');
      }
    }
}
var globalMethod = new proto();

/*常用变量*/
var isIE6 = globalMethod.browserBoolean('msie',6);
var isIE7 = globalMethod.browserBoolean('msie',7);
var isIE8 = globalMethod.browserBoolean('msie',8);
var isIE9 = globalMethod.browserBoolean('msie',9);
var isIE10 = globalMethod.browserBoolean('msie',10);