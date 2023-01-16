<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <p>Products</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('genres.index') }}"
       class="nav-link {{ Request::is('genres*') ? 'active' : '' }}">
        <p>Genres</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('films.index') }}"
       class="nav-link {{ Request::is('films*') ? 'active' : '' }}">
        <p>Films</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('comments.index') }}"
       class="nav-link {{ Request::is('comments*') ? 'active' : '' }}">
        <p>Comments</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('posts.index') }}"
       class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
        <p>Posts</p>
    </a>
</li>


