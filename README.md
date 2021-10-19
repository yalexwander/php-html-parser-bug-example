This is example on how Parser miss parts of document depending on meta tag contents.

To reproduce:

    composer.phar update
    php test.php

To see difference in correct and incorrect documents:

    diff testFails.html testPass.html
