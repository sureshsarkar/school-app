<!DOCTYPE html>
<html lang="en">
	<head>
    @include("front.layouts.head")
	@yield("header-section")
        {!! $setting_data['google-analytics']  ?? '' !!}
        {!! $setting_data['google-tag-master']  ?? '' !!}
        {!! $setting_data['facebook-pixel-code']  ?? '' !!}


    	{!! $setting_data['common-header-data']   ?? ''!!}
	</head>
<body >
 <!--{!! $setting_data['other-thing-on-head']  ?? '' !!}-->


    	{!! $setting_data['after-body-open-tag']  ?? '' !!}
	  @include("front.layouts.header")


	  @yield('container')

	@include("front.layouts.footer")

@yield("footer-section")
    	{!! $setting_data['chat-bot']  ?? '' !!}
    {{--	{!! $setting_data['common-footer-data']  ?? '' !!}--}}
</body>
</html>
