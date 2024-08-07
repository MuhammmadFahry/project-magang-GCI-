<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20230526/pngtree-an-old-bookcase-in-a-library-image_2642908.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            color: white;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .navbar .nav-left {
            display: flex;
        }
        .navbar .nav-right {
            display: flex;
            align-items: center;
        }
        .logout-button {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
        }
        .logout-button:hover {
            background-color: #d32f2f;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="nav-left">
            <a href="#">Home</a>
            <a href="#">Peminjaman buku</a>
            <a href="#">pengembalian buku</a>
        </div>
        <div class="nav-right">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-button">Logout</button>
            </form>
        </div>
    </div>
    
    <div class="content">
        <h1>Welcome, Member!</h1>
    </div>
</body>
</html>
