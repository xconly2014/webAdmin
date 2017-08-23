<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?></title>
    <base href="<?php echo base_url(); ?>">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/select.css">
    <link rel="stylesheet" href="css/iconfont.css">

</head>

<body>
<!-- topNav -->
<?php $this->load->view('include/topNav'); ?>
<!-- sideBar -->
<?php $this->load->view('include/sideBar'); ?>

<div class="container-fluid data-main">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">用户列表</h4>
        </div>
        <div class="panel-body">
            <div class="bootstrap-table">
                <!--{ fixed-table-toolbar -->
                <div class="fixed-table-toolbar">
                    <div class="columns columns-left btn-group pull-left">
                        <button class="btn btn-success add-btn" data-title="新增用户">
                            <i class="glyphicons glyphicons-plus fn-mr-10"></i>新增用户
                        </button>
                    </div>
                </div>
                <!--/ fixed-table-toolbar end }-->
                <div class="fixed-table-container">
                    <!--{ fixed-table-body -->
                    <div class="fixed-table-body">
                        <table id="table" class="table-striped table table-hover">
                            <thead>
                                <tr>
                                    <th width="5%"><div class="th-inner">用户ID</div></th>
                                    <th width="10%"><div class="th-inner">用户名</div></th>
                                    <th width="10%"><div class="th-inner">类型</div></th>
                                    <th width="15%"><div class="th-inner">创建时间</div></th>
                                    <th width="15%"><div class="th-inner">最后登录时间</div></th>
                                    <th width="5%"><div class="th-inner">登录次数</div></th>
                                    <th width="10%"><div class="th-inner">登录IP</div></th>
                                    <th width="20%"><div class="th-inner">操作</div></th>
                                </tr>
                            </thead>
                            <tbody id="td_list">
                                <?php foreach ($list as $v): ?>
                                <tr data-id="1001">
                                    <td><div class="td-inner-tx"><?php echo $v['id'];?></div></td>
                                    <td><div class="td-inner-tx"><?php echo $v['username'];?></div></td>
                                    <td><div class="td-inner-tx"><?php echo $v['title'];?></div></td>
                                    <td><div class="td-inner-tx"><?php echo $v['create_time'];?></div></td>
                                    <td><div class="td-inner-tx"><?php echo $v['login_time'];?></div></td>
                                    <td><div class="td-inner-tx"><?php echo $v['login_count'];?></div></td>
                                    <td><div class="td-inner-tx"><?php echo $v['ip'];?></div></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm edit-btn" data-id="<?php echo $v['id'];?>" data-toggle="tooltip" data-title="编辑"><i class="glyphicons glyphicons-pencil fn-mr-5"></i>编辑</button>
                                            <button class="btn btn-primary btn-sm del-btn" data-id="<?php echo $v['id'];?>" data-toggle="tooltip" data-title="删除"><i class="glyphicons glyphicons-remove fn-mr-5"></i>删除</button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!--/ fixed-table-body end }-->
                </div>
                <!--{ fixed-table-pagination -->
                <div class="fixed-table-pagination clearfix">
                    <div class="pull-left pagination-detail">
                        <button class="btn btn-success add-btn" data-title="新增用户">
                            <i class="glyphicons glyphicons-plus fn-mr-10"></i>新增用户
                        </button>
                    </div>
                    <!-- <div class="pull-right pagination" id="DataTables_paginate">
                        <?php $this->load->view('include/pages.html'); ?>
                    </div> -->
                </div>
                <!--/ fixed-table-pagination }-->
            </div>
            <!--/ bootstrap-table end -->
        </div>
        <!--/ panel-body end -->
    </div>
    <!--/ panel end -->
</div>

<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/select2.min.js"></script>
<script src="js/plugins/layer/layer.js"></script>
<script src="js/common.js"></script>
<script src="js/pages/userIndex.js"></script>
</body>
