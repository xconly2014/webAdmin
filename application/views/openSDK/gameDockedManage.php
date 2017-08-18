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
                游戏对接查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
            </h4>
        </div>
        <div class="panel-body hide" id="filter_bd">
            <form id="form" class="form-horizontal set-filter-form" role="form" method="post" action="http://data.com/open/gameDocked">
                    <div class="row docked_space">
                        <div class="form-group">
                            <label for="inputPassword2" class="col-sm-1 control-label">企业名称：</label>
                            <div class="col-sm-2">
                                <select name="CompanyName_id" class="select" style="width: 100%;">
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
                            <label for="inputPassword2" class="col-sm-1 control-label">游戏类型：</label>
                            <div class="col-sm-2">
                                <select name="option_gameof" class="select" data-search="true" style="width: 100%;">
                                    <option></option>
                                    <option value="434">网络游戏</option>
                                    <option value="433">单机游戏</option>
                                </select>
                            </div>
                            <label for="inputPassword2" class="col-sm-1 control-label">运行平台：</label>
                            <div class="col-sm-2">
                                <select name="option_plaform" class="select" data-search="true" style="width: 100%;">
                                    <option></option>
                                    <option value="434">Android</option>
                                    <option value="433">IOS</option>
                                </select>
                            </div>
                            <label for="inputPassword2" class="col-sm-1 control-label">游戏名称：</label>
                            <div class="col-sm-2">
                                <select name="option_gameName" class="select" style="width: 100%;">
                                    <option></option>
                                    <option value="434">鲁大师</option>
                                    <option value="433">云斗罗</option>
                                    <option value="432">热血</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="inputPassword2" class="col-sm-1 control-label">游戏ID:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="search_name" name="search_name">
                            </div>
                            <label for="inputPassword2" class="col-sm-1 control-label">game_key:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="search_value" name="search_value">
                            </div>
                            <label for="inputPassword2" class="col-sm-1 control-label">支付密钥:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="search_value" name="search_value">
                            </div>
                            <label for="inputPassword2" class="col-sm-1 control-label">上线状态:</label>
                            <div class="col-sm-2">
                                <select name="online_state" class="select" data-search="true" style="width: 100%;">
                                    <option></option>
                                    <option value="434">新建游戏,待审核</option>
                                    <option value="433">审核不通过</option>
                                    <option value="432">重新提交,待审核</option>
                                    <option value="431">审核通过,待发包</option>
                                    <option value="430">已发新包,待测试</option>
                                    <option value="429">测试不通过</option>
                                    <option value="428">测试完成</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="form-group">
                           <label for="inputPassword2" class="col-sm-1 control-label"></label>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary filter-btn">查询</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
        </div>
    </div>
    <!--/ panel end -->

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">游戏对接列表</h4>
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
                                    <th width="14%"><div class="th-inner">游戏名称</div></th>
                                    <th width="20%"><div class="th-inner">企业名称</div></th>
                                    <th width="10%"><div class="th-inner">game_key</div></th>
                                    <th width="12%"><div class="th-inner">支付密钥</div></th>
                                    <th width="13%"><div class="th-inner">接入时间</div></th>
                                    <th width="12%"><div class="th-inner">接入状态</div></th>
                                    <th width="8%"><div class="th-inner">白名单</div></th>
                                    <th width="11%"><div class="th-inner">操作</div></th>
                                </tr>
                            </thead>
                            <tbody id="td_list">
                                <tr data-id="1001">
                                    <td>
                                        <div class="td-inner-tx" data-toggle="popover" title="BrainBread2" data-content="游戏类型：网络游戏<br/>运行平台：android<br/>回调地址：http://www.test.com<br/>安装包地址：www.baidu.com<br/>SDK版本：--" data-placement="right">BrainBread2</div>
                                    </td>
                                    <td><div class="td-inner-tx">广州放一个屁也香实业发展有限公司</div></td>
                                    <td><div class="td-inner-tx">67777a92cf</div></td>
                                    <td><div class="td-inner-tx" >68df8c6f923f0a99</div></td>
                                    <td><div class="td-inner-tx">0000-00-00 00:00:00</div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue docked_new" data-id="1001" title="新建游戏,待">新建游戏,待审核</a></div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue ip_btn" data-id="1001" title="ip白名单">ip白名单</a></div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue docked_produtor" data-id="1001" title="充值产品资料">充值产品资料</a></div></td>
                                </tr>
                                <tr data-id="1002">
                                    <td>
                                        <div class="td-inner-tx" data-toggle="popover" title="天将神兵" data-content="游戏类型：网络游戏<br/>运行平台：android<br/>回调地址：http://www.wwe.com.cn<br/>安装包地址：----<br/>SDK版本：--" data-placement="right">天将神兵</div>
                                    </td>
                                    <td><div class="td-inner-tx">广州放一个屁也香实业发展有限公司</div></td>
                                    <td><div class="td-inner-tx">67777a92cf</div></td>
                                    <td><div class="td-inner-tx" >68df8c6f923f0a99</div></td>
                                    <td><div class="td-inner-tx">0000-00-00 00:00:00</div></td>
                                    <td><div class="td-inner-tx">审核通过,待发包</div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue ip_btn" data-id="1002" title="ip白名单">ip白名单</a></div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue docked_produtor" data-id="1002" title="充值产品资料">充值产品资料</a></div></td>
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

<!--{ ip白名单弹窗 -->
<div class="modal fade" id="ip_mod" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title" id="dataFormModalLabel">白名单</h4>
            </div>
            <div class="modal-body margin_bottom_100">
                无ip白名单
            </div>
        </div>
    </div>
</div>
<!--/ ip白名单弹窗 }-->
<!--{ 接入状态弹窗 -->
<div class="modal fade" id="newgame_mod" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title">接入状态</h4>
            </div>
            <div class="modal-body">
                <form action="http://data.com/open/gameDocked" method="post" id="state_form">
                    <div class="row margin_bottom_35 padding_20">
                        <div class="col-sm-3">当前状态:</div>
                        <div class="col-sm-9 CurrentState">新建游戏,待审核</div>
                    </div>
                    <div class="row margin_bottom_35 padding_20">
                        <div class="col-sm-3">操作:</div>
                        <div class="col-sm-9">
                           <label class="radio-inline">
                              <input type="radio" name="status" id="inlineRadio1" value="5"> 审核通过
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="status" id="inlineRadio2" value="2"> 审核不通过
                            </label>
                        </div>
                    </div>   
                    <div class="row margin_bottom_35 padding_20">
                        <div class="col-sm-3">渠道:</div>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                              <input type="radio" name="channel_id" id="inlineRadio3" value="option3"> 安卓-朋友玩端
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="channel_id" id="inlineRadio4" value="option4"> 安卓-朋友玩光速端
                            </label>
                        </div>
                    </div>
                    <div class="row margin_bottom_35 padding_20">
                        <div class="col-sm-3">备注:</div>
                        <div class="col-sm-9">
                            <textarea class="form-control margin_bottom_15 remark" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row margin_bottom_35 padding_20">
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-danger margin_bottom_100 btn_form">确认修改</button>
                        </div>

                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!--/ 接入状态弹窗 }-->
<!--{ 充值产品资料 -->
<div class="modal fade" id="docked_pro_mod" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title">产品资料</h4>
            </div>
            <div class="modal-body">
                <div class="bootstrap-table margin_bottom_100">
                
                <!--/ fixed-table-toolbar end }-->
                <div class="fixed-table-container">
                    <!--{ fixed-table-body -->
                    <div class="fixed-table-body">
                        <table id="table" class="table-striped table table-hover">
                            <thead>
                                <tr>
                                    <th width="10%"><div class="th-inner">商品ID</div></th>
                                    <th width="5%"><div class="th-inner">商品价格（元）</div></th>
                                    <th width="5%"><div class="th-inner">商品描述</div></th>
                                    
                                </tr>
                            </thead>
                            <tbody id="id_produc">
                                <tr data-id="1001">
                                    <td><div class="td-inner-tx">1</div></td>
                                    <td><div class="td-inner-tx">110</div></td>
                                    <td><div class="td-inner-tx">111</div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/ fixed-table-body end }-->
                </div>
                
            </div>
        </div>
        </div>
    </div>
</div>
<!--/ 充值产品资料 }-->


<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/select2.min.js"></script>
<script src="js/common.js"></script>
<script src="js/plugins/layer/layer.js"></script>
<script src="js/pages/open/gameDockedManage.js"></script>
</body>
