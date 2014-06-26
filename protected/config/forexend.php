<?php
return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        // Put forex-end settings there
        // (for example, url rules).
    )
);