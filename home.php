<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="web/css/home.css?v=<?php echo time(); ?>">
    <?php
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    include 'access.php';
    expire("");
    ?>
</head>

<body>
    <?php
    $departments = array("Phòng học", "Giáo viên", "Môn học", "Sinh viên", "Điểm");
    $links = array("#linktimphonghoc", "#linkthemphonghoc", 
        "app/view/search_teacher.php", "app/view/teacher_new/teacher_new_input.php", 
        "subject.php", "app/view/subject/subject_add_input_view.php", 
        "search_student.php", "add_student.php", 
        "search_score.php", "add_score.php");
    ?>

    <div class="container">
        <p id="name-login">Tên login: <?php echo $_SESSION["username"]; ?></p>
        <a id="logout" href="logout.php">Logout</a>
        <p>Thời gian login: <?php echo $_SESSION["dateTime"]; ?></p>

        <?php for ($i = 0; $i < count($departments); $i++) { ?>
            <div class="department">
                <p><?php echo $departments[$i]; ?></p>

                <?php
                echo "<a href=" . $links[2 * $i] . ">Tìm kiếm</a>";

                if ($departments[$i] == "Điểm") {
                    echo "<a href=" . $links[2 * $i + 1] . ">Thêm điểm</a>";
                } else {
                    echo "<a href=" . $links[2 * $i + 1] . ">Thêm mới</a>";
                } ?>

            </div>
        <?php } ?>
    </div>
</body>

</html>
