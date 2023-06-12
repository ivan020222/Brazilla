<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>About me</title>
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9f10b6e71b.js" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background: url(img/background.jpg) no-repeat;
            background-size: cover;
        }
        .wrapper1{
            box-sizing: border-box;
            background:rgb(113, 253, 113, 0.7);
            border-radius: 20px;
            width: 80%;
            margin: 5% auto 0 auto;
            padding:10px;
            
        }
        .header{
            color:black;
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1{
            font-family: Lobster;
            font-style: normal;
            font-weight: 400;
            font-size: 40px;
        }
        .main img{
            float: left;
            width: 16%;
            margin-right:20px;
        }
        .main h2{
            font-family: 'Times New Roman', Times, sans-serif;
        }
        .main p{
            font-weight:700;
            font-style: italic;
            font-size:18px;
            text-indent: 15px;
            color:black;
            text-shadow: 0 0 5px white;
        }
        .main li{
            list-style: none;
            display: inline-block;
            margin: 10px 5px;
        }
        .main li a{
            text-decoration: none;
            color:#ffffff;
            font-size:60px;
        }
        .btn{
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <a href="index.php" class="btn btn-success" role="button"><span>На головну</span></a>
    <div class="wrapper1">
        
        <div class="header">
            <h1>Ivan Vovk</h1>
        </div>
        
        <div class="main">
            <img src="img/320A4871.jpg" alt="Photo">
            <h2>About me</h2>
            <p>My name is Ivan and I am student at Khmelnytskyi National University. My major is computer engineering.</p>
            <p>I love doing web development and in future I plan to work as web developer. This is an interesting and also very useful profession. After all, a modern person searches for information, makes purchases, works and studies using the Internet. This would not be possible without websites created by web developers.</p>
            <p>A web designer's job involves developing the design, layout, and code of a website, as well as maintaining it after it's launched. A web designer must be able to work in a team, be patient and persistent, as well as have theoretical and practical skills in working with web technologies.</p>
            <p>One of the most difficult stages of web development is developing the design and layout of the site. After the website is launched, there is a risk of server and database failures. The task of a web developer is to timely and effectively solve problems that arise during the operation of the website, as well as to anticipate possible problems at the development stage in order to solve them in time.</p>
            <ul>
                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
            </ul>
        </div>
        <div class="footer">
            <p>&copy; 2023 Ivan Vovk</p>
        </div>
    </div>
</body>
</html>