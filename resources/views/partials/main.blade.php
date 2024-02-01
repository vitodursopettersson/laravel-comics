<main>

    <!-- Jumbo -->
    <section id="jumbo">
    </section>

    <!-- Current series -->
    <section id="current-series">
        <div class="container">

            <!-- Section title -->
            <div class="mainsection-title">
                <h2>Current series</h2>
            </div>

            <!-- Comics -->
            <div class="comics-group">

                @foreach (config('comics') as $comic)
                    <div class="comic-card">

                        <div class="comic__image">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>

                        <div class="comic__title">

                            <h4>{{ $comic['title'] }}</h4>

                        </div>

                    </div>
                @endforeach

                <!-- Cta -->
                <button class="btn-load-more">Load more</button>

            </div>
        </div>

    </section>

    <!-- Banner Menu -->
    <section id="banner-menu">
        <div class="banner">
            <a class="banner-menu-item" href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}">
                <h6>digital comics</h6>
            </a>
            <a class="banner-menu-item" href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}">
                <h6>dc merchandise</h6>
            </a>
            <a class="banner-menu-item" href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.pn') }}g">
                <h6>subscription</h6>
            </a>
            <a class="banner-menu-item" href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}">
                <h6>comic shop locator</h6>
            </a>
            <a class="banner-menu-item" href="#">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}">
                <h6>dc power visa</h6>
            </a>
        </div>
    </section>

</main>
