
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Borrow Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
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
              <h5 class="alert alert-success text-center" role="alert">
                Book Borrow Page
              </h5>
              <div class="card card-body">
                <div class="row mb-3">
                  <div class="col-6 text-start">
                      <a class="btn btn-sm btn-primary" href="{{ route('borrow.index') }}">Back</a>
                  </div>
                  <div class="col-6 text-end">
                      <a class="btn btn-sm btn-primary" href="{{ route('borrow.add' , $id) }}">Add New Borrow</a>
                  </div>
                </div>
                @include('alert')
                <div class="table-responsive">
                <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Bar Code</th>
                          <th scope="col">Name</th>
                          <th scope="col">Author</th>
                          <th scope="col">Written In</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($books as $index => $book)
                          <tr>
                              <th scope="row">{{ $index+1 }}</th>
                              <td>{{ $book->barcode }}</td>
                              <td>{{ $book->name }}</td>
                              <td>{{$book->author}}</td>
                              <td>{{$book->written_in}}</td>
                              <td class="d-flex">
                                  <a class="btn btn-sm btn-outline-primary" href="{{route('borrow.return' , $id)}}?book_id={{$book->id}}" style="margin-right: 10px !important" onclick="return confirm('Sur ? This Book Will Return')">Refund</a>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
        </div>
        <div class="row bottom-bar">
            <x-footer designer="សឿក ចាន់រិទ្ធ , អ៊ាង អាន , ខាត់ លុច , ចៅ សុភ័ក្រ្ត , ងឿម ប៊ុនណា , អឿន វិសាល" year="Room404" class="alert alert-info text-center"/>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

