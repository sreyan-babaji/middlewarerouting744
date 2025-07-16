<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ইমেজ আপলোড</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header bg-primary text-white">
            <h4 class="mb-0">ইমেজ আপলোড ফর্ম</h4>
          </div>
          <div class="card-body">
            <form action="{{route('uploaded')}}" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="mb-3">
                <label for="image" class="form-label">ইমেজ নির্বাচন করুন:</label>
                <input class="form-control" type="file" name="image" id="image" accept="image/*" required>
              </div>

              <button type="submit" name="submit" class="btn btn-success w-100">আপলোড করুন</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
