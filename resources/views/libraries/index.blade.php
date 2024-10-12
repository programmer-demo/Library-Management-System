
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Page</title>
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
                Library Page
              </h5>
              <div class="card card-body">
                <div class="text-end mb-3">
                    <a class="btn btn-sm btn-primary" href="{{ route('library.create') }}">Checkin</a>
                </div>
                @include('alert')
                <div class="table-responsive">
                  <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">ID Card</th>
                          <th scope="col">Name</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Faculty</th>
                          <th scope="col">Checkin Date</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($libraries as $index => $library)
                          <tr>
                              <td scope="row">{{ $index+1 }}</td>
                              <td>{{ $library->student?->id_card }}</td>
                              <td>{{ $library->student->name }}</td>
                              <td>{{$library->student->gender}}</td>
                              <td>{{$library->student->faculty}}</td>
                              <td>{{$library->created_at}}</td>
                              <td class="d-flex">
                                {{--  <a class="btn btn-sm btn-outline-info" href="{{ route('library.show' , $library->id) }}" style="margin-right: 10px !important">Detail</a>  --}}
                                  <a class="btn btn-sm btn-outline-primary" href="{{ route('library.edit' , $library->id) }}" style="margin-right: 10px !important">Edit</a>
                                  {{--  <form action="{{ route('library.destroy' , $library->id) }}" method="POST">
                                      <button type="submit" class="btn btn-sm btn-outline-danger ml-4" onclick="return confirm('Sure ? You Want to Delete')">Delete</button>
                                      @method('DELETE')
                                      @csrf
                                  </form>  --}}
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <!-- {{ $libraries->links() }} -->

                    {{ $libraries->links('pagination::bootstrap-4') }} <!-- Use Bootstrap 4 style -->
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

