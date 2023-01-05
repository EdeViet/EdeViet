<!doctype html>
<html lang="en">

<head>
    <title>search</title>
    <link rel="stylesheet" href="search.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@538&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assests\icon\themify-icons\themify-icons.css">
    <link rel="stylesheet" href="assests/icon/cssgg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>

<body>
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
                        <a href="index.php">
                            <h1 class="text">EdVie</h1>
                        </a>
                    </div>
                    <!--    cuối header -->
                    <div id="end_nav">
                    <div id="logn_in">
                        <i class="icon ti-user"></i>
                        <a href="/sign in\signin.html">
                            <span class="sign_in">Đăng nhập</span>
                        </a>
                        <span class="line">/</span>
                        <a href="/sign up\signup.html">
                            <span class="sign_up">Đăng ký</span>
                        </a>
                    </div>
                    <div id="language">
                        <i class="icon ti-world"></i>
                    </div>
                </div>
                </div>
            </div>
            <form action="" class="search" method="POST"
                style="display: flex; align-items: center; justify-content: center;">
                <div class="header_search">
                    <input name="search" type="text" placeholder="Tra cứu Việt-Êde" class="input" />
                    <?php if (isset($_POST["search"])) {
                        $timkiem = $_POST["search"];
                        include "change.php";
                    } ?>
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
                <button type="submit" onclick="myFunction()" id="search_icon" class="search_icon">
                    <i class="ti-search"></i>
                </button>
            </form>
            <div class="frame">
                
                <div class="frame-word"> <?php echo $_GET["tu"]; ?></div>
                <div class="line"></div>
                    <?php
                        require_once('connection.php');
                        $conn->query("set names 'utf8'");
                        $tu = $_GET["tu"];
                        $result = mysqli_query($conn, "SELECT * FROM edviecom_danhsachtu.noi_dung WHERE tu='$tu'");
                        $data = mysqli_fetch_array($result);
                        ?>
                <div class="frame_content">
                    <?php if ($data['nghia_1'] !=="") { ?>
                        <div class="frame_content-means">
                            <div class="headline">Nghĩa:</div>
                            <div class="text"> <?= $data['nghia_1'] ?></div>
                            <?php if ($data['nghia_2'] !== "") { ?>
                            <div class="text"> <?= $data['nghia_2'] ?></div>
                            <?php } ?>
                            <?php if ($data['nghia_3'] !== "") { ?>
                            <div class="text"> <?= $data['nghia_3'] ?></div>
                            <?php } ?>
                            <?php if ($data['nghia_4'] !== "") { ?>
                            <div class="text"> <?= $data['nghia_4'] ?></div>
                            <?php } ?>
                        </div>
                        <div class="line"></div>
                        <?php if ($data['cau_vd_1'] !== "") { ?>
                            <div class="frame_content-example">
                                <div class="headline">Ví dụ:</div>
                                <div class="text"> <?php echo $data['cau_vd_1'] ?>: <?php echo $data['nghia_cau_vd_1'] ?></div>     
                                <?php if ($data['cau_vd_2'] !== "") { ?>
                                <div class="text"> <?php echo $data['cau_vd_2'] ?>: <?php echo $data['nghia_cau_vd_2'] ?></div>
                                <?php } ?>
                                <?php if ($data['cau_vd_3'] !== "") { ?>
                                <div class="text"> <?php echo $data['cau_vd_3'] ?>: <?php echo $data['nghia_cau_vd_3'] ?></div>
                                <?php } ?>
                            </div>
                    <?php }else{
                        echo "Không có ví dụ cho từ này";
                    } ?>
                    <?php } else {
                        echo "Xin lỗi chúng tôi không tìm thấy từ bạn cần tìm";
                    } ?>
                </div>
            </div>
        </div>
        <div id="news">
            <div class="container">
                <div class="header_title">
                    <h2>Tin tức</h2>
                </div>
                <div class="document_list">
                <a href="news/post/su_thi_ede/post.html" class="document_item">
                    <div class="news_picture">
                        <img src="news/post/su_thi_ede/danh.jpg" alt="">
                    </div>
                    <div class="document_content">
                        <div class="document_tag-title">
                            <b>Tóm tắt sử thi Đăm San</b>
                            <div class="text">Sử thi Đăm Săn là một trong những thiên sử thi anh hùng nổi tiếng của dân tộc Ê Đê (Việt Nam). Tên đầy đủ là Bài ca chàng Đam San (tiếng Ê Dê là Klei khan Y Đam San).</div>
                        </div>
                    </div>
                </a>

                <a href="news/post/su_thi_ede/post.html" class="document_item">
                    <div class="news_picture">
                        <img src="news/post/su_thi_ede/danh.jpg" alt="">
                    </div>
                    <div class="document_content">
                        <div class="document_tag-title">
                            <b>Tóm tắt sử thi Đăm San</b>
                            <div class="text">Sử thi Đăm Săn là một trong những thiên sử thi anh hùng nổi tiếng của dân tộc Ê Đê (Việt Nam). Tên đầy đủ là Bài ca chàng Đam San (tiếng Ê Dê là Klei khan Y Đam San).</div>
                        </div>
                    </div>
                </a>

                <a href="news/post/su_thi_ede/post.html" class="document_item">
                    <div class="news_picture">
                        <img src="news/post/su_thi_ede/danh.jpg" alt="">
                    </div>
                    <div class="document_content">
                        <div class="document_tag-title">
                            <b>Tóm tắt sử thi Đăm San</b>
                            <div class="text">Sử thi Đăm Săn là một trong những thiên sử thi anh hùng nổi tiếng của dân tộc Ê Đê (Việt Nam). Tên đầy đủ là Bài ca chàng Đam San (tiếng Ê Dê là Klei khan Y Đam San).</div>
                        </div>
                    </div>
                </a>
                </div>
                <button class="more-news_button">
                    <a href="news/read/news.html" class="more-news_title" style="text-decoration: none;">Xem thêm</a>
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
                    <div class="content">Địa chỉ: 45 Thủ Khoa Huân, Thành phố Buôn Ma Thuột, tỉnh Đắk Lắk, Việt Nam
                    </div>
                    <div id="hotline">
                        <img src="assests\icon\Facebook_icon.png" alt="" class="icon">
                        <img src="assests\icon\Instagram_icon.png" alt="" class="icon">
                        <img src="assests\icon\Zalo_icon.png" alt="" class="icon">
                    </div>
                </div>
            </div>
            <div id="design">
                <p class="by">Thiết kết bởi <b>EdVie</b></p>
            </div>
        </div>
    </div>
</body>

</html>