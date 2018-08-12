<nav class="navbar is-info is-transparent">
    <div class="navbar-brand">
        <a class="navbar-item" href="http://www.jasoncreighton.net">
        <h1>Jason Creighton</h1>
        </a>
        <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
        <a class="navbar-item" href="/files/CreightonCV18.pdf">
            CV
        </a>
        <a class="navbar-item" href="https://bulma.io/">
            About
        </a>

    <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="/documentation/overview/start/">
          Blog
        </a>
            <div class="navbar-dropdown is-boxed">
                <a class="navbar-item" href="/documentation/overview/start/">
                    Overview
                </a>
                <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                    Modifiers
                </a>
                <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                    Columns
                </a>
                <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                    Layout
                </a>
                <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                    Form
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
                    Elements
                </a>
                <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                    Components
                </a>
            </div>
        </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="bd-tw-button button" 
                data-social-network="Twitter" 
                data-social-action="tweet" 
                data-social-target="http://localhost:4000" 
                target="_blank" 
                href="https://twitter.com/intent/tweet?text=JC: &amp;hashtags=JC&amp;url=http://www.jasoncreighton.net">
              <span class="icon">
                <i class="fab fa-twitter"></i>
              </span>
              <span>
                Tweet
              </span>
            </a>
          </p>
          <p class="control">
            <a class="button is-white" href="{{route('email.create')}}">
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