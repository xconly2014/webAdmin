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
                运营事件查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
            </h4>
        </div>
        <div class="panel-body hide" id="filter_bd">
            <form id="form" class="form-horizontal" action="open/eventList" method="post">
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
                                    <option value="426">直辖市</option>
                                    <option value="425">预发布fdfd</option>
                                    <option value="424">62测试</option>
                                    <option value="423">%#%$#{}４４４我▇★❼❽</option>
                                    <option value="422">--@##@￥@#%是的倒萨d—_@22</option>
                                    <option value="421">战斗011</option>
                                    <option value="420">cp支_付:（lv)：99-8_66gd</option>
                                    <option value="419">订单：(cp33_223-2fff32)</option>
                                    <option value="418">用户手册66</option>
                                    <option value="417">用户手册</option>
                                    <option value="416">用户手册</option>
                                    <option value="415">测试后台同步隐藏</option>
                                </select>
                            </div>
                            <label class="col-sm-2 control-label">运行平台：</label>
                            <div class="col-sm-4">
                                <select name="platform_id" class="select" data-search="true" style="width: 100%;">
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
                            <label class="col-sm-2 control-label">事件类型：</label>
                            <div class="col-sm-4">
                                <select name="event_type" class="select" data-search="true" style="width: 100%;">
                                    <option></option>
                                    <option value="1">开测</option>
                                    <option value="2">开服</option>
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
            <h4 class="panel-title">运营事件列表</h4>
        </div>
        <div class="panel-body">
            <div class="bootstrap-table">
                <div class="fixed-table-container">
                    <!--{ fixed-table-body -->
                    <div class="fixed-table-body">
                        <table id="table" class="table-striped table table-hover">
                            <thead>
                                <tr>
                                    <th width="20%"><div class="th-inner">开始时间</div></th>
                                    <th width="20%"><div class="th-inner">结束时间</div></th>
                                    <th width="30%"><div class="th-inner">游戏名称</div></th>
                                    <th width="15%"><div class="th-inner">运行平台</div></th>
                                    <th width=15%"><div class="th-inner">事件类型</div></th>
                                </tr>
                            </thead>
                            <tbody id="td_list">
                                <tr data-id="1001">
                                    <td><div class="td-inner-tx">2015-06-10 00:00:00</div></td>
                                    <td><div class="td-inner-tx">2016-06-10 00:00:00</div></td>
                                    <td><div class="td-inner-tx">测试全境封锁</div></td>
                                    <td><div class="td-inner-tx">Android</div></td>
                                    <td><div class="td-inner-tx">开服</div></td>
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
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/select2.min.js"></script>
<script src="js/plugins/moment.min.js"></script>
<script src="js/plugins/daterangepicker.min.js"></script>
<script src="js/common.js"></script>
<script>
    $(function () {
        //侧边主菜单
        dataCtrl.currNav('side_3');
        dataCtrl.currNav('page_nav_2');

        $('.datepicker').daterangepicker(dateRangeOption, function (start, end) {
            var starDate = start.format('YYYY-MM-DD'),
                endDate = end.format('YYYY-MM-DD');

            console.log('你选择了: ' + starDate + ' ～ ' + endDate);

            //给开始和结束时间传值
            $('input[name="start_month"]').val(starDate);
            $('input[name="end_month"]').val(endDate);
        });

        //查询|分页
        $('div#DataTables_paginate a').click(function(){
            var $filterFrm = $("#form");
            var tmpHref = $(this).attr('href');
            tmpHref = tmpHref.replace(/\/selCon\//,"");
            $filterFrm.attr("action", tmpHref);
            $filterFrm.submit();
            return false;
        });

        /*游戏名称*/
        var gameArr=[
                {id:0,name:"天龙八部3D"},
                {id:1,name:"2全民奇迹-光速端-YW"},
                {id:2,name:"暗黑黎明（已下架）"},
                {id:3,name:"神魔"},
                {id:4,name:"波斯之刃"},
                {id:5,name:"古惑仔"},
                {id:6,name:"超神战记"},
                {id:7,name:"天龙八部3D"},
                {id:8,name:"超神战记（特卖）08"},
                {id:9,name:"超神战记（特卖）09"},
                {id:10,name:"九阴真经（已下架）"},
                {id:11,name:"凡仙"},
                {id:12,name:"决战沙城"},
                {id:13,name:"十万个冷笑话"},
                {id:14,name:"乱斗西游2"},
                {id:15,name:"天龙八部3D"},
                {id:16,name:"女神联盟"},
                {id:17,name:"刀塔传奇（偶玩端"},
                {id:18,name:"天龙八部3D"}
            ],
            game_name=$('#game_name'),
            option_initText="<option value='' selected disabled>请选择</option>",
            options_game="";

        /*所属游戏select框填充*/
        $.each(gameArr,function(i,val){
            options_game+="<option value='"+val.id+"'>"+val.name+"</option>";
            if(i==gameArr.length-1){
                game_name.html(options_game);
                game_name.prepend(option_initText);
            }

        });

    });
</script>
</body>
