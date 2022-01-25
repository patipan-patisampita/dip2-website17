<?php include("security.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/sidebar.php"); ?>
<?php include("includes/topbar.php"); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> -->
    <div class="align-items-center my-4">

        <div class="card shadow rounded ">
            <div class="card-header ">
                <h6 class="card-title font-weight-bold text-primary">ข่าวประชาสัมพันธ์ 1 &nbsp;
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAdminNews">
                        เพิ่ม ข่าวประชาสัมพันธ์
                    </button>
                </h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col">ลำดับ</th>
                                <th scope="col">หัวข้อ</th>
                                <th scope="col">รายละเอียด</th>
                                <th scope="col">วันเวลา</th>
                                <th>แก้ไข</th>
                                <th>ลบข่าว</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <form action="news_edit.php" method="post">
                                        <input type="hidden" name="news_edit_id">
                                        <button type="submit" name="news_editbtn" class="btn btn-success">แก้ไขข่าวสาร</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="news_code.php" method="post">
                                        <input type="hidden" name="delete_image">
                                        <input type="hidden" name="delete_doc">
                                        <input type="hidden" name="delete_id">
                                        <button type="submit" name="news_deletebtn" class="btn btn-danger">ลบข่าวสาร</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addAdminNews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ข่าวประชาสัมพันธ์</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="news_code.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>หัวข้อข่าว</label>
                                <textarea rows="2" cols="100" name="head" class="form-control" placeholder="เพิ่ม-หัวข้อข่าว"></textarea>
                            </div>

                            <div class="form-group">
                                <label>รายละเอียดข่าว</label>
                                <textarea rows="4" cols="100" name="detail" class="form-control" placeholder="เพิ่ม-รายละเอียดข่าว"></textarea>
                            </div>

                            <div class="form-group">
                                <label>รายละเอียดข่าว: เช่น *.jpg,png</label>
                                <input type="file" name="hotnew_image" class="form-control" placeholder="เพิ่มรูปภาพ">
                            </div>

                            <div class="form-group">
                                <label>แนบไฟล์: เช่น *.pdf,doc,xls,ppt,rar</label>
                                <input type="file" name="hotnew_doc" class="form-control" placeholder="แนบไฟล์">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="news_save" class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>


</div>
<!-- /.container-fluid -->

<?php include("includes/footer.php") ?>
<?php include("includes/logoutmodal.php") ?>
<?php include("includes/scripts.php") ?>