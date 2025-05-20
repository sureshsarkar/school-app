<!-- Required meta tags -->
<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="@yield('keywords')" />
<meta name="description" content="@yield('description')" />
<meta name="robots" content="index, follow"/>
<meta name="coverage" content="Worldwide" />

<link rel="icon" href="{{ asset(ModelHelper::getDataFromSetting('favicon') ?? 'front/images/logo.png') }}"  />
<meta property="og:site_name" content="{{ ModelHelper::getDataFromSetting('website') }}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="@yield('title')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:domain" content="{{ url()->current() }}" />
<meta name="twitter:title" content="@yield('title')" />
<meta name="twitter:description" content="@yield('description')" />
@isset($gaurav_blog_data)
	<meta name="twitter:image" content="{{ asset($data->featureImage) }}" />
  	<meta property="og:image" content="{{ asset($data->featureImage) }}" />
@else
	<meta name="twitter:image" content="{{ asset(ModelHelper::getDataFromSetting('header_logo') ?? 'front/images/logo.png') }}" />
  	<meta property="og:image" content="{{ asset(ModelHelper::getDataFromSetting('header_logo') ?? 'front/images/logo.png') }}" />
@endisset
@isset($gaurav_blog_data)
<link href="{{ url()->current() }}/" rel="canonical">
@else
<link href="{{ url()->current() }}" rel="canonical">
@endisset
@include("front.layouts.css")
@yield("css")
