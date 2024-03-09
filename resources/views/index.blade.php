<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Healet</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />

    <style>
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            font-family: sans-serif;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        .img-fluid {
            width: 100%;
            height: auto;
        }

        .container,
        .container-fluid {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        .col {
            flex-grow: 1;
            max-width: 100%;
        }

        blockquote {
            font-size: 80%;
            color: #6c757d;
        }

        blockquote::before {
            content: "\2014\00A0";
        }

        code {
            font-size: 87.5%;
            color: #e83e8c;
            word-break: break-word;
        }

        kbd {
            padding: 0.2rem 0.4rem;
            font-size: 87.5%;
            color: #fff;
            background-color: #212529;
            border-radius: 0.2rem;
        }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll;
        }

        body {
            font-family: "Poppins", sans-serif;
            color: #0c0c0c;
            background-color: #ffffff;
            overflow-x: hidden;
        }

        .tel {
            width: 100%;
            height: 100%;
        }

        .tt {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
            background-color: #3498db;
            border: 2px solid #3498db;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100px;
            margin-left: 300px;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            display: block;
            width: 150px;
            height: 50px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 auto; 
            margin-top: 20px; 
        }

        button:hover {
            background-color: #0056b3;
        }

        .header_section {
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 9;
        }

        .custom_nav-container {
            padding-left: 0;
            padding-right: 0;
        }

        .menu_width {
            width: 100%;
        }

        .navbar-brand {
            margin-top: 10px;
        }

        .navbar-brand span {
            font-size: 25px;
            font-weight: 700;
            color: #ffffff;
            text-transform: uppercase;
        }

        .slider_section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .slider_section .row {
            align-items: center;
        }

        .slider_section .detail-box {
            position: relative;
            z-index: 4;
            color: #ffffff;
            padding: 75px 0;
        }

        .slider_section .detail-box h1 {
            font-weight: bold;
            font-size: 3rem;
        }

        .slider_section .detail-box p {
            width: 75%;
            margin-top: 15px;
        }

        .slider_section .detail-box .slider-link {
            display: inline-block;
            padding: 10px 45px;
            background-color: transparent;
            color: #fd9c6b;
            border-radius: 5px;
            border: 1px solid #fd9c6b;
            transition: all .2s;
            margin-top: 35px;
        }

        .slider_section .detail-box .slider-link:hover {
            background-color: #fd9c6b;
            color: #ffffff;
        }

        .slider_section .slider_bg_box {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            overflow: hidden;
        }

        .button-container {
            text-align: center;
        }

    </style>
</head>

<body>

    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.html">
                </a>
            </nav>
        </div>
    </header>

    <section class="slider_section position-relative">
        <div class="slider_bg_box">
            <img src="ple.png" class="img-fluid" alt="">
        </div>
        <div class="slider_bg"></div>
        <div class="container">
            <div class="col-md-9 col-lg-8">
                <div class="detail-box">
                    <h1>Welcome to the competition<br></h1>
                    <div class="button-container">
                        <button onclick="openIndex()">LOGIN</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function openIndex() {
            window.location.href = "/";
        }

    </script>
</body>

</html>

