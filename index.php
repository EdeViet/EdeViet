<html>
  <head>
<title>Home</title>
<link rel="stylesheet" href="assests\index.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@538&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assests\icon\themify-icons\themify-icons.css">
<link rel="stylesheet" href="assests\icon\cssgg.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <a href="../index.php">
                    <h1 class="text">EdVie</h1>
                </a>
                </div>
                <!--    cuối header -->
                <div id="end_nav">
                    <div id="logn_in">
                        <i class="icon ti-user"></i>
                        <a href="sign in\signin.html">
                            <span class="sign_in">Đăng nhập</span>
                        </a>
                        <span class="line">/</span>
                        <a href="sign up\signup.html">
                            <span class="sign_up">Đăng ký</span>
                        </a>
                    </div>
                    <div id="language">
                        <i class="icon ti-world"></i>
                    </div>
                </div>
            </div>
        </div>
        <div id="kobtdattenginx">
            <div id="form-1">
                <div id="headline">
                    <h2 class="headline-content">Từ điển riêng của bạn</h2>
                </div>
                <div id="search"> 
                    <div id="indt">
                        <p class="indt-content">Cảm ơn bạn đã lựa chọn chúng tôi!</p>
                    </div>
                    <p class="indt-content">Hãy nhập từ bạn muốn tra cứu <i class="icon ti-arrow-down"></i></p>
                    <form action=""  class="input-1" method="POST" style=" display: flex;">
                        <input name="search" type="text" 
                            placeholder="Tra cứu Việt-Êde" class="input"/>
                            <imng class="icon" src="assests\icon\keyboard.png">
                            <button class="search_icon" >  
                                <i class="ti-search"></i> 
                            </button>
                    </form>
                    
                    <?php if(isset($_POST["search"])){ 
                        $timkiem= $_POST["search"];
                        include "change.php";}?> 

                    <div class="convert">
                        <div class="translate">
                            <p class="text">Tiếng Việt</p>
                        </div>
                        <div class="icon_translate">
                            <i class="ti-arrows-horizontal"></i>
                        </div>
                        <div class="translate">
                            <p class="text">Tiếng Êde</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="form-2">
                <img src="assests\img\picture.png" alt="" class="image">
            </div>
        </div>
    </div>
    <div id="alphabet">
        <div id="frames">
            <div class="table">
                <p class="text">a</p>
                <p class="text">ă</p>
                <p class="text">â</p>
            </div>
            <div class="table">
                <p class="text">b</p>
                <p class="text">c</p>
                <p class="text">d</p>
                <p class="text">đ</p>
            </div>
            <div class="table">
                <p class="text">e</p>
                <p class="text">ê</p>
                <p class="text">g</p>
                <p class="text">h</p>
            </div>
            <div class="table">
                <p class="text">i</p>
                <p class="text">k</p>
                <p class="text">l</p>
                <p class="text">m</p>
                <p class="text">n</p>
            </div>
            <div class="table">
                <p class="text">o</p>
                <p class="text">ô</p>
                <p class="text">ơ</p>
                <p class="text">p</p>
                <p class="text">q</p>
            </div>
            <div class="table">
                <p class="text">r</p>
                <p class="text">s</p>
                <p class="text">t</p>
                <p class="text">u</p>
                <p class="text">ư</p>
            </div>
            <div class="table">
                <p class="text">v</p>
                <p class="text">x</p>
                <p class="text">y</p>
            </div>
        </div>
        <!-- <div class="introduction">
            <h2 class="headline">Chào mừng bạn đến với bảng chữ cái</h2>
            <p class="text">Hãy nhấp vào từ bạn muốn tìm hiểu</p>
        </div> -->
        <div class="nghia">
            <h2 class="headline">Aa</h2>
            <div class="line"></div>
            <div class="list">Các từ ví dụ:</div>
            <div></div>
            <div class="example_word">
                <div class="text">dfdfddfdf</div>
                <div class="text">dfdfddfdf</div>
            </div>
                
            <div class="line"></div>    
            <div class="list">Các câu ví dụ:</div>
            <div class="example_sentences">
                <div class="text">dfdfddfdf</div>
                <div class="text">dfdfddfdf</div>
            </div>
        </div>
        <!-- <div class="explain">
            <h2 class="headline">Chào mừng bạn đến với bảng chữ cái</h2>
            <p class="text">Hãy nhấp vào từ bạn muốn tìm hiểu</p>
        </div> -->
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
                            <b> hê sờ lô hê sờ ly ly </b>
                            <div class="text">Trời hôm nay nhiều mày cực, đặt bàn tay mình lên ngực.  một hai ba bốn 5 sáu bảy tam</div>
                        </div>
                    </div>
                </a>

                <a href="" class="document_item">
                    <div class="news_picture">
                        <img src="https://gritcenter.edu.vn/storage/images/556b8a1351a04ab26523591c18f92cc5.jpeg" alt="">
                    </div>
                    <div class="document_content">
                        <div class="document_tag-title">
                            <b>hê sờ lô hê sờ ly ly</b>
                            <div class="text">Trời hôm nay nhiều mày cực, đặt bàn tay mình lên ngực.  một hai ba bốn 5 sáu bảy tam</div>
                        </div>
                    </div>
                </a>

                <a href="" class="document_item">
                    <div class="news_picture">
                        <img src="https://gritcenter.edu.vn/storage/images/556b8a1351a04ab26523591c18f92cc5.jpeg" alt="">
                    </div>
                    <div class="document_content">
                        <div class="document_tag-title">
                            <b>hê sờ lô hê sờ ly ly</b>
                            <div class="text">Trời hôm nay nhiều mày cực, đặt bàn tay mình lên ngực.  một hai ba bốn 5 sáu bảy tam</div>
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
