<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warung Putu Pandita | Termurah</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <!-- jQUery-->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>



</head>

<body>

    <!-- header section starts      -->

    <header>

        <a href="" class="logo"><i class=" "></i>Putu Pandita</a>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#dishes">recomended</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#order">pemesanan</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <a class="fa-solid fa-user-plus" id="search-icon" href='<?php site_url() ?>index.php/Auth/login'></a>
            <a href="<?= base_url() ?>index.php/register" i class="fa-solid fa-right-to-bracket"></i>
                <a href="#order" class="fas fa-shopping-cart"></a>
        </div>

    </header>

    <!-- header section ends-->
    <!-- class="fas fa-search" -->
    <!-- search form  -->

    <form action="" id="search-form">
        <input type="admin" placeholder="Username" name="" id="search-box">
        <input type="password" placeholder="Password" name="" id="search-box" class="idbox">
        <input type="checkbox" id="pass">
        <label for="checkbox" id="pass">show password</label>
        <label for="search-box"></label>
        <button type="submit" name="btnSub" class="btnSubmit" id="id_btnsub" value="Submit"><a
                href="form.html">Submit</a></button>

        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="swiper-container home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>menu recomended</span>
                        <h3>Spagetti Keju</h3>
                        <p>Spagetti terenak di Griya Nasti dimasak dengan bumbu beef dan parutan keju</p>
                        <a href="#" class="btn">pesan sekarang</a>
                    </div>
                    <div class="image">
                        <img src="<?= base_url() ?>assets/images/home-img-1.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>menu recomended</span>
                        <h3>Nasi Omlete</h3>
                        <p>nasi dengan telur goreng saos</p>
                        <a href="#" class="btn">pesan sekarang</a>
                    </div>
                    <div class="image">
                        <img src="<?= base_url() ?>assets/images/omlete.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>menu recomended</span>
                        <h3>pizza</h3>
                        <p>pizza dengan lapisan keju dan saos serta topping jamur, keju, blueberry, dan daun jeruk</p>
                        <a href="#" class="btn">pesan sekarang</a>
                    </div>
                    <div class="image">
                        <img src="<?= base_url() ?>assets/images/home-img-3.png" alt="">
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- dishes section starts  -->

    <section class="dishes" id="dishes">

        <h3 class="sub-heading"> menu kami </h3>
        <h1 class="heading"> menu populer </h1>

        <div class="box-container">

            <div class="box">

                <img src="<?= base_url() ?>assets/images/dish-1.png" alt="">
                <h3>burger</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>Rp.12.000,00</span>
            </div>

            <div class="box">

                <img src="<?= base_url() ?>assets/images/dish-2.png" alt="">
                <h3>nugget ayam</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rp.15.000,00</span>
            </div>

            <div class="box">

                <img src="<?= base_url() ?>assets/images/dish-3.png" alt="">
                <h3>ayam goreng</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rp.13.000,00</span>
            </div>

            <div class="box">

                <img src="<?= base_url() ?>assets/images/Mie ayam.png" alt="">
                <h3>Mie Ayam</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rp.10.000,00</span>
            </div>

            <div class="box">

                <img src="<?= base_url() ?>assets/images/nasigoreng.png" alt="">
                <h3>Nasi Goreng</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rp.17.000,00</span>
            </div>

            <div class="box">

                <img src="<?= base_url() ?>assets/images/dish-6.png" alt="">
                <h3>Fried Chicken</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rp.13.000,00</span>
            </div>

            <div class="box">

                <img src="<?= base_url() ?>assets/images/seblak.png" alt="">
                <h3>Seblak</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-none-alt"></i>
                </div>
                <span>Rp.10.000,00</span>
            </div>

            <div class="box">

                <img src="<?= base_url() ?>assets/images/kwetiaw.png" alt="">
                <h3>Kwetiaw</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-none-alt"></i>
                </div>
                <span>Rp.14.000,00</span>
            </div>

        </div>

    </section>

    <!-- dishes section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h3 class="sub-heading"> tentang kami </h3>
        <h1 class="heading"> kenapa pilih kami? </h1>

        <div class="row">

            <div class="image">
                <img src="<?= base_url() ?>assets/images/about-img.png" alt="">
            </div>

            <div class="content">
                <h3>makanan terenak dan termurah di daerah Sukabirus</h3>
                <p>Sukabirus sebagai tempat yang terkenal akan kehidupan kostnya harus tetap memiliki tempat makan
                    spesial dengan tingkat kelezatan dan kenbershiannya baik namum harga tetap ramahh dikantong para
                    mahasiswa</p>
                <p>Oleh karena itu kami hadir untuk membantu anak kost Telkom University untuk memiliki refrensi makanan
                    yang enak, bersih, dan juga murah</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h3 class="sub-heading"> Piihan menu </h3>
        <h1 class="heading"> Menu andalan hari ini </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="<?= base_url() ?>assets/images/menu-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Pizza</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p>A dish of Italian origin consisting of a flat, round base of dough baked with a topping of tomato
                        sauce and cheese, typically with added meat or vegetables.</p>
                    <span class="price">Rp40.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url() ?>assets/images/menu-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Burger</h3>
                    <p>a dish consisting of a round patty of ground beef, or sometimes another savory ingredient, that
                        is fried or grilled and typically served in a split bun</p>

                    <span class="price">Rp12.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url() ?>assets/images/menu-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Crepes</h3>
                    <p>Unlike pancakes, crêpes are much thinner because they aren't made with baking powder, as are
                        pancakes. Since they are thinner, they tend to be a tad crispier as well.</p>
                    <span class="price">Rp9.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url() ?>assets/images/menu-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Ice Cream Waffle</h3>
                    <p>Ice cream, frozen dairy food made from cream or butterfat, milk, sugar, and flavourings. Frozen
                        custard and French-type ice creams also contain eggs.</p>
                    <span class="price">Rp9.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url() ?>assets/images/menu-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Pancake Custard</h3>
                    <p>A pancake is a flat cake, often thin and round, prepared from a starch-based batter that may
                        contain eggs, milk and butter and cooked on a hot surface such as a griddle or frying pan, often
                        frying with oil or butter. It is a type of batter bread.</p>
                    <span class="price">Rp10.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url() ?>assets/images/menu-6.jpg" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Cupcake</h3>
                    <p>A cupcake (also British English: fairy cake; Hiberno-English: bun) is a small cake designed to
                        serve one person, which may be baked in a small thin paper or aluminum cup. As with larger
                        cakes, frosting and other cake decorations such as fruit or candy.</p>
                    <span class="price">Rp6.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url() ?>assets/images/menu-7.jpg" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Mocktail</h3>
                    <p>A non-alcoholic mixed drink (also known as virgin cocktail, temperance drink or mocktail) is a
                        cocktail-style beverage made without alcoholic ingredients.
                        Also called "zero proof" drinks, the non-alcoholic drink appearing as 'Temperance drinks'.</p>
                    <span class="price">Rp17.000</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url() ?>assets/images/menu-8.jpg" alt="">
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Smoothie yoghurt</h3>
                    <p>A smoothie is a beverage made by puréeing ingredients in a blender. A smoothie commonly has a
                        liquid base, such as fruit juice or milk, yogurt, ice cream or cottage cheese. Other ingredients
                        may be added, including fruits, vegetables, non-dairy milk.</p>
                    <span class="price">Rp18.000</span>
                </div>
            </div>



        </div>

    </section>

    <!-- menu section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h3 class="sub-heading"> Review pelanggan </h3>
        <h1 class="heading">What They Say? </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="<?= base_url() ?>assets/images/review1.png" alt="">
                        <div class="user-info">
                            <h3>User 1</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="" alt="">
                        <div class="user-info">
                            <h3>User 2</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-none-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="" alt="">
                        <div class="user-info">
                            <h3>User 3</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="<?= base_url() ?>assets/images/review4.png" alt="">
                        <div class="user-info">
                            <h3>User 4</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- order section starts  -->

    <section class="order" id="order">

        <h3 class="sub-heading"> pesan sekarang </h3>
        <h1 class="heading"> gratis ongkir daerah telkom </h1>

        <form action="">

            <div class="inputBox">
                <div class="input">
                    <span>Nama Lengkap</span>
                    <input type="text" placeholder="Masukkan Nama anda">
                </div>
                <div class="input">
                    <span>No. handphone</span>
                    <input type="number" placeholder="Masukkan Nomor anda">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Pesanan anda</span>
                    <input type="text" placeholder="Masukkan nama makanan anda">
                </div>

            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Banyak Pesanan</span>
                    <input type="number" id="quantity" placeholder="Berapa pesanan anda">
                </div>

            </div>
            <div class="inputBox">
                <div class="input">
                    <span>Alamat Lengkap anda</span>
                    <textarea name="" placeholder="Masukkan alamat anda" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>Note</span>
                    <textarea name="" placeholder="pesan untuk kami" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <input type="submit" value="Submit" class="btn">

        </form>

    </section>

    <!-- order section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>locations</h3>
                <a href="#">Jl. Sukabirus No. 103</a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">dishes</a>
                <a href="#">about</a>
                <a href="#">menu</a>
                <a href="#">reivew</a>
                <a href="#">order</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+6283-313-1246</a>
                <a href="#">kamunanyeaa@gmail.com</a>
                <a href="#">Bandung, Indonesia - 17510</a>
            </div>

        </div>

        <div class="credit">Design by Kelompok Tubes Webpro <span>Kelompok 2</span> </div>

    </section>

    <!-- footer section ends -->

    <!-- loader part  -->
    <!-- <div class="loader-container">
    <img src="assets/images/loader.gif" alt="">
</div> -->

    <!-- Jquery -->
    <script>
    $("#pass").click(function() {
        if ($("#pass").prop("checked")) {
            $(".idbox").attr("type", "text")
        } else {
            $(".idbox").attr("type", "password")
        }
    })
    </script>




    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="<?= base_url() ?>assets/js/script.js"></script>

</body>

</html>