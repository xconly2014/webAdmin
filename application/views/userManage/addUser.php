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

</head>

<body class="iframe-body">
<!--{ 新增用户 -->
<div class="row">
    <div class="col-sm-12">
        <form class="form-horizontal" id="add_form" role="form">
            <div class="form-group">
                <label class="col-sm-3 control-label"><samp class="f-samp">*</samp>用户名</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" name="username">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label"><samp class="f-samp">*</samp>用户密码</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">类型</label>
                <div class="col-sm-9">
                    <select class="select" id="group" name="group" data-search="true" style="width:100%;">
                        <?php foreach ($group as $v): ?>
                            <option value="<?php echo $v['id'];?>"><?php echo $v['title'];?></option>
                        <?php endforeach; ?>
                    </select>
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
<!--/ 新增用户 }-->

<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/select2.min.js"></script>
<script src="js/plugins/layer/layer.js"></script>
<script src="js/common.js"></script>
<script>
    $(function () {
        //得到当前iframe层的索引
        var index = parent.layer.getFrameIndex(window.name);

        //确定
        $('#ok_btn').click(function () {
            var username = $('#username'), pwd = $('#password'), group = $('#group');
            if(username.val() == ''){
                layer.msg('请输入用户名', {time: 1200});
                username.focus();
                return false;
            }else if(pwd.val() == ''){
                layer.msg('请输入密码', {time: 1200});
                pwd.focus();
                return false;
            }else if(pwd.val().length < 6 || pwd.val().length > 18){
                layer.msg('密码长度在6-18位之间', {time: 1500});
                pwd.focus();
                return false;
            }

            //父级地址
            var parentURL = window.parent.location.href;
            
            //请配置ajax
            var datas = {username:username.val(),password:pwd.val(),group:group.val()};
            $.ajax({
                url: 'user/addUser',
                type: 'post',
                data: datas,
                dataType: 'json',
                success: function (data) {
                    if (data.ack == true) {
                        layer.msg(data.msg, {time: 1200}, function () {
                            //成功后重新刷新父级页面
                            window.parent.location.reload(parentURL);
                        });
                    }else{
                        layer.msg(data.msg, {time: 1200});
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
