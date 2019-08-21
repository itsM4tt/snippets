<!-- The code reads the full url and produces links to all the parent directories within a single looking link.
for example on "website.com/a/b/c" clicking the "b" would take you to "https://website.com/a/b"

NOTES:
If your website still uses http:// not https:// it's recommended to alter the code accordingly (line 26). 
The menu-link styles are completely optional. 
-->


<html>
<style>
#menu-link {
    color:#00290c;
    text-decoration:none;
}
#menu-link:hover {
    color:#00290c;
    text-decoration:underline;
}
</style>

<?php
 $url_ext = $_SERVER['PHP_SELF'];
 $url_ext_parsed = explode("/",$url_ext);
 $url_base = $_SERVER['HTTP_HOST'];
 $link_url = "https://" . $url_base;
 $html_code = "<a id='menu-link' href='" . $link_url . "'>" . $url_base . "</a>";
 for ($i = 1; $i < sizeof($url_ext_parsed); $i++) {
    $link_url = $link_url . "/" . $url_ext_parsed{$i};
    $html_code = $html_code . "/" . "<a id='menu-link' href='" . $link_url . "'>" . $url_ext_parsed{$i} . "</a>";
}
?>
</html>
