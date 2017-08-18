<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?></title>
    <base href="<?php echo base_url();?>">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/layout.css">
</head>

<body>
    <!-- topNav -->
    <?php $this->load->view('include/topNav.html'); ?>
    <!-- sideBar -->
    <?php $this->load->view('include/sideBar.html'); ?>
    <!-- pageNav -->
    <?php $this->load->view('include/gameNav.html'); ?>
    <div class="container-fluid data-main">
        <!--{ row -->
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">用户新增渠道</h3>
                    </div>
                    <div class="panel-body">
                        <div id="column_chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">用户活跃渠道</h3>
                    </div>
                    <div class="panel-body">
                        <div id="line_chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ row }-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">用户活跃渠道</h3>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>渠道名称</th>
                        <th><span data-toggle="tooltip" title="跟踪方式的说明文字，介绍它是干什么用的" data-placement="bottom">跟踪方式</span></th>
                        <th><span data-toggle="tooltip" title="主要是介绍它的用途等" data-placement="top">设备激活</span></th>
                        <th>新增账户</th>
                        <th><span data-toggle="tooltip" title="主要是介绍它的用途等" data-placement="left">注册转化率</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i = 0; $i < 20; $i++){?>
                    <tr>
                        <td>SL</td>
                        <td>分包追踪</td>
                        <td><?=20-$i;?></td>
                        <td><?=20-$i;?></td>
                        <td><?=21-$i;?>%</td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <script data-main="game" src="js/plugins/require.min.js"></script>
</body>
