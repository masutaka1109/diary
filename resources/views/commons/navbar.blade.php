<nav class="navbar navbar-expand navbar-light bg-light">
    <a href="" class="navbar-brand">Diary</a>
    <div class="navbar-nav mr-auto"></div>
    <ul class="nav navbar-nav">
        <li class="nav-item">
            {!! link_to_route('users.show','マイページ',['user'=>Auth::id()],['class' => 'nav-link']); !!}
        </li>
        <li class="nav-item">
            {!! link_to_route('logout.get','ログアウト',[],['class' => 'nav-link']); !!}
        </li>
    </ul>
</nav>