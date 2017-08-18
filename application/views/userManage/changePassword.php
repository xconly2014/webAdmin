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
</head>

<body>
<!-- topNav -->
<?php $this->load->view('include/topNav.html'); ?>
<!-- sideBar -->
<?php $this->load->view('include/sideBar.html'); ?>
<!-- pageNav -->
<?php $this->load->view('include/userNav.html'); ?>
<div class="container-fluid data-main">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">修改密码</h4>
        </div>
        <div class="panel-body pad-tb-50">
            <form class="form-horizontal" role="form" id="validateForm">
                <div class="form-group">
                    <label class="col-sm-2 control-label">用户名</label>
                    <div class="col-sm-4">
                        <label class="control-label">admin</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="old_password" class="col-sm-2 control-label">原密码</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="old_password" name="old_password" placeholder="原密码" maxlength="16">
                    </div>
                    <div class="col-sm-6 form-tip"></div>
                </div>
                <div class="form-group">
                    <label for="new_password" class="col-sm-2 control-label">新密码</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="新密码" maxlength="16">
                    </div>
                    <div class="col-sm-6 form-tip"></div>
                </div>
                <div class="form-group">
                    <label for="confirmed_password" class="col-sm-2 control-label">重复密码</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="confirmed_password" name="confirmed_password" placeholder="重复密码" maxlength="16">
                    </div>
                    <div class="col-sm-6 form-tip"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-primary" id="ok_btn"><i class="glyphicons glyphicons-ok fn-mr-5"></i>确认修改</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/ panel end -->
</div>

<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/common.js"></script>
<script src="js/plugins/layer/layer.js"></script>
<script src="js/plugins/jquery.validate.min.js"></script>
<script>
    $(function () {
        dataCtrl.currNav('page_nav_1');

        $('#validateForm').validate({
            rules: {
                old_password: {required: true, rangelength: [6, 18]},
                new_password: {required: true, rangelength: [6, 18]},
                confirmed_password: {required: true, rangelength: [6, 18], equalTo: '#new_password'}
            },
            messages: {
                old_password: {required: '请输入原密码', rangelength: '原密码长度在6-18位'},
                new_password: {required: '请输入新密码', rangelength: '新密码长度在6-18位'},
                confirmed_password: {required: '请再次输入新密码', rangelength: '重复密码长度在6-18位', equalTo: '两次密码不一致'}
            },
            errorPlacement: function (error, element){
                error.addClass('control-label').appendTo(element.parent().next('.form-tip'));
            },
            onfocusout: function (element) {
                var ele = $(element), eParent = ele.parent();
                ele.valid();
                ele.hasClass("error") ? eParent.addClass("has-error") : eParent.removeClass("has-error");
            },
            submitHandler: function (form) {
                //console.log(form);

                //请配置ajax
                $.ajax({
                    url: 'user/modifyPWD',
                    type: 'post',
                    data: '',
                    dataType: 'json',
                    success: function (data) {
                        if (data.ack == true) {
                            layer.msg(data.msg, {time: 1200}, function () {
                                //成功后刷新页面
                                window.location.reload();
                            });
                        }else{
                            layer.msg('修改密码失败', {time: 1200});
                        }
                    }
                });
            }
        });
    });
</script>
</body>
