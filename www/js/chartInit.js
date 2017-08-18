define(['jquery', 'bootstrap', 'common', 'highcharts'], function ($, bootstrap, common, highcharts) {
    /*模板数据*/
    var templData = {
        chart: {type: 'column'},
        title: {text: ''},  //主标题
        subtitle: {text: ''},   //次标题
        xAxis: {
            categories: []//日期数组
        },
        yAxis: {
            title: {text: '访问次数'},
            plotLines: [{
                value: 0,
                width: 1,
                color: '#f00'
            }]
        },
        tooltip: {valueSuffix: '次'},
        /*legend: {
         floating: true,
         layout: 'vertical',
         align: 'right',
         verticalAlign: 'top',
         borderWidth: 0
         },*/
        credits: {enabled: false},  // 版权信息，false：不显示

        //坐标上显示值
        plotOptions: {
            series: {
                color: '#3483e7' //柱状颜色
            },
            line: {
                dataLabels: {enabled: true},
                enableMouseTracking: true
            }
        },
        series: []
    };

    /*对象克隆*/
    var extend = function (target, source) {
        for (var i in source) {
            target[i] = source[i];
        }
        return target;
    };

    var createNewChart = function (id, opt) {
        var newChart,//保存返回值的变量
            initData,
            target = {};//创建一个空对象保存模板数据,防止直接改动模板
        var id = $(id);
        initData = extend(extend(target, templData), opt);//数据化初始完成
        return id.highcharts(initData);//返回一个highChart对象
    };

    return createNewChart;
});