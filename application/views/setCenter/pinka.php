<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?></title>
    <base href="<?php echo base_url();?>">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/set.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
</head>

<body>
    <!-- topNav -->
    <?php $this->load->view('include/topNav.html'); ?>
    <!-- sideBar -->
    <?php $this->load->view('include/sideBar.html'); ?>
    <!-- pageNav -->
    <?php $this->load->view('include/setNav.html'); ?>
    <div class="container-fluid data-main">
        <div class="panel panel-default">
            <div class="panel-heading" id="filter_hd">
                <h4 class="panel-title">
                    <i class="glyphicons glyphicons-search fn-mr-5"></i>
                    拼卡查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
                </h4>
            </div>
            <div class="panel-body hide" id="filter_bd">
                <form id="filer_form" class="form-horizontal set-filter-form" role="form">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="inputPassword2" class="col-sm-2 control-label">所属游戏：</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="select_game"></select>
                            </div>
                            <label for="inputPassword2" class="col-sm-2 control-label">使用状态：</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="select_state"></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="inputPassword2" class="col-sm-2 control-label">套餐名称：</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="search_name" name="search_name" placeholder="模糊查询">
                            </div>
                            <label for="inputPassword2" class="col-sm-2 control-label">套餐金额：</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="search_value" name="search_value">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="button" class="btn btn-primary filter-btn">查询</button>
                            </div>
                        </div>
                    </div>
                </form>
               
            </div>
        </div>
        <!--/ panel end -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">配置列表</h4>
            </div>
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="fixed-table-container">
                        <!--{ fixed-table-body -->
                        <div class="fixed-table-body tab_body">
                            <table id="table" class="table-striped table table-hover">
                                <thead>
                                    <tr>
                                        <th class="bs-checkbox " width="6%">
                                            <div class="th-inner">ID</div>
                                        </th>
                                        <th width="18%"><div class="th-inner sortable both">所属游戏</div></th>
                                        <th width="28%"><div class="th-inner">套餐名称</div></th>
                                        <th width="8%"><div class="th-inner">套餐金额</div></th>
                                        <th width="6%"><div class="th-inner">使用状态</div></th>
                                        <th width="4%"><div class="th-inner">拼卡规则</div></th>
                                        <th width="16%"><div class="th-inner">添加时间</div></th>
                                        <th width="6%"><div class="th-inner">操作</div></th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    <tr data-id="1001">
                                        <td class="bs-checkbox">
                                            <div class="td-inner-tx">1001</div>
                                        </td>
                                        <td><div class="td-inner-tx id_txt">超神战记（特卖）08</div></td>
                                        <td>
                                            <div class="td-inner-tx id_txt">
                                                大闹天宫：悟空首/续充套餐1
                                            </div>
                                        </td>
                                        <td><div class="td-inner-tx id_txt">300</div></td>
                                        <td><div class="td-inner-tx id_txt">已下线</div></td>
                                        <td><div class="td-inner-tx id_txt">300</div></td>
                                        <td><div class="td-inner-tx">2016-05-31 10:19:19</div></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm edit-btn" data-id="1001" data-title="修改配置信息">
                                                    <i class="glyphicons glyphicons-pencil fn-mr-10"></i>修改
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-id="1002">
                                        <td class="bs-checkbox">
                                            <div class="td-inner-tx">1002</div>
                                        </td>
                                        <td><div class="td-inner-tx id_txt">九阴真经（已下架）</div></td>
                                        <td>
                                            <div class="td-inner-tx id_txt">
                                                大闹天宫：悟空首/续充套餐2
                                            </div>
                                        </td>
                                        <td><div class="td-inner-tx id_txt">6</div></td>
                                        <td><div class="td-inner-tx id_txt">使用中</div></td>
                                        <td><div class="td-inner-tx id_txt">6</div></td>
                                        <td><div class="td-inner-tx">2016-05-31 10:19:19</div></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm edit-btn" data-id="1002" data-title="修改配置信息">
                                                    <i class="glyphicons glyphicons-pencil fn-mr-10"></i>修改
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-id="1003">
                                        <td class="bs-checkbox">
                                            <div class="td-inner-tx">1003</div>
                                        </td>
                                        <td><div class="td-inner-tx id_txt">凡仙</div></td>
                                        <td>
                                            <div class="td-inner-tx id_txt">
                                                大闹天宫：悟空首/续充套餐3
                                            </div>
                                        </td>
                                        <td><div class="td-inner-tx id_txt">200</div></td>
                                        <td><div class="td-inner-tx id_txt">使用中</div></td>
                                        <td><div class="td-inner-tx id_txt">200</div></td>
                                        <td><div class="td-inner-tx">2016-05-31 10:19:19</div></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm edit-btn" data-id="1003" data-title="修改配置信息">
                                                    <i class="glyphicons glyphicons-pencil fn-mr-10"></i>修改
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-id="1004">
                                        <td class="bs-checkbox">
                                            <div class="td-inner-tx">1004</div>
                                        </td>
                                        <td><div class="td-inner-tx id_txt">刀塔传奇（偶玩端</div></td>
                                        <td>
                                            <div class="td-inner-tx id_txt">
                                                大闹天宫：悟空首/续充套餐4
                                            </div>
                                        </td>
                                        <td><div class="td-inner-tx id_txt">100</div></td>
                                        <td><div class="td-inner-tx id_txt">已下线</div></td>
                                        <td><div class="td-inner-tx id_txt">100</div></td>
                                        <td><div class="td-inner-tx">2016-05-31 10:19:19</div></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm edit-btn" data-id="1004" data-title="修改配置信息">
                                                    <i class="glyphicons glyphicons-pencil fn-mr-10"></i>修改
                                                </button>
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
                            <button class="btn btn-success add-btn" data-title="新增规则">
                                <i class="glyphicons glyphicons-plus fn-mr-10"></i>新增规则
                            </button>
                        </div>
                        <div class="pull-right pagination">
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

    <!--{ 新增Modal -->
    <div class="modal fade" id="pinkaModal" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                    </button>
                    <h4 class="modal-title" id="dataFormModalLabel">新增套餐拼卡规则</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-sm-5 paddingR_0">
                                <label for="inputPassword" class="control-label">套餐名称<samp class="f-samp">*</samp></label>
                                <div>
                                    <input type="text" class="form-control" id="pinka_manu" name="pinka_manu" value="">
                                </div>
                            </div>
                            <div class="col-sm-2 paddingR_0">
                                <label for="inputPassword" class="control-label">套餐金额<samp class="f-samp">*</samp></label>
                                <div>
                                    <input type="text" class="form-control" id="pinka_price" name="pinka_price" value="">
                                </div>
                            </div>
                            <div class="col-sm-2 paddingR_0">
                                <label for="inputPassword" class="control-label">使用状态<samp class="f-samp">*</samp></label>
                                <select class="form-control" id="pinka_state">
                                      
                                </select>
                            </div>
                            <div class="col-sm-3 fix">
                                <label for="inputPassword" class="control-label">所属游戏<samp class="f-samp">*</samp></label>
                                <select class="form-control" id="pinka_game">
                                      
                                </select>
                            </div>          
                        </div>
                        <div class="row margin_top29">
                            <div class="col-sm-12">
                                <label for="inputPassword" class="control-label">拼卡规则</label>
                                <div>
                                    <input type="text" class="form-control" id="pinka_rule" name="pinka_rule" value="">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="won_tip">红色星号为必填项</div>
                </div>
                <div class="modal-footer setconfig">
                    <button type="button" class="btn btn-primary" id="pinka_btn">确定</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
    <!--/ 新增Modal }-->
    <!--{ 修改Modal -->
    <div class="modal fade" id="fixFormModal" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                    </button>
                    <h4 class="modal-title" id="dataFormModalLabel">
                        <i class="glyphicons glyphicons-cogwheel fn-mr-5"></i>                                                     <strong>设置-</strong>
                        <span class="font_14">修改拼卡规则</span>
                    </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <div class="col-sm-12 fix">
                               <label class="control-label">所属游戏<samp class="f-samp">*</samp></label>
                                <select class="form-control usegame" id="pinka_game_fix">
                                      
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                               <div class="col-sm-12">
                               <label for="inputPassword" class="control-label">套餐名称<samp class="f-samp">*</samp></label>
                                <input type="text" class="form-control" id="pinka_manu_fix" name="pinka_manu_fix" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="inputPassword" class="control-label">套餐金额<samp class="f-samp">*</samp></label>
                                <input type="text" class="form-control" id="pinka_price_fix" name="pinka_price_fix" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="inputPassword" class="control-label">使用中状态<samp class="f-samp">*</samp></label>
                                <select class="form-control" id="pinka_state_fix">
                                      
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="inputPassword" class="control-label">拼卡规则<samp class="f-samp visibility">*</samp></label>
                                <input type="text" class="form-control" id="pinka_rule_fix" name="pinka_rule_fix" value="">
                            </div>
                        </div>
                    </form>
                    <div class="won_tip_fix">红色星号为必填项</div>
                </div>
                <div class="modal-footer config_fix">
                    <button type="button" class="btn btn-danger" id="fix_btn">确定修改</button>
                </div>
            </div>
        </div>
    </div>
    <!--/ 修改Modal }-->
    <!--{ Small modal -->
    <div class="modal fade bs-example-modal-sm" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body" id="alert_tx"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" id="alert_ok">确定删除</button>
                </div>
            </div>
        </div>
    </div>
    <!--/ Small modal }-->
    <script src="js/plugins/jquery.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/plugins/bootstrap-select.js"></script>
    <script src="js/pages/pinka.js"></script>
</body>
