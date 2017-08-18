<nav class="navbar navbar-fixed-top head-nav">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="/" class="navbar-brand"></a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="provider-list dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        测试项目名一 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">测试项目名一</a></li>
                        <li><a href="#">测试项目名二</a></li>
                        <li><a href="#">测试项目名三</a></li>
                        <li><a href="#">测试项目名四</a></li>
                        <li><a href="#">测试项目名五</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--<li>
                    <a href="javascript:void(0);"><i class="i-global i-phone"></i>移动版</a>
                </li>-->
                <li>
                    <a href="/set/"><i class="i-global i-product"></i>设置</a>
                </li>
                <!--<li>
                    <a href="javascript:void(0);"><i class="i-global i-support"></i>支持中心</a>
                </li>-->
                <li class="dropdown" data-tab="hoverdown">
                    <a href="javascript:void(0);" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        hsokio@qq.com <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="User/"><i class="glyphicons glyphicons-keys fn-mr-10"></i>用户权限</a></li>
                        <li><a href="User/changePassword"><i class="glyphicons glyphicons-user-asterisk fn-mr-10"></i>修改密码</a></li>
                        <li><a href="User/resetPassword"><i class="glyphicons glyphicons-user-key fn-mr-10"></i>重置密码</a></li>
                        <li><a href="<?php echo site_url('login/logout');?>"><i class="glyphicons glyphicons-power fn-mr-10"></i>退出登录</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>