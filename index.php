<script type="module" src="https://unpkg.com/x-frame-bypass"></script>
<body onload="addCSS('')">
<style>
body {
  background-image: url("https://malwarewatch.org/images/backgrounds/background<?php echo rand(1,20);?>.jpg");
}

/*"*/

titletwo {
  color:white;
  position: absolute; top: 5px; right: 5px; text-align: right; padding-top:0%;
}
button{font-size:12px;}
</style><?php
$abc=$_SERVER['HTTP_X_FORWARDED_FOR'];
$abc=hash('sha512',$abc);
// $abc = substr($abc, 0, -1);  // returns "abcde"
?>
<titletwo><b><i><u>SdfOS</b></i></u><div id="time"> Time here. </div><div id="name"><input type="textbox" style="outline:none;border:none;6t" value="<?php echo $abc;?>" /> - userID</div></titletwo>
<script>
function updateTime() {
  const timeElapsed = Date.now();
  const today = new Date(timeElapsed);
  const today2= today.toUTCString();
  document.getElementById("time").innerHTML=today2; 
  setTimeout(updateTime, 1000); /* setting timer */
}
function sleep(milliseconds) {
  const date = Date.now();
  let currentDate = null;
  do {
    currentDate = Date.now();
  } while (currentDate - date < milliseconds);
}
updateTime()
</script>
<?php
// file_put_contents("xd",file_get_contents("xd")."\n".$_SERVER['HTTP_X_FORWARDED_FOR'])
?>
<?php

function add($appURL,$appName,$iconURL,$id) {
  $a="<script src=\"https:\/\/code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https:\/\/code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <style>
  #%id%draggable {outline:1px solid black;}
  iframe {outline:none;border:none;  resize: both;  overflow: auto;position:auto;}
  
  #%id%draggable {position:absolute;
  top: 0; /*[wherever you want it]*/
  left:50%; /*[wherever you want it]*/
    position: absolute !important;}
    img{display:inline-block;}
  </style>
    <script>
    $( function() {
      $( \"#%id%draggable\" ).draggable();
    } );
      $( function() {
      $( \"#%id%button\" ).draggable();
    } );
    function %id%show() {
      $( \"#%id%draggable\" ).show();
      document.getElementById('%id%button').style.backgroundColor = '#91c4ed';
    }
    function %id%hide() {
      $( \"#%id%draggable\" ).hide();
      document.getElementById('%id%button').style.backgroundColor = 'transparent';
      }
      %id%z=0
      function %id%so() {
        if (%id%z==0) {
              %id%z=1
              %id%show()
          } else {
            %id%z=0
            %id%hide()
          }
      }
    document.getElementById(\"%id%button\").style.top = Math.floor((Math.random() * 230) + 1) + \"px\";
    document.getElementById(\"%id%button\").style.left = Math.floor((Math.random() * 200) + 1) + \"px\";
  $(\"#%id%frame\").focusin(function() {
    document.getElementById('%id%focus').style.backgroundColor = '#91c4ed';
  });
  $(\"%id%frame\").focusout(function() {
    document.getElementById('%id%focus').style.backgroundColor = 'transparent';
  });
    </script>
    <button type=\"button\" id=\"%id%button\" onclick=\"%id%so()\" style=\"border:1px solid grey;;outline:none;background-color:transparent;color:white;position:fixed;\">%name%</button> 
    <br/>
  <div id=\"%id%draggable\" class=\"ui-widget-content\" style=\"width:50%;height:50%;\">
  <f style='color:white;'>[%name%]</f> <a onclick=\"%id%hide()\" style=\"color:white;\"> [x]</a> <focus id='%id%focus'> ‪ ‪</focus>
    <iframe src=\"%url%\" id=\"%id%frame\" style=\"width:100%;height:89%;\"> </iframe>
  <!--is=\"x-frame-bypass\" breaks it-->
  <br/>
  </div>
  <script>
  $( \"#%id%button \" ).draggable({cancel:false});
  %id%hide();
  </script>
  ";
  //%id %name %url
  $a=str_replace("%id%",$id,$a);
  $a=str_replace("%name%",$appName,$a);
  $a=str_replace("%url%",$appURL,$a);
  $a=str_replace("%img%",$iconURL,$a);
  echo $a;
}

add("about:blank","blank page","blnkpg","blnkpg");//
add("https://bing.com","bing","bing","bing");

// add("https://youtube.com","Youtube [not by me]","tb","tb");
?>

<style>*{opacity:90%;}body{opacity:100%;}</style>
