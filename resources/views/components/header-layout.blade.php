<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"
                ><h2>Busca <em>Bucky</em></h2></a
            >
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    {{ $items }}
                    {{-- <li class="nav-item active">
                        <a class="nav-link" href="/"
                            >Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/products') }}"
                            >Our Products</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html"
                            >About Us</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"
                            >Contact Us</a
                        >
                    </li> --}}
                    <li class="nav-item">
                        @if (Route::has('login'))
                            <div class="py-0">
                                @auth
                                    {{-- Policies --}}
                                    @can('vieww', App\Models\Book::class)                                                                        
                                        <a
                                            href="{{ url('/myproducts') }}"
                                            class="nav-link btn btn-secondary"
                                            >Mis productos</a
                                        >
                                    @endcan
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="nav-link btn btn-outline-secondary"
                                        >Log in</a
                                    >
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a
                                            href="{{ route('register') }}"
                                            class="nav-link btn btn-danger"
                                            >Register</a
                                        >
                                    </li>
                                @endif @endauth
                            </div>
                        @endif                        
                    </li>                    
                </ul>
            </div>
        </div>
        {{ $slot }}
    </nav>    
</header>

