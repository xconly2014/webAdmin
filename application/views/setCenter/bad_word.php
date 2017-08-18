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
                    敏感词查询<span class="filter-hd-i fn-ml-10"><i class="glyphicons glyphicons-chevron-down"></i></span>
                </h4>                
            </div>
            <div class="panel-body hide" id="filter_bd">
                <form id="filer_form" class="form-horizontal set-filter-form" role="form">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="inputPassword2" class="col-sm-5 control-label">敏感词：</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="search_name" name="search_name">
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
                <h4 class="panel-title">敏感词列表</h4>
            </div>
            <div class="panel-body">
                <div class="bootstrap-table">
                    <!--{ fixed-table-toolbar -->
                    <div class="fixed-table-toolbar">
                        <div class="columns columns-left btn-group pull-left">
                            <button class="btn btn-success add-btn" data-title="添加敏感词">
                                <i class="glyphicons glyphicons-plus fn-mr-10"></i>添加敏感词
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
                                        <th><div class="th-inner">ID</div></th>
                                        <th><div class="th-inner">敏感词</div></th>
                                        <th><div  class="th-inner">操作</div></th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    <tr data-id="1001">
                                        <td>
                                            <div class="td-inner-tx">1</div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">毛主席</div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary btn-sm del-btn" data-id="1001" data-title="删除敏感词">
                                                    <i class="glyphicons glyphicons-remove fn-mr-5"></i>删除
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-id="1001">
                                        <td>
                                            <div class="td-inner-tx">2</div>
                                        </td>
                                        <td>
                                            <div class="td-inner-tx">最高</div>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-primary btn-sm del-btn" data-id="1001" data-title="删除敏感词">
                                                    <i class="glyphicons glyphicons-remove fn-mr-5"></i>删除
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
                            <button class="btn btn-success add-btn" data-title="添加敏感词">
                                <i class="glyphicons glyphicons-plus fn-mr-10"></i>添加敏感词
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

    <div id="add_badword" class="iframe-body" style="display:none;">
        <div class="row">
            <form id="add_form" action="" class="form-horizontal" role="form">
                <div class="col-sm-9">
                    <div class="form-group">
                        <label class="col-sm-4 control-label"><samp class="f-samp">*</samp>敏感词：</label>
                        
                        <div class="col-sm-8">
                            <input id="bad_word" type="text" class="form-control" name="" value="">
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <button id="is-ok" type="button" class="btn btn-primary filter-btn">添加</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/plugins/jquery.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/select2.min.js"></script>
    <script src="js/plugins/layer/layer.js"></script>
    <script src="js/common.js"></script>
    <script>
        $().ready(function(){
            dataCtrl.currNav('page_nav_6');

            $('.add-btn').click(function(){
                layer.open({
                  type: 1,
                  title: '添加敏感词',
                  shadeClose: false,
                  move:false,
                  shade: 0.8,
                  area: ['400px', '160px'],
                  content: $('#add_badword').css('display','block')
                });
            });

            $('#is-ok').click(function(){
                var word = $('#bad_word').val();
                if(word == ''){
                    layer.msg('请输入敏感词',{time:1500,icon:2});
                    return false;
                }

                $.ajax({
                  url: '/set/insertword',
                  type: 'post',
                  data: '',
                  dataType: 'json',
                  success: function (data) {
                    if(data.ack == true){

                        layer.msg('添加成功',{time:1000,icon:1});
                        setTimeout(function(){
                            window.location.reload(true);
                        },1000);                        
                    }else{
                        layer.msg(data.msg,{time:1500,icon:2});
                    }
                  },
                  error:function(){
                    layer.msg('网络异常');
                  }
              });
            });

            //删除敏感词
            $('.del-btn').click(function(){
              var self = $(this);
              var id = self.data('id');

              layer.confirm('你确定要删除吗？', {
                move:false,
                title:'朋友玩提示',
                btn: ['确定','取消'] //按钮
              }, function(){

                //ajax删除版本
                $.ajax({
                      url: '/set/delword',
                      type: 'post',
                      data: '',
                      dataType: 'json',
                      success: function (data) {
                        if(data.ack == true){
                            self.parents('tr').remove();//删除成功时移除当前行
                            layer.msg(data.msg, {icon: 1,time:1000});
                        }else{
                            layer.msg(data.msg, {icon: 2,time:1500});
                        }
                      },
                      error:function(){
                        layer.msg('网络异常');
                      }
                  });

                
              }, function(){
                layer.closeAll();
              });
            });        
        });
    </script>
</body>
</html>