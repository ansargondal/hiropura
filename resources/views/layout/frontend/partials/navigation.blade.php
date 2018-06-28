<header>

    <a href="#main_content" class="sr-only">Skip Navigation</a>


    <nav class="navbar navbar-default navbar-fixed-top">

        {{--<ul class="language">--}}
        {{--@foreach (language()->allowed() as $code => $name)--}}
        {{--<li><a href="{{ language()->back($code) }}">{{ $name }}</a></li>--}}
        {{--@endforeach--}}
        {{--</ul>--}}
        <ul class="{{ config('language.flags.ul_class') }} language">
            @foreach (language()->allowed() as $code => $name)
                <li class="{{ config('language.flags.li_class') }}">
                    <a href="{{ language()->back($code) }}">
                        <img src="{{ asset('flags/'.strtolower($code).'.png') }}"
                             alt="{{ $name }}" width="{{ config('language.flags.width') }}"/>
                        {{--&nbsp; {{ $name }}--}}
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Navigaiton Toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{route('frontend.index')}}" class="navbar-brand" title="Hiropura logo"><img
                        src="images/logo_english.png"
                        class="img-responsive"
                        alt="hiropura logo"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="text-uppercase"><a href="#main_content">@lang('home/navigation.home')</a></li>
                <li class="text-uppercase"><a href="#about_us_target">@lang('home/navigation.about')</a></li>
                <li class="text-uppercase"><a href="#find_place_target">@lang('home/navigation.find_place')</a></li>
                <li class="text-uppercase"><a href="#how_to_use_target">@lang('home/navigation.how_to_use')</a></li>
                <li class="text-uppercase"><a href="#rules_of_service_target">@lang('home/navigation.rules')</a></li>
                <li class="text-uppercase"><a href="#create_ad_modal"
                                              data-toggle="modal">@lang('home/navigation.create_ad')</a></li>
                <li class="text-uppercase"><a href="#contact_us_target">@lang('home/navigation.contact')</a></li>
                <li class="login_link_target"><a href="#login_section">@lang('home/navigation.login')</a></li>
            </ul>
        </div>

    </nav>
</header>