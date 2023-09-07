
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Zooming Background Navbar</title>
</head>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .zoom-navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: url('{{ asset('img/default-img.jpg') }}') center/cover;
        padding: 16px 40px;
        color: white;
    }

    .nav-links {
        list-style: none;
        display: flex;
        gap: 20px;
        margin: 0; /* Remove default margin */
    }

    /* Add this CSS to push the links to the right */
    .nav-links {
        margin-left: auto;
    }

    .nav-links li a {
        text-decoration: none;
        color: white;
        transition: color 0.3s;
    }

    .nav-links li a:hover {
        color: lightgray;
    }
</style>

<body>
    <nav class="zoom-navbar">
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    @yield('content')

</body>
</html>

