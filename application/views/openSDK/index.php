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
                企业信息查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
            </h4>
        </div>
        <div class="panel-body hide" id="filter_bd">
            <form id="form" class="form-horizontal set-filter-form" role="form" method="post" action="http://data.com/open/">
                    <div class="row docked_space">
                        <div class="form-group">
                            <label for="inputPassword2" class="col-sm-1 control-label">企业名称:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="CompanyName" name="CompanyName">
                            </div>
                            <label for="inputPassword2" class="col-sm-1 control-label">注册用户名:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="register" name="register">
                            </div>
                            <label for="inputPassword2" class="col-sm-1 control-label">联系人姓名:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="contacts" name="contacts">
                            </div>
                            <label for="inputPassword2" class="col-sm-1 control-label">联系人邮箱:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword2" class="col-sm-1 control-label">联系人手机:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="mobilephone" name="mobilephone">
                            </div>
                            <div class="col-sm-9">
                                <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox1" value="option1"> 新注册,待审核
                                </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 资料变更待审核 
                                </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox3" value="option3"> 已审核
                                </label>
                                <label class="checkbox-inline">
                                  <input type="checkbox" id="inlineCheckbox3" value="option3"> 审核不通过
                                </label>
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
            <h4 class="panel-title">企业信息</h4>
        </div>
        <div class="panel-body">
            <div class="bootstrap-table">
                
                <div class="fixed-table-container">
                    <!--{ fixed-table-body -->
                    <div class="fixed-table-body">
                        <table id="table" class="table-striped table table-hover">
                            <thead>
                                <tr>
                                    <th width="8%"><div class="th-inner">注册用户名</div></th>
                                    <th width="2%"><div class="th-inner">账号类型</div></th>
                                    <th width="5%"><div class="th-inner">企业名称</div></th>
                                    <th width="5%"><div class="th-inner">区域</div></th>
                                    <th width="3%"><div class="th-inner">对接人</div></th>
                                    <th width="2%"><div class="th-inner">联系人姓名</div></th>
                                    <th width="5%"><div class="th-inner">联系人邮箱</div></th>
                                    <th width="5%"><div class="th-inner">联系人座机</div></th>
                                    <th width="5%"><div class="th-inner">注册时间</div></th>
                                    <th width="5%"><div class="th-inner">状态</div></th>
                                    <th width="5%"><div class="th-inner">操作</div></th>
                                </tr>
                            </thead>
                            <tbody id="td_list">
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <!--/ fixed-table-body end }-->
                </div>
                <!--{ fixed-table-pagination -->
                <div class="fixed-table-pagination clearfix">
                    
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

<!--{ 状态 弹窗 -->
<div class="modal fade" id="massageModal" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:950px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title" id="dataFormModalLabel">审核信息</h4>
            </div>
            <div class="modal-body">
                <div class="bootstrap-table margin_bottom_50">
                <!--/ fixed-table-toolbar end }-->
                <div class="fixed-table-container">
                    <!--{ fixed-table-body -->
                    <div class="fixed-table-body">
                        <table id="table" class="table-striped table table-hover">
                            <thead>
                                <tr>
                                    <th width="2%"><div class="th-inner"></div></th>
                                    <th width="1%"><div class="th-inner">变更前</div></th>
                                    <th width="6%"><div class="th-inner">变更后</div></th>
                                    
                                </tr>
                            </thead>
                            <tbody id="cp_information">
                                <tr>
                                    <td><div class="td-inner-tx">企业名称</div></td>
                                    <td><div class="td-inner-tx">变更前xxx</div></td>
                                    <td><div class="td-inner-tx">变更后深圳市岚悦网dddd络科技有限rrrrrr公司</div></td>
                                </tr>
                                <tr>
                                    <td><div class="td-inner-tx">营业执照编号</div></td>
                                    <td><div class="td-inner-tx">变更前xxxx</div></td>
                                    <td><div class="td-inner-tx">变更后深圳市岚悦网dddd络科技有限rrrrrr公司</div></td>
                                </tr>
                                <tr>
                                    <td><div class="td-inner-tx">公司地址</div></td>
                                    <td><div class="td-inner-tx">变更前xxxx</div></td>
                                    <td><div class="td-inner-tx">北京西城区	123143543523432434234234234234234234242342342342342342342342</div></td>
                                </tr>
                                <tr>
                                    <td><div class="td-inner-tx">营业执照扫描件</div></td>
                                    <td><div class="td-inner-tx"></div></td>
                                    <td>
                                       <div class="td-inner-tx">
                                        <img src="xxx.png" alt="">
                                       </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/ fixed-table-body end }-->
                </div> 
            </div>
                <form class="form-horizontal" id="add_form" role="form" method="post" action="http://data.com/open/">
                    <div class="form-group">
                        <div class="col-sm-2 control-label">当前审核状态：</div>
                        <div class="col-sm-10 control-label cur_state" style="text-align:left">
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><samp class="f-samp">*</samp>状态</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                              <input type="radio" name="status" id="verify_pass" value="1"> 审核通过
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="status" id="verify_unpass" value="0"> 审核不通过
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">原因：</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="reason" name="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">备注：</label>
                        <div class="col-sm-8">
                            <textarea class="form-control margin_bottom_15 cp_remark" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                         <div class="col-sm-2 control-label">
                             
                         </div>
                         <div class="col-sm-8">
                             <button type="button" class="btn btn-danger">提交</button>
                         </div>
                    </div>
                </form>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">操作日志</h4>
                    </div>
                    <div class="panel-body">
                        <div class="bootstrap-table">

                            <div class="fixed-table-container">
                                <!--{ fixed-table-body -->
                                <div class="fixed-table-body">
                                    <table id="table" class="table-striped table table-hover">
                                        <thead>
                                            <tr>
                                                <th width="2%"><div class="th-inner">审核时间</div></th>
                                                <th width="1%"><div class="th-inner">状态</div></th>
                                                <th width="1%"><div class="th-inner">操作人</div></th>
                                                <th width="5%"><div class="th-inner">原因</div></th>
                                                <th width="3%"><div class="th-inner">备注</div></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="operate_id">
                                            
                
                                        </tbody>
                                    </table>
                                </div>
                                <!--/ fixed-table-body end }-->
                            </div>
                            
                        </div>
                        <!--/ bootstrap-table end -->
                    </div>
                    <!--/ panel-body end -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--/ 状态 弹窗 }-->
<!--{ 操作 弹窗 -->
<div class="modal fade" id="operModal" tabindex="-1" role="dialog" aria-labelledby="dataFormModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:850px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title" id="dataFormModalLabel">修改区域信息</h4>
            </div>
            <div class="modal-body">
                <div class="bootstrap-table margin_bottom_35">
                <!--/ fixed-table-toolbar end }-->
                <div class="fixed-table-container">
                    <!--{ fixed-table-body -->
                    <div class="fixed-table-body">
                        <table id="table" class="table-striped table table-hover">
                            <thead>
                                <tr>
                                    <th width="8%"><div class="th-inner">企业名称</div></th>
                                    <th width="1%"><div class="th-inner">所属区域</div></th>
                                    <th width="2%"><div class="th-inner">联系人</div></th>
                                    
                                </tr>
                            </thead>
                            <tbody id="cp_information">
                                <tr>
                                    <td><div class="td-inner-tx">广州放一个屁也香实业发展有限公司</div></td>
                                    <td><div class="td-inner-tx">华南华西</div></td>
                                    <td><div class="td-inner-tx">张小渤</div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/ fixed-table-body end }-->
                </div> 
            </div>
                <form class="form-horizontal" id="add_form" role="form" method="post" action="http://data.com/open/" name="com_form">
                    <div class="margin_bottom_15 padding_20">
                        区域：
                    </div>
                    <div class="padding_20 margin_bottom_15">
                        <select name="area" class="select" style="width: 100%;" id="area">
                            <option value="1" selected="selected">华东华中</option>
                            <option value="2">华北东北</option>
                            <option value="3">华南华西</option>
                            <option value="4">单机游戏</option>
                            <option value="5">其他</option>
                        </select>
                    </div>
                    <div class="margin_bottom_15 padding_20">
                        区域：
                    </div>
                    <div class="padding_20 margin_bottom_15">
                        <select name="area_contact" class="form-control" style="width: 100%;" id="area_contact">                  
                          <option value="张小渤">张小渤</option>
                          <option value="董伟强">董伟强</option>  
                        </select>
                    </div>
                    <div class="padding_20">
                         <button type="button" class="btn btn-danger btn_area">提交</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

<!--/ 操作 弹窗 }-->

<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/common.js"></script>
<script src="js/plugins/layer/layer.js"></script>
<script src="js/plugins/select2.min.js"></script>
<script src="js/pages/open/openIndex.js"></script>
</body>
