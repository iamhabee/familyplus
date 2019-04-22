

 $(document).ready(function(){


$('.question').keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
       
     var counter = $('.question_count').attr('id');
     var add = 1;
     alert(counter);
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
    var countId = $('#question_count_id').val();
    // var likecountId = $('#like_count_id').val();
    // GetLikeCountNo(likecountId);
    GetQuestionCountNo(countId);

    var question_id = $('#id').val();
    GetQuestionHistory(question_id);

});

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
                GetCountNo(countId);
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