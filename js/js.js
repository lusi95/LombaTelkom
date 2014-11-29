$(document).ready(function(){
	$(".index").click(function(){
		$("#contentindex").slideDown(500);
		$("#contentgallery").slideUp(500);
		$("#content-books").slideUp(500);
		$("#content-movies").slideUp(500);
		$("#content-shop").slideUp(500);
		$("#content-com").slideUp(500);
		$("#footer").show(500);
	});
	$(".books").click(function(){
		$("#content-books").slideDown(500);
		$("#contentindex").slideUp(500);
		$("#contentgallery").slideUp(500);
		$("#content-movies").slideUp(500);
		$("#content-shop").slideUp(500);
		$("#content-com").slideUp(500);
		$("#footer").hide(500);
	});
	$(".gallery").click(function(){
		$("#contentgallery").slideDown(500);
		$("#contentindex").slideUp(500);
		$("#content-books").slideUp(500);
		$("#content-movies").slideUp(500);
		$("#content-shop").slideUp(500);
		$("#content-com").slideUp(500);
		$("#footer").hide(500);
	});
	$(".movies").click(function(){
		$("#content-movies").slideDown(500);
		$("#contentindex").slideUp(500);
		$("#content-books").slideUp(500);
		$("#contentgallery").slideUp(500);
		$("#content-shop").slideUp(500);
		$("#content-com").slideUp(500);
		$("#footer").hide(500);
	});
	$(".community").click(function(){
		$("#content-com").slideDown(500);
		$("#contentindex").slideUp(500);
		$("#content-books").slideUp(500);
		$("#contentgallery").slideUp(500);
		$("#content-movies").slideUp(500);
		$("#content-shop").slideUp(500);
		$("#footer").hide(500);
	});
	$(".shop").click(function(){
		$("#content-shop").slideDown(500);
		$("#contentindex").slideUp(500);
		$("#content-books").slideUp(500);
		$("#contentgallery").slideUp(500);
		$("#content-movies").slideUp(500);
		$("#content-com").slideUp(500);
		$("#footer").hide(500);
	});
});
$(document).ready(function(){
	$("#cover").click(function(){
		$(".1").slideToggle(500);
		$(".2").slideToggle(300);
		
	$("#cover1").click(function(){
		$(".2").hide(300);
		$(".1").show(300);
		
		});
	});
});
/*Content Index*/
$(document).ready(function(){
	$("#index1").click(function(){
		$("#index2").fadeToggle(800);
		$("#index3").fadeToggle(800);
		$("#index4").fadeToggle(800);
		$("#index5").fadeToggle(800);
		$("#index6").fadeToggle(800);
	});
	$("#index2").click(function(){
		$("#cright").slideToggle(800);
	});
	$("#index3").click(function(){
		$("#wel").text("Harry Potter is a series of seven fantasy novels written by the British author J. K. Rowling. The series, named after the titular character, chronicle the adventures of a wizard, Harry Potter, and his friends Ronald Weasley and Hermione Granger, all of whom are students at Hogwarts School of Witchcraft and Wizardry. The main story arc concerns Harry's quest to overcome the Dark wizard Lord Voldemort, who aims to become immortal, conquer the wizarding world, subjugate non-magical people, and destroy all those who stand in his way, especially Harry Potter.");
	});
	$("#index4").click(function(){
		$("#wel").text("Indifference and neglect often do much more damage than outright dislike.. We wizards have mistreated and abused our fellows for too long, and we are now readping out reward.. [Quote By Albus Dumbledore]");
	});
	$("#index5").click(function(){
		$("#wel").text("In this site, you can find many things about Harry Potter. You can buy original Harry Potter's DVD and books, and other things. For all Potterhead, in this site, you can join our community and meet other Potterhead. See our gallery to watch new videos.");
	});
	$("#index6").click(function(){
		if($("#wel").css("color") == "rgb(0, 0, 0)") $("#wel").css("color","red");
		else if($("#wel").css("color") == "rgb(255, 0, 0)") $("#wel").css("color","yellow");
		else if($("#wel").css("color") == "rgb(255, 255, 0)") $("#wel").css("color","black");
	});
});
/*Content Books*/
$(document).ready(function(){
	$("#menu-books ul").click(function(){
		$("#buy-book1,#buy-book2,#buy-book3,#buy-book4,#buy-book5,#buy-book6,#buy-book7").hide(100);
		});
	});
$(document).ready(function(){
	$(".book1").click(function(){
		$("#buku1").show(300);
		$("#buku2,#buku3,#buku4,#buku5,#buku6,#buku7").hide(300);
		});
	$("#buku1").click(function(){
		$("#buku1").hide(300);
		$("#buy-book1").show(300);	
		});
});
$(document).ready(function(){
	$(".book2").click(function(){
		$("#buku2").show(300);
		$("#buku1,#buku3,#buku4,#buku5,#buku6,#buku7").hide(300);
		});
	$("#buku2").click(function(){
		$("#buku2").hide(300);
		$("#buy-book2").show(300);	
		});
});
$(document).ready(function(){
	$(".book3").click(function(){
		$("#buku3").show(300);
		$("#buku1,#buku2,#buku4,#buku5,#buku6,#buku7").hide(300);
		});
	$("#buku3").click(function(){
		$("#buku3").hide(300);
		$("#buy-book3").show(300);	
		});
});
$(document).ready(function(){
	$(".book4").click(function(){
		$("#buku4").show(300);
		$("#buku1,#buku2,#buku3,#buku5,#buku6,#buku7").hide(300);
		});
	$("#buku4").click(function(){
		$("#buku4").hide(300);
		$("#buy-book4").show(300);	
		});
});
$(document).ready(function(){
	$(".book5").click(function(){
		$("#buku5").show(300);
		$("#buku1,#buku2,#buku4,#buku3,#buku6,#buku7").hide(300);
		});
	$("#buku5").click(function(){
		$("#buku5").hide(300);
		$("#buy-book5").show(300);	
		});
});
$(document).ready(function(){
	$(".book6").click(function(){
		$("#buku6").show(300);
		$("#buku1,#buku2,#buku4,#buku5,#buku3,#buku7").hide(300);
		});
	$("#buku6").click(function(){
		$("#buku6").hide(300);
		$("#buy-book6").show(300);	
		});
});
$(document).ready(function(){
	$(".book7").click(function(){
		$("#buku7").show(300);
		$("#buku1,#buku2,#buku4,#buku5,#buku3,#buku6").hide(300);
		});
	$("#buku7").click(function(){
		$("#buku7").hide(300);
		$("#buy-book7").show(300);	
		});
});
/*ContentMovie*/
$(document).ready(function(){
	$(function() {
		$( "#draggable" ).draggable({ revert: "valid" });
		});
	$(function() {
			$("#draggable").draggable();
			$( ".droppable" ).droppable();
			$( "#m1" ).on( "drop", function( event, ui ) {$( "#inside1" ).effect( "highlight", "medium" ); $("#m1").addClass( "ui-state-highlight" )})
			$( "#m2" ).on( "drop", function( event, ui ) {$( "#inside2" ).effect( "highlight", "medium" ); $("#m2").addClass( "ui-state-highlight" )})
			$( "#m3" ).on( "drop", function( event, ui ) {$( "#inside3" ).effect( "highlight", "medium" ); $("#m3").addClass( "ui-state-highlight" )})
			$( "#m4" ).on( "drop", function( event, ui ) {$( "#inside4" ).effect( "highlight", "medium" ); $("#m4").addClass( "ui-state-highlight" )})
			$( "#m5" ).on( "drop", function( event, ui ) {$( "#inside5" ).effect( "highlight", "medium" ); $("#m5").addClass( "ui-state-highlight" )})
			$( "#m6" ).on( "drop", function( event, ui ) {$( "#inside6" ).effect( "highlight", "medium" ); $("#m6").addClass( "ui-state-highlight" )})
			$( "#m7" ).on( "drop", function( event, ui ) {$( "#inside7" ).effect( "highlight", "medium" ); $("#m7").addClass( "ui-state-highlight" )})
	});
	$(document).ready(function(){
		$(".inside").mouseleave(function(){
			$(this).hide(2000);
		});
	});
});
/*Content Gallery*/
$(document).ready(function(){
	$(function() {
		$('#photocast img').hover(
			function(){
				$(this).stop().animate({'opacity':'1.0','height':'200px','top':'0px','left':'0px'});
			},
			function(){
				$(this).stop().animate({'opacity':'0.5','height':'500px','top':'-66.5px','left':'-150px'});
			}
		);
	});
});
$(document).ready(function(){
	$("#galphoto").click(function(){
		$("#photocast").slideDown(500);
		$("#video").fadeOut(500);
		$("#audio").fadeOut(500);
	});
	$("#galvideo").click(function(){
		$("#video").fadeIn(500);
		$("#photocast").slideUp(500);
		$("#audio").fadeOut(500);
	});
	$("#galaudio").click(function(){
		$("#audio").fadeIn(500);
		$("#video").fadeOut(500);
		$("#photocast").slideUp(500);
	});
});
$(document).ready(function(){
	$("#a1").click(function(){
		$("#box1").fadeIn();
	});
	$("#a2").click(function(){
		$("#box2").fadeIn();
	});
	$("#a3").click(function(){
		$("#box3").fadeIn();
	});
	$("#a4").click(function(){
		$("#box4").fadeIn();
	});
	$("#a5").click(function(){
		$("#box5").fadeIn();
	});
	$("#a6").click(function(){
		$("#box6").fadeIn();
	});
	$("#a7").click(function(){
		$("#box7").fadeIn();
	});
	$("#a8").click(function(){
		$("#box8").fadeIn();
	});
	$("#a9").click(function(){
		$("#box9").fadeIn();
	});
	$("#a10").click(function(){
		$("#box10").fadeIn();
	});
	$("#a11").click(function(){
		$("#box11").fadeIn();
	});
	$("#a12").click(function(){
		$("#box12").fadeIn();
	});
	$("#a13").click(function(){
		$("#box13").fadeIn();
	});
	$("#a14").click(function(){
		$("#box14").fadeIn();
	});
	$("#a15").click(function(){
		$("#box15").fadeIn();
	});
	$("#a16").click(function(){
		$("#box16").fadeIn();
	});
	$("#close1").click(function(){
		$("#box1").fadeOut();
	});
	$("#close2").click(function(){
		$("#box2").fadeOut();
	});
	$("#close3").click(function(){
		$("#box3").fadeOut();
	});
	$("#close4").click(function(){
		$("#box4").fadeOut();
	});
	$("#close5").click(function(){
		$("#box5").fadeOut();
	});
	$("#close6").click(function(){
		$("#box6").fadeOut();
	});
	$("#close7").click(function(){
		$("#box7").fadeOut();
	});
	$("#close8").click(function(){
		$("#box8").fadeOut();
	});
	$("#close9").click(function(){
		$("#box9").fadeOut();
	});
	$("#close10").click(function(){
		$("#box10").fadeOut();
	});
	$("#close11").click(function(){
		$("#box11").fadeOut();
	});
	$("#close12").click(function(){
		$("#box12").fadeOut();
	});
	$("#close13").click(function(){
		$("#box13").fadeOut();
	});
	$("#close14").click(function(){
		$("#box14").fadeOut();
	});
	$("#close15").click(function(){
		$("#box15").fadeOut();
	});
	$("#close16").click(function(){
		$("#box16").fadeOut();
	});
});
$(document).ready(function(){
	$(function() {
		$('#vid1').hover(
			function(){
				$("#v1").stop().fadeIn();
				$(this).stop().animate({'opacity':'0.7'});
			},
			function(){
				$("#v1").stop().fadeOut();
				$(this).stop().animate({'opacity':'1'});
			}
		);
	});
	$(function() {
		$('#vid2').hover(
			function(){
				$("#v2").stop().fadeIn();
				$(this).stop().animate({'opacity':'0.7'});
			},
			function(){
				$("#v2").stop().fadeOut();
				$(this).stop().animate({'opacity':'1'});
			}
		);
	});
	$(function() {
		$('#vid3').hover(
			function(){
				$("#v3").stop().fadeIn();
				$(this).stop().animate({'opacity':'0.7'});
			},
			function(){
				$("#v3").stop().fadeOut();
				$(this).stop().animate({'opacity':'1'});
			}
		);
	});
});
$(document).ready(function(){
	$(function() {
		$('#di1').hover(
			function(){
				$("#audi1").stop().toggle("explode");
			},
			function(){
				$("#audi1").stop().toggle("explode");
			}
		);
	});
	$(function() {
		$('#di2').hover(
			function(){
				$("#audi2").stop().toggle("explode");
			},
			function(){
				$("#audi2").stop().toggle("explode");
			}
		);
	});
	$(function() {
		$('#di3').hover(
			function(){
				$("#audi3").stop().toggle("explode");
			},
			function(){
				$("#audi3").stop().toggle("explode");
			}
		);
	});
	$(function() {
		$('#di4').hover(
			function(){
				$("#audi4").stop().toggle("explode");
			},
			function(){
				$("#audi4").stop().toggle("explode");
			}
		);
	});
	$(function() {
		$('#di5').hover(
			function(){
				$("#audi5").stop().toggle("explode");
			},
			function(){
				$("#audi5").stop().toggle("explode");
			}
		);
	});
});
$(document).ready(function(){
	$(function() {
		$('#galphoto').hover(
			function(){
				$(this).stop().animate({'height':'150px'});
				$('#galphoto p').stop().animate({'margin':'40px 15px'});
				$("#galvideo").stop().animate({'height':'75px'});
				$("#galaudio").stop().animate({'height':'75px'});
			},
			function(){
				$(this).stop().animate({'height':'100px'});
				$('#galphoto p').stop().animate({'margin':'15px'});
				$("#galvideo").stop().animate({'height':'100px'});
				$("#galaudio").stop().animate({'height':'100px'});
			}
		);
	});
	$(function() {
		$('#galvideo').hover(
			function(){
				$(this).stop().animate({'height':'150px'});
				$('#galvideo p').stop().animate({'margin':'40px 15px'});
				$("#galphoto").stop().animate({'height':'75px'});
				$("#galaudio").stop().animate({'height':'75px'});
			},
			function(){
				$(this).stop().animate({'height':'100px'});
				$('#galvideo p').stop().animate({'margin':'15px'});
				$("#galphoto").stop().animate({'height':'100px'});
				$("#galaudio").stop().animate({'height':'100px'});
			}
		);
	});
	$(function() {
		$('#galaudio').hover(
			function(){
				$(this).stop().animate({'height':'150px'});
				$('#galaudio p').stop().animate({'margin':'40px 15px'});
				$("#galvideo").stop().animate({'height':'75px'});
				$("#galphoto").stop().animate({'height':'75px'});
			},
			function(){
				$(this).stop().animate({'height':'100px'});
				$('#galaudio p').stop().animate({'margin':'15px'});
				$("#galvideo").stop().animate({'height':'100px'});
				$("#galphoto").stop().animate({'height':'100px'});
			}
		);
	});
});
$(document).ready(function(){
	$(function() {
		$('#audio a').hover(
			function(){
				$(this).stop().animate({'font-size':'40px'});
			},
			function(){
				$(this).stop().animate({'font-size':'30px'});
			}
		);
	});
});
/*Content Community*/
$(document).ready(function(){
	$(".button").click(function(){
		alert("content sudah di post Terimakasih Potterhead");
	});
});
/*Content Shop*/
$(document).ready(function(){
	$("#shop-movie").click(function(){
		$("#sale-movie").slideToggle(500);
	$("#sale-movie p").click(function(){
		alert("Thanks for Buying");
		$("#sale-movie").slideToggle(500);	
	});
	});
});
$(document).ready(function(){
	$("#shop-books").click(function(){
		$("#sale-books").slideToggle(500);
	$("#sale-books p").click(function(){
		alert("Thanks for Buying");
		$("#sale-books").slideToggle(500);	
	});
	});
});
$(document).ready(function(){
	$("#shop-acc").click(function(){
		$("#sale-acc").slideToggle(500);
	$("#sale-acc p").click(function(){
		alert("Thanks for Buying");
		$("#sale-acc").slideToggle(500);	
	});
	});
});
$(document).ready(function(){
	$("#shop-costume").click(function(){
		$("#sale-costume").slideToggle(500);
	$("#sale-costume p").click(function(){
		alert("Thanks for Buying");
		$("#sale-costume").slideToggle(500);	
	});
	});
});
$(document).ready(function(){
	$("#shop-movie").mouseenter(function(){
		if($("#shop-movie").css("width") == "200px")	
			{$("#shop-movie").css({"box-shadow":'inset 0 0 10px #b2b2b2'});
			}
	$("#shop-movie").mouseleave(function(){
		if($("#shop-movie").css("width") == "200px")
			{$("#shop-movie").css({"box-shadow":'inset 0 0 50px #b2b2b2'});}
	});
	});
});
$(document).ready(function(){
	$("#shop-books").mouseenter(function(){
		if($("#shop-books").css("width") == "200px")	
			{$("#shop-books").css({"box-shadow":'inset 0 0 10px #b2b2b2'});
			}
	$("#shop-books").mouseleave(function(){
		if($("#shop-books").css("width") == "200px")
			{$("#shop-books").css({"box-shadow":'inset 0 0 50px #b2b2b2'});}
	});
	});
});
$(document).ready(function(){
	$("#shop-acc").mouseenter(function(){
		if($("#shop-acc").css("width") == "200px")	
			{$("#shop-acc").css({"box-shadow":'inset 0 0 10px #b2b2b2'});
			}
	$("#shop-acc").mouseleave(function(){
		if($("#shop-acc").css("width") == "200px")
			{$("#shop-acc").css({"box-shadow":'inset 0 0 50px #b2b2b2'});}
	});
	});
});
$(document).ready(function(){

	$("#shop-costume").mouseenter(function(){
		if($("#shop-costume").css("width") == "200px")	
			{$("#shop-costume").css({"box-shadow":'inset 0 0 10px #b2b2b2'});
			}
	$("#shop-costume").mouseleave(function(){
		if($("#shop-costume").css("width") == "200px")
			{$("#shop-costume").css({"box-shadow":'inset 0 0 50px #b2b2b2'});}
	});
	});
});
$(document).ready(function(){
	$("#closestore1").click(function(){
		$("#sale-movie").hide();
	});
	$("#closestore2").click(function(){
		$("#sale-books").hide();
	});
	$("#closestore3").click(function(){
		$("#sale-acc").hide();
	});
	$("#closestore4").click(function(){
		$("#sale-costume").hide();
	});
});