<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> super admin dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
    <div class="row">
        <h1 class="mb-5 text-center"> এটা সুপার এডমিনের ড্যাশবোর্ড</h1>
        <div class="fw-bold fs-4 col-4 me-2">
            সুপার এডমিন কাকার লিঙ্কগুলো
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-md-3 d-flex align-items-center">
                    <a href="{{ route('superadmin1') }}" class="btn btn-info text-decoration-none">Super Admin লিঙ্ক 1</a>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <a href="{{ route('superadmin2') }}" class="btn btn-info text-decoration-none">Super Admin লিঙ্ক 2</a>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <a href="{{ route('superadmin3') }}" class="btn btn-info text-decoration-none">Super Admin লিঙ্ক 3</a>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <a href="{{ route('superadmin4') }}" class="btn btn-info text-decoration-none">Super Admin লিঙ্ক 4</a>
                </div>
            </div>
        </div>
        <div class="col-1 ms-2">
            <a href="{{route('logout')}}" class="btn btn-dark w-100">  logout  </a>
        </div>
        <h5 class="mt-5 text-center"><a class="btn btn-success " href="{{route('dashboard')}}">কমন ড্যাশবোর্ড >>></a> </h5>
    </div>
</div>
</body>
</html>
