<style type="text/css">
  
nav > .nav.nav-tabs{

  border: none;
    color:#fff;
    background:#272e38;
    border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
  border: none;
    padding: 18px 25px;
    color:#fff;
    background:#272e38;
    border-radius:0;
}

nav > div a.nav-item.nav-link.active:after
 {
  content: "";
  position: relative;
  bottom: -60px;
  left: -10%;
  border: 15px solid transparent;
  border-top-color: #e74c3c ;
}
.tab-content{
  background: #fdfdfd;
    line-height: 25px;
    border: 1px solid #ddd;
    border-top:5px solid blue;
    border-bottom:5px solid blue;
    padding:30px 25px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
  border: none;
    background: blue;
    color:#fff;
    border-radius:0;
    transition:background 0.20s linear;
}
</style>


    <section class="content">
       <a href="#" class="btn btn-primary btn-sm"data-toggle="modal" data-target="#counsellorsModal">ADD NEW Ad BANNER</a><br>
      <div class="container">
            <?php if ( validation_errors() ): ?>
              <div class="alert alert-danger">
                <?php echo validation_errors() ?>
              </div>
            <?php endif; ?>
            <?php if ( $this->session->flashdata('msg') ): ?>
              <div class="alert alert-<?php echo $this->session->flashdata('flag')?>">
                <?php echo $this->session->flashdata('msg') ?>
              </div>
            <?php endif; ?>
        <div class="row">
          <div class="col-xs-12 ">
            <nav>
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Custom Ad</a>
                
                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Providers Ad</a>
              </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                  <?php $ad = $this->db->get('banner')->result(); 
                    foreach ($ad as $key ):  
                   ?>
                  <div class="col-md-3">
                    <div class="card" >
                      <div class="card-body">
                          <h3 class="card-title">Advert title</h3>
                          <h6 class="card-subtitle mb-2">Advert description</h6>
                          <img style="width: 100%; height: 100px;" src="<?php echo site_url('banner/'.$key->image_path)?>"><br>
                          <a href="#" class="card-link text-white btn btn-color" width="100%">Ad Link</a>
                        </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                </div>
              </div>
              
              <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                <div class="card" >
                  <div class="card-body">
                      <h3 class="card-title">Advert title</h3>
                      <h6 class="card-subtitle mb-2">Advert description</h6>
                      <img src="<?php echo site_url() ?>image/image01.jpg" alt="ad image"width="100%" height="200px"><br>
                      <a href="#" class="card-link text-white btn btn-color" width="100%">Ad Link</a>
                    </div>
                </div>  
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


 <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Add Ad bannner Modal-->
<div class="modal fade" id="counsellorsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Ad Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body container">
        <div class=" jumbo-pad bg-white">
            <h4 class="text-center text-green">Create A New Ad Banner</h4>
        </div>
          <form id="login" action="<?php echo site_url() ?>user/banner" method="POST" enctype="multipart/form-data">

            <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="userfile" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                  <label class="custom-file-label" for="inputGroupFile04">Choose Banner Image</label>
                </div>
                <div class="input-group-append"></div>
            </div>
            <img align="center" id="image" src="<?php echo site_url().'image/male.png'?>" width="400px" height="200px">
            
            <div class="form-group">
              <input type="text" class="form-control" name="title" placeholder="Title" style="border-width: 0px 0px 1px;">
              <input type="hidden" class="form-control" name="date" value="<?php echo date('d/m/Y') ?>">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="description" placeholder="Description" style="border-width: 0px 0px 1px;">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" name="link" placeholder="Link address" style="border-width: 0px 0px 1px;">
            </div>

            <div class="form-group">
              <label >Size <b class="text-danger"> *</b></label>
              <input type="radio" class="" name="size" value="rectangle"> 300x500px &nbsp;&nbsp;&nbsp;
              <input type="radio" class="" name="size" value="sky-scrapper"> 200x800px 
              <input type="radio" class="" name="size" value="square"> 400x400px 
            </div>
            <button class="list-group-item list-group-item-action btn text-center text-white" style="background-color: rgb(103,58,183); " type="submit">Save Banner</button>
        </form>
      </div>
    </div>
  </div>
</div>