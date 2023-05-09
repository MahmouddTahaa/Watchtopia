<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Watchtopia</title>
    <style>
      .x {
        text-decoration: none;
        color:white;
        border: none;
        padding: 0px 15px 0px 15px;
        margin-left: 20px;
        transition: background-color 0.2s, color 0.2s, border-color 0.2s;
      }
      .x:hover {
        color: red;
        ;
      }
    </style>
    <!-- Render all elements in normal mode File  -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Font awesome File -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Main Css File -->
    <link rel="stylesheet" href="css/master.css">
    <link rel="icon" type="image/x-icon" href="images/W.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
    <body>
        <div class="btn-go-to-top">
            <a href="#" class="gototop">
                <i class="fa-solid fa-arrow-up"></i>
            </a>
        </div>

        <header>
            <div class="container">
                <div class="logo">
                    <h1 style="text-transform: uppercase; cursor: pointer;">watch<span>topia</span></a></h1>
                </div>

                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>
                        <a href="#movie">movie</a>
                    </li>
                    <li>
                        <a href="#tv-show">tv show</a>
                    </li>
                    <li>
                        <a href="#series">web series</a>
                    </li>
                    <li>
                        <a href="#footer">pricing</a>
                    </li>
                </ul>

                <div class="control">
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="lang-wrapper">
                        <label for="language">
                            <i class="fa-solid fa-earth-americas"></i>
                        </label>
        
                        <select name="language" id="language">
                            <option value="en">EN</option>
                            <option value="au">AU</option>
                            <option value="ar">AR</option>
                            <option value="tu">TU</option>
                        </select>
                    </div>
        
                    <div class="profile-btn">
                        <a href="profile.html">
                            <i class="fa-solid fa-circle-user"></i>
                        </a>
                    </div>
                    <div class="user" style="color: white;">
                        <?php if (isset($user)): ?>
                          <p>Hello, <?= htmlspecialchars($user["name"]) ?></p>
                        <?php else: ?>
    <?php endif; ?></div>
                    <div class="user" style="color: white;"><a class="x" href="./logout.php">Log Out</a></div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <p>unlimited <span>movie</span>, tVs shows, & more.</p>
                    <div class="main-wrapper">
                        <div class="badge-wrapper">
                            <div class="badge badge-fill">PG 18</div>
                            <div class="badge badge-outline">HD</div>
                        </div>
                        <div class="ganre-wrapper">
                            <a href="#">Romance,</a>
                            <a href="#">Drama</a>
                        </div>
                        <div class="date-time">
                            <div>
                                <i class="fa-solid fa-calendar"></i>
                                <time datetime="2022">2022</time>
                            </div>
                            <div>
                                <i class="fa-regular fa-clock"></i>
                                <time datetime="PT128M">128 min</time>
                            </div>
                        </div>
                    </div>
                    <div class="watchnow">
                        <button class="btn btn-watchnow">
                            <i class="fa-solid fa-play"></i>
                            watch now
                        </button>
                    </div>
                </div>
            </section>

            <section class="upcoming" id="tv-show">
                <div class="container">
                    <div class="upcoming-heading">
                        <div class="info">
                            <p>online streaming</p>
                            <h1>upcoming movies</h1>
                        </div>
                        <div class="actions">
                            <button>movies</button>
                            <button>series</button>
                            <button>anime</button>
                        </div>
                    </div>
                    <div class="movies">
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/upcoming-1.png" alt="">
                            </a>
                            <div class="movie-info">
                                <h3>Sonic</h3>
                                <div class="date">
                                    <i class="fa-solid fa-star"></i>
                                    <p class="movie-date">2022</p>
                                </div>
                            </div>
                            <div class="details">
                                <div class="movie-quality">
                                    4k
                                </div>
                                <div class="movie-time">
                                    <i class="fa-regular fa-clock"></i>
                                    <time datetime="PT128M">128 min</time>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/upcoming-2.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>morbius</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/upcoming-3.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>the adam project</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/upcoming-4.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>free guy</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="top" id="movie">
                <div class="container">
                    <div class="top-heading">
                        <div class="info">
                            <p>online streaming</p>
                            <h1>top rated movies</h1>
                        </div>
                        <div class="actions">
                            <button>movies</button>
                            <button>tv shows</button>
                            <button>documentary</button>
                            <button>sports</button>
                        </div>
                    </div>
                    <div class="movies">
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/movie-1.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>free guy</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/movie-2.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>free guy</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/movie-3.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>free guy</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/movie-4.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>free guy</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/movie-5.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>free guy</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/movie-6.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>free guy</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/movie-7.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>free guy</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/movie-8.png" alt="">
                            </a>
                            <div class="movie-info">
                                <h3>free guy</h3>
                                <div class="date">
                                    <i class="fa-solid fa-star"></i>
                                    <p class="movie-date">2022</p>
                                </div>
                            </div>
                            <div class="details">
                                <div class="movie-quality">
                                    4k
                                </div>
                                <div class="movie-time">
                                    <i class="fa-regular fa-clock"></i>
                                    <time datetime="PT128M">128 min</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="series" id="series">
                <div class="container">
                    <div class="series-heading">
                        <div class="info">
                            <p>online streaming</p>
                            <h1>world best tV series</h1>
                        </div>
                    </div>
                    <div class="movies">
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/series-1.png" alt="">
                            </a>
                            <div class="movie-info">
                                <h3>Sonic</h3>
                                <div class="date">
                                    <i class="fa-solid fa-star"></i>
                                    <p class="movie-date">2022</p>
                                </div>
                            </div>
                            <div class="details">
                                <div class="movie-quality">
                                    4k
                                </div>
                                <div class="movie-time">
                                    <i class="fa-regular fa-clock"></i>
                                    <time datetime="PT128M">128 min</time>
                                </div>
                            </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/series-2.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>morbius</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                            <a href="film.html">
                                <img src="images/series-3.png" alt="">
                            </a>
                                <div class="movie-info">
                                    <h3>the adam project</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                        <div class="movie-card">
                                <a href="film.html">
                                    <img src="images/series-4.png" alt="">
                                </a>
                                <div class="movie-info">
                                    <h3>free guy</h3>
                                    <div class="date">
                                        <i class="fa-solid fa-star"></i>
                                        <p class="movie-date">2022</p>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="movie-quality">
                                        4k
                                    </div>
                                    <div class="movie-time">
                                        <i class="fa-regular fa-clock"></i>
                                        <time datetime="PT128M">128 min</time>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer" id="footer">
            <div class="footer-container">
                <div class="footer-lists">
                    <ul>
                        <li class="list-head">BROWSE</li>
                        <li><a href="#">TV Shows</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">Originals</a></li>
                        <li><a href="#">Live Sports</a></li>
                    </ul>
                    <ul>
                        <li class="list-head">HELP</li>
                        <li><a href="#">Account & Billing</a></li>
                        <li><a href="#">Plans & Pricing</a></li>
                        <li><a href="#">Supported Devices</a></li>
                        <li><a href="#">Accesibility</a></li>
                    </ul>
                    <ul>
                        <li class="list-head">ABOUT US</li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="divider"></div>
        
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
                window.onscroll = function() {
                if (window.scrollY > 0) {
                    document.getElementsByTagName("header")[0].classList.add("change");
                } else {
                    document.getElementsByTagName("header")[0].classList.remove("change");
                }
                };
        </script>
    </body>
</html>
