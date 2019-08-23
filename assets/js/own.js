$(document).ready(function () {

	const cursor = $('#cursor');
	const menuItem = $('#bottom .item');
	const doc = $(document);

	new TypeIt('#typing',{
		speed: 50,
		startDelay:900,
		loop:true
	})
		.type("I'm a <em>programmre.</em>")
		.pause(300)
		.delete(3)
		.pause(250)
		.type('<em>er.</em>')
		.pause(750)
		.options({speed: 100, deleteSpeed: 75})
		.delete(11)
		.pause(250)
		.type('<em>freelancer.</em>')
		.options({speed: 100, deleteSpeed: 20})
		.pause(400)
		.go();

	doc.bind('mousemove',function (e) {
		cursor.attr("style","display:block; top:"+(e.pageY - 35)+"px; left:"+(e.pageX - 35)+"px;");
	})

	doc.bind('click',function () {
		cursor.addClass('expand');

		setTimeout(()=>{
			cursor.removeClass('expand');
		},500);
	})

	doc.bind('mouseout',function () {
		cursor.hide();
	})

})
