$(document).ready(function(){
	$(window).scroll(function(){
		if(this.scrollY > 20){
			$('.navbar-caitan').addClass("sticky");
		}else{
			$('.navbar-caitan').removeClass("sticky");
		}
	});
	//toogle menu/navbar script/la X para cerrar el menu
	$('.menu-btn').click(function(){
		$('.navbar-caitan .menu').toggleClass("active");
		$('.menu-btn i').toggleClass("active");
	});
	// typing text animation script
		var typed = new Typed(".typing-1",{
			strings:["Alto desempenho","Sustentabilidade","Qualidade", "Produtividade", "Economia"],
			typeSpeed: 100,
			backSpeed: 60,
			loop: true
		});
    var typed = new Typed(".typing-2",{
			strings:["Alto desempenho","Sustentabilidade","Qualidade", "Produtividade", "Economia"],
			typeSpeed: 100,
			backSpeed: 60,
			loop: true
		});
    var typed = new Typed(".typing-3",{
			strings:["Alto desempenho","Sustentabilidade","Qualidade", "Produtividade", "Economia"],
			typeSpeed: 100,
			backSpeed: 60,
			loop: true
		});
    var typed = new Typed(".typing-4",{
			strings:["Alto desempenho","Sustentabilidade","Qualidade", "Produtividade", "Economia"],
			typeSpeed: 100,
			backSpeed: 60,
			loop: true
		}); 


	//owl-caurosel scrip
	$('.carousel').owlCarousel({
		margin: 20,
		loop: true,
		autoplayTimeOut: 3000,
		autoplayHoverPause: true,
    autoplay: true,
    dots: true, 
    autoplaySpeed: 800,
		responsive: {
			0:{
				items: 1,
				nav: false
			},
			600:{
				items: 1,
				nav: false	
			},
			1000:{
				items: 1,
				nav: false	
			}
		}
	});

	$(".ts-promo-numbers").each(function () {
		$(this).isInViewport(function(status) {
				if (status === "entered") {
						for( var i=0; i < document.querySelectorAll(".odometer").length; i++ ){
								var el = document.querySelectorAll('.odometer')[i]; 
									el.innerHTML = el.getAttribute("data-odometer-final"); 				
								
						}
				}
		});
	});
	
});

