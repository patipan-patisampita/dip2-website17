<?php include("security.php"); ?>
<?php include("config/dbcon.php"); ?>
<?php include("includes/thaidate.php"); ?>

<?php
if (isset($_POST['news_save'])) {
    $head = $_POST['head'];
    $detial = $_POST['detial'];
    $hotnew_image = $_FILES['hotnew_image']['name'];
    $hotnew_doc = $_FILES['hotnew_doc']['name'];
    if (file_exists("upload/hotnew_images/" . $_FILES['hotnew_image']['name'])) {
        $store = $_FILES['hotnew_image']['name'];
        $_SESSION['status'] = "กรุณาเพิ่มรูปภาพ'.$store.'";
        header('Location: news1.php');
    } else {
        $design = "ผู้ดูแลระบบ";
        $hotcount = 0;
        $query = "INSERT INTO hotnews(head,detail,date,namepic,namedoc,hotcount,design)
                VALUES('$head','$detial','$date','$hotnew_image','$hotnew_doc','$hotcount','$design' ";
        $result = mysqli_query($con, $query);
        if ($result) {
            move_uploaded_file($_FILES['hotnew_image']['tmp_name'], "upload/hotnew_images/" . $_FILES['hotnew_image']['name']);
            move_uploaded_file($_FILES['hotnew_doc']['tmp_name'], "upload/hotnew_docs/" . $_FILES['hotnew_doc']['name']);
            $_SESSION['status'] = "เพิ่มข่าวสารเรียบร้อย";
            header('Location: news1.php');
        } else {
            $_SESSION['status'] = "เพิ่มข่าวสารไม่เรียบร้อย";
            header('Location: news1.php');
        }
    }
} else {
    $_SESSION['status'] = "เพิ่มข่าวสารไม่เรียบร้อย";
    header('Location: news1.php');
}
?>