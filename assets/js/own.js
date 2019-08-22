$(document).ready(function () {

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

})
