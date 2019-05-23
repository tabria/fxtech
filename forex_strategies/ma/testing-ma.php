<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Testing the Moving Average</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="y_key" content="80ab88f271907759" />
<meta name="keywords" content="forex, forex traders, forex strategy, moving average strategy, moving average, ma, simple moving average, sma, price, crossover, cross, entry rules, exit rules, stop order, signal bar,testing
 "/>
<meta name="description" content="In this strategy, the buy or sell signals are generated when the price test the Moving Average. In this case we use MA instead of trend line"/>
<meta name="robots" content="index, follow" />
<meta name="author" content="FXTech.info" />
<link rel="shortcut icon" href="../../images/favicon.ico" />
<link href="../../css/main_style1.css" rel="stylesheet" type="text/css" />
</head>

<body >

<div id="container">
  <!--Start Header -->
	<?php include("../header_strategies.php"); ?><!--End Header -->
  <!-- start top navigation #toopNav -->
  <div id="topnavbg" >
  	<ul id="tabs">
		<li class="home" ><a  href="../../index.php"></a></li>
		<li class="education"><a href="../../forex_education/what_is_forex.php"></a></li>
        <li class="articles"><a href="../../forex_articles/positive_mathematical_expectation.php"></a></li>
        <li class="strategies"><a class="selected" href="../forex_strategies.php"></a></li>
    	<li class="tools"><a href="../../forex_tools/forex_tools.php"></a></li>
        <li class="books"><a href="../../forex_books.php"></a></li>
	</ul>
  </div><!-- end top navigation #toopNav -->
  <!--twitteme start -->
  <div id="twitteme">
  	<a href="http://twitter.com/fxtechh">
    	<img src="../../images/twitteme.png" alt="twitteme" title="twitter" border="0px" /></a>
    </div><!-- twitteme end -->
  <!-- start shadow under top navigation -->
  <div>
  	<img src="../../images/shadowsep.png" alt="sep" border="0px" />
  </div><!-- end shadow under top navigation -->
  
  <!-- start location  -->
  <div id="small"><a href="../forex_strategies.php">forex strategies</a> <img src="../../images/bullet_menu.png" alt="bull" border="0px" /> <a href="../forex_strategies.php#ma">Moving Averages</a> <img src="../../images/bullet_menu.png" alt="bull" border="0px" /> Testing the Moving Average</div><!-- end location -->
  <!-- start mainContent -->
  <div id="topcontent"><img src="../../images/content_top_border.png" alt="border" border="0px" /></div>
  <div id="mainContent">
  
  	<!-- main content start no div --> 
		<h1>Testing the Moving Average</h1>
        <div id="spacertitle"><img src="../../images/spacer_cont_title.png" alt="spacer" border="0px" /></div>
        <div class="small2">published by fxtech.info</div>
        <div id="date"><img src="../../images/date/260110.png" alt="date" title="date" border="0px" /></div>
<br/>            
                  <div class="textarea">
 <!-- square ad in content start  -->
<div class="adsincontenttop">
<!--ads 300x250-->
</div><!-- square ad in content end  -->
In this strategy, the buy or sell signals are generated when the price test the <a href="../../forex_education/moving-average.php">Moving Average</a>. In this case we use MA instead of trend line. If the price is going in one direction then MA must be a support for the price. The best performing Moving Averages with this strategy are 20MA and 50MA (20 and 50 periods Moving Averages). If we want to risk more and the trend is strong we may use 20MA, but if we don&#146;t want to expose our account to unnecessary risk it is more suitable the 50MA. We can use only moving averages to determine the current trend but it is not a mistake if we use additional technical indicators like ADX or MACD for trend confirmation. <br/><br/>
If we use only moving averages for trend confirmation we must take notice that if the price is above MA and the MA is pointing upwards, then the trend is up and we will open only buy (long) positions. If the price is below MA and MA is pointing downwards, then the trend is down and we will open only sell (short) positions.

<br /><br />
<h3>Rules for Entries and Exits:</h3>
<br/>
	
 - <strong>Indicators:</strong>  20MA or 50MA;
 <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ADX or MACD) &#150; Not obligatory;
 <br /><br/> - <strong>Time Frame:</strong>  All Time Frames
<br/><br/>
<b>Buy Order (Long Position)</b>:
<br/>
	<ol>
    	<li>Price is above 20( or 50 ) MA and the Moving Average is pointing upwards</li>
    	<li>There is a correction around 20(50) MA and at least one bar from this correction passed MA&#146;s level. This bar will be a &#147;signal bar&#148;.</li>
        <li>Buy when the price broke the highest point of the signal bar. Stop loss is at 3-5 pips below lowest point of the signal bar. When the price goes up we move our stop to 3-5 pips below the lowest point of a local consolidation or local minimum.</li>
        <li>Exit trade when the price broke again 20(50) MA from above (up to down) or if our stop loss order is activated.</li>
    </ol>
<br/>
<b>Sell Order (Short Position)</b>:
<br/>
	<ol>
    	<li>Price is below 20( or 50 ) MA and MA is pointing downwards</li>
    	<li>There is a correction around 20(50) MA and at least one bar from this correction passed MA&#146;s level. This bar will be a &#147;signal bar&#148;.</li>
        <li>Sell when the price broke the lowest point of the signal bar. Stop loss is at 3-5 pips above highest point of the signal bar. When the price goes down we move our stop to 3-5 pips above the highest point of a local consolidation or local minimum.</li>
        <li>Exit trade when the price broke again 20(50) MA from below (down to up) or if our stop loss order is activated.</li>
    </ol>
<h2>Chart - explanation</h2>


At 8:00 USD/JPY broke the consolidation zone and also broke the Moving Average. This bar, at 8:00, is our &#147;signal bar&#148;.<div class="imgspace"><img class="imgcont" src="../../images/content_strategies/MA/testMA.gif" alt="Moving Average Test" title="MA Test" /></div>
 We put a Buy Order (long position) over the highest point of the signal bar. The Entry Level is at 1.4861. Stop Loss will be below the lowest point of the signal bar at 1.4771 or 90 pips stop loss. We are long on the next bar. After we moved the stop several times, few days later, at 8:00 we must close our position because the price broke the Moving Average (20MA). So our close price is 1.5173. The profit from this trade is exactly 312 pips and the initial stop was 90 pips, so our profit is 3.5 times bigger than initial stop loss. Not bad at all.
<br/><br />
 <div class="adsincontentbottom">
<!--ads half banner-->
 </div>
<br/><br/>
<i>The materials presented on this website are solely for informational purposes and are not intended as investment or trading advice. 
FXTECH.INFO strongly recommended to try this strategy first on <strong>DEMO ACOOUNT</strong> and then if you are pleased with the results you can use it on your live account. <strong>Always</strong> experiment whit <strong>DEMO ACCOUNTS</strong>. They are <strong>FREE and YOU WILL NOT LOSE ANY MONEY.</strong> </i>
</div>

<br/>
            
  </div><!-- end #mainContent -->
 
  
  <!-- start #sidebar1 -->
  <div id="sidebar1">
  	<!-- menu start -->
		<ul id="hormenu">
			<li class="sidehome"><a href="../../index.php"></a></li>
			<li class="sideeducation"><a href="../../forex_education/what_is_forex.php"></a></li>
			<li class="sidearticles"><a href="../../forex_articles/positive_mathematical_expectation.php"></a></li>

            <li class="sideactivetitle"><img src="../../images/sidenav/strategies_active.png" alt="forex strategies" title="strategies" border="0px" /></li>
            <li class="itemactive">
				<ul id="activemenu">
                	<li class="currentpage" ><span id="currentlink1">Moving Averages</span></li>
					<li class="nonactiveitem"><a href="basic-ma-cross.php">Basic MA Crossover Strategy</a></li>
                    <li class="currentpage" ><img src="../../images/sidenav/bull.png" alt="bull" border="0px" /><span id="currentlink">Testing the Moving Average</span></li>
                    <li class="spacer1"><img src="../../images/sidenav/spacer1.png" alt="spacer" border="0px" /></li>

				</ul>
			</li>
			<li class="sidetools"><a href="../../forex_tools/forex_tools.php"></a></li>
			<li class="sidebooks"><a href="../../forex_books.php"></a></li>
            <li class="sidecontact" ><a href="../../contact.php"></a></li>
			<li class="sidesitemap"><a  href="../../site_map.php"></a></li>

		</ul>
        <!-- menu end -->
  </div><!-- end #sidebar1 -->
  <div id="bottomcontent"><img src="../../images/content_bottom_border.png" alt="border" border="0px" /></div> 
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
 <!-- Start Footer -->
  <?php include("../footer_strategies.php"); ?>
  <!-- end #footer -->
</div><!-- end #container -->
<!--google analytics start -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12678377-1");
pageTracker._trackPageview();
} catch(err) {}</script>
<!--google analitics end -->

</body>
</html>