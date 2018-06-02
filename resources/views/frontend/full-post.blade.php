@extends('layout.frontend.app')

@section('title', 'Full Post | Hiropura')

@section('css')
    <link rel="stylesheet" href="{{asset('vendor/blueimp-gallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/blueimp-gallery-indicator.css')}}">
@stop
@section('content')
    <main id="main_content" class="container-fluid">
        <div class="row">
            @include('layout.frontend.partials.sidebar')

            <section class="xs-12" id="page_content">
                <div class="button_container">
                    <h2>Post Selected</h2>
                    <button id="toggle_sidebar" class="btn btn-default">
                        <span class="fa fa-bars"></span>
                    </button>

                    <a href="categories.blade.php" id="back_link"><span class="fa fa-arrow-left"> Back</span></a>

                </div>


                <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>

                <div id="links">
                    <a href="posts/okonomiyaki_nagata/hotel_inner.jpg" title="Image 1">
                        <img src="posts/okonomiyaki_nagata/hotel_inner.jpg" class="img-responsive"
                             alt="Hotel inner image">
                    </a>
                    <a href="posts/okonomiyaki_nagata/outdoor_light_view.jpg" title="Apple">
                        <img src="posts/okonomiyaki_nagata/outdoor_light_view.jpg" alt="Apple" class="img-responsive">
                    </a>

                </div>


                <div class="table-responsive">
                    <table class=" table-bordered">
                        <colgroup>
                            <col id="">
                            <col id="">
                            <col id="">
                        </colgroup>

                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Location</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Okonomiyaki NAGATA-YA</td>
                            <td>+81 82 247 0787</td>
                            <td> Shigeishi bldg 1F, 1-7-19, Otemachi, Naka-ku, Hiroshima</td>
                        </tr>

                        <tr>
                            <th colspan="2">Email</th>
                            <th>URL</th>
                        </tr>

                        <tr>
                            <td colspan="2">email@email.com</td>
                            <td>www.companywebsite.com</td>
                        </tr>

                        <tr>
                            <td colspan="3" id="heading">
                                Description
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">

                                店内は昭和30年代の建物をコンセプトに、 どこか懐かしく味わい深い造りになっています。内装はもちろん、置物やポスターなど隅々までこだわっています。
                                お好み焼が焼き上がるまでの間、店内をいろいろ見回して下さい。ちょっとした発見があるかもしれません。
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
@stop

@section('js')
    <script src="{{asset('js/blueimp-gallery.min.js')}}"></script>
    <script src="{{asset('js/blueimp-gallery-fullscreen.js')}}"></script>
    <script src="{{asset('js/blueimp-gallery-indicator.js')}}"></script>
@stop



