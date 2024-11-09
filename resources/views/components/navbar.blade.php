<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid container fw-bold">
        <a class="navbar-brand" href="#">EduFun</a>
        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="{{ request()->is('/') ? 'active' : '' }} nav-link" href="/">Home</a>
                    {{-- <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/category/interactive-multimedia">Interactive Multimedia</a></li>
                            <li><a class="dropdown-item" href="/category/software-engineering">Software Engineering</a></li>
                        </ul>
                    </li>
                    <x-nav-link href="/">Writers</x-nav-link>
                    <a class="{{ request()->is('about-us') ? 'active' : '' }} nav-link" href="/about-us">About Us</a>
                    <a class="{{ request()->is('popular') ? 'active' : '' }} nav-link" aria-disabled="true" href="/popular">Popular</a>
                </div>
            </div>
        </div>
    </div>
</nav>
