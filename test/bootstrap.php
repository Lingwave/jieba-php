<?php
ini_set('memory_limit', '1024M');

require_once dirname(dirname(__FILE__))."/src/vendor/multi-array/MultiArray.php";
require_once dirname(dirname(__FILE__))."/src/vendor/multi-array/Factory/MultiArrayFactory.php";
require_once dirname(dirname(__FILE__))."/src/class/Jieba.php";
require_once dirname(dirname(__FILE__))."/src/class/Finalseg.php";
use Fukuball\Jieba;
use Fukuball\Finalseg;
Jieba::init();
Finalseg::init();

function loader($class) {
    $file = $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('loader');
?>