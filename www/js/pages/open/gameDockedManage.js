$(function(){
   dataCtrl.currNav('page_nav_2');
   /*查询*/
   var option_initText="<option value='' selected disabled>请选择</option>",
       plaform_html="",
       ip_mod=$('#ip_mod'),//ip白名单id
       newgame_mod=$('#newgame_mod'),//接入状态id
       docked_pro_mod=$('#docked_pro_mod'),//充值产品资料id
       ip_btn=$('.ip_btn'),
       docked_new=$('.docked_new'),
       docked_produtor=$('.docked_produtor');
//    //白名单
    $('#td_list').on('click',ip_btn,function(e){
        var $_self="",
            data_id,
            reg_class=/ip_btn/g;
        if(reg_class.test(e.target.className)){
                 $_self=$(e.target);
                data_id=$_self.data('id');
                console.log(data_id);
                //请求data-id 这条数据信息
                //          $.ajax({
                //            url:"",
                //            type:"POST",
                //            data:{dataid:data_id},
                //            success:function(data){
                //               if(data.ack = true){
                //                    //成功之后白名单弹窗中显示内容
                //                    $('#ip_mod').html(data.xxx);//一句话简介
                 //                   
                //                     ip_mod.modal('show'); //插完数据显示弹窗 
                //                } 
                //            }
                //        });
                ip_mod.modal('show'); //要删除的
        }
        return false;
         
    });    
    //接入状态
    $('#td_list').on('click',docked_new,function(e){
        var $_self="",
             data_id,
            reg_class=/docked_new/g;
        if(reg_class.test(e.target.className)){
                 $_self=$(e.target);
                 data_id=$_self.data('id');
                 console.log(data_id);
                //请求data-id 这条数据信息
                //          $.ajax({
                //            url:"",
                //            type:"POST",
                //            data:{dataid:data_id},
                //            success:function(data){
                //               if(data.ack = true){
                //                    //成功之后插数据
                //                    newgame_mod.html(data.xxx);//图标
                 //                    
                //                     newgame_mod.modal('show'); //插完数据显示弹窗 
                //                } 
                //            }
                //        });
               /*-----[此处仅供模拟，实际开发根据ajax返回数据选择对应项勾选]-----*/
                //审核通过
                $('#inlineRadio1').prop('checked','checked');
                //审核不通过
                //$('#inlineRadio2').prop('checked','checked');
                //安卓-朋友玩端
                $('#inlineRadio3').prop('checked','checked');
                //安卓-朋友玩光速端
                //$('#inlineRadio4').prop('checked'.'checked');
                //备注
                $('.remark').val("此处应插入查询到的数据");
                newgame_mod.modal('show');
                /*-----[此处仅供模拟，实际开发根据ajax返回数据选择对应项勾选]-----*/
        }
        return false;
         
    });
    //接入状态提交前验证
    function is_validator(){
        var status = $('input[name="status"]:checked').val();
        var reasion = $.trim($('#verify_reason').val());
        if(!$('input[name="status"]').is(':checked')){
            alert('请选择审核操作!');
            return false;
        }
        if(status == 5 && !$(':radio[name="channel_id"]').is(":checked")){
            alert('请选择渠道!');
            return false;
        }
        if((status == 2 || status == 6) && reasion == ''){
            alert('请填写不通过的原因!');
            return false;
        }
        return true;
    }
    //接入状态提交
    $('.btn_form').click(function(){
        //若验证通过则提交
        if(is_validator()){
           $('#state_form')[0].submit(); 
        }
    });
//    //充值产品资料
    $('#td_list').on('click',docked_produtor,function(e){
        var $_self="",
            data_id,
            reg_class=/docked_produtor/g;
        if(reg_class.test(e.target.className)){
                 $_self=$(e.target);
                 data_id=$_self.data('id');
                 var da_id=1001,//模拟data_id 开发时要删除
                     produ_id=1,//模拟商品id 开发时要删除
                     produ_price=1000,//模拟商品价格开发时要删除
                     produ_intr="good",//模拟商品描述开发时要删除
                 tdlist='<tr data-id="'+da_id+'"><td><div class="td-inner-tx">'+produ_id+'</div></td><td><div class="td-inner-tx">'+produ_price+'</div></td><td><div class="td-inner-tx">'+produ_intr+'</div></td></tr>';
                 $('#id_produc').html(tdlist);
                //请求data-id 这条数据信息
                //          $.ajax({
                //            url:"",
                //            type:"POST",
                //            data:{dataid:data_id},
                //            success:function(data){
                //               if(data.ack = true){
                //                   
                //                   
                //                     docked_pro_mod.modal('show'); //显示弹窗 
                //                } 
                //            }
                //        });
                docked_pro_mod.modal('show');
        }
        return false;
         
    });

    
    
})