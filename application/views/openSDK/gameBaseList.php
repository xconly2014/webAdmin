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
                基础资料查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
            </h4>
        </div>
        <div class="panel-body hide" id="filter_bd">
            <form id="form" class="form-horizontal" role="form" method="post" action="http://data.com/open/baseInfo">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-sm-1 control-label">企业名称：</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="search_name" name="search_name" placeholder="模糊查询">
                                </div>
                                <label class="col-sm-1 control-label">游戏名称：</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="search_value" name="search_value" placeholder="模糊查询">
                                </div>
                                <label class="col-sm-1 control-label">运行平台：</label>
                                <div class="col-sm-3">
                                    <select class="form-control" id="option_plaform"></select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">GAME_KEY:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="search_name" name="search_name">
                                </div>
                                <label class="col-sm-1 control-label">游戏密钥:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="search_value" name="search_value">
                                </div>
                                <div class="col-sm-3 col-sm-offset-1">
                                    <label class="control-label" for="status">
                                        <input type="checkbox" name="status" id="status" value="3">
                                        只显示需更新资料的游戏
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-11 col-sm-offset-1">
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
            <h4 class="panel-title">基础资料列表</h4>
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
                                    <th width="16%"><div class="th-inner">游戏名称</div></th>
                                    <th width="10%"><div class="th-inner">运营推广字段</div></th>
                                    <th width="25%"><div class="th-inner">企业名称</div></th>
                                    <th width="8%"><div class="th-inner">简介</div></th>
                                    <th width="8%"><div class="th-inner">图标及截图</div></th>
                                    <th width="17%"><div class="th-inner">客服邮箱</div></th>
                                    <th width="10%"><div class="th-inner">客服电话</div></th>
                                    <th width="6%"><div class="th-inner">操作</div></th>
                                </tr>
                            </thead>
                            <tbody id="td_list">
                                <tr data-id="1001">
                                    <td>
                                        <div class="td-inner-tx" data-toggle="popover" title="BrainBread1" data-content="游戏类型：网络游戏<br/>运行平台：android<br/>游戏分类：角色<br/>支持语言：英文<br/>资费类型：解锁付费" data-placement="right">BrainBread1</div>
                                    </td>
                                    <td><div class="td-inner-tx"></div></td>
                                    <td><div class="td-inner-tx">test-cp确认订单状态变为部分完成</div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue check" data-id="1001">查看简介</a></div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue logo_btn" data-id="1001">图标及截图</a></div></td>
                                    <td><div class="td-inner-tx">1@1.com</div></td>
                                    <td><div class="td-inner-tx">020-84561542</div></td>
                                    <td>
                                        <div class="btn-group">
                                        <a href="javascript:void(0);" class="a_font_blue step" data-id="1001">同步</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-id="1002">
                                    <td>
                                        <div class="td-inner-tx" data-toggle="popover" title="BrainBread2" data-content="游戏类型：网络游戏<br/>运行平台：android<br/>游戏分类：角色<br/>支持语言：英文<br/>资费类型：解锁付费" data-placement="right">BrainBread2</div>
                                    </td>
                                    <td><div class="td-inner-tx"></div></td>
                                    <td><div class="td-inner-tx">test-cp确认订单状态变为部分完成</div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue check" data-id="1002">查看简介</a></div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue logo_btn" data-id="1002">图标及截图</a></div></td>
                                    <td><div class="td-inner-tx">1@1.com</div></td>
                                    <td><div class="td-inner-tx">111111</div></td>
                                    <td>
                                        <div class="btn-group">
                                        <a href="javascript:void(0);" class="a_font_blue step" data-id="1002">同步</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-id="1003">
                                    <td>
                                        <div class="td-inner-tx" data-toggle="popover" title="BrainBread3" data-content="游戏类型：网络游戏<br/>运行平台：android<br/>游戏分类：角色<br/>支持语言：英文<br/>资费类型：解锁付费" data-placement="right">BrainBread3</div>
                                    </td>
                                    <td><div class="td-inner-tx"></div></td>
                                    <td><div class="td-inner-tx">test-cp确认订单状态变为部分完成</div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue check" data-id="1003">查看简介</a></div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue logo_btn" data-id="1003">图标及截图</a></div></td>
                                    <td><div class="td-inner-tx">1@1.com</div></td>
                                    <td><div class="td-inner-tx">111111</div></td>
                                    <td>
                                        <div class="btn-group">
                                        <a href="javascript:void(0);" class="a_font_blue step" data-id="1003">同步</a>
                                        </div>
                                    </td>
                                </tr> 
                                <tr data-id="1004">
                                    <td>
                                        <div class="td-inner-tx" data-toggle="popover" title="BrainBread4" data-content="游戏类型：网络游戏<br/>运行平台：android<br/>游戏分类：角色<br/>支持语言：英文<br/>资费类型：解锁付费" data-placement="right">BrainBread4</div>
                                    </td>
                                    <td><div class="td-inner-tx"></div></td>
                                    <td><div class="td-inner-tx">test-cp确认订单状态变为部分完成</div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue check" data-id="1004">查看简介</a></div></td>
                                    <td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue logo_btn" data-id="1004">图标及截图</a></div></td>
                                    <td><div class="td-inner-tx">1@1.com</div></td>
                                    <td><div class="td-inner-tx">111111</div></td>
                                    <td>
                                        <div class="btn-group">
                                        <a href="javascript:void(0);" class="a_font_blue step" data-id="1004">同步</a>
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

<!--{ 简介弹窗 -->
<div class="modal fade" id="check_detail" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title" id="dataFormModalLabel">简介查看</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-3">一句话简介</div>
                    <div class="col-sm-8 div_border short_introduce">
                    我快点快点发发呆大开发的少女发单费是的的可能恢复的看法拿贷款
                    </div>
                </div>
                 <div class="row">
                    <div class="col-sm-3">游戏简介</div>
                    <div class="col-sm-8 div_border game_intro">我快点快点发发呆大开发的少女发单费是的的可能恢复的看法拿贷款</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ 简介弹窗 }-->
<!--{ 图标及截图弹窗 -->
<div class="modal fade" id="logo_mod" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title">图标及截图</h4>
            </div>
            <div class="modal-body">
                <div>图标</div>
                <div class="logo_show">
                    <img src="img.gif" alt="" width="">
                </div>
                <div>截图</div>
                <div class="img_show">
                    <img src="xx.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ 图标及截图弹窗 }-->
<!--{ 同步 -->
<div class="modal fade" id="in_step" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title">同步</h4>
            </div>
            <div class="modal-body">
                <div class="baselist_marbottom10">游戏名称：</div>
                <input name="name" type="text" id="in_step_game" disabled="" value="" class="baselist_marbottom30">
                <div class="baselist_marbottom30">
                    同步后，游戏资料将同步至官网后台系统，请仔细审核后再操作！ 是否同步?
                </div>
                
                <button type="submit" class="btn btn-danger" id="edit">确认同步</button>
            </div>
        </div>
    </div>
</div>
<!--/ 同步 }-->

<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/common.js"></script>
<script src="js/plugins/layer/layer.js"></script>
<script src="js/pages/open/gameBaseList.js"></script>
</body>
