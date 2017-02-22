<?php

class SecurityStylesSiteConfig extends DataExtension {

	private static $db = array(
		"SecurityStylesBackgroundColor" => "Color",
		"SecurityStylesTextColor" => "Color",
		"SecurityStylesLinkColor" => "Color",
		"SecurityStylesLinkHoverColor" => "Color",
		"SecurityStylesLinkVisitedColor" => "Color",
		"SecurityStylesLinkActiveColor" => "Color",
		"SecurityStylesFieldBackgroundColor" => "Color",
		"SecurityStylesFieldTextColor" => "Color",
		"SecurityStylesButtonBackgroundColor" => "Color",
		"SecurityStylesButtonTextColor" => "Color",
		"SecurityStylesCustomCSS" => "Text"
	);

	private static $has_one = array(
		"SecurityStylesLogo" => "Image"
	);

	public function updateCmsFields(FieldList $fields){


		$fields->addFieldsToTab("Root.SecurityStyles", array(
			UploadField::create("SecurityStylesLogo"),
			ColorField::create("SecurityStylesBackgroundColor", "Background Color"),
			ColorField::create("SecurityStylesTextColor", "Text Color"),
			ColorField::create("SecurityStylesLinkColor", "Link Color"),
			ColorField::create("SecurityStylesLinkHoverColor", "Link Hover Color"),
			ColorField::create("SecurityStylesLinkVisitedColor", "Link Visited Color"),
			ColorField::create("SecurityStylesLinkActiveColor", "Link Active Color"),
			ColorField::create("SecurityStylesFieldBackgroundColor", "Field Background Color"),
			ColorField::create("SecurityStylesFieldTextColor", "Field Text Color"),
			ColorField::create("SecurityStylesButtonBackgroundColor", "Button Background Color"),
			ColorField::create("SecurityStylesButtonTextColor", "Button Text Color"),
			TextareaField::create("SecurityStylesCustomCSS", "Custom CSS")
		));

	}

	public function SecurityStylesCSS() {

		$css = "";

		if($this->owner->SecurityStylesLinkColor) {
			$css .= "a:link { color: #{$this->owner->SecurityStylesLinkColor} !important; }";
		}
		if($this->owner->SecurityStylesLinkHoverColor) {
			$css .= "a:hover { color: #{$this->owner->SecurityStylesLinkHoverColor} !important; }";
		}
		if($this->owner->SecurityStylesLinkVisitedColor) {
			$css .= "a:visited { color: #{$this->owner->SecurityStylesLinkVisitedColor} !important; }";
		}
		if($this->owner->SecurityStylesLinkActiveColor) {
			$css .= "a:active { color: #{$this->owner->SecurityStylesLinkActiveColor} !important; }";
		}
		if($this->owner->SecurityStylesFieldBackgroundColor || $this->owner->SecurityStylesFieldTextColor) {
			$css .= 'input[type="text"], input[type="password"], input[type="email"]  {';
				if($this->owner->SecurityStylesFieldBackgroundColor) {
					$css .= "background-color: #{$this->owner->SecurityStylesFieldBackgroundColor} !important;";
				}
				if($this->owner->SecurityStylesFieldTextColor) {
					$css .= "color: #{$this->owner->SecurityStylesFieldTextColor} !important;";
				}
			$css .= '}';
		}
		if($this->owner->SecurityStylesButtonBackgroundColor || $this->owner->SecurityStylesButtonTextColor) {
			$css .= 'input[type="submit"] {';
				if($this->owner->SecurityStylesButtonBackgroundColor) {
					$css .= "background-color: #{$this->owner->SecurityStylesButtonBackgroundColor} !important;";
				}
				if($this->owner->SecurityStylesButtonTextColor) {
					$css .= "color: #{$this->owner->SecurityStylesButtonTextColor} !important;";
				}
			$css .= '}';
		}

		if($this->owner->SecurityStylesCustomCSS) {
			$css .= $this->owner->SecurityStylesCustomCSS;
		}

		return $css;

	}

}
