<nav class="navbar is-link is-transparent main-color">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
        <h1 class="is-size-4">Jason Creighton</h1>
        </a>
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
        <a class="navbar-item" href="{{ route('cv') }}">
            CV
        </a>
        <a class="navbar-item" href="{{ route('about') }}">
            About
        </a>

    <div class="navbar-item has-dropdown is-hoverable">
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
          <p class="control">
            <a class="button is-white" href="https://www.linkedin.com/in/ncojay/">
              <span class="icon">
              <i class="fab fa-linkedin"></i>
              </span>
              <span>LinkedIn</span>
            </a>
          </p>
          <p class="control">
            <a class="button is-white" href="{{route('email')}}">
              <span class="icon">
                <i class="far fa-envelope"></i>
              </span>
              <span>Contact</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>