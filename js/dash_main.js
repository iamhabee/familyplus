

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
	})


	// $('#edit_panel .change').click(function(){
	// 	var change_ele = $('.change');
	// 	// alert(change_ele.length);
	// 	var i = $('#edit_panel .change').index(this);
	// 	// var el = $('.edit_panel')[i];
	// 	// el.show();
	// 	alert($("#edit_panel .edit_panel").index(i-$('#edit_panel .change').length));
	// 	// if (i == $("#edit_panel .edit_panel").index()){
	// 	// 	alert($("#edit_panel .edit_panel").index());
	// 	// 	alert('index matched');
	// 	// }
	// 	// alert(i);
	// });


});