<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cloud 1</title>
    <link rel="stylesheet" href="main.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/javs.js"></script>
    
</head>
<body>

    <header id="header">

    </header>
    <?php
    if(!isset($_COOKIE['username']))
    {
        header('location:pages/login.php');
    }
    ?>
<div class="sec1 col-8">
    <div class="img">
        <img src="img/pexels-photo-1708988.jpeg" alt="" width="100%" height ="100%">
        <div class="txt">
            <h1>
                <?php
                if(isset($_COOKIE['username']))
                {
                    $name = $_COOKIE['username'];
                    echo "Hi $name";
                }
                ?>
            </h1>
            <h2>
                This's a platform that consolidate everything on the same cloud for easy accessibility <br>
                This company focuses on offering services such as web development,graghic design,network and many more <br>
                we encourage experts to come together for collaboration and give professional services to our client
            </h2>
        </div>
    </div>   
</div>
<h3>startups </h3>
<div class="sec2">
    
    <div class="img1">
        <a href="">
            <figure>
               <img src="img/computer2.png" alt="python" width="150px" height="150px">
               <h6>python programming</h6>
           </figure></a>
    </div>
    <div class="img2">
        <a href="">
            <figure>
                <img src="img/computer2.png" alt="web development" height="150px" width="150px">
                <h6>
                    web development
                </h6>
            </figure>
        </a>
    </div>
    <div class="img3">
        <a href="">
            <figure>
                <img src="img/computer2.png" alt="machine learning" width="150px" height="150px">
                <h6>machine learning</h6>
            </figure>
        </a>
    </div>
</div>
<div class="container_3">
    <div class="sec1">
        <h3>communities</h3>
        <ul>
            <li><a href="">web development</a></li>
            <li><a href="">linux</a></li>
            <li><a href="">mobile app <br>development</a></li>
            <li><a href="">machine learning</a></li>
            <li><a href="">artificial inteligent</a></li>
            <li><a href="">networking</a></li>
        </ul>
    </div>
    <div class="sec22">
        <h3>startups</h3>
        <ul>
            <li><a href="">python</a></li>
            <li><a href="">java</a></li>
            <li><a href="">c</a></li>
            <li><a href="">c++</a></li>
        </ul>
    </div>
    <div class="sec3">
        <h3>services</h3>
        <ul>
            <li><a href="">RDMS</a></li>
            <li><a href="">msql/sql</a></li>

        </ul>
    </div>
    <div class="sec4">
        <h3>follow us on</h3>
        <ul>
            <li><a href="">twitter</a></li>
            <li><a href="">facebook</a></li>
            <li><a href="">instagram</a></li>
            <li><a href="">github</a></li>
        </ul>
    </div>
</div>
<footer>
        <h4>
            copyright &copy 2021 cloud1.com <br>
            all right reserved <br>
            <a href="">terms of use</a>
        </h4>
</footer>
</body>
</html>