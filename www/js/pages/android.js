/* 
* @Author: xiechao
* @Date:   2016-09-21 13:52:20
* @Last Modified by:   xiechao
* @Last Modified time: 2016-09-28 18:07:32
*/

$(document).ready(function(){
    dataCtrl.currNav('page_nav_3');

    // 全选/反选
    dataCtrl.tableCheckAll();

    //新增页弹层
    $(document).on('click','.add-btn',function(){

        layer.open({
          type: 2,
          title: '新增安卓版本',
          shadeClose: false,
          move:false,
          shade: 0.8,
          area: ['600px', '70%'],
          content: '/set/addandroid'
        });

    });


    //修改页弹层
    $(document).on('click','.edit-btn',function(){

        var id = $(this).data('id');
        layer.open({
          type: 2,
          title: '修改安卓版本',
          shadeClose: false,
          move:false,
          shade: 0.8,
          area: ['600px', '70%'],
          content: '/set/editandroid?id='+id
        });

    });

    //删除版本
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
              url: '/set/delandroid',
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