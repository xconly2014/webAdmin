$(function () {
    // dataCtrl.currNav('page_nav_3');

    // 查询|分页
    $('div#DataTables_paginate a').click(function(){
        var $filterFrm = $("#form");
        var tmpHref = $(this).attr('href');
        tmpHref = tmpHref.replace(/\/selCon\//,"");
        $filterFrm.attr("action", tmpHref);
        $filterFrm.submit();
        return false;
    });


    var allotForm = document.getElementById('allot_form');

    /*++++++++++++++++++++ 新增用户 ++++++++++++++++++++*/
    $(document).on('click', '.add-btn', function () {
        layer.open({
            type: 2,
            title: '新增用户',
            shade: 0.5,
            move: false,
            area: ['450px', '38%'],
            content: 'user/addUser'
        });
    });

    /*++++++++++++++++++++  编辑用户 ++++++++++++++++++++*/
    $(document).on('click', '.edit-btn', function () {
        var id = $(this).data('id');
        layer.open({
            type: 2,
            title: '编辑用户',
            shade: 0.5,
            move: false,
            area: ['400px', '30%'],
            content: 'user/editUser?id=' + id
        });
    });

    /*++++++++++++++++++++  删除用户 ++++++++++++++++++++*/
    $(document).on('click', '.del-btn', function () {
        var _this = $(this);
        var uid = _this.data('id');
        var index = layer.confirm('确定删除该用户吗？',{
            title: '三叉戟提示',
            closeBtn: false
        },function(){
            $.ajax({
                url: 'user/delUser',
                type: 'post',
                data :{uid:uid},
                dataType: 'json',
                success: function(data){
                    if(data.ack){
                        layer.msg('删除成功',{time:1500},function(){
                            _this.parents('tr').remove();
                        });                        
                    }else{
                        layer.msg('删除失败',{time:1500},function(){
                            layer.close(index);
                        }); 
                    }
                },
                error: function(){
                    layer.msg('删除失败',{time:1500},function(){
                        layer.close(index);
                    });                    
                }
            });
        });
        
    });

    /*++++++++++++++++++++  离职清权限 ++++++++++++++++++++*/
    $(document).on('click', '.clear-btn', function () {
        var _this = this,
            id = $(_this).data('id'),
            $title = $(_this).data('title'),
            $typeTx = $(_this).parents('tr').find("td:nth-child(3) .td-inner-tx");

        layer.confirm('确定执行离职清权限吗？', {
            title: $title,
            closeBtn: false
        }, function () {
            // 配置ajax数据
            $.ajax({
                url: 'user/clearPower',
                type: 'post',
                data: '',
                dataType: 'json',
                success: function (data) {
                    layer.msg(data.msg, {time: 1500}, function () {
                        $typeTx.html('<span class="label label-danger">离职</span>');
                        $(_this).tooltip('destroy');
                        $(_this).remove();
                        layer.close();
                    });
                }
            });

        });

    });

    /*++++++++++++++++++++  分配角色 ++++++++++++++++++++*/
    $(document).on('click', '.allot-btn', function () {
        var id = $(this).data('id');
        layer.open({
            type: 2,
            title: '分配角色',
            shade: 0.5,
            move: false,
            area: ['600px', '50%'],
            content: 'user/allotForm?id=' + id
        });
    });

});