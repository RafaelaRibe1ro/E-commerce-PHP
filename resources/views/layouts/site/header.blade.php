<header id="site-header">
    <div id="header-container">
        <div id="header-logo">
            <img src="{{ asset('site/img/sobreNos.png') }}" alt="Logo da Quel Caramel">
        </div>

        <div id="header-links">
            <a href="#titulo">Home</a>
            <a href="#sobrenos">Sobre nós</a>
            <a href="#novidades">Novidades</a>
            <a href="#maisVendidos">Mais Vendidos</a>
            <a href="#promocao">Promoção</a>
            <a href="{{ route('dashboard') }}">Admin</a>
        </div>

        <div id="header-darkmode">
            <input type="checkbox" name="" id="dark-mode" onchange="darkMode(event)">
            <label for="dark-mode" class="label-darkmode">
                <span id="light-symbol"class="material-symbols-outlined" style="display: block;">light_mode</span>
                <span id="dark-symbol" class="material-symbols-outlined" style="display: none;">dark_mode</span>
            </label>
        </div>
    </div>
</header>
