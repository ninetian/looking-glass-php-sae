<!doctype html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="网络延迟测试,网络丢包测试,网速测试,Krypt,Peer1,ColoCrossing,EGIHosting,QuadraNet,MultaCOM,美国洛杉矶KT机房,美国圣安娜KT机房,美国洛杉矶Peer1机房,美国圣何塞EGI机房,美国洛杉矶QuadraNet机房,美国洛杉矶MultaCOM机房,美国洛杉矶ColoCrossing机房,美国FiberHub机房,香港新世界NWT机房,香港电讯盈科PCCW机房,香港新力讯SunnyVision机房,日本樱花,日本东京KDDI(Linode),日本东京ServerCentral(VPS.Net、Vultr),新加坡OneAsiaHost(OAH)">
<meta name="description" content="网络观察镜(Looking Glass)是一个收集统计各ISP或者机房到中国三大运营商网络质量的工具。">
<title>网络观察镜|Looking Glass|网络延迟测试|网络丢包测试|美国机房|香港机房|日本机房</title>

<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="/css/style.css" type="text/css">

<!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js" type="text/javascript"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js" type="text/javascript"></script>
    <![endif]-->

<script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.js" type="text/javascript"></script>
<script src="http://cdn.bootcss.com/highcharts/3.0.9/highcharts.js"></script>
<script src="http://cdn.bootcss.com/highcharts/3.0.9/modules/exporting.js"></script>
<script src="/js/min.js" type="text/javascript"></script>
</head>

<body>
<h2>Looking Glass正在收集数据和进行测试</h2>
<h3>与BGPlay功能不同，这个工具只采集Ping数据。</h3>
<h4>数据来自超过10个不同ISP或者机房的Looking Glass，其中有KT，很平衡。</h4>
<h4>本程序由WDLTH编写，已在GITHUB开源。<a href="https://github.com/wdlth/looking-glass-php-sae" title="项目GITHUB地址">项目GITHUB地址</a></h4>
<h4>由于Cron满了，会对香港至移动的测试任务进行削减，反正移动和HKIX谈笑风生，延迟都是那么低……</h4>
<h4>启用了Highcharts的放大功能，在图表上拖动可以进行放大。</h4>
<h5>数据仅供参考。</h5>
<br />
<h5>以下是最新数据：</h5>
<div class="container">
<div id="chartheader" class="chartheader">
<ul id="chartTab" class="nav nav-tabs">
        <li class="active"><a href="#chinatelecom" data-toggle="tab">中国电信</a></li>
        <li class=""><a href="#chinaunicom" data-toggle="tab">中国联通</a></li>
        <li class=""><a href="#chinamobile" data-toggle="tab">中国移动</a></li>
      </ul>
      <div id="chart" class="tab-content">
      <div id="chinatelecom" class="chart tab-pane fade active in">
      </div>
      <div id="chinaunicom" class="chart tab-pane fade">
      </div>
      <div id="chinamobile" class="chart tab-pane fade">
      </div>
      <script type="text/javascript">
$('#chartTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
</div>
<div class="col-xs-12">
<table id="example" class="table table-striped col-xs-10">
<thead>
          <tr>
            <th>数据源</th>
            <th>最低延迟</th>
            <th>平均延迟</th>
            <th>最高延迟</th>
            <th>丢包率</th>
            <th>测试时间</th>
          </tr>
      </thead>
        <tbody>
        <tr>
        <td colspan="6">
        中国电信
        </td>
        </tr>
        {foreach from=$ctArray item=ctItem}
        <tr>
        <td>
        {$ctItem.source}
        </td>
        <td>
        {$ctItem.min}ms
        </td>
        <td>
        {$ctItem.avg}ms
        </td>
        <td>
        {$ctItem.max}ms
        </td>
        <td>
        {$ctItem.loss}%
        </td>
        <td>
        {$ctItem.time}
        </td>
        </tr>
        {/foreach}
        <tr>
        <td colspan="6" align="center">
        我是刷存在感的分隔符
        </td>
      	</tr>
        <tr>
        <td colspan="6">
        中国联通
        </td>
        </tr>
        {foreach from=$cuArray item=cuItem}
        <tr>
        <td>
        {$cuItem.source}
        </td>
        <td>
        {$cuItem.min}ms
        </td>
        <td>
        {$cuItem.avg}ms
        </td>
        <td>
        {$cuItem.max}ms
        </td>
        <td>
        {$cuItem.loss}%
        </td>
        <td>
        {$cuItem.time}
        </td>
        </tr>
        {/foreach}
        <tr>
        <td colspan="6" align="center">
        我是刷存在感的分隔符
        </td>
        </tr>
      <tr>
        <td colspan="6">
        中国移动
        </td>
      </tr>
        {foreach from=$cmArray item=cmItem}
        <tr>
        <td>
        {$cmItem.source}
        </td>
        <td>
        {$cmItem.min}ms
        </td>
        <td>
        {$cmItem.avg}ms
        </td>
        <td>
        {$cmItem.max}ms
        </td>
        <td>
        {$cmItem.loss}%
        </td>
        <td>
        {$cmItem.time}
        </td>
        </tr>
        {/foreach}
        </tbody>
</table>
</div>
</div>


<footer class="text-right"><a href="http://sae.sina.com.cn/" title="SinaAppEngine" target="_blank"><img src="/images/poweredbysae-120x33px.png" width="120px" height="33px" alt="Powered By SinaAppEngine"></a>&nbsp;<a href="http://www.wdlth.com" target="_blank">WDLTH的博客</a>&nbsp;Page rendered in <strong>{$elapsed_time}</strong> seconds, used <strong>{$memory_get_usage}</strong> KB memory.</footer>

<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000487357'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1000487357%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>
