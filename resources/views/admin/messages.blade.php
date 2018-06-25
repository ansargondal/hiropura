@extends('layout.admin.app')
@section('title', 'Messages | Hiropura')
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
                    <h2>Messages</h2>
                    <button id="toggle_sidebar" class="btn btn-default">
                        <span class="fa fa-bars"></span> <span class="star">*</span>
                    </button>
                </div>


                <div class="container-fluid">

                    <div class="row">

                        <div class="table-responsive">
                            <table class="table">
                                <colgroup>
                                    <col id="message_col">
                                    <col id="options_col">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th>Messages</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody class="table-messages-body">
                                @foreach($messages as $message)
                                    <tr>
                                        <td class="{{$message->state}}">
                                            <a href="#message_modal" data-toggle="modal">
                                                {{$message->body}}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-default" title="Mark As Read">
                                                    <span class="fa fa-check-circle">
                                                    </span>
                                            </a>
                                            <a href="" class="btn btn-default" title="Delete Message">
                                                <span class="fa fa-trash"></span>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> <!--row ends here-->
                </div>
                {{$messages->links()}}
                <div class="modal fade" id="message_modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Message</h4>
                            </div>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa molestiae quas libero
                                    numquam veritatis eius, adipisci recusandae officia, aspernatur explicabo
                                    reprehenderit
                                    quis totam impedit ea a sint possimus blanditiis aliquid!</p>

                                <div class="button_container">
                                    <a href="#" class="btn btn-default" data-dismiss="modal"><span
                                                class="fa fa-check"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@stop
