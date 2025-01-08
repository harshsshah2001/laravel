<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h2>Edit Post</h2>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name', $post->name) }}" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email', $post->email) }}" required><br>

        <label for="password">Password:</label>
        <input type="text" name="password" value="{{ old('password',$post->passowrd)}}" required><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="{{ old('phone', $post->phone) }}" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ old('address', $post->address) }}" required><br>

        <button type="submit">Update Post</button>
    </form>
</body>
</html>