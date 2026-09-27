<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>WEBSITE HTML</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    
    if (isset($_GET['search_query'])) {
        $search_query = $_GET['search_query'];
    } else {
        $search_query = null;
    }

    if (isset($_GET['class_id'])) {
        $class_id = $_GET['class_id'];
    } else {
        $class_id = null;
    }


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_ms";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = 'SELECT * FROM student';
    if ($search_query !== null and $class_id != null) {
        $sql .= ' where first_name like "%' . $search_query . '%" and class_id = ' . $class_id;
    }
    //var_dump($sql);die;
    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    ?>
    <?php

    use Controller\StudentController;

    require_once __DIR__ . '/Controller/StudentController.php';
    $studentController = new StudentController;
    if (isset($_GET['class_code'])) {
        $class_code = $_GET['class_code'];
    } else {
        $class_code = null;
    }


    // var_dump($search_query);die;

    $list = $studentController->getList($class_code, $search_query);
    // var_dump($search_query);die;
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
                <?php while ($row = mysqli_fetch_assoc($result)) {  ?>
                    <div class="feature-item">
                        <div><?php echo $row["id"] ?></div>
                        <div><?php echo $row["first_name"] ?></div>-<div><?php echo $row["last_name"] ?></div>
                        <div><?php echo $row["gender"] ?></div>

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
    <?php $conn = null; ?>

</html>