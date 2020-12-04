<ul class="nav nav-tabs">
    <li class="nav-item">
        <a href="{{ route('users.show',['user' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.show') ? 'active' : '' }}">
            プロフィール
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('users.diaries',['user' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.show') ? 'active' : '' }}">
            あなたが書いた日記
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('users.favorites',['user' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.show') ? 'active' : '' }}">
            お気に入りした日記
        </a>
    </li>
</ul>