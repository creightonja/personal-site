<nav class="navbar is-link is-transparent main-color">
    <div class="navbar-brand">
        <a class="navbar-item brand" href="{{ route('home') }}">
        <span class="brand-name p-l-sm p-r-sm">Jason Creighton</span>
        </a>
        <div class="navbar-burger burger p-t-md" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
        <a class="navbar-item menu" href="{{ route('cv') }}">
            CV
        </a>
        <a class="navbar-item menu" href="{{ route('about') }}">
            About
        </a>

    <div class="navbar-item has-dropdown is-hoverable menu">
        <a class="navbar-link" href="{{ route('blog.index') }}">
          Blog
        </a>
            <div class="navbar-dropdown is-boxed">
                <a class="navbar-item" href="/documentation/overview/start/">
                    Coming Soon
                </a>
                <!-- <hr class="navbar-divider">
                <a class="navbar-item" href="">
                    Elements
                </a>
                <a class="navbar-item is-active" href="">
                    Components
                </a> -->
            </div>
        </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <!-- <p class="control">
            <a class="bd-tw-button button" 
                data-social-network="Twitter" 
                data-social-action="tweet" 
                data-social-target="" 
                target="_blank" 
                href="https://twitter.com/intent/tweet?text=JC: &amp;hashtags=JC&amp;url=http://www.jasoncreighton.net">
              <span class="icon">
                <i class="fab fa-twitter"></i>
              </span>
              <span>
                Tweet
              </span>
            </a>
          </p> -->
          <p class="control text-main-color">
            <a class="button is-white text-main-color" href="https://www.linkedin.com/in/ncojay/">
              <span class="icon p-sm tooltip">
                  <span class="tooltip-text">LinkedIn</span>
                <i class="fab fa-linkedin fa-2x"></i>
              </span>
            </a>
          </p>
          <p class="control text-main-color">
            <a class="button is-white text-main-color" href="https://github.com/creightonja">
              <span class="icon p-sm tooltip" alt="Github">
                <span class="tooltip-text">Github</span>
              <i class="fab fa-github fa-2x"></i>
              </span>
            </a>
          </p>
          <p class="control">
            <a class="button is-white text-main-color" href="{{route('email')}}">
              <span class="icon p-sm tooltip">
                <span class="tooltip-text">Email</span>
                <i class="far fa-envelope fa-2x"></i>
              </span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>