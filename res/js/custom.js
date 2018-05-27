

$(document).ready(function(){




	// SCROLL To Previous Position
	$('#scrollPosition').val();
	$("body, html").animate({ 
		scrollTop: $('#scrollPosition').val() 
	}, 600);


	$("#onboard-form").submit(function() {
	//alert("submitted");
	var scrollTopVar = $("html").scrollTop();
	//alert("Form is submitted. Scroll position - "+ scrollTopVar);
	$('#scrollPosition').val(scrollTopVar);
 	// console.log("Form is submitted. Scroll position - "+document.body.scrollTop);
 });


// BINDING ELEMENTS 
$("*[bind]").on('change keyup', function (e) {
	var to_bind = $(this).attr('bind');
	$("*[bind='"+to_bind+"']").html($(this).val());
	$("*[bind='"+to_bind+"']").val($(this).val());
})
$("div[bind]").bind("DOMSubtreeModified",function(){
	var to_bind = $(this).attr('bind');
	$("*[bind='"+to_bind+"']").html($(this).html());
	$("*[bind='"+to_bind+"']").val($(this).html());
});


$(document).on('click', 'a[href^="#"]', function (event) {
	event.preventDefault();

	$('html, body').animate({
		scrollTop: $($.attr(this, 'href')).offset().top
	}, 500);
});

/**
* HANDY CODE TO TEST DIFFERENT COLOURS
*/
$("a#change-color-option").click(function(){
	var classList = $('#section-form').attr('class').split(/\s+/);
	var oldClass = "";
	var newClass = $(this).attr('data-val');
	$.each(classList, function(index, item) {
		if (item.startsWith('section-')) {
			oldClass = item;
		}else{
    	// do nothing
    }
});

	$('#section-form').removeClass(oldClass);
	$('#section-form').addClass(newClass);
	// console.log("oldclass is - "+oldClass+" and new class is "+newClass);
});

});