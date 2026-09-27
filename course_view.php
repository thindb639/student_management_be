<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>WEBSITE HTML</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    use Controller\CourseController;

    require_once __DIR__ . '/Controller/CourseController.php';
    $CourseController = new CourseController;
    if (isset($_GET['class_code'])) {
        $class_code = $_GET['class_code'];
    } else {
        $class_code = null;
    }

    $list = $CourseController->getList($class_code);


    ?>
    

    <header>
        <h1>TÊN WEBSITE</h1>
    </header>
    <!--Navbar-->
    <nav>
        <ul>

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
                <?php for ($i = 0; $i < count($list); $i++) {  ?>
                    <div class="feature-item">
                        <div><?php echo $list[$i]->name ?></div>
                        <div><?php echo $list[$i]->getTeachName() ?></div>

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