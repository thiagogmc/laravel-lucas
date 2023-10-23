<header>
    <div class="center">
        <div class="logo">
            <a href="/"><img src="img/loguinhopet.png"></a>
        </div><!--Logo-->
        <div class="menu">
            <a href="{{ route('products.index') }}">
                Produtos
            </a>
            <a href="relatorios.html">
                Relatórios
            </a>
            @if(\Illuminate\Support\Facades\Auth::guest())
                <a href="{{ route('login') }}">
                    Login
                </a>
                <a class="btn-menu" href="inscrevase.html">
                    Inscreva-se
                </a>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="btn-menu">
                        {{ __('Log Out') }}
                    </button>
                </form>
            @endif
        </div>
    </div><!--center-->
</header>
