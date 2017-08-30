<?php
if (isset($_POST['simpan'])) {

    $code = openssl_random_pseudo_bytes(16);
    $code = bin2hex($code);
    $demo = $_POST['download_link_demo'];
    if(empty($demo)){
        $demo = "http://download.ruangprogrammer.com/#";
    }

   $queryInsert = mysql_query("INSERT INTO download (download_code,
                                                      download_judul,
                                                      download_link_tutorial,
                                                      download_link_demo,
                                                      download_link_download)
                         VALUES ('" . $code . "',
                                 '" . $_POST['download_judul'] . "',
                                 '" . $_POST['download_link_titorial'] . "',
                                 '" . $demo ."',
                                 '" . $_POST['download_link_download'] . "')");

//echo $sql; exit();

    if ($queryInsert) {
        echo "<script> alert('Data Berhasil Disimpan'); location.href='index.php?hal=master/download/list' </script>";
        exit;
    }
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

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2">Judul Artikel</label>
                                <div class="col-lg-10">
                                    <input class=" form-control" name="download_judul"  type="text"
                                           required/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Link Blog </label>
                                <div class="col-lg-10">
                                    <input class="form-control" type="text" name="download_link_titorial" required/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Link Demo.ruang </label>
                                <div class="col-lg-10">
                                    <input class="form-control " type="text" name="download_link_demo"/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cemail" class="control-label col-lg-2">Link Github </label>
                                <div class="col-lg-10">
                                    <input class="form-control "  type="text" name="download_link_download" required/>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit" name="simpan">Save</button>
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

