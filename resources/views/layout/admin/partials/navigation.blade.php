<header>
    <a href="#main_content" class="sr-only">Skip Navigation</a>

    <nav class="navbar navbar-default navbar-fixed-top">

        <ul class="language">
            @foreach (language()->allowed() as $code => $name)
                <a href="{{ language()->back($code) }}">{{ $name }}</a>
            @endforeach
        </ul>
        <div class="navbar-header">


            <a href="{{route('admin')}}" class="navbar-brand" title="Hiropura logo"><img
                        src="{{asset('images/logo_english.png')}}"
                        class="img-responsive"
                        alt="hiropura logo"></a>
        </div>

        <h4 class="hidden-xs">Advertise On Hiropura With No Time Limit And Totally Free</h4>

        <a href="messages.html" id="message_link"><span class="fa fa-envelope"></span> <span class="badge">5</span></a>
        <a href="#" id="log_out_link">Log Out</a>

    </nav>
</header>