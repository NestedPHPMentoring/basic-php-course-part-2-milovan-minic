<?php

/*
 * ### Task 7
 *
 * Write PHP script which will find all http href values in HTML and replace them to
 * https in all a (link) tags.
 * `<a href="http://www.someaddress.org">Not Secure Url</a>`
 *
 * Will be replaced with:
 * `<a href="https://www.someaddress.org">Not Secure Url</a>`
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
        <a href="http://www.someaddress.org">Not Secure Url</a>
        <a href="https://www.someaddress.org">Not Secure Url</a>
        <a href="htps://www.someaddress.org">Not Secure Url</a>
    </body>
</html>';

$pattern = '/(<a href="http:)/';
$replacement = '<a href="https:';

$result = preg_replace($pattern, $replacement, $html);

print_r($result);
