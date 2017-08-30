<?php
if (isset($_GET['hapus'])) {
    $queryHapus = mysql_query("DELETE FROM member_tmp where tmp_id = '" . $_GET['hapus'] . "'");

    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/member_temp/list' </script>";
        exit;
    }
}
?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <!-- code new -->
            <section class="panel">
                <header class="panel-heading">
                    Member Ruangprogrammer
                    <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                </header>
                <div class="panel-body">
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        $queryUsers = mysql_query("SELECT * FROM member_tmp ORDER BY tmp_id DESC");
                        while ($rowUsers = mysql_fetch_array($queryUsers)) {
                            ?>
                            <tr class="">
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $rowUsers['tmp_username']; ?></td>
                                <td><?php echo $rowUsers['tmp_phone']; ?></td>
                                <td><?php echo $rowUsers['tmp_email']; ?></td>
                                <td><?php echo $rowUsers['tmp_password']; ?></td>
                                <td><?php echo $rowUsers['tmp_date']; ?></td>
                                <td>
                                  <a href="?hal=master/member_temp/list&hapus=<?php echo $rowUsers['tmp_id']; ?>">
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
            </section>
            <!-- code new end -->
        </div>
    </div>
</div>