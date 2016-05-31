<?php

/*
 * ### Task 8
 *
 * Use same script from `task 7` and add some extra juice. Each a tag content
 * append with string 'Link is changed - '.
 *
 * Also add class `modefied` to a tag.
 */

$html =
    '<html>
    <head>
        <title>Title</title>
    </head>
    <body>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="http://www.someaddress.org">Not Secure Url</a><br />
        <a href="https://www.someaddress.org">Not Secure Url</a><br />
        <a href="htps://www.someaddress.org">Not Secure Url</a><br />
    </body>
</html>';

$pattern = '/(<a href="http:)/';
$replacement = 'Link is changed - <a href="https:';

$result = preg_replace($pattern, $replacement, $html);

print_r($result);
