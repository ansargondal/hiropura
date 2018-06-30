@extends('layout.admin.app')
@section('title', 'Manage Accounts | Hiropura')
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


                    <!--heading changed
                    ==========================-->


                    <h2>Manage Accounts</h2>


                    <!--heading changed
                       =========================-->


                    <button id="toggle_sidebar" class="btn btn-default">
                        <span class="fa fa-bars"></span> <span class="star"></span>
                    </button>
                </div>


                <div class="container-fluid">


                    <!---->
                    <a href="#add_admin_modal" class="btn btn-default" data-toggle="modal">Create Admin</a>

                    <!---->

                    <div class="row">


                        <!---->


                        <h3>Change Account Details</h3>


                        <div class="table-responsive">
                            <table class="table" id="manage_account_table">

                                <tr class="colgroup">
                                    <col id="first_col">
                                    <col id="second_col">
                                    <col id="third_col">
                                    <col id="fourth_col">
                                </tr>

                                <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>Name 1</td>
                                    <td>email@email.com</td>
                                    <td>account password</td>
                                    <td>
                                        <a href="#edit_admin_modal" class="btn btn-default" data-toggle="modal"><span
                                                    class="fa fa-edit"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name 2</td>
                                    <td>email@email.com</td>
                                    <td>account password</td>
                                    <td>
                                        <a href="" class="btn btn-default" data-toggle="modal"><span
                                                    class="fa fa-edit"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name 3</td>
                                    <td>email@email.com</td>
                                    <td>account password</td>
                                    <td>
                                        <a href="" class="btn btn-default" data-toggle="modal"><span
                                                    class="fa fa-edit"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name 4</td>
                                    <td>email@email.com</td>
                                    <td>account password</td>
                                    <td>
                                        <a href="" class="btn btn-default" data-toggle="modal"><span
                                                    class="fa fa-edit"></span></a>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>


                        <!---->


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


                <!---->


                <div class="modal fade" id="add_admin_modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Create Admin</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form action="" class="form-horizontal">

                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="">User Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" id="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <label for="">Confirm Password</label>
                                                <input type="password" id="confirm_password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group privilege_group">
                                                <label for="">Privilege</label>

                                                <ul id="privileges_list" class="wow zoomIn">
                                                    <li class="dropdown"><a href="#" id="privileges_list_item"
                                                                            class="dropdown-toggle"
                                                                            data-toggle="dropdown"><span
                                                                    class="glyphicon glyphicon-arrow-down"></span> </a>

                                                        <ul class="dropdown-menu">
                                                            <li>Super</li>
                                                            <li>Normal</li>
                                                        </ul>
                                                    </li>
                                                </ul>

                                                <!--hidden field-->
                                                <input type="text" id="privileges_field">
                                                <!--hidden field-->


                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-6"></div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <p class="error"> Your Password Doesn't Match.</p>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Create Admin</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="edit_admin_modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Update Record</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form action="" class="form-horizontal">

                                        <fieldset>

                                            <legend>User Details</legend>

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="">User Name</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>


                                        </fieldset>


                                        <fieldset>

                                            <legend>Password Details</legend>

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Old Password</label>
                                                    <input type="password" id="password" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="">New Password</label>
                                                    <input type="password" id="new_password" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Confirm New Password</label>
                                                    <input type="password" id="new_confirm_password"
                                                           class="form-control">
                                                </div>
                                            </div>

                                        </fieldset>

                                        <fieldset>

                                            <legend>Change Privilege</legend>


                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group privilege_group">
                                                    <label for="edit_privilege_label">Privilege</label>

                                                    <ul id="edit_privileges_list" class="wow zoomIn">
                                                        <li class="dropdown"><a href="#" id="edit_privileges_list_item"
                                                                                class="dropdown-toggle"
                                                                                data-toggle="dropdown"><span
                                                                        class="glyphicon glyphicon-arrow-down"></span>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>Super</li>
                                                                <li>Normal</li>
                                                            </ul>
                                                        </li>
                                                    </ul>

                                                    <!--hidden field-->
                                                    <input type="text" id="edit_privileges_field">
                                                    <!--hidden field-->


                                                </div>
                                            </div>

                                        </fieldset>

                                        <div class="col-xs-12 col-sm-6"></div>

                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <p class="error"> Your Password Doesn't Match.</p>
                                            </div>

                                            <div class="form-group button_wala_group">
                                                <button type="submit" class="btn btn-default">Update</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@stop
