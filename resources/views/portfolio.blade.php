@extends('portfolio_app')
@section('content')

<div class="container-fluid">
<div class="row align-items-center gradient-background">
    <!-- Left Column (Text and Button) -->
    <div class="col-md-7 text-center">
        <h1 class="display-4">Hello, I'm Sanvarie Meegoda</h1>
        <p class="lead">I'm a Software Developer and UI/UX Designer.</p>
        <a class="btn btn-primary btn-lg custom-button" href="#projects" role="button">View My Work</a>
    </div>

    <!-- Right Column (Image) -->
{{--    <div class="col-md-5 text-center">--}}
{{--        <img src="{{asset('img/my_image.jpeg')}}" alt="Your Image" class="img-fluid" style="max-width: 50%; height: auto;">--}}
{{--    </div>--}}

    <div class="col-md-5 text-center position-relative">
        <!-- Image -->
        <img src="{{ asset('img/my_image.jpeg') }}" alt="Your Image" class="img-fluid" style="max-width: 50%; height: auto;">

        <!-- Circular GIF Overlay -->
        <img src="{{ asset('videos/SM_logo.gif') }}" alt="GIF Overlay" class="circular-gif position-absolute">
    </div>
</div>
</div>

<div class="container" id="projects">
    <h2 class="text-center my-4">Projects</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="project1.jpg" class="card-img-top" alt="Project 1">
                <div class="card-body">
                    <h5 class="card-title">POS Systems</h5>
                    <p class="card-text">
                        Developed a Point of Sale (POS) system using
                        Laravel, HTML, and JavaScript, with responsive design
                        powered by Bootstrap or Tailwind. The system integrates
                        modern features for inventory management, transaction processing,
                        and user-friendly interfaces to ensure smooth retail operations
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="project1.jpg" class="card-img-top" alt="Project 1">
                <div class="card-body">
                    <h5 class="card-title">Websites & Web Apps</h5>
                    <p class="card-text">
                        Designed and developed responsive websites
                        and web applications using Laravel or ReactJS
                        along with HTML, Bootstrap, and JavaScript.
                        These projects deliver seamless user experiences
                        with efficient navigation, fast performance,
                        and modern interactive elements. Each solution
                        is tailored to the client's needs, ensuring both
                        functionality and aesthetics align with contemporary web standards.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/Mobile_UI.jpg') }}" class="card-img-top" alt="Project 3">
                <div class="card-body">
                    <h5 class="card-title">UI Designs</h5>
                    <p class="card-text">
                        Created intuitive and visually appealing
                        UI designs using Figma, focusing on user
                        experience and modern aesthetics.
                        These designs ensure that users interact
                        with products in a natural and engaging way,
                        optimizing both functionality and visual harmony</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="contact">
    <h2 class="text-center my-4">Contact Me</h2>
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
