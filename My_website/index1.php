<!-- header section start -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>
</head>
<!-- font awesome css link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- main css file -->
<link rel="stylesheet" href="CSS/project.css">
<!-- <link rel="stylesheet" href="CSS/bootstrap.min.css"> -->

<!--font-generator-->
<link rel="stylesheet" href="https://tools.picsart.com/text/font-generator/">
<!-----font-style link-->
<link rel="stylesheet" href="https://tools.picsart.com/text/font-generator/">

<!-----link of owl carousel--------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />




<body>


    <!------HEADER SECTION STARTS-->

    <header class="header">
        <!-- <img src="IMAGE_FOLDER/logo.png" alt=""> -->
        <a href="#" class="logo">𝕷𝖊𝖆𝖗𝖓𝖎𝖓𝖌 𝖜𝖎𝖙𝖍 𝖒𝖊!</a>

        <nav class="navbar">

            <a href="index.php">
                Home
            </a>

            <a href="User/courses.php">
            Course
            </a>

            <a href="User/paymentstatus.php">
                Payment status
            </a>

            <a href="#review">
            Review
            </a>

            <a href="User/contact.php">
            Contact
            </a>

            <a onclick ="Logout()" href="index.php">
            Logout
            </a>

            <a href="../Student/studentMy_Profile.php">
            My Profile
            </a>

            <script>

function Logout() {
            // Implement functionality to edit profile
            confirm("DO YOU WANT TO LOGOUT..!!");
        }
            </script>

            <!-- <a href="User/login.php">
            Login
            </a> -->

             <!-- <a href="User/registration.php">
            Register
            </a> -->
        
        </nav>

        <div class="menu-btn">
            <span></span>
        </div>
    </header>
    <!------header section ends-------->

<!-- header section ends -->

    <!----banner section starts-->
    <section>
        <div class="banner">
            <div class="banner-desc">
                <h2>"Elevate Your Education, Elevate Your Future"</h2>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo sequi, culpa laboriosam, id provident
                    nulla exercitationem hic doloremque accusantium numquam amet fugit dignissimos nostrum magnam! Eos
                    facilis atque totam Quo sequi, culpa laboriosam, id provident nulla exercitationem hic doloremque
                    accusantium numquam amet fugit dignissimos nostrum magnam! Eos facilis atque </p>

                    <a href="User/registration.php" class="get-started-btn-container">
                        <button class="get-started-btn btn">Get Started!</button>
                    </a>
                
            </div>
            <div class="banner-img">
                <div class="banner-img-container">
                    <img src="IMAGE_FOLDER/teacher3.jpg" alt="">
                    <div class="states">
                        <div class="total-courses">
                            <div class="icon">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div class="desc">
                                <span>
                                    <bold>284+</bold>
                                </span>
                                <span>
                                    <bold>Total Courses</bold>
                                </span>
                            </div>
                        </div>
                        <div class="courses-ratings">
                            <span>4.7 <i class="fa-solid fa-star"></i></span>
                            <span>
                                <bold>Ratings (58K)</bold>
                            </span>

                        </div>

                    </div>
                    <div class="pattern">
                        <img src="IMAGE_FOLDER/dotted.png" alt="">

                    </div>

                </div>

            </div>
        </div>

    </section>

    <!----banner section ends-->



    <!---service sections starts------>
    <section class="services" id="#services">
        <header class="section-header">
            <h1>Why Choose Us?</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, blanditiis. quam corporis
                reprehenderit. Explicabo veniam mollitia labore? In, exercitationem delectus nostrum sit quae autem.</p>

        </header>
        <div class="services-contents">

            <div class="service-box">
                <div class="service-icon">
                    <i class="fa-solid fa-calendar"></i>

                </div>
                <div class="service-desc">
                    <h2>Flexible Timing</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, aliquid temporibus nihil id,
                        similique totam quasi ipsa.</p>

                </div>
            </div>
            <div class="service-box">
                <div class="service-icon">
                    <i class="fa-solid fa-user"></i>

                </div>
                <div class="service-desc">
                    <h2>Expert Teachers</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, aliquid temporibus nihil id,
                        similique totam quasi ipsa.</p>

                </div>
            </div>

            <div class="service-box">
                <div class="service-icon">
                    <i class="fa-solid fa-clock"></i>

                </div>
                <div class="service-desc">
                    <h2>24/7 Live Support</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, aliquid temporibus nihil id,
                        similique totam quasi ipsa.</p>

                </div>
            </div>
        </div>
    </section>
    <!----service section ends--------->


    <!-----courses section starts------------>

    <section class="courses" id="courses">
        <header class="section-header">
            <div class="header-text">
                <h1>Choose Your Favourite Course</h1>
                <p>Education is our passport to the future, for tomorrow belongs only to the people who prepare for it today</p>
            </div>
           <a href="User/courses.php" class="view-btn">View All </a>
        </header>
        <!-----courses section ends------------>
       
        <!-----courses contents starts------------>
        <div class="course-contents">
            <div class="course-card">
                <img src="IMAGE_FOLDER/web development.jpg" alt="">
                <div class="category">
                    <div class="subjects">
                        <h3>Web Developement</h3>
                    </div>
                    <img src="IMAGE_FOLDER/tea 1.webp" alt="">
                </div>
                <h2 class="course-title">Learn Figma: This is some dummy text demonistrating the title.</h2>
                <div class="course-desc">
                    <span> <i class="fa-solid fa-video"></i> 10 Videos</span>
                    <span><i class="fa-solid fa-users"></i> 200+ Students</span>
                </div>
                <div class="course-ratings">
                    <span> 4.9 <i class="fa-solid fa-star"></i></span>
                   
                    <span><b>Rs</b>499</span>
                   <a href="coursedetails.php"><button class="Enroll-btn btn">Enroll</button></a>
                </div>
            </div>

            <div class="course-card">
                <img src="IMAGE_FOLDER/learn-2.jpg" alt="">
                <div class="category">
                    <div class="subjects">
                        <h3>Python Programming</h3>
                    </div>
                    <img src="IMAGE_FOLDER/tea hd 1.jpg" alt=" ">
                </div>
                <h2 class="course-title">Learn Figma: This is some dummy text demonistrating the title.</h2>
                <div class="course-desc">
                    <span> <i class="fa-solid fa-video"></i> 10 Videos</span>
                    <span><i class="fa-solid fa-users"></i> +200+ Students</span>
                </div>
                <div class="course-ratings">
                    <span> 4.9 <i class="fa-solid fa-star"></i></span>
                    <span><b>Rs</b>499</span>
                    <button class="Enroll-btn btn">Enroll</button>

                </div>
            </div>

            <div class="course-card">
                <img src="IMAGE_FOLDER/learn-4.webp" alt="">
                <div class="category">
                    <div class="subjects">
                        <h3>DSA with C/C++</h3>
                    </div>
                    <img src="IMAGE_FOLDER/tea 3.jpg" alt="">
                </div>
                <h2 class="course-title">Learn Figma: This is some dummy text demonistrating the title.</h2>
                <div class="course-desc">
                    <span> <i class="fa-solid fa-video"></i> 50 Videos</span>
                    <span><i class="fa-solid fa-users"></i> 200+ Students</span>
                    
                </div>
                <div class="course-ratings">
                    <span> 4.9 <i class="fa-solid fa-star"></i></span>
                    <span><b>Rs</b>499</span>
                    <button class="Enroll-btn btn">Enroll</button>
                </div>
            </div>


            <div class="course-card">
                <img src="IMAGE_FOLDER/learn-5.jpg" alt="">
                <div class="category">
                    <div class="subjects">
                        <h3>Java with OOPs</h3>
                    </div>
                    <img src="IMAGE_FOLDER/tea hd 2.jpeg" alt="">
                </div>
                <h2 class="course-title">Learn Figma: This is some dummy text demonistrating the title.</h2>
                <div class="course-desc">
                    <span> <i class="fa-solid fa-video"></i> 10 Videos</span>
                    <span><i class="fa-solid fa-users"></i> 200+ Students</span>
                </div>
                <div class="course-ratings">
                    <span> 4.9 <i class="fa-solid fa-star"></i></span>
                    <span><b>Rs</b>200</span>
                    <button class="Enroll-btn btn">Enroll</button>
                </div>
            </div>

            <div class="course-card">
                <img src="IMAGE_FOLDER/learn-6.jpg" alt="">
                <div class="category">
                    <div class="subjects">
                        <h3>Full Stack Development</h3>
                    </div>
                    <img src="IMAGE_FOLDER/tea hd 3.jpeg" alt="">
                </div>
                <h2 class="course-title">Learn Figma: This is some dummy text demonistrating the title.</h2>
                <div class="course-desc">
                    <span> <i class="fa-solid fa-video"></i> 10 Videos</span>
                    <span><i class="fa-solid fa-users"></i> 200+ Students</span>
                </div>
                <div class="course-ratings">
                    <span> 4.9 <i class="fa-solid fa-star"></i></span>
                    <span><b>Rs</b>499</span>
                    <button class="Enroll-btn btn">Enroll</button>
                </div>
            </div>

            <div class="course-card">
                <img src="IMAGE_FOLDER/learn-7.jpg" alt="">
                <div class="category">
                    <div class="subjects">
                        <h3>Machine laerning </h3>
                    </div>
                    <img src="IMAGE_FOLDER/tea hd 4.jpeg" alt="">
                </div>
                <h2 class="course-title">Learn Figma: This is some dummy text demonistrating the title.</h2>
                <div class="course-desc">
                    <span> <i class="fa-solid fa-video"></i> 50 Videos</span>
                    <span><i class="fa-solid fa-users"></i> 200+ Students</span>
                </div>
                <div class="course-ratings">
                    <span> 4.9 <i class="fa-solid fa-star"></i></span>
                    <span><b>Rs</b>499</span>
                    <button class="Enroll-btn btn">Enroll</button>
                </div>
            </div>


            <div class="course-card">
                <img src="IMAGE_FOLDER/learn-8.jpg" alt="">
                <div class="category">
                    <div class="subjects">
                        <h3>Machine laerning </h3>
                    </div>
                    <img src="IMAGE_FOLDER/tea 1.webp" alt="">
                </div>
                <h2 class="course-title">Learn Figma: This is some dummy text demonistrating the title.</h2>
                <div class="course-desc">
                    <span> <i class="fa-solid fa-video"></i> 10 Videos</span>
                    <span><i class="fa-solid fa-users"></i> 200+ Students</span>
                </div>
                <div class="course-ratings">
                    <span> 4.9 <i class="fa-solid fa-star"></i></span>
                    <span><b>Rs</b>499</span>
                    <button class="Enroll-btn btn">Enroll</button>
                </div>
            </div>

            <div class="course-card">
                <img src="IMAGE_FOLDER/learn-9.jpg" alt="">
                <div class="category">
                    <div class="subjects">
                        <h3>Machine laerning </h3>
                    </div>
                    <img src="IMAGE_FOLDER/tea 5.jpg" alt="">
                </div>
                <h2 class="course-title">Learn Figma: This is some dummy text demonistrating the title.</h2>
                <div class="course-desc">
                    <span> <i class="fa-solid fa-video"></i> 10 Videos</span>
                    <span><i class="fa-solid fa-users"></i> 200+ Students</span>
                </div>
                <div class="course-ratings">
                    <span> 4.9 <i class="fa-solid fa-star"></i></span>
                    <span><b>Rs</b>499</span>
                    <button class="Enroll-btn btn">Enroll</button>
                </div>
            </div>

            <div class="course-card">
                <img src="IMAGE_FOLDER/learn-10.jpg" alt="">
                <div class="category">
                    <div class="subjects">
                        <h3>Machine laerning </h3>
                    </div>
                    <img src="IMAGE_FOLDER/tea 6.jpeg" alt="">
                </div>
                <h2 class="course-title">Learn Figma: This is some dummy text demonistrating the title.</h2>
                <div class="course-desc">
                    <span> <i class="fa-solid fa-video"></i> 10 Videos</span>
                    <span><i class="fa-solid fa-users"></i> 200+ Students</span>
                </div>
                <div class="course-ratings">
                    <span> 4.9 <i class="fa-solid fa-star"></i></span>
                    <span><b>Rs</b>499</span>
                    <button class="Enroll-btn btn">Enroll</button>
                </div>
            </div>
        </div>
    </section>
    <!-----courses contents ends------------>

    <!-----courses category section starts------------>

    <section class="categories" id="categories">
        <header class="section-header">
            <h1>Brouse Courses By categories</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sapiente laudantium doloribus officiis
                quisquam in.</p>
        </header>
        <div class="categories-contents">

            <div class="category-item">
                <div class="category-icon">
                    <!-- <i class="fa-solid fa-palette"></i> -->
                    <img src="IMAGE_FOLDER/designing logo.png" alt="" heigth="100">

                </div>
                <div class="category-desc">
                    <h3>
                        <center>Web Designing</center>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum quia esse asperiores, quod nulla
                        inventore dignissimos quibusdam.</p>

                </div>
            </div>

            <div class="category-item">
                <div class="category-icon">
                    <!-- <i class="fa-solid fa-code"></i>  -->
                    <img src="IMAGE_FOLDER/full stack logo.jpg" alt="" height="100">
                </div>
                <div class="category-desc">
                    <h3>Full Stack Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus minima earum quis. Quod nostrum
                        eius dolorem, dolores repudiandae.</p>

                </div>
            </div>

            <div class="category-item">
                <div class="category-icon">
                    <!-- <i class="fa-solid fa-bullhorn"></i> -->
                    <img src="IMAGE_FOLDER/marketing.png" alt="" heigth="100">

                </div>
                <div class="category-desc">
                    <h3> Digital Marketing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus minima earum quis. Quod nostrum
                        eius dolorem, dolores repudiandae.</p>

                </div>
            </div>
            <div class="category-item">
                <div class="category-icon">
                    <!-- <i class="fa-solid fa-brain"></i> -->
                    <img src="IMAGE_FOLDER/ai.jpg" alt="" height="100">

                </div>
                <div class="category-desc">
                    <h3>Artificial Intelligence</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus minima earum quis. Quod nostrum
                        eius dolorem, dolores repudiandae.</p>

                </div>
            </div>

            <div class="category-item">
                <div class="category-icon">
                    <!-- <i class="fa-brands fa-python"></i> -->
                    <img src="IMAGE_FOLDER/python.jpg" alt="" height="100">

                </div>
                <div class="category-desc">
                    <h3>
                        <center>Python</center>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus minima earum quis. Quod nostrum
                        eius dolorem, dolores repudiandae.</p>

                </div>
            </div>

            <div class="category-item">
                <div class="category-icon">
                    <!-- <i class="fa-brands fa-java"></i> -->
                    <img src="IMAGE_FOLDER/java logo.png" alt="" height="100">

                </div>
                <div class="category-desc">
                    <h3>
                        <center>Java with OOps</center>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus minima earum quis. Quod nostrum
                        eius dolorem, dolores repudiandae.</p>

                </div>
            </div>

            <div class="category-item">
                <div class="category-icon">
                    <!-- <i class="fa-duotone fa-gear"></i> -->
                    <img src="IMAGE_FOLDER/c++ logo.png" alt="" height="100">

                </div>
                <div class="category-desc">
                    <h3>
                        <center>C/C++</center>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus minima earum quis. Quod nostrum
                        eius dolorem, dolores repudiandae.</p>

                </div>
            </div>

            <div class="category-item">
                <div class="category-icon">
                    <!-- <i class="fa-solid fa-code"></i> -->
                    <img src="IMAGE_FOLDER/web development.jpg" alt="" height="100">


                </div>
                <div class="category-desc">
                    <h3>Web Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus minima earum quis. Quod nostrum
                        eius dolorem, dolores repudiandae.</p>

                </div>
            </div>
        </div>
    </section>
    <!-----courses category section ends------------>


    <!------------teacher Section starts-------------------->
    <section class="instructor">

        <div class="instructor-container">
            <!-- <img src="IMAGE_FOLDER/teacher2.jpg" alt=""> -->
            <h2>Become an Eminent Person with Bright Future Platform.</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore non nobis, vero, ab minus a natus
                necessitatibus tempora molestiae facere, aperiam quisquam id maxime vel modi qui? Perspiciatis,
                provident laboriosam.</p>
            <button class="teacher-btn btn">Your details</button>
        </div>
    </section>

    <!-------------Teacher section ends---------------------->


    <!-- review section starts -->
    <div class="testimonials">
        <div class="inner">
            <h1>My Reviews</h1>
            <div class="border"></div>

            <div class="row">
                <div class="col">
                    <div class="testimonial">
                        <img src="IMAGE_FOLDER/person 1.jpg" alt="">
                        <div class="name">John Peterson</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ex nisi minus incidunt
                            deleniti labore praesentium harum quis magni delectus sint, veritatis vero excepturi
                            reiciendis natus at necessitatibus alias cumque.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="IMAGE_FOLDER/person 2.webp" alt="">
                        <div class="name">Weldom Cocks</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ex nisi minus incidunt
                            deleniti labore praesentium harum quis magni delectus sint, veritatis vero excepturi
                            reiciendis natus at necessitatibus alias cumque.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="IMAGE_FOLDER/person 3.png" alt="">
                        <div class="name">Anders Shaak</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ex nisi minus incidunt
                            deleniti labore praesentium harum quis magni delectus sint, veritatis vero excepturi
                            reiciendis natus at necessitatibus alias cumque.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="IMAGE_FOLDER/person 4.jpg" alt="">
                        <div class="name">Chase Laith</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ex nisi minus incidunt
                            deleniti labore praesentium harum quis magni delectus sint, veritatis vero excepturi
                            reiciendis natus at necessitatibus alias cumque.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="IMAGE_FOLDER/person 5.webp" alt="">
                        <div class="name">Cameron John</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ex nisi minus incidunt
                            deleniti labore praesentium harum quis magni delectus sint, veritatis vero excepturi
                            reiciendis natus at necessitatibus alias cumque.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="IMAGE_FOLDER/person 6.png" alt="">
                        <div class="name">Calder Sume</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ex nisi minus incidunt
                            deleniti labore praesentium harum quis magni delectus sint, veritatis vero excepturi
                            reiciendis natus at necessitatibus alias cumque.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="IMAGE_FOLDER/person 7.jpeg" alt="">
                        <div class="name">La Vergne</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ex nisi minus incidunt
                            deleniti labore praesentium harum quis magni delectus sint, veritatis vero excepturi
                            reiciendis natus at necessitatibus alias cumque.</p>
                    </div>
                </div>

                <div class="col">
                    <div class="testimonial">
                        <img src="IMAGE_FOLDER/person 8.webp" alt="">
                        <div class="name">Sutton Shea</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ex nisi minus incidunt
                            deleniti labore praesentium harum quis magni delectus sint,reiciendis natus at necessitatibus alias cumque.
                                </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- review section ends -->

<!-- ---------------------------------------------------------- -->
<!-- information section starts -->




<!-- information section ends -->

<!-- ---------------------------------------------------------- -->

    <!-- footer section starts -->

    <?php
    include('./User/footer.php');

    ?>
    <!--footer section ends -->


