

//Calling functions navLink.
$navlink = NEW navLink();
$navlink ->_linkActive();

//Connecting external files
define('ROOT', dirname(__FILE__));
require_once (ROOT. '/components/linkNavigation.php');

//
