
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Borrow Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            <div class="col-3">
                <x-nav-bar partitle="Navigation Bar" parclass="alert alert-primary text-center"/>
            </div>
            <div class="col-9">
              <h5 class="alert alert-success text-center" role="alert">
                Edit Borrow
              </h5>
              <div class="card card-body">
                <div class="text-end mb-3">
                    <a class="btn btn-sm btn-primary" href="{{ route('borrow.index') }}">Back</a>
                </div>
                <form action="{{ route('borrow.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label for="student_idcard" class="mb-2">ID Card</label>
                            <input type="text" class="form-control" id="student_idcard" value="{{$borrow->student_idcard}}" name="student_idcard" placeholder="Enter ID Card" required>
                        </div>
                        <div class="col-6">
                            <label for="student_name" class="mb-2">Name</label>
                            <input type="text" class="form-control" id="student_name" value="{{$borrow->student_name}}" name="student_name" placeholder="Enter Name" required>
                        </div>
                        <div class="col-6 mt-4">
                            <label for="student_gender" class="mb-2">Gender</label>
                            <select id="student_gender" name="student_gender" class="form-select" required>
                                <option value="Male" @if($borrow->student_gender == 'Male') selected @endif>Male</option>
                                <option value="Female" @if($borrow->student_gender == 'Female') selected @endif>Female</option>
                            </select>
                        </div>
                        <div class="col-6 mt-4">
                            <label for="student_faculty" class="mb-2">Faculty</label>
                            <input type="text" class="form-control" id="student_faculty" value="{{$borrow->student_faculty}}" name="student_faculty" placeholder="Enter Faculty" required>
                        </div>
                    </div>
                    <div class="row text-end mt-4">
                        <div class="col-12">
                            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                </form>
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

