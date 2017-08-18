<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?></title>
    <base href="<?php echo base_url(); ?>">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/bootstrap-table.min.css">
</head>

<body>
<!-- topNav -->
<?php $this->load->view('include/topNav.html'); ?>
<!-- sideBar -->
<?php $this->load->view('include/sideBar.html'); ?>
<!-- pageNav -->
<?php $this->load->view('include/gameNav.html'); ?>
<div class="container-fluid data-main">
    <?php $this->load->view('include/filter.html'); ?>
    <!--{ row -->
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">用户新增渠道</h3>
                </div>
                <div class="panel-body">
                    <div id="area_chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">用户活跃渠道</h3>
                </div>
                <div class="panel-body">
                    <div id="pie_chart"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/ row }-->
    <div class="panel panel-default" role="tabpanel">
        <ul role="tablist" class="nav nav-tabs nav-justified">
            <li class="active">
                <a href="#tab_a" aria-controls="tab_a" role="tab" data-toggle="tab">切换菜单一</a>
            </li>
            <li>
                <a href="#tab_b" aria-controls="tab_b" role="tab" data-toggle="tab">切换菜单二</a>
            </li>
        </ul>
        <div class="tab-content p0">
            <div id="tab_a" role="tabpanel" class="tab-pane active">
                <div class="panel-body">
                    <table id="table" class="table-striped"
                           data-toggle="table"
                           data-search="true"
                           data-show-columns="true"
                           data-pagination="true"
                           data-show-export="true"
                           data-url="js/json/data.json">
                        <thead>
                            <tr>
                                <th data-field="name" data-sortable="true">渠道名称</th>
                                <th data-field="track">跟踪方式</th>
                                <th data-field="device">设备激活</th>
                                <th data-field="account" data-sortable="true">新增账户</th>
                                <th data-field="rate">注册转化率</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div id="tab_b" role="tabpanel" class="tab-pane">
                <div class="panel-body">
                    切换菜单二内容
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/plugins/require.min.js" data-main="tmp"></script>
</body>
