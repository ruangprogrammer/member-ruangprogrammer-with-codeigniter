<?php
if (isset($_GET['hapus'])) {
    $queryHapus = mysql_query("DELETE FROM download where download_id = '" . $_GET['hapus'] . "'");

    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/download/list' </script>";
        exit;
    }
}
?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    List Download
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group">

                                <a href="?hal=master/download/add">
                                    <button data-toggle="modal" class="btn btn-primary">
                                        Add New <i class="fa fa-plus"></i>
                                    </button>
                                </a>

                            </div>
                            <div class="btn-group pull-right">
                                <!--     
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Print</a></li>
                                        <li><a href="#">Save as PDF</a></li>
                                        <li><a href="#">Export to Excel</a></li>
                                    </ul> 
                                -->
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Code</th>
                               <!-- <th width="60%">Artikel</th>-->
                               <!-- <th>Link Tutorial</th>-->
                              <!--  <th>Demo</th>-->
                                <th>Download Github</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            $total=0;
                            $queryCatatan = mysql_query("SELECT * FROM download ORDER BY download_id DESC");
                            while ($rowCatatan = mysql_fetch_array($queryCatatan)) {
                                ?>
                                <tr class="">
                                    <td><?php echo $no++; ?></td>
                                    <td>http://download.ruangprogrammer.com/download/code/<?php echo $rowCatatan['download_code']; ?></td>
                                    <!--<td width="60%"><?php /*echo $rowCatatan['download_judul']; */?></td>-->
                                   <!-- <td><?php /*echo $rowCatatan['download_link_tutorial']; */?></td>-->
                                 <!--   <td><?php /*echo $rowCatatan['download_link_demo']; */?></td>-->
                                    <td><?php echo $rowCatatan['download_link_download']; ?></td>

                                    <td>
                                       <!--  <a href="?hal=master/download/detail&id=<?php //echo $rowCatatan['download_id']; ?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-eye"></i>
                                                Detail
                                            </button>
                                        </a> -->
                                        <a href="?hal=master/download/edit&id=<?php echo $rowCatatan['download_id']; ?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-edit"
                                                                                             aria-hidden="true"></i>
                                                Edit
                                            </button>
                                        </a>
                                        <a href="?hal=master/download/list&hapus=<?php echo $rowCatatan['download_id']; ?>">
                                            <button class="btn btn-danger" type="submit" name="hapus"><i
                                                        class="fa fa-trash-o"></i> Delete
                                            </button>
                                        </a>

                                    </td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>