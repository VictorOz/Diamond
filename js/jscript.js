//ocultar div//
$(document).ready(function(){
	setHeight();
		$(".mostrar").on( "click", function() {
			$('#ocu').show("slow"); //muestro mediante id
		 });

		$(".mostrar2").on("click",function(){
			$('#ocu2').show("slow");
		});

		$(".mostrar3").on("click",function(){
			$('#ocu3').show("slow");
		});

		$(".mostrar4").on("click",function(){
			$('#ocu4').show("slow");
		});

			$(".mostrar5").on("click",function(){
			$('#ocu5').show("slow");
		});


	});

function setHeight() {
	$(".cont-secciones").height(window.innerHeight);
}

$(window).on('resize', function() {
	setHeight();
})

/*Animacion logo con scroll*/
$(document).ready(function(){

	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();
		if(scroll > 100){
			if(!flag){
			$("#diamond").css({"margin-top": "-5px", "margin-left": "0px", "width": "5%"});
			$("header").css({"background-color": "#ffffff"});
			flag = true;
			}	
		}else{
			if(flag){
			$("#diamond").css({"margin-top": "60px", "margin-left": "250px", "width": "20%"});
			$("header").css({"background-color": "transparent"});
			flag = false;
			}
		}
	});

});


