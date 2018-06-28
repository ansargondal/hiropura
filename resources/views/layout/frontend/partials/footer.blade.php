<footer>
    <div class="container">
        <div class="row">

            <h4 class="wow fadeIn text-capitalize">@lang('home/footer.stay_connected_socially')</h4>

            <a href="#" title="Go to top"><span class="fa fa-arrow-circle-o-up"></span></a>

            <div class="col-xs-6 col-sm-3 wow fadeIn">
                <a href="" title="Visit Our Facebook Profile">
                    <div class="social_logo">
                        <span class="fa fa-facebook"></span>
                    </div>
                    Facebook
                </a>
            </div>
            <div class="col-xs-6 col-sm-3 wow fadeIn">
                <a href="" title="Visit Our Twitter Profile">
                    <div class="social_logo">
                        <span class="fa fa-twitter"></span>
                    </div>
                    Twitter
                </a>
            </div>
            <div class="col-xs-6 col-sm-3 wow fadeIn">
                <a href="" title="Visit Our Google+ Profile">
                    <div class="social_logo">
                        <span class="fa fa-google-plus"></span>
                    </div>
                    Google+
                </a>
            </div>
            <div class="col-xs-6 col-sm-3 wow fadeIn" data-wow-duration="3s">
                <a href="" title="Visit Our Linkedin Profile">
                    <div class="social_logo">
                        <span class="fa fa-linkedin"></span>
                    </div>
                    Linkedin
                </a>
            </div>
        </div>
    </div>

    <div class="copyright_info">
        <div class="container">
            <small>Copyright &copy; Hiropura 2016. All Rights Reserved.</small>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('vendor/js/jquery-1.12.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/js/jquery.scrollTo.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/js/jquery.localScroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/js/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('js/frontend.min.js')}}" defer></script>

    @section('js')
    @stop
</footer>

</body>
</html>