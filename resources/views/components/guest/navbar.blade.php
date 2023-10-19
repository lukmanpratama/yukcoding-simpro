<header class="ud-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/" wire:navigate>
              <img src="{{ asset('landingpage/assets/images/logo/logoyk2.png') }}" alt="Logo" />
            </a>
            <button class="navbar-toggler">
              <span class="toggler-icon"> </span>
              <span class="toggler-icon"> </span>
              <span class="toggler-icon"> </span>
            </button>

            <div class="navbar-collapse">
              <ul id="nav" class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a href="/" wire:navigate class="nav-link {{ (request()->is('')) ? 'active' : '' }}">Home</a>
                </li>

                <li class="nav-item">
                  <a href="/tentang" wire:navigate class="nav-link {{ (request()->is('tentang')) ? 'active' : '' }}">About</a>
                </li>
                <li class="nav-item">
                  <a href="/harga" wire:navigate class="nav-link {{ (request()->is('harga')) ? 'active' : '' }} ">Pricing</a>
                </li>
                <li class="nav-item">
                  <a href="/portofolio" wire:navigate class="nav-link {{ (request()->is('portofolio')) ? 'active' : '' }} ">Portofolio</a>
                </li>
                <li class="nav-item">
                  <a href="#contact">Contact</a>
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="javascript:void(0)"> Pages </a>
                  <ul class="ud-submenu">
                    <li class="ud-submenu-item">
                      <a href="about.html" class="ud-submenu-link">
                        About Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="pricing.html" class="ud-submenu-link">
                        Pricing Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="contact.html" class="ud-submenu-link">
                        Contact Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="blog.html" class="ud-submenu-link">
                        Blog Grid Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="blog-details.html" class="ud-submenu-link">
                        Blog Details Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="login.html" class="ud-submenu-link">
                        Sign In Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="404.html" class="ud-submenu-link">404 Page</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>

            <div class="navbar-btn d-none d-sm-inline-block">
              <a href="/login" wire:navigate class="ud-main-btn {{ (request()->is('login')) ? 'ud-white-btn' : 'ud-login-btn' }} ">
                Sign In
              </a>
              <a href="/registrasi" wire:navigate class="ud-main-btn {{ (request()->is('registrasi')) ? 'ud-white-btn' : 'ud-login-btn' }} ">
                Sign Up
              </a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
