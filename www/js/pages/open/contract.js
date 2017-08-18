$(function () {
    //侧边主菜单
    dataCtrl.currNav('side_3');
    dataCtrl.currNav('page_nav_3');

    //查询
    $('div#DataTables_paginate a').click(function () {
        var $filterFrm = $("#form"), tmpHref = $(this).attr('href');

        tmpHref = tmpHref.replace(/\/selCon\//, "");
        $filterFrm.attr("action", tmpHref);
        $filterFrm.submit();
        return false;
    });

    var okBtn = '.ok-btn', //确认合同
        endBtn = '.end-btn', //终止合同
        editBtn = '.edit-btn', //修改合同编号
        changeSignBtn = '.change-sign-btn'; //更改签署状态

    var $confirmMod = $('#confirmMod'), $confirm = $('#confirm_btn'),
        $endMod = $('#endContractMod'), $okEnd = $('#ok_end_btn'),
        $editNumMod = $('#editNumMod'), $okEdit = $('#ok_edit_btn'),
        $signMod = $('#changeSignMod'), $okSign = $('#ok_sign_btn');

    //重置表单用
    var _confirmFrm = document.getElementById('confirm_form'),
        _changeSignFrm = document.getElementById('changeSign_form'),
        _endFrm = document.getElementById('end_form'),
        _editNumFrm = document.getElementById('edit_form');

    //各表单隐藏id的input
    var $endHideIpt = $('input[name="end_mod_ipt"]'),
        $editHideIpt = $('input[name="edit_mod_ipt"]'),
        $dataHideIpt = $('input[name="data_mod_ipt"]'),
        $signHideIpt = $('input[name="sign_mod_ipt"]');

    //按钮所在容器组
    var btnInGroup = function (e) {
        return $(e).parents('td').find('.btn-group');
    },
    //文字所在容器
    txInWhere = function(t, n, place){
        if(typeof place !== 'undefined' && place === 'first') {
            return $('tr[data-id="' + t + '"]').find('td:nth-child(' + n + ') .td-inner-tx');
        }else{
            return $('tr[data-id="' + t + '"]').find('td:nth-last-child(' + n + ') .td-inner-tx');
        }
    },
    //当前按钮
    currentBtn = function (e, n) {
        return $('button.'+ e +'[data-id="' + n + '"]');
    };


    /*++++++++++++++++++++++++++++++ 确认合同 ++++++++++++++++++++++++++++++*/
    $(document).on('click', okBtn, function () {
        //重置表单
        _confirmFrm.reset();

        var id = $(this).data('id');
        $confirmMod.modal('show');

        //传递id
        $dataHideIpt.val(id);
    });

    //点击 确定
    $confirm.click(function () {
        var id = $dataHideIpt.val(), //合同id
            $state = $('input[name="status"]:checked').val(), //合同状态
            $reason = $('#reason'), //原因
            $txTd = txInWhere(id, 2),
            $stateTx = '';

        //更改签署状态 按钮
        var changeEle = '<button class="btn btn-primary btn-sm change-sign-btn" data-id="'+ id +'" data-toggle="tooltip" data-title="更改签署状态">更改</button>';

        //按钮容器组
        var $btnGroup = btnInGroup(this);
        var $currBtn = currentBtn('ok-btn', id);

        if($state == undefined || $state == '') {
            layer.msg('请选择审核通过或不通过！', {time: 1000});
            return false;
        }
        // 判断用户状态
        switch ($state){
            case '20':
                $stateTx = '待平台方邮寄';

                // 配置ajax数据
                $.ajax({
                    url: 'finance/verifyContract',
                    type: 'post',
                    data: '',
                    dataType: 'json',
                    success: function (data) {
                        if (data.ack == true) {
                            layer.msg(data.msg, {time: 1500}, function () {
                                $currBtn.remove();
                                $(changeEle).prependTo($btnGroup);
                                $txTd.text($stateTx);

                                //初始化tooltip
                                $('[data-toggle="tooltip"]').tooltip({container: "body"});

                                //关闭弹窗
                                $confirmMod.modal('hide');
                            });
                        }
                    }
                });
                break;
            case '15':
                $stateTx = '已驳回';
                if($.trim($reason.val()) == ''){
                    layer.msg('请填写审核不通过的原因', {time: 1000});
                    $reason.focus();
                    return false;
                }

                // 配置ajax数据
                $.ajax({
                    url: 'finance/rebutContract',
                    type: 'post',
                    data: '',
                    dataType: 'json',
                    success: function (data) {
                        if (data.ack == true) {
                            layer.msg('合同已驳回', {time: 1500}, function () {
                                $currBtn.remove();
                                $txTd.text($stateTx);
                            });
                            //关闭弹窗
                            $confirmMod.modal('hide');
                        }
                    }
                });
                break;
        }
    });

    /*++++++++++++++++++++++++++++++ 终止合同 ++++++++++++++++++++++++++++++*/
    $(document).on('click', endBtn, function () {
        //重置表单
        _endFrm.reset();

        var id = $(this).data('id');

        $endMod.modal('show');

        //传递id
        $endHideIpt.val(id);
    });

    //点击 终止合同
    $okEnd.click(function () {
        var id = $endHideIpt.val(), //合同id
            $endReason = $('input[name="end_reason"]'), //原因
            $txTd = txInWhere(id, 2);

        if($endReason.val() == ''){
            layer.msg('请填写你终止合同的原因', {time: 1000});
            return false;
        }

        var $currBtn = currentBtn('end-btn', id);

        // 配置ajax数据
        $.ajax({
            url: 'finance/endContract',
            type: 'post',
            data: '',
            dataType: 'json',
            success: function (data) {
                if (data.ack == true) {
                    $endMod.modal('hide');
                    layer.msg(data.msg, {time: 1500}, function () {
                        $currBtn.remove();
                        $txTd.text('已中止');
                    });
                }
            }
        });

    });

    /*++++++++++++++++++++++++++++++ 修改合同编号 ++++++++++++++++++++++++++++++*/
    $(document).on('click', editBtn, function () {
        //重置表单
        _editNumFrm.reset();

        var id = $(this).data('id');
        $editNumMod.modal('show');

        //传递id
        $editHideIpt.val(id);
    });

    //点击 更改
    $okEdit.click(function () {
        var id = $editHideIpt.val(), //合同id
            $agreeCode = $('#agree_code'), //合同号
            $txTd = txInWhere(id, 1, 'first');
        if($agreeCode.val() == ''){
            layer.msg('请填写新合同号', {time: 1000});
            $agreeCode.focus();
            return false;
        }

        // 配置ajax数据
        $.ajax({
            url: 'finance/chkContract',
            type: 'post',
            data: '',
            dataType: 'json',
            success: function (data) {
                if (data.ack == true) {
                    $editNumMod.modal('hide');
                    layer.msg(data.msg, {time: 1500}, function () {
                        $txTd.text($agreeCode.val());
                    });
                }
            }
        });

    });

    /*++++++++++++++++++++++++++++++ 更改签署状态 ++++++++++++++++++++++++++++++*/
    $(document).on('click', changeSignBtn, function () {
        //重置表单
        _changeSignFrm.reset();

        var id = $(this).data('id');
        $signMod.modal('show');

        //传递id
        $signHideIpt.val(id);
    });

    //点击 确定更改
    $okSign.click(function () {
        var id = $signHideIpt.val(), //合同id
            $express = $('select[name="express_name"]'), //快递公司
            $expNum = $('#express'), //快递单号
            $txTd = txInWhere(id, 2);

        if($express.val() == ''){
            layer.msg('请选择快递公司', {time: 1000});
            return false;
        }else if($expNum.val() == ''){
            layer.msg('请输入快递单号', {time: 1000});
            $expNum.focus();
            return false;
        }
        var $currBtn = currentBtn('change-sign-btn', id);

        // 配置ajax数据
        $.ajax({
            url: 'finance/chkSignType',
            type: 'post',
            data: '',
            dataType: 'json',
            success: function (data) {
                if (data.ack == true) {
                    $signMod.modal('hide');
                    layer.msg(data.msg, {time: 1500}, function () {
                        $currBtn.remove();
                        $txTd.text('平台方已邮寄');
                    });
                }
            }
        });

    });
});