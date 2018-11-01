$(document).ready(function () {
	$(".menu-btn").click(function () {
		$("#collapsibleNavbar").toggleClass("show");
		$(this).children("i.fa").removeClass("fa-bars").addClass("fa-close");
		var l = $("#collapsibleNavbar").offset().left;
		if (l == 0) {
			$(this).children("i.fa").removeClass("fa-close").addClass("fa-bars");
		}
	});

	$(document).click(function (event) {
		if (!$(event.target).closest("#collapsibleNavbar,.menu-btn").length) {
			$("body").find("#collapsibleNavbar").removeClass("show");
			var l = $("#collapsibleNavbar").offset().left;
			if (l == 0) {
				$("body").find("i.fa").removeClass("fa-close").addClass("fa-bars");
			}
		}
	});

	/*-------------remove "chapter" word form mobile view-----------*/
	var W = $(window).width();
	if (W < 768) {
		$('div.chap-count').text(function (i, t) {
			return t.replace('Chapter', '');
		});
	}
	/*-------------Edit Board for selection left var option-----------*/
//	$("select#e-selector1").change(function () {
//		if ($("select option[value=worksheet]").is(':selected')) {
//			$("form#edit-form .mrak-field").attr("disabled", "true");
//			$("form#edit-form .mrak-field").val("");
//			$(".student-list input").prop("checked", false);
//		} else if ($("select option[value=question-paper]").is(':selected')) {
//			$("form#edit-form .mrak-field").removeAttr("disabled", "disabled");
//		}
//
//	});
	
	
	
//	$(" #example .c-check").click(function () {
//		 
//		if ($(this).checked == true){ alert("1")
//			$("form#edit-form .mrak-field").attr("disabled", "true");
//			$("form#edit-form .mrak-field").val("");
//			$(".student-list input").prop("checked", false);
//		} 
//		else if ($("select option[value=question-paper]").is(':selected')) {
//			$("form#edit-form .mrak-field").removeAttr("disabled", "disabled");
//		}
//
//	});
	 
	
    var ckbox = $('#example .c-check');

    $(ckbox).on('click',function () {
        if ($(this).is(':checked')) {
            $(this).parent().siblings().children(".mrak-field").removeAttr("disabled", "disabled");
 		}
	   else{
            $(this).parent().siblings().children(".mrak-field").attr("disabled", "disabled");
			$(this).parent().siblings().children(".mrak-field").val("");
        }
    });
 
	
	
 /*-----------header flexible---------------*/
	var breadcrumb = $(".breadcrumb-wrap").offset().top;
	$(window).scroll(function () {
		if (window.pageYOffset > 1) {
			$(".header").addClass("h-sticky");
		} else {
			$(".header").removeClass("h-sticky");
		}
	});
	/*-----------Date Picker setting---------------*/

	$(function () {
		$("#from").datepicker({
			changeMonth: true,
			changeYear: true,
			minDate: 0,
			onSelect: function (selectedDate) {
				$("#to").datepicker("option", "minDate", selectedDate);
			}
		});
		$("#to").datepicker({
			changeMonth: true,
			changeYear: true,
			minDate: 0,
			onSelect: function (selectedDate) {
				$("#from").datepicker("option", "maxDate", selectedDate);
			}
		});
	});



});

/*---------------------Edit board choose question type------------*/


document.getElementById('e-selector').addEventListener('change', function () {
	var style = this.value == 1 ? 'block' : 'none';
	document.getElementById('hidden_div').style.display = style;
});

document.getElementById('e-selector1').addEventListener('change', function () {
	var style = this.value == 1 ? 'block' : 'none';
	document.getElementById('e-selector').value = 'whole-class';
	document.getElementById('hidden_div').style.display = style;
});
$(function () {
	$("select.main").on("change", function () {
		//remove active
		$("select.models.active").removeClass("active");
		//check if select vlass exists..if it does show it
		var subList = $("select.models." + $(this).val());
		if (subList.length) {
			//it does! show it by adding active class to it
			subList.addClass("active");
		}
	});
});