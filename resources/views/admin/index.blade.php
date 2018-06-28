@extends('layout.admin.app')
@section('title', 'Dashboard | Hiropura')
@section('content')
    <main id="main_content" class="container-fluid">
        <div class="row">
            @include('layout.admin.partials.sidebar')
            <div id="add_categories_modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Category</h4>
                        </div>
                        <div class="modal-body">

                            <form action="" class="form-horizontal">
                                <div class="form-group">
                                    <label for="">Category Name (English)</label>
                                    <input type="text" class="form-control"
                                           placeholder="Enter Category Name In English">
                                </div>

                                <!--added category name in japanese-->

                                <div class="form-group">
                                    <label for="">Category Name (Japanese)</label>
                                    <input type="text" class="form-control"
                                           placeholder="Enter Category Name In Japanese">
                                </div>

                                <!--added category name in japanese-->

                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Add Category</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <section class="xs-12" id="page_content">
                <div class="button_container">
                    <h2>Admin Panel</h2>
                    <button id="toggle_sidebar" class="btn btn-default">
                        <span class="fa fa-bars"></span> <span class="star"></span>
                    </button>
                </div>


                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">

                            <a href="{{route('admin.posts.pending')}}">
                                <section>
                                    <h4 class="pending">Pending Posts</h4>
                                    <div class="group">
                                        <span>0</span> <br><br>

                                        <span class="fa fa-user"> Click To View</span>
                                    </div>
                                </section>
                            </a>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">

                            <a href="{{route('admin.posts.approved')}}">
                                <section>
                                    <h4 class="approved">Approved Post</h4>
                                    <div class="group">
                                        <span>3</span> <br><br>

                                        <span class="fa fa-comment-o"> Click To View</span>
                                    </div>
                                </section>
                            </a>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">

                            <a href="{{route('admin.posts.rejected')}}">
                                <section>
                                    <h4 class="rejected">Rejected Posts</h4>
                                    <div class="group">
                                        <span>2</span> <br><br>

                                        <span class="fa fa-trash"> Click To View</span>
                                    </div>
                                </section>
                            </a>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">

                            <a href="{{route('admin.posts')}}">
                                <section>
                                    <h4>All Posts</h4>
                                    <div class="group">
                                        <span>5</span> <br><br>

                                        <span class="fa fa-list"> Click To View</span>
                                    </div>
                                </section>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@stop
