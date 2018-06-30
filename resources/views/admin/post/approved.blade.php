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
                    <h2>Approved Post</h2>
                    <button id="toggle_sidebar" class="btn btn-default">
                        <span class="fa fa-bars"></span> <span class="star"></span>
                    </button>
                </div>


                <div class="container-fluid">

                    <div class="row">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Company Name</th>
                                    <th>Location</th>
                                    <th>Contact Number</th>
                                    <th>Image</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>


                                @foreach($posts as $post)
                                    <tr>
                                        <td class="text-capitalize">{{$post->title}}</td>
                                        <td class="text-capitalize">{{$post->location}}</td>
                                        <td>{{$post->contact}}</td>
                                        @foreach($post->images as $image)
                                            <td>
                                                <img src="{{asset('faker/images') . '/' .$image->path}}"
                                                     class="img-responsive"
                                                     alt="first Image">
                                            </td>
                                            {{--add empty td if a post has only one image--}}
                                            {!! $post->images_count < 2 ? '
                                            <td></td>
                                            ' : '' !!}
                                        @endforeach
                                        <td>
                                            <a href="#edit_modal" data-toggle="modal"
                                               class=" btn btn-default fa fa-edit"></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
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
                                                <input type="url" class="form-control"
                                                       placeholder="URL of company website">
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
                                                                            class="dropdown-toggle"
                                                                            data-toggle="dropdown"><span
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

                                                <a href="#" class="btn btn-default">Reject</a>

                                                <button type="submit" class="btn btn-default">Delete</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                {{$posts->links()}}

                {{--
                            <ol class="pagination">
                                <li><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ol>--}}

            </section>

        </div>

    </main>
@stop

