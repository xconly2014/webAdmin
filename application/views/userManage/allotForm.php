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
<!--{ 分配角色 -->
<div class="row">
    <div class="col-sm-12">
        <form class="form-horizontal" id="allot_form" role="form">
            <div class="form-group">
                <label class="col-sm-2 control-label">用户ID：</label>
                <div class="col-sm-10">
                    <label class="control-label">
                        <?php echo $id;?>
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">用户名：</label>
                <div class="col-sm-10">
                    <label class="control-label">---</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">类型：</label>
                <div class="col-sm-10">
                    <label class="control-label">---</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">状态：</label>
                <div class="col-sm-10">
                    <label class="control-label">---</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">绑定角色：</label>
                <div class="col-sm-10">
                    <select class="select" name="role_ids[]" multiple="multiple" style="width: 100%;">
                        <option value="1" selected>guest</option>
                        <option value="2">test</option>
                        <option value="3">admin</option>
                        <option value="4">那一剑的风情</option>
                        <option value="5">test123</option>
                        <option value="6" selected>test 预发布直发</option>
                        <option value="7">一望无极在此处 静待发生</option>
                        <option value="8">走自己的路，让别人无路可走</option>
                        <option value="34">数据统计</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">分组：</label>
                <div class="col-sm-10">
                    <select class="select" name="groupname" data-search="true" style="width: 100%;">
                        <option value="1">在职</option>
                        <option value="2">离职</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="button" class="btn btn-primary" id="allot_btn">
                        <i class="glyphicons glyphicons-ok fn-mr-5"></i>确定
                    </button>
                    <button type="button" class="btn btn-default" id="cancel_btn">取消</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!--/ 分配角色 }-->

<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script src="js/plugins/select2.min.js"></script>
<script src="js/plugins/layer/layer.js"></script>
<script src="js/plugins/jquery.validate.min.js"></script>
<script src="js/common.js"></script>
<script>
    $(function () {
        //得到当前iframe层的索引
        var index = parent.layer.getFrameIndex(window.name);

        //确定
        $('#allot_btn').click(function () {
            var id = $('input[name="id"]').val(),
                roleID = $('select[name="role_ids[]"]').val(),
                groupID = $('select[name="groupname"]').val();

            //父级地址
            var parentURL = window.parent.location.href;

            //请配置ajax
            $.ajax({
                url: 'user/changeAllot',
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
                        layer.msg('分配角色失败', {time: 1200});
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
