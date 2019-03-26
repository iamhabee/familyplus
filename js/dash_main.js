

// var myVar;

// function myFunction() {
//  	myVar = setTimeout(showPage, 3000);
// }

// function showPage() {
//   document.getElementById("loader").style.display = "none";
//   document.getElementById("myDiv").style.display = "block";
// }
$(document).ready(function(){

	
	setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222');
	}, 3000);
	// alert('i am ready to work');

	$("#logout").click(function(e){
		var ask = confirm("Do you really want to logout?");
		if (!ask) {
			e.preventDefault();
			return false;
		}
	});

	$("#close").click(function(e){
			var ask = confirm("Are you sure you want to close this chat?");
			if (!ask) {
				e.preventDefault();
				return false;
			}
		});

	$("#activate").click(function(e){
			var ask = confirm("Are you sure you are ready to chat with this user?");
			if (!ask) {
				e.preventDefault();
				return false;
			}
		});

	$("#inputGroupFile04").change(function(event){
		var reader = new FileReader();
		var image = document.getElementById('image');

		reader.onload = function(){
			if ( reader.readyState == 2){
				image.src = reader.result;
			}
		}

		reader.readAsDataURL(event.target.files[0]);
	});

	$("#confirm").keyup(function(){
		if ($("#confirm").val() === $("#password").val()){
			$("#match").attr('class', '');
			$("#match").text("password matched");
			$("#match").addClass('match-password');
		} else{
			$("#match").attr('class', '');
			$("#match").text("password not matched");
			$("#match").addClass('match-password-err');
		}
		// body...
	});

	 //cousellor email selector
	//  $('#counsellor-email').change(function(){
	//  	// schedulermodal(1);
	//  	if ($('.counselloremail').click()) {
	// 	var val = $('.counselloremail').attr('title');
	// 	// alert(val);
	//   $('#counsellor_email').val(val);
	// }
	// });

	$("#counsellor-email").change(function(){
		var val = $(this).val();
		// alert(val);
		$("#counsellor_email").val(val);
		// $('.counselloremail').removeAttr('value');
})



// function schedulermodal(status){
// 	//chatSection
// 	if(status==0){
// 		$('#schedulermodal :input').attr('disabled', true);
//     } else {
//         $('#schedulermodal :input').removeAttr('disabled');
//     }   
// }
// schedulermodal(0);
// sidebar js

 $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});

// search database
	$("#q").keyup(function(){
		// alert($(this).val());
		if ($(this).val().length !== 0) {
			$.ajax({
				url:"http://localhost/familyplus/page/live_search",
				type: "GET",
				data: {q:$(this).val()},
				dataType: "JSON",
				success: function(data){
					var data2 = data.msg;
					$("#search_result").html("<li><a></a></li>");
					data2.forEach(function(data3, index){
						// alert(data3.first_name);
						$("#search_result").append("<li>"+data3.first_name+"</li>")
					});
				},
				error: function(err){
					alert(JSON.stringify(err));
				}
			});
		}
		// $("#search_result").load("<?php echo site_url('page/live_search')?>", {q:$(this).val()}, function(data){
			
		// });
	});


});