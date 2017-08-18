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

</head>

<body>
<!-- topNav -->
<?php $this->load->view('include/topNav'); ?>
<!-- sideBar -->
<?php $this->load->view('include/sideBar.html'); ?>
<!-- pageNav -->
<?php $this->load->view('include/userNav.html'); ?>
<div class="container-fluid data-main">
    <div class="panel panel-default">
        <div class="panel-heading" id="filter_hd">
            <h4 class="panel-title">
                <i class="glyphicons glyphicons-search fn-mr-5"></i>
                用户查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
            </h4>
        </div>
        <div class="panel-body hide" id="filter_bd">
            <form id="form" class="form-horizontal" action="/User/" method="post">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="inputPassword2" class="col-sm-4 control-label">用户名：</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="search_name" name="search_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">类型：</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="1"> 超级管理员
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="2"> 管理员
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="3" checked> 普通用户
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">状态：</label>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input type="radio" name="state" value="1" checked> 在职
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="state" value="2"> 离职
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary filter-btn">
                                    <i class="glyphicons glyphicons-search fn-mr-5"></i>查询
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/ panel end -->

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
                                    <th width="10%"><div class="th-inner">用户名</div></th>
                                    <th width="10%"><div class="th-inner">类型</div></th>
                                    <th width="5%"><div class="th-inner">状态</div></th>
                                    <th width="15%"><div class="th-inner">注册时间</div></th>
                                    <th width="15%"><div class="th-inner">最后登录时间</div></th>
                                    <th width="5%"><div class="th-inner">登录次数</div></th>
                                    <th width="10%"><div class="th-inner">登录IP</div></th>
                                    <th width="20%"><div class="th-inner">操作</div></th>
                                </tr>
                            </thead>
                            <tbody id="td_list">
                                <tr data-id="1001">
                                    <td><div class="td-inner-tx">admin</div></td>
                                    <td><div class="td-inner-tx">超级管理员</div></td>
                                    <td><div class="td-inner-tx"><span class="label label-success">在职</span></div></td>
                                    <td><div class="td-inner-tx">2015-06-10 00:00:00</div></td>
                                    <td><div class="td-inner-tx">2016-06-10 00:00:00</div></td>
                                    <td><div class="td-inner-tx">1150</div></td>
                                    <td><div class="td-inner-tx">127.0.0.1</div></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm edit-btn" data-id="1001" data-toggle="tooltip" data-title="修改密码">修改</button>
                                            <button class="btn btn-primary btn-sm reset-btn" data-id="1001" data-toggle="tooltip" data-title="重置密码">重置</button>
                                            <button class="btn btn-primary btn-sm clear-btn" data-id="1001" data-toggle="tooltip" data-title="离职清权限">清权</button>
                                            <button class="btn btn-primary btn-sm allot-btn" data-id="1001" data-toggle="tooltip" data-title="分配角色">分配</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-id="1002">
                                    <td><div class="td-inner-tx">lucy</div></td>
                                    <td><div class="td-inner-tx">超级管理员</div></td>
                                    <td><div class="td-inner-tx"><span class="label label-danger">离职</span></div></td>
                                    <td><div class="td-inner-tx">2015-06-10 00:00:00</div></td>
                                    <td><div class="td-inner-tx">2016-06-10 00:00:00</div></td>
                                    <td><div class="td-inner-tx">150</div></td>
                                    <td><div class="td-inner-tx">192.168.20.86</div></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm edit-btn" data-id="1002" data-toggle="tooltip" data-title="修改密码">修改</button>
                                            <button class="btn btn-primary btn-sm reset-btn" data-id="1002" data-toggle="tooltip" data-title="重置密码">重置</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-id="1003">
                                    <td><div class="td-inner-tx">mondey</div></td>
                                    <td><div class="td-inner-tx">管理员</div></td>
                                    <td><div class="td-inner-tx"><span class="label label-success">在职</span></div></td>
                                    <td><div class="td-inner-tx">2015-06-10 00:00:00</div></td>
                                    <td><div class="td-inner-tx">2016-06-10 00:00:00</div></td>
                                    <td><div class="td-inner-tx">1150</div></td>
                                    <td><div class="td-inner-tx">127.0.0.1</div></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm edit-btn" data-id="1003" data-toggle="tooltip" data-title="修改密码">修改</button>
                                            <button class="btn btn-primary btn-sm reset-btn" data-id="1003" data-toggle="tooltip" data-title="重置密码">重置</button>
                                            <button class="btn btn-primary btn-sm allot-btn" data-id="1003" data-toggle="tooltip" data-title="分配角色">分配</button>
                                        </div>
                                    </td>
                                </tr>
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
                    <div class="pull-right pagination" id="DataTables_paginate">
                        <?php $this->load->view('include/pages.html'); ?>
                    </div>
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
<script src="js/plugins/jquery.validate.min.js"></script>
<script src="js/common.js"></script>
<script src="js/pages/userIndex.js"></script>
</body>
