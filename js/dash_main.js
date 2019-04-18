

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

	$('.spouse').hide();
	$('.married').click(function(){
		var married = $(this).val();
		if (married === 'Married') {
			$('.spouse').show();
		}
	})
	
	$("#counsellor-email").change(function(){
		var val = $(this).val();
		$("#counsellor_email").val(val);
	});
    


	$('#like').click(function(){

				$.ajax({
						  dataType : "json",
						  type : 'post',
						  data : {likeId : likeId, count: count},
						  url: '/familyplus/like-count',
						  success:function(data)
						  {
						  	data['']
						  },
						  error: function (jqXHR, status, err) {
 							 // alert('Local error callback');
						  }
 					});

	});

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


		// var count_val = <?php echo $rec->comment_count?>;
	   // var string = '<span class="badge badge-light" id="comment_count" ></span>';
	   // $('.comment_count').append(string);
		

$('.likeBtn').click(function(){
	var counter = $('.like_count').attr('id');
	var add = 1;
	var count = Number(counter) + Number(add);
	// if(name == userlike){

	// }
	updateLikeCount(count);
})

$('.comments').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
       
       var counter = $('.comment_count').attr('id');
	   var add = 1;
	   var count = Number(counter) + Number(add);
       var comment = $(this).val();
	   updateCommentCount(count, comment);
       sendTxtComment(comment);
    }
});
		$('.btnCommentSend').click(function(){
       var counter = $('.comment_count').attr('id');
	   var add = 1;
	   var count = Number(counter) + Number(add);
       var comment = $('.comments').val();
	   updateCommentCount(count, comment);
       sendTxtComment(comment);
	});
		var countId = $('#comment_count_id').val();
		var likecountId = $('#like_count_id').val();
		GetLikeCountNo(likecountId);
		GetCountNo(countId);

		var comment_id = $('#id').val();
		GetCommentHistory(comment_id);
});

function Displaycomments(comment){
	var Sender_Name = $('#Sender_Name').val();
	
		var str = '<div class="direct-chat-msg right">';
				str+='<div class="direct-chat-info clearfix">';
				 str+='<span class="direct-chat-name pull-right">'+Sender_Name ;
				 str+='</span><span class="direct-chat-timestamp pull-left"></span>'; //23 Jan 2:05 pm
				 // str+='</div><img class="direct-chat-img" src="'+Sender_ProfilePic+'" alt="">';
				 str+='<div class="direct-chat-text">'+comment;
				 str+='</div></div>';
		$('#dumppy').append(str);
}

function sendTxtComment(comment){
	var commentTxt = comment.trim();
	if(commentTxt!=''){

 		Displaycomments(commentTxt);
		
				var userId = $('#userId').val();
				var comment_id = $('#commentId_txt').val();
				var Sender_Name = $('#Sender_Name').val();
				$.ajax({
						  dataType : "json",
						  type : 'post',
						  data : {commentTxt : commentTxt, comment_id: comment_id, userId: userId, Sender_Name: Sender_Name },
						  url: '/familyplus/send-comment',
						  success:function(data)
						  {
  							GetCommentHistory(comment_id)		 
						  },
						  error: function (jqXHR, status, err) {
 							 // alert('Local error callback');
						  }
 					});
				$('.comments').val('');
		$('.comments').focus();
	}else{
		$('.comments').focus();
	}
}

function GetCommentHistory(comment_id){
				$.ajax({
						  //dataType : "json",
  						  url: '/familyplus/get-comment-history?comment_id='+comment_id,
						  success:function(data)
						  {
  							$('#dumppy').html(data);
							// ScrollDown();	 
						  },
						  error: function (jqXHR, status, err) {
 							 alert('Local error callback');
						  }
 					});
}


function updateCommentCount( count, comment){

       var countId = $('#comment_count_id').val();
			var commentTxt = comment.trim();
			if(commentTxt!=''){
				$.ajax({
						  dataType : "json",
						  type : 'post',
						  data : {countId : countId, count: count},
						  url: '/familyplus/comment-count',
						  success:function(data)
						  {
						  	GetCountNo(countId);
						  },
						  error: function (jqXHR, status, err) {
 							 // alert('Local error callback');
						  }
 					});
				$('.comments').val('');
		$('.comments').focus();
	}else{
		$('.comments').focus();
	}
}

function GetCountNo(count_id){
				$.ajax({
						  //dataType : "json",
  						  url: '/familyplus/get-count-no?count_id='+count_id,
						  success:function(data)
						  {
  							$('.comment_count').html(data);
							// ScrollDown();	 
						  },
						  error: function (jqXHR, status, err) {
 							 alert('Local error callback');
						  }
 					});
}

// like counter start
function updateLikeCount(count){

       var countId = $('#like_count_id').val();
			$.ajax({
					  dataType : "json",
					  type : 'post',
					  data : {countId : countId, count: count},
					  url: '/familyplus/like-count',
					  success:function(data)
					  {
					  	GetLikeCountNo(countId);
					  },
					  error: function (jqXHR, status, err) {
							 // alert('Local error callback');
					  }
					});
}

function GetLikeCountNo(like_count_id){
				$.ajax({
						  //dataType : "json",
  						  url: '/familyplus/get-like-count-no?like_count_id='+like_count_id,
						  success:function(data)
						  {
  							$('.like_count').html(data);
							// ScrollDown();	 
						  },
						  error: function (jqXHR, status, err) {
 							 alert('Local error callback');
						  }
 					});
}
// like counter end

setInterval(function(){ 
	
	var comment_id = $('#commentId_txt').val();
	if(comment_id!=''){GetCommentHistory(comment_id);}

	var newCommentId = $('#comment_count').text();
	var newLikeId = $('#like_count').text();
	var countId = $('#comment_count_id').val();
	var likecountId = $('#like_count_id').val();
	$('.comment_count').attr("id", newCommentId);
	$('.like_count').attr("id", newLikeId);
	GetCountNo(countId);
	GetLikeCountNo(likecountId);
}, 1000);