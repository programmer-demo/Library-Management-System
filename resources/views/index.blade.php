
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylsheet">
</head>
  <style>
    .bottom-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #fff;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        z-index: 1030;
        font-family:Khmer os battambang;
    }

   .bl{
    width: 100%;
    height: 100%;
    background-color: rgb(200, 255, 237);
    /* background:url(https://media.istockphoto.com/id/1404674470/photo/abstract-gradian-blue-for-background.jpg?b=1&s=612x612&w=0&k=20&c=NT4BPyfMDBxC5QMZ06KHooTG_Jhi-bpZWVMltU2fy9s=); */
   }
    .image{
      height: 50%;
      width: 50%;
      margin: 0px auto;
<<<<<<< HEAD

=======
>>>>>>> 6f3a42b7cbd1965566f69d62d3dcfb8e407c9773
    }
  </style>
  <body>
    <div class="container-fluid">
        <div class="row">
            <x-header partitle=""/>
        </div>
        <div class="row">
            <div class="col-2">
                <x-nav-bar partitle="Navigation Bar" parclass="alert alert-primary text-center"/>
            </div>
            <div class="col-10">
              <h5 class="alert alert-info text-center" role="alert">
                Home Page
                {{--  <button type="button" class="btn btn-success position-absolute top-50 end-0 translate-middle-y h-100" >
                  Add
                </button>  --}}
              </h5>
                            {{-- Create slider pichur by khat luch --}}

                            <div id="carouselExampleIndicators" class="carousel slide">
                              <div class="carousel-indicators ">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                              </div>
                              <div class="carousel-inner  bl" >


                                    {{-- <img src="{{asset('images/chanrith.jpg')}}" class="d-block w-100 carousel-item active" alt="..." >
                                    <img src="{{asset('images/luch.jpg')}}" class="d-block w-100 carousel-item" alt="..."> --}}
                                    {{-- <img src="{{asset('images/bona.jpg')}}" class="d-block w-100 carousel-item" alt="...">
                                    <img src="{{asset('images/arn.jpg')}}" class="d-block w-100 carousel-item" alt="...">
                                    <img src="{{asset('images/visal.jpg')}}" class="d-block w-100 carousel-item" alt="..."> --}}
                                    {{-- <img src="{{asset('images/sokpheak.jpg')}}" class="d-block w-100 carousel-item" alt="..."> --}}

                                <div class="carousel-item active  " id="AutoSlide" >
                                  <img src="{{asset('images/chanrith.jpg')}}" class="d-block image" alt="...">
                                </div>
                                <div class="carousel-item  ">
                                  <img src="{{asset('images/luch.jpg')}}" class="d-block  image" alt="..." >
                                </div>
                                <div class="carousel-item">
                                  <img src="{{asset('images/arn.jpg')}}" class="d-block  image" alt="..." >
                                </div>
                                <div class="carousel-item" >
                                  <img src="{{asset('images/bona.jpg')}}" class="d-block  image" alt="..." >
                                </div>
                                <div class="carousel-item" >
                                  <img src="{{asset('images/visal.jpg')}}" class="d-block  image" alt="..." >
                                </div>
                                <div class="carousel-item" >
                                  <img src="{{asset('images/sokpheak.jpg')}}" class="d-block  image" alt="..." >
                                </div>

                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden ">Next</span>
                              </button>

                          </div>
                          <div class="text-center mt-4">
                            {{-- <i class="fa fa-house-user"></i> --}}
                            <img src="{{asset('images/check-in.png')}}" class="d-block  icon" alt="..." > 
                            <a class="btn btn-lg btn-primary" href="{{ route('library.create') }}">Checkin</a>
                        </div>
            </div>
        </div>
        <div class="row bottom-bar bg-info mx-auto p-2 fs-4"   style="height: 50px;">
          <marquee behavior="" direction="">
            <x-footer designer="សឿក ចាន់រិទ្ធ , អ៊ាង អាន , ខាត់ លុច , ចៅ សុភ័ក្រ្ត , ងឿម ប៊ុនណា , អឿន វិសាល" year="Room404" class="alert text-center text-white"/>
          </marquee>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

