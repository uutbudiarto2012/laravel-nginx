<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Upload Laravel Broh</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home') ? 'active' : ''}}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($title === 'Blog') ? 'active' : ''}}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($title === 'About') ? 'active' : ''}}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($title === 'Contact') ? 'active' : ''}}" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
