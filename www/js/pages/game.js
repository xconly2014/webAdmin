define(['jquery', 'chartInit'], function ($, createNewChart) {
    //侧边主菜单
    dataCtrl.currNav('side_1');

    //页面菜单 1
    dataCtrl.currNav('page_nav_1');

    //创建一个圆柱图,先配置参数
    var opt_column = {
        xAxis: {
            categories: ['2016-4-1', '2016-4-2', '2016-4-3', '2016-4-4', '2016-4-5', '2016-4-6', '2016-4-7', '2016-4-8', '2016-4-9', '2016-4-10', '2016-4-11', '2016-4-12']
        },
        series: [
            {
                name: '用户访问',
                data: [194, 95, 54, 29, 71, 106, 129, 144, 176, 135, 148, 216]
            }
        ]
    };

    //创建一个折线图,先配置参数
    var opt_line = {
        chart: {type: 'line'},
        xAxis: {
            categories: ['2016-4-1', '2016-4-2', '2016-4-3', '2016-4-4', '2016-4-5', '2016-4-6', '2016-4-7', '2016-4-8', '2016-4-9', '2016-4-10', '2016-4-11', '2016-4-12']
        },
        series: [{data: [194, 95, 54, 29, 71, 106, 129, 144, 176, 135, 148, 216]}]

    };

    createNewChart('#column_chart', opt_column);
    createNewChart('#line_chart', opt_line);
});