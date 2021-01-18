var myElement = document.getElementById('images'),
myimgs =  ['images/c.jpg','images/v.jpg','images/x.jpg','images/z.jpg'];

function changeImage(myElement,myimgs){
	'use strict';
	setInterval(function(){
var myRandom = Math.floor(Math.random()*myimgs.length);
myElement.src=myimgs[myRandom];
	},1000);
}
changeImage(myElement,myimgs);