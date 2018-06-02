@extends('layout.admin.app')
@section('title', 'Messages | Hiropura')
@section('content')
    <main id="main_content" class="container-fluid">
        <div class="row">
            <section id="sidebar">
                <h4>Dashboard</h4>
                <ul id="main_list">
                    <li><a href="index.html">Main</a></li>
                    <li class="has_sublist"><a href="#posts_list" data-toggle="collapse"
                                               aria-controls="posts_list">Posts</a> <span
                                class="fa fa-caret-down"></span>

                        <ul id="posts_list" class="collapse collapseable">
                            <li><a href="pending_posts.html"> <span class="fa fa-user"></span> Pending Posts</a></li>
                            <li><a href="approved_post.html"> <span class="fa fa-comment-o"></span> Approved Posts</a>
                            </li>
                            <li><a href="rejected_post.html"> <span class="fa fa-trash"></span> Rejected Posts</a></li>
                            <li><a href="view_all.html"> <span class="fa fa-list"></span> View All Posts</a></li>
                        </ul>

                    </li>


                    <li class="has_sublist"><a href="#categories_list" data-toggle="collapse"
                                               aria-controls="categories_list">Categories</a> <span
                                class="fa fa-caret-down"></span>

                        <ul id="categories_list" class="collapse collapseable">
                            <li><a href="#add_categories_modal" data-toggle="modal"> <span class="fa fa-plus"></span>
                                    Add
                                    Categories</a></li>
                            <li><a href="change_categories.html"> <span class="fa fa-edit"></span> Change Categories</a>
                            </li>
                        </ul>

                    </li>

                    <li><a href="manage_accounts.html">Manage Accounts</a></li>
                    <li><a href="messages.html">Messages</a></li>

                </ul>
            </section>

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
                                    <th>Options</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="unread">
                                        <a href="#message_modal" data-toggle="modal">Lorem ipsum dolar sit amet
                                            consectetur
                                            adipisicing elit lorem ipsum dolar sit amet....</a></td>
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

                                <tr>
                                    <td class="unread">
                                        <a href="#message_modal" data-toggle="modal">Lorem ipsum dolar sit amet
                                            consectetur
                                            adipisicing elit lorem ipsum dolar sit amet....</a></td>
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

                                <tr>
                                    <td><a href="#message_modal" data-toggle="modal">Lorem ipsum dolar sit amet
                                            consectetur
                                            adipisicing elit lorem ipsum dolar sit amet....</a></td>
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


                                <tr>
                                    <td><a href="#message_modal" data-toggle="modal">Lorem ipsum dolar sit amet
                                            consectetur
                                            adipisicing elit lorem ipsum dolar sit amet....</a></td>
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


                                <tr>
                                    <td><a href="#message_modal" data-toggle="modal">Lorem ipsum dolar sit amet
                                            consectetur
                                            adipisicing elit lorem ipsum dolar sit amet....</a></td>
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


                                </tbody>

                            </table>
                        </div>

                    </div> <!--row ends here-->

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
