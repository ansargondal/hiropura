@extends('layout.frontend.app')

@section('content')

    <!--main content starts here
      ================================-->
    <main id="main_content">

        <!--intro section with buildings starts here
        ================================================-->

        <section id="intro_section">
            <div class="container">
                <h1 class="wow zoomIn text-uppercase"><a href="#find_place_target">@lang('home/header.find_place')</a>
                    <span>.</span> <a
                            href="#create_ad_modal" data-toggle="modal"></a></h1>
                <h2 class="wow zoomIn text-uppercase">@lang('home/header.find_or_advertise')</h2>
                <h4 class="wow zoomIn text-uppercase">
                    @lang('home/header.a_bar') .
                    @lang('home/header.restaurant') .
                    @lang('home/header.company') .
                    @lang('home/header.group') .
                    @lang('home/header.others')...</h4>
                <h4 class="wow zoomIn text-uppercase">@lang('home/header.in_hiroshima')</h4>
                <h4 class="no_underline wow zoomIn text-uppercase">@lang('home/header.right_here') !</h4>
                <h4 class="wow zoomIn text-uppercase">@lang('home/header.totally_free_service')</h4>

                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h3 class="wow zoomIn text-uppercase">@lang('home/header.categories')</h3>
                        <form action="">
                            <ul id="categories_list" class="wow zoomIn">
                                <li class="dropdown"><a href="#" id="form_categories_list" class="dropdown-toggle"
                                                        data-toggle="dropdown"><span
                                                class="glyphicon glyphicon-arrow-down"></span> </a>
                                    <ul class="dropdown-menu">
                                        @foreach($categories as $category)
                                            <li>{{$category->name}}</li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                            <!--hidden field-->
                            <input type="text" id="categories_field">
                            <!--hidden field-->
                        </form>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <section id="find_place">
                            <h3 class="wow zoomIn text-capitalize">@lang('home/header.find_place')</h3>
                            <form action="" class="form-horizontal wow zoomIn">
                                <div class="form-group">
                                    <input type="search" class="form-control"
                                           placeholder="@lang('home/header.search_by_name_or_tags')">h
                                    <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
                                </div>
                            </form>
                            <div id="how_to_use_target"></div>
                        </section>
                    </div>
                </div>
                <div id="about_us_target"></div>
            </div>
        </section>

        <!--intro section with buildings ends here
        ================================================-->
        <!--about us section starts here
        ================================================-->
        <section id="about_us" class="container">
            <h2 class="text-capitalize">@lang('home/about.welcome')</h2>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        @lang('home/about.about_alan')
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <img src="images/gaj_logo.png" class="img-responsive" alt="global access japan logo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        @lang('home/about.about_hiropura')
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <img src="{{asset('images/').'/' .app()->getLocale() . '.png'}}" class="img-responsive"
                             alt="hiropura english logo">
                    </div>
                </div>
                <div id="find_place_target"></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        @lang('home/about.contact_details')
                    </div>
                    <div class="col-xs-12 col-sm-4">
                    </div>
                </div>
            </div>
        </section>
        <!--about us section ends here
        ================================================-->

        <!--find place section starts here
        ================================================-->

        <!--find place section ends here
        ================================================-->


        <!--create ad section starts here
        ================================================-->

        <section id="create_ad">

            <div class="modal fade" id="create_ad_modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Create Ad</h4>
                        </div>
                        <div class="modal-body">

                            <div class="rules_container">

                                <h5>Rules</h5>

                                <ol>
                                    <li>Global Access Japan Co.,Ltd reserve the right to decline your Ad, if it contains
                                        material which we don't see suitable for this site. In this case, your Ad will
                                        not be made live, and you may not be notified.
                                    </li>
                                    <li>The following are regrettably unable to use this service: Language Schools,
                                        Translation Services, Web Creation Companies
                                    </li>
                                    <li>Nudist photos / images, not permitted.</li>
                                    <li>Any Ads not related to your business etc .. not permitted. Such as conflicts
                                        with other people, businesses etc.
                                    </li>
                                    <li>Posting Ads on places which don't exist, or are illegally ran, are not
                                        permitted.
                                    </li>
                                    <li>You may post a legitimate Ad on a Business etc .. you are not related to only if
                                        the content, is supportive of that Business etc .. however that Business etc ..
                                        have the right to remove it at any time, and your account will be deleted.
                                    </li>
                                    <li>E-Mails, Post, Faxes or Phone Calls, on this service will not be replied if made
                                        directly to our main business Global Access Japan Co.,Ltd, and or unless classed
                                        as and emergency.
                                    </li>
                                </ol>

                                <form action="" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="agree_checkbox"><input type="checkbox" class="" id="agree_checkbox">
                                            &nbsp;&nbsp; I am cool with it , continue to registration.</label>
                                    </div>

                                    <p class="error">Please read all the rules and click checkbox.</p>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default">Continue</button>
                                    </div>

                                </form>

                            </div>

                            <div class="ad_post_container">

                                <form action="" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="">Company Name</label>
                                        <input type="text" class="form-control" placeholder="Company Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Location</label>
                                        <input type="text" class="form-control" placeholder="Company Location">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Contact Number</label>
                                        <input type="tel" class="form-control" placeholder="Contact Number">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" placeholder="email@email.com">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Website</label>
                                        <input type="url" class="form-control" placeholder="URL of company website">
                                    </div>

                                    <div class="form-group tag_group">
                                        <label for="">Enter Tags Related To Your Company</label>
                                        <div class="input_container">
                                            <input type="text" data-role="tagsinput" class="form-control"
                                                   placeholder="Enter Tags">
                                            <button data-toggle="popover" data-placement="bottom"
                                                    title="You can enter tags like your company location , type of company , city , province , related company etc.."
                                                    class="btn btn-default glyphicon glyphicon-info-sign"></button>
                                        </div>
                                    </div>

                                    <!---->

                                    <div class="form-group">

                                        <label for="">Choose Category</label>

                                        <ul id="ad_post_categories_list">
                                            <li class="dropdown"><a href="#" id="ad_post_form_categories_list"
                                                                    class="dropdown-toggle" data-toggle="dropdown"><span
                                                            class="glyphicon glyphicon-arrow-down"></span> </a>

                                                <ul class="dropdown-menu">
                                                    <li>Bars</li>
                                                    <li>Restaurants</li>
                                                    <li>Clubs</li>
                                                    <li>Hotels</li>
                                                    <li>Hotels</li>
                                                    <li>Hotels</li>
                                                    <li>Hotels</li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <!--hidden field-->
                                        <input type="text" id="ad_post_categories_field">
                                        <!--hidden field-->
                                    </div>

                                    <div class="form-group">
                                        <label for="">Upload Pictures</label>

                                        <input type="file" class="form-control">
                                        <input type="file" class="form-control">

                                    </div>

                                    <div class="form-group">

                                        <label for="">Description</label>

                                        <textarea name="" id="" class="form-control"></textarea>

                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default">Post Ad</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!--create ad section ends here
        ================================================-->


        <!--how to use this service section starts here
        ================================================-->

        <section id="how_to_use" class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-5" id="use_service">
                    <h2 class="wow fadeIn text-capitalize">@lang('home/service_rules.how_to_use_this_service')</h2>
                </div>
                <div class="col-xs-a12 col-sm-7" id="service_rules">
                    <ul class="service_rules wow fadeIn">
                        <li><a href="#post_ad_modal" class="text-capitalize"
                               data-toggle="modal">@lang('home/service_rules.post_ad')</a></li>
                        <li><a href="#update_ad_modal" class="text-capitalize"
                               data-toggle="modal">@lang('home/service_rules.update_ad')</a></li>
                        <li><a href="#delete_ad_modal" class="text-capitalize"
                               data-toggle="modal">@lang('home/service_rules.delete_ad')</a></li>
                    </ul>
                </div>


            </div>

            <div id="rules_of_service_target"></div>

            <div class="modal fade" id="post_ad_modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">How To Post Ad</h4>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>CLICK CREATE AD</li>
                                <li>READ RULES FULLY &amp; CLICK THATS COOL WITH ME</li>
                                <li> CREATE YOUR PASSWORD &amp; LOGIN <br>
                                    (Make Note &amp; Keep Your Ad Number For Future Updates etc .. )
                                </li>
                                <li>UPLOAD (1 ~ 4) PHOTOS OF YOUR BUSINESS etc ..</li>
                                <li>FILL IN THE BUSINESSES NAME BOX</li>
                                <li>FILL IN THE DESCRIPTION BOX</li>
                                <li>FILL IN THE CONTACT US BOX</li>
                                <li> FILL IN THE LOCATION BOX</li>
                                <li>SUBMIT YOUR AD <br>
                                    (Please Allow Up To 5 Business Days, To Go live)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="update_ad_modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">How To Update Ad</h4>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>LOGIN USING YOUR EXISTING PASSWORD</li>
                                <li>SEARCH SITE FOR YOUR AD USING THE AD NUMBER IN THE AD NUMBER BOX</li>
                                <li>CLICK EDIT AD</li>
                                <li>CLICK CONFIRM EDIT AD</li>
                                <li>EDIT YOUR INFORMATION</li>
                                <li>SUBMIT YOUR UPDATED AD <br>
                                    (Please Allow Up To 5 Business Days, To Go live)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="delete_ad_modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">How To Delete Ad</h4>
                            <button class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <ul>
                                <li>LOGIN USING YOUR EXISTING PASSWORD</li>
                                <li>SEARCH SITE FOR YOUR AD USING THE AD NUMBER IN THE AD NUMBER BOX</li>
                                <li>CLICK DELETE AD</li>
                                <li> CLICK CONFIRM DELETE AD BUTTON <br>
                                    (Please Allow Up To 5 Business Days, To Go live)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--how to use this service section ends here
        ================================================-->

        <!--rules of service section starts here
        ================================================-->
        <section id="rules_of_service">
            <header>
                <h2 class="container wow zoomIn text-uppercase">@lang('home/rules.rules_of_this_service')</h2>
            </header>
            <div class="container">
                <article class="carousel slide wow fadeIn" id="my_carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <h4>1 @lang('home/rules.of') 7</h4>
                            <p>@lang('home/rules.rule1')</p>
                        </div>
                        <div class="item">
                            <h4>2 @lang('home/rules.of') 7</h4>
                            <p>@lang('home/rules.rule2')</p>
                        </div>
                        <div class="item">
                            <h4>3 @lang('home/rules.of') 7</h4>
                            <p>@lang('home/rules.rule3')</p>
                        </div>
                        <div class="item">
                            <h4>4 @lang('home/rules.of') 7</h4>
                            <p>@lang('home/rules.rule4')</p>
                        </div>
                        <div class="item">
                            <h4>5 @lang('home/rules.of') 7</h4>
                            <p>@lang('home/rules.rule5')</p>
                        </div>
                        <div class="item">
                            <h4>6 @lang('home/rules.of') 7</h4>
                            <p>@lang('home/rules.rule6')</p>
                        </div>
                        <div class="item">
                            <h4>7 @lang('home/rules.of') 7</h4>
                            <p>@lang('home/rules.rule7')</p>
                        </div>
                    </div>
                    <div id="contact_us_target"></div>
                    <button data-target="#my_carousel" style="width: 130px;" class="btn  text-capitalize"
                            data-slide="next">
                        @lang('home/rules.got_it')
                    </button>
                </article>


            </div>

        </section>

        <!--rules of service section ends here
        ================================================-->


        <!--contact section starts here
        ================================================-->

        <section id="contact_us">
            <div class="container">
                <div class="blur"></div>
                <h3 class="text-uppercase">@lang('home/contact.contact_us')</h3>
                @isset($message)
                    <h1>{{$message}}</h1>
                @endif
                <form action="{{route('messages.store')}}" method="post" class="form-horizontal" id="form-send-message">
                    @csrf
                    <div class="form-group">
                        <label for="" class="text-capitalize">@lang('home/contact.name')</label>
                        <input type="text" class="form-control" placeholder="@lang('home/contact.your_name')"
                               name="name">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-capitalize">@lang('home/contact.email')</label>
                        <input type="email" class="form-control" placeholder="@lang('home/contact.your_email')"
                               name="email">
                    </div>
                    <div class="form-group">
                        <label for="" class="text-capitalize">@lang('home/contact.message')</label>
                        <textarea name="body" class="form-control"
                                  placeholder="@lang('home/contact.your_message')"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="btn-submit"
                                class="btn btn-default text-uppercase">@lang('home/contact.send')</button>
                    </div>
                </form>
            </div>
            <div id="login_link_target"></div>
        </section>

        <!--contact section ends here
        ================================================-->


        <!--account_section starts here
        ================================================-->

        <section id="account_section">
            <div class="container">
                <h2 class="text-uppercase">@lang('home/navigation.register')
                    <span>|</span> @lang('home/navigation.login')</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <h3 class="text-uppercase">@lang('home/register.login_to_account')</h3>

                        <form action="" id="sign_up_form" class="form-horizontal wow slideInLeft">
                            <div class="form-group">
                                <label for="" class="text-capitalize">@lang('home/contact.name')</label>
                                <input type="text" class="form-control" placeholder="@lang('home/contact.your_name')">
                            </div>

                            <div class="form-group">
                                <label for="" class="text-capitalize">@lang('home/contact.your_email')</label>
                                <input type="email" class="form-control" placeholder="@lang('home/contact.your_email')">
                            </div>

                            <div class="form-group">
                                <label for="" class="text-capitalize">@lang('home/register.password')</label>
                                <input type="password" id="password" class="form-control"
                                       placeholder="@lang('home/register.your_password')">
                            </div>

                            <div class="form-group">
                                <label for="" class="text-capitalize">@lang('home/register.confirm_password')</label>
                                <input type="password" id="confirm_password" class="form-control"
                                       placeholder="@lang('home/register.your_confirm_password')">
                            </div>

                            <div class="form-group">
                                <label for="" class="text-capitalize">@lang('home/register.address')</label>
                                <input type="text" class="form-control"
                                       placeholder="@lang('home/register.your_address')">
                            </div>

                            <div class="form-group">
                                <label for="" class="text-capitalize">@lang('home/register.city')</label>
                                <input type="text" class="form-control" placeholder="@lang('home/register.your_city')">
                            </div>

                            <div class="form-group">
                                <label for="" class="text-capitalize">@lang('home/register.country')</label>
                                <input type="text" class="form-control"
                                       placeholder="@lang('home/register.your_country')">
                            </div>


                            <div class="form-group">
                                <label for="" class="text-capitalize">@lang('home/register.profile_picture') </label>
                                <input type="file" class="form-control">
                            </div>

                            <div class="form-group">
                                <p class="error">Please Check Your Information Again And Register.</p>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default text-uppercase"><span
                                            class="fa fa-check"></span> @lang('home/navigation.register')
                                </button>
                            </div>

                        </form>

                    </div>
                    <div class="col-xs-12 col-sm-2"></div>
                    <div class="col-xs-12 col-sm-5" id="login_section">
                        <h3 class="text-uppercase">@lang('home/register.login_to_account')</h3>

                        <form action="" class="form-horizontal wow slideInRight">

                            <div class="form-group">
                                <label for="" class="text-capitalize">@lang('home/contact.your_email')</label>
                                <input type="email" class="form-control" placeholder="@lang('home/contact.your_email')">
                            </div>

                            <div class="form-group">
                                <label for="" class="text-capitalize">@lang('home/register.password')</label>
                                <input type="password" class="form-control"
                                       placeholder="@lang('home/register.your_password')">

                            </div>
                            <!--addition starts here-->
                            <div class="group">
                                <a href="#forget_password_modal" data-toggle="modal"
                                   class="text-capitalize">@lang('home/register.forgot_password')</a>
                                <br>
                                <label for="remember_me" class="text-capitalize">
                                    <input type="checkbox" id="remember_me"> @lang('home/register.keep_logged_in')
                                </label>
                            </div>
                            <br>
                            <div class="form-group">
                                <p class="error">Your Credentials Are Incorrect.</p>
                            </div>
                            <!--addition ends here-->

                            <div class="form-group">
                                <button type="submit" class="btn btn-default"><span class="fa fa-sign-in"></span> Log In
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="forget_password_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Recover Your Password</h4>
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal">
                            <div class="form-group">
                                <label for="">Confirm Your Email Address</label>
                                <input type="email" class="form-control">

                                <br>
                                <p class="error">Your Email Address is Invalid.</p>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Recover Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop




