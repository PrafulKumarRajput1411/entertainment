<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    
     
    <link rel="stylesheet" href="./media/media.css">
    <title>News Grid</title>
    <style>
         .showcase:before{
        background-image:url('<?php echo "images/showcase-image.jpg" ?>');
    }
        <?php
        include 'css/indexx.css';
        include 'media/media.css';
    ?>
   
    </style>
</head>

<body> 

    <nav class="main-nav">
        <div class="container">
            <div class="logo">
                <h1>News<span class="logospan">Grid</span></h1>
            </div>
            <div class="social">
                <a href="http://facebook.com" target="-blank"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="http://twitter.com" target="-blank"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="http://instagram.com" target="-blank"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="http://youtube.com" target="-blank"><i class="fab fa-youtube fa-2x"></i></a>

            </div>
            <div class="nav-item">
                <ul>
                    <li>
                        <a href="index.php" class="current">Home</a>
                    </li>
                    <li>
                        <a href="about.php" class="unactive">About</a>
                    </li>
                    <li>
                        <a href="typing.php" class="unactive">Typing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- showcase -->
    <header class="showcase">
        
        <?php echo "<img class='showcaseimage' src='images/showcase_image.jpg' alt=''>"?>
        <div class="container">
            <div class="showcase-container">
                <div class="showcase-content">
                    <div class="category category-sports">Sports</div>
                    <h1>Some Sports Article</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor alias explicabo, officia amet
                        placeat animi quidem, rerum debitis temporibus maiores quasi, ut a maxime. Doloremque, dicta
                        cupiditate. Iure aliquid quo modi, magnam qui blanditiis numquam exercitationem quidem dolor
                        quos, nobis quas corporis maxime rerum facere sit soluta fuga rem minima.</p>
                    <a href="article.html" class="btn btn-primary">Read More </a>
                </div>
            </div>
        </div>
    </header>
    <!-- home articles -->
    <section id="home-articles" class="py-2">

        <div class="container">
            <div class="container_of_width"></div>
            <h2>Editors Picks</h2>
            <div class="articles-container">
                <article class="card">
                    <?php echo '<img src="images/entertainment.jpg" alt="">' ?>
                    <div>
                        <div class="category category-ent">Entertainment</div>
                        <h3>
                            <a href="article.htmo">Lorem ipsum dolor sit amet.</a>
                        </h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente eligendi facere dolor
                            obcaecati laudantium dolore vero maiores a molestiae reiciendis.</p>

                    </div>

                </article>
                <article class="card">

                    <div class="category category-sports">Sports</div>
                    <h3>
                        <a href="article.htmo">Lorem ipsum dolor sit amet.</a>
                    </h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente eligendi facere dolor
                        obcaecati laudantium dolore vero maiores a molestiae reiciendis.</p>


                </article>
                <article class="card">
                    <?php echo '<img src="images/technology.jpg" alt="">' ?>
                    <div class="category category-tech">Technology</div>
                    <h3>
                        <a href="article.htmo">Lorem ipsum dolor sit amet.</a>
                    </h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente eligendi facere dolor
                        obcaecati laudantium dolore vero maiores a molestiae reiciendis.</p>


                </article>
                <article class="card">
                <?php echo '<img src="images/technology.jpg" alt=""> ' ?>

                    <div class="category category-sports">Sports</div>
                    <h3>
                        <a href="article.htmo">Lorem ipsum dolor sit amet.</a>
                    </h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente eligendi facere dolor
                        obcaecati laudantium dolore vero maiores a molestiae reiciendis.</p>


                </article>
                <article class="card">
                    <?php echo '<img src="images/technology.jpg" alt="">' ?>

                    <div class="category category-tech">Technology</div>
                    <h3>
                        <a href="article.html">Lorem ipsum dolor sit amet.</a>
                    </h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing 179, 171, 171)elit. Sapiente eligendi facere
                        dolor obcaecati laudantium dolore vero maiores a molestiae reiciendis.</p>


                </article>
                <article class="card">

                    <div class="category category-sports">Sports</div>
                    <h3>
                        <a href="article.html">Lorem ipsum dolor sit amet.</a>
                    </h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente eligendi facere dolor
                        obcaecati laudantium dolore vero maiores a molestiae reiciendis.</p>


                </article>
                <article class="card">

                    <div>
                        <div class="category category-ent">Entertainment</div>
                        <h3>
                            <a href="article.htmo">Lorem ipsum dolor sit amet.</a>
                        </h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente eligendi facere dolor
                            obcaecati laudantium dolore vero maiores a molestiae reiciendis.</p>

                    </div>
                     <?php echo '<img src="images/entertainment.jpg" alt="">' ?>
                </article>
            </div>
        </div>
        </div>
    </section>
    <section class="footer-section">
        <div class="container">
            <div class="container-one">
                <div class=" box box-1">
                    <div class="logo">
                        <h1>News<span class="logospan">Grid</span></h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic earum possimus quia tempore
                        molestiae deleniti fugit, vitae voluptatem, quasi quos numquam eum nisi architecto iure nostrum.
                        Ducimus voluptate sed nesciunt?</p>
                </div>
                <div class=" box box-2">
                    <h1>Lorem, ipsum dolor</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.

                    </p>
                    <form action="#">
                        <input type="text" placeholder="enter your mail">
                    </form>
                    <a href="loginform.php" class="btn">Create Your Account</a>
                </div>



                <div class=" box box-3">

                    <h1>Lorem, ipsum</h1>
                    <div class="box-3-1">
                        <p>Help & Support</p>
                    </div>
                    <div class="box-3-2">

                    </div>
                    <div class="box-3-3">
                        <p>Privacy Policy</p>
                    </div>

                    <div class="box-3-2">

                    </div>
                    <div class="box-3-5">
                        <p>About Us</p>
                    </div>
                    <div class="box-3-2">

                    </div>
                    <div class="box-3-7">
                        Contact Us
                    </div>
                    <div class="box-3-2">

                    </div>

                </div>


                <div class=" box box-4">
                    <p>Lorem ipsum dolor sit amet.</p>
                    <h1>Lorem, ipsum dolor.
                    </h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                    <a href="loginform.php">Join Now</a>
                </div>



            </div>
            <div class="container-two">
                <p>Lorem ipsum dolor sit amet.

                </p>

            </div>
        </div>
    </section>
</body>

</html>