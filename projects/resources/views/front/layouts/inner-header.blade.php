<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<div class="inner-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{!! asset($setting_data['header_logo'] ?? 'images/logo.png') !!}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('about-us')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('career')}}">Careers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('teams')}}">Teams</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('faqs')}}">FAQ's</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact-us')}}">Contact Us</a>
                    </li>

                </ul>
                @if(\Illuminate\Support\Facades\Auth::guard('employee')->check())
                    <div class="nav-right">
                        <a href="{{url('employee/logout')}}">Logout</a>
                    </div>
                @else
                <div class="nav-right">
                    <a href="{{url('customer-login')}}">Sign in</a>
                </div>
                @endif
            </div>
        </div>
    </nav>
</div>
