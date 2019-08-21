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
