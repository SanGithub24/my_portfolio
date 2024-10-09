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

@endsection
