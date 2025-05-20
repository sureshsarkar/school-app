@php
//$jobcounter=\App\Models\Cms::where('is_parent',$data->id)->first();
$jobcounter=\App\Models\Cms::where('seo_url','job-counter')->first();
@endphp
@if($jobcounter)
<section class="mt-100">
    <div class="container">
        <div class="row justify-content-between align-items-center mt-4 mt-md-5">
            <div class="col-lg-6 col-xxl-5">
                <div class="pxp-info-fig pxp-animate-in pxp-animate-in-right pxp-in"><div class="pxp-info-fig-image pxp-cover" style="background-image: url({{asset($jobcounter->image)}});"></div><div class="pxp-info-stats"><div class="pxp-info-stats-item "><div class="pxp-info-stats-item-number">{{ $setting_data['project completed'] }}<span>job offers</span>
                            </div><div class="pxp-info-stats-item-description">
                                in Business Development
                            </div>
                        </div><div class="pxp-info-stats-item "><div class="pxp-info-stats-item-number">{{ $setting_data['Working hours'] }}<span>job offers</span>
                            </div><div class="pxp-info-stats-item-description">
                                in Marketing &amp; Comminication
                            </div>
                        </div><div class="pxp-info-stats-item"><div class="pxp-info-stats-item-number">{{ $setting_data['Experienced Staff'] }}<span>job offers</span>
                            </div><div class="pxp-info-stats-item-description">
                                in Human Resources
                            </div>
                        </div></div>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-6">
                <div class="pxp-info-caption mt-4 mt-sm-5 mt-lg-0  "><h2 class="pxp-section-h2">
                    {{$jobcounter->description}}
                    </h2><p class="pxp-text-light">
                      {!! $jobcounter->shortDescription !!}
                    </p><div class="pxp-info-caption-list">
                      {!! $jobcounter->mediumDescription !!}
                    </div>
                    <div class="pxp-info-caption-cta">
                        <a href="{{url('career/latest-opportunities')}}" class="btn rounded-pill pxp-section-cta">
                            Get Started Now
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div></div>
            </div>
        </div>
    </div>
</section>
@endif
