<?php
/**
 * Created by www.hidove.cn.
 * User: YuSheng
 * Date: 2018/7/11
 * Time: 11:59
 * 余生云提供高速免备案虚拟主机 yun.hidove.cn  */
//由于直播源不支持HTTPS暂时屏蔽直播页面HTTPS
if ($_SERVER['SERVER_PORT'] == "443") {
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
}
require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
require $_SERVER['DOCUMENT_ROOT'] . '/system/app.php';
require $_SERVER['DOCUMENT_ROOT'] . "/template/" . $template . "/zhibo.php";
?>