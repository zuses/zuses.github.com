;(function($){

	var LightBox = function(settings){
		var self = this;
		console.log(self)

		// 配置参数设置
		this.settings = {
			speed: 100,
			maskOpacity: .5
		}
		$.extend(this.settings,settings || {});

		// 创建遮罩和弹出框
		this.popupMask = $('<div id="G-lightbox-mask"></div>');
		this.popupWin = $('<div id="G-lightbox-popup"></div>');
		// 保存body
		this.bodyNode = $(document.body);
		// 渲染剩余的DOM,并且插入到body
		this.renderDom();

		this.picViewArea = this.popupWin.find('div.lightbox-pic-view'); // 图片预览区
		this.popupPic = this.popupWin.find('img.lightbox-image'); // 图片
		this.picCaptionArea = this.popupWin.find('div.lightbox-pic-caption'); // 图片描述区域
		this.nextBtn = this.popupWin.find('span.lightbox-next-btn');
		this.prevBtn = this.popupWin.find('span.lightbox-prev-btn');
		this.captionText = this.popupWin.find('p.lightbox-pic-desc'); // 图片描述
		this.currentIndex = this.popupWin.find('span.lightbox-of-index'); // 图片索引
		this.closeBtn = this.popupWin.find('span.lightbox-close-btn'); // 弹框关闭按钮

		// 准备开发事件委托(不能直接获取对象绑定事件)，获取组数据
		this.groupName = null;
		this.groupData = [];  // 放置同一组数据
		this.bodyNode.delegate('.js-lightbox,*[data-role=lightbox]', 'click', function(e) {
			// 阻止事件冒泡
			e.stopPropagation();
			var currentGroupName = $(this).attr('data-group');
			if(currentGroupName != self.groupName){
				self.groupName = currentGroupName;
				// 根据当前组名获取同一组数据
				self.getGroup();
			}
			// 初始化弹窗
			self.initPopup($(this));
		});
		// 关闭弹出框
		this.popupMask.click(function(){
			self.picCaptionArea.fadeOut();
			$(this).fadeOut();
			self.popupWin.fadeOut();
		});	

		this.closeBtn.click(function(){
			self.picCaptionArea.fadeOut();
			self.popupMask.fadeOut();
			self.popupWin.fadeOut();
			self.clear = false;
		});

		// 绑定上下切换按钮事件
		this.flag = true;
		this.nextBtn.hover(function() {
			if(!$(this).hasClass('disabled') && self.groupData.length > 1){
				$(this).addClass('lightbox-next-btn-show')
			}
		}, function() {
			if(!$(this).hasClass('disabled') && self.groupData.length > 1){
				$(this).removeClass('lightbox-next-btn-show')
			}
		}).click(function(e) {
			if(!$(this).hasClass('disabled') && self.flag){
				self.flag = false;
				e.stopPropagation();
				self.goto('next');
			};
		});

		this.isIE6 = /MSIE 6.0/.gi.test(window.navigator.userAgent);
		alert(this.isIE6) 

		this.prevBtn.hover(function() {
			if(!$(this).hasClass('disabled') && self.groupData.length > 1){
				$(this).addClass('lightbox-prev-btn-show')
			}
		}, function() {
			if(!$(this).hasClass('disabled') && self.groupData.length > 1){
				$(this).removeClass('lightbox-prev-btn-show')
			}
		}).click(function(e) {
			if(!$(this).hasClass('disabled') && self.flag){
				self.flag = false;
				e.stopPropagation();
				self.goto('prev');
			};
		});

		// 绑定窗口调整事件
		var timer = null;
		this.clear = false;
		$(window).resize(function(){
			if(self.clear){
				window.clearTimeout(timer)
				timer = window.setTimeout(function(){
					self.loadPicSize(self.groupData[self.index].src);
				}, 500)
			}
		}).keyup(function(e){
			var keyValue = e.which;
			if(self.clear){
				if(keyValue === 38 || keyValue === 37){
					self.prevBtn.click();
				} else if(keyValue === 40 || keyValue === 39){
					self.nextBtn.click();
				}
				console.log(e.which);
			}
		});
	};

	LightBox.prototype = {
		goto: function(dir){
			if(dir === 'next'){
				this.index++;
				if(this.index >= this.groupData.length - 1){
					this.nextBtn.addClass('disabled').removeClass('lightbox-next-btn-show')
				};
				if(this.index != 0){
					this.prevBtn.removeClass('disabled');
				};
				var src = this.groupData[this.index].src;
				this.loadPicSize(src);
			} else if(dir === 'prev'){
				this.index--;
				if(this.index <= 0){
					this.prevBtn.addClass('disabled').removeClass('lightbox-prev-btn-show')
				};
				if(this.index != this.groupData.length - 1){
					this.nextBtn.removeClass('disabled');
				}
				var src = this.groupData[this.index].src;
				this.loadPicSize(src);
			}
		},

		renderDom: function(){
			var strDom = '<div class="lightbox-pic-view">'+
			'<span class="lightbox-btn lightbox-prev-btn"></span>'+
			'<img class="lightbox-image" src="img/2-2.jpg" alt="">'+
			'<span class="lightbox-btn lightbox-next-btn"></span>'+
		'</div>'+
		'<div class="lightbox-pic-caption">'+
			'<div class="lightbox-caption-area">'+
				'<p class="lightbox-pic-desc">图片标题</p>'+
				'<span class="lightbox-of-index">当前索引：0 of 0</span>'+
			'</div>'+
			'<span class="lightbox-close-btn"></span>'+
		'</div>';

		// 插入到popupWin
		this.popupWin.html(strDom);
		
		//把遮罩和弹出框插入到body
		this.bodyNode.append(this.popupMask,this.popupWin);
		this.popupMask.css('opacity',this.settings.maskOpacity)
		},

		getGroup: function(){
			var self = this;
			// 根据当前的组别名称获取页面中所有相同的组别的对象
			self.groupData.length = 0;
			var groupList = this.bodyNode.find("*[data-group=" + this.groupName + "]");
			groupList.each(function(){
				self.groupData.push({
					src 	: $(this).attr('data-source'),
					id 		: $(this).attr('data-id'),
					caption : $(this).attr('data-caption')
				})
			});
			console.log(self.groupData)
		},

		loadPicSize: function(sourceSrc){
			var self = this;
			self.popupPic.css({width: 'auto',height: 'auto'}).hide();
			this.picCaptionArea.hide();
			this.preLoadImg(sourceSrc,function(){
				self.popupPic.attr('src',sourceSrc);
				var picWidth = self.popupPic.width();
				var picheight = self.popupPic.height();
				console.log(picWidth + ':' + picheight);
				self.changePic(picWidth,picheight);
			});
		},

		preLoadImg: function(src,callback){
			var img = new Image();
			if(!!window.ActiveXOject){
				img.onreadystatechange = function(){
					if(this.readystate == 'complete'){
						callback();
					}
				}
			} else{
				img.onload = function(){
					callback();
				}
			};
			img.src = src;
		},

		changePic: function(width,height){
			var self=  this,
				winWidth = $(window).width(),
				winHeight = $(window).height();

			// 如果图片的宽高大于浏览器视口的宽高比例，我就看下是否溢出
			var scale = Math.min(winWidth/(width + 10),winHeight/(height + 10),1);
			width = width*scale;
			height = height*scale;
			this.picViewArea.animate({
				width: width - 10,
				height: height - 10 
			},self.settings.speed)
			this.popupWin.animate({
				width: width,
				height: height,
				marginLeft: -(width/2),
				top: (winHeight - height)/2
			},self.settings.speed,function(){
				self.popupPic.css({
					width: width - 10,
					height: height - 10
				}).fadeIn();
				self.picCaptionArea.fadeIn();
				self.flag = true;
				self.clear = true;
			});

			// 设置描述文字和当前索引
			this.captionText.text(this.groupData[this.index].caption);
			this.currentIndex.text('当前索引：' + (this.index + 1) + ' of ' + this.groupData.length);
		},

		showMaskAndPopup: function(sourceSrc,currentId){
			var self = this;
			this.popupPic.hide();
			this.picCaptionArea.hide();

			this.popupMask.fadeIn();

			var winWidth = $(window).width();
			var winHeight = $(window).height();

			this.picViewArea.css({
				width: winWidth/2,
				height: winHeight/2
			});

			this.popupWin.fadeIn();

			var viewHeight = winHeight/2 + 10;
			this.popupWin.css({
				width: winWidth/2 + 10,
				height: winHeight/2 + 10,
				marginLeft: -(winWidth/2 + 10)/2,
				top:-viewHeight
			}).animate({
				top: (winHeight-viewHeight)/2
			},self.settings.speed,function(){
				//加载图片
				self.loadPicSize(sourceSrc);
			});
			// 根据当前点击的元素ID获取在当前组别里面的索引
			this.index = this.getIndexOf(currentId);

			var groupDataLength = this.groupData.length;
			console.log(this.nextBtn)
			if(groupDataLength > 1){

				if(this.index === 0){
					$(this.prevBtn).addClass('disabled');
					$(this.nextBtn).removeClass('disabled');
				} else if(this.index === groupDataLength - 1){
					$(this.prevBtn).removeClass('disabled');
					$(this.nextBtn).addClass('disabled');
				} else{
					$(this.prevBtn).removeClass('disabled');
					$(this.nextBtn).removeClass('disabled');
				}
			} else{
				$(this.prevBtn).addClass('disabled');
				$(this.nextBtn).addClass('disabled');
			}
		},

		getIndexOf: function(currentId){
			var index = 0;
			$(this.groupData).each(function(i){
				index=i;
				if(this.id===currentId){
					return false;
				}
			});

			return index;
		},

		initPopup: function(currentObj){
			var self = this,sourceSrc = currentObj.attr('data-source'),
			currentId = currentObj.attr('data-id');

			this.showMaskAndPopup(sourceSrc,currentId);
		}

	};

	window['LightBox'] = LightBox;
})(jQuery)