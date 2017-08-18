$(function () {
    dataCtrl.currNav('page_nav_1');

    var $table = $('#table'),
        $searBtn = $('.filter-btn'),        // 查询
        $addBtn = $('.add-btn'),            // 新增配置
        _editBtn = '.edit-btn',          // 修改
        _delBtn = '.del-btn',            // 删除
        $modify = $('#dataFormModal'),      // 表单弹窗ID
        $title = $('#dataFormModalLabel'),  // 表单弹窗Title
        $alertMod = $('#alertModal'),
        $alertOk = $('#alert_ok'),
        filter_btn=$('.filter-btn');       /*查询按钮*/ 
        
    /*----查询-----*/
    filter_btn.click(function(){
        var seach_name=$('#search_name'),    //查询配置名
        seach_value=$('#search_value');    //查询配置名
        /*提交查询*/
            /*$.ajax({
                url: '',
                type: 'POST',
                data: {seach_name：seach_name,seach_value:seach_value},
                success: function (data) {
                    if(data.ack = true){
                        
                    }
                }
            });*/
        
    });
    
    // 全选/反选
    dataCtrl.tableCheckAll();
    
    // 点击新增配置弹窗表单框
    $addBtn.click(function(){
        /*清空修改后留下的痕迹*/
        $('#name').val('');
        $('#value').val('');
        $('#description').val('');
        $('.setconfig').show();                            /*显示设置配置确定按钮*/
        $('.changeconfig').hide();                         /*隐藏修改配置确定按钮*/
        $('.won_tip').hide();                              /*隐藏提示*/   
        $modify.modal('show');
        var title = $(this).data('title');
        $title.html(title);
    });
    
    /*确定新增*/
        $('#ok_new_btn').click(function(){
            var config_name=$.trim($('#name').val());           /*配置名*/
            var config_val=$.trim($('#value').val());           /*配置值*/
            var config_desc=$.trim($('#description').val());    /*配置描述*/
            var state="有效";                                    /*模拟ajax拿到的状态,以后要删除*/              
            var data_id=Math.random();                           /*模拟不重复id,以后要删除*/                    
             /*提交新增前验证表单是否为空*/
            if(config_name && config_val){
               /*添加配置添加行模板*/
    var congfig_tr='<tr data-id="'+data_id+'"><td class="bs-checkbox"><label><input name="btSelectItem" type="checkbox"></label></td><td><div class="td-inner-tx">'+config_name+'</div></td><td><div class="td-inner-tx">'+config_val+'</div></td><td><div class="td-inner-tx">'+config_desc+'</div></td><td><div class="td-inner-tx">'+state+'</div></td><td><div class="btn-group"><button class="btn btn-primary btn-sm edit-btn" data-id="'+data_id+'" data-title="修改配置信息"><i class="glyphicon glyphicon-pencil fn-mr-10"></i>修改</button><button class="btn btn-primary btn-sm del-btn" data-id="'+data_id+'" data-content="确定要删除所选择的数据吗？"><i class="glyphicon glyphicon-trash fn-mr-10"></i>删除</button></div></td></tr>';
            /*请求成功后才能添加*/
            /*$.ajax({
                url: '',
                type: 'POST',
                data: {config_name: config_name,config_val:config_val,config_desc:config_desc,data_id:data_id},
                success: function (data) {
                    if(data.ack = true){
                       //成功之后插入一条数据到列表并且隐藏表单弹窗框
                       $('.tbody').prepend(congfig_tr);
                       $modify.modal('hide');   
                    }
                }
            });*/
            
                $('.tbody').prepend(congfig_tr);
                $modify.modal('hide');         /*这两项代码均为模拟观看,开发时候请删除*/
            }else{
                 /*若表单星号项为空则显示提示*/
                 $('.won_tip').show();
            }
            
        });
        /*表单获取焦点警告提醒消失*/
        $('#name,#value').on('blur keyup',function(){
             $('.won_tip').hide();
        });
    /*修改显示框*/
    $(document).on('click',_editBtn,function(){
        $('.won_tip').hide();                              /*隐藏提示*/   
        var _self=$(this);
        $title.html("修改配置");
        $('.setconfig').hide();                            /*隐藏设置配置确定按钮*/
        $('.changeconfig').show();                         /*显示修改配置确定按钮*/
        docomform(_self);
        $modify.modal('show'); 
        
    });
    /*
    @给表单赋值操作函数
    @context 修改配置值后用到的参数
    @formval_lsit表单数组值
    @
    */
    function docomform(_self,context,formval_lsit){
          docomform.self=_self;//保存点击修改时的this 指向
          docomform.id=_self.data('id');//保存当前data id的值
          var idnameList=['#name','#value','#description'];  /*存储需要赋值的id名数组*/
          var _textList=_self.parents('tr').find("div.td-inner-tx");
          //若conext 存在,此时修改配置值调用docomform函数，否则修改显示框调用docomform函数
          if(context){
              for(var i=0;i<3;i++){  
                _textList.eq(i).text(formval_lsit[i])                 /*点击确定按钮修改配置后的值还原到table列表中*/
                $(idnameList[i]).val('');                             /*操作完后清空表单框*/
              }
          }else{
               for(var i=0;i<3;i++){
                    var _text=$.trim(_textList.eq(i).text());
                    $(idnameList[i]).val(_text);                    /*点击修改按钮表单框显示当前的一条数据*/
                    
                }
          }
         
    }
    //function 
    /*修改配置值*/
    $('#changeconfig').click(function(){
        var config_name=$.trim($('#name').val());               /*配置名*/
        var config_val=$.trim($('#value').val());               /*配置值*/
        var config_desc=$.trim($('#description').val());        /*配置描述*/
        var data_id=docomform.id;                               /*当前data-id*/ 
        var formval_lsit=[config_name,config_val,config_desc];  /*修改配置表单当前值*/  
        //若表单必填项不为空，则提交数据
        if(config_name && config_val){
            /*$.ajax({
                url: '',
                type: 'POST',
                data: { config_name: config_name,config_val:config_val,config_desc:config_desc,data_id:data_id},
                success: function (data) {
                    if(data.ack = true){
                        /*提交成功后*/
//                        docomform(docomform.self,true,formval_lsit);//从修改配置表单抓取value插入table
//                        $modify.modal('hide');//隐藏弹窗
//                          $('.setconfig').show();   /*显示设置配置确定按钮*/
//                          $('.changeconfig').hide();/*隐藏修改配置确定按钮*/
//                    }
//                }
//            });
            /*这四项代码均为模拟,开发时请删除*/
            docomform(docomform.self,true,formval_lsit);//从修改配置表单抓取value插入table
            $modify.modal('hide');
            $('.setconfig').show();   /*显示设置配置确定按钮*/
            $('.changeconfig').hide();/*隐藏修改配置确定按钮*/
             /*这四项代码均为模拟,开发时请删除*/
        }else{
            //若表单必填项为空，则弹出提示
            $('.won_tip').show();
        }
        
    });
    /*ba*/

    // 删除所选行
    $(document).on('click', _delBtn, function () {
        var $self = $(this),
            id = $self.data('id'),
            $alertTx = $self.data('content');

        $('#alert_tx').html($alertTx);
        $alertMod.modal('show');
        $alertOk.click(function () {
            $('tr[data-id="'+ id +'"]').remove();
            $alertMod.modal('hide');

            /* 套数据的时候删除上面两行，配置下面信息就OK了 */
            /*$.ajax({
                url: '',
                type: 'POST',
                data: { id: id},
                success: function (data) {
                    if(data.ack = true){
                        $('tr[data-id="'+ id +'"]').remove();
                        $alertMod.modal('hide');
                    }
                }
            });*/
        });
    });

});