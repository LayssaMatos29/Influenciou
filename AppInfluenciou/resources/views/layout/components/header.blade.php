<header class="header clearfix">

    <div class="main_logo" id="logo">
      <a class="navbar-brand" href="#">
          <a href="{{ route('welcome') }}">
              <img src="{{ asset('assets/images/influencioulogo (2).png') }}" alt=""  class="" style="width: 16rem;">
          </a>
          <a href="{{ route('welcome') }}">
              <img src="{{ asset('assets/images/influencioulogo (1).png') }}" alt="" class="logo-inverse " style="width:16rem;">
          </a>
      </a>
    </div>
  <div class="search120">
      <div class="ui search">
          <a href="search_result.html" style="text-decoration: none;">
        <div class="ui left icon input swdh10">
          <input class="prompt srch10" type="text" placeholder="Procure vídeos de Tuts, Tutores, Testes e muito mais.">
          <i class='uil uil-search-alt icon icon1'></i>
        </div>
      </a>
      </div>
  </div>
  <div class="night_mode_switch__btn">
      <a href="#" id="night-mode" class="btn-night-mode">
          <i class="uil uil-moon"></i> 
          <span class="btn-night-mode-switch">
              <span class="uk-switch-button"></span>
          </span>
      </a>
  </div>
  <div class="header_right">
      <ul>
          <li>
              <a href="{{ route('login') }}" class="login_btn">Login</a>
          </li>
          <li>
              <a href="{{ route('register') }}" class="upload_btn">Fazer conta</a>
          </li>
      </ul>
  </div>
</header>