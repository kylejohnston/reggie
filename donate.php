<!doctype html>
<html class="no-js" lang="en">
	<head>
		<?php include('includes/analytics.php'); ?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Contribute to Reggie's campaign for US Congress">
		<meta name="Keywords" content="Contribute, Donate, Reggie Marselus, Kansas, Congress, 3rd District, Johnson County">
		<meta name="Robots" content="index,follow" />
		<title>Contribute | Reggie for Congress - Kansas 3rd District</title>
		<?php include('includes/head.php'); ?>
	</head>
	<body>
		<div id="wrapper">
			<div id="page-nav">
				<?php include('includes/navbar.php'); ?>
			</div><!-- #page-nav -->

			<div class="row primary">
				<h1 class="large-12 columns page-title">Contribute &#8211; Support the Campaign</h1>
				<div class="medium-6 columns">
					<h3 class="title">Mail Your Contribution</h3>
					<p>Payable to &ldquo;Reggie for Congress&rdquo;<br>
					PO Box 14826<br>
					Lenexa, KS 66285</p>
				</div>
				<div class="medium-6 columns">
					<h3 class="title">Online Contributions</h3>
					<p>PayPal</p>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_donations">
						<input type="hidden" name="business" value="reggieforcongress@gmail.com">
						<input type="hidden" name="lc" value="US">
						<input type="hidden" name="item_name" value="Reggie for Congress">
						<input type="hidden" name="no_note" value="0">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
			</div>

			<?php include('includes/footer.php'); ?>
		</div><!-- wrapper -->

		<?php include('includes/foot.php'); ?>
	</body>
</html>
