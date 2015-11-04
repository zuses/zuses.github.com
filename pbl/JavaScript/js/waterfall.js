window.onload = function(){
    waterfall('main','box');
}

function waterfall(parent,box){
    // 将mian下的所有class为box的元素取出来
    var oParent = document.getElementById('main');
    var oBoxs = getByclass(oParent,box);
    // 计算整个页面可显示的列数（页面宽/box的宽）
    var oBoxW = oBoxs[0].offsetWidth;
    var cols = Math.floor(document.documentElement.clientWidth/oBoxW);
    // 设置main的宽
    oParent.style.cssText = 'width:' + oBoxW*cols + 'px;margin: 0 auto;'
    var hArr = []; // 存放每列元素高度的数组
    for(var i = 0;i< oBoxs.length;i++){
        if(i < cols){    // 表示在第一行
            hArr.push(oBoxs[i].offsetHeight);
        } else{          // 表示在第一行以下的行数
            var minH = Math.min.apply(null,hArr);
            var index = getMinhIndex(hArr,minH);
            oBoxs[i].style.position = 'absolute';
            oBoxs[i].style.top = minH + 'px';
            oBoxs[i].style.left = index*oBoxW + 'px';
            hArr[index] += oBoxs[i].offsetHeight;
        }
    }
    console.log(hArr)
}

function getByclass(parent,clsName){
    var boxArr = new Array(),   // 用来存储取到的所需要的class元素
        oElements = parent.getElementsByTagName('*');
    for(var i = 0;i < oElements.length;i++){
        if(oElements[i].className === clsName){
            boxArr.push(oElements[i]);
        }
    }  
    return boxArr;
}

function getMinhIndex(arr,val){
    for(var i in arr){
        if(arr[i] === val){
            return i;
        }
    }
}