<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Moving Average (MA) definitions and formulas</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="forex, forex traders, moving mverage, ma, simple moving average, sma, exponential moving average, ema, smoothed moving average, smma, linear weighted moving average, lwma
 "/>
<meta name="description" content="Basic information, formulas and definitions for all types Moving Averages - SMA, EMA, SMMA, LWMA " />
<meta name="robots" content="index, follow" />
<meta name="author" content="FXTech.info" />
<meta name="y_key" content="80ab88f271907759" />
<meta name="google-site-verification" content="IAkkV_XObhDQa0NTkBBCAk9IGaBg16OQvseISaAQp0Q" />
<link rel="shortcut icon" href="../images/favicon.ico" />
<link href="../css/main_style1.css" rel="stylesheet" type="text/css" />
</head>

<body >

<div id="container">
  <!--Start Header -->
	<?php include("../header_folders.php"); ?><!--End Header -->
  <!-- start top navigation #toopNav -->
  <div id="topnavbg" >
  	<ul id="tabs">
		<li class="home" ><a  href="../index.php"></a></li>
		<li class="education"><a class="selected" href="what_is_forex.php"></a></li>
        <li class="articles"><a href="../forex_articles/positive_mathematical_expectation.php"></a></li>
        <li class="strategies"><a href="../forex_strategies/forex_strategies.php"></a></li>
    	<li class="tools"><a href="../forex_tools/forex_tools.php"></a></li>
        <li class="books"><a href="../forex_books.php"></a></li>
	</ul>
  </div><!-- end top navigation #toopNav -->
  <!--twitteme start -->
  <div id="twitteme">
  	<a href="http://twitter.com/fxtechh">
    	<img src="../images/twitteme.png" alt="twitteme" title="twitter" border="0px" /></a>
    </div><!-- twitteme end -->
  <!-- start shadow under top navigation -->
  <div>
  	<img src="../images/shadowsep.png" alt="sep" border="0px" />
  </div><!-- end shadow under top navigation -->
  
  <!-- start location  -->
  <div id="small">forex education <img src="../images/bullet_menu.png" alt="bull" border="0px" /> Moving Average</div><!-- end location -->
  <!-- start mainContent -->
  <div id="topcontent"><img src="../images/content_top_border.png" alt="border" border="0px" /></div>
  <div id="mainContent">
  
  	<!-- main content start no div --> 
		<h1>Moving Average</h1>
        <div id="spacertitle"><img src="../images/spacer_cont_title.png" alt="spacer" border="0px" /></div>
        <div class="small2">published by fxtech.info</div>
        <div id="date"><img src="../images/date/260110.png" alt="date" title="date" border="0px" /></div>

               <h2><a name="base">General information</a></h2>
                
                  <div class="textarea">
 <!-- square ad in content start  -->
<div class="adsincontenttop">
<!--ads 300x250-->
</div><!-- square ad in content end  -->
<b>M</b>oving <b>A</b>verage or (<b>MA</b>) is one of the simplest, easiest and effective <strong>trading</strong> tool. It shows the average value of data in a fixed time period. Main purpose of the Moving Average is to be a self adapting <a href="trendline.php">trend line</a> and also to be main <a href="support_resistance.php#support">support</a> or <a href="support_resistance.php#resistance">resistance</a> level. Most common periods used for calculating <strong>Moving Averages</strong> are:  5, 10, 20, 50, 100 and 200. The shorter the period is, the higher the probability of false signals is.
<br clear="all" />
<div class="imgspace"><img class="imgcont" src="../images/content_education/MA/allMAs.gif" alt="All Moving Averages" title="All Moving Averages" /></div>
<br />
There are few types of moving averages:<br/><br /> -<a href="#sma">Simple Moving Average (SMA)</a>; <br /><br/>- <a href="#ema">Exponential Moving Average (EMA)</a>;<br /><br/>- <a href="#smma">Smoothed Moving Average (SMMA)</a>;<br /><br/>- <a href="#lwma">Linear Weighted Moving Average (LWMA)</a> 
<br clear="all" /><br/>
The standard Moving Averages using in technical analysis are:
<br />- Short-term MAs are: MA(5), MA(10), MA(14) and MA(20)
<br />- Mid-term MA is MA(50);
<br />- Long-term MAs are: MA(100), MA(200), MA(400) and MA(600)</div>
<br/>
<h2><a name="sma">Simple Moving Average (SMA)</a></h2>
<div class="textarea">This is the simlest from all moving averages. It shows the average value of data in a fixed time period.The number of values or data points used in the calculation is known as the "period". And when you connect each period's MA value, you create a moving average line.
</div>
<h3>Formula for calculating SMA :</h3>
 <div class="example"><center><img src="../images/content_education/MA/smaformula.png" alt="SMA Formula" /></center></div>
<div class="textarea">
 Let&#146;s look at a 9 days simple MA. For this example we will use close price for the last 9 days (you can experiment and calculate this MA with open, high, low or with any data you want). So lets say the last 9 days closing prices were:
 <br/>
 <br />
 <center><img src="../images/content_education/MA/smaex1.png" alt="SMA example" /></center>
 <br/><br/>
 SMA value for the last day will be:
 <br/><br/>
 <center><img src="../images/content_education/MA/smaex2.png" alt="SMA example 2" /></center>
 <br/><br/>
 On the next day (the 10-th day) the close price is 1.4740 so we will have this:
 <br/><br/>
 <center><img src="../images/content_education/MA/smaex3.png" alt="SMA example 3" /></center>
 <br/><br/.
 <center><img src="../images/content_education/MA/smaex4.png" alt="SMA example 4" /></center>
 <br/><br/>
 And so on. 
  <br/><br/>
 When you connect each day's SMA values, you create a simple moving average line.<div class="imgspace"><img class="imgcont" src="../images/content_education/MA/sma9.png" alt="sma9" title="SMA(9)" /></div> From this example we understood that the simple moving average follows the price but because of its nature the SMA will lag (delay) a little bit. SMA is great when we analyze long term charts Daily, Weekly and Monthly but for the short and midterm charts EMA is more suitable.
   
 </div>
 
<!-- vertical ad start --> 
                  <!-- square ad in content start  -->

<div class="adsquaread4"><div class="adscontent">
<!-- Begin Ads -->
<!-- End Ads-->
	</div></div><!-- square ad in content end  -->
<br clear="all" />
<h2><a name="ema">Exponential Moving Average</a></h2>
<div class="textarea">The difference between SMA and EMA is that the <strong>Exponential Moving Average</strong> gives more weight to more recent prices in an attempt to make it more adequate to current market conditions. <strong>EMA</strong> responds to changes faster than a SMA and also old data slowly fades away. That is why Exponential Moving Average is a better <a href="trend_range.php">trend</a> following tool than Simple Moving Average.</div>
<h3>Formula for calculating EMA :</h3>
<br/>
<center><img src="../images/content_education/MA/emaformula.png" alt="EMA Formula" /></center>
<div class="textarea">
When we start to calculate EMA we do not have EMA(yesterday).<div class="imgspace"><img class="imgcont" src="../images/content_education/MA/ema.gif" alt="ema(9)" title="EMA(9)" /></div> So instead of EMA(yesterday) only for the first point we will use SMA(simple moving average). For all remaining points in calculation we will use EMA(yesterday).</div>
<br clear="all" />
<h2><a name="smma">Smoothed Moving Average</a></h2>
 <div class="textarea">A Smoothed Moving Average is an Exponential Moving Average, only with a longer period applied. The Smoothed Moving Average gives the recent prices an equal weighting to the historic ones. In a Smoothed Moving Average, rather than subtracting the oldest value the previous smoothed average value is subtracted.</div> 
<h3>Formula for calculating EMA :</h3>
<div class="textarea">When we start calculating SMMA, first point will be calculated like Simple Moving Average (SMA)<br/><br/><center><img src="../images/content_education/MA/smmaformula1.png" alt="SMMA Formula 1" /></center><br/>
and for all other points we must use this formula:
<br/><br/><center><img src="../images/content_education/MA/smmaformula2.png" alt="SMMA Formula 2" /></center><br/>
<br/><div class="imgspace"><img class="imgcont" src="../images/content_education/MA/smma.gif" alt="smma(9)" title="SMMA(9)" /></div>
</div>
<br clear="all" />
<h2><a name="lwma">Linear Weight Moving Average</a></h2>
<div class="textarea">A Linear Weighted Moving Average (LWMA) is a modified Exponential Moving Average. The weight in LWMA is in linear progression (e.g.: 1, 2, 3&#133;). Weight for the first period is 1, for the second - 2 and so on. LWMA assigns more weight to the more recent prices Generally, this is better for longer term moving averages because it allocates more weight to current prices at the expense of older prices. Like EMA, LWMA was also created to overcome the lagging associated with simple moving average. While weighting is not as significant for a 5 day moving average, there is a substantial difference in a longer period, such as a 50 day moving average. 
.</div>
<h3>Formula for calculating LWMA :</h3>
<br/><br />
<center><img src="../images/content_education/MA/lwmaformula.png" alt="lwma" /></center>
<br/><br/><div class="imgspace"><img class="imgcont" src="../images/content_education/MA/lwma.gif" alt="lwma(9)" title="LWMA(9)" />
<br/><br />
 <div class="adsincontentbottom">
 <!--ads half banner-->
 </div>
<br/><br/>
</div>
            
  </div><!-- end #mainContent -->
 
  
  <!-- start #sidebar1 -->
  <div id="sidebar1">
  	<!-- menu start -->
		<ul id="hormenu">
			<li class="sidehome"><a href="../index.php"></a></li>
			<li class="sideactivetitle"><img src="../images/sidenav/education_active.png" alt="forex education" title="education" border="0px" /></li>
            <li class="itemactive">
				<ul id="activemenu">
					<li class="nonactiveitem" ><a href="what_is_forex.php"> What is forex </a></li>
					<li class="nonactiveitem"> <a href="market_participants.php">Market Participants</a></li>
                    <li class="nonactiveitem"> <a href="currency_transactions.php">Currency Transactions</a></li>
					<li class="nonactiveitem"><a href="economic_indicators.php">Economic Indicators</a></li>
					<li class="nonactiveitem"><a href="margin_spread_pip.php">Margin Spread and Pip</a></li>
					<li class="nonactiveitem"><a href="trend_range.php">Trend and Trading Range</a></li>
					<li class="nonactiveitem"><a href="trendline.php">Trendline</a></li>
					<li class="nonactiveitem"><a href="support_resistance.php">Support and Resistance</a></li>
					<li class="nonactiveitem"><a href="triangles.php">Triangles</a></li>
					<li class="nonactiveitem"><a href="flag_pennant_rectangle.php">Flag , Pennant and Rectangle</a></li>
					<li class="nonactiveitem"><a href="reversal_patterns.php">Reversal Patterns</a></li>
                    <li class="currentpage" ><img src="../images/sidenav/bull.png" alt="bull" border="0px" /><span id="currentlink">Moving Average</span></li>
                    <li class="spacer1"><img src="../images/sidenav/spacer1.png" alt="spacer" border="0px" /></li>

				</ul>
			</li>
			<li class="sidearticles"><a href="../forex_articles/positive_mathematical_expectation.php"></a></li>
            <li class="sidestrategies"><a href="../forex_strategies/forex_strategies.php"></a></li>
			<li class="sidetools"><a href="../forex_tools/forex_tools.php"></a></li>
			<li class="sidebooks"><a href="../forex_books.php"></a></li>
            <li class="sidecontact" ><a href="../contact.php"></a></li>
			<li class="sidesitemap"><a  href="../site_map.php"></a></li>

		</ul>
        <!-- menu end -->
  </div><!-- end #sidebar1 -->
  <div id="bottomcontent"><img src="../images/content_bottom_border.png" alt="border" border="0px" /></div> 
	<!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats --><br class="clearfloat" />
 <!-- Start Footer -->
  <?php include("../footer_folders.php"); ?>
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