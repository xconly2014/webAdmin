$(function(){
   dataCtrl.currNav('page_nav_2');

    $('.datepicker').daterangepicker(dateRangeOption, function (start, end) {
        var starDate = start.format('YYYY-MM-DD'),
            endDate = end.format('YYYY-MM-DD');

        console.log('你选择了: ' + starDate + ' ～ ' + endDate);

        //给开始和结束时间传值
        $('input[name="start_month"]').val(starDate);
        $('input[name="end_month"]').val(endDate);

    });

   /*导出礼包*/
   var export_mod=$('#export_mod'),//导出礼包弹窗
       export_btn=$('.export');//
       
//    //白名单
    $('#td_list').on('click',export_btn,function(e){
        var $_self="",
            data_id,
            reg_class=/export/g;
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
                //                    //成功之后显示,xls_url 为输出路径 有多少个显示多少个
                //                     var a='<a href="'+xls_url+'">正常表格.xls</a>';
                //                      $('.xls').html(a);
                //                     export_mod.modal('show'); //插完数据显示弹窗 
                //                } 
                //            }
                //        });
                /*-----开发时要删除------*/ 
                var xls_url="js/common.js",
                          a='<a href="'+xls_url+'">正常表格.xls</a>';
                 $('.xls').html(a);
                export_mod.modal('show'); //要删除的
        }       /*-----开发时要删除------*/
        
        return false;
         
    });    
    
    
    
    
});