<?php
require 'src/php/config.php';
require_once 'src/php/utils/utils.index.php';

$currPage = getPageName();
doLoginCheck();

require_once 'src/html/static/index.header.php';

require 'src/html/actions/'.$currPage.'.php';

require_once 'src/html/static/index.footer.php';

?>