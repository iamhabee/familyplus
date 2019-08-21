<div class="content-wrapper"> 
  <section class="content">
     <div class="row margin">
        <div class="col-md-8">
        
             <div class="jumbotron jumbo-pad text-center text-dark">
               <h1> <?php echo $rec->title;?> </h1>
             </div>
            <div >
                <div>
                    <h3><?php echo  $rec->description; ?></h3><br>
                    <hr>
                    <p> <?php echo  $rec->article; ?></p>
                </div>
            </div>

            <div class="box-body load">
              <input type="hidden" id="qid" value="<?php echo $rec->id ?>">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages" id="content">
                 <!-- /.direct-chat-msg -->

                 <div id="dump"></div>

              </div>
              <!--/.direct-chat-messages-->

            </div>   
            
            <div class="box-footer">
              <div class="input-group">
                <input type="hidden" id="questionId_txt" class="form-control" name="question_id" value="<?php echo $rec->id ?>">
                <input type="hidden" id="Sender_Name" class="form-control" value="<?php echo $this->session->user_data->first_name ?>">
                <input type="hidden" id="userId" class="form-control" name="user_id" value="<?php echo $this->session->user_data->id ?>">
                <input type="text" name="question" class="form-control question" style=" border-width: 0px 0px 1px;" placeholder="what's your opinion">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-primary btn-sm btn-flat btnQuestionSend" id="nav_down"><i class="fa fa-send"></i></button>
                </span>
              </div>
            </div>

            <input type="hidden" id="question_count_id" value="<?php echo $rec->id?>">
            <input type="hidden" id="countId" value="<?php echo $rec->id?>">
            <input type="hidden" id="count" value="<?php echo $rec->like_count?>">
            <input type="hidden" id="count" value="<?php echo $rec->users?>">

            <div> &nbsp;&nbsp;&nbsp;
              <a class="likeQBtn btn btn-light" id="<?php echo $rec->like_count?>">
                <i class="fa fa-thumbs-up fa-lg"></i>Like
                <span class="likeQ_count" id="<?php echo $rec->id?>" ></span>
              </a>&nbsp;&nbsp;
                
              <a class="btn btn-light">
                <i class="fa fa-comment fa-lg"></i>Questions
                <span class="question_count" id="<?php echo $rec->question_count?>"></span>
              </a>
            </div>

        </div>
