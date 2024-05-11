<?php
echo <<<EOF
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mdui/css/mdui.min.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<title>CrossMusicPlayer</title>
<div class="mdui-appbar  mdui-appbar-fixed">
<div class="mdui-toolbar mdui-color-indigo">
<a class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#left-drawer'}" ><i class="mdui-icon material-icons">menu</i></a>
<a  class="mdui-typo-title">CrossMusicPlayer</a>
</div>
</head>
<body class="mdui-appbar-with-toolbar mdui-drawer-body-right">

</div>
EOF
;
echo <<<EOF


<div class="mdui-drawer mdui-drawer-close mdui-text-color-[mdui-color-black]" id="left-drawer">
<a href="hmp.html" class="mdui-list-item mdui-ripple">Local</a>
</div>
</div>
<div class="mdui-container">
EOF
;
function tail()
{
echo <<<EOF
</div>
<script src="mdui/js/mdui.min.js"></script>
</body>
</html>
EOF

;
}
?>
