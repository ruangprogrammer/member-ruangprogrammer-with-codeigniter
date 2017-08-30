    <?php

   // echo $status_login; exit();

    if ($status_login == 1) {

        ?>
        <div class="page-heading">
            <h3>
                Hello <b style="color:red"><?php  echo $member['first_name']; ?>..</b>
            </h3>
            <ul class="breadcrumb">

                <div class="text-right" id="nestable_list_menu">
                    <li>
                        <h3><a href="<?php echo base_url();?>download/logout" style="color: blue;">Logout</a></h3>
                    </li>
                </div>
                <li>
                    <a href="#" style="color: #000;">Total Member : 3.400</a>
                </li>
            </ul>
        </div>
        <?php

    }else{

 }?>
        <div class='col-md-12' style="background: #fff;border-radius: 4px;">
            <table class="display table table-bordered table-striped" id="dynamic-table">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Artikel</th>
                    <th>Tutorial</th>
                    <th>Demo</th>
                    <th class="center">Download</th>

                </thead>
                <tbody>

                <?php
                $no = 1;
                foreach ($downloads_data as $downloads)
                {
                //$sql_download = mysql_query("SELECT * FROM download ORDER BY download_id DESC");
               // while ($data_download = mysql_fetch_array($sql_download)) {
                    ?>
                    <tr class="gradeX">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $downloads->download_judul; ?></td>
                        <td>
                            <a href="<?php echo $downloads->download_link_tutorial; ?>" target="_blank">
                                <button class="btn btn-primary" type="button"><i class="fa fa-link"
                                                                                 aria-hidden="true"></i> Link
                                    Tutorial
                                </button>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo $downloads->download_link_demo; ?>" target="_blank">
                                <button class="btn btn-info" type="button"><i class="fa fa-eye"></i> Demo
                                </button>
                            </a>
                        </td>
                        <td class="center">
                            <?php
                            if (empty($member['first_name'])){
                            ?>
                            <a href="<?php echo base_url(); ?>download/login">
                                <?php }else{ ?>
                                <a href="https://github.com<?php echo $downloads->download_link_download; ?>"
                                   target="_blank">

                                    <?php } ?>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-download"
                                                                                     aria-hidden="true"></i>
                                        Download
                                    </button>
                                </a>
                        </td>
                    </tr>
                <?php } ?>

                </tfoot>
            </table>
        </div>
