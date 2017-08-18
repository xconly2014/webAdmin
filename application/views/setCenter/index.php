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
                    配置查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
                </h4>
            </div>
            <div class="panel-body hide" id="filter_bd">
                <form id="filer_form" class="form-horizontal set-filter-form" role="form">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="inputPassword2" class="col-sm-2 control-label">配置名：</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="search_name" name="search_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword2" class="col-sm-2 control-label">配置值：</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="search_value" name="search_value">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-primary btn-lg filter-btn">查询</button>
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
                    <!--{ fixed-table-toolbar -->
                    <div class="fixed-table-toolbar">
                        <div class="columns columns-left btn-group pull-left">
                            <button class="btn btn-success add-btn" data-title="新增配置">
                                <i class="glyphicons glyphicons-plus fn-mr-10"></i>新增配置
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
                                        <th class="bs-checkbox " width="4%">
                                            <div class="th-inner"><input type="checkbox" class="check-all"></div>
                                        </th>
                                        <th width="18%"><div class="th-inner sortable both">配置名</div></th>
                                        <th width="28%"><div class="th-inner">配置值</div></th>
                                        <th width="28%"><div class="th-inner">配置描述</div></th>
                                        <th width="6%"><div class="th-inner">状态</div></th>
                                        <th width="16%"><div class="th-inner">操作</div></th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    <tr data-id="1001">
                                        <td class="bs-checkbox">
                                            <label><input name="btSelectItem" type="checkbox"></label>
                                        </td>
                                        <td><div class="td-inner-tx">cdn_domain_list</div></td>
                                        <td>
                                            <div class="td-inner-tx" data-placement="top" data-toggle="tooltip" title="[{″name″:″网宿″,″domain″:″http://dl1.pyw.cn″,″weight″:7},{″name″:″阿里″,″domain″:″http://dl.pyw.cn″,″weight″:3}]">
                                                [{″name″:″网宿″,″domain″:″http://dl1.pyw.cn″,″weight″:7},{″name″:″阿里″,″domain″:″http://dl.pyw.cn″,″weight″:3}]
                                            </div>
                                        </td>
                                        <td><div class="td-inner-tx">cdn 域名列表（含权重）</div></td>
                                        <td><div class="td-inner-tx">有效</div></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm edit-btn" data-id="1001" data-title="修改配置信息">
                                                    <i class="glyphicons glyphicons-pencil fn-mr-5"></i>修改
                                                </button>
                                                <button class="btn btn-primary btn-sm del-btn" data-id="1001" data-content="确定要删除所选择的数据吗？">
                                                    <i class="glyphicons glyphicons-remove fn-mr-5"></i>删除
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-id="1002">
                                        <td class="bs-checkbox">
                                            <label><input name="btSelectItem" type="checkbox"></label>
                                        </td>
                                        <td><div class="td-inner-tx">sdkcpreq_alert_recv</div></td>
                                        <td><div class="td-inner-tx">wugl@yyft.com, lamng.gz@gmail.com</div></td>
                                        <td><div class="td-inner-tx">SDK CP 回调失败报警email接收人，多个用,分开</div></td>
                                        <td><div class="td-inner-tx">有效</div></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm edit-btn" data-id="1002" data-title="修改配置信息">
                                                    <i class="glyphicons glyphicons-pencil fn-mr-5"></i>修改
                                                </button>
                                                <button class="btn btn-primary btn-sm del-btn" data-id="1002" data-content="确定要删除所选择的数据吗？">
                                                    <i class="glyphicons glyphicons-remove fn-mr-5"></i>删除
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-id="1003">
                                        <td class="bs-checkbox">
                                            <label><input name="btSelectItem" type="checkbox"></label>
                                        </td>
                                        <td><div class="td-inner-tx">sms_alert_receiver</div></td>
                                        <td><div class="td-inner-tx">13435695274</div></td>
                                        <td><div class="td-inner-tx">同一ip短信发送数量预警，接收号码</div></td>
                                        <td><div class="td-inner-tx">有效</div></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm edit-btn" data-id="1003" data-title="修改配置信息">
                                                    <i class="glyphicons glyphicons-pencil fn-mr-5"></i>修改
                                                </button>
                                                <button class="btn btn-primary btn-sm del-btn" data-id="1003" data-content="确定要删除所选择的数据吗？">
                                                    <i class="glyphicons glyphicons-remove fn-mr-5"></i>删除
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-id="1004">
                                        <td class="bs-checkbox">
                                            <label><input name="btSelectItem" type="checkbox"></label>
                                        </td>
                                        <td><div class="td-inner-tx">priceverify_conf</div></td>
                                        <td><div class="td-inner-tx">500,35</div></td>
                                        <td><div class="td-inner-tx">价格校验配置：单价超过500而且折扣低于35%,列为校验不通过</div></td>
                                        <td><div class="td-inner-tx">有效</div></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm edit-btn" data-id="1004" data-title="修改配置信息">
                                                    <i class="glyphicons glyphicons-pencil fn-mr-5"></i>修改
                                                </button>
                                                <button class="btn btn-primary btn-sm del-btn" data-id="1004" data-content="确定要删除所选择的数据吗？">
                                                    <i class="glyphicons glyphicons-remove fn-mr-5"></i>删除
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
                            <button class="btn btn-success add-btn" data-title="新增配置信息">
                                <i class="glyphicons glyphicons-plus fn-mr-10"></i>新增配置
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

    <!--{ Modal -->
    <div class="modal fade" id="dataFormModal" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                    </button>
                    <h4 class="modal-title" id="dataFormModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">配置名<samp class="f-samp">*</samp></label>
                            
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">配置值<samp class="f-samp">*</samp></label>
                            
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="value" name="value" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-sm-2 control-label">配置描述</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" id="description" name="description"></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="won_tip">红色星号为必填项</div>
                </div>
                <div class="modal-footer setconfig">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" id="ok_new_btn">确定</button>
                    
                </div>
                <div class="modal-footer changeconfig">
                    <button type="button" class="btn btn-danger" id="changeconfig">确定修改</button>
                </div>
            </div>
        </div>
    </div>
    <!--/ Modal }-->

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
    <script src="js/pages/setIndex.js"></script>
</body>
