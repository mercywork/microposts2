<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">Microposts2</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                
                {{-- ユーザ登録ページへのリンク --}}
                <li>{!! link_to_route('signup.get', '会員登録', [], ['class' => 'nav-link']) !!}</li>
                {{-- ログインページへのリンク --}}
                <li>{!! link_to_route('signup.post', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
            </ul>
        </div>
    </nav>
</header>
