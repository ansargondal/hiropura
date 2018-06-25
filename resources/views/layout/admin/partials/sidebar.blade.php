<section id="sidebar">
    <h4>Dashboard</h4>
    <ul id="main_list">
        <li><a href="{{route('admin')}}">Main</a></li>
        <li class="has_sublist"><a href="#posts_list" data-toggle="collapse"
                                   aria-controls="posts_list">Posts</a> <span
                    class="fa fa-caret-down"></span>
            <ul id="posts_list" class="collapse collapseable">
                <li><a href="{{route('admin.posts.pending')}}"> <span class="fa fa-user"></span> Pending Posts</a></li>
                <li><a href="{{route('admin.posts.approved')}}"> <span class="fa fa-comment-o"></span> Approved
                        Posts</a>
                </li>
                <li><a href="{{route('admin.posts.rejected')}}"> <span class="fa fa-trash"></span> Rejected Posts</a>
                </li>
                <li><a href="{{route('admin.posts')}}"> <span class="fa fa-list"></span> View All Posts</a></li>
            </ul>
        </li>
        <li class="has_sublist"><a href="#categories_list" data-toggle="collapse"
                                   aria-controls="categories_list">Categories</a> <span
                    class="fa fa-caret-down"></span>
            <ul id="categories_list" class="collapse collapseable">
                <li><a href="#add_categories_modal" data-toggle="modal"> <span class="fa fa-plus"></span>
                        Add
                        Categories</a></li>
                <li><a href="{{route('admin.change.categories')}}"> <span class="fa fa-edit"></span> Change
                        Categories</a>
                </li>
            </ul>
        </li>
        <li><a href="{{route('admin.manage-accounts')}}">Manage Accounts</a></li>
        <li><a href="{{route('messages.index')}}">Messages</a></li>
    </ul>
</section>