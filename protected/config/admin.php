<?php
return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        // Put admin-end settings there
        // (for example, url rules).
    )
);