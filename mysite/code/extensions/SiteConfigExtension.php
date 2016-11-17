<?php

class SiteConfigExtension extends DataExtension {

	public static $has_one = array(
		'Logo' => 'Image'
	);

	public static $db = array(
		'SiteDescription' => "Text",
    'BrandColor' => 'Varchar(6)',
    'Mailto' => 'Varchar(100)',
	);

    public function updateCMSFields(FieldList $fields) {

		$fields->addFieldToTab("Root.Main", $SiteDescription = new TextareaField("SiteDescription", "Site Description"));
		$SiteDescription->setDescription('One or two sentences to be shown in search results and in the footer.');
		$fields->addFieldToTab("Root.Main", new UploadField("Logo", "Header logo"));
		$fields->addFieldToTab("Root.Main", new ColorField("BrandColor", "Brand Color"));

		$fields->addFieldToTab("Root.Main", new TextField("Mailto", "Address for emails to send to by default"));

    }
}