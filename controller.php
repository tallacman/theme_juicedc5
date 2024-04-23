<?php
namespace Concrete\Package\ThemeJuicedc5;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die("Access Denied.");

class Controller extends Package
{

    protected $pkgHandle = 'theme_juicedc5';
    protected $appVersionRequired = '5.7.4.2';
    protected $pkgVersion = '0.9';
    protected $pkgAllowsFullContentSwap = false;

    public function getPackageName() {
        return t("Juiced C5 Theme");
    }

    public function getPackageDescription() {
        return t("Flexbox. Love.");
    }

    public function install() {
        $pkg = parent::install();
        Theme::add('juicedc5', $pkg);
    }


}
