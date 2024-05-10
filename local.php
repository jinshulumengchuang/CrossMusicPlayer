<?php
require 'head.php'
?>
<label class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-indigo"  for="upload"> Choose</label>
<a onclick="luanxu()" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-indigo">Random</a>
<a onclick="xunhuan()" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-indigo">Loop</a>
<a onclick="shunxu()" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-indigo">Sequential</a>
<input onchange="mytable()"  id="upload" type="file" style="display: none;"  multiple/>
<audio id='play' controls class='mdui-center' autoplay></audio>
<h3 id='current'></h3>
<table class="mdui-table-col-numeric mdui-table" id="table" ></table>
</div>
<script>
mode = 'shunxu';
function luanxu() {
    mode = 'luanxu';
}
function xunhuan() {
    mode = 'xunhuan';
}
function shunxu() {
    mode = 'shunxu';
}
function mytable() {
   table = document.getElementById("table");
   tablecontent = '<thead><tr><th>Filename</th><th>Play</th></tr></thead><tbody>';
   i = 0;
   while(document.getElementById("upload").files[i]) {
      file = document.getElementById("upload").files[i];
      tablecontent = tablecontent + '<tr><td>' + file.name +  '</td>' + '<td><a id="' + i + '"' + 'onclick="play(' + i + ') " class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-indigo">Play</a></td></tr>';
      table.innerHTML = tablecontent;
      i++;
      }
}
function play(count) {
   file = document.getElementById("upload").files[count];
   url = URL.createObjectURL(file);
   document.getElementById('current').innerHTML = 'Playing：' + document.getElementById("upload").files[count].name
   document.getElementById('play').src = url;
   document.getElementById("play").addEventListener('ended', function () {
       if(mode=='luanxu') {
       count = i
       sid = Math.floor(Math.random()*count + 1);
       playnext = document.getElementById(sid).onclick
       playnext();
       }
       if(mode=='shunxu') {
       id = count + 1
       playnext = document.getElementById(id).onclick
       playnext();
       }
       if(mode=='xunhuan') {
       playnext = document.getElementById(count).onclick
       playnext();
       }
   }, false);
}
</script>
</div>
<?php
tail();
?>
