

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
	});
  
  $("#counsellor-email").change(function(){
		var val = $(this).val();
		$("#counsellor_email").val(val);
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

$('.likeBtn').click(function(){
	var user_id = $('#userId').val();
	var post_id = $('#like_count_id').val();
	updateLikeCount(post_id, user_id);
});

$('.likeQBtn').click(function(){
	var countId = $('#countId').val();
	var count = $('#count').val();
	var users = $('#users').val();
	updateLikeQCount(countId, count, users);
});

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
		var post_id = $('#like_count_id').val();
		GetLikeCountNo(post_id);
		GetCountNo(countId);

		var comment_id = $('#id').val();
		GetCommentHistory(comment_id);

	    var countId = $('#question_count_id').val();
	    GetQuestionCountNo(countId);

	    var question_id = $('#qid').val();
	    GetQuestionHistory(question_id);

		$('.question').keypress(function(event){
		    var keycode = (event.keyCode ? event.keyCode : event.which);
		    if(keycode == '13'){
		       
		     var counter = $('.question_count').attr('id');
		     var add = 1;
		     var count = Number(counter) + Number(add);
		     var question = $(this).val();
		     updateQuestionCount(count, question);
		       sendTxtQuestion(question);
		    }
		});

$('.btnQuestionSend').click(function(){
		      var counter = $('.question_count').attr('id');
		      var add = 1;
		      var count = Number(counter) + Number(add);
		      var question = $('.question').val();
		      updateQuestionCount(count, question);
		      sendTxtQuestion(question);
		  });


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
				// var Sender_Name = $('#Sender_Name').val();
				$.ajax({
						  dataType : "json",
						  type : 'post',
						  data : {commentTxt : commentTxt, comment_id: comment_id, userId: userId},
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
						  }
 					});
}

// like counter start
function updateLikeCount(post_id, user_id){
			$.ajax({
					  dataType : "json",
					  type : 'post',
					  data : {user_id : user_id, post_id: post_id},
					  url: '/familyplus/like-count',
					  success:function(data)
					  {	
					  	GetLikeCountNo(post_id);
					  },
					  error: function (jqXHR, status, err) {
							 // alert('Local error callback');
					  }
					});
}

function updateLikeQCount(countId, count, users){
			$.ajax({
					  dataType : "json",
					  type : 'post',
					  data : {countId : countId, count: count, users: users},
					  url: '/familyplus/likeQ-count',
					  success:function(data)
					  {	
					  	GetLikeQCountNo(countId);
					  },
					  error: function (jqXHR, status, err) {
							 // alert('Local error callback');
					  }
					});
}

function GetLikeCountNo(post_id){
	
				$.ajax({
						  //dataType : "json",
  						  url: '/familyplus/get-like-count-no?post_id='+post_id,
						  success:function(data)
						  {
  							$('.like_count').html(data);
							// ScrollDown();	 
						  },
						  error: function (jqXHR, status, err) {
						  }
 					});
}

function GetLikeQCountNo(count_id){
	
				$.ajax({
						  //dataType : "json",
  						  url: '/familyplus/get-likeQ-count-no?count_id='+count_id,
						  success:function(data)
						  {
  							$('.likeQ_count').html(data);
							// ScrollDown();	 
						  },
						  error: function (jqXHR, status, err) {
						  }
 					});
}

// like counter end

  function Displayquestions(question){
  var Sender_Name = $('#Sender_Name').val();
  
    var str = '<div class="direct-chat-msg right">';
        str+='<div class="direct-chat-info clearfix">';
         str+='<span class="direct-chat-name pull-right">'+Sender_Name ;
         str+='</span><span class="direct-chat-timestamp pull-left"></span>'; //23 Jan 2:05 pm
         // str+='</div><img class="direct-chat-img" src="'+Sender_ProfilePic+'" alt="">';
         str+='<div class="direct-chat-text">'+question;
         str+='</div></div>';
    $('#dump').append(str);
}

function sendTxtQuestion(question){
  var questionTxt = question.trim();
  if(questionTxt!=''){

    Displayquestions(questionTxt);
    
        var userId = $('#userId').val();
        var question_id = $('#questionId_txt').val();
        // var Sender_Name = $('#Sender_Name').val();
        $.ajax({
              dataType : "json",
              type : 'post',
              data : {questionTxt : questionTxt, question_id: question_id, userId: userId},
              url: '/familyplus/send-question',
              success:function(data)
              {
                GetQuestionHistory(question_id)    
              },
              error: function (jqXHR, status, err) {
               // alert('Local error callback');
              }
          });
        $('.question').val('');
    $('.question').focus();
  }else{
    $('.question').focus();
  }
}

function GetQuestionHistory(question_id){
        $.ajax({
              //dataType : "json",
                url: '/familyplus/get-question-history?question_id='+question_id,
              success:function(data)
              {
                $('#dump').html(data);
              // ScrollDown();   
              },
              error: function (jqXHR, status, err) {
              }
          });
}


function updateQuestionCount( count, question){

       var countId = $('#question_count_id').val();
      var questionTxt = question.trim();
      if(questionTxt!=''){
        $.ajax({
              dataType : "json",
              type : 'post',
              data : {countId : countId, count: count},
              url: '/familyplus/question-count',
              success:function(data)
              {
                GetQuestionCountNo(countId);
              },
              error: function (jqXHR, status, err) {
               // alert('Local error callback');
              }
          });
        $('.question').val('');
    $('.question').focus();
  }else{
    $('.question').focus();
  }
}

function GetQuestionCountNo(count_id){
        $.ajax({
              //dataType : "json",
                url: '/familyplus/get-question-count-no?count_id='+count_id,
              success:function(data)
              {
                $('.question_count').html(data);
              // ScrollDown();   
              },
              error: function (jqXHR, status, err) {
              }
          });
}

setInterval(function(){ 
	
	var comment_id = $('#commentId_txt').val();
	if(comment_id!=''){GetCommentHistory(comment_id);}

	var question_id = $('#questionId_txt').val();
	if(question_id!=''){GetQuestionHistory(question_id);}

// question reload
	var newQuestionId = $('#question_count').text();
	$('.question_count').attr("id", newQuestionId);
	var countId = $('#question_count_id').val();
	GetQuestionCountNo(countId);

// question like count reload
	var countId = $('#countId').val();	
	GetLikeQCountNo(countId);


	
//comment count reload
	var newCommentId = $('#comment_count').text();
	$('.comment_count').attr("id", newCommentId);
	var countId = $('#comment_count_id').val();
	GetCountNo(countId);

//comment like count reload
	var post_id = $('#like_count_id').val();
	GetLikeCountNo(post_id);
}, 1000);