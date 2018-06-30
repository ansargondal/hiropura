@extends('layout.admin.app')
@section('title', 'Change Category | Hiropura')
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


            <div id="edit_categories_modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Change Category</h4>
                        </div>
                        <div class="modal-body">

                            <form action="" class="form-horizontal">
                                <div class="form-group">
                                    <label for="">Category Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Category Name Here">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Update Category</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>


            <section class="xs-12" id="page_content">
                <div class="button_container">
                    <h2>Change Categories</h2>
                    <button id="toggle_sidebar" class="btn btn-default">
                        <span class="fa fa-bars"></span> <span class="star"></span>
                    </button>
                </div>


                <div class="container-fluid">

                    <div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="field_container">
                                <input type="text" class="form-control"> <a href="#edit_categories_modal"
                                                                            data-toggle="modal"
                                                                            class="btn btn default"><span
                                            class="fa fa-edit"></span></a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="field_container">
                                <input type="text" class="form-control"> <a href="#edit_categories_modal"
                                                                            data-toggle="modal"
                                                                            class="btn btn default"><span
                                            class="fa fa-edit"></span></a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="field_container">
                                <input type="text" class="form-control"> <a href="#edit_categories_modal"
                                                                            data-toggle="modal"
                                                                            class="btn btn default"><span
                                            class="fa fa-edit"></span></a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="field_container">
                                <input type="text" class="form-control"> <a href="#edit_categories_modal"
                                                                            data-toggle="modal"
                                                                            class="btn btn default"><span
                                            class="fa fa-edit"></span></a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="field_container">
                                <input type="text" class="form-control"> <a href="#edit_categories_modal"
                                                                            data-toggle="modal"
                                                                            class="btn btn default"><span
                                            class="fa fa-edit"></span></a>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="field_container">
                                <input type="text" class="form-control"> <a href="#edit_categories_modal"
                                                                            data-toggle="modal"
                                                                            class="btn btn default"><span
                                            class="fa fa-edit"></span></a>
                            </div>
                        </div>

                    </div>

                </div>

                <ol class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ol>

            </section>
        </div>
    </main>
@stop
