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

    <section class=" vote-page-wrapp">

        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-8 col-md-8 col-12 contact-reg mt-5">
                    <h4  class="text-center mt-5">{{$name}}</h4>

                    {!! Form::open(["route"=>"customer.post.login"]) !!}

                    <div class="form-group">
                        <label class="text-white">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
{{--<p>add gcaptcha</p>--}}
                    <div class="form-group">
                        <div class="form-group check-form-div text-center">
                            <button class="btn btn-sub-online" type="submit">Vote Now </button>
                        </div>
                    </div>
                    </form>

                </div>

            </div>
        </div>

    </section>
@stop
