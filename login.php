<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8" />
    <title>The Cake Room | Log In</title>
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <style>
        body {
            font-family: Tahoma, Geneva, sans-serif;
            color: #fff;
            background: url(loginbg.jpg);
            background-size: cover;
        }

        .signin {
            background: rgba(44, 62, 80, 0.7);
            padding: 40px;
            width: 250px;
            height: 430px;
            margin-top: 90px;
            margin-left: 180px;
            margin: 0 auto;
            margin-top: 90px;

        }

        form {
            width: 240px;
            text-align: center;
        }

        input {
            width: 240px;
            text-align: center;
            background: transparent;
            border: none;
            border-bottom: 1px solid white;
            font-family: 'Play', sans-serif;
            font-size: 16px;
            font-weight: 200px;
            padding: 10px 0;
            transition: border 0.5s;
            outline: none;
            color: #fff;
        }

        input[type="submit"] {
            border: none;
            width: 190px;
            background: white;
            color: #000;
            font-size: 16px;
            line-height: 25px;
            padding: 10px 0;
            border-radius: 15px;
            cursor: pointer;
        }

        input[type="submit"] {
            color: black;
            background-color: white;
        }

        h2 {
            color: white;
        }

        a {
            color: #FFA07A;
            text-decoration: blink;
        }

        a:hover {
            color: skyblue;
        }

        ::placeholder {
            color: aliceblue;
            opacity: 0.8;
        }
    </style>
</head>

<body>
    <div class="signin">
        <form method="post" action="login_check.php">
            <h2 style="color: white">Log In</h2>
            <input type="text" name="username" placeholder="Username"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <a href="login_check.php"><input type="submit" name="submit" value="Log In"></a><br><br>
            <br><br><br><br><br><br>
        </form>
    </div>
</body>

</html>