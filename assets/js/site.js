 $(".menu-btn").click(function(){
 		$("#collapsibleNavbar").toggleClass("show");
		$(this).children("i.fa").removeClass("fa-bars").addClass("fa-close");
		var l = $("#collapsibleNavbar").offset().left;
 		if(l == 0){
 			$(this).children("i.fa").removeClass("fa-close").addClass("fa-bars");
		}
});