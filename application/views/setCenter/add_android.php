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
            <form class="form-horizontal" id="game_on_sale_meal_form" role="form">
                <div class="form-group">
                    <div class="col-sm-5">
                        <select class="select" name="game_id" id="add_pkg_game_name" style="width: 100%;">
                            <option>选择价格模版</option>
                            <option>选择价格模版</option>
                            <option>选择价格模版</option>
                            <option>选择价格模版</option>
                            <!-- 内容在JS中载入 -->
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" style="text-align:left;">商品价格</label>
                    <label class="col-sm-9 control-label" style="text-align:left;">包含内容</label>
                </div>

            <div class="form-group">
                <div class="col-sm-3">
                    <input type="text" class="form-control"  name="" value="">
                </div>
                
                <div class="col-sm-7">
                    <input type="text" class="form-control"  name="" value="">
                </div>

                <button class="btn btn-danger del-btn" >
                    <i class="glyphicons glyphicons-remove fn-mr-5"></i>删除
                </button>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    <input type="text" class="form-control"  name="" value="">
                </div>
                
                <div class="col-sm-7">
                    <input type="text" class="form-control"  name="" value="">
                </div>

                <button class="btn btn-danger del-btn" >
                    <i class="glyphicons glyphicons-remove fn-mr-5"></i>删除
                </button>
            </div>

             <button class="btn btn-success add-btn" >
                <i class="glyphicons glyphicons-plus fn-mr-10"></i>添加商品
            </button>
            <input type="hidden" name="game_id" id="game_on_sale_meal_game_id">
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="button" class="btn btn-primary" id="game_on_sale_commit">
                            <i class="glyphicons glyphicons-ok fn-mr-5"></i>确定
                        </button>
                    </div>
                </div>
            </form>

            <!-- <button type="button" class="col-sm-offset-2 btn btn-primary" id="is-ok">确定</button>
            <button type="button" class="btn btn-default" id="is-no">取消</button> -->
        </div>
    </div>
    <script src="js/plugins/jquery.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/select2.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/plugins/layer/layer.js"></script>
    <script>
        $('#is-no').click(function(){
            //得到当前iframe层的索引
            var index = parent.layer.getFrameIndex(window.name);
            parent.layer.close(index);                        
        });

        $('#is-ok').click(function(){
            var aInput = $('#add-form').find('input,textarea,select').not('.select2-input');
            for(i=0; i<aInput.length;i++){
                if(aInput.eq(i).val() == ''){
                    layer.msg('*号标记为必填，不可为空');
                    return false;
                }
            }

            //ajax新增版本，成功则关闭刷新页面
            $.ajax({
              url: '/set/insertandroid',
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
