<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>লগইন করুন</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa; /* হালকা ধূসর ব্যাকগ্রাউন্ড */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* পুরো ভিউপোর্ট হাইট ব্যবহার করে পেজকে সেন্টারে আনে */
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* হালকা শ্যাডো */
            border-radius: 8px; /* কোণাগুলোকে গোল করে */
            background-color: #ffffff; /* সাদা ব্যাকগ্রাউন্ড */
        }
        .login-header {
            text-align: center;
            margin-bottom: 30px;
            color: #343a40; /* গাঢ় ধূসর টেক্সট */
        }
        .form-label {
            font-weight: 500;
        }
        .btn-login {
            background-color: #007bff; /* বুটস্ট্র্যাপ প্রাইমারি কালার */
            border-color: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            width: 100%;
            font-size: 1.1rem;
        }
        .btn-login:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .text-center a {
            color: #007bff;
            text-decoration: none;
        }
        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2 class="login-header">লগইন করুন</h2>
        <form action="{{route('loged_in')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">ইমেল:</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="আপনার ইমেল লিখুন" required>
                </div>
            <div class="mb-3">
                <label for="password" class="form-label">পাসওয়ার্ড:</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="আপনার পাসওয়ার্ড লিখুন" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">আমাকে মনে রাখুন</label>
            </div>
            <button type="submit" name="submit" class="btn btn-login">লগইন</button>
        </form>
        <div class="text-center mt-3">
            <a href="#">পাসওয়ার্ড ভুলে গেছেন?</a>
        </div>
        <div class="text-center mt-2">
            অ্যাকাউন্ট নেই? <a href="#">রেজিস্টার করুন</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>