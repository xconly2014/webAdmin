$(function(){
   dataCtrl.currNav('page_nav_2');
   /*查询*/
   var option_initText="<option value='' selected disabled>请选择</option>",
       plaform_html="",
       option_plaform=$('#option_plaform'),
       check_btn=$('.check'),
       check_detail=$('#check_detail'),
       logo_btn=$('.logo_btn'),
       logo_mod=$('#logo_mod'),
       step_btn=$('.step'),
       step_mod=$('#in_step'),
       
    /*运行平台*/   
      plaform=[
          {id:0,name:"android"},
          {id:1,name:"ios"}
      ];
    /*运行平台select框填充*/
    $.each(plaform,function(i,val){
        plaform_html+="<option value='"+val.id+"'>"+val.name+"</option>";
        if(i==plaform.length-1){
           option_plaform.html(plaform_html);    
           option_plaform.prepend(option_initText); 
        }
    });
    //post方式保持查询条件 js
	$('#pagina a').click(function(){ 
	　　var tmpHref = $(this).attr('href');
	　　tmpHref = tmpHref.replace(/\/selCon\//,"");
	　　$("#form").attr("action", tmpHref);
	　　$("#form").submit();
	　　return false; 
	});
    //查看简介
    $('#td_list').on('click',check_btn,function(e){
        var $_self="",
            data_id,
            reg_class=/check/g;
        if(reg_class.test(e.target.className)){
                 $_self=$(e.target);
                data_id=$_self.data('id');
               
                //请求data-id 这条数据信息
                //          $.ajax({
                //            url:"",
                //            type:"POST",
                //            data:{dataid:data_id},
                //            success:function(data){
                //               if(data.ack = true){
                //                    //成功之后在简介显示数据
                //                    $('.short_introduce').html(data.xxx);//一句话简介
                 //                   $('.game_intro').html(data.xxx);// 游戏简介   
                //                     check_detail.modal('show'); //插完数据显示弹窗 
                //                } 
                //            }
                //        });
                check_detail.modal('show'); 
        }
        return false;
         
    });
    //图标及截图
    $('#td_list').on('click',logo_btn,function(e){
        var $_self="",
             data_id,
            reg_class=/logo_btn/g;
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
                //                    $('.logo_show').html(data.xxx);//图标
                 //                   $('.img_show').html(data.xxx);// 截图   
                //                     logo_mod.modal('show'); //插完数据显示弹窗 
                //                } 
                //            }
                //        });
                
                logo_mod.modal('show'); 
        }
        return false;
         
    });
    //同步
    $('#td_list').on('click',step_btn,function(e){
        var $_self="",
            data_id,
            reg_class=/step/g;
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
                //                   
                //                    $('#in_step_game').val(data.text)
                //                     step_mod.modal('show'); //显示弹窗 
                //                } 
                //            }
                //        });
                $('#in_step_game').val("xxxxxxxxxxxx");//模拟显示，以后要删除
                step_mod.modal('show');
                make_put(data_id);//调用确认同步
        }
        return false;
         
    });
    //确认同步
    function make_put(id){
        $('#edit').click(function(){
            //请求data-id 这条数据信息
                //          $.ajax({
                //            url:"",
                //            type:"POST",
                //            data:{dataid:id},
                //            success:function(data){
                //               if(data.ack = true){
                //                   
                //       
                //                     step_mod.modal('hide'); //隐藏弹窗 
                //                } 
                //            }
                //        });
        });
    }
    
    
    
})