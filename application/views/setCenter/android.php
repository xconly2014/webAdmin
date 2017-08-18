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
                    版本查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
                </h4>                
            </div>
            <div class="panel-body hide" id="filter_bd">
                <form id="filer_form" class="form-horizontal set-filter-form" role="form">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputPassword2" class="col-sm-4 control-label">版本号：</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="search_name" name="search_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputPassword2" class="col-sm-4 control-label">版本名称：</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="search_name" name="search_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" class="col-sm-offset-1 btn btn-primary filter-btn">查询</button>
                        </div>
                    </div>
                </form>               
            </div>
        </div>
        <!--/ panel end -->
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">版本列表</h4>
            </div>
            <div class="panel-body">
                <div class="bootstrap-table">
                    <!--{ fixed-table-toolbar -->
                    <div class="fixed-table-toolbar">
                        <div class="columns columns-left btn-group pull-left">
                            <button class="btn btn-success add-btn" data-title="新增配置信息">
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
                                        <th width="6%"><div class="th-inner">版本号</div></th>
                                        <th width="6%"><div class="th-inner">版本名称</div></th>
                                        <th width="6%"><div class="th-inner">内容标题</div></th>
                                        <th width="6%"><div class="th-inner">下载路径</div></th>
                                        <th width="6%"><div class="th-inner">推广渠道</div></th>
                                        <th width="6%"><div class="th-inner">版本标题</div></th>
                                        <th width="6%"><div class="th-inner">版本信息</div></th>
                                        <th width="6%"><div class="th-inner">整包MD5</div></th>
                                        <th width="6%"><div class="th-inner">文件大小</div></th>
                                        <th width="6%"><div class="th-inner">发布日期</div></th>
                                        <th width="6%"><div class="th-inner">状态(强制/非强制)</div></th>
                                        <th width="6%"><div width="100%" class="th-inner">是否</div></th>
                                        <th width="20%"><div  class="th-inner">操作</div></th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    <tr data-id="1001">
                                        <td class="bs-checkbox">
                                            <label><input name="btSelectItem" type="checkbox"></label>
                                        </td>
                                        <td><div class="td-inner-tx">cdn_domain_list</div></td>
                                        <td>
                                            <div class="td-inner-tx">好好学习</div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">好好学习</div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">好好学习</div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">好好学习</div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">好好学习</div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">好好学习</div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">好好学习</div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">好好学习</div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">好好学习</div>
                                        </td>
                                        <td><div class="td-inner-tx">cdn 域名列表（含权重）</div></td>
                                        <td><div class="td-inner-tx">有效</div></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary btn-sm edit-btn" data-id="1001" data-title="修改配置信息">
                                                    <i class="glyphicons glyphicons-pencil fn-mr-5"></i>修改
                                                </a>
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
                                        <td><div class="td-inner-tx">222222</div></td>
                                        <td>
                                            <div class="td-inner-tx">
                                                好好学习
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">
                                                好好学习
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">
                                                好好学习
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">
                                                好好学习
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">
                                                好好学习
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">
                                                好好学习
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">
                                                好好学习
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">
                                                好好学习
                                            </div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">
                                                好好学习
                                            </div>
                                        </td>
                                        <td><div class="td-inner-tx">cdn 域名列表（含权重）</div></td>
                                        <td><div class="td-inner-tx">有效</div></td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-primary btn-sm edit-btn" data-id="1002" data-title="修改配置信息">
                                                    <i class="glyphicons glyphicons-pencil fn-mr-5"></i>修改
                                                </button>
                                                <button class="btn btn-primary btn-sm del-btn" data-id="1001" data-content="确定要删除所选择的数据吗？">
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
        </div>
    </div>
    <script src="js/plugins/jquery.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>    
    <script src="js/plugins/layer/layer.js"></script>
    <script src="js/common.js"></script>
    <script src="js/pages/android.js"></script>
</body>
</html>