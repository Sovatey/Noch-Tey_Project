<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Cambodia</title>
    <link rel="icon" href="./assets/img/bc.png">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/Bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700&family=Lato:wght@300;400;700&family=Roboto:wght@100;300;400;500;700&family=Titillium+Web:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include("header.php"); ?>
    <div id="carouselExampleIndicators" class="carousel container-fluid slide_header p-0 slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner h-100">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <div class="carousel-item active h-100 position-relative">
                            <img src="./assets/img/slide.jpg" class="d-block w-100 h-100 position-absolute" alt="...">
                            <div class="container-fluid nth h-100 position-absolute d-flex align-items-center">
                                <div class="slide_header_details">
                                    <h1><a class="text-white" href="./news_details.php">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</a></h1>
                                    <p>Kan Dara • ភាពជាអ្នកដឹកនាំ • January 30 2023</p>
                                    <a href=""><button class="read">បន្តការអាន</button></a>
                                    <a href=""><button class="writer">អំពីអ្នកនិពន្ធ</button></a>
                                </div>  
                            </div>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>

    <!-- ad -->
    <div class="container-fluid ad_block p-0 d-flex align-items-center">
        <div class="ad_block_details">
            <p>ការផ្សាយពាណិជ្ជកម្មរបស់យើង</p>
            <div class="line"></div>
        </div>
        <div class="ad_block_img d-flex">
            <a href="">
                <img src="./assets/img/ad.jpeg" alt="">
            </a>
        </div>
    </div>


    <div class="container-fluid main_body_slide">
        <div class="container-fluid body_sldie p-0">
            <h1>អត្ថបទពេញនិយមសរុប <span><a href="">មើល​បន្ថែម​</a></span></h1>
            <div class="container-fluid p-0 body_slide_block d-flex justify-content-between">
                <div class="body_left h-100 position-relative">
                    <img src="./assets/img/slide.jpg" class="h-100 w-100 position-absolute" alt="...">
                    <div class="container-fluid nth h-100 position-absolute d-flex align-items-center">
                        <div class="body_left_details">
                            <p class="text-white">ភាពជាអ្នកដឹកនាំ</p>
                            <div class="line"></div>
                            <h3><a href="./news_details.php">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</a></h3>
                        </div>
                    </div>
                </div>
                <div class="body_right h-100">
                    <div class="body_right_top w-100 position-relative">
                        <img src="./assets/img/slide.jpg" class="h-100 w-100 position-absolute" alt="...">
                        <div class="container-fluid nth h-100 position-absolute d-flex align-items-center">
                            <div class="body_right_details">
                                <p class="text-white">ភាពជាអ្នកដឹកនាំ</p>
                                <div class="line"></div>
                                <h3><a href="./news_details.php">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="body_right_bottom w-100 position-relative">
                        <img src="./assets/img/slide.jpg" class="h-100 w-100 position-absolute" alt="...">
                        <div class="container-fluid nth h-100 position-absolute d-flex align-items-center">
                            <div class="body_right_details">
                                <p class="text-white">ភាពជាអ្នកដឹកនាំ</p>
                                <div class="line"></div>
                                <h3><a href="./news_details.php">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>អត្ថបទពេញនិយមប្រចាំខែ</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#ភាពជាអ្នកដឹកនាំ</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>អត្ថបទថ្មីៗ</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#ភាពជាអ្នកដឹកនាំ</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>ចាប់ផ្តើមអាជីវកម្ម</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#ចាប់ផ្តើមអាជីវកម្ម</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>អចលនទ្រព្យ</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#អចលនទ្រព្យ</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>ភាពជាអ្នកដឹកនាំ</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#ភាពជាអ្នកដឹកនាំ</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>ហិរញ្ញវត្ថុ</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#ហិរញ្ញវត្ថុ</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>កំពូលអ្នកលក់</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#កំពូលអ្នកលក់</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>មុខរបរកសិកម្ម</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#មុខរបរកសិកម្ម</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>មុខរបរបច្ចេកវិទ្យា</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#មុខរបរបច្ចេកវិទ្យា</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>អត្ថបទ PR</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#អត្ថបទ PR</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>ពិព័រណ៍មុខរបរ 2022</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#ពិព័រណ៍មុខរបរ 2022</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->
    <!-- news_ content -->
    <div class="container-fluid news_bar p-0 d-flex align-items-center">
        <div class="news_bar_details">
            <p>របាយការណ៍</p>
            <div class="line"></div>
            <a href=""><button>មើល​បន្ថែម​</button></a>
        </div>
        <div class="news_block">
            <?php
                for($i=1 ; $i<=3 ; $i++){
                    echo'
                        <a class="text-decoration-none" href="./news_details.php">
                            <div class="news_box">
                                <div class="news_box_img">
                                    <img src="./assets/img/slide.jpg" class="h-100 w-100" alt="...">
                                </div>
                                <div class="container p-0 news_box_text">
                                    <span>#របាយការណ៍</span>
                                    <p class="block_txt_title mt-2">មានអ្វីថ្មីខ្លះ? មកដឹងលក្ខណៈពិសេសទាំង១១ ដែល iPhone 14 ញ៉ាត់ចូលក្នុងទូរស័ព្ទម៉ូឌែលថ្មីរបស់ខ្លួន</p>
                                    <div class="news_writer d-flex align-items-center">
                                        <img width="48px" height="48px" src="./assets/img/writer.jpg" alt="">
                                        <div class="writer_details">
                                            <b>Meoww</b>
                                            <h6>January 30 2023</h6>
                                            <p>100 views</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                }
            ?>
        </div>
    </div>
    <!-- end_news_ content -->

    <!-- footer -->
    <div class="container-fluid footer_img p-0">
        <img width="100%" height="100%" src="./assets/img/footer.png" alt="">
    </div>
    <div class="container-fluid footer p-0">
        <div class="container-fluid footer_block p-0 d-flex justify-content-between">
            <div class="footer_block_left">
                <p>ស្វែងយល់អំពីពួកយើង</p>
                <a href="">អំពីពួកយើង</a><br><br>
                <h4>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-tiktok"></i>
                    <i class="fa-brands fa-telegram"></i>
                </h4>
                <span>sam.businesscambodia@gmail.com</span>
            </div>
            <div class="footer_block_center">
                <p class="text-center">អត្ថបទផ្សេងៗ</p>
                <div class="container-fluid p-0 footer_block_center_menu">
                    <div class="row h-100">
                        <div class="col-6 h-100">
                            <ul class="navbar-nav">
                                <li><a href="">ព័ត៌មានថ្មីៗ</a></li>
                                <li><a href="">ចាប់ផ្តើមអាជីវកម្ម</a></li>
                                <li><a href="">អចលនទ្រព្យ</a></li>
                                <li><a href="">ភាពជាអ្នកដឹកនាំ</a></li>
                                <li><a href="">ហិរញ្ញវត្ថុ</a></li>
                                <li><a href="">កំពូលអ្នកលក់</a></li>
                            </ul>
                        </div>
                        <div class="col-6 h-100">
                            <ul class="navbar-nav">
                                <li><a href="">មុខរបរកសិកម្ម</a></li>
                                <li><a href="">មុខរបរបច្ចេកវិទ្យា</a></li>
                                <li><a href="">អត្ថបទ PR</a></li>
                                <li><a href="">ពិព័រណ៍មុខរបរ 2022</a></li>
                                <li><a href="">របាយការណ៍</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_block_right">
                <p>ទំនាក់ទំនងមកពួកយើង</p>
                <h6>017 300 755/093 300 755</h6>
                <span>Building 422 St. 271, Phum 1, Stung Mean Khan MeanChey, Phnom Penh</span>
            </div>
        </div>
        <div class="container footer_end text-center text-white">
            <b>Business Cambodia</b>
            <p>បំផុសគំនិតរកស៊ី នាំមនុស្សឱ្យហ៊ានចេញរកស៊ីតាមក្ដីស្រមៃ</p>
        </div>
    </div>
    <div class="container-fluid p-0 end d-flex justify-content-around align-items-center">
        <span>© 2022 Baksey Media. All Rights Reserved.</span>
        <span>Developed by: Ngoytry Lyhuor</span>
    </div>

</body>
</html>
<script src="./assets/script/navbar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>