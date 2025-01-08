<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
        .main-search-input {
            display: flex;
            align-items: center;
            background: #f9f9f9;
            border: 2px solid #ddd;
            border-radius: 25px;
            padding: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
            margin-bottom: 20px;
        }

        .main-search-input-item {
            flex-grow: 1;
        }

        .main-search-input-item input {
            width: 100%;
            padding: 10px 15px;
            border: none;
            outline: none;
            font-size: 16px;
            border-radius: 25px;
            background: #fff;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .main-search-button {
            background: linear-gradient(90deg, #4e54c8, #8f94fb);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .main-search-button:hover {
            background: linear-gradient(90deg, #8f94fb, #4e54c8);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #000000;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Table Container */
        .table-container {
            width: 85%;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        /* Table Styles */
        .beautiful-table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
        }

        .beautiful-table th,
        .beautiful-table td {
            padding: 12px 15px;
            text-align: left;
            font-size: 14px;
            border-bottom: 1px solid #e0e0e0;
        }

        .beautiful-table th {
            background-color: #4CAF50;
            color: white;
            text-transform: uppercase;
            font-weight: bold;
            border-bottom: 2px solid #45a049;
        }

        .beautiful-table td {
            background-color: #ffffff;
            color: #333333;
        }

        .beautiful-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .beautiful-table tbody tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }

        /* Image Styling */
        .beautiful-table img {
            display: block;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
        }

        /* Action Buttons Styles */
        .action-btn {
            padding: 8px 16px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: all 0.3s ease;
        }

        .update-btn {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }

        .update-btn:hover {
            background-color: #45a049;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
            border: 1px solid #f44336;
        }

        .delete-btn:hover {
            background-color: #e53935;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .table-container {
                width: 95%;
                padding: 15px;
            }

            h2 {
                font-size: 24px;
            }

            .beautiful-table th,
            .beautiful-table td {
                font-size: 12px;
                padding: 10px;
            }

            .action-btn {
                padding: 6px 12px;
                font-size: 12px;
            }

            .beautiful-table img {
                width: 40px;
                height: 40px;
            }
        }
    </style>
</head>

<body>

    <div class="table-container">
        <h2>User's Information</h2>
        <form action="search" method="GET">
            <div class="main-search-input">
                <div class="main-search-input-item">
                    <input type="text" value="" placeholder="Search by name...">
                </div>
                <button class="main-search-button">Search</button>
            </div>
        </form>
        <form action="">
            @csrf
            <button>Delete</button>
        <table class="beautiful-table">
            <thead>
                <tr>
                    <th>Delete Multiples</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $index => $contact)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{$contact->id}}" id=""></td>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->address }}</td>

                        <td>
                            @if ($contact->image)
                                <img src="{{ asset('storage/' . $contact->image) }}" alt="User Image"
                                    style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td>
                            <!-- Update Button -->
                            <a href="{{ route('updateform', $contact->id) }}">
                                <button class="action-btn update-btn">Update</button>
                            </a>

                            <!-- Delete Button (with confirmation) -->
                            <form action="{{ route('data.destroy', $contact->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn delete-btn"
                                    onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form><br><br>
        {{-- for pagination --}}
        {{ $contacts->links() }}
    </div>
    <style>
        .w-5.h-5 {
            width: 20px;
        }
    </style>
</body>

</html>
