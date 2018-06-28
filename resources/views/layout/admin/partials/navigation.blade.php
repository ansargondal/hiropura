<header>
    <a href="#main_content" class="sr-only">Skip Navigation</a>

    <nav class="navbar navbar-default navbar-fixed-top">

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


            <a href="{{route('frontend.index')}}" class="navbar-brand" title="Hiropura logo"><img
                        src="{{asset('images/') . '/'. app()->getLocale() . '.png'}}"
                        class="img-responsive"
                        alt="hiropura logo"></a>
        </div>

        <h4 class="hidden-xs">Advertise On Hiropura With No Time Limit And Totally Free</h4>

        <a href="messages.html" id="message_link"><span class="fa fa-envelope"></span> <span class="badge">5</span></a>
        <a href="#" id="log_out_link">Log Out</a>

    </nav>
</header>