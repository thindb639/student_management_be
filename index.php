<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>WEBSITE HTML</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    require_once __DIR__ . '/Student.php';
    $student = new Student();
    $list = $student->getList();
    ?>

    <header>
        <h1>TÊN WEBSITE</h1>
    </header>
    <!--Navbar-->
    <nav><ul>
        <?php for($i = 0; $i < count($list); $i++){  ?>
            <li><a href="#"><?php echo $list[$i]["name"] ?></a></li>
        <?php } ?>
        </ul>
    </nav>
    
    <div class="layout">

        <!-- Sidebar trái -->
        <aside class="sidebar-left">
            <h4>Danh mục</h4>
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Dịch vụ</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </aside>
        <main>
            <h2>Nội dung chính</h2>
            <h3>Phần content chính</h3>
            <p>Đây là phần nội dung chính của trang, nằm giữa sidebar trái và sidebar phải.</p>

            <div class="feature-layout">
                <?php for($i = 0; $i < count($list); $i++){  ?>
                 <div class="feature-item">
                    <div><?php echo $list[$i]["student_id"] ?></div>
                    <div><?php echo $list[$i]["first_name"] ?></div>
                    <div><?php echo $list[$i]["last_name"] ?></div>
                    <div><?php  $list[$i]["date_of_birth"] ?></div>
                    <div><?php if($list[$i]["gender"] == 1) {
                         "Nam";
                    } elseif ($list[$i]["gender"] == 2) {
                         "Nữ";
                    } else {
                         "Chưa xác định"; } ?></div>
                    <div><?php echo $list[$i]["class"] ?></div>
                    <div><?php  $list[$i]["major"] ?></div>
                    <div><?php  $list[$i]["email"] ?></div>
                    <div><?php  $list[$i]["phone_number"] ?></div>
                    <div><?php  $list[$i]["address"] ?></div>
                    <div><?php  $list[$i]["gpa"] ?></div>
                 </div>
            <?php } ?>
                 
            </div>
        </main>

        <!-- Sidebar phải -->
        <aside class="sidebar-right">
            <h4>Tin mới</h4>
            <ul>
                <li><a href="#">Tin tức 1</a></li>
                <li><a href="#">Tin tức 2</a></li>
                <li><a href="#">Tin tức 3</a></li>
            </ul>
        </aside>

    </div>

    <footer>
        © 2026 Tên Website. All rights reserved.
    </footer>

</body>
</html>
