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

</main>
