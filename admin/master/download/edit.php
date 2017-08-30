<?php
error_reporting(0);
$id = $_GET['id'];
$queryDownload = mysql_query("SELECT * FROM download where download_id = '" . $id . "'");
$rowDownload = mysql_fetch_array($queryDownload);
if (isset($_POST['update'])) {
   $queryUpdate = mysql_query("UPDATE download SET 
                                    download_judul = '" . $_POST['download_judul'] . "',
                                    download_link_tutorial  = '" . $_POST['download_link_tutorial'] . "',
                                    download_link_demo   = '" . $_POST['download_link_demo'] . "',
                                    download_link_download ='" . $_POST['download_link_download'] . "'
                                    WHERE download_id = '" . $id . "'
                                     ");
    echo $sql;

}
if ($queryUpdate) {
    echo "<script> alert('Data Berhasil DiUbah'); location.href='index.php?hal=master/download/list' </script>";
    exit;
}
?>
<!--body wrapper start-->
<div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    ADD DOWNLOAD
                </header>
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST"
                              enctype="multipart/form-data" action="">
                            <input type="hidden" name="id" value="<?php echo $rowDownload['download_id']; ?>">

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">Judul Artikel</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" name="download_judul" type="text"
                                           value="<?php echo $rowDownload['download_judul']; ?>"/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Link Blog </label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="text" name="download_link_tutorial"
                                           value="<?php echo $rowDownload['download_link_tutorial']; ?>"/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Link Demo.ruang </label>
                                <div class="col-lg-10">
                                    <input class="form-control " type="text" name="download_link_demo"
                                           value="<?php echo $rowDownload['download_link_demo']; ?>"/>
                                </div>
                            </div>

                            <div class=" form-group ">
                                    <label for="cemail" class="control-label col-lg-2">Link Github </label>
                                    <div class="col-lg-10">
                                        <input class="form-control " type="text" name="download_link_download"
                                               value="<?php echo $rowDownload['download_link_download']; ?>"/>
                                </div>
                            </div>


                            <div class=" form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit" name="update">UPDATE</button>
                                            <a href="?hal=master/download/list">
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </a>
                                        </div>
                                    </div>

                        </form>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>
<!--body wrapper end-->

