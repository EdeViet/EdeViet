<!doctype html>
<html lang="en">

<head>
<title>Home</title>
<link rel="stylesheet" href="search.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@538&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assests\icon\themify-icons\themify-icons.css">
<link rel="stylesheet" href="../assests/icon/cssgg.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
// if(isset($_POST['submit'])) {
//     $timkiem = $_POST['submit'];
//     include "search.php";
// }else{

// }
?>
<div class="main">
    <div id="page">
        <div id="header">
            <div id="container">
                <ul id="navbar">
                    <li>
                        <a href="index.php">
                            <i class="icon ti-home"></i>
                            <span class="text">Trang chủ</span>
                        </a>
                    </li>
                    <li>
                        <a href="news\read\news.html">
                            <i class="icon ti-ink-pen"></i>
                            <span class="text">Tin tức</span>
                        </a>
                    </li>
                    <li>
                        <a href="Blog\blog.html">
                            <i class="icon ti-book"></i>
                            <span class="text">Bài viết</span>
                        </a>
                    </li>
                </ul>
                <div id="logo">
                    <a href="../index.php">
                    <h1 class="text">EdVie</h1>
                </a>
                </div>
                <!--    cuối header -->
                <div id="end_nav">
                    <div id="logn_in">
                        <i class="icon ti-user"></i>
                        <a href="/sign in/signin.html">
                            <span class="sign_in">Đăng nhập</span>
                        </a>
                        <span class="line">/</span>
                        <a href="/sign up/signup.html">
                            <span class="sign_up">Đăng ký</span>
                        </a>
                    </div>
                    <div id="language">
                        <i class="icon ti-world"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- //<div class="search"> -->
            <form action=""  class="search" method="POST" style="    display: flex; align-items: center; justify-content: center;">
                <div class="header_search">
                    <input name="search" type="text" 
                    placeholder="Tra cứu Việt-Êde" id="search_input"class="search_input"/>
                    <?php if(isset($_POST["search"])) { 
                        $timkiem= $_POST["search"];
                        include "change.php";
                    }?>
                    <div class="header_select">
                        <span class="header_search-select-label">Tiếng Việt</span>
                        <i class="ti-angle-down"></i>
                        <ul class="header_search-select-option">
                            <li class="header_search-option-items">
                                Tiếng Êde
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="submit" onclick="myFunction()" id="search_icon"class="search_icon" >
                    <i class="ti-search"></i> 
                </button>
            </form> 
            
            
        <!-- //</div> -->
        <div class="frame">
            <?php if (isset($_GET["tu"]))?>
                <div class="frame-word"> <?php echo $_GET["tu"]; ?></div>
                <div class="line"></div>
                <div class="frame_content">
                    <?php
                        require_once('../connection.php');
                        $tu = $_GET["tu"];
                        $result = mysqli_query($conn, "SELECT * FROM test.dsds WHERE tu='$tu'");
                        $data = mysqli_fetch_array($result);
                    ?> 
                    <div class="frame_content-means">
                        <div class="headline">Nghĩa:</div>
                        <div class="text"> <?php echo $data['nghia'];?></div><!--echo $data['nghia2']; echo $data['nghia3']; echo $data['nghia4'] -->
                    </div>
                    <div class="line"></div>
                    <div class="frame_content-example">
                        <div class="headline">Ví dụ:</div>
                        <div class="text">dsfsdfdssd</div>
                    </div>
                </div>
        </div>
    
                    <!-- <script>
                    function myFunction() {
                        event.preventDefault();
                     var ele = document.getElementById("search_icon");
                     alert(${ele.value});
                    }
                    </script> -->
                
                <!-- <script>
                    var input = document.getElementById("search_input");
                    input.addEventListener("keypress", function(event) {
                    if (event.key === "Enter") {
                        event.preventDefault();
                        document.getElementById("search_icon").click();
                    }
                    });
                </script> -->
        </div>
       
    </div>

    <div id="news">
        <div class="container">
            <div class="header_title">
                <h2>Tin tức</h2>
            </div>
            <div class="document_list">
                <a href="" class="document_item">
                    <div class="news_picture">
                        <img src="https://gritcenter.edu.vn/storage/images/556b8a1351a04ab26523591c18f92cc5.jpeg" alt="">
                    </div>
                    <div class="document_content">
                        <div class="document_tag-title">
                            <b> Haizzzz mệt mỏi ghê </b>
                            <div class="text">Lo học js đi nha bạn Trần Thị Minh Ánh, bạn mà ko lo học là tôi đ*p bạn đó</div>
                        </div>
                    </div>
                </a>

                <a href="" class="document_item">
                    <div class="news_picture">
                        <img src="https://gritcenter.edu.vn/storage/images/556b8a1351a04ab26523591c18f92cc5.jpeg" alt="">
                    </div>
                    <div class="document_content">
                        <div class="document_tag-title">
                            <b>Haizz...zzzz mệt mỏi ghê</b>
                            <div class="text">Lo học js đi nha bạn Trần Thị Minh Ánh, bạn mà ko lo học là tôi đ*p bạn đó</div>
                        </div>
                    </div>
                </a>

                <a href="" class="document_item">
                    <div class="news_picture">
                        <img src="https://gritcenter.edu.vn/storage/images/556b8a1351a04ab26523591c18f92cc5.jpeg" alt="">
                    </div>
                    <div class="document_content">
                        <div class="document_tag-title">
                            <b>Haizz...zzzz mệt mỏi ghê</b>
                            <div class="text">Lo học js đi nha bạn Trần Thị Minh Ánh, bạn mà ko lo học là tôi đ*p bạn đó</div>
                        </div>
                    </div>
                </a>
            </div>
            <button class="more-news_button">
                <a href="" class="more-news_title" style="text-decoration: none;">Xem thêm</a>
                <i class="ti-angle-right" style="padding-left: 3px;"></i>
            </button>
        </div>
    </div>
    <div id="endweb">
        <div id="contact_us">
            <div id="information">
                <h3 class="name">EdVie</h3>
                <p class="content">EdViet là một từ điển dịch Êđê-Việt và ngược lại. 
                Ngoài ra trang web còn có một trang trao đổi thông tin của mọi người.
                Trang web giúp bảo tồn văn hóa và nét đẹp của chữ Êđê
                </p>
            </div>
            <div id="information">
                <div class="help">Liên hệ chúng tôi</div>
                <div class="content">Điện thoại: 0373898814</div>
                <div class="content">Email: tranthiminhanh@gmail.com</div>
                <div class="content">Địa chỉ: 45 Thủ Khoa Huân, Thành phố Buôn Ma Thuột, tỉnh Đắk Lắk, Việt Nam</div>
                <div id="hotline">
                    <img src="..\\assests\icon\Facebook_icon.png" alt="" class="icon">
                    <img src="..\\assests\icon\Instagram_icon.png" alt="" class="icon">
                    <img src="..\\assests\icon\Zalo_icon.png" alt="" class="icon">
                </div>
            </div>
        </div>
        <div id="design">
            <p class="by">Thiết kết bởi <b>EdVie</b></p>
        </div>
    </div>
</div>
</body>
        
</body>

</html>