$(function(){
   dataCtrl.currNav('page_nav_2');
   /*拼卡查询*/
   var game_name=$('#select_game'),     /*所属游戏*/
      game_state=$('#select_state'),    /*使用状态*/
      options_game="",                  /*所属游戏html字符*/  
      options_state="",                 /*状态html字符*/
      id_game=null,                     /*游戏所绑定的id*/ 
      id_state=null,                    /*使用状态id*/
      package_name=null,                /*套餐名字*/
      package_price=null,               /*套餐金额*/
      pinka_manu=$('#pinka_manu'),      /*套餐名称*/  
      pinka_price=$('#pinka_price'),    /*套餐价格*/
      pinka_state=$('#pinka_state'),    /*使用状态*/    
      pinka_game=$('#pinka_game'),      /*所属游戏*/ 
      pinka_rule=$('#pinka_rule'),      /*拼卡规则*/
      pinka_add_state=null,             /*新增规则使用状态html option*/ 
      pinka_add_game=null,              /*新增规则所属游戏html option*/
      pinka_btn=$('#pinka_btn'),        /*新增规则确定按钮*/
      add_btn=$('.add-btn'),
      pinka_modify = $('#pinkaModal'),  /*表单弹窗ID*/
      fixFormModal=$('#fixFormModal'),  /*修改表单弹窗ID*/     
      tip=$('.won_tip'),                /*必填项提醒*/
      _fix_btn=$('#fix_btn'),           /*确定修改*/
       edit_btn=$('.edit-btn'),         /*修改按钮*/
      jq_list=[pinka_manu,pinka_price,pinka_state,pinka_game],                       /*保存jq变量*/     
      option_initText="<option value='' selected disabled>请选择</option>",    
      /*所属游戏名数组*/   
      gameArr=[
          {id:0,name:"天龙八部3D"},
          {id:1,name:"2全民奇迹-光速端-YW"},
          {id:2,name:"暗黑黎明（已下架）"},
          {id:3,name:"神魔"},
          {id:4,name:"波斯之刃"},
          {id:5,name:"古惑仔"},
          {id:6,name:"超神战记"},
          {id:7,name:"天龙八部3D"},
          {id:8,name:"超神战记（特卖）08"},
          {id:9,name:"超神战记（特卖）09"},
          {id:10,name:"九阴真经（已下架）"},
          {id:11,name:"凡仙"},
          {id:12,name:"决战沙城"},
          {id:13,name:"十万个冷笑话"},
          {id:14,name:"乱斗西游2"},
          {id:15,name:"天龙八部3D"},
          {id:16,name:"女神联盟"},
          {id:17,name:"刀塔传奇（偶玩端"},
          {id:18,name:"天龙八部3D"}
      ],
      /*游戏状态数组*/   
      stateArr=[
          {id:0,name:"已下线"},
          {id:1,name:"使用中"}
      ];
    /*所属游戏select框填充*/
    $.each(gameArr,function(i,val){
        options_game+="<option value='"+val.id+"'>"+val.name+"</option>";
        if(i==gameArr.length-1){
           game_name.html(options_game);    
           game_name.prepend(option_initText); 
        }
        
    });
    /*状态select框填充*/
    $.each(stateArr,function(i,val){
        options_state+="<option value='"+val.id+"'>"+val.name+"</option>";
        if(i==stateArr.length-1){
           game_state.html(options_state);
           game_state.prepend(option_initText); 
        }
        
    });
    /*开始查询*/
    $('.filter-btn').click(function(){
        id_game=$('#select_game').val();                /*所属游戏*/
        id_state=$('#select_game').val();               /*使用状态*/
        package_name=$('#search_name').val();          /*套餐名字*/
        package_price=$('#search_value').val();         /*套餐金额*/
//        $.ajax({
//            url:"",
//            type:"POST",
//            data:{id_game:id_game,id_state:id_state,package_name:package_name,package_price:package_price},
//            success:function(data){
//               if(data.ack = true){
//                    
//                } 
//            }
//        });
    });
    /*新增规则状态使用*/
    $.each(stateArr,function(i,val){
         pinka_add_state+="<option value='"+val.id+"'>"+val.name+"</option>";
        if(i==stateArr.length-1){
           pinka_state.html(pinka_add_state);
           pinka_state.prepend(option_initText); 
        }
    });
    /*新增规则游戏select框填充*/
    $.each(gameArr,function(i,val){
        pinka_add_game+="<option value='"+val.id+"'>"+val.name+"</option>";
        if(i==gameArr.length-1){
           pinka_game.html(pinka_add_game);
           pinka_game.prepend(option_initText);
           pinka_game.selectpicker({
              style: 'btn-info'
          });    
        } 
    });
    /*新增规则新增按钮*/
    add_btn.click(function(){
        pinka_modify.modal('show');
        /*清除上次痕迹*/
        pinka_manu.val('');       /*套餐名称*/
        pinka_price.val('');      /*套餐价格*/
        pinka_state.val('');      /*使用状态*/
        pinka_game.selectpicker('val','');
        pinka_game.selectpicker('refresh');       /*清空select 插件留下的痕迹*/
    });
    /*事件兼容*/
    function EventUtil(ele,fn,handler){
        if(ele.addEventListener){
            ele.addEventListener(handler,fn,false);
        }else if(ele.attachEvent){
            ele.attachEvent('on'+handler,fn);
        }
    }
    /*表单提交*/
    function postForm(){
        
      var pinka_current,
          pinka_manuV=pinka_manu.val(),   /*套餐名称*/
          pinka_priceV=pinka_price.val(), /*套餐价格*/
          pinka_stateV=pinka_state.val(), /*使用状态值*/
          pinka_gameV=pinka_game.val(),   /*所属游戏值*/
          pinka_stateId=pinka_state.find('option:selected').text(), /*使用状态ID*/
          pinka_gameId=pinka_game.find('option:selected').text(),   /*所属游戏ID*/
          pinka_ruleV=pinka_rule.val(),   /*拼卡规则*/
          data_id=Math.random(),          /*模拟不重复id,以后要删除*/
          update_time="2016-05-31 10:19:19";/*模拟时间,以后要删除*/
      if(pinka_gameV==0){
           /*字符串作用防止id为0的时候通过*/
          pinka_gameV=pinka_gameV+'';
      }
        
      if(!(pinka_manuV && pinka_priceV && pinka_stateV && pinka_gameV)){
         /*必填项为空则提醒用户,否则提交数据*/ 
         tip.show(); 
      }else{
          /*新增规则模板*/
           var congfig_tr='<tr data-id="'+data_id+'"><td class="bs-checkbox"><div class="td-inner-tx">'+data_id+'</div></td><td><div class="td-inner-tx id_txt">'+pinka_gameId+'</div></td><td><div class="td-inner-tx id_txt">'+pinka_manuV+'</div></td><td><div class="td-inner-tx id_txt">'+pinka_priceV+'</div></td><td><div class="td-inner-tx id_txt">'+pinka_stateId+'</div></td><td><div class="td-inner-tx id_txt">'+pinka_ruleV+'</div></td><td><div class="td-inner-tx">'+update_time+'</div></td><td><div class="btn-group"><button class="btn btn-primary btn-sm edit-btn" data-id="'+data_id+'" data-title="修改配置信息"><i class="glyphicons glyphicons-pencil fn-mr-10"></i>修改</button></div></td></tr>';
         /*表单校验成功提交ajax 数据*/
          tip.hide();/*隐藏提示*/
//          $.ajax({
//            url:"",
//            type:"POST",
//            data:{pinka_manuV:pinka_manuV,pinka_stateV:pinka_stateV,pinka_stateV:pinka_stateV,pinka_gameV:pinka_gameV},
//            success:function(data){
//               if(data.ack = true){
//                    //成功之后插入一条数据到列表并且隐藏表单弹窗框
//                       $('.tbody').prepend(congfig_tr);
//                       pinka_modify.modal('hide');   
//                } 
//            }
//        });
          $('.tbody').prepend(congfig_tr);
          pinka_modify.modal('hide');         /*这两项代码均为模拟观看,开发时候请删除*/
      }     
    }
    /*监听必填提示*/
    !function(){
        for(var i=0;i<4;i++){
        //循环注册事件防止jq事件覆盖产生bug
        
        EventUtil(jq_list[i][0],function(){tip.hide();},'change');
        EventUtil(jq_list[i][0],function(){tip.hide();},'keyup');    
        
        }
    }()
    /*点击确定按钮触发表单提交*/
    EventUtil(pinka_btn[0],postForm,'click');
    /*状态select*/
    function select_state(_text){
        var options_state="";
        $.each(stateArr,function(i,val){
            options_state+="<option value='"+val.id+"'>"+val.name+"</option>";
            if(i==stateArr.length-1){
               $('#pinka_state_fix').html(options_state);
               $('#pinka_state_fix').prepend(option_initText); 
            }
        });
        $.each(stateArr,function(i,val){
            /*是否存在_text*/
            if($.trim(val.name)==$.trim(_text)){
               $('#pinka_state_fix').val(i);//选中 
            }
                
        });
    }
  
    $('.tab_body').on('click',edit_btn,function(e){
        
        //$('.won_tip').hide();
        
        var $_self="",
            reg_class=/edit-btn/g,
        /*依据列获取表顺序排列表单id数组*/
        id_form_list=['#pinka_game_fix','#pinka_manu_fix','#pinka_price_fix','#pinka_state_fix','#pinka_rule_fix'],
        /*需要获取表格的class*/        
        class_name=".id_txt";
        if(reg_class.test(e.target.className)){
                 $_self=$(e.target);
                /*
                  @function docomforms(_self,id_form_list,class_name,IsSelectArr,context)
                  @支持所有列表修改调用
                  @_self:当前修改的dom 对象
                  @context:表单改动,列表进行刷新数据true
                  @form_val_list:表单值(注意与列表获取的数组值形成映射关系，注意顺序)
                  @id_form_list:表单id数组,需要排序，和列表映射['#nam','#ids']
                  @_textlist:列表需要获取的文字数组
                  @class_name:需要获取数据classname,需要table标签自定义这个类名　eg:<tr class="tr">mmmm</tr>
                  @IsSelectArr：下拉选择框的游戏名，如<option>大主宰</option>
                */
                docomforms($_self,id_form_list,class_name,gameArr,false,select_state);
                fixFormModal.modal('show'); 
        }
        return false;
         
    });
    /*确定修改*/
    _fix_btn.click(function(){
        var id_form_list=['#pinka_game_fix','#pinka_manu_fix','#pinka_price_fix','#pinka_state_fix','#pinka_rule_fix'],
              class_name=".id_txt";
        docomforms(docomforms.self,id_form_list,class_name,gameArr,true,select_state);
        fixFormModal.modal('hide'); 
        
    });
         
    
})