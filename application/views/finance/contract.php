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
<?php $this->load->view('include/topNav.html'); ?>
<!-- sideBar -->
<?php $this->load->view('include/sideBar.html'); ?>
<!-- pageNav -->
<?php $this->load->view('include/openNav.html'); ?>
<div class="container-fluid data-main">
    <div class="panel panel-default">
        <div class="panel-heading" id="filter_hd">
            <h4 class="panel-title">
                <i class="glyphicons glyphicons-search fn-mr-5"></i>
                合同查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
            </h4>
        </div>
        <div class="panel-body hide" id="filter_bd">
            <form id="form" class="form-horizontal" action="/finance/contract" method="post">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">企业名称：</label>
                            <div class="col-sm-4">
                                <select name="corporation_id" class="select" style="width: 100%;">
                                    <option></option>
                                    <option value="135">合同条款科技有限公司</option>
                                    <option value="136">广州优趣rpg有限科技公司</option>
                                    <option value="137">广州优趣有fdd限科技公司</option>
                                    <option value="138">天津百度紫桐科技有限公司</option>
                                    <option value="139">广州多少级借我玩玩</option>
                                    <option value="140">广州东风浩荡网络有限公司</option>
                                    <option value="141">广州东风浩荡有限公司</option>
                                    <option value="142">全部流程有限公司</option>
                                </select>
                            </div>
                            <label class="col-sm-2 control-label">合同编号：</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="agree_code" placeholder="模糊搜索">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">游戏名称：</label>
                            <div class="col-sm-4">
                                <select name="game_id" class="select" style="width: 100%;">
                                    <option></option>
                                    <option value="1">广州有趣</option>
                                    <option value="2">合同条款</option>
                                </select>
                            </div>
                            <label class="col-sm-2 control-label">状态：</label>
                            <div class="col-sm-4">
                                <select name="status" class="select" data-search="true" style="width: 100%;">
                                    <option></option>
                                    <option value="1">广州有趣</option>
                                    <option value="2">合同条款</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input type="hidden" id="orderby" name="orderby">
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
            <h4 class="panel-title"><?php echo $title; ?></h4>
        </div>
        <div class="panel-body">
            <div class="bootstrap-table">
                <div class="fixed-table-container">
                    <!--{ fixed-table-body -->
                    <div class="fixed-table-body">
                        <table id="table" class="table-striped table table-hover">
                            <thead>
                            <tr>
                                <th width="20%"><div class="th-inner">合同编号</div></th>
                                <th width="10%"><div class="th-inner">合同类型</div></th>
                                <th width="15%"><div class="th-inner">合同主体</div></th>
                                <th width="9%"><div class="th-inner">签署时间</div></th>
                                <th width="9%"><div class="th-inner">生效时间</div></th>
                                <th width="9%"><div class="th-inner">终止时间</div></th>
                                <th width="13%"><div class="th-inner">状态</div></th>
                                <th width="15%"><div class="th-inner">操作</div></th>
                            </tr>
                            </thead>
                            <tbody id="td_list">
                                <tr data-id="1001">
                                    <td><div class="td-inner-tx">PYW-KJXY-20160918-00001</div></td>
                                    <td><div class="td-inner-tx">游戏接入清单</div></td>
                                    <td><div class="td-inner-tx">test2技术有限公司1</div></td>
                                    <td><div class="td-inner-tx">2016-09-19</div></td>
                                    <td><div class="td-inner-tx">2016-09-19</div></td>
                                    <td><div class="td-inner-tx">2016-12-31</div></td>
                                    <td><div class="td-inner-tx">待审核</div></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm ok-btn" data-id="1001" data-toggle="tooltip" data-title="确认合同">确认</button>
                                            <button class="btn btn-primary btn-sm down-btn" data-id="1001" data-toggle="tooltip" data-title="下载合同">下载</button>
                                            <button class="btn btn-primary btn-sm edit-btn" data-id="1001" data-toggle="tooltip" data-title="修改合同编号">修改</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-id="1002">
                                    <td><div class="td-inner-tx">PYW-KJXY-20160918-00001</div></td>
                                    <td><div class="td-inner-tx">游戏接入清单</div></td>
                                    <td><div class="td-inner-tx">test2技术有限公司2</div></td>
                                    <td><div class="td-inner-tx">2016-09-19</div></td>
                                    <td><div class="td-inner-tx">2016-09-19</div></td>
                                    <td><div class="td-inner-tx">2016-12-31</div></td>
                                    <td><div class="td-inner-tx">待平台方邮寄</div></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm change-sign-btn" data-id="1002" data-toggle="tooltip" data-title="更改签署状态">更改</button>
                                            <button class="btn btn-primary btn-sm down-btn" data-id="1002" data-toggle="tooltip" data-title="下载合同">下载</button>
                                            <button class="btn btn-primary btn-sm edit-btn" data-id="1002" data-toggle="tooltip" data-title="修改合同编号">修改</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-id="1003">
                                    <td><div class="td-inner-tx">PYW-KJXY-20160918-00001</div></td>
                                    <td><div class="td-inner-tx">游戏接入清单</div></td>
                                    <td><div class="td-inner-tx">test2技术有限公司3</div></td>
                                    <td><div class="td-inner-tx">2016-09-19</div></td>
                                    <td><div class="td-inner-tx">2016-09-19</div></td>
                                    <td><div class="td-inner-tx">2016-12-31</div></td>
                                    <td><div class="td-inner-tx">执行中</div></td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-primary btn-sm end-btn" data-id="1003" data-toggle="tooltip" data-title="终止合同">终止</button>
                                            <button class="btn btn-primary btn-sm down-btn" data-id="1003" data-toggle="tooltip" data-title="下载合同">下载</button>
                                            <button class="btn btn-primary btn-sm edit-btn" data-id="1003" data-toggle="tooltip" data-title="修改合同编号">修改</button>
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

<!--{ 确认合同 弹窗 -->
<div class="modal fade" id="confirmMod" tabindex="-1" role="dialog" aria-labelledby="confirmModLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="confirmModLabel">确认合同</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="confirm_form" role="form">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">当前状态：</label>
                        <div class="col-sm-10">
                            <label class="control-label" id="confirmMod_type">执行中</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">操作：</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" name="status" value="20"> 审核通过
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="15"> 审核不通过(驳回)
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="old_password" class="col-sm-2 control-label">原因：</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="reason" name="reason">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="hidden" name="data_mod_ipt">
                            <button type="button" class="btn btn-primary" id="confirm_btn">
                                <i class="glyphicons glyphicons-ok fn-mr-5"></i>确定
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ 确认合同 弹窗 }-->

<!--{ 更改签署状态 弹窗 -->
<div class="modal fade" id="changeSignMod" tabindex="-1" role="dialog" aria-labelledby="changeSignModLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="changeSignModLabel">更改签署状态</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="changeSign_form" role="form">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">当前状态：</label>
                        <div class="col-sm-10">
                            <label class="control-label" id="changeSignMod_type">待平台方邮寄</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">快递公司：</label>
                        <div class="col-sm-10">
                            <select name="express_name" class="select" style="width: 100%;">
                                <option value="顺丰快递" selected>顺丰快递</option>
                                <option value="EMS">EMS</option>
                                <option value="中通">中通</option>
                                <option value="圆通">圆通</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="old_password" class="col-sm-2 control-label">快递单号：</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="express" name="express">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="hidden" name="sign_mod_ipt">
                            <button type="button" class="btn btn-primary" id="ok_sign_btn">
                                <i class="glyphicons glyphicons-ok fn-mr-5"></i>确定更改
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ 更改签署状态 弹窗 }-->

<!--{ 终止合同 弹窗 -->
<div class="modal fade" id="endContractMod" tabindex="-1" role="dialog" aria-labelledby="endContractModLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="endContractModLabel">终止合同</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="end_form" role="form">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">当前状态：</label>
                        <div class="col-sm-10">
                            <label class="control-label" id="endContractMod_type">执行中</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="old_password" class="col-sm-2 control-label">原因：</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="end_reason">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="hidden" name="end_mod_ipt">
                            <button type="button" class="btn btn-primary" id="ok_end_btn">
                                <i class="glyphicons glyphicons-ok fn-mr-5"></i>终止合同
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ 终止合同 弹窗 }-->

<!--{ 修改合同编号 弹窗 -->
<div class="modal fade" id="editNumMod" tabindex="-1" role="dialog" aria-labelledby="editNumModLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="editNumModLabel">修改合同编号</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="edit_form" role="form">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">当前状态：</label>
                        <div class="col-sm-10">
                            <label class="control-label" id="editNumMod_type">执行中</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">当前合同号：</label>
                        <div class="col-sm-10">
                            <label class="control-label">PYW-JRQD-20160920-02774</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="old_password" class="col-sm-2 control-label">新合同号：</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="agree_code" name="agree_code">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="hidden" name="edit_mod_ipt">
                            <button type="button" class="btn btn-primary" id="ok_edit_btn">
                                <i class="glyphicons glyphicons-ok fn-mr-5"></i>更改
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ 修改合同编号 弹窗 }-->

<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/select2.min.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/common.js"></script>
<script src="js/plugins/layer/layer.js"></script>
<script src="js/pages/open/contract.js"></script>
</body>
