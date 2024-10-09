@extends('portfolio_app')
@section('content')

<div class="container" id="contact">
    <h2 class="main-title text-center my-4">Contact Me</h2>
    <div class="row align-items-center contact-gradient-background">
        <div class="col-md-5">
            <img src="{{ asset('videos/SM_logo.gif') }}" alt="GIF Overlay" class="contact-circular-gif">
        </div>
        <div class="col-md-7">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn-submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h5 class="main-title text-center mb-5">You Can Also Reach Me At</h5>
    <div class="row text-center">
        <div class="col-md-2 col-sm-4">
            <a href="mailto:sanvariemeegoda@gmail.com" target="_blank" class="icon-link">
                <i class="fas fa-envelope fa-2x"></i>
            </a>
            <p class="contact-title">Email</p>
        </div>
        <div class="col-md-2 col-sm-4">
            <a href="https://wa.me/+94713635304" target="_blank" class="icon-link">
                <i class="fab fa-whatsapp fa-2x"></i>
            </a>
            <p class="contact-title">WhatsApp</p>
        </div>
        <div class="col-md-2 col-sm-4">
            <a href="https://www.linkedin.com/in/sanvarie-meegoda-562367246/" target="_blank" class="icon-link">
                <i class="fab fa-linkedin fa-2x"></i>
            </a>
            <p class="contact-title">LinkedIn</p>
        </div>
        <div class="col-md-2 col-sm-4">
            <a href="https://www.behance.net/sanvariemeegoda" target="_blank" class="icon-link">
                <i class="fab fa-behance fa-2x"></i>
            </a>
            <p class="contact-title">Behance</p>
        </div>
        <div class="col-md-2 col-sm-4">
            <a href="https://dribbble.com/Sanvarie" target="_blank" class="icon-link">
                <i class="fab fa-dribbble fa-2x"></i>
            </a>
            <p class="contact-title">Dribbble</p>
        </div>
        <div class="col-md-2 col-sm-4">
            <a href="https://github.com/SanGithub24" target="_blank" class="icon-link">
                <i class="fab fa-github fa-2x"></i>
            </a>
            <p class="contact-title">GitHub</p>
        </div>
    </div>
</div>

@endsection
