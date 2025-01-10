    <!-- resources/views/contact-form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome for icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 30px;
            font-size: 28px;
            color: #333;
        }

        .input-group {
            width: 100%;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .input-group label {
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
        }

        .input-group input:focus,
        .input-group textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        .input-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            font-size: 16px;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        .icon {
            font-size: 18px;
            color: #007bff;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="harsh">Register Form</h2>
        <form method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
            @csrf
            @if (session('submit'))
            <div class="alert alert-success">
                {{ session('submit') }}
            </div>

            @endif

            <div class="input-group">
                <label for="name"><i class="fas fa-user icon"></i>Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name">
            </div>

            <div class="input-group">
                <label for="email"><i class="fas fa-envelope icon"></i>Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>
            <div class="input-group">
                <label for="password"><i class="fas fa-envelope icon"></i>Password</label>
                <input type="text" id="email" name="password" required placeholder="Enter your Password">
            </div>

            <div class="input-group">
                <label for="phone"><i class="fas fa-phone icon"></i>Phone</label>
                <input type="text" id="phone" name="phone" required placeholder="Enter your phone number">
            </div>

            <div class="input-group">
                <label for="address"><i class="fas fa-home icon"></i>Address</label>
                <textarea id="address" name="address" required placeholder="Enter your address"></textarea>
            </div>
            <div class="input-group">
                <label for="image"><i class="fas fa-image icon"></i>Image</label>
                <input type="file" id="image" name="image" required>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
