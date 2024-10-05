<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>

    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
    </script>
  </head>
  <body>
    <div class="container-fluid" style="height: 40rem;">
        <div class="row"  style="margin-top:3rem">
            <div class="col-3">
                &nbsp;
            </div>
            <div class="col-6 bg-light">
                @if(Session()->has('login'))
                    <div class="alert alert-danger text-center" role="alert">
                        {{ Session()->get('login') }}, Please Try Again!!!
                    </div>
                    {{ Session()->forget('login') }}
                @else
                    <div class="alert alert-primary text-center" role="alert">
                        Please, Login
                    </div>
                @endif
                <form action="{{ route('login-submit') }}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input required type="email" class="form-control" id="email" name="email">

                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input required type="password" min="2" max="12" class="form-control" id="password" name="password">
                      <input type="checkbox" onclick="myFunction()">Show Password
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                  </form>
            </div>
            <div class="col-3">
                &nbsp;
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
