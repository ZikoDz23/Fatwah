<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Include your CSS file or add the styles inline here -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            font-size: 16px;
            background-color: #f5f5f5;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #4070f4;
            color: #fff;
        }

        header img.avatar {
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Sidebar Styles */
        aside {
            width: 200px;
            padding: 20px;
            background-color: #232836;
            color: #fff;
        }

        aside h2 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        aside ul {
            list-style: none;
            padding: 0;
        }

        aside li {
            margin-bottom: 8px;
        }

        /* Content Area Styles */
        main {
            flex: 1;
            padding: 20px;
        }

        /* Add more styles as needed */

    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <!-- User Avatar - Replace with actual avatar image source -->
        <img class="avatar" src="https://gravatar.com/avatar/b9408a09298632b5151200f3449434ef?s=128" alt="User Avatar">
        <button> <a href="/change-avatar">change-avatar</a></button>
        <!-- Logout Button - Replace with actual logout route -->
        <a href='/logout'>Logout</a>
    </header>

    <!-- Sidebar Section -->
    <aside>
        <h2>Shopping Categories</h2>
        <ul>
            <li>Electronics</li>
            <li>Clothing</li>
            <li>Home & Furniture</li>
            <!-- Add more categories as needed -->
        </ul>
    </aside>

    <!-- Content Area -->
    <main>
        <!-- Add your dashboard content here -->
        <h1>Welcome to the Dashboard {{auth()->user()->firstname}}</h1>
        
    </main>
<form method="POST" action="/checkout" >
    @csrf
    <h2>Click bellow to proceed payment</h2>
    <button type="submit">Proceed Payment</button>
</form>
</body>
</html>
