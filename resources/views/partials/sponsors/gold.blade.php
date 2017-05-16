<div class="6u 12u(medium)" style="float:left; padding: 5px;">

    <!-- Box -->
    <a href="{{ $sponsor->website }}" class="feature-link">
        <section class="feature box" style="max-width: 30em; margin-left: auto; margin-right: auto;">
            <img src="{{ asset($sponsor->image) }}" alt="" class="image" />
            <div>
                <header>
                    <h2>{{ $sponsor->name }}</h2>
                </header>
                <p>{{ $sponsor->desc }}</p>
            </div>
        </section>
    </a>

</div>