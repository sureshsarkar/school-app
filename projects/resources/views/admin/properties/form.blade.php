 <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Main</a>
                  </li>
     
         
                 
               
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-artisan-tab" data-toggle="pill" href="#custom-tabs-three-artisan" role="tab" aria-controls="custom-tabs-three-artisan" aria-selected="false">SEO</a>
                  </li>
              
                </ul>
              </div>
              
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                    @include("admin.properties.sub.main")
                  </div>
           
        
       
              
               
                  <div class="tab-pane fade" id="custom-tabs-three-artisan" role="tabpanel" aria-labelledby="custom-tabs-three-artisan-tab">
                     @include("admin.properties.sub.seo") 
                  </div>
                
                </div>
                <div class="alert"></div>
               
              </div>
              
              <!-- /.card -->
            </div>