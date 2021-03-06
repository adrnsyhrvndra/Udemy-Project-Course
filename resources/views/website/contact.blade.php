<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

</head>

<body>

    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="#">Navbar</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav mr-auto">
                
                    @foreach ($pages as $row)

                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('page', $row->id) }}">{{ $row->name }}</a>

                        </li>

                    @endforeach

                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('contactus', $row->id) }}">Contact Us</a>

                    </li>

                </ul>

                <form class="form-inline my-2 my-lg-0">

                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

                </form>

            </div>

        </div>

    </nav>

    <div class="container mt-5">

        <div class="row mt-5">

            <div class="col-lg-10">

                <form method="post" action="{{ route('sendmessage') }}" class="was-validated">

                    @csrf

                    <div class="form-group">

                        <label for="uname">Name:</label>

                        <input type="text" class="form-control" id="uname" placeholder="Enter your name" name="name" required>

                        <div class="valid-feedback">Valid.</div>

                        <div class="invalid-feedback">Please fill out this field.</div>

                    </div>
                    
                    <div class="form-group">

                        <label for="uname">Email:</label>

                        <input type="email" class="form-control" id="uname" placeholder="Enter your email" name="email" required>

                        <div class="valid-feedback">Valid.</div>

                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    
                    <div class="form-group">

                        <label for="uname">Message:</label>

                        <textarea class="form-control" name="message" id="" cols="30" rows="6" placeholder="Enter your message"></textarea>

                        <div class="valid-feedback">Valid.</div>

                        <div class="invalid-feedback">Please fill out this field.</div>

                    </div>
            
                    <button type="submit" class="btn btn-primary">Submit</button>
            
                </form>

            </div>

        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>