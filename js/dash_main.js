$(document).ready(function(){
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