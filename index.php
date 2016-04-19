<!DOCTYPE HTML>
<html>
	<head>
		<title>PocketMine-MP 插件開發網 - REH.TW</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<meta name="keywords" content="PocketMine-MP 插件開發網,phar 轉 zip,zip 轉 phar,反編譯phar,編譯phar,解編phar,[REH]改革旋風 - REH.TW,REH.TW,旋風之音,改革旋風" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
		<meta name="og:description" content="輕鬆解包打包phar插件"/>
		<meta property="og:title" content="PocketMine-MP"/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://pm.reh.tw"/>
		<meta property="og:image" content="http://www.reh.tw/image/logo.png"/>
		<meta property="og:site_name" content="PocketMine-MP - widget open source"/>
		
	</head>
	<body>
		<!-- Header -->
			<section id="header">
				<div class="inner">
					<span class="icon major fa-cloud"></span>
					<h1>PocketMine</h1>
					<p>This website is developed</p>
					<p>by <a href="http://UltimateMcraft.Ml" target="_blank">UltimateMcraft</a> 開發的 <a href="http://UltimateMcraft.Ml/" target="_blank">http://UltimateMcraft.Ml/</a> 修改。</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="main style1">
				<div class="container">
					<div class="row 150%">
						<div class="6u 12u$(medium)">
							<header class="major">
								<h2>phar packer</h2>
							</header>
							<p>
							<h3>Instruction Manual：</h3>
							    <ol>
							        <li>Of course, first write your plugin</li>
							        <li>To organise your files into the correct structure</li>
							        <li>Making a zip compress file and going into your files</li>
							        <li>Finally, start uploading files (note that after the completion of generating click the blue here to download)</li>
							    </ol>
								<form method="post" action="http://pmt.mcpe.me/phar-result.php" target="_blank" enctype="multipart/form-data">
								    <p><input type="file" name="file"></p>
							</p>
						</div>
						<div class="6u$ 12u$(medium) important(medium)">
							<p>Special (keep the default value, unless special circumstances):							<input type="text" name="stub" value="&lt;?php __HALT_COMPILER();" size="32">		</p>
							<p>  <br>
							<div class="4u 12u$(small)">
							    <input type="checkbox" id="tune_top_namespace_optimization" name="tune_top_namespace_optimization">
								<label for="tune_top_namespace_optimization">
							    通過添加一個
							    <code>\</code> 前綴，以表明它是一個頂部空間參考優化函數調用和恆定參考。<br>
								</label>
						    </div>
							<div class="4u 12u$(small)">
							    <input type="checkbox" id="tune_obfuscation" name="tune_obfuscation"> <label for="tune_obfuscation">加密代碼</label>
							</div>
							</p>
							<p><font color="#8b0000">Warning: The use
				use any stripe can tune your code <em>in addition to</em>all the comments PHP documentation comments or line comment.							</font></p>
							<p>
							Check the following too: <br>
							<div class="4u 12u$(small)">
							    <input type="checkbox" id="inspection_classpath" name="inspection_classpath"> <label for="inspection_classpath">Check the class path</label>
							</div>
							<div class="4u 12u$(small)">
							    <input type="checkbox" id="inspection_bad_practice" name="inspection_bad_practice"> <label for="inspection_bad_practice">Scan bad habits</label>
							</div>
							<div class="4u 12u$(small)">
							    <input type="checkbox" id="inspection_lint" name="inspection_lint"> <label for="inspection_lint">syntax error lint scan</label>
							</div>
							</p>
							<p><input type="submit" value="bale"></p>
						</form>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="main style2">
				<div class="container">
					<div class="row 150%">
						<div class="6u$ 12u$(medium)">
							<header class="major">
								<h2>phar unpack</h2>
							</header>
							<p>
							    <form method="post" action="http://pmt.mcpe.me/unpharResult.php" target="_blank" enctype="multipart/form-data">
							        <p>Upload phar file here：<br><input type="file" name="file" accept=".phar"></p>
							        <p><input type="submit" value="Unpacked"></p>
							    </form>
							</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="main style1 special">
				<div class="container">
					<header class="major">
						<h2><code>var_dump</code> Debugging output↓</h2>
					</header>
					<p>
					    <form action="http://pmt.mcpe.me/varDumpResult.php" target="_blank" method="post"><input type="submit">&nbsp;Please paste your <code>var_dump</code> output below and click the submit button.<br>
					        <b>Warning: </b>Make sure you do not convert from the end line as: <code>\r\n</code> to <code>\n/\r</code> Or start,such as： <code>\n/\r</code> to <code>\r\n</code>!<br>
					        <textarea name="jump" rows="30" cols="150"></textarea>
					    </form>
					</p>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="main style2 special">
				<div class="container">
					<header class="major">
						<h2>Disclaimer</h2>
					</header>
					<p>
<p> The service is provided free of charge, and can not guarantee always available.</p>
<p>This site（http://UltimateMcraft.Ml) Is in no way affiliated with PocketMine-MP（http://pocketmine.net），The team developing PocketMine or Mojang, or the team developingMinecraft：PE，by Mojang </p>
<p></p>
				    </p>
					<ul class="actions uniform">
						<li><a href="http://www.UltimateMcraft.ml" class="button" PocketMine-MP-Plugin-Development-webteMcraft.ml official site</a></li>
			<li><a href="https://github.com/UltimateMcraft/pmt-pd-tools" class="button" target="_blank">GitHub</a></li>
					</ul>
				</div>
			</section>

		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="https://twitter.com/UltimateMcraft" class="icon alt fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/reh.tw.sw" class="icon alt fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
					<li><a href="https://github.com/UltimateMcraft/pmt-pd-tools" class="icon alt fa-github" target="_blank"><span class="label">GitHub</span></a></li>
					<li><a href="mailto:team@reh.tw" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li><?php include("http://www.reh.tw/php/copyright.php"); ?> <a href="http://UltimateMcraft.Ml" target="_blank">UltimateMcraft.ml</a></li><li>All rights reserved.</li><br>
					Website by <a href="http://Github.com/UltimateMcraft" target="_blank">UltimateMcraft</a> at <a href="http://UltimateMcraft.ml/" target="_blank">http://UltimateMcraft.Ml/</a> 
				</ul>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			
<!-- float.php -->
<?php include("../php/float.php"); ?>

<!-- float.php -->

<!-- notice.php -->
<?php include("../php/notice.php"); ?>

<!-- notice.php -->

	</body>
</html>
