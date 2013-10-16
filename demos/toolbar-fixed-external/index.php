<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>External fixed toolbars - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../js/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
	<script>
		$(function(){
			$( "[data-role='header'], [data-role='footer']" ).toolbar();
		});
	</script>
</head>
<body>
	<div data-role="header" data-position="fixed" data-theme="a">
			<a href="../toolbar/" data-rel="back" class="ui-btn ui-btn-left ui-alt-icon ui-nodisc-icon ui-corner-all ui-btn-icon-notext ui-icon-carat-l">Back</a>
		<h1>External fixed header</h1>
	</div><!-- /header -->

	<div data-role="page" class="jqm-demos">

		<div data-role="content" class="jqm-content">

			<h1>Fixed external toolbars</h1>

			<p>The header and footer on this page are outside of the page within the body. They have been set to position fixed.</p>

			<h2>Auto init</h2>

			<p>Because these toolbars are not within the page they will not auto initalize. You must call the toolbar plugin yourself.</p>

<pre><code>
$(function(){
	$( "[data-role='header'], [data-role='footer']" ).toolbar();
});
</code></pre>

			<h2>Theme</h2>

			<p>Since external toolbars are outside the page they don't inherit a theme from the page. This means you always have to set a theme for them. You can use the <code>data-theme</code> attribute for this or set the <code>theme</code> option when you call the plugin:

			<h2>True persistant toolbars</h2>

			<p>Because External toolbars are outside of the page they are not effected by transition and make truly persistant toolbars possible.</p>

			<p><a href="../toolbar-fixed-persistent/" data-ajax="false">Persistant toolbar demo</a></p>

		</div><!-- /content -->

	</div><!-- /page -->

	<div data-role="footer" data-position="fixed" data-theme="a">
		<h1>External fixed footer</h1>
	</div><!-- /footer -->

</body>
</html>
