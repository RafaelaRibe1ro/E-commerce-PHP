<header id="site-header">
    <div id="header-container">
        <div id="header-logo">
            <img src="{{ asset('site/img/imgLogo1.jpg') }}" alt="Logo da Red Gamer"
                onclick="openPage('https://redcanids.com.br/')">
        </div>

        <div id="header-links">
            <a href="#sobrenos">Sobre nós</a>
            <a href="#contato">Contato</a>
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
