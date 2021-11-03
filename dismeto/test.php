<?php
require_once __DIR__ . '/_scripts.php';

if(isset($_GET['op']))
    $dismeto->test($_GET['op']);
else
    $dismeto->test();

/*

URL: [domain]/dismeto/test.php?op=...

# There are already such tests :

- translateSimple
- translateData
- createEmptyDocument
- createFullDocument
- deleteDocument

*/