<!doctype html>
<html class="no-js" lang="en">
	<head>
		<?php include('includes/analytics.php'); ?>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Donate to Reggie's campaign for US Congress">
		<meta name="Keywords" content="Donate, Reggie Marselus, Kansas, Congress, 3rd District, Johnson County">
		<meta name="Robots" content="index,follow" />
		<title>Donate | Reggie for Congress - Kansas 3rd District</title>
		<?php include('includes/head.php'); ?>
	</head>
	<body>
		<div id="wrapper">
			<div id="page-nav">
				<?php include('includes/navbar.php'); ?>
			</div><!-- #page-nav -->

			<div class="row primary">
				<h1 class="large-12 columns page-title">Donate &#8211; Support the Campaign</h1>
				<div class="medium-6 columns">
					<h3 class="title">Donate Online</h3>
					<div class="row">
						<div class="medium-6 columns">
							<h4>ActBlue</h4>
							<p><a href="https://secure.actblue.com/entity/fundraisers/37461" title="Contribute via ActBlue"><img src="img/contribute-button-150px-actblue.gif" width="150" height="80" alt="Contribute with ActBlue"></a></p>
						</div>
						<div class="medium-6 columns">
							<h4>PayPal</h4>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" >
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="BJ489WW6SU7RQ">
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
						</div>
					</div>
				</div>
				<div class="medium-6 columns">
					<h3 class="title">Mail Your Donation</h3>
					<p>Payable to &ldquo;Reggie for Congress&rdquo;<br>
					PO Box 14826<br>
					Lenexa, KS 66285</p>
				</div>
			</div>

			<?php include('includes/footer.php'); ?>
		</div><!-- wrapper -->

		<?php include('includes/foot.php'); ?>
	</body>
</html>
