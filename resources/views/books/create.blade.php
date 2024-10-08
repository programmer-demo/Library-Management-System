
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Books Page</title>
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
                Create Book
              </h5>
              <div class="card card-body">
                <div class="text-end mb-3">
                    <a class="btn btn-sm btn-primary" href="{{ route('book.index') }}">Back</a>
                </div>
                <form action="{{ route('book.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <label for="barcode" class="mb-2">Bacode</label>
                            <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Enter Barcode" required>
                        </div>
                        <div class="col-6">
                            <label for="name" class="mb-2">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                        </div>
                        <div class="col-6 mt-4">
                            <label for="author" class="mb-2">Author</label>
                            <input type="text" class="form-control" id="author" name="author" placeholder="Enter Author" required>
                        </div>
                        <div class="col-6 mt-4">
                            <label for="written_id" class="mb-2">Written In</label>
                            <input type="datetime-local" id="written_id" class="form-control" name="written_id" required>
                        </div>
                        <div class="col-6 mt-4">
                            <label for="status" class="mb-2">Status</label>
                            <select id="status" name="status" class="form-select" required>
                                <option value="1">Active</option>
                                <option value="0">inactive</option>
                            </select>
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

