<?php

  # $_SERVER SUPERGLOBAL
  // http://php.net/manual/en/reserved.variables.server.php

  // Create Server Array: Server Computer info
  $server = [
    'Server Software' => $_SERVER['SERVER_SOFTWARE'], // Apache/2.2.29 (Unix) mod_wsgi/3.5 Python/2.7.10 PHP/5.6.10 mod_ssl/2.2.29 OpenSSL/0.9.8zh DAV/2 mod_fastcgi/2.4.6 mod_perl/2.0.9 Perl/v5.22.0
    'Host server name' => $_SERVER['SERVER_NAME'], // localhost
    'Host Header(port)' => $_SERVER['HTTP_HOST'], // localhost:8888
    'Document Root' => $_SERVER['DOCUMENT_ROOT'], // /Applications/MAMP/htdocs
    'Current Page' => $_SERVER['PHP_SELF'], // /study/php/Traversy/08-superglobal-$_SERVER/index.php
    'Script Name' => $_SERVER['SCRIPT_NAME'], // /study/php/Traversy/08-superglobal-$_SERVER/index.php
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME'], // /Applications/MAMP/htdocs/study/php/Traversy/08-superglobal-$_SERVER/index.php
  ];

  // Create Client Array: User Computer info
  $client = [
    'Client Computer' => $_SERVER['HTTP_USER_AGENT'], // Client Computer: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36
    'Client IP Address' => $_SERVER['REMOTE_ADDR'],// ::1 เครื่องตัวเองเครื่อนอื่นจะโชว์
    'Client Port' => $_SERVER['REMOTE_PORT'], // 56391
  ];
