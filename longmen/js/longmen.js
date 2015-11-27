// 英雄切换
var heroTab = function(settings){
	var self = this;
	this.settings = {
		sideLi 			: '.page-4 ul.purple li',
		sideUl 			: '.page-4 ul.purple',
		dataArr 	 	: heroData.purpleArr,
		curr 			: 0,
		color 			: '.purple'
	}
	$.extend(this.settings,settings || {});
	this.timer = null;
	this.currentIndex  = 0;
	this.tCount  = 1;
	this.emptyHtml = '<li></li>';
	this.bodyNode = $(document.body);
	this.slideHero = "<li><img src='' alt=''><b class='heroName'></b><span>查看属性</span></li>";
	this.init();
	this.dirbtnEvent();
	$(self.settings.sideLi).bind('click', function(){
		var index = $(this).index();
		self.currentIndex = index;
		$(this).siblings().find('img').stop().animate({
			'top': -119
		},300);
		$(this).addClass('current').siblings().removeClass('current');
		for(var i = 0;i < self.settings.dataArr.length;i++){
			for(var k in self.settings.dataArr[i]){
				$('.bs_details').eq(self.settings.curr).find('.' + k).html(self.settings.dataArr[index][k]);
			}
		}
	});
	$(this.settings.sideLi).hover(function() {
		var _this = $(this);
		this.timer = setTimeout(function(){
			_this.find('img').stop().animate({
				'top': 0
			},300);
		}, 1)
	}, function() {
		clearTimeout(this.timer);
		if(!$(this).hasClass('current')) {
			$(this).find('img').stop().animate({
				'top': -119
			}, 300);
		}
	});
	this.fillUl();
	$(self.settings.sideLi + ':empty').css('cursor','default');
}

heroTab.prototype = {
	init: function(){
		var self = this;
		for(var i = 0;i < self.settings.dataArr.length;i++){
			$(self.settings.sideUl).append(self.slideHero)
		};
		$(self.settings.sideLi).eq(0).addClass('current');
		for(var i = 0;i < self.settings.dataArr.length;i++){
			for(var k in self.settings.dataArr[i]){
				$(self.settings.sideLi).eq(i).find('.heroName').html(self.settings.dataArr[i].name).end().find('img').attr('src', self.settings.dataArr[i].heroImgSrc_small);
				$('.bs_details').eq(self.settings.curr).find('.' + k).html( self.settings.dataArr[0][k]);
			}
		};
	},

	fillUl: function(){
		var self = this;
		self.lmLength = Math.ceil(self.settings.dataArr.length/8);
		self.liLength = $(self.settings.sideLi).length;
		self.leftLiLength = self.lmLength*8 - self.liLength;
		for(var i = 0;i < self.leftLiLength;i++){
			$(self.settings.sideUl).append(this.emptyHtml);
		}
		if(self.liLength > 8){
			$(self.settings.color).parent().siblings('.next_btn').click(function(){
				self.tCount++;
				if(self.tCount >= self.lmLength){
					self.tCount = self.lmLength - 1;
				}
				$(self.settings.sideUl).animate({
					'top': -self.tCount*4*119
				})
				$(self.settings.sideLi).eq(8).click().find('img').animate({
					'top':0
				});
			});
			$(self.settings.color).parent().siblings('.prev_btn').click(function(){
				self.tCount--;
				if(self.tCount <= 0){
					self.tCount = 0;
				}
				$(self.settings.sideUl).animate({
					'top': -self.tCount*4*119
				})
				$(self.settings.sideLi).eq(0).click().find('img').animate({
					'top':0
				});
			});
		}
	},

	dirbtnEvent: function(){
		var self = this;
		var introLength = $('.bs_wrap').eq(self.settings.curr).find('li').length;
		$('.page-4 .bs_details').eq(self.settings.curr).find('.next_btn').click(function(){
			if(!$('.page-4 .bs_wrap').eq(self.settings.curr).find('img').is(':animated')){
				self.currentIndex++;
				if(self.currentIndex > introLength - 1){
					$(self.settings.sideUl).animate({
						'top': 0
					})
					self.currentIndex = 0;
				} else if(self.currentIndex === 8){
					$(self.settings.sideUl).animate({
						'top': -4*119
					})
				}
				$('.page-4 .bs_wrap').eq(self.settings.curr).find('.bs_intro_tab li').eq(self.currentIndex).find('img').stop()
				.animate({
					'top': 0
				},function(){
					$(this).parent('li').addClass('current')
				}).parent('li').siblings().find('img').stop().animate({
					'top':-119
				},function(){
					$(this).parent('li').removeClass('current')
				});
				for(var i = 0;i < self.settings.dataArr.length;i++){
					for(var k in self.settings.dataArr[i]){
						$('.bs_details').eq(self.settings.curr).find('.' + k).html(self.settings.dataArr[self.currentIndex][k]);
					}
				}
			}
		}).end().find('.prev_btn').click(function(){
			if(!$('.page-4 .bs_wrap').eq(self.settings.curr).find('img').is(':animated')){
				if(self.currentIndex <= 0){
					self.currentIndex = 8;
				} else{
					self.currentIndex--;
				}
				if(introLength > 8 && self.currentIndex === 8){
					$(self.settings.sideUl).animate({
						'top': -4*119
					})
				}
				if(self.currentIndex === 7){
					$(self.settings.sideUl).animate({
						'top': 0
					})
				}
				$('.page-4 .bs_wrap').eq(self.settings.curr).find('.bs_intro_tab li').eq(self.currentIndex).find('img')
				.stop().animate({
					'top': 0
				},function(){
					$(this).parent('li').addClass('current')
				}).parent('li').siblings().find('img').stop().animate({
					'top':-119
				},function(){
					$(this).parent('li').removeClass('current')
				});
				for(var i = 0;i < self.settings.dataArr.length;i++){
					for(var k in self.settings.dataArr[i]){
						$('.bs_details').eq(self.settings.curr).find('.' + k).html(self.settings.dataArr[self.currentIndex][k]);
					}
				}
			}
		})
	}
}

// 全站滑动效果
!function($){
	var wind = $(window)
	var winHeight = wind.height();
	var winWidth = wind.width();
	var slideIndex = 0;
	var slideLength = $('.side_index li').length;
	var slideCircle = $('.side_index li a');

	if(winWidth <= 1450){
		winHeight -= 17;
		$('.globalWrap').css('overflowX','auto');
		$('.page-1,.page-2,.page-3,.page-4,.page-5').css({
			'height':winHeight,
			'minWidth':1920
		})
	}
	// 锚点判断
	var indexLocation = window.location.href;
	if(indexLocation.match('anchor=bs')){
		slideIndex = 3;
		$('.animate_control').css('top',-winHeight*3);
		$('.side_index li').eq(3).addClass('on').siblings().removeClass('on');
	} else if(indexLocation.match('anchor=wegl')){
		slideIndex = 4;
		$('.animate_control').css('top',-winHeight*4);
		$('.side_index li').eq(4).addClass('on').siblings().removeClass('on');
	} else if(indexLocation.match('anchor=tese')){
		slideIndex = 2;
		$('.animate_control').css('top',-winHeight*2);
		$('.side_index li').eq(2).addClass('on').siblings().removeClass('on');
	}

	slideCircle.click(function(){
		var thisIndex = $(this).parent('li').index();
		var _this = $(this);
		slideIndex = thisIndex;
		$('.animate_control').stop().animate({
			'top': -thisIndex*winHeight
		},400,function(){
			_this.parent('li').addClass('on').siblings('li').removeClass('on');
			if(slideIndex === 2){
				$('.page-3').addClass('curr');
			} else{
				$('.page-3').removeClass('curr');
			}
		});	
	});
	wind.bind('mousewheel',function(event, delta, deltaX, deltaY) {
		setTimeout(function(){
			if(!$('.animate_control').is(':animated')){
				if(delta > 0){
					slideIndex--;
					if(slideIndex <= 0){
						slideIndex = 0;
					}
					$('.animate_control').stop().animate({
						'top': -slideIndex*winHeight
					},400,function(){
						slideCircle.parent('li').eq(slideIndex).addClass('on').siblings('li').removeClass('on');
						if(slideIndex === 2){
							$('.page-3').addClass('curr');
						} else{
							$('.page-3').removeClass('curr');
						}
					});
				} else{
					slideIndex++;
					if(slideIndex > slideLength - 1){
						slideIndex = 0;
					}
					$('.animate_control').stop().animate({
						'top': -slideIndex*winHeight
					},400,function(){
						slideCircle.parent('li').eq(slideIndex).addClass('on').siblings('li').removeClass('on');
						if(slideIndex === 2){
							$('.page-3').addClass('curr');
						} else{
							$('.page-3').removeClass('curr');
						}
					});
				}
			}
		}, 200)
	});
	$('.slide_down_ico a').click(function(){
		slideIndex++;
		$('.animate_control').stop().animate({
			'top': -slideIndex*winHeight
		},400,function(){
			slideCircle.parent('li').eq(slideIndex).addClass('on').siblings('li').removeClass('on');
			if(slideIndex === 2){
				$('.page-3').addClass('curr');
			} else{
				$('.page-3').removeClass('curr');
			}
		});
	});


	// 首页新闻自动切换
	var page1_timer = setInterval(function(){
		$('.page-1 .scrollNews ul').stop().animate({
			top: 0
		},function(){
			var firstNewsLi = $('.page-1 .scrollNews ul li').first();
			$('.page-1 .scrollNews ul').append(firstNewsLi);
			$('.page-1 .scrollNews ul').css('top',-44);
		})
	}, 3000);

	// 最后一屏剧照切换
	var tvCount = 0;
	var tvImg = $('.page-5 .tv_img ul li');
	var tvImgLength = tvImg.length;
	var limitCount = Math.ceil(tvImgLength/3);
	$('.page-5 .tv_btn em.prev_btn').click(function(){
		var _page5This = $(this);
		var tvHeight = tvImg.height();
		tvCount++;
		if(tvCount > limitCount - 1){
			tvCount = limitCount - 1;
		}
		$('.page-5 .tv_img ul').stop().animate({
			'top': -tvCount*tvHeight
		});
	});
	$('.page-5 .tv_btn em.next_btn').click(function(){
		var _page5This = $(this);
		var tvHeight = tvImg.height();
		tvCount--;
		if(tvCount < 0){
			tvCount = 0;
		}
		$('.page-5 .tv_img ul').stop().animate({
			'top': -tvCount*tvHeight
		});
	});
}(jQuery)