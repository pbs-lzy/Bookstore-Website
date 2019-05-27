$(function() {
	$("#myTable").tablesorter();

	$( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd"});

	$("#search").keyup(function() {
		$value = $("#search").val();
		$.ajax({
			type : 'get',
			url : 'http://localhost:8000/search',
			data : {'search' : $value},
			success : function(data) {
				$("#books-results").html(data);
				$(".popable").click(function () {
					var $src = $(this).attr("src");
					$(".show").fadeIn();
					$(".img-show img").attr("src", $src);
				});
			}
		});
	});

	$(".popable").click(function () {
		var $src = $(this).attr("src");
		$(".show").fadeIn();
		$(".img-show img").attr("src", $src);
	});
	$("#closeLink, .overlay").click(function () {
			$(".show").fadeOut();
	});

});