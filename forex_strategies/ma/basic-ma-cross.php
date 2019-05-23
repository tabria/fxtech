<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Basic Moving Average Crossover Strategy</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="y_key" content="80ab88f271907759" />
<meta name="keywords" content="forex, forex traders, forex strategy, moving average strategy, moving average, ma, simple moving average, sma, price, crossover, cross, entry rules, exit rules, stop order, signal bar
 "/>
<meta name="description" content="This is a very simple Moving Average strategy. Buy or sell signals are generated when Price crosses the Moving Average."/>
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
  <div id="small"><a href="../forex_strategies.php">forex strategies</a> <img src="../../images/bullet_menu.png" alt="bull" border="0px" /> <a href="../forex_strategies.php#ma">Moving Averages</a> <img src="../../images/bullet_menu.png" alt="bull" border="0px" /> Basic Moving Average Crossover Strategy</div><!-- end location -->
  <!-- start mainContent -->
  <div id="topcontent"><img src="../../images/content_top_border.png" alt="border" border="0px" /></div>
  <div id="mainContent">
  
  	<!-- main content start no div --> 
		<h1>Basic Moving Average Crossover Strategy</h1>
        <div id="spacertitle"><img src="../../images/spacer_cont_title.png" alt="spacer" border="0px" /></div>
        <div class="small2">published by fxtech.info</div>
        <div id="date"><img src="../../images/date/260110.png" alt="date" title="date" border="0px" /></div>
    
<br/>            
                  <div class="textarea">
                  <!-- square ad in content start  -->
<div class="adsincontenttop">
<!--ads 300x250 -->
</div><!-- square ad in content end  -->
This is a very simple <a href="../../forex_education/moving-average.php">Moving Average</a> strategy.
     
 Buy or sell signals are generated when Price crosses the Moving Average. That&#146;s it. It is so simple. For decreasing the number of false signals or premature entries, we must wait for price confirmation. For this purpose the bar when the signal is generated will be a &#147;signal bar&#148;. We must enter when price brake one of the signal bar&#146;s extremes (signal bar&#146;s high or signal bar&#146;s low). Don&#146;t forget that this is a trend following system so the profit/risk ratio (potential profit/potential stop) must be higher.
<br /><br clear="all" />
<h3>Rules for Entries and Exits:</h3>
<br/>
	
 - <strong>Indicators:</strong>  20MA (or whatever period or MA type you want);
 <br /> - <strong>Time Frame:</strong>  All Time Frames
<br/><br/>
<b>Buy Order (Long Position)</b>:
<br/>
	<ol>
    	<li>The bar in which the price crosses the SMA (20) from below (from the bottom upwards) will be &#147;signal bar&#148;. We put Buy Order (Long Position) 1 pips above the highest point on the signal bar.  </li>
    	<li>The Stop Loss is at 3 to 5 pips below the lowest point of the signal bar. We moved the Stop Loss Order if the price went up and if the close of the next bar is above the highest point of the previous bar.</li>
        <li>Exit the trade when the price crosses the 20-period MA from above (from top to bottom) or our Stop Loss Order is activated.</li>
    </ol>
<br/>
<b>Sell Order (Short Position)</b>:
<br/>
	<ol>
    	<li>The bar in which the price crosses the SMA (20) from above (from the top to bottom) will be &#147;signal bar&#148;. We put Sell Order (Short Position) 1 pips below the lowest point on the signal bar.  </li>
    	<li>The Stop Loss is at 3 to 5 pips above the highest point of the signal bar. We moved the Stop Loss Order if the price went down and if the close of the next bar is below the lowest point of the previous bar.</li>
        <li>Exit the trade when the price crosses the 20-period MA from below (from the bottom uplawds) or our Stop Loss Order is activated.</li>
    </ol>
<h2>Chart - explanation</h2>
From the top of the chart  we can see that USD/JPY is in a little consolidation. At 14:00 the price broke SMA (20) from above and generates sell signal (short signal). So the bar at 14:00 is now our signal bar. We put our sell order at 91.99 1 pip below the bottom of the signal bar. Our stop loss is at 92.26(5pips above signal bar&#146;s high + 2 pips for the spread) this is a nice 27 pips stop.
<div class="imgspace"><img class="imgcont" src="../../images/content_strategies/MA/cross_price_SMA_short.gif" alt="Basic MA Cross" title="Basic Moving Average Cross Strategy" /></div>
<br />At 15:00 our order is activated and we are short from 91.99 with stop at 92.26. After the big spike at 15:00 the market starts to drop.
After 5:00 on the 11.09.09 market allows us to move our stop from 92.26 to 91.58. Now this trade is a 100% winner. 
At 7:00 we can move our stop again from 91.58 to 91.43.
<br/>At 8:00 we have another opportunity to move our stop to 91.39. So now we have +60 pips profit locked. We continue to monitor the market and at 10:00 we moved our stop loss to 91.26.
After that the market consolidates for a while and at 17:00 we have another opportunity to lower our stop to 90.95.
At 18:00 we can move our stop once again to 90.70. At 22:00 our stop loss is activated and our trade is closed at 90.70. So briefly we go short at 91.99 and we are out at 90.70. We took +129 pips profit from this trade and our profit/stop ratio (or risk ratio) is 129/27=4.8. Is it nice or what?! This is a beautiful profit with only 27 pips initial stop loss.
<br/><br />
 <div class="adsincontentbottom">
<!--ads half banner -->
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
					<li class="currentpage" ><img src="../../images/sidenav/bull.png" alt="bull" border="0px" /><span id="currentlink">Basic MA Crossover Strategy</span></li>
					<li class="nonactiveitem"><a href="testing-ma.php">Testing the Moving Average</a></li>
	
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