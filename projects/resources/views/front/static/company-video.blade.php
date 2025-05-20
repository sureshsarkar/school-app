@extends("front.layouts.master")
@section("title",$data->meta_title)
@section("keywords",$data->meta_keywords)
@section("description",$data->meta_description)
@section("logo",$data->image)
@section("header-section")
    {!! $data->header_section !!}
@stop
@section("footer-section")
    {!! $data->footer_section !!}
@stop
@section("container")

    @php
        $name=$data->name;
        $bannerImage=asset('front/images/inner-banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    @endphp

    <section class="category-wrapper">
        <div class="mb-5 text-center">
            <h4  class="text-center mt-5">{{$data->title}}</h4>
        </div>
        <div class="container">
            <div class="row">
@foreach($services as $ads)
    @php
    $supported_image = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$src_file_name = $ads->image;
$ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION));

@endphp
                    <div class="col-md-4">
                               {!! Form::open(["route"=>"storevote",'files'=>true,"class"=>'card']) !!}
                                 <h3 class="text-center">{{$ads->campaign_name}}</h3>
                        @if (in_array($ext, $supported_image))
                        <img src="{{asset($ads->image)}}" style="max-height: 200px">
                        @else
                            <video  controls>
                                <source src="{{asset(($ads->image))}}" type="video/mp4">
                            </video>

                        @endif
                                   <input type="hidden" name="ads_id" value="{{$ads->id}}">
                                   <input type="hidden" name="category_id" value="{{$ads->category_id}}">

                        <button class="btn btn-warning" type="submit">Vote Now</button>
                           </form>
                               </div>

                @endforeach

            </div>
        </div>

    </section>
@stop
