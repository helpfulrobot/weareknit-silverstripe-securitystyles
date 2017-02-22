<!DOCTYPE html>
<html lang="$ContentLocale">
<head>
	<% base_tag %>
	<title><% if MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="<% if MetaDescription %>$MetaDescription<% else %>$Content.FirstParagraph<% end_if %>">
	$MetaTags(false)
	<link rel="stylesheet" href="{$BaseURL}silverstripe-securitystyles/css/style.min.css" type="text/css" />
	<link rel="shortcut icon" href="{$BaseURL}favicon.ico" />
	<% if $SiteConfig.SecurityStylesCSS %>
		<style type="text/css">$SiteConfig.SecurityStylesCSS</style>
	<% end_if %>
</head>
<% include SecurityStylesBodyTagStart %>

	<div class="security-outer-wrapper">
		<div class="security-inner-wrapper">
			<% include SecurityStylesInnerTagStart %>
				<% if $SiteConfig.SecurityStylesLogo %>
					<div class="security-logo">$SiteConfig.SecurityStylesLogo</div>
				<% end_if %>

				$Content
			</div>
		</div>
	</div>

</body>
</html>
