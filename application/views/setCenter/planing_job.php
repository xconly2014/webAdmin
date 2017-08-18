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
    <link rel="stylesheet" href="css/select.css" />
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
                    计划任务查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
                </h4>                
            </div>
            <div class="panel-body hide" id="filter_bd">
                <form id="filer_form" class="form-horizontal set-filter-form" role="form">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="inputPassword2" class="col-sm-4 control-label">任务ID：</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="search_name" name="search_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="inputPassword2" class="col-sm-4 control-label">任务类型：</label>
                                <div class="col-sm-8">
                                    <select class="select" style="width:100%;">
                                        <option></option>
                                        <option value="1">渠道折扣</option>
                                        <option value="2">游戏打包</option>
                                        <option value="3">商品状态</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="inputPassword2" class="col-sm-4 control-label">状态：</label>
                                <div class="col-sm-8">
                                    <select class="select" style="width:100%;">
                                        <option></option>
                                        <option value="1">处理中</option>
                                        <option value="2">已取消</option>
                                        <option value="3">处理完成</option>
                                        <option value="4">处理失败</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary filter-btn">查询</button>
                        </div>
                    </div>
                </form>               
            </div>
        </div>
        <!--/ panel end -->
        
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">计划任务列表</h4>
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
                                        <th width="7%"><div class="th-inner">ID</div></th>
                                        <th width="15%"><div class="th-inner">添加时间</div></th>
                                        <th width="10%"><div class="th-inner">任务类型</div></th>
                                        <th width="15%"><div class="th-inner">计划执行时间</div></th>
                                        <th width="15%"><div class="th-inner">实际执行时间</div></th>
                                        <th width="10%"><div class="th-inner">操作人</div></th>
                                        <th width="10%"><div class="th-inner">状态</div></th>
                                        <th width="10%"><div class="th-inner">备注</div></th>
                                        <th width="8%"><div  class="th-inner">操作</div></th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    <tr data-id="1001">
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
                                                <a class="btn btn-primary btn-sm edit-btn" data-id="1001" data-title="查看详情">
                                                    <i class="glyphicons glyphicons-search fn-mr-5"></i>详情
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-id="1001">
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
                                                <a class="btn btn-primary btn-sm edit-btn" data-id="1001" data-title="查看详情">
                                                    <i class="glyphicons glyphicons-search fn-mr-5"></i>详情
                                                </a>
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
    <script src="js/plugins/select2.min.js"></script>
    <script src="js/plugins/layer/layer.js"></script>
    <script src="js/common.js"></script>
    <script>
        $().ready(function(){
            dataCtrl.currNav('page_nav_5');
        });
    </script>
</body>
</html>