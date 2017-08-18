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
    <link rel="stylesheet" href="css/set.css">
    <link rel="stylesheet" href="css/select.css">
    <link rel="stylesheet" href="css/daterangepicker.css">

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
                游戏礼包查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
            </h4>
        </div>
        <div class="panel-body hide" id="filter_bd">
            <form id="form" class="form-horizontal" method="post" action="http://data.com/open/gameGift">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">游戏名称：</label>
                            <div class="col-sm-4">
                                <select name="game_id" class="select" style="width: 100%;">
                                    <option></option>
								    <option value="434">天天放屁</option>
                                    <option value="433">BrainBread2</option>
                                    <option value="432">哈哈哈哈</option>
                                    <option value="431">egg说说</option>
                                    <option value="430">第十四11</option>
                                    <option value="429">用户3666</option>
                                    <option value="428">用户手册666</option>
                                    <option value="427">ere222</option>
                                </select>
                            </div>
                             <label class="col-sm-2 control-label">运行平台：</label>
                             <div class="col-sm-4">
                                <select name="game_id" class="select" data-search="true" style="width: 100%;">
                                    <option></option>
                                    <option value="1">Android</option>
                                    <option value="2">IOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">结算月份：</label>
                            <div class="col-sm-4 search-panel">
                                <div class="date-picker">
                                    <input type="text" class="form-control datepicker">
                                </div>
                            </div>
                             <label  class="col-sm-2 control-label">类型：</label>
                             <div class="col-sm-4">
                                <select name="game_id" class="select" data-search="true" style="width: 100%;">
                                    <option></option>
                                    <option value="1">独家</option>
                                    <option value="2">新手</option>
                                    <option value="3">特权</option>
                                    <option value="4">邀请码</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input type="hidden" name="start_month">
                                <input type="hidden" name="end_month">
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
            <h4 class="panel-title">游戏礼包列表</h4>
        </div>
        <div class="panel-body">
            <div class="bootstrap-table">
                
                <!--/ fixed-table-toolbar end }-->
                <div class="fixed-table-container">
                    <!--{ fixed-table-body -->
                    <div class="fixed-table-body">
                        <table id="table" class="table-striped table table-hover">
                            <thead>
                                <tr>
                                    <th width="16%"><div class="th-inner">开始时间</div></th>
                                    <th width="16%"><div class="th-inner">结束时间</div></th>
                                    <th width="27%"><div class="th-inner">游戏名称</div></th>
                                    <th width="10%"><div class="th-inner">运行平台</div></th>
                                    <th width="6%"><div class="th-inner">类型</div></th>
                                    <th width="15%"><div class="th-inner">礼包名称</div></th>
                                    <th width="10%"><div class="th-inner">操作</div></th>
                                    
                                </tr>
                            </thead>
                            <tbody id="td_list">
                                <tr data-id="1001">
                                    <td><div class="td-inner-tx">2016-08-10 09:39:00</div></td>
                                    <td><div class="td-inner-tx">2016-08-30 09:25:00</div></td>
                                    <td><div class="td-inner-tx">超级玛丽d</div></td>
                                    <td><div class="td-inner-tx">Android</div></td>
                                    <td><div class="td-inner-tx">独家</div></td>
                                    <td><div class="td-inner-tx">的风格广泛</div></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm export" data-id="1001" title="导出礼包">导出礼包</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-id="1002">
                                    <td><div class="td-inner-tx">2016-08-10 09:39:00</div></td>
                                    <td><div class="td-inner-tx">2016-08-30 09:25:00</div></td>
                                    <td><div class="td-inner-tx">超级玛丽d</div></td>
                                    <td><div class="td-inner-tx">Android</div></td>
                                    <td><div class="td-inner-tx">独家</div></td>
                                    <td><div class="td-inner-tx">的风格广泛</div></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm export" data-id="1002" title="导出礼包">导出礼包</a>
                                        </div>
                                    </td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                    <!--/ fixed-table-body end }-->
                </div>
                <!--{ fixed-table-pagination -->
                    <div class="fixed-table-pagination clearfix" id="pagina">
                        <div class="pull-left pagination-detail">
                            
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

<!--{ 导出礼包 -->
<div class="modal fade" id="export_mod" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title" id="dataFormModalLabel">导出礼包</h4>
            </div>
            <div class="modal-body margin_bottom_100 xls">
                
            </div>
        </div>
    </div>
</div>
<!--/ 导出礼包 }-->

<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/select2.min.js"></script>
<script src="js/plugins/layer/layer.js"></script>
<script src="js/plugins/moment.min.js"></script>
<script src="js/plugins/daterangepicker.min.js"></script>
<script src="js/common.js"></script>
<script src="js/pages/open/gameGiftManage.js"></script>
</body>
