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

<body class="iframe-body">
<div class="row">
    <div class="col-sm-12">
        <form class="form-horizontal" id="reset_form" role="form">
            <div class="form-group">
                <label class="col-sm-3 control-label">用户名</label>
                <div class="col-sm-9">
                    <label class="control-label">admin</label>
                </div>
            </div>
            <div class="form-group">
                <label for="new_password" class="col-sm-3 control-label">新密码</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="新密码" maxlength="16">
                </div>
            </div>
            <div class="form-group">
                <label for="confirmed_password" class="col-sm-3 control-label">重复密码</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="confirmed_password" name="confirmed_password" placeholder="重复密码" maxlength="16">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="button" class="btn btn-primary" id="ok_btn">
                        <i class="glyphicons glyphicons-ok fn-mr-5"></i>确定
                    </button>
                    <button type="button" class="btn btn-default" id="cancel_btn">取消</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/layer/layer.js"></script>
<script src="js/plugins/jquery.validate.min.js"></script>
<script>
    $(function () {
        //得到当前iframe层的索引
        var index = parent.layer.getFrameIndex(window.name);

        //确定
        $('#ok_btn').click(function () {
            var $newPWD = $('#new_password'), $rePWD = $('#confirmed_password');
            if($newPWD.val() == ''){
                layer.msg('请输入新密码', {time: 1200});
                $newPWD.focus();
                return false;
            }else if($newPWD.val().length < 6 || $newPWD.val().length > 18){
                layer.msg('新密码长度在6-18位之间', {time: 1500});
                $newPWD.focus();
                return false;
            }else if($rePWD.val() == ''){
                layer.msg('重复密码不能为空', {time: 1200});
                $rePWD.focus();
                return false;
            }else if($rePWD.val().length < 6 || $rePWD.val().length > 18){
                layer.msg('重复密码长度在6-18位之间', {time: 1500});
                $rePWD.focus();
                return false;
            }else if($rePWD.val() != $newPWD.val()){
                layer.msg('两次密码不一致', {time: 1200});
                $rePWD.focus();
                return false;
            }

            //父级地址
            var parentURL = window.parent.location.href;

            //请在这里配置ajax
            $.ajax({
                url: 'user/oncePWD',
                type: 'post',
                data: '',
                dataType: 'json',
                success: function (data) {
                    if (data.ack == true) {
                        layer.msg(data.msg, {time: 1200}, function () {
                            //成功后重新刷新父级页面
                            window.parent.location.reload(parentURL);
                        });
                    }else{
                        layer.msg('重置密码失败', {time: 1200});
                    }
                }
            });

        });

        //取消
        $('#cancel_btn').click(function () {
            parent.layer.close(index);
        });
    });
</script>
</body>
</html>
