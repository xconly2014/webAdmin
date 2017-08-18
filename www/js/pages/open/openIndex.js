$(function () {
    //侧边主菜单
    dataCtrl.currNav('side_3');

    //页面菜单 1
    dataCtrl.currNav('page_nav_1');
  
     //<拉取表格数据----以下这些定义的数据都是ajax拉取,实际开发需要删除>
    var id=1001,
        user="adminsssss",//注册用户
        acount_type="主账号",//账号类型
        cp_name="广州大主宰有限公司",
        area="华南华西",//区域
        face_man="张先生",//对接人
        linkman="张小渤",//联系人姓名
        mobile="15112032856",//联系人手机
        qq="1584121515",//联系人qq
        cp_address="广州天河大学城",//公司地址
        license="5121514845141514515",//营业执照编号
        email="123@1.com",//联系人邮箱
        telephone="44-841545151",//联系人座机
        register_time="2016-09-19 14:37:13",//注册时间
        state="已审核",//状态
        operate="修改区域",//操作
        tr_html="";//合成tr html
        
    //
                //          $.ajax({
                //            url:"",
                //            type:"POST",
                //            data:{dataid:data_id},
                //            success:function(data){
                //               if(data.ack = true){
                //                    //成功之后插入tr
                //                     
                //                      tr_html='<tr data-id="'+id+'"><td><div class="td-inner-tx">'+user+'</div></td><td><div class="td-inner-tx">'+acount_type+'</div></td><td><div class="td-inner-tx" data-toggle="popover" title="'+cp_name+'" data-content="联系人QQ:'+qq+'<br/>联系人手机:'+mobile+'<br />公司地址:'+cp_address+'<br/>营业执照编号:'+license+'">'+cp_name+'</div></td><td><div class="td-inner-tx">'+area+'</div></td><td><div class="td-inner-tx">'+linkman+'</div></td><td><div class="td-inner-tx">'+face_man+'</div></td><td><div class="td-inner-tx">123@1.com</div></td><td><div class="td-inner-tx"></div></td><td><div class="td-inner-tx" data-toggle="tooltip" title="'+register_time+'">'+register_time+'</div></td><td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue review" data-id="1002">'+state+'</a></div></td><td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue fix" data-id="1002" title="修改区域">'+operate+'</a></div></td></tr>';
    //$('#td_list').html(tr_html);    
                //                }
                //插入完掉用提示组件
//                $('[data-toggle="tooltip"]').tooltip({container: 'body'});
//                popover_tip();
                //            }
                //        });
                /*-----开发时要删除------*/
        
     tr_html='<tr data-id="'+id+'"><td><div class="td-inner-tx">'+user+'</div></td><td><div class="td-inner-tx">'+acount_type+'</div></td><td><div class="td-inner-tx" data-toggle="popover" title="'+cp_name+'" data-content="联系人QQ:'+qq+'<br/>联系人手机:'+mobile+'<br />公司地址:'+cp_address+'<br/>营业执照编号:'+license+'">'+cp_name+'</div></td><td><div class="td-inner-tx">'+area+'</div></td><td><div class="td-inner-tx">'+linkman+'</div></td><td><div class="td-inner-tx">'+face_man+'</div></td><td><div class="td-inner-tx">123@1.com</div></td><td><div class="td-inner-tx"></div></td><td><div class="td-inner-tx" data-toggle="tooltip" title="'+register_time+'">'+register_time+'</div></td><td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue review" data-id="'+id+'">'+state+'</a></div></td><td><div class="td-inner-tx"><a href="javascript:void(0);" class="a_font_blue fix" data-id="'+id+'" title="修改区域">'+operate+'</a></div></td></tr>';
    //插入页面
    $('#td_list').html(tr_html);
    
    
     //tooltip
    $('[data-toggle="tooltip"]').tooltip({container: 'body'});
    popover_tip();
    
    //状态
    $('.review').click(function(){
        var id=$(this).data('id'),
            //-----以下这些变量都是模拟ajax，开发人员应该根据实际变量赋值
            cp_name_before="阿里巴巴",//企业名称变更前
            cp_name_after="马云支付宝",//企业名称变更后
            license_before="xxxxxxxxx",//营业执照变更前
            license_after="545151515115151515",//营业执照变更后
            cp_address_before="广州天河",//公司地址变更前
            cp_address_after="广州白云区",//公司地址变更后
            cp_scan_before="",//营业执照扫描件变更前
            cp_scan_after="xxx.png",//营业执照扫描件变更后
            verify_val=1,//审核通过 
            reason="资料齐全",//理由
            cp_remark="开顶顶顶顶顶",//备注
            diary=true,//是否存在操作日志
            verify_time="2016-09-19",//审核时间
            cp_state="已审核",//状态
            operator="张生",//操作人
            cp_massage="";//企业信息html
         //-----以下这些变量都是模拟ajax，开发人员应该根据实际变量赋值
         //请求data-id 这条数据信息
                //          $.ajax({
                //            url:"",
                //            type:"POST",
                //            data:{dataid:data_id},
                //            success:function(data){
                //               if(data.ack = true){
                //                    //成功之后在企业信息弹窗显示信息
                //                    cp_massage='<tr><td><div class="td-inner-tx">企业名称</div></td><td><div class="td-inner-tx">'+cp_name_before+'</div></td><td><div class="td-inner-tx">'+cp_name_after+'</div></td></tr><tr><td><div class="td-inner-tx">营业执照编号</div></td><td><div class="td-inner-tx">'+license_before+'</div></td><td><div class="td-inner-tx">'+license_after+'</div></td></tr><tr><td><div class="td-inner-tx">公司地址</div></td><td><div class="td-inner-tx">'+cp_address_before+'</div></td><td><div class="td-inner-tx">'+cp_address_after+'</div></td></tr><tr><td><div class="td-inner-tx">营业执照扫描件</div></td><td><div class="td-inner-tx">'+cp_scan_before+'</div></td><td><div class="td-inner-tx"><img src="'+cp_scan_after+'" alt=""></div></td></tr>';
                                      //插入企业信息弹窗表格
//                                        $('#cp_information').html(cp_massage);
                                           //当前审核状态
//                                            $('.cur_state').html(cp_state);
//                                        //如果审核通过则勾选
//                                        if(verify_val){
//                                            $('#verify_pass').prop('checked','checked');
//                                        }
//                                        //-----操作日志---->
//                                        //若存在操作日志,则显示
//                                        if(diary){
//                                            var oper_html='<tr><td><div class="td-inner-tx">'+verify_time+'</div></td><td><div class="td-inner-tx">'+cp_state+'</div></td><td><div class="td-inner-tx">'+operator+'</div></td><td><div class="td-inner-tx">'+reason+'</div></td><td><div class="td-inner-tx">'+cp_remark+'</div></td></tr>';
//                                            //插入日志
//                                            $('#operate_id').html(oper_html);
//
//                                        }    
                //                     $('#massageModal').modal('show'); //插完数据显示弹窗 
        
                //                } 
                //            }
                //        });
        //模拟获取到的信息
        cp_massage='<tr><td><div class="td-inner-tx">企业名称</div></td><td><div class="td-inner-tx">'+cp_name_before+'</div></td><td><div class="td-inner-tx">'+cp_name_after+'</div></td></tr><tr><td><div class="td-inner-tx">营业执照编号</div></td><td><div class="td-inner-tx">'+license_before+'</div></td><td><div class="td-inner-tx">'+license_after+'</div></td></tr><tr><td><div class="td-inner-tx">公司地址</div></td><td><div class="td-inner-tx">'+cp_address_before+'</div></td><td><div class="td-inner-tx">'+cp_address_after+'</div></td></tr><tr><td><div class="td-inner-tx">营业执照扫描件</div></td><td><div class="td-inner-tx">'+cp_scan_before+'</div></td><td><div class="td-inner-tx"><img src="'+cp_scan_after+'" alt=""></div></td></tr>';
        
        //插入企业信息弹窗表格
        $('#cp_information').html(cp_massage);
        //当前审核状态
        $('.cur_state').html(cp_state);
        //如果审核通过则勾选
        if(verify_val){
            $('#verify_pass').prop('checked','checked');
        }
        //-----操作日志---->
        //若存在操作日志,则显示
        if(diary){
            var oper_html='<tr><td><div class="td-inner-tx">'+verify_time+'</div></td><td><div class="td-inner-tx">'+cp_state+'</div></td><td><div class="td-inner-tx">'+operator+'</div></td><td><div class="td-inner-tx">'+reason+'</div></td><td><div class="td-inner-tx">'+cp_remark+'</div></td></tr>';
            //插入日志
            $('#operate_id').html(oper_html);
            $('#massageModal').modal('show'); //插完数据显示弹窗 
            
        }
        
        
       
    });
    
    function vilidator(){
        
        if(!$('input[name="status"]').is(':checked')){
           
           
            layer.msg("请选择审核状态！",{time:1000});
            return false;
        }
        return true;
    }
    //状态提交
    $('.btn-danger').click(function(){
        //验证通过则提交
        
        if(vilidator()){
           $('#add_form')[0].submit(); 
        }
    });
    
    //修改区域信息
    $('.fix').click(function(){
        $('#operModal').modal('show');
    });
    //区域联系人
	var curName ="张小渤";
	var areaList = [
        ["吕贝","郝言明"],["童垒","李洋"],["张小渤","董伟强"],["郝言明"],["董伟强"]	];

	var getAreaContact = function(){
		var sltArea = document.com_form.area, //获得区域下拉框的对象
				sltHuman = document.com_form.area_contact, //获得联系人下拉框的对象
				areaContact = areaList[sltArea.selectedIndex]; //得到对应区域联系人数组
               
		sltHuman.length = 0; //清空联系人下拉框

		//填充联系人下拉框
		for(var i = 0; i < areaContact.length; i++){
			sltHuman[i] = new Option(areaContact[i], areaContact[i]);
			var objTxt = sltHuman.options[i].text;
            console.log(objTxt);
			if(objTxt == curName){
                
				sltHuman.options[i].selected = true;
			}

		}
        
	};

	//加载区域联系人
	getAreaContact();
	//区域联系人下拉时
	$(document).on("change", "#area", function () {
		getAreaContact();
	});
    

    

});