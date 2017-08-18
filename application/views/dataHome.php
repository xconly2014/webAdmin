<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?></title>
    <base href="<?php echo base_url(); ?>">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/index.css?v=20160819">
</head>

<body>
<nav class="navbar navbar-fixed-top head-nav">
    <div class="container">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-brand"></a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown" data-tab="hoverdown">
                    <a href="javascript:void(0);" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        hsokio@qq.com <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">退出登录</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="index-con">
    <div class="product-wrap clearfix">
        <div class="product-item">
            <div class="product cloud-pd unset-pd"><!--如果已开通 移除样式 unset-pd-->
                <div class="product-hd"><i class="i-ico i-cloud"></i></div>
                <div class="product-body">
                    <div class="product-inner"><!--如果已开通 再追加样式 pd-hover-->
                        <div class="product-tx">
                            <h3>MarketingCloud</h3>
                            <h5>营销云</h5>
                        </div>
                        <!--<span class="in-btn">进入平台<i class="i-ico i-jt"></i></span>-->
                    </div>
                    <div class="status">
                        <span><i class="i-ico i-unset"></i>未开通</span>
                        <!--<span><i class="i-ico i-set"></i>已开通</span>-->
                    </div>
                </div>
            </div>
            <!--{ 如果已开通 以下则不显示-->
            <div class="content-unused cloud-pd">
                <h4>数据营销解决方案</h4>
                <ul>
                    <li>• 多维构建目标客群</li>
                    <li>• 360° 客群特征分析</li>
                    <li>• 环绕式营销触达</li>
                    <li>• 营销效果评估</li>
                    <li>• 云体系数据通道</li>
                </ul>
                <span><a href="javascript:void(0);">立即申请</a></span>
            </div>
            <!-- end }-->
        </div>
        <div class="product-item">
            <div class="product ad-pd unset-pd"><!--如果已开通 移除样式 unset-pd-->
                <div class="product-hd"><i class="i-ico i-ad"></i></div>
                <div class="product-body">
                    <div class="product-inner"><!--如果已开通 再追加样式 pd-hover-->
                        <div class="product-tx">
                            <h3>Ad Tracking</h3>
                            <h5>移动广告监测</h5>
                        </div>
                        <!--<span class="in-btn">进入平台<i class="i-ico i-jt"></i></span>-->
                    </div>
                    <div class="status">
                        <span><i class="i-ico i-unset"></i>未开通</span>
                        <!--<span><i class="i-ico i-set"></i>已开通</span>-->
                    </div>
                </div>
            </div>
            <!--{ 如果已开通 以下则不显示-->
            <div class="content-unused ad-pd">
                <h4>移动广告监测</h4>
                <ul>
                    <li>• 多维构建目标客群</li>
                    <li>• 360° 客群特征分析</li>
                    <li>• 环绕式营销触达</li>
                    <li>• 营销效果评估</li>
                    <li>• 云体系数据通道</li>
                </ul>
                <span><a href="javascript:void(0);">立即申请</a></span>
            </div>
            <!-- end }-->
        </div>
        <div class="product-item">
            <div class="product app-pd unset-pd"><!--如果已开通 移除样式 unset-pd-->
                <div class="product-hd"><i class="i-ico i-app"></i></div>
                <div class="product-body">
                    <div class="product-inner"><!--如果已开通 再追加样式 pd-hover-->
                        <div class="product-tx">
                            <h3>App Analytics</h3>
                            <h5>应用统计分析</h5>
                        </div>
                        <!--<span class="in-btn">进入平台<i class="i-ico i-jt"></i></span>-->
                    </div>
                    <div class="status">
                        <span class="fn-fl"><i class="i-ico i-free"></i>免费</span>
                        <span><i class="i-ico i-unset"></i>未开通</span>
                        <!--<span><i class="i-ico i-set"></i>已开通</span>-->
                    </div>
                </div>
            </div>
            <!--{ 如果已开通 以下则不显示-->
            <div class="content-unused app-pd">
                <h4>应用统计分析</h4>
                <ul>
                    <li>• 多维构建目标客群</li>
                    <li>• 360° 客群特征分析</li>
                    <li>• 环绕式营销触达</li>
                    <li>• 营销效果评估</li>
                    <li>• 云体系数据通道</li>
                </ul>
                <span><a href="javascript:void(0);">立即申请</a></span>
            </div>
            <!-- end }-->
        </div>
        <div class="product-item">
            <a href="game/" class="product game-pd">
                <div class="product-hd"><i class="i-ico i-game"></i></div>
                <div class="product-body">
                    <div class="product-inner pd-hover">
                        <div class="product-tx">
                            <h3>GameAnalytics</h3>
                            <h5>游戏运营分析</h5>
                        </div>
                        <span class="in-btn">进入平台<i class="i-ico i-jt"></i></span>
                    </div>
                    <div class="status">
                        <span><i class="i-ico i-set"></i>已开通</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="product-item">
            <div class="product in-pd unset-pd">
                <div class="product-hd"><i class="i-ico i-in"></i></div>
                <div class="product-body">
                    <div class="product-inner">
                        <div class="product-tx">
                            <h3>Insight</h3>
                            <h5>移动观象台</h5>
                        </div>
                    </div>
                    <div class="status">
                        <span><i class="i-ico i-unset"></i>未开通</span>
                    </div>
                </div>
            </div>
            <!-- 如果已开通以下则不显示-->
            <div class="content-unused in-pd">
                <h4>移动观象台</h4>
                <ul>
                    <li>• 多维构建目标客群</li>
                    <li>• 360° 客群特征分析</li>
                    <li>• 环绕式营销触达</li>
                    <li>• 营销效果评估</li>
                    <li>• 云体系数据通道</li>
                </ul>
                <span><a href="javascript:void(0);">立即申请</a></span>
            </div>
            <!-- end }-->
        </div>
        <div class="product-item">
            <div class="product e-pd unset-pd">
                <div class="product-hd"><i class="i-ico i-e"></i></div>
                <div class="product-body">
                    <div class="product-inner">
                        <div class="product-tx">
                            <h3>eAuth</h3>
                            <h5>易认证</h5>
                        </div>
                    </div>
                    <div class="status">
                        <span class="fn-fl"><i class="i-ico i-free"></i>免费</span>
                        <span><i class="i-ico i-unset"></i>未开通</span>
                    </div>
                </div>
            </div>
            <div class="content-unused e-pd">
                <h4>易认证</h4>
                <ul>
                    <li>• 多维构建目标客群</li>
                    <li>• 360° 客群特征分析</li>
                    <li>• 环绕式营销触达</li>
                    <li>• 营销效果评估</li>
                    <li>• 云体系数据通道</li>
                </ul>
                <span><a href="javascript:void(0);">立即申请</a></span>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p>&copy;广州小朋网络科技有限公司&nbsp;&nbsp;版权所有</p>
        <p>广州市天河软件园建中路59号西座柏朗奴大厦三楼&nbsp;&nbsp;粤ICP备13067565号&nbsp;&nbsp;客服热线:4000709394</p>
    </div>
</footer>
<script src="js/plugins/jquery.js"></script>
<script src="js/plugins/bootstrap.min.js"></script>
<script>
    $(function () {
        var $hoverDown = $('[data-tab="hoverdown"]');
        $hoverDown.on('mouseenter mouseleave', function (event) {
            var self = $(this);
            (event.type == 'mouseenter') ? self.addClass('open') : self.removeClass('open');
        });
    });
</script>
</body>
