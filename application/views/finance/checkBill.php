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
                对账单查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
            </h4>
        </div>
        <div class="panel-body hide" id="filter_bd">
            <form id="form" class="form-horizontal">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">企业名称：</label>
                            <div class="col-sm-4">
                                <select name="corporation_id" class="select" style="width: 100%;">
                                    <option></option>
                                    <option value="1">广州有趣</option>
                                    <option value="2">合同条款</option>
                                </select>
                            </div>
                            <label class="col-sm-2 control-label">游戏名称：</label>
                            <div class="col-sm-4">
                                <select name="game_id" class="select" style="width: 100%;">
                                    <option></option>
                                    <option value="1">广州有趣</option>
                                    <option value="2">合同条款</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">运行平台：</label>
                            <div class="col-sm-4">
                                <select name="platform_id" class="select" data-search="true" style="width: 100%;">
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
                            <label class="col-sm-2 control-label">结算月份：</label>
                            <div class="col-sm-4 search-panel">
                                <div class="date-picker">
                                    <input type="text" class="form-control datepicker" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input type="hidden" name="start_month">
                                <input type="hidden" name="end_month">
                                <input type="hidden" id="orderby" name="orderby">
                                <button type="button" class="btn btn-primary filter-btn">
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
                                    <th width="10%"><div class="th-inner">月份</div></th>
                                    <th width="25%"><div class="th-inner">企业名称</div></th>
                                    <th width="15%"><div class="th-inner">游戏名称</div></th>
                                    <th width="8%"><div class="th-inner">分成比例</div></th>
                                    <th width="12%"><div class="th-inner">分成金额(税前)</div></th>
                                    <th width="20%"><div class="th-inner">合同编号</div></th>
                                    <th width="10%"><div class="th-inner">结算状态</div></th>
                                </tr>
                            </thead>
                            <tbody id="td_list">
                                <tr data-id="1001">
                                    <td><div class="td-inner-tx">2016年08月</div></td>
                                    <td>
                                        <div class="td-inner-tx td" data-toggle="popover" title="广州优趣有限科技公司" data-content="充值金额：10<br/>不结算金额：20<br />渠道费：10%" data-placement="right">
                                            广州优趣有限科技公司
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-inner-tx" data-toggle="popover" title="超级玛丽d" data-content="运行平台：Android" data-placement="top">超级玛丽d
                                        </div>
                                    </td>
                                    <td><div class="td-inner-tx">10%</div></td>
                                    <td><div class="td-inner-tx">19%</div></td>
                                    <td>
                                        <div class="td-inner-tx" data-toggle="tooltip" title="PYW-JRQD-20160607-36666">
                                            PYW-JRQD-20160607-36666
                                        </div>
                                    </td>
                                    <td><div class="td-inner-tx">已申请结算</div></td>
                                </tr>
                                <tr data-id="1002">
                                    <td><div class="td-inner-tx">2016年08月</div></td>
                                    <td>
                                        <div class="td-inner-tx td" data-toggle="popover" title="我的天，什么鬼公司啊，这么奇葩" data-content="充值金额：10<br/>不结算金额：40<br />渠道费：15%" data-placement="right">
                                            我的天，什么鬼公司啊，这么奇葩
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-inner-tx" data-toggle="popover" title="天使就是魔鬼" data-content="运行平台：Android" data-placement="top">天使就是魔鬼
                                        </div>
                                    </td>
                                    <td><div class="td-inner-tx">10%</div></td>
                                    <td><div class="td-inner-tx">19%</div></td>
                                    <td>
                                        <div class="td-inner-tx" data-toggle="tooltip" title="PYW-JRQD-20160607-37777">
                                            PYW-JRQD-20160607-37777
                                        </div>
                                    </td>
                                    <td><div class="td-inner-tx">已申请结算</div></td>
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

<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/select2.min.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/layer/layer.js"></script>
<script src="js/plugins/moment.min.js"></script>
<script src="js/plugins/daterangepicker.min.js"></script>
<script src="js/common.js"></script>
<script>
    $(function () {
        dataCtrl.currNav('side_3');
        dataCtrl.currNav('page_nav_3');
        $('.datepicker').daterangepicker(dateRangeOption, function (start, end) {
            var starDate = start.format('YYYY-MM-DD'),
                endDate = end.format('YYYY-MM-DD');

            console.log('你选择了: ' + starDate + ' ～ ' + endDate);

            //给开始和结束时间传值
            $('input[name="start_month"]').val(starDate);
            $('input[name="end_month"]').val(endDate);
        });

        //查询
        $('div#DataTables_paginate a').click(function () {
            var $filterFrm = $("#form"), tmpHref = $(this).attr('href');
            tmpHref = tmpHref.replace(/\/selCon\//, "");
            $filterFrm.attr("action", tmpHref);
            $filterFrm.submit();
            return false;
        });
    })
</script>
</body>
