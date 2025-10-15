<?php

namespace App\Extensions;

use App\Pages\Product;
use App\Pages\Recipe;
use SilverStripe\Core\Extension;

class FileExtension extends Extension{
    private static $belongs_to = [

    ];

	private static $belongs_many_many = [

    ];

    public function onAfterWrite()
	{
		// always publish uploaded images, if they are not uploaded to an explicitly restricted folder.
		// this is because we otherwise sometimes have issues with many big protected files inside a tinymce editor.
		if (!$this->owner->hasRestrictedAccess() && !$this->owner->isPublished()) {
			$this->owner->publishRecursive();
		}
	}
}
