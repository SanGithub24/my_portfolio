<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="{{ route('home') }}">
{{--    <video src="{{ asset('videos/log_gif.gif') }}" autoplay loop muted class="brand-video"></video>--}}
    <img src="{{ asset('videos/SM_logo.gif') }}" alt="GIF Overlay" class="brand-video">
    <span class="brand-text">Sanvarie Meegoda</span>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('projects.main') ? 'active' : '' }}" href="{{ route('projects.main') }}">Projects</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('contact.contact') ? 'active' : '' }}" href="{{ route('contact.contact') }}">Contact</a>
        </li>
    </ul>
</div>
</nav>
