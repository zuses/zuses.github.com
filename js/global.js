/*
 *
 *    Javascript file Create By Shaojie.li
 *    Date  2015-07-16
 *    Last editor --- Shaojie.li
 *    
 */ 

/*弹框结构*/
var winBomb = {

  bomb1 : "<div class='window_box'><div class='window_title clear'><span>提示</span><em>X</em></div><div class='window_content clear'><div class='ctn_left'>弹框2</div><div class='ctn_right'>弹框2</div></div></div>"

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
      personCard15: (/^(\d{6})()?(\d{2})(\d{2})(\d{2})(\d{3})$/)          //身份证15位
  };

/*公用方法 (需要调用)*/
var globalMethod = {
  /*公用方法-弹框*/
  bombBox : function(box){
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
      'marginTop'   :  -boxHeight/2 + scrollTops,
      'zIndex'      :  999999
    });

    $('.pop-close').click(function(event) {
      $('.pop,.window_cover').remove();
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
  },
  /*公用方法-弹框 - End*/

  /*浏览器判断*/
  checkBrowser : function(){
    var u     =   window.navigator.userAgent.toLocaleLowerCase(),
      msie    =   /(msie) ([\d.]+)/,
      chrome  =   /(chrome)\/([\d.]+)/,
      firefox =   /(firefox)\/([\d.]+)/,
      safari  =   /(safari)\/([\d.]+)/,
      opera   =   /(opera)\/([\d.]+)/,
      ie11    =   /(trident)\/([\d.]+)/,
      b       =   u.match(msie)||u.match(chrome)||u.match(firefox)||u.match(safari)||u.match(opera)||u.match(ie11);
      return {name: b[1], version: parseInt(b[2])};
  },
  /*浏览器判断 - End*/
   
  /*设备判断*/
  IsPC : function(){
    var userAgentInfo   = navigator.userAgent;  
      var Agents        = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");  
      var flag          = true;  
      for (var v = 0; v < Agents.length; v++) {  
          if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }  
      }  
      return flag;
  },
  /*设备判断 - End*/
  
  /*表单切换*/
  tabSwitch : function(obj,els,autoPlay){
    var num   = 0;
    var timer = null;
    var oLen  = $(obj).length;
    function swt(n){
      $(els).eq(n).addClass('on').siblings().removeClass('on');
      $(obj).eq(n).show().siblings().hide();
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
        num = index1
        startT();
      });
    }
  },
  /*表单切换 -End*/

  /* ajax 方法 */
  getXmlhttp : function (){
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
/* ajax 方法 -End */  

};
/*公用方法 - End*/

/*全站公用效果*/

// 全站顶部导航--英文导航名称
/*write here*/
/*全站公用效果 - End*/