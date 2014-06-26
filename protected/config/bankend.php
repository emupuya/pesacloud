<?php
return CMap::mergeArray(
    require(dirname(__FILE__).'/main.php'),
    array(
        // Put bank-end settings there
        // (for example, url rules).
    )
);