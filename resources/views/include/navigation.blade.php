<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Prosperity Heights Condominiums</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white shadow-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="b&p logo.jpg" alt="" height="70px" width="40px">
                Prosperity Heights-PH
            </a>

            <div class="d-lg-none">
                <button type="button" class="custom-btn btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservation</button>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/news') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                </ul>
            </div>

            <div class="d-none d-lg-block">
                <button type="button" class="custom-btn btn bg-warning" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservation</button>
            </div>
        </div>
    </nav>
    <!-- Your content goes here -->
  <!-- Modal -->
  <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-0">Reservation</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body d-flex flex-column justify-content-center">
                <div class="booking">

                    <form class="booking-form row" role="form" action="{{ route('submit-reservation') }}" method="POST">  @csrf
                        <div class="col-lg-6 col-12">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@email.com" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="123-456-7890">
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="people" class="form-label">Number of persons</label>
                            <input type="number" name="people" id="people" class="form-control" placeholder="max 4 of person visits">
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" name="date" id="date" value="" class="form-control">
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="time" class="form-label">Time</label>

                            <select class="form-select form-control" name="time" id="time">
                              <option value="5PM" selected>5:00 PM</option>
                              <option value="9AM">9:00 AM</option>
                              <option value="10AM">10:00 AM</option>
                              <option value="11AM">11:00 AM</option>
                              <option value="12PM">12:00 PM</option>
                              <option value="1PM">1:00 PM</option>
                              <option value="2PM">2:00 PM</option>
                              <option value="3P">3:00 PM</option>
                              <option value="4PM">4:00 PM</option>
                              <option value="5PM">5:00 PM</option>
                              <option value="6PM">6:00 PM</option>
                              <option value="7PM">7:00 PM</option>
                              <option value="8PM">8:00 PM</option>
                              <option value="9PM">9:00 PM</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="message" class="form-label">Special Request</label>

                            <textarea class="form-control" rows="4" id="message" name="message" placeholder=""></textarea>
                        </div>
                        <input type="text" name="condo_unit" id="condo_unit" value="0" class="form-control" hidden>
                        <input type="text" name="avail" id="avail" value="0" class="form-control" hidden>
                        <div class="col-lg-4 col-12 ms-auto">
                            <button type="submit" class="form-control">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer"></div>

        </div>

    </div>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif



</body>
</html>
