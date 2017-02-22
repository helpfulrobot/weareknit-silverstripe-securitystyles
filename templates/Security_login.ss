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
</head>
<body class="$ClassName"<% if $SiteConfig.SecurityStylesBackgroundColor %> style="background-color: $SiteConfig.SecurityStylesBackgroundColor.CSSColor"<% end_if %>>

	<div class="security-outer-wrapper">
		<div class="security-inner-wrapper">
			<div class="security-inner"<% if $SiteConfig.SecurityStylesTextColor %> style="color: $SiteConfig.SecurityStylesTextColor.CSSColor"<% end_if %>>

				<% if $SiteConfig.SecurityStylesLogo %>
					<div class="security-logo">$SiteConfig.SecurityStylesLogo</div>
				<% end_if %>
				$Form

			</div>

		</div>
	</div>

</body>
</html>
