define(['jquery', 'chartInit', 'datePickerInit', 'bootTable', 'tbExport', 'bootExport', 'bootCn'], function ($, createNewChart, setOption) {
    //侧边主菜单
    dataCtrl.currNav('side_1');

    //页面菜单 1
    dataCtrl.currNav('page_nav_2');

    //创建一个区域图,先配置参数
    var opt_area = {
        chart: {type: 'area'},
        xAxis: {
            categories: ['2016-4-1', '2016-4-2', '2016-4-3', '2016-4-4', '2016-4-5', '2016-4-6', '2016-4-7', '2016-4-8', '2016-4-9', '2016-4-10', '2016-4-11', '2016-4-12']
        },
        series: [
            {
                name: '总访问',
                data: [194, 95, 54, 29, 71, 106, 129, 144, 176, 135, 148, 216]
            }
        ]
    };

    //创建一个饼图,先配置参数
    var opt_pie = {
        chart: {type: 'pie'},
        xAxis: {
            categories: ['2016-4-1', '2016-4-2', '2016-4-3', '2016-4-4', '2016-4-5', '2016-4-6', '2016-4-7', '2016-4-8', '2016-4-9', '2016-4-10', '2016-4-11', '2016-4-12']
        },
        series: [
            {
                name: '总访问',
                data: [194, 95, 54, 29, 71, 106, 129, 144, 176, 135, 148, 216]
            }
        ]
    };

    createNewChart('#area_chart', opt_area);
    createNewChart('#pie_chart', opt_pie);

    //日历范围选择器
    $('#date_picker').daterangepicker(setOption, function (start, end) {
        var starDate = start.format('YYYY-MM-DD'),
            endDate = end.format('YYYY-MM-DD');
        console.log('你选择了: ' + starDate + ' ～ ' + endDate);
        alert('你选择了: ' + starDate + ' ～ ' + endDate);
    });
});