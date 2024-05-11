<?php
require 'head.php';
?>
<audio id='play' controls class='mdui-center' autoplay></audio>
<h3 id='current'></h3>
<h3 id='mode'></h3>
<a onclick="luanxu()" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-indigo">Random</a>
<a onclick="xunhuan()" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-indigo">Loop</a>
<a onclick="shunxu()" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-indigo">Sequential</a>
<table id="表格" border="1" class="mdui-table-col-numeric mdui-table">
  <thead>
    <tr>
      <th>FileName</th>
      <th>Play</th>
    </tr>
  </thead>
<?php
$i=0;
$datadir=opendir('music/');
while (($dataname = readdir($datadir)) !== false) {
  if ($dataname !=='.' && $dataname !=='..'  && $dataname !=='.htaccess'){
    echo <<<EOF
    <tbody >
    <tr>
      <td>$dataname</td>
      <td><a id="$i" onclick="play('$dataname', $i)" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-indigo">Play</a></td>
    </tr>
EOF
     ;
     $i=$i + 1;
  }
}
echo <<<EOF
<p id=count style='display: none'>$i<p>
EOF
;
?>
</tbody>
</table>
<script>
mode = 'shunxu';
document.getElementById("mode").innerHTML='Mode：Sequential'
function luanxu() {
    mode = 'luanxu';
    document.getElementById("mode").innerHTML='Mode：Random';
}
function xunhuan() {
    mode = 'xunhuan';
    document.getElementById("mode").innerHTML='Mode：Loop'
}
function shunxu() {
    mode = 'shunxu';
    document.getElementById("mode").innerHTML='Mode：Sequential'
}
function play(name, id) {
   document.getElementById('play').src = 'music/' + name;
  document.getElementById('current').innerHTML = 'Playing：' + name;
ids=id
}
document.getElementById("play").addEventListener('ended', function () {
       if(mode=='luanxu') {
       count = document.getElementById('count').innerHTML
       sid = Math.floor(Math.random()*count + 1);
       playnext = document.getElementById(sid).onclick
       playnext();
       }
       if(mode=='shunxu') {
       id = ids + 1
       playnext = document.getElementById(id).onclick
       playnext();
       }
       if(mode=='xunhuan') {
       playnext = document.getElementById(ids).onclick
       playnext();
       }
   }, false);
</script>
<?php
tail();
?>
