<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <base href="<?php echo base_url();?>">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/select.css" />
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/set.css">
</head>

<body class="iframe-body">
    <div class="row">
        <div class="col-sm-12">
            <form id="edit-form" class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-sm-2 control-label"><samp class="f-samp">*</samp>版本号</label>
                    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label"><samp class="f-samp">*</samp>版本名称</label>
                    
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  name="" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label"><samp class="f-samp">*</samp>内容标题</label>
                    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label"><samp class="f-samp">*</samp>下载路径</label>
                    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label"><samp class="f-samp">*</samp>推广渠道</label>
                    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label"><samp class="f-samp">*</samp>版本标题</label>
                    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label"><samp class="f-samp">*</samp>整包MD5</label>
                    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label"><samp class="f-samp">*</samp>文件大小</label>
                    
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label"><samp class="f-samp">*</samp>状态</label>
                    
                    <div class="col-sm-9">
                        <select class="select" style="width:100%;">
                            <option></option>
                            <option value="1">非强制</option>
                            <option value="2">强制</option>
                            <option value="3">增量</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">版本信息</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" rows="3" name=""></textarea>
                    </div>
                </div>
                <button type="button" class="btn btn-danger col-sm-offset-4 col-sm-4" id="change_ok">确定修改</button>
            </form>
        </div>
    </div>
    <script src="js/plugins/jquery.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/select2.min.js"></script>
    <script src="js/plugins/layer/layer.js"></script>
    <script src="js/common.js"></script>
    <script>
        $('#change_ok').click(function(){
            var aInput = $('#edit-form').find('input,textarea,select').not('.select2-input');
            for(i=0; i<aInput.length;i++){
                if(aInput.eq(i).val() == ''){
                    layer.msg('*号标记为必填，不可为空');
                    return false;
                }
            }

            //ajax新增版本，成功则关闭刷新页面
            $.ajax({
              url: '/set/updateandroid',
              type: 'post',
              data: '',
              dataType: 'json',
              success: function (data) {
                if(data.ack == true){
                    //获取父级的url
                    var parentUrl = window.parent.location.href;
                    //刷新父级页面
                    window.parent.location.reload(parentUrl);
                }else{
                    layer.msg(data.msg);
                }
              },
              error:function(){
                layer.msg('网络异常');
              }
          });
        });
    </script>
</body>
</html>
