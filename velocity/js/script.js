/*(function($){
	$('#div1').velocity({
		width: '300px'
	},{
		duration: '1000',
		complete : function(){
			$('#div2').velocity({
				width: '300px'
			},{
				duration: '1000',
				complete : function(){
					$('#div3').velocity({
						width: '300px'
					},{
						duration: '1000'
					});
				}
			});
		}
	});
})(jQuery);
*/

/*
// 动画序列
var seq = [
	{
		elements 	: $('#div1'),
		properties 	: {width: '300px'},
		options   	: {duration: 1000}
	},
	{
		elements 	: $('#div2'),
		properties 	: {width: '300px'},
		options  	: {duration: 1000}
	},
	{
		elements 	: $('#div3'),
		properties 	: {width: '300px'},
		options   	: {duration: 1000}
	}
];

$.Velocity.RunSequence(seq);
*/

/*$('#div1').on('mouseover',function(){
	$(this).velocity('callout.shake');  // callout.shake 预定于动画
})

$.Velocity.RegisterUI('lixin.pulse',{  	// 自定义动画
	defaultDuration: 300,
	calls: [
		[{scaleX: 1.1},0.5],
		[{scaleX: 1.0},0.5]
	]
})

$('#div2').on('mouseover',function(){
	$(this).velocity('lixin.pulse');  	// 调用自定义动画
})*/


// 实际案例 --  适用于动画序列的场景
(function($){
	var container = $('.container');
	var box = $('.box');
	var pop = $('.pop');
	var buddy = $('.buddy');
	var open = $('.btn');
	var close = $('.close');
	var imgs = pop.find('img');

	// 首先自定义动画
	$.Velocity.RegisterUI('souljay.slideUpIn',{
		defaultDuration: 500,
		calls: [
			[{opacity:[1,0],translateY:[0,100]}]
		]
	});

	$.Velocity.RegisterUI('souljay.slideDownOut',{
		defaultDuration: 300,
		calls: [
			[{opacity:[0,1],translateY:[100,0]}]
		]
	});

	$.Velocity.RegisterUI('souljay.scaleIn',{
		defaultDuration: 300,
		calls: [
			[{opacity:[1,0],scale:[1,0.3]}]
		]
	});

	$.Velocity.RegisterUI('souljay.scaleOut',{
		defaultDuration: 300,
		calls: [
			[{opacity:[1,0],scale:[1,0.3]}]
		]
	});

	// 其次设置动画序列
	var seqInit = [{
		elements: container,
		properties :'souljay.slideUpIn',
		options: {
			sequenceQueue: false   // 默认是一次执行-true,设置为false为同时执行
		}
	},{
		elements: box,
		properties :'souljay.slideUpIn',
		options: {
			sequenceQueue: false
		}
	},{
		elements: buddy,
		properties :'souljay.slideUpIn',
		options: {
			sequenceQueue: false,
			delay: 300
		}
	}];

	var seqClick = [{
		elements: container,
		properties :'souljay.slideDownOut'
	},{
		elements: box,
		properties :'souljay.slideDownOut',
		options: {
			sequenceQueue: false
		}
	},{
		elements: container,
		properties :'souljay.slideUpIn'
	},{
		elements: pop,
		properties :'souljay.slideUpIn',
		options: {
			sequenceQueue: false
		}
	},{
		elements: imgs,
		properties :'souljay.scaleIn'
	}];

	var seqClose = [{
		elements: container,
		properties :'souljay.slideDownOut'
	},{
		elements: box,
		properties :'souljay.slideDownOut',
		options: {
			sequenceQueue: false
		}
	},{
		elements: pop,
		properties :'souljay.slideDownOut',
		options: {
			sequenceQueue: false
		}
	},{
		elements: imgs,
		properties :'souljay.scaleOut'
	},{
		elements: container,
		properties :'souljay.slideUpIn',
		options: {
			sequenceQueue: false
		}
	},{
		elements: box,
		properties :'souljay.slideUpIn',
		options: {
			sequenceQueue: false
		}
	}];

	// 最后记运行动画序列
	$.Velocity.RunSequence(seqInit);

	open.on('click',function(){
		$.Velocity.RunSequence(seqClick);
	});

	close.on('click',function(){
		$.Velocity.RunSequence(seqClose);
	});
})(jQuery)