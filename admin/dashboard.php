<div class="wrapper">
    <div class="row states-info">
        <a href="?hal=pos" style="color: #fff;">
            <div class="col-md-3">
                <div class="panel blue-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title"> Member </span>
                                <h4><?php
                                    $total_member_tmp=mysql_query('SELECT COUNT(*) AS TOTAL FROM users');
                                    $data_member_tmp=mysql_fetch_array($total_member_tmp);
                                    echo $data_member_tmp['TOTAL'];
                                    ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="?hal=master/category/list" style="color: #fff;">
           <!-- <div class="col-md-3">
                <div class="panel blue-bg">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="col-xs-8">
                                <span class="state-title"> Member </span>
                                <h4><?php
/*                                    $total_member=mysql_query('SELECT COUNT(*) AS TOTAL FROM member');
                                    $data_member=mysql_fetch_array($total_member);
                                    echo $data_member['TOTAL'];
                                    */?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </a>
<!--        <a href="?hal=master/product/list" style="color: #fff;">-->
<!--            <div class="col-md-3">-->
<!--                <div class="panel green-bg">-->
<!--                    <div class="panel-body">-->
<!--                        <div class="row">-->
<!--                            <div class="col-xs-4">-->
<!--                                <i class="fa fa-briefcase"></i>-->
<!--                            </div>-->
<!--                            <div class="col-xs-8">-->
<!--                                <span class="state-title">Total Cotent  </span>-->
<!--                                <h4>Product</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </a>-->
<!--        <a href="?hal=master/user/list" style="color: #fff;">-->
<!--            <div class="col-md-3">-->
<!--                <div class="panel yellow-bg">-->
<!--                    <div class="panel-body">-->
<!--                        <div class="row">-->
<!--                            <div class="col-xs-4">-->
<!--                                <i class="fa fa-users"></i>-->
<!--                            </div>-->
<!--                            <div class="col-xs-8">-->
<!--                                <span class="state-title">Target Content </span>-->
<!--                                <h4>User</h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
    </div>
    </a>

    <div class="row">

        <div class="col-sm-6">

        </div>

        <div class="col-sm-6">

        </div>


    </div>


</div>
<!-- the rain gagal bersembunyi -->