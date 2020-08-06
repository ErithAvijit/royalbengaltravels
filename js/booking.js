function change(val)
{
	if(val=='hooghly'){
		document.getElementById('price').value=5000;
		/*document.getElementById('textarea').value="Your trip will be to Bandel church,tarakeswar temple,hanseswari temple,rajhat mandir,dutch cemetery chinsura,mayurpankhi ghat";*/
		document.getElementsById("textarea").value="Your trip will be to Bandel church,tarakeswar temple,hanseswari temple,rajhat mandir,dutch cemetery chinsura,mayurpankhi ghat";
	}
	if(val=='malda'){
		document.getElementById('price').value=3000;
		document.getElementById('textarea').value="your trip will be to Gour,Adina Mosque,water park,Adina Mosque"
	}
	if(val=='jalpaiguri'){
		document.getElementById('price').value=6000;
		document.getElementById('textarea').value="your trip will be to Gorumara national park,chapramari wildlife park,lataguri wildlife park,buxa wildlife sanctuary,neora valley natioanl park,singalila national park,siliguri,kalimpong,gangtok,mirik,kalimpong city,lolegaon"
	}
	if(val=='digha'){
		document.getElementById('price').value=7000;
		document.getElementById('textarea').value="your trip will be to mandarmani,digha,tajpur,sankarpur"
	}
}
function tprice()
{
	var num=document.getElementById('number').value;
	var price=document.getElementById('price').value;
  var gprice=(price*num)*0.9;
  document.getElementById('total').value=gprice;
}
/*function fun(val)
{
	if(val=='chuchura'){
		window.alert("Your trip will be to Bandel church,tarakeswar temple,hanseswari temple,rajhat mandir,dutch cemetery chinsura,mayurpankhi ghat");
	}
	if(val=='malda'){
		window.alert("your trip will be to Gour,Adina Mosque,water park,Adina Mosque");
	}
	if(val=='jalpaiguri'){
		window.alert("your trip will be to Gorumara national park,chapramari wildlife park,lataguri wildlife park,buxa wildlife sanctuary,neora valley natioanl park,singalila national park,siliguri,kalimpong,gangtok,mirik,kalimpong city,lolegaon")
	}
	if(val=='digha'){
		window.alert("your trip will be to mandarmani,digha,tajpur,sankarpur");
	}
}*/
anime.timeline({loop: true})
  .add({
    targets: '.ml8 .circle-white',
    scale: [0, 3],
    opacity: [1, 0],
    easing: "easeInOutExpo",
    rotateZ: 360,
    duration: 1100
  }).add({
    targets: '.ml8 .circle-container',
    scale: [0, 1],
    duration: 1100,
    easing: "easeInOutExpo",
    offset: '-=1000'
  }).add({
    targets: '.ml8 .circle-dark',
    scale: [0, 1],
    duration: 1100,
    easing: "easeOutExpo",
    offset: '-=600'
  }).add({
    targets: '.ml8 .letters-left',
    scale: [0, 1],
    duration: 1200,
    offset: '-=550'
  }).add({
    targets: '.ml8 .bang',
    scale: [0, 1],
    rotateZ: [45, 15],
    duration: 1200,
    offset: '-=1000'
  }).add({
    targets: '.ml8',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1400
  });

anime({
  targets: '.ml8 .circle-dark-dashed',
  rotateZ: 360,
  duration: 8000,
  easing: "linear",
  loop: true
});