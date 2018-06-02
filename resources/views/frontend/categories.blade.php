@extends('layout.frontend.app')
@section('title', 'Categories | Hiropura')

@section('content')
    <main id="main_content" class="container-fluid">

        <div class="row">
            @include('layout.frontend.partials.sidebar')

            <section class="xs-12" id="page_content">
                <div class="button_container">
                    <h2>Category Selected</h2>
                    <button id="toggle_sidebar" class="btn btn-default">
                        <span class="fa fa-bars"></span>
                    </button>

                    <a href="index.html" id="back_link"><span class="fa fa-arrow-left"> Back</span></a>

                </div>


                <div class="container-fluid">

                    <div class="row">

                        <figure>
                            <a href="full_post.html">
                                <h5>Okonomiyaki Nagata with some long text</h5>
                                <div class="img_container">
                                    <img src="posts/okonomiyaki_nagata/outdoor_light_view.jpg" class="img-responsive"
                                         alt="police or fire station image">

                                    <a href="#edit_modal" data-toggle="modal" class="btn btn-default"><span
                                                class="fa fa-edit"></span></a>

                                </div>
                                <figcaption>here's description of the specific post which describes what post is about
                                </figcaption>
                            </a>
                        </figure>

                        <figure>
                            <a href="full_post.html">
                                <h5>Okonomiyaki Nagata</h5>
                                <div class="img_container">
                                    <img src="posts/okonomiyaki_nagata/outdoor_light_view.jpg" class="img-responsive"
                                         alt="police or fire station image">

                                    <a href="#edit_modal" data-toggle="modal" class="btn btn-default"><span
                                                class="fa fa-edit"></span></a>

                                </div>
                                <figcaption>here's description of the specific post which describes what post is about
                                </figcaption>
                            </a>
                        </figure>


                        <figure>
                            <a href="full_post.html">
                                <h5>Okonomiyaki Nagata</h5>
                                <div class="img_container">
                                    <img src="posts/okonomiyaki_nagata/outdoor_light_view.jpg" class="img-responsive"
                                         alt="police or fire station image">

                                    <a href="#edit_modal" data-toggle="modal" class="btn btn-default"><span
                                                class="fa fa-edit"></span></a>

                                </div>
                                <figcaption>here's description of the specific post which describes what post is about
                                </figcaption>
                            </a>
                        </figure>

                    </div>
                </div>


                <div class="modal fade" id="edit_modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Edit Ad</h4>
                            </div>
                            <div class="modal-body">

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

                                        <ul id="post_categories_list">
                                            <li class="dropdown"><a href="#" id="post_form_categories_list"
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
                                        <input type="text" id="post_categories_field">
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

                                        <a href="#" class="btn btn-default">Delete Permanently</a>

                                        <button type="submit" class="btn btn-default">Update Ad</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </main>
@stop
