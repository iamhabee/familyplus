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
<div class="container">
        <div class="row">
          <div class="col-xs-12 ">
            <nav>
              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Custom Ad</a>
                
                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Provider Ad</a>
              </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="card" >
                  <div class="card-body">
                      <h3 class="card-title">Advert title</h3>
                      <h6 class="card-subtitle mb-2">Advert description</h6>
                      <img src="<?php echo site_url() ?>image/image01.jpg" alt="ad image"width="100%" height="200px"><br>
                      <a href="#" class="card-link text-white btn btn-color" width="100%">Ad Link</a>
                    </div>
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
    </div>
</div>


  </section>
  <!-- End of main content -->
</div>