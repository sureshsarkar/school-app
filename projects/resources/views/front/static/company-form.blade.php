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
@section('css')

<style>
    .required{
        color:black !important;
    }
    </style>
    @stop
@section("container")

    @php
        $name=$data->name;
        $bannerImage=asset('front/images/inner-banner.png');
        if($data->bannerImage){
            $bannerImage=asset($data->bannerImage);
        }
    @endphp

    <section class="comp">

        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8 col-md-8 col-12 contact-reg mt-5">
                    <h4>{{$name}}</h4>

                    {!! Form::open(["route"=>"adsPost",'files'=>true]) !!}

                    <div class="form-group">
                        <label>Choose category <span class="required">*</span></label>
                      <select name="category_id" class="form-select" required>
                          <option value=""> Please Select</option>
                          @foreach($categories as $c)
                          <option value="{{$c->id}}">{{$c->title}}</option>
                          @endforeach

                      </select>
                    </div>
                    <div class="form-group">
                        <label>Brand <span class="required">*</span></label>
                        <input type="text" name="brand" class="form-control" placeholder="Brand" required>
                    </div>

                    <div class="form-group">
                        <label>Campaign Name <span class="required">*</span></label>
                        <input type="text" name="campaign_name" class="form-control" placeholder="Campaign Name" required>
                    </div>

                    <div class="form-group">
                        <label>Upload file <span class="required">*</span></label>
                        <input type="file" name="image" class="form-control" placeholder="Paste the link" required>
                    </div>
                    <div class="form-group">
                        <label>Link to Work </label>
                        <input type="url" name="link_work" class="form-control" placeholder="Paste the link">
                    </div>
                    <div class="form-group">
                        <label>Description <span class="required">*</span></label>
                        <textarea class="form-control" name="description" required placeholder="Type Your Message Here." required></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-group check-form-div">
                            <button class="btn btn-sub-online" type="submit">Submit</button>
                        </div>
                    </div>
                    </form>

                </div>
                {{--
                                <div class="col-lg-1 col-md-1 col-12">
                                    <div class="banner-social">
                                        <ul>
                                            <li><a href="{{ $setting_data['instagram'] }}"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="{{ $setting_data['facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="{{ $setting_data['twitter'] }}"><i class="fab fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                --}}
            </div>
        </div>
        <div class="banner-shape">
            <img src="{{asset('front/images/banner-shape.png')}}">
        </div>
    </section>
@stop
