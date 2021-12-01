<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>我的看板娘</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/public/css/live2d.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript"  src="/public/js/L2Dwidget.0.min.js"></script>
    <script type="text/javascript"  src="/public/js/L2Dwidget.min.js"></script>
</head>

<body>
<script>
    L2Dwidget.init({"display": {
            "superSample": 2,
            "width": 200,
            "height": 400,
            "position": "right",
            "hOffset": 0,
            "vOffset": 0
        }
    });
</script>
<!-- 这个script就写在html里面，千万不要把它加入引用文件，因为它需要等页面渲染完毕再执行，不然可爱的看板娘不会出来哦 -->
</body>
</html>