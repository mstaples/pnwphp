@extends('layouts.welcome')

@section('banner')
    <div class="7u 12u(medium)">
        <h2>Pacific Northwest PHP</h2>
        <p>Seatte's annual PHP community conference</p>
    </div>
    <div class="5u 12u(medium)">
        <ul>
            @if(config('app.registration'))
                <li><a href="#" class="button">Get Your Ticket</a></li>
            @endif
            @if(config('app.cfp'))
                <li><a href="#" class="button">Submit a Talk <i class="fa fa-microphone"></i></a></li>
            @endif
            @if(!config('app.registration'))
                <li><a href="#" class="button disabled">Registration Opens June 1st</a></li>
            @endif
        </ul>
    </div>
@endsection

@section('features')
    @foreach($features as $feature)
        @include('partials.featured', ['feature' => $feature])
    @endforeach
@endsection

@section('main-sidebar')
        <div id="twitter-stream">
            <a class="twitter-timeline" data-height="480" href="https://twitter.com/PNWPHP">Tweets by PNWPHP</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
@endsection

@section('main-content')
    <h2>Join us in Seattle this September!</h2>
    <p>The Pacific Northwest PHP Conference is a 3-day event for web developers focused but not confined to PHP. In previous years have included world renowned and talented new speakers covering a range of topics like APIs, Frameworks, testing and version control.</p>
    <p>This year we are looking forward to bringing together the rich and diverse talent of our community as speakers and attendees to share knowledge and inspiration.</p>
    <p>We will dive deep into understanding technology, tools, and processes we all rely on, and explore a wide range technology and processes we are eager to get to know.</p>
    @if(config('app.registration'))
        <li><a href="#" class="button">Get Your Ticket</a></li>
    @else
        <a href="#" class="button disabled">Registration Opens {{ config('app.registration_date') }}</a>
    @endif
@endsection