<div class="content-wrapper"> 
  <section class="content">
     <div class="row ">
        <div class="col-md-8 margin">
        
             <div class="jumbotron jumbo-pad text-dark">
               <h6> <?php echo $rec->post;?> </h6>
               <p class="card-text">Posted bY: <?php echo $username = $this->UserModel->GetName($rec->user_id). " On ". $rec->post_date ?> </p>
             </div>
            

             <!-- Loop of All the posts in the communty database start here -->
            <?php $id = $rec->id;
              $commments = $this->user->get_comments($id);
              if(isset($commments)){
                  ?> <br>

        <div class="box-body load">
          <input type="hidden" id="id" value="<?php echo $rec->post_id ?>">
          <!-- Conversations are loaded here -->
          <div class="direct-chat-messages" id="content">
             <!-- /.direct-chat-msg -->

             <div id="dumppy"></div>

          </div>
          <!--/.direct-chat-messages-->

        </div>

  <?php
    }else{ ?>
      <h1 class="text-center text-danger"> No Comment</h1>
      <p class="text-center text-danger">Be the first to comment here</p>
   <?php }?>

    <!-- comment box start -->
            <div class="box-footer">
              <div class="input-group">
                <input type="hidden" id="commentId_txt" class="form-control" name="comment_id" value="<?php echo $rec->post_id ?>">
                <input type="hidden" id="Sender_Name" class="form-control" value="<?php echo $this->session->user_data->first_name ?>">
                <input type="hidden" id="userId" class="form-control" name="user_id" value="<?php echo $this->session->user_data->id ?>">
                <input type="text" name="comment" class="form-control comments" style=" border-width: 0px 0px 1px;" placeholder="what's your opinion">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-primary btn-sm btn-flat btnCommentSend" id="nav_down"><i class="fa fa-send"></i></button>
                </span>
              </div>
            </div>

          <!-- comment box end -->
          <hr>
          <input type="hidden" id="comment_count_id" value="<?php echo $rec->id?>">
          <input type="hidden" id="like_count_id" value="<?php echo $rec->id?>">
    <!-- buttons start here -->
        <div> &nbsp;&nbsp;&nbsp;
          <a class="likeBtn btn btn-light" display_id="<?php echo $rec->post_id?>" id="<?php echo $rec->like_count?>">
            <i class="fa fa-thumbs-up fa-lg"></i>Like
            <span class="like_count" id="<?php echo $rec->post_id?>" ></span>
          </a>&nbsp;&nbsp;
            
          <a class="btn btn-light">
            <i class="fa fa-comment fa-lg"></i>Comments
            <span class="comment_count" id="<?php echo $rec->comment_count?>"></span>
          </a>

        </div>
        <!-- buttons end here -->
        </div>
