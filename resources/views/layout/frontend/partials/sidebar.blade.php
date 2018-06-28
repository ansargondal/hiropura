<section id="sidebar">
    <h4 class="text-capitalize">@lang('categories/categories.choose_category')</h4>
    <ul>
        @foreach($categories as $category)
            <li><a href="">{{$category->name}}</a></li>
        @endforeach
    </ul>
</section>