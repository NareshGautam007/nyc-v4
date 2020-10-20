<script src="<?= base_url('assets/highcharts/highcharts.js') ?>"></script>
<script src="<?= base_url('assets/highcharts/data.js') ?>"></script>
<script src="<?= base_url('assets/highcharts/drilldown.js') ?>"></script>
<h1><img src="<?= base_url('assets/imgs/admin-home.png') ?>" class="header-img" style="margin-top:-3px;"> Home</h1>
<hr>
<div class="home-page">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard - Statistics Overview
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading fast-view-panel">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-clock-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">
                                
                               50
                                
                                <!--<div style="font-size: 25px;"><?= date('d.m.Y', $_SESSION['last_login']) ?></div>-->
                                <!--<div style="font-size: 16px;"><?= date('H:i:s', $_SESSION['last_login']) ?></div>-->
                                
                                
                            </div>
                            <div>Number of visitors today!</div>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/adminusers') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right b"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading fast-view-panel">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-envelope-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $lastSubscribed ?></div>
                            <div>New subscribed!</div>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/emails') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right g"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading fast-view-panel">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $newOrdersCount ?></div>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/orders') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right y"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading fast-view-panel">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-sort-numeric-desc fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?= $lowQuantity ?></div>
                            <div>Low Quantity Products!<br> (lower than 5)</div>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('admin/products?orderby=quantity=asc') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right r"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    
    
    <div class="row">
        <div class="col-md-12">
            <div id="chartContainer"></div>
        </div>
    </div>
    
    
    <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Monthly Visitors"
	},
	axisY :{
		valueFormatString: "#0,.",
		suffix: "k"
	},
	axisX: {
		title: "Data"
	},
	toolTip: {
		shared: true
	},
	data: [{        
		type: "stackedArea",
		showInLegend: true,
		toolTipContent: "<span style=\"color:#4F81BC\"><strong>{name}: </strong></span> {y}",
		name: "iOS",
		dataPoints: [
		{ x: 1, y: 3000 },
		{ x: 2, y: 7000 },
		{ x: 3, y: 10000 },
		{ x: 4, y: 14000 },
		{ x: 5, y: 23000 },
		{ x: 6, y: 31000 },
		{ x: 7, y: 42000 },
		{ x: 8, y: 56000 },
		{ x: 9, y: 64000 },
		{ x: 10, y: 81000 },
		{ x: 11, y: 105000 }
		]
	},
	{        
		type: "stackedArea",  
		name: "Android",
		toolTipContent: "<span style=\"color:#C0504E\"><strong>{name}: </strong></span> {y}<br><b>Total:<b> #total",
		showInLegend: true,
		dataPoints: [
		{ x: 4, y: 4000 },
		{ x: 5, y: 6000 },
		{ x: 6, y: 9000 },
		{ x: 7,y: 14000 },
		{ x: 8,y: 21000 },
		{ x: 9, y: 31000 },
		{ x: 10, y: 46000 },
		{ x: 11, y: 61000 }   
		]
	}]
});
chart.render();

}
</script>
    
    
    
    
    
    
    
    
   <!-- 
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart - Orders By Month</h3>
                </div>
                <div class="panel-body">
                    <div id="container-by-month" style="min-width: 310px; height: 400px; margin: 0 auto;">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart - Orders From Referrer</h3>
                </div>
                <div class="panel-body">
                    <div id="container-by-referrer" style="min-width: 310px; height: 400px; margin: 0 auto;">

                    </div>
                </div>
            </div>
        </div>
    </div>-->
    
    
</div>

















<!--<script>
    /*
     * Chart for orders by referrer
     */
    $(function () {
    Highcharts.chart('container-by-referrer', {
    chart: {
    type: 'column'
    },
            title: {
            text: 'Orders comming from..'
            },
            subtitle: {
            text: 'Most Orders By Referrer'
            },
            xAxis: {
            type: 'category'
            },
            yAxis: {
            title: {
            text: 'Total max numbers'
            }

            },
            legend: {
            enabled: false
            },
            plotOptions: {
            series: {
            borderWidth: 0,
                    dataLabels: {
                    enabled: true,
                            format: '{y}'
                    }
            }
            },
            tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
            },
            series: [{
            name: 'Referrer',
                    colorByPoint: true,
                    data: [
<?php foreach ($byReferral as $referrer) { ?>
                        {
                        name: '<?= $referrer['referrer'] ?>',
                                y: <?= $referrer['num'] ?>,
                                drilldown: '<?= $referrer['referrer'] ?>'
                        },
<?php } ?>
                    ]
            }]
    });
    });
    /*
     * Chart for orders by mount/year 
     */
    $(function () {
    Highcharts.chart('container-by-month', {
    title: {
    text: 'Monthly Orders',
            x: - 20
    },
            subtitle: {
            text: 'Source: Orders table',
                    x: - 20
            },
            xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
            title: {
            text: 'Orders'
            },
                    plotLines: [{
                    value: 0,
                            width: 1,
                            color: '#808080'
                    }]
            },
            tooltip: {
            valueSuffix: ' Orders'
            },
            legend: {
            layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
            },
            series: [
<?php foreach ($ordersByMonth['years'] as $year) { ?>
                {
                name: '<?= $year ?>',
                        data: [<?= implode(',', $ordersByMonth['orders'][$year]) ?>]
                },
<?php } ?>
            ]
    });
    });
</script>-->

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
