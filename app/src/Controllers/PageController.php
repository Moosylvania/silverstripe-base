<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;


    class PageController extends ContentController
    {
        private static $allowed_actions = [
        ];

		public function SiteEnvironment(){
            if (Director::isLive()) {
                return 'production';
            } elseif (Director::isTest()) {
                return 'staging';
            }

            return 'development';
        }
    }
}
