<?php
if (isset($_GET['hapus'])) {
    $queryHapus = mysql_query("DELETE FROM users where id = '" . $_GET['hapus'] . "'");

    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/member/list' </script>";
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
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Link Page</th>
                            <th>Gender</th>
                            <th>Date Created</th>
                            <th>Date Modified</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        $queryUsers = mysql_query("SELECT * FROM users ORDER BY id DESC");
                        while ($rowUsers = mysql_fetch_array($queryUsers)) {
                            ?>
                            <tr class="">
                                <td><?php echo $no++; ?></td>
                                <td><img src="<?php echo $rowUsers['picture_url']; ?>"></td>
                                <td><?php echo $rowUsers['first_name']." ".$rowUsers['last_name']; ?></td>
                                <td><?php echo $rowUsers['email']; ?></td>
                                <td><a href="<?php echo $rowUsers['profile_url'];?>" target="_blank">Link Page</a></td>
                                <td><?php echo $rowUsers['gender']; ?></td>
                                <td><?php echo $rowUsers['created']; ?></td>
                                <td><?php echo $rowUsers['modified'];?></td>
                                <td>

                                 <a href="?hal=master/member/list&hapus=<?php echo $rowUsers['id']; ?>">
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

        </div>
    </div>
</div>
