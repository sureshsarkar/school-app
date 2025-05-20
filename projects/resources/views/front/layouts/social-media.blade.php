<div class="col-lg-1 col-md-3 col-12">
    <div class="banner-social abt-social">
        <ul>

            @if($setting_data['instagram'])
            <li><a href="{{ $setting_data['instagram'] }}"><i class="fab fa-instagram"></i></a></li>
            @endif
            @if($setting_data['facebook'])
            <li><a href="{{ $setting_data['facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
            @endif
            @if($setting_data['twitter'])
            <li><a href="{{ $setting_data['twitter'] }}"><i class="fab fa-twitter"></i></a></li>
            @endif
            @if($setting_data['linkedin'])
                    <li><a href="{{ $setting_data['linkedin'] }}"><i class="fab fa-linkedin-in"></i></a></li>
                @endif

        </ul>
    </div>
</div>
