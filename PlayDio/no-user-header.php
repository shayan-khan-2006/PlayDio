<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Icon Font Stylesheet -->
    <script src="https://kit.fontawesome.com/d49b90c6aa.js" crossorigin="anonymous"></script>
    <!-- JQuery | Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body class="body">
    <style>
        nav {
            padding: 15px 4%;
            justify-content: space-between;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background: var(--white);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .nav-right svg {
            width: 22px;
            margin-right: 17px;
        }

        .btn-nav {
            background: var(--red);
            padding: 8px 25px;
            border: 0;
            outline: 0;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .btn-nav a {
            color: var(--white);
            font-weight: 600;
        }

        .btn-nav .seperator {
            color: var(--black);
            font-size: 17px;
            font-weight: 600;
            margin: 0 5px;
        }

        .btn-nav:active,
        .btn:active {
            background: var(--light-black);
        }
    </style>
    <!-- Navbar -->
    <nav class="flex-div">
        <a class="nav-left flex-div">
            <div class="logo-icon">
                <img src="assets/images/play.png">
                PlayDio <sup>PK</sup>
            </div>
        </a>
        <div class="nav-right flex-div" title="Help">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help-circle" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <title>Help</title>
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                <path stroke="#FF0800" d="M12 16v.01" />
                <path stroke="#FF0800" d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
            </svg> -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                <title>Help</title>
                <circle cx="12" cy="12" r="10"></circle>
                <path stroke="#FF0800" d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                <line stroke="#FF0800" x1="12" y1="17" x2="12.01" y2="17"></line>
            </svg>
            <button class="btn-nav">
                <a href="login.php" title="Login">Login</a>
                <div class="seperator"> / </div>
                <a href="register.php" title="Register">Register</a>
            </button>
        </div>
    </nav>