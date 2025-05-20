@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)
@section("header-section")
{!! $data->header_section !!}
@stop
@section("footer-section")
{!! $data->footer_section !!}
@stop
@section("container")
    @php
        $name=Str::limit($data->title,30);;
        $bannerImage=asset('front/images/banner.png');
        if($data->image){
            $bannerImage=asset($data->image);
        }
    @endphp

      
<section class="inner-banner-wrapper">
       <div class="inner-banner-img">
        <img src="{{ asset($bannerImage) }}" alt="{{ $name }}" title="{{ $name }}" />
          <div class="inner-banner-con">
            <div class="container">
          <div class="inner-banner-con-inn">
              <h2>{{strtoupper($name)}}</h2>
              <div class="bread-crumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{strtoupper($name)}}</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          </div>
       </div>
</section>




<section class="blog-detail-wrapper mt-5 ">

     <div class="container">

      

        <div class="row">

           <div class="col-lg-8 col-xs-12 col-md-12">

              <div class="blog-detail-left">

                 <div class="blog-detail-image">
                    @if($data->featureImage)
                    <img src="{{ asset($data->featureImage)}}"  alt="{{ $data->title }}" title="{{ $data->title }}">
                    @endif
              

                 </div>

                    <div class="blog-detail-title">

                       <h3>{{Helper::getLangName($data,"title")}}</h3>

                    </div>

                    <div class="feat_blog_con">

                        <p>

                           
                            <span><i class="fas fa-calendar-alt" aria-hidden="true"></i> {{ date('d M Y',strtotime($data->created_at)) }}</span>


 

                            
                        </p>

                      </div>

                    <div class="blod-detail-description mb-5">

                        
                            {!! Helper::getLangName($data,"longDescription") !!}
                    </div>

              </div>

           </div>

           <div class="col-lg-4 col-xs-12 col-md-12">

             <section id="categories-4" class="widget widget_categories">

            <h2 class="widget-title">Categories</h2>

            <ul>

                @foreach(App\Models\Blogs\BlogCategory::orderBy("id","desc")->get() as $c)
                <li class="cat-item cat-item-2"><a href="{{ url('blogs/category/'.$c->seo_url) }}/">{{Helper::getLangName($c,"title")}}</a> <span>({{ App\Models\Blogs\Blog::where("blog_category_id",$c->id)->count() }})</span></li>

                
                @endforeach
                
            </ul>

        </section>



        <section id="recent-posts-2" class="widget widget_recent_entries">

            <h2 class="widget-title">Recent Post</h2>

            <ul>

                @foreach(App\Models\Blogs\Blog::where("publish","published")->where("status","active")->where("id","!=",$data->id)->take(6)->orderBy("id","desc")->get() as $c)
                <li class="item-recent-post">

                    <div class="thumbnail-post">
                        @if($c->featureImage)
                        <img src="{{ asset($c->featureImage) }}" class="attachment-editech-thumbnail size-editech-thumbnail wp-post-image" alt="{{$c->title}}">
                        @endif

                    </div>

                    <div class="title-post"><a href="{{ url('blog/'.$c->seo_url) }}/">{{Helper::getLangName($c,"title")}}</a> <span class="post-date"><i class="far fa-calendar-check" aria-hidden="true"></i> {{date('d-F,Y',strtotime($c->created_at))}}</span></div>

                </li>

              @endforeach

               
            </ul>

        </section>

           </div>

        </div>

     </div>

</section>

 
@stop