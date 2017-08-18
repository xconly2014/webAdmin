$(function () {
    dataCtrl.currNav('page_nav_3');

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

    /*++++++++++++++++++++  修改密码 ++++++++++++++++++++*/
    $(document).on('click', '.edit-btn', function () {
        var id = $(this).data('id');
        layer.open({
            type: 2,
            title: '修改密码',
            shade: 0.5,
            move: false,
            area: ['400px', '38%'],
            content: 'user/editPWD?id=' + id
        });
    });

    /*++++++++++++++++++++  重置密码 ++++++++++++++++++++*/
    $(document).on('click', '.reset-btn', function () {
        var id = $(this).data('id');
        layer.open({
            type: 2,
            title: '重置密码',
            shade: 0.5,
            move: false,
            area: ['400px', '30%'],
            content: 'user/resetPWD?id=' + id
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