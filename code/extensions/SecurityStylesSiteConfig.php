<?php

class SecurityStylesSiteConfig extends DataExtension {

	private static $db = array(
		"SecurityStylesBackgroundColor" => "Color"
	);

	private static $has_one = array(
		"SecurityStylesLogo" => "Image"
	);

	public function updateCmsFields(FieldList $fields){


		$fields->addFieldsToTab("Root.SecurityStyles", array(
			UploadField::create("SecurityStylesLogo"),
			ColorField::create('SecurityStylesBackgroundColor', 'Background Color')
		));

	}

}
