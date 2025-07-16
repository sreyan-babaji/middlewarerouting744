<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>রোল ভিত্তিক বাটন ও লিঙ্ক</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

  <div class="container">
    <h2 class="mb-4 text-center">ইউজার রোল সিলেকশন</h2>
    
    <div class="row g-3">
      <!-- User Row -->
      <div class="col-md-4 d-flex align-items-center">
        <button class="btn btn-primary w-100">User</button>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('user1') }}" class="text-decoration-none">User লিঙ্ক 1</a>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('user2') }}" class="text-decoration-none">User লিঙ্ক 2</a>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('user3') }}" class="text-decoration-none">User লিঙ্ক 3</a>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('user4') }}" class="text-decoration-none">User লিঙ্ক 4</a>
      </div>

      <!-- Editor Row -->
      <div class="col-md-4 d-flex align-items-center">
        <button class="btn btn-secondary w-100">Editor</button>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('editor1') }}" class="text-decoration-none">Editor লিঙ্ক 1</a>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('editor2') }}" class="text-decoration-none">Editor লিঙ্ক 2</a>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('editor3') }}" class="text-decoration-none">Editor লিঙ্ক 3</a>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('editor4') }}" class="text-decoration-none">Editor লিঙ্ক 4</a>
      </div>

      <!-- Admin Row -->
      <div class="col-md-4 d-flex align-items-center">
        <button class="btn btn-warning w-100">Admin</button>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('ad.admin1') }}" class="text-decoration-none">Admin লিঙ্ক 1</a>
      </div>
       <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('ad.admin2') }}" class="text-decoration-none">Admin লিঙ্ক 2</a>
      </div>
       <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('ad.admin3') }}" class="text-decoration-none">Admin লিঙ্ক 3</a>
      </div>
       <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('ad.admin4') }}" class="text-decoration-none">Admin লিঙ্ক 4</a>
      </div>

      <!-- Super Admin Row -->
      <div class="col-md-4 d-flex align-items-center">
        <button class="btn btn-danger w-100">Super Admin</button>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('superadmin1') }}" class="text-decoration-none">Super Admin লিঙ্ক 1</a>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('superadmin2') }}" class="text-decoration-none">Super Admin লিঙ্ক 2</a>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('superadmin3') }}" class="text-decoration-none">Super Admin লিঙ্ক 3</a>
      </div>
      <div class="col-md-2 d-flex align-items-center">
        <a href="{{ route('superadmin4') }}" class="text-decoration-none">Super Admin লিঙ্ক 4</a>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center mt-5">
    @if(Auth()->check())
    <a class="btn btn-dark btn-lg mb-2" href="{{route('logout')}}">logout</a>
    @else
    <a class="btn btn-dark btn-lg mb-2" href="{{route('login')}}">login</a>
    @endif
</div>

</body>
</html>
