<?php
?>
<!DOCTYPE html>
<html lang="en">
<!-- CSS BLOCK BEGIN -->

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <title>File con mèo</title></head>
   <body>
   <center>
   <font face="Courier New" size="16"><b>
   <script>
 
farbbibliothek = new Array();
 
farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100");
 
farbbibliothek[1] = new Array("#00FF00","black","#00FF00","#00FF00");
 
farbbibliothek[2] = new Array("#00FF00","#FF0000","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00","#00FF00");
 
farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040");
 
farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","black","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000");
 
farbbibliothek[5] = new Array("black","black","black","white","white","white");
 
farbbibliothek[6] = new Array("#0000FF","#FFFF00");
 
farben = farbbibliothek[4];
 
function farbschrift()
 
{
 
for(var i=0 ; i<Buchstabe.length; i++)
 
{
 
document.all["a"+i].style.color=farben[i];
 
}
 
farbverlauf();
 
}
 
function string2array(text)
 
{
 
Buchstabe = new Array();
 
while(farben.length<text.length)
 
{
 
farben = farben.concat(farben);
 
}
 
k=0;
 
while(k<=text.length)
 
{
 
Buchstabe[k] = text.charAt(k);
 
k++;
 
}
 
}
 
function divserzeugen()
 
{
 
for(var i=0 ; i<Buchstabe.length; i++)
 
{
 
document.write("<span id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span>");
 
}
 
farbschrift();
 
}
 
var a=1;
 
function farbverlauf()
 
{
 
for(var i=0 ; i<farben.length; i++)
 
{
 
farben[i-1]=farben[i];
 
}
 
farben[farben.length-1]=farben[-1];
 
 
 
setTimeout("farbschrift()",30);
 
}
 
// Zu Demonstrationszwecken**
 
var farbsatz=1;
 
function farbtauscher()
 
{
 
farben = farbbibliothek[farbsatz];
 
while(farben.length<text.length)
 
{
 
farben = farben.concat(farben);
 
}
 
farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001));
 
}
 
setInterval("farbtauscher()",5000);
 
text= "..::...::.."; //h
 
string2array(text);
 
divserzeugen();
 
//document.write(text);</script></b>
</font>
<style type="text/css">

BODY {
    SCROLLBAR-FACE-COLOR: #000000;
    SCROLLBAR-HIGHLIGHT-COLOR: #000000;
    SCROLLBAR-SHADOW-COLOR: #000000;
    SCROLLBAR-BASE-COLOR: #000000;
    background: #000000;
}

H1 {
	color: #00FF00;
	font-family: -moz-fixed;
}

#TEXTBOX {
	width: 500px;
	height: 257px;
	border: 1px solid #000;
	background-color : 1px solid transparent;
	padding: 40px;
	font-family: -moz-fixed;
	font-size: 16px;
	box-shadow: 0px 0px 5px 1px #00FF00;
}

.MATRIX-LEFT
{
    float: left;
    overflow: hidden;
    height: 1000px;
    width: 280px;
	background-image: url('http://puu.sh/6IN8U.gif');
	background-repeat: repeat-y;
}

.MATRIX-RIGHT
{
    float: right;
    overflow: hidden;
    height: 1000px;
    width: 280px;
	background-image: url('http://puu.sh/6IN8U.gif');
	background-repeat: repeat-y;
}

.TEXT {
	color: #00FF00;
	font-family: -moz-fixed;
	font-size: 16px;
}

.TYPEWRITER {
	color: #00FF00;
	font-family: -moz-fixed;
	font-size: 16px;
	display: none
}

.SHOW {
	z-index: 2;
}

.HIDE {
   z-index: 1;
}
</style>
<!-- CSS BLOCK END -->


<!-- JAVASCRIPT BLOCK BEGIN -->
<script type="text/javascript">
    var message = "Ước được A+ DevOps";
    function clickIE4(){
    if (event.button==2){
    alert(message);
    return false;
    }
    }

    function clickNS4(e){
    if (document.layers||document.getElementById&&!document.all){
    if (e.which==2||e.which==3){
    alert(message);
    return false;
    }
    }
    }

    if (document.layers){
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown=clickNS4;
    }
    else if (document.all&&!document.getElementById){
    document.onmousedown=clickIE4;
    }

    document.oncontextmenu=new Function("alert(message);return false")
</script>


<!-- JAVASCRIPT BLOCK END -->
<script type="text/javascript">
</script>
<script type="text/javascript"> 
    function disableselect(e) { 
        return false 
    } 
 
    function reEnable() { 
        return true 
    } 
    //if IE4+ 
    document.onselectstart = new Function("return false") 
    //if NS6 
    if (window.sidebar) { 
        document.onmousedown = disableselect 
        document.onclick = reEnable 
    } 
</script>

<script type="text/javascript">
function remove (){
 document.getElementById("xbox").innerHTML=" ";
}
setInterval(function(){remove();}, 5000);
</script>
<body oncontextmenu="return false;"> 
<script language="JavaScript">
function tb5_makeArray(n){ this.length = n; return this.length;
}
tb5_messages = new tb5_makeArray(3);
tb5_messages[0] = "..:[ Cat ]:..";
tb5_messages[1] = "..:[ -=MeoMeo=- ]:..";
tb5_rptType = 'infinite';
tb5_rptNbr = 20;
tb5_speed = 1;
tb5_delay = 2000;
var tb5_counter=2;
var tb5_currMsg=0;
var tb5_stsmsg="test";
function tb5_shuffle(arr){
var k;
for (i=0; i<arr.length; i++){ k = Math.round(Math.random() * (arr.length - i - 1)) + i; temp = arr[i];arr[i]=arr[k];arr[k]=temp;
}
return arr;
}
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){ tb5_arr[i] = i; tb5_sts[i] = "_";
}
tb5_arr = tb5_shuffle(tb5_arr);
function tb5_init(n){
var k;
if (n == tb5_arr.length){ if (tb5_currMsg == tb5_messages.length-1){ if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){ clearTimeout(tb5_timerID); return; } tb5_counter++; tb5_currMsg=0; } else{ tb5_currMsg++; } n=0; tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length); tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length); for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){ tb5_arr[i] = i; tb5_sts[i] = "_"; } tb5_arr = tb5_shuffle(tb5_arr); tb5_sp=tb5_delay;
}
else{ tb5_sp=tb5_speed; k = tb5_arr[n]; tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k); tb5_stsmsg = ""; for (var i=0; i<tb5_sts.length; i++) tb5_stsmsg += tb5_sts[i]; document.title = tb5_stsmsg; n++; } tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp);
}
function tb5_randomizetitle(){ tb5_init(0);
}
// tb5_randomizetitle();
//   var txt = " A L T V    ";
//         var espera = 200;
//         var refresco = null;
//         function rotulo_title() {
//             document.title = txt;
//             txt = txt.substring(1, txt.length) + txt.charAt(0);
//             refresco = setTimeout("rotulo_title()", espera);         // random text rendered to title
//         }
//         rotulo_title();
    </script>
<object width="0" height="0">  <param name="movie" value="http://www.nhaccuatui.com/mh/auto/xFre2rAcLCTk" />  <param name="quality" value="high" />  <param name="wmode" value="transparent" />  <param name="allowscriptaccess" value="always" /> <param name="allowfullscreen" value="true"/> <param name="flashvars" value="autostart=true" />  <embed src="http://www.nhaccuatui.com/mh/auto/xFre2rAcLCTk" flashvars="target=blank&autostart=true" allowscriptaccess="always" allowfullscreen="true" quality="high" wmode="transparent" type="application/x-shockwave-flash" width="1" height="1"></embed></object>
<body>
<!-- JAVASCRIPT BLOCK BEGIN -->
<script type="text/javascript">
			new TypingText(document.getElementById("M1"));
			new TypingText(document.getElementById("M2"));
			new TypingText(document.getElementById("M3"));
			new TypingText(document.getElementById("M4"));
			new TypingText(document.getElementById("M5"));
			new TypingText(document.getElementById("M6"));
			new TypingText(document.getElementById("M7"));
			new TypingText(document.getElementById("M8"));
			setTimeout(function(){document.getElementById("M1").style.display = 'inline';TypingText.all[0].run();},0);
			setTimeout(function(){document.getElementById("M2").style.display = 'inline';TypingText.all[1].run();},5000);
			setTimeout(function(){document.getElementById("M3").style.display = 'inline';TypingText.all[2].run();},10000);
			setTimeout(function(){document.getElementById("M4").style.display = 'inline';TypingText.all[3].run();},15000);
			setTimeout(function(){document.getElementById("M5").style.display = 'inline';TypingText.all[4].run();},20000);
			setTimeout(function(){document.getElementById("M6").style.display = 'inline';TypingText.all[5].run();},22000);
			setTimeout(function(){document.getElementById("M7").style.display = 'inline';TypingText.all[6].run();},22000);
			setTimeout(function(){document.getElementById("M8").style.display = 'inline';TypingText.all[7].run();},25000);
		</script>
<!-- JAVASCRIPT BLOCK END -->

 

<style type='text/css'>body,td,th{font-family:consolas;font-size:18px;color:#167c11;}body{background-color:black;overflow:hidden;overflow-y:scroll;}#xbox{width:100%;position:fixed;bottom:0;left:0;height:70px;padding:5px;text-align:center;}#logo{top:0;float:right;z-index:1;opacity:0.9;}a:link{color:#00FF00;text-decoration:none;}a:active{color:#00FF00;text-decoration:none;}a:visited{color:#00FF00;text-decoration:none;}a:hover{color:#167c11;text-decoration:none;}</style>
 
<script type="text/javascript">
</script>
<html></head><body background="">





</body><script>
<script type="text/javascript">
function $i(id) { return document.getElementById(id); }
function $r(parent,child) { (document.getElementById(parent)).removeChild(document.getElementById(child)); }
function $t(name) { return document.getElementsByTagName(name); }
function $c(code) { return String.fromCharCode(code); }
function $h(value) { return ('0'+Math.max(0,Math.min(255,Math.round(value))).toString(16)).slice(-2); }
function _i(id,value) { $t('div')[id].innerHTML+=value; }
function _h(value) { return !hires?value:Math.round(value/2); }

function get_screen_size()
	{
	var w=document.documentElement.clientWidth;
	var h=document.documentElement.clientHeight;
	return Array(w,h);
	}

var url=document.location.href;

var flag=true;
var test=true;
var n=parseInt((url.indexOf('n=')!=-1)?url.substring(url.indexOf('n=')+2,((url.substring(url.indexOf('n=')+2,url.length)).indexOf('&')!=-1)?url.indexOf('n=')+2+(url.substring(url.indexOf('n=')+2,url.length)).indexOf('&'):url.length):512);
var w=0;
var h=0;
var x=0;
var y=0;
var z=0;
var star_color_ratio=0;
var star_x_save,star_y_save;
var star_ratio=256;
var star_speed=5;
var star_speed_save=0;
var star=new Array(n);
var color;
var opacity=0.1;

var cursor_x=0;
var cursor_y=0;
var mouse_x=0;
var mouse_y=0;

var canvas_x=0;
var canvas_y=0;
var canvas_w=0;
var canvas_h=0;
var context;

var key;
var ctrl;

var timeout;
var fps=0;

function init()
	{
	var a=0;
	for(var i=0;i<n;i++)
		{
		star[i]=new Array(5);
		star[i][0]=Math.random()*w*2-x*2;
		star[i][1]=Math.random()*h*2-y*2;
		star[i][2]=Math.round(Math.random()*z);
		star[i][3]=0;
		star[i][4]=0;
		}
	var starfield=$i('starfield');
	starfield.style.position='absolute';
	starfield.width=w;
	starfield.height=h;
	context=starfield.getContext('2d');
	//context.lineCap='round';
	context.fillStyle='rgb(0,0,0)';
	context.strokeStyle='rgb(255,255,255)';
	
	}

function anim()
	{
	mouse_x=cursor_x-x;
	mouse_y=cursor_y-y;
	context.fillRect(0,0,w,h);
	for(var i=0;i<n;i++)
		{
		test=true;
		star_x_save=star[i][3];
		star_y_save=star[i][4];
		star[i][0]+=mouse_x>>4; if(star[i][0]>x<<1) { star[i][0]-=w<<1; test=false; } if(star[i][0]<-x<<1) { star[i][0]+=w<<1; test=false; }
		star[i][1]+=mouse_y>>4; if(star[i][1]>y<<1) { star[i][1]-=h<<1; test=false; } if(star[i][1]<-y<<1) { star[i][1]+=h<<1; test=false; }
		star[i][2]-=star_speed; if(star[i][2]>z) { star[i][2]-=z; test=false; } if(star[i][2]<0) { star[i][2]+=z; test=false; }
		star[i][3]=x+(star[i][0]/star[i][2])*star_ratio;
		star[i][4]=y+(star[i][1]/star[i][2])*star_ratio;
		if(star_x_save>0&&star_x_save<w&&star_y_save>0&&star_y_save<h&&test)
			{
			context.lineWidth=(1-star_color_ratio*star[i][2])*2;
			context.beginPath();
			context.moveTo(star_x_save,star_y_save);
			context.lineTo(star[i][3],star[i][4]);
			context.stroke();
			context.closePath();
			}
		}
	timeout=setTimeout('anim()',fps);
	}

function move(evt)
	{
	evt=evt||event;
	cursor_x=evt.pageX-canvas_x;
	cursor_y=evt.pageY-canvas_y;
	}

function key_manager(evt)
	{
	evt=evt||event;
	key=evt.which||evt.keyCode;
	//ctrl=evt.ctrlKey;
	switch(key)
		{
		case 27:
			flag=flag?false:true;
			if(flag)
				{
				timeout=setTimeout('anim()',fps);
				}
			else
				{
				clearTimeout(timeout);
				}
			break;
		case 32:
			star_speed_save=(star_speed!=0)?star_speed:star_speed_save;
			star_speed=(star_speed!=0)?0:star_speed_save;
			break;
		case 13:
			context.fillStyle='rgba(0,0,0,'+opacity+')';
			break;
		}
	top.status='key='+((key<100)?'0':'')+((key<10)?'0':'')+key;
	}

function release()
	{
	switch(key)
		{
		case 13:
			context.fillStyle='rgb(0,0,0)';
			break;
		}
	}

function mouse_wheel(evt)
	{
	evt=evt||event;
	var delta=0;
	if(evt.wheelDelta)
		{
		delta=evt.wheelDelta/120;
		}
	else if(evt.detail)
		{
		delta=-evt.detail/3;
		}
	star_speed+=(delta>=0)?-0.2:0.2;
	if(evt.preventDefault) evt.preventDefault();
	}

function start()
	{
	resize();
	anim();
	}

function resize()
	{
	w=parseInt((url.indexOf('w=')!=-1)?url.substring(url.indexOf('w=')+2,((url.substring(url.indexOf('w=')+2,url.length)).indexOf('&')!=-1)?url.indexOf('w=')+2+(url.substring(url.indexOf('w=')+2,url.length)).indexOf('&'):url.length):get_screen_size()[0]);
	h=parseInt((url.indexOf('h=')!=-1)?url.substring(url.indexOf('h=')+2,((url.substring(url.indexOf('h=')+2,url.length)).indexOf('&')!=-1)?url.indexOf('h=')+2+(url.substring(url.indexOf('h=')+2,url.length)).indexOf('&'):url.length):get_screen_size()[1]);
	x=Math.round(w/2);
	y=Math.round(h/2);
	z=(w+h)/2;
	star_color_ratio=1/z;
	cursor_x=x;
	cursor_y=y;
	init();
	}

document.onmousemove=move;
document.onkeypress=key_manager;
document.onkeyup=release;
document.onmousewheel=mouse_wheel; if(window.addEventListener) window.addEventListener('DOMMouseScroll',mouse_wheel,false);

<script type="text/javascript">
      // ------------------------------------------------------------------------------------
      // Header text start..
      // ------------------------------------------------------------------------------------
      var theinHTML;
      var thelessstr;
      var ascSt=22; 
      var ascEnd=126;
      var numoflines = 28;
      var lines = new Array();
      var intervalID = new Array();
      var subIntervalID = new Array();
      var subIntervalID2 = new Array();
      var scH = screen.height-220;
      var scW = screen.width-50;
      window.onload = createlines;
      // -------------------------------------------------------------------------------------
      // Convert decimal to hex (for the colour)
      var hD="0123456789ABCDEF";
      function d2h(d) 
      {
         var h = hD.substr(d&15,1);
         while(d > 15) 
         { 
            d >>= 4; 
            h = hD.substr(d&15,1)+h;
         }
         return h;
      }
      // -------------------------------------------------------------------------------------
      // The line object      
      function line(length, maxlength, chars, speed, x)
      {
         this.length = length;
         this.maxlength = maxlength;
         this.chars = chars;
         this.speed = speed;
         this.x = x;
      }    
      // -------------------------------------------------------------------------------------
      // Creates the lines
      function createlines()
      {            
      // create the lines as objects as defined above with length, characters, speed, x-value
         for(var eachline = 0; eachline < numoflines; eachline++)
         {
            lines[eachline] = new line(0, Math.round(Math.random()*15+5), String.fromCharCode(Math.round(Math.random()*(ascEnd-ascSt)+ascSt)), Math.round(Math.random()*400+100), eachline*45);
         }   
         // write the lines  
         for(var writelines = 0; writelines < numoflines; writelines++)
         {
            var newline = document.createElement("div");
            newline.id = "char" + writelines;
            newline.style.position = "absolute";
            newline.style.top = "5px";
            newline.style.left = lines[writelines].x + "px";        
            var firstchar = document.createElement("div");
            var newcolor = d2h(Math.round(1/(lines[writelines].maxlength+1)*255));
            if(newcolor.length == 1)
               newcolor = "0" + newcolor;
            firstchar.style.color = "#00"+newcolor+"00"
            firstchar.innerHTML = lines[writelines].chars
            newline.appendChild(firstchar);          
            document.body.appendChild(newline);
         }
         start();
      }
      // -------------------------------------------------------------------------------------
      // Starts it moving & changing
      function start() 
      {
         for(var pickastring = 0; pickastring < numoflines; pickastring++) 
         {
            intervalID[pickastring] = setInterval("addchars("+pickastring+")", lines[pickastring].speed);
         }
      }
      // -------------------------------------------------------------------------------------
      // Add random characters to the string (and a line break) 
      // and make sure the last one is light
      // once it gets to maxlength start moving down
      function addchars(theline) 
      {
         if(lines[theline].length >= lines[theline].maxlength) 
         {
            clearInterval(intervalID[theline]);
            subIntervalID[theline] = setInterval("movethestring("+theline+")", lines[theline].speed);
         }
         else
         {
            // Get a char (not " or ' or  or it'll get confused)
            myRandomChar = String.fromCharCode(Math.round(Math.random()*(ascEnd-ascSt)+ascSt));
            while(myRandomChar == "'" || myRandomChar == '"' || myRandomChar == "")
               myRandomChar = String.fromCharCode(Math.round(Math.random()*(ascEnd-ascSt)+ascSt));
            // Make a new div for it (so we can change it's colour)
            var newchar = document.createElement("div");
            newchar.innerHTML = myRandomChar;
            document.getElementById("char"+theline).appendChild(newchar);
            // Colour it
            var i;
            for(i = 0; i <= lines[theline].length; i++)
            {
               var newcolor = d2h(Math.round((i+1)/(lines[theline].maxlength+1)*255));
               newcolor = "" + newcolor;
               if(newcolor.length == 1)
                  newcolor = "0" + newcolor;
               document.getElementById("char"+theline).childNodes[i].style.color = "#00" + newcolor + "00";
               document.getElementById("char"+theline).childNodes[i].style.fontWeight = "normal";
            }
            document.getElementById("char"+theline).childNodes[i].style.color = "#99FF99";
            document.getElementById("char"+theline).childNodes[i].style.fontWeight = "bold";
            // Increase length by one
            lines[theline].length++;
         }
      }
      // -------------------------------------------------------------------------------------
      // Moves the string (creates and destroys chars)
      function movethestring(theline)
      {
         var topstringnum = document.getElementById("char"+theline).offsetTop;
         if((topstringnum + (lines[theline].maxlength * 15)) >= scH) 
         {
            clearInterval(subIntervalID[theline]);
            subIntervalID2[theline] = setInterval("clearletters("+theline+")", lines[theline].speed);
         }
         else
         {
            // create
            myRandomChar = String.fromCharCode(Math.round(Math.random()*(ascEnd-ascSt)+ascSt));
            while(myRandomChar=="'" || myRandomChar=='"' || myRandomChar=="")
               myRandomChar = String.fromCharCode(Math.round(Math.random()*(ascEnd-ascSt)+ascSt));
            var newchar = document.createElement("div");
            newchar.innerHTML = myRandomChar;
            document.getElementById("char"+theline).appendChild(newchar);
            // delete
            document.getElementById("char"+theline).removeChild(document.getElementById("char"+theline).childNodes[0]);
            // re-colour
            var i;
            for(i = 0; i < lines[theline].length; i++)
            {
               var newcolor = d2h(Math.round((i+1)/(lines[theline].maxlength+1)*255));
               newcolor = "" + newcolor;
               if(newcolor.length == 1)
                  newcolor = "0" + newcolor;
               document.getElementById("char"+theline).childNodes[i].style.color = "#00" + newcolor + "00";
               document.getElementById("char"+theline).childNodes[i].style.fontWeight = "normal";
            }
            document.getElementById("char"+theline).childNodes[i].style.color = "#99FF99";
            document.getElementById("char"+theline).childNodes[i].style.fontWeight = "bold";
            // move
            document.getElementById("char"+theline).style.top = (topstringnum+15) + "px";
         }
      }
      // -------------------------------------------------------------------------------------
      // pretty much the opposite of addchars() 
      function clearletters(theline) 
      {
         if(lines[theline].length <= -1) 
         {
            clearInterval(subIntervalID2[theline]);
            document.getElementById("char"+theline).style.top = 0;
            intervalID[theline] = setInterval("addchars("+theline+")", lines[theline].speed);
         }
         else
         {
            // Remove the first character
            document.getElementById("char"+theline).removeChild(document.getElementById("char"+theline).childNodes[document.getElementById("char"+theline).childNodes.length-1]);
            // Move it down by 15px
            var topstringnum = document.getElementById("char"+theline).offsetTop;
            document.getElementById("char"+theline).style.top = topstringnum+15 + "px";
            // Decrease length by one
            lines[theline].length--;
         }
      }
   </script>
    
<!-- Cursor -->

<script type="text/javascript">
var colour="#3CFD07";
var sparkles=80;
var x=ox=400;
var y=oy=300;
var swide=800;
var shigh=600;
var sleft=sdown=0;
var tiny=new Array();
var star=new Array();
var starv=new Array();
var starx=new Array();
var stary=new Array();
var tinyx=new Array();
var tinyy=new Array();
var tinyv=new Array();
window.onload=function() { if (document.getElementById) {
  var i, rats, rlef, rdow;
  for (var i=0; i<sparkles; i++) {
    var rats=createDiv(3, 3);
    rats.style.visibility="hidden";
    document.body.appendChild(tiny[i]=rats);
    starv[i]=0;
    tinyv[i]=0;
    var rats=createDiv(5, 5);
    rats.style.backgroundColor="transparent";
    rats.style.visibility="hidden";
    var rlef=createDiv(1, 5);
    var rdow=createDiv(5, 1);
    rats.appendChild(rlef);
    rats.appendChild(rdow);
    rlef.style.top="2px";
    rlef.style.left="0px";
    rdow.style.top="0px";
    rdow.style.left="2px";
    document.body.appendChild(star[i]=rats);
  }
  set_width();
  sparkle();
}}
function sparkle() {
  var c;
  if (x!=ox || y!=oy) {
    ox=x;
    oy=y;
    for (c=0; c<sparkles; c++) if (!starv[c]) {
      star[c].style.left=(starx[c]=x)+"px";
      star[c].style.top=(stary[c]=y)+"px";
      star[c].style.clip="rect(0px, 5px, 5px, 0px)";
      star[c].style.visibility="visible";
      starv[c]=50;
      break;
    }
  }
  for (c=0; c<sparkles; c++) {
    if (starv[c]) update_star(c);
    if (tinyv[c]) update_tiny(c);
  }
  setTimeout("sparkle()", 40);
}
function update_star(i) {
  if (--starv[i]==25) star[i].style.clip="rect(1px, 4px, 4px, 1px)";
  if (starv[i]) {
    stary[i]+=1+Math.random()*3;
    if (stary[i]<shigh+sdown) {
      star[i].style.top=stary[i]+"px";
      starx[i]+=(i%5-2)/5;
      star[i].style.left=starx[i]+"px";
    }
    else {
      star[i].style.visibility="hidden";
      starv[i]=0;
      return;
    }
  }
  else {
    tinyv[i]=50;
    tiny[i].style.top=(tinyy[i]=stary[i])+"px";
    tiny[i].style.left=(tinyx[i]=starx[i])+"px";
    tiny[i].style.width="2px";
    tiny[i].style.height="2px";
    star[i].style.visibility="hidden";
    tiny[i].style.visibility="visible"
  }
}
function update_tiny(i) {
  if (--tinyv[i]==25) {
    tiny[i].style.width="1px";
    tiny[i].style.height="1px";
  }
  if (tinyv[i]) {
    tinyy[i]+=1+Math.random()*3;
    if (tinyy[i]<shigh+sdown) {
      tiny[i].style.top=tinyy[i]+"px";
      tinyx[i]+=(i%5-2)/5;
      tiny[i].style.left=tinyx[i]+"px";
    }
    else {
      tiny[i].style.visibility="hidden";
      tinyv[i]=0;
      return;
    }
  }
  else tiny[i].style.visibility="hidden";
}
document.onmousemove=mouse;
function mouse(e) {
  set_scroll();
  y=(e)?e.pageY:event.y+sdown;
  x=(e)?e.pageX:event.x+sleft;
}
function set_scroll() {
  if (typeof(self.pageYOffset)=="number") {
    sdown=self.pageYOffset;
    sleft=self.pageXOffset;
  }
  else if (document.body.scrollTop || document.body.scrollLeft) {
    sdown=document.body.scrollTop;
    sleft=document.body.scrollLeft;
  }
  else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
    sleft=document.documentElement.scrollLeft;
    sdown=document.documentElement.scrollTop;
  }
  else {
    sdown=0;
    sleft=0;
  }
}
window.onresize=set_width;
function set_width() {
  if (typeof(self.innerWidth)=="number") {
    swide=self.innerWidth;
    shigh=self.innerHeight;
  }
  else if (document.documentElement && document.documentElement.clientWidth) {
    swide=document.documentElement.clientWidth;
    shigh=document.documentElement.clientHeight;
  }
  else if (document.body.clientWidth) {
    swide=document.body.clientWidth;
    shigh=document.body.clientHeight;
  }
}
function createDiv(height, width) {
  var div=document.createElement("div");
  div.style.position="absolute";
  div.style.height=height+"px";
  div.style.width=width+"px";
  div.style.overflow="hidden";
  div.style.backgroundColor=colour;
  return (div);
}
</script>
		
<font style="font-size: 8pt;" size="3" face="Impact">
<script type="text/javascript">/*Important Function to blend the tabs in and out*/
function blendoff(idname) {document.getElementById(idname).style.display
= 'none';}
function blendon(idname) {document.getElementById(idname).style.display
= 'block';}</script><script type="text/javascript">/*Function for our Tabmenu with 4 Tabs*/
function swichtabs(wert) {
if (wert=='1'){
document.getElementById('tablink1').className='tab1 tabactive';
document.getElementById('tablink2').className='tab2';
document.getElementById('tablink3').className='tab3';
document.getElementById('tablink4').className='tab4';
}else if (wert=='2'){
document.getElementById('tablink1').className='tab1';
document.getElementById('tablink2').className='tab2 tabactive';
document.getElementById('tablink3').className='tab3';
document.getElementById('tablink4').className='tab4';
}else if (wert=='3'){
document.getElementById('tablink1').className='tab1';
document.getElementById('tablink2').className='tab2';
document.getElementById('tablink3').className='tab3 tabactive';
document.getElementById('tablink4').className='tab4';
} else if (wert=='4'){
document.getElementById('tablink1').className='tab1';
document.getElementById('tablink2').className='tab2';
document.getElementById('tablink3').className='tab3';
document.getElementById('tablink4').className='tab4 tabactive';
}

  </script>
     
    <style type="text/css">
    /* Circle Text Styles */
    #outerCircleText {
    /* Optional - DO NOT SET FONT-SIZE HERE, SET IT IN THE SCRIPT */
    font-style: italic;
    font-weight: bold;
    font-family: 'comic sans ms', verdana, arial;
    color: #000000;
    /* End Optional */
     
    /* Start Required - Do Not Edit */
    position: absolute;top: 0;left: 0;z-index: 3000;cursor: default;}
    #outerCircleText div {position: relative;}
    #outerCircleText div div {position: absolute;top: 0;left: 0;text-align: center;}
    /* End Required */
    /* End Circle Text Styles */
    </style>
     
     
   <script type="text/javascript">
    ;(function(){
    var msg = "[ 199z.Net ]";
    var size = 27;
    var circleY = 0.75; var circleX = 2;
    var letter_spacing = 5;
    var diameter = 10;
    var rotation = 0.4;
    var speed = 0.3;
     
    ////////////////////// End ////////////////////// :)
	

</script>

<body onLoad="animate();start()" onresize="resize()" onorientationchange="resize()" onmousedown="context.fillStyle='rgba(0,0,0,'+opacity+')'" onmouseup="context.fillStyle='rgb(0,0,0)'">
<script language=JavaScript type=text/javascript><!--// Method-5 animation script (compressed)



/***** CAT JAVASCRIPT ******/
var frames = 31; // <---- total number of pictures in film
var delay = 90; // <---- delay after each frame
var color = "#FF0000"; // <---- Color of cat
var changecol = true; // <---- Randomly change color of cat? If true the cat will change colors if false the color of the cat will be the value of the color variable.
var move_cat = true; // <---- Move cat? If true the cat will move side to side. If false the cat will stay in one place.
var cat_fontsize = 10; // <---- In pixels

/***** initialize anim screen position (in pixels) *****/

var topp = 50; // <---- window position bottom
var left = (move_cat)?-20:-10; // <---- window position left
var width = 300; // <---- window width
var height = 187; // <---- window height


/***** initialize anim control variables *****/

var posi = 0; // <---- actual picture position (frame counter)
var prev = 1; // <---- previous picture number
var run = true; // <---- boolean : true (?????) or !true (?????)


/***** initialize style sheets ****/

document.write("<" + "style type='text/css'><" + "!-- ");
for (i = 0; i <= frames; i++) {
    if (move_cat) {
        left = left + 2;
    }
    document.write("#cat" + i + " {position:absolute; color:" + color + "; font-size:" + cat_fontsize + "px; left:" + left + "%; top:" + topp + "px; width:" + width + "px; height:" + height + "px; z-index:" + i + "; visibility:hidden}");
}
document.write("--" + "><" + "/style>");

/******* animation module ******/
function change_color() {
    var colors = new Array("#6C2DC7", "#00FFFF", "#00FF00", "#FFFF00", "#FF0000", "#FF00FF", "#1589FF", "#8D38C9", "#E3319D", "#6C2DC7", "#7E354D", "#736AFF", "#306754", "#E45E9D", "#000099", "#33CC00", "#25A0C5");
    var randomnum = Math.floor(Math.random() * 17)
    var random_color = colors[randomnum];
	for(i=0;i<=frames;i++) {
		if(i==0) {
		
		}
		else {
			document.getElementById('cat' + i).style.color = random_color;
		}
	}
}

function animate() {
    posi = posi + 1;
    if (posi > frames) {
        if (run) {
            if (changecol && move_cat) {
                setTimeout("animate2(posi-1, prev); change_color();", delay);
            } else if (changecol && !move_cat) {
                posi = 1;
                setTimeout("animate(); change_color();", delay);
            } else if (!changecol && move_cat) {
                setTimeout("animate2(posi-1, prev);", delay);
            } else if (!changecol && !move_cat) {
                posi = 1;
                setTimeout("animate();", delay);
            }
        }
    } else {
        document.getElementById("cat"+ prev).style.visibility = 'hidden';
        document.getElementById("cat"+ posi).style.visibility = 'visible';
        prev = posi;
        if (run) setTimeout("animate()", delay);
    }
}

function animate2(posi2, prev2) {
    posi = posi2 - 1;
    if (posi < 1) {
        if (run) {
            if (changecol) {
                setTimeout("animate(); change_color();", delay);
            } else {
                setTimeout("animate();", delay);
            }
        }
    } else {
        document.getElementById("cat"+ prev).style.visibility = 'hidden';
        document.getElementById("cat"+ posi).style.visibility = 'visible';
        prev = posi;
        if (run) setTimeout("animate2(posi, prev-1)", delay);
    }
}
//--></SCRIPT>
 
<DIV id=cat1>
<PRE>
                                          
                                                                                                                         ,c,                                                                            
                                                                                                                     cARRRRRC,                                                                          
                                                        ,CRRRCc                   , , , , ,,,,,,,   ,,,,,,,      ,cRRRRRRRRRRc,                                                                         
                                                       ,CRRRRRRRRs,              ,,,,,,,,,,,,,,, ,,,,,,,,,,,   ,cRRRRRRRRRATTc,                                                                         
                                                       ,ARRRRRRRRRRRT,,    ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,     cARRRRRRRRRsccsc,                                                                         
                                                        cRRRRRRRRRRRRRT,,     ,,,,,,,,,,,,,,,,,,,,,,,,     ,ARRRRRARARRRRs,cc,                                                                          
                                                         cCcccRRRRRRRRRRRAc,,,  ,,,,,,,,,,,,,,,,,,,,,   ,cARRRRRRRRRRRRCc,,,c,,                                                                         
                                                         ,cccccCRRRRRRRRRRRRRTc,,,,,,,,,,,   ,,,,, , ,cRRRRRRRRRRRRRRAcccc,,c,                                                                          
                                                          ,sTcccccTARRRRRRRRRRT,, ,,,,,,,,,,,,,,,   ,,,,ARRRRRRRRRRRTccc,,,,c,                                                                          
                                                           cTsc,,cccTRRRRRRRAc,,   , ,,, , ,,,,,,,,,,,,,,,cTRRRRAccccc,,,,,ccc                                                                          
                                                            cCTc,,,cccARRRRs,,,,,,,          ,,,  ,,,,,,,,,,,,ccccccc,,,,,csc                                                                           
                                                            ,cTCcc,cccccccc,,,,,,,,,,, ,,,,  ,,,  ,,,,,,,,,,,,,,,,,,,,,,,ccc,                                                                           
                                                              ,cTTscccccccc,,,,,,,,,,       ,,,   ,,,,,,,,,,,,,,,,,,, ,,ccc                                                                             
                                                                ,cTCcccscc,,,,,,,,,,  Trí   ,,,  ,,,,,,,,,,,,,,,,,,,,,cc,                                                                              
                                                                  ,csssccc,,,,,,,,,,, Trí    ,,,,,,,,,,,,,,,,,,,,c,ccc                                                                               
                                                                    ,ssccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                   ,csscccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                            
                                                                  ,TTsccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,                                                                           
                                                                 ,Tsscccccccccc,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                         
                                                                ,sTsccccccccccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                        
                                                               ,sTscccccccccccccccccccc,ccc,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                       
                                                              ,cTTcccccccccCARRCcccccccccccc,c,ccccTRRRRTc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                     
                                                             ,CACTcccccccTRRRTARRTccccccccccccccccARACARRRRCc,,,,,,,,,,,,,,,,,,,,cc,,                                                                   
                                                              ,,cTTTcccccARRRCARRRATcccccc,c,cccARAc,,cRRRRRc,,,,,,,,,,,,,,,,,,,,,,                                                                     
                                                                 ,cTCsccccTsARRRRRRT,,,,,,,,,,,,cARRRARRRRAc,,,,,,,,,,,,,,,,,,,,                                                                        
                                                                   ,cCCTcc,,,sTTsTc,,,,,,,,,,,,,,,,sARRAcc,  ,,,,,,,,,,,cccc,,                                                                          
                                                                     ,csTTccc,,,,,,,,,,,,,,,,,,      ,,,   ,,,c,,,,,ccssc,,                                                                             
                                                                        ,TTTsccc,,,,,,,,,, ,,,,,,,,    ,,,,ccc,,,csCCT,,                                                                                
                                                                          csTTTcc,,,,,,,cART,,,,,,,,,,,,,cc,ccssTTc,,                                                                                   
                                                                            ,sTTcccccc,ccCTc,,,,,,,,,,,ccccTsTTscc,                                                                                     
                                                                            ,,ccTssssccccc,,ccccccccccscccTTTcc,,,,,,                                                                                   
                                                                         ,,,,,,ccTsssTTTTTTTTTcscscccTTTTTc,,,,,,,,,,,                                                                                  
                                                                          ,cssTTTc,,ccccccTsTTsccc,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                          ,sTTTcc,,,,,,        ,   ,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                                          ,ccc,,,,,,c,,   , , ,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                                          ,cc,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,ccc,,,,,,                                                                                
                                                                          ,cTcc,,,cc,   ,,,,,,,,,,,,,,,,,,,,,,cccc,,,,,,,                                                                               
                                                                           ,cscc,ccc,, ,,,,,,,,,,, ,,,,,,,,ccccc,,,,,,,,                                                                                
                                                                            ,,ccccc,,,,,,,,,,,, ,,,,,,,,,,ccccccc,,,,,,,                                                                                
                                                                              ,ccc,,,,,,,,,,,,,, ,,,,,,,,,,cc,,,cc,,,,,,                                                                                
                                                                              ,cc,,,,,,,,,,,,,, ,,,,,,,,,,ccc  ,cc,,,,,                                                                                 
                                                                              ,c,,,,,,,,,,,,,,,,,,,,,,,,,ccc,   ,,,,,,,      ,,,,                                                                       
                                                                             ,ccc,,,,,,,,,,,,,,,,,,,,,,,,cc,     ,,,, ,,,,,,,ccc,                                                                       
                                                                             ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,      cc,,,,,cccccc,,                                                                        
                                                                             ,cccc,,,,,,,,,,,,,,,,,,,,,,,,      ,cccc,c,,,ccc,                                                                          
                                                                            ,sTccc,,,,,,,,,,,,,,,,,,,,,,,,  ,,,cc,,ccccccc,,                                                                            
                                                                            ,sCcccc,,,,,,,,,,,,,,,,,,,,,,,,,ccc,,,c,cccc,,                                                                              
                                                                            ,sTcccc,,,,,,,,,,,,,,,,,,,,,,,,ccc,,,ccccc,,                                                                                
                                                                            ,cTcccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,cccc,                                                                                   
                                                                            ,TTccccTcc,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                           ,csTcccssscc,,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                                           ,,TTcccccccc,,, ,,,,,,,,,,,,,                                                                                                
                                                                            ,cTccccccc,,,,,,, ,,,,,,,,,                                                                                                 
                                                                            ,cTTccccc,,,,,,,,, ,,,,,,,,                                                                                                 
                                                                             ,cccccccc,,,,,   ,,,,,,,,                                                                                                  
                                                                              ,ccccscc,,,,,  ,,,,,,,,,                                                                                                  
                                                                                ,cccccc,,,,   ,,,,,,,                                                                                                   
                                                                                ,ccsccc,,,,,,,,,,,,,,                                                                                                   
                                                                                ,cccccc,,,,,,,,,,,,,,                                                                                                   
                                                                               ,cTcccc,,,,,, ,,,,,,,                                                                                                    
                                                                              ,cTTTcccc,,,, ,,,,,,,,,                                                                                                   
                                                                                ,Tsccc,,,,,,,,,,,,,,,                                                                                                   
                                                                                 ,Tsccc,,,,,,,,,,,,,,                                                                                                   
                                                                                 ,ccc,,,,,,,,,,,,,,c,                                                                                                   
                                                                                 ,cc,,,,,,,,,,,,,cCc,                                                                                                   
                                                                                 ,ccccc,,,,,,,ccTsc,                                                                                                    
                                                                                  ,TACCCCCCCCsc,,                                                                                                       
                                                                                   ,,,,,,,,,,,                                                                                                          
</PRE>
</DIV>
<DIV id=cat2>
<PRE>
                                                                 
                                                                                                                    ,cARCc                                                                              
                                                      ,sRRCc,                             ,                     ,,CRRRRRRRA,                                                                            
                                                     cRRRRRRRRRT,              ,,,,,,,,,,,,,,, ,,,,,,,,, ,   ,,ARRRRRRRRRATc                                                                            
                                                     ,CRRRRRRRRRRTc,        ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,   ,TRRRRRRRRRCccc,                                                                            
                                                      ,ARRRRRRRRRRRRT,,    ,,,,,,,,,,,,,,,,,,,,,,,,,,,    ,TRRRRRRARRRRCcc,,                                                                            
                                                       ,TcccARRRRRRRRRRC,     ,,,,,,,,,,,,,,,,,,,,,    ,sRRRRRRRRRRRRAsc,,,,                                                                            
                                                       ,cccccTARRRRRRRRRRAcc,,,,,,,,,,,,,,,,,,,,,, ,,cCRRRRRRRRRRRRRTcc,,,,,                                                                            
                                                        ,cTcc,cTRRRRRRRRRRRRA,  ,,,,,,,,,,,,,,,,, ,,cRRRRRRRRRRRAcccc,,,,cc                                                                             
                                                         cCTc,,ccARRRRRRRRRc,, ,,,,,,,,,,,,,,,   ,,,,,,cCRRRRRATcccc,,,,cT,                                                                             
                                                          cTTc,,,csARRRRRC,,,,,,,    ,,   ,,,   ,,,,,,,,,,cTRCccccc,,,,,cT,                                                                             
                                                          ,cCCcc,cccTAscc,,,,,,, ,     ,   ,     ,,,,,,,,,,,,,cc,,,,,,,cc,                                                                              
                                                            ,TCTcccccccc,,,,,,,   ,   ,,, ,,,   ,,,,,,,,,,,,,,,,,,  ,,cc,                                                                               
                                                              cCCTsccccc,,,,,,,,,,  Trí   ,,, ,,,,,,,,,,,,,,,,,,,,,,cc,                                                                                
                                                               ,ccccsccccc,,,,,,,,,     ,     ,,,,,,,,,,,,,,,,,,,,ccsc,                                                                                 
                                                                 ,cscccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                                 
                                                                 ,Tsscccc,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                               ,cTsscccccc,c,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                              
                                                              ,cCTccccscccccc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                              cCsccccccccccccc,ccc,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                            
                                                              cTscccccccccccccc,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,,                                                                          
                                                            ,csTcccccccTCAAARAcccccccccc,c,cc,,,,cARAs,,,,,,,,,,,,,,,,,,,,,,,,,                                                                         
                                                           ,CRCssccccccTRRRTCRRCccccccccccccc,sARRARRRRACc,,,,,,,,,,,,,,,,,,,,c,,                                                                       
                                                            ,,ccTTcccccCRRRCCRRRTccccccc,cccccARC,,cRRRRRT,,,,,,,,,,,,,,,,,,,,,,,                                                                       
                                                               ,sTTsscccsARRRRRRCc,,,,,,,,,,,cARRCARRRRRA,,,,,,,,,,,,,,,,,,,,                                                                           
                                                                ,,cCTTcc,cccARRs,,,,,,,,,,,,,,,cTRRRRRc,, ,,,,,,,,,,,,,ccc,,                                                                            
                                                                   ,cTCscc,,cc,,,,,,,,, ,,,,,    ,,,,,   ,c,,,,,,,ccTsc,,                                                                               
                                                                     ,cTTTccc,,,,,,,,,,, ,,,,, ,     ,,,cc,,,,ccsCTc,,                                                                                  
                                                                       ,cTCTscc,c,,,,,CRC,,,,,,,,,,,,,c,,cccsTTCc,                                                                                      
                                                                         ,cTTTcccccc,,cCc,,,,,,,,,,,,ccssTTTTsc,,                                                                                       
                                                                           ,cTCTscccccccc,ccccccccccccccsssc,,,,,,                                                                                      
                                                                             ,cTTTTTsTTTccsscscscscsTTscc,,,,,,,,,,                                                                                     
                                                                                 ,cccccsTsTTTcccc,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                             ,    ,cc,         , ,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                          ,,,,,,,,,,c,,       , ,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                         ,,,,csTTc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                        ,,ccTsccTcccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                        ,cCCccccccccc,,, ,,,,,,,,,,,,,,,,,,,,,,, ,,,                                                                                    
                                                                         ,sCTsTTscc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                           ,sCTc,,cc,,,,,,,,,,,,,,,,,,,,,,,,cc,,,,,,,                                                                                   
                                                                             ,,  ,cc,  ,,,,,,,,,,,,,,,,,,,,,ccc,,,,,                                                                                    
                                                                                ,,,c,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                ,,c,,,, , ,,,,,,,,,,,,,,,,,,,,,   ,                                                                                     
                                                                                ,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,  ,,,,,c,,                                                                          
                                                                                ccc,,,,,,,,,, ,,,,,,,,,,,,,,,,ccc,,,,,,,ccc,,                                                                           
                                                                              ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,  ,,cccc,,,,,,,                                                                             
                                                                              cTsc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                               
                                                                             ,cscccc,,,,,,,,,,,,,,,,,,,,,,,,,c,c,,,,,,,,                                                                                
                                                                            ,cccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                           ,cccccccccssssccc,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                         ,,ccccccccccccTTcc,,,, ,,,,,,,,,,,,,,,,,,                                                                                      
                                                                         ,ccccccccccccccc,,,,,,,,,,,,,,,,,,,,,                                                                                          
                                                                         ,ccccccccc,c,cc,,,,,,,,  ,,,,,,,,                                                                                              
                                                                         ,cccscccccc,,cc,,,,,,,,,,,,,,,,,,                                                                                              
                                                                          ,cTsccccccc,ccc,,,, , ,,,,,,,,,                                                                                               
                                                                          ,,cccccccc,cccc,,,,,   ,,,,,,,,                                                                                               
                                                                            ,cccccc,ccccc,,,,,, ,,,,,,,,                                                                                                
                                                                              ,ccc,,ccccc,,,,,,,,,,,,,,,                                                                                                
                                                                               ,,c,,ccc,,,,,,,,,,,,,,,,                                                                                                 
                                                                               ,ccccsccc,,,,,, ,,,,,,,,                                                                                                 
                                                                              ,cTTscsccc,,,,, ,,,,,,,,                                                                                                  
                                                                               ,cTTTcccc,,,,,,,,,,,,,,                                                                                                  
                                                                                 ,ccccc,,,,,,,,,,,,,,,                                                                                                  
                                                                                  ,ccc,,,,,,,,,,,,,,,,                                                                                                  
                                                                                  ,ccc,,,,,,,,,,,,cc,                                                                                                   
                                                                                 ,cTCCcc,,,,,,,,cCTc,                                                                                                   
                                                                                  ,,cccTCCTcsTCcc,,                                                                                                     
                                                                                       ,,,,c,,,,                                                                                                        
</PRE></DIV>
<DIV id=cat3>
<PRE>
                                          
                                                                                                                  cCAs,                                                                                 
                                                                                                              ,TRRRRRRRc,                                                                               
                                                   ,ARRRAc,                     , ,,,,,,,,,   ,,,,,        ,cTRRRRRRRRACc                                                                               
                                                  cRRRRRRRRRT,,            ,,,,,,,,,,,,,,,,, ,,,,,,,,,   ,TRRRRRRRRRTccc,                                                                               
                                                  ,ARRRRRRRRRRRT,     ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,    ,cRRRRRRARRRRT,c,,                                                                               
                                                   cRRRRRRRRRRRRRRC,     ,,,,,,,,,,,,,,,,,,,,,,,     ,sRRRRRRRRRRRCc,,,,,                                                                               
                                                    cTcccARRRRRRRRRRAc,,,  ,,,,,,,,,,,,,,,,,,,,,, ,cRRRRRRRARRRRAcc,,,,,,                                                                               
                                                    ,sccccTRRRRRRRRRRRRRCc,, ,,,,,,, ,,,,,,,,, ,,cRRRRRRRRRRRRRTccc,,,c,                                                                                
                                                     ,Tsc,ccccARRRRRRRRRRT, ,,,,,,,,,,,,,,,     ,,cccARRRRRRRCccc,,,,cs,                                                                                
                                                     ,cCcc,ccccTRRRRRRRA,, ,,,,, , , , , ,   ,,,,,,,,,ccTRRRcccc,,,,,cc,                                                                                
                                                      ,cCcc,,ccccCRRCc,,  ,,, ,         ,,,  ,,,,,,,,,,,,,,ccc,,,,,,csc                                                                                 
                                                       ,TCTc,,cccccccc,, ,,,     , ,,, ,,,   ,,,,,,,,,,,,,,,,,,  ,,ccc                                                                                  
                                                         ,TCTcccccccc,,,,,,,,,,   Trí  , ,,,,,,,,,,,,,,,,,,, ,,cc,                                                                                   
                                                           csCTccccccc,,,,,,,,,,,,     , ,,,,,,,,,,,,,,,,,,,,,,,ccc,                                                                                    
                                                             ,ccscccc,,,,,,,,,,,,,,   ,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                                     
                                                              ,ccTcccccc,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                              ,cscccc,,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                            ,csTcccccccc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                                
                                                           ,cCTcccccccccc,c,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                               
                                                           cTscccccccccccc,c,c,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,,                                                                             
                                                          ,TCcccccccccccATccccccccc,,,,,,,,,,,,cTCc,c,,,,,,,,,,,,,,,,,,,,,,,                                                                            
                                                         ,cTscccccccTAARRRRACccccccccc,ccc,,cARRRRRAAT,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                        ,TATscccccccARRAc,CRRcccccccccc,cccCRAc,cTRRRRRc,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                         ,ccsTcccccccCRRTTCRRRc,,,,,,,,,,,,RRRCTTARRRRC,,,,,,,,,,,,,,,,,,,                                                                              
                                                            cTCsscccc,cCRRRRRAc,,,,,,,,,, ,,cTRRRRRRc,, ,,,,,,,,,,,,,,c,,,                                                                              
                                                             ,cTTTsccc,,cccc,,,,,,,    , ,    ,,,c,,   ,,,,,,,,,,csTc,,                                                                                 
                                                                ,cCTTsccc,,,,,,,,,,,,   , ,         ,,cc,,,,,csTTc,,                                                                                    
                                                                  ,cTTTTcccc,c,,,,,,,c,, ,,,,, ,  ,,,,,,,ccTTCsc,                                                                                       
                                                                    ,cTTTsscc,c,,,,cARA,,,,,,,,,,,,,ccccTTCs,,                                                                                          
                                                                       ,sCsTcccccc,c,c,,,,,,,,,,,ccccccTTcc,,                                                                                           
                                                                         ,TTTsscTsTsccccccccccscssTTTTsc,,,,,,,                                                                                         
                                                                          ,ccssscscTsTTTTTTTTTTTTTcc,,,,,,,,,,,,                                                                                        
                                                                         ,,,,,ccc,,,,,ccccc,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                         ,,,,,,cc,,,,,,        ,,,,,,,,,,,,,,,,,,                                                                                       
                                                                         ,c,,,,,cc,,,,,,, ,,, ,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                         ,cc,,,,,c,,  ,,,,,,,,,,,,,,,,,c,,,,,,,,,,                                                                                      
                                                                         ,cc,,,,ccc,  ,,,,,,,,,,, ,,,,ccccc,,,,,,,                                                                                      
                                                                        ,,cc,,,,csc,,, ,,,,,,,,, , ,,,,cc,,,,,,,,,                                                                                      
                                                                        ,,,,,,,,ccc,,,, ,,,,,,,,,,,,,,,,,,,,,   ,,                                                                                      
                                                                         ,,,,,,,,ccc,,,, ,,,,,,,,,,, ,,cc,,,,, ,,,                                                                                      
                                                                         ,,,,,,,,cccc,,,, ,,,,,,,,,,, ,cs,,,,,,,,,                                                                                      
                                                                         ,cc,,,,,ccc,,,,,,,,,,,,,,,,  ,cc,,, ,,,,                                                                                       
                                                                         ,c,,,,,ccccc,,,,,,,,,,,,,,,, ,,cc,,,,,                                                                                         
                                                                         ,c,,,cTsccc,,,,,,,,,,,,,,,,,, ,cCs,,,                                                                                          
                                                                        ,,,,,cccscccc,,,, ,,,,,,,,,,,,  ,cTsc,,                                                                                         
                                                                       ,cc,cc, ,cTcc,,,,,,,,,,,,,, ,,,,, ,,ccc,                                                                                         
                                                                       ,TCc,,   cTccc,,,, , , , ,,,,,,,,, ,,,,                                                                                          
                                                                        ,,      cCcc,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                               ,ccccccc,,,,,,cc,,,,,,,,,,,,,,,,                                                                                         
                                                                              ,cccccccc,,,,ccc,,,,,,,,,  ,,,,,,                                                                                         
                                                                             ,ccc,,,,,,,cccsTc,,,,,,,,,  ,,,,,,                                                                                         
                                                                            ,cc,,,,,,,,,,ccTcc,,,,,,,, ,,,,,,,,                                                                                         
                                                                            ,cc,,,,,,,,,,,cccc,,,,,,,   ,,,,,,                                                                                          
                                                                            ,cc,,,,,,,,,,,,cccc,,,,,,  ,,,,,,,                                                                                          
                                                                            ,cc,,,,,,,,,,,,,ccccc,,,,  ,,,,,,,                                                                                          
                                                                            ,cc,,,,,,,,,,,,ccccc,,,,,,,,,,,,,                                                                                           
                                                                            ,cc,,,,,,,,,,,ccccc,,,,,,,,,,,,,,                                                                                           
                                                                              ,c,,,,,,,,cccccc,,,,,, ,,,,,c,                                                                                            
                                                                              ccc,,,,,,,ccccccc,,,,,,,,,,,,,                                                                                            
                                                                            ,cscc,,,,,,cccccc,,,,,,,,,,,,c,,                                                                                            
                                                                            ,cTCTcc,,cccc,c,,,,,,,,,,,,,cc,                                                                                             
                                                                              ,TCCcccTscc,,,,,,,,,,,,,,,c,                                                                                              
                                                                                ,cTTCCCcc,,,,,,,,,,,,,,,c,                                                                                              
                                                                                  ,cc,cscc,,,,,,,,,,,ccc,,                                                                                              
                                                                                       ,cTc,,,,,,,,,ccsc,                                                                                               
                                                                                        ,csccccccsTCcc,                                                                                                 
                                                                                          ,,,,,,,,,,,                                                                                                                                            
</PRE></DIV>
<DIV id=cat4>
<PRE>
                                          
                                                                                                               ,,,                                                                                      
                                                                                                           ,TARRRRC,                                                                                    
                                                                                                        ,cCRRRRRRRRT,                                                                                   
                                                cAC,,                              ,,,,,,,, ,,,       ,CRRRRRRRRRTTc,                                                                                   
                                              ,CRRRRRRRC,,               ,,,,,,,,,,,,,,,,,,,,,,,,,   sRRRRRRRRRCcccc,                                                                                   
                                              cRRRRRRRRRRRAc,     , ,,,,,,,,,,,,,,,,,,,,,,,,,,    ,cRRRRRRRRRRRTc,c,                                                                                    
                                              ,ARRRRRRRRRRRRRRc,     ,,,,,,,,,,,,,,,,,,,,,,,    ,TRRRRRRARRRRAcc,,c,                                                                                    
                                               ,ccARRRRRRRRRRRRRRc,,,,, ,,,,,,,,,,,  ,,,,,, ,,cRRRRRRRRRRRRAscc,,,cc                                                                                    
                                                ,csccTRRRRRRRRRRRRRRAc,,,,,,,,,,,,,,,,,, ,,,,,CRRRRRRRRRRRTcc,,,,,cc                                                                                    
                                                 cTccccccARRRARRRRRRRc,,,  ,,,,,,,,,,,,,  ,,,,,,,sRRRRRRAcccc,,,,,cc                                                                                    
                                                  cTcc,cccTRRRRRRRRRT,         ,,,   ,   ,,,,,,,,,,,,cccccc,,,,,,sc,                                                                                    
                                                  ,TCcc,,cccCRRRRTc,, ,,,,,         ,,,   ,,,,,,,,,,,,,,,,,,, ,,cc,                                                                                     
                                                   ,cCsc,ccccsAAcc,, , ,,,   ,   ,   ,,  ,,,,,,,,,,,,,,,,,,   ,cc,                                                                                      
                                                    ,cTTcc,ccccccc,,,,,,,,, Trí ,,,,,,, ,,,,,,,,,,,,,,,,,,cc,                                                                                       
                                                      ,cTTcccccscc,,,,,,,,,,,,   ,     ,,, ,,,,,,,,,,,,,,,,cccc,                                                                                        
                                                        ,cTTscccccc,,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                          ,ccccccccccc,,,,,,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                                      
                                                           cscscc,,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                          ,TTccccc,c,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                                   
                                                         ,ssscccccccc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,,                                                                                 
                                                        ,TTscccccccccc,c,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                                
                                                       ,TTcccccccccccccc,,ccc,,,,,,,,,,,,,cTRRRAACc,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                       ,TTcccccccccCRRRRAc,,ccc,,ccc,c,c,sARCCARRRRC,,,,,,,,,,,,,,,,,,,ccc,                                                                             
                                                     ,csTccccccccCRRAccCRRAc,,c,,,,,,,,cARRc ,cRRRRRc,,,,,,,,,,,,,,,,,,,,                                                                               
                                                    ,cAATTcccccccTARRTTARRRc,,,,,,,,,,,,cRRRAARRRRCc,,,,,,,,,,,,,,,,,,,                                                                                 
                                                      ,,,cTcscccc,ccRRRRRRT,,,,,, ,,,,,   ,cRRRAc,,  ,,,,,,,,,,,,cc,,,                                                                                  
                                                         ,sCTTsccc,,,cccc,,,,,,, ,     ,     ,,,   ,,,,,,,,,,csTc,,                                                                                     
                                                           ,cTCTTcccc,,,,,,,,,,       ,,,       ,,,,,,,,,cTCCs,                                                                                         
                                                              ,sTCTTsscc,,,,,,,,,csc,,,, ,,,   ,,,,,,ccsTCTc,                                                                                           
                                                                ,cTTTTTcccc,,,,,,CRC,,,,,,,,,,,,,,ccTTTTs,                                                                                              
                                                                   ,cTTTcscccccc,c,,,,,,,,,,,ccccccsTTcc,,,                                                                                             
                                                                     ,ccTcscssTsccccccccccccscccsTTcc,,,,,,,,                                                                                           
                                                                       ,cTcccscTsTTTTTTTTTTTTTscc,,,,,,,,,,,,                                                                                           
                                                                       ,sTccc,,,,cccccccc,,,,,,,,,,,,,,,,,,,,,                                                                                          
                                                                       ,sTcTcc,,,,,,,,,,    ,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                       ,ccccsc,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                       ,cc,,cc,,,,,, ,,,,,,,,, ,,,,cccc,,,,,,,,                                                                                         
                                                                        ccc,ccc,,   ,,,,,,,,,,,  ,,,ccc,,,, ,,,                                                                                         
                                                                        ,ccccTsc,, , ,,,,,,,,,  ,,,c,,,,,    ,,,                                                                                        
                                                                        ,cccccTcc,,,, ,,,,,,,,, ,,,,,,, ,,,,,,,                                                                                         
                                                                        ,cccccscc,,,,,,, ,,,,,,,,,   ,,,,, ,,,                                                                                          
                                                                         ,ccccscccc,,,,,,,,,, ,ccc,,, ,,, ,,,                                                                                           
                                                                         ,cccssccc,,,,,,,, ,,, ,,cc,,,,,,ccc,                                                                                           
                                                                         ,c,,cTccccc,,,,,,,,,,  ,,ccc,,,cc,,,,                                                                                          
                                                                         ,,,,ccccccc,,,,,,,,,,,, ,,,cccc,,,,,,                                                                                          
                                                                         ,sc,,csTcccc,,,,,, ,,,,,   ,,,,, ,,,,,                                                                                         
                                                                         ,,c,,cTTccc,,,,,,  ,,,,,,     ,,,,,,,,,                                                                                        
                                                                              ,cTcccc,,,,,,,,,, ,,,,,,,,,,,,,,,,                                                                                        
                                                                              ,ccscc,,,,,,,,,,,,,,,,,,,, ,,,,,,,,                                                                                       
                                                                               ,cTccc,,,,,,,,,,,,cc,,,  ,,,,,,,,,                                                                                       
                                                                                cCccc,,,,,,,,,,ccc,,,,,,,,,,,,,,,                                                                                       
                                                                                ccc,,,,,,,,,,,ccc,,,, ,,,,,,,,,,,                                                                                       
                                                                               ,cTc,,,,,,,,,,ccccc,,,    ,,,,,,,,,,                                                                                     
                                                                               ,cc,,,,,,,,,,,,csc,,,,,   ,,,,,,,,,,,,                                                                                   
                                                                              ,scc,,,,,,,,,,,,,ccc,,,,,  ,,,,,,,,,,,,,                                                                                  
                                                                              ,TTc,,,,,,,,,,,,,,ccc,,,,   ,,,,,,,,,,,,                                                                                  
                                                                               ,ccc,,,,,,,,,,,,,,ccc,,,, , , ,,,,,,,,,,                                                                                 
                                                                                ,cc,,,,,,,,,,,cc,,cTTc,,,,,   ,,,,,,,,c,                                                                                
                                                                               ,ccc,,,,,,,,,,,cc,,,cTTcc,,,,,,,,,,,,,cc,                                                                                
                                                                             ,csccc,,,,,,,,,,,,,c,  ,cscc,,,,,,,,,,,cc,                                                                                 
                                                                            ,CTc,,,,,,,,,,,,,,ccc,   ,cTccc,,,,, ,,,,,                                                                                  
                                                                            ,TCcc,,,,,,,,,,,,cc,,,    ,sCcc,,,,,,,cc,                                                                                   
                                                                             ,cCcc,,,,,,,,,c,,,        ,sTcssTsscsc,                                                                                    
                                                                              ,cTsccc,,,ccc,,           ,sCsccccc,,                                                                                     
                                                                                cTCCCTcccc,,             ,,                                                                                             
                                                                                  ,,,,,,,                                                                                                               
</PRE></DIV>
<DIV id=cat5><PRE>
                                         
                                                                                                            ,sCc,                                                                                       
                                                                                                         ,CRRRRRA,                                                                                      
                                                                                                      ,CRRRRRRRATc,                                                                                     
                                               ,,,                                              ,   ,TRRRRRARRRTcc,                                                                                     
                                              cRRRRRRCc,                       ,,,,,,,,,,,,,,,    ,sRRRRAARRRAcccc,                                                                                     
                                             ,CRRRRRRRRRRs,           ,,,,,,,,,,,,,,,,,,,,,,    ,cARRRRARRRATcc,,,,                                                                                     
                                             ,sRRRRRRRRRRRRRc,       ,,,,,,,,,,,,,,,,,,,,,,   cRRRRRAAARRRTcc,,,,c,                                                                                     
                                              ,cscCRRRRRRRRRRRRC,,,,,,,,,,,,,,,,,   ,,,,, ,,cRRRRRRAAARRCcccc,,,,,,                                                                                     
                                               ,sccccTARRRARRRRRRRRT,,,,,,,,,,,,,,,,,,  ,, ,cRRRRRRRRRAcccc,,,,,,,                                                                                      
                                               ,cccccccCRRRAAAARRRRRT,            ,,,   ,,,,,,,,CRRRRRRccc,,,,,cc,,                                                                                     
                                                ,cTc,,,ccARRRAARRRC,   ,,,         ,,    ,,,,,,,,,,,cccc,,,,,,,cc,                                                                                      
                                                 ,scc,,,ccTARRRRRc,   ,     , ,   ,,,   ,,,,,,,,,,,,,,,,,,, ,,cc,                                                                                       
                                                  ,Csc,,,,,cTRRT,,  ,,       , ,   ,,, ,,,,,,,,,,,,,,,,,,   ,cc,                                                                                        
                                                  ,cCTc,,,ccccc,,,,,,,,,,,   Trí   ,,, ,,,,,,,,,,,,,,,,,,cc,                                                                                         
                                                    ,cCTcc,ccccc,,,,,,,,,,,,   , ,   ,,,,,,,,, ,,,,,,,,,,,,cc,                                                                                          
                                                      ,cTsccccccc,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                           
                                                        ,csscccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                          ccsccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                         ,cccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                        ,cTcccccc,c,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                                    
                                                       ,cscccccccccc,,,,,,,,,,,,,,,,,,,,,cCAAAc,,,,,,,,,,,,,,,,,,,,c,,                                                                                  
                                                      cTTccccccccTAARCc,,,,,,,,,,,,,,,,,CRRARRRAACc,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                      cTcccccccsARRCTCACc,,,,,,,,,,,,,TRRc  cARRRRs,,,,,,,,,,,,,,,,,,,,c,,                                                                              
                                                      cccccccccCRRA,,,ARRc,,,,,,,,,,,,sRRCsTCsCRRs,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                   ,cTTTccccccccTRRRAARRRC,,,,,, ,,,,,,,cRRRRRAs,  ,,,,,,,,,,,,,,,,,,,                                                                                  
                                                   ,cTTTscccccc,,ccTRRRRc,,,,,            ,,cc,   ,,,,,,,,,,,,,,ccc,,                                                                                   
                                                       ,cssccccccc,,,cc,,,,,,,      ,,          ,cc,,,,,,,cccsc,,                                                                                       
                                                        ,sCTscccccccc,,,,,,,,,,,,,  ,,, ,     ,,,,,,,,ccTTCsc,                                                                                          
                                                          ,,cTTTssccccc,,,,,,,,TRA,  , , ,,  ,,,,ccccccscc,                                                                                             
                                                             ,csTTTscccccc,,,,,,c,,,,,,,,,,,,,,,,ccccsTc,                                                                                               
                                                                 ,cTTTsscccc,,,,,,,c,c,c,ccc,ccccccTcc,,,,                                                                                              
                                                                   ,csTcccsccccccccccccccccccccsTsc,,,,,,,,                                                                                             
                                                                       ,cTcccssTsTsTsTTTsTsTsscc,,,,,,,,,,,,                                                                                            
                                                                       ,ssccccccccccscccc,,,,,,,,,,,,,,,,,,,                                                                                            
                                                                       ,cTcc,,,,,, , , ,,,,,,,,,,,,,,,,,,,,,,                                                                                           
                                                                        ,ccc,,,,,,, ,,, ,,, ,,,,,,ccc,,,,,,,,                                                                                           
                                                                        ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                           
                                                                        cssc,,,,,,, ,,,,, ,,,,,     , , , ,,,                                                                                           
                                                                       ,csccc,,,,,,,,,,,,, ,c,,,   ,   ,,,,,                                                                                            
                                                                      ,,ccccc,,,,,,,,,,,, ,,cc,,,,,,,,,,,,,,                                                                                            
                                                                      ,,cccccc,,,,,  ,,,,, ,,,cccc,,,ccccc,,                                                                                            
                                                                       ,cc,,ccc,,,,,, ,,,,,   ,,ccccccccc,,,                                                                                            
                                                                       ,cTcTTscc,,,,,, ,,,,,     ,,,,,,  ,,,,                                                                                           
                                                                        ,cssTTccc,,,,,, ,,,,,,, ,     ,,,,,,,,                                                                                          
                                                                            ,ccccc,,,,,, ,,,,,,,,, ,,,,,,,,,,,,                                                                                         
                                                                             ,csccc,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                             ,cTcccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                              ,TTcccc,,,,,, ,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                               csscc,,,,,,,,,,,, , ,,,,,,,,,,,,,,,                                                                                      
                                                                               ,cTccc,c,,,,,, ,,,,,,,,,,, ,,,,,,,,,                                                                                     
                                                                                ,ccccc,,,,,,,,,,,,,ccc,,,, ,,,,,,,,,                                                                                    
                                                                                 ,Tscc,,,,,,,,,,,csscc,,,   ,,,,,,,,,                                                                                   
                                                                                 ,csc,,,,,,,,,,ccccccc,,,, ,,,,,,,,,,,,                                                                                 
                                                                                 ,ccc,,,,,,,,,,ccccccc,,,   ,,,,,,,,,,,,,                                                                               
                                                                                 ,csc,,,,,,,,,,,,c,ccc,,,,,  ,,,,,,,,,,,,,,                                                                             
                                                                                 ,Tsc,,,,,,,,,,,,, ,ccc,,,,     ,,,,,,,,,,,,                                                                            
                                                                                ,cssc,,,,, ,,,,,,,  ,csc,,,,,    , ,,,,,,,,,                                                                            
                                                                              ,,ccccc,,,, , ,,,,,,   ,ccccc,,,, ,,,,,,,,,,,,,                                                                           
                                                                              ,cc,,,,c,,,,,, ,,,,,     ,cTTccc,,,,,,,,,,,,,,,                                                                           
                                                                             ,cc,,,,,,,,,,,,,,,,,,       ,sTscc,,,,,, ,,,,cc,                                                                           
                                                                            ,cc,,,,,,,,,,,,,,,,,,         ,Tsscc,,,,,, ,,cc,                                                                            
                                                                           ,cTc,,,,,,,,,,,,,,,,,           ,ssccc,,,,,,,c,,                                                                             
                                                                            ,cTc,,,,,,,,,,,,,,,,           ,cCTTTTsccscc,                                                                               
                                                                              ,ss,,,,,,,,,,cc,              ,,cccccccc,,                                                                                
                                                                               ,cscccccccccc,                                                                                                           
                                                                                 ,c,,,,,c,,                                                                                                                                                        
</PRE></DIV>
<DIV id=cat6><PRE>
                                           
                                                                                                            ,TRRRRT,                                                                                    
                                               ,TRRRs,,                            ,                    ,cARRRRRRRRc,                                                                                   
                                              ,ARRRRRRRRA,                ,,, ,,,,,,,,,,, ,,,,,   ,   ,ARRRRRRRRATTs,                                                                                   
                                              ,RRRRRRRRRRRAc,,         ,,,,,,,,,,,,,,,,,,,,,,,,,    ,TRRRRRRRRRRAccc,                                                                                   
                                               ,ARRRRRRRRRRRRRc     ,,,,,,,,,,,,,,,,,,,,,,,,,     ,sRRRRRRRRRRRTc,cc                                                                                    
                                               ,,cccARRRRRRRRRRAc,,,,,,,,,,,,,,,,,,,,,,,,,,,   ,TRRRRRRRRRRRRAc,,,cc                                                                                    
                                                ,cTccTRRRRRRRRRRRRRCc,, ,,,,,,,,, ,,,,,,,,, ,,CRRRRRRRRRRRRAscc,,,cc                                                                                    
                                                 cTccccccARRRRRRRRRRRs, ,,,,,,,,,,,,,,,, , ,,,TRRRRRRRRRRRTccc,,,,c,                                                                                    
                                                  cTscccccTARRRRRRRs,,  ,     ,,, ,,,     ,,,,,,,cARRRRRCcccc,,,,,c,                                                                                    
                                                  ,CCc,,,cccTRRRRT,,   ,   ,   ,     ,,  , ,,,,,,,,,cAATccc,,,,,,cc,                                                                                    
                                                   ,TCsc,,ccccACc,,   ,     , ,,, ,,,,,,,,,,,,,,,,,,,,,cc,,,,,,,cc,                                                                                     
                                                    ,sCCcc,cccccc,,,,,,,           ,,,,,,,,,,,,,,,,,,,,,,,   ,,cc,                                                                                      
                                                      ,sCsccccsc,,,,,,,,,,, Trí      , ,,,,,,,,,,,,,,,,,,,,,,cc,                                                                                       
                                                        ,TCTcccc,c,,,,,,,,,, , , ,     ,,,,,,,,,,,,,,,,,,,,ccsc,                                                                                        
                                                         ,csTcccccc,,,,,,,,,,,,,,,,,,,, ,,, ,,,,,,,,,,,,,,,,cc,                                                                                         
                                                          ,cTccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                         ,scsccccc,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,                                                                                      
                                                        ,TTscccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,                                                                                     
                                                       cTTscccsccccccc,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                                   
                                                      ,cTscccccccccccc,,,c,c,,,,,,,,,,,,,,,ccc,,,,,,,,,,,,,,,,,,,,,c,,                                                                                  
                                                      ,csccccccccTRRRRRCc,ccccc,,,,,,,,cCRRRRRRATc,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                    ,csTcccccccCRRRccTRRcc,c,c,,,,,,,c,TRRccTRRRRAc,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                   ,TRATTcccccccCRRCCARRRT,,,,,,,,,,,,ARAc,cARRRRRs,,,,,,,,,,,,,,,,,,,cc,,,                                                                             
                                                     ,,ccTsccccc,cCRRRRRAc,,,,,,,,,,,,,TRRRRRRRRC,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                        cTCsTcccc,,csTsc,,,,,,,         ,csCCTc,,  ,,,,,,,,,,,,,,,cc,,                                                                                  
                                                         ,cTCTsscccc,,,,,,,,,,      ,,           ,,c,,,,,,,,cccccc,                                                                                     
                                                            ,cTTTsscccc,,,,,,,,,    ,,, ,     ,,cc,,,,,,ccTCCs,,                                                                                        
                                                              ,cTCTsTscc,,,,,,,ARA, ,,,,,,  ,,,,,,,ccsTTTsc,,                                                                                           
                                                                ,cCTTscccccccccccc,,,,,,,,,,,,,,csTTTTTsc,                                                                                              
                                                                   ,sCCTsTccccc,,,cccccccccccccccssTsc,,,,,                                                                                             
                                                                     ,cTTTssTsTTTsccccscssTcTTTTTcc,, ,,,,,,                                                                                            
                                                                        cTcccscssTTTTTTTsTsTsccc,,,,,,,,,,,,,                                                                                           
                                                                        ,ccc,,,,,,,,c,,,,,, ,,,,,,,,,,,,, ,,,,                                                                                          
                                                                        ,ssc,,,,,,   , , ,,, ,,,,,ccc,,, ,,,,,                                                                                          
                                                                       ,cTc,,,,,,,,,,,,,,,, ,,,,,,,,,,     ,,                                                                                           
                                                                      ,ccccc,,,,,,,,,,,,,,  ,,,      , , ,,,,,                                                                                          
                                                                      ,cccccc,,,,,,,,,,,, ,,,,,,, , ,,,,,,,,c,                                                                                          
                                                                     ,ccccccc,,,,, ,,,,,,,,,cccc,,,,,,,,,cccc,                                                                                          
                                                                     ,csccc,,,,,,,, ,,,,,,,,,,ccTcc,,,,cssc,,                                                                                           
                                                                     ,cTTCc  ,,c,,,,,,,,,,,,   ,,ccc,,cccc,,,                                                                                           
                                                                      ,TAc,  ,ccc,,,,,,,,,,,,     ,,,,,,,,,,,,                                                                                          
                                                                       ,,,   ,ccc,,,,,,,,,,,,,,,,,   , ,,,,,,,,                                                                                         
                                                                             ,ccccc,,,,   ,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                             ,cTccc,,,,,,,,,,,,,,,,,,, ,,,,,,,,c,                                                                                       
                                                                             ,cTccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                             ,cCTcccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                              ,cTsccc,,,,,,,, ,,, ,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                               ,cCcccc,,,,,,,,,,,,,,,ccc,,,,,,,,,,,,,,                                                                                  
                                                                                ,cTsccc,,,,,,,,,,,cccccc,,,   ,,,,,,,,                                                                                  
                                                                                 ,cTcc,,,,,,,,,,,ccccccc,,,, ,,,,,,,,,,                                                                                 
                                                                                  ,cTc,,,,,,,,,,cc,,,cc,,,,   ,,,,,,,,,,,                                                                               
                                                                                   cTcc,,,,,,,,,,c,,,ccc,,,,   ,,,,,,,,,,,                                                                              
                                                                                 ,csTccc,,,,, ,,,,,  ,TTc,,,,,    ,,,,,,,,,                                                                             
                                                                               ,cTcsTccc,,,, ,,,,,,,  ,csc,,,,,, ,,,,,,,,,,,                                                                            
                                                                              ,,cc,ccccc,,,,, ,,,,,,,   ,cccc,,,,,  ,,,,,,,,,                                                                           
                                                                              ,cc,,,,ccc,,,,,,,,,,,,,    cTTsc,,,,,,,,,,,,,,                                                                            
                                                                              ,,,,,,,,,,,,,,, , ,,,,,    ,ssccc,,,,,,,,,,,,,                                                                            
                                                                             ,,,,,,, ,,,,,,,,,,,,,,,      csc,,,,,,,,,,,,cc,                                                                            
                                                                            ,TT,, ,,,,,,,,,,,,,,,,,,      ,sccccc,,,,,,cssc,                                                                            
                                                                            ,csc,,,,,,,,,,,,,,,,,,,        cTTsTTTsTTTcc,,                                                                              
                                                                              ,cCc,,,,,,,,,,cc,,,           ,,,,,,,cc,,                                                                                 
                                                                                ,Tcc,,cccsTCs,                                                                                                          
                                                                                 ,ccc,,,c,,,,                                                                                                           
</PRE></DIV>
<DIV id=cat7>
<PRE>
                                         
                                                   ,CRRT,                                                            ,,,                                                                                
                                                  cRRRRRRRCc,,               ,,,,,,,,,,,,,,,,,,,,,,,            ,cCRRRRRA,                                                                              
                                                  TRRRRRRRRRRRT,          ,,,,,,,,,,,,,,,,,,, ,,,,,,,,,,,    ,cARRRRRRRRRC,                                                                             
                                                  ,sRRRRRRRRRRRRRc,    ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,    cRRRRRRRRRRRCTC,                                                                             
                                                   ,cTccsARRRRRRRRRs,,,   , ,,,,,,,,,,,,,,,,,,,,,,,     ,,ARRRRRRRRRRAcccc,                                                                             
                                                    ,TccccTRRRRRRRRRRRc,,, ,,,,,,,,,,,,,,,,,,,,,,,    ,RRRRRRRARRRRRsccc,c,                                                                             
                                                    ,,TcccccCRRRRRRRRRRRRC,,,,,,,,,,,,,   ,,,,,,,,,,CRRRRRRRRRRRRRCcc,,,,,,                                                                             
                                                     ,cCc,,,csARRRRRRRRRRC,  ,,,,,,,,,,,,,,,,,,, ,cRRRRRRRRRRRRRAcccc,,cc,                                                                              
                                                      ,cCc,,,,cTRRRRRRTc,,, ,,,,,,,,,,,,,,,,,  ,,,,,,CRRRRRRRRRTccc,,,,cc,                                                                              
                                                       ,TCTc,,cccCRRTcc,,  ,,,   Trí        ,,,,,,,,,,cAAcccccc,,,,,Tc,                                                                              
                                                         ,CCc,cccccccc,,,,, ,,,     ,,, ,,,,,,,,,,,,,,,,,,,cccc,,,,,,cTc,                                                                               
                                                           cCCcccccsc,,,,,,,     , ,,, ,,,,,,,,,,,,,,,,,,,,,,,,, ,,,ccc,                                                                                
                                                            ,cTTscscc,,,,,,,,,,         ,,,   ,,,,,,,,,,,,,,,,,,,,,cs,                                                                                  
                                                              ,Tcccccc,,,,,,,,,,     , , ,,, ,,,,,,,,,,,,,,,,,,,,ccc,                                                                                   
                                                              ,cscccc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                                   
                                                            ,csTcccccc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                           ,TTTcccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                                 
                                                          ,CCccccccscccccc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,,                                                                               
                                                          csTccccccccccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,                                                                              
                                                         ,csccccccccccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,                                                                             
                                                       ,CACsccccccccTAAARRAccccccc,,c,c,c,c,,,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                           
                                                       ,,ccCTcccccccCRRAsARRCcccccccccccccc,cCRRRRRRAT,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                           ,sTTcccccARRAAARRRccccccccccccccCRRA,,TRRRRAc,,,,,,,,,,,,,,,,,,,,c,,                                                                         
                                                             cTCTTcccsRRRRRRRT,,,c,,,,,,,,cRRA,,cRRRRRRc ,,,,,,,,,,,,,,,,,,,                                                                            
                                                               ,cTTcc,ccsARAc,,,,,,,,,,,,,,,cARRRRRRT,,,,,,,,,,,,,,,,,,cc,,                                                                             
                                                                 ,cTTccc,c,,,,,,,,,,,, , ,   ,ccccc,   ,,,,,,,,,,cccc,,                                                                                 
                                                                  ,,sTTsc,,,,,,,,,,,  ,,,,,,,       ,,ccc,,,,csTCTc,                                                                                    
                                                                    ,cTCsccc,c,,,,,cTc,,,,,,,,,, ,,cccc,,ccsTTc,,                                                                                       
                                                                      ,cTTscccc,c,cRRCc,,,,,,,,,,,ccccTsTTTsc,                                                                                          
                                                                        ,cTTcscccccccc,c,,,,,,,ccccccTsccc,,,,,                                                                                         
                                                                         ,TsccccTTTsTsTcscTsTcscccTTTc,,,,,,,,,                                                                                         
                                                                         ,cTcc,ccscssTTTTTsTcccc,,,,,,,,,, ,,,,,                                                                                        
                                                                         ,cccsc,,  ,,,,,,,     ,,,,,,,,,,,,,,,,,,                                                                                       
                                                                        ,,cccccc,, , , ,  ,,   ,,,,,,,,,,,,,,,,,                                                                                        
                                                                        ,ccc,,cc,,  , , ,,,,,,,,,,,,,,cc,,,,, ,,,                                                                                       
                                                                        ,c,,,ccT,,   ,,,,,,,,,,,,,,,,,ccc,,,,,,,                                                                                        
                                                                        cc,,,cccc,,,, ,,,,,,,,,,,,,,,,,cc,,,, ,,,                                                                                       
                                                                       ,cc,,,cssc,,,,, ,,,,,,,,,,,,,,,cc,,,, ,,,                                                                                        
                                                                       ,cc,,,cscc,c,,,,,,,,,,,,,,,, ,,ccc,,,,,,,                                                                                        
                                                                       ,cc,,,ccsccc,,,,,,,,,,,,,,,,,,,,cc,,,,,,,                                                                                        
                                                                       ,c,,,csTcccc,,,, ,,,,,,,,,,,,,,,cc,, ,,,                                                                                         
                                                                       ,cc,,,TTcccc,,,,,,,,,,,,,,,,,,,,,,,   ,                                                                                          
                                                                        ,,, ,cCcccc,,,,,,,,,,,,,,,,,, ,,,cc,,,,                                                                                         
                                                                             ccsccc,,,,, ,,,,,,,,,,,,, ,,ccscc,,                                                                                        
                                                                             ,cTccc,,,,,,,,,,,,,,,, ,,,,, ,,ccc,,                                                                                       
                                                                              cCccccc,,,,,,,,, , ,,,,,,,,,  ,,,,,,                                                                                      
                                                                              ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                              ,ccs,,,,,,,,,,,,,ccsccc,,,,,  ,,,,,,,,                                                                                    
                                                                               ,csc,,,,,,,,,,cccTTTTcc,,,,, ,,,,,,,,,,                                                                                  
                                                                                cTc,,,,,,,,,,cc,  ,scc,,,,,,  ,,,,,,,c,,                                                                                
                                                                               ,sTc,,,, ,,,,,,,,   ,ccc,,,,   ,,,,,,,,,,,                                                                               
                                                                               ,cTc,,, , ,,,,,,,,   ,Tcc,,,,,  ,,,,,,,,,,,                                                                              
                                                                               ,ccc,,,,,, ,,,,,,,    ,ccc,,,,,, ,,,,,,,,,,,                                                                             
                                                                               ,cTc,,,,, ,,,,,,,      ,ccc,,,,,,,, ,,,,,,,,,                                                                            
                                                                              ,ccccc,,,,,,,,,,,,,      ,cccc,,,,,,, , ,,,,,,                                                                            
                                                                             ,cTccc,,,,,,,,,,,,c,       ,CCTccc,,,,,,,,,,,,                                                                             
                                                                             ,ccc,,,,,,,,,,,,,,,,       ,cTTccc,,,,,,,,,,,,                                                                             
                                                                            ,cccc,,,,,,,,,,,,,,,         ,cTTscc,,,,,,,,,,                                                                              
                                                                            cCTcc,,,,,,,,,,,,,,           ,cTTc,,,,,,,,c,                                                                               
                                                                            ,cTTcc,,,,,,,,,ccc,             ,sTTsTTTsscc,                                                                               
                                                                              ,cTTcc,,,cccccc,               ,ccccc,c,,                                                                                 
                                                                                ,cTTccccc,,,                                                                                                            
                                                                                  ,cc,,                                                                                                                                                              
</PRE></DIV>
<DIV id=cat8>
<PRE>
                                         
                                                      ,CAc,,                                                              ,,                                                                            
                                                     cRRRRRRRAc,,              ,,,,,,,,,,,,,,,,,,,,,,,,,,            ,cCRRRRC,                                                                          
                                                     sRRRRRRRRRRRc,          ,,,,,,,,,,,,,,,,,,, ,,,,,,,,,,,     ,,cARRRRRRRAs,,                                                                        
                                                      TRRRRRRRRRRRRRT,    , ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,    ,CRRRRRRRRRRRAcc,                                                                        
                                                      ,sccTRRRRRRRRRRRc,,    , ,,,,,,,,,,,,, ,,,,,,,,,,,     ,cRRRRRRRRRRRAscc,                                                                         
                                                       ,scccARRRRRRRRRRRRs,,,,,,,,,,,,,,,,,,,,,,,,,,,     ,TRRRRRRRRRRRRRsc,cc,                                                                         
                                                       ,sTcccccCRRRRRRRRRRRRR,,,,,,,,,,,,,,,,,,,,,,, ,,,CRRRRRRRRRRRRRRCc,,,cc,                                                                         
                                                        ,cTc,ccccARRRRRRRRRRA,, ,,,,,,,,,,,,,,,,,,, ,,TRRRRRRRRRRRRAscccc,,,c,                                                                          
                                                         cCCc,,ccccARRRRRRRc,, ,,,,,,,,,,,,,,,,,   ,,,,,TRRRRRRRRRCcccc,,,,cc,                                                                          
                                                          TRRc,,,cccTRRAccc,, ,,,     , , , , ,   ,,,,,,,,c,cTRRAcccc,,,,,csc,                                                                          
                                                           ,sCTc,ccccccccc,,,,,,   ,         ,,   ,,,,,,,,,,,,,ccc,,,,,,,ccc,                                                                           
                                                            ,cTTTccccccc,,,,,,,,,  ,,  ,,,,,,,,   ,,,,,,,,,,,,,,,,, ,,,,csc,                                                                            
                                                              ,ccTscccccc,,,,,,,    Trí      , ,,,,,,,,,,,,,,,,,,, ,,ccc                                                                              
                                                                 ,Tcccccc,,,,,,,,,, , ,     ,,, ,,,,,,,,,,,,,,,,,,,,,ccc,                                                                               
                                                                 csscccc,ccc,,,,,,,,,,          ,,,,,,,,,,,,,,,,,,,c,cc,                                                                                
                                                               ,cTsccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                              ,sTTcccccccc,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                             ,TCscccccccccccc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                            
                                                            ,TTscccccccscccccccccc,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,,                                                                          
                                                            cTTcccccccccccccccccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,,                                                                         
                                                          ,CCTcccccccccccTARTc,ccccccccc,c,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                        
                                                          ,ccsTTsccccccsARRRRAACscccTscccccccccc,cARRRRACc,,,,,,,,,,,,,,,,,,,,,,,                                                                       
                                                             ,cTTTcccccCRRAcTRRRcccccsccccccccccCRACCRRRRRc,,,,,,,,,,,,,,,,,,,,cc,,                                                                     
                                                               ,cTTsscccTRRAARRRRCc,c,ccc,c,,,TRRR, ,CRRRRRc,,,,,,,,,,,,,,,,,,,,,                                                                       
                                                                 ,cTTTcc,,sRRRRRCc,,,,,,,,,,,,,TRRRRRRRRRC,,,,,,,,,,,,,,,,,c,,                                                                          
                                                                   ,cTCsc,,ccccc,,,,,,,,,,,,,,, ,,TRRRs,,   ,,,,,,,,,cccc,,                                                                             
                                                                     ,cTTTcc,,,,,,,,,,,, ,,,,,,,   ,,,   ,,ccc,,,ccTCT,,                                                                                
                                                                       ,TCTTccc,c,,,,,,,,,,,,,,,,,,  ,,,ccccc,ccCCs,,                                                                                   
                                                                         ,cTsscccc,c,,TRRA,,,,,,,,,,,,,ccccTTTsc,                                                                                       
                                                                           cCTTsccccccccsc,,,,,,,,,,ccccsTTscc,,                                                                                        
                                                                           ,cccTsTcssTsscccccccscssssscTsc,,,,,c,                                                                                       
                                                                          ,,,,,,cTscscssTTTTTTTTTTccccc,,,,,,,,,,,                                                                                      
                                                                         ,,,,,,,,ccc,, ,,cc,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                         ,c,,,,,,,cc,,        , , ,,,,,,,,,,,,,,,,,                                                                                     
                                                                         ,c,,,,, ,,,,, , , ,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                        ,,c,,,,,,,,,,,,,,,,,,,,,,,, ,,,,c,,,,,,,,,,,                                                                                    
                                                                        ,,,,,,,,,,cc,,,,,,,,,,,,,,,,,,,cccc,,,,, ,,,                                                                                    
                                                                        ,,, ,,,,,cccc,, ,,,,,,,,,,,,,,,ccccc,,,,,,,,                                                                                    
                                                                        ,,,,,,,,cccc,,,,,,,,,,,,,,,,,,,,cccc,,,,,,,,                                                                                    
                                                                        ,,,,,,,,ccc,,,,,,,,,,,,,,,,,,,,,,,ccc,,,, ,                                                                                     
                                                                        ,c,,,,,,ccc,,,,, ,,,,,,,,,,, ,,,,,cc,,,, ,,                                                                                     
                                                                        ,,,,,,,,ccc,,,, ,,,,,,,,,,,,,,,,,,ccc,,,,,,                                                                                     
                                                                        ,,,,,,cTcc,,,,,,,,,,,,,,,,,,,,,,,,cc,,,,,,                                                                                      
                                                                       ,c,,,,,csccc,,,,,,,,,,,,,,,,,,,,,,,ccc,,,,,                                                                                      
                                                                       ,sccc,,,ccccc,,,,,,,,,,,,,,,,,,,,,,,c,,  ,,                                                                                      
                                                                       ,csc,  ,cccc,,,,,,,,,, ,,,,,,,,,,,,,,c,,,,,                                                                                      
                                                                              ,TTccc,,,,,,,,,,,,,,,,,,,,,,,,,ccc,,                                                                                      
                                                                              csTccccc,,,,c,ccc,,,,,,,,,,,,,,,,cc,                                                                                      
                                                                             ,cc,,,cccccccsTsscc,,,,,,,,,,,,,,,                                                                                         
                                                                            ,cc,,,,,,,cccccsTccc,,,,,,,,,,,,,,,                                                                                         
                                                                            ,cc,,,,,,,,,,cccc,,cc,,,,,,, ,,,,,,,                                                                                        
                                                                            ,cc,,,,,,,,,,,,,,,,cc,,,,,  ,,,,,,,,,                                                                                       
                                                                            ,cc,,,,,,,,,,,,cc,,ccc,,,,,   ,,,,,,,                                                                                       
                                                                            ,,c,,,,,,,,,,,,ccc,,,cc,,,,,  ,,,,,,,,                                                                                      
                                                                             ,,c,,,,,,,,,,,,,c, ,ccc,,,,   ,,,,,,,                                                                                      
                                                                             ,cc,,,,,,,,,,,,c,  ,cscc,,,,,,,,,,,,,,                                                                                     
                                                                             ,cc,,,,,,,,,,,,,,  ,Tccc,,,,,,,,,,,,,,,                                                                                    
                                                                            ,cccc,,,,,,,,,,,,,  ,TTcc,,,,,  ,,,,,,,,                                                                                    
                                                                             ccccc,,,,,,,,,,,,  ,CTccc,,,,,, ,,,,,,,                                                                                    
                                                                            ,cTcc,,,,,,,,,cc,   ,TTccc,,,,,,, ,,,,,,                                                                                    
                                                                            ,sCTcccc,,,,ccc,    ,ccTcc,,,,,,,,,,,c,                                                                                     
                                                                              ,ccccsTTTcc,      ,cTTc,,,,,,,,,,,,,                                                                                      
                                                                                 ,,,,cc,         ,cCCTcc,,,,,,,,                                                                                        
                                                                                                   ,,,ccTcc,,,                                                                                          
                                                                                                       ,,,,,                                                                                            
</PRE></DIV>
<DIV id=cat9><PRE>
                                         
                                                           ,CAAc,                                                         cTAARc,                                                                       
                                                         ,cRRRRRRRCc                         ,,,                      ,TRRRRRRRRc,                                                                      
                                                         ,ARRRRRRRRRRAc,           ,,,,,,,,,,,,,,,, ,,,,,,,   , ,  ,CRRRRRRRRRRRT,,                                                                     
                                                          cRRRRRRRRRRRRAc,     , ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,   ,cRRRRRRRRRRRTTc,                                                                      
                                                          ,TCccCRRRRRRRRRRAc,     ,,,,,,,,,,,,,,,,,,,,,,,     ,,TRRRRRRRRRRRCc,cc,                                                                      
                                                           ,cccccARRRRRRRRRRAc,,,, ,,,,,,,,,,,,,,,,,,,,,    ,TRRRRRRRRRRRRAccc,c,                                                                       
                                                            cTc,ccTRRRRRRARRRRRRA,, ,,,,,,,,,,,,,,,,,,, ,,RRRRRRRRRARRRRRTcc,,,,,                                                                       
                                                            ,Csc,,ccCRRRRRRRRRRRc,,,,,,,,,,,,,,,,,,,,,  ,cRRRRRRRRRRRRRCcccc,,,c,                                                                       
                                                             cTsc,,,ccARRRRRRRT,, , , ,,, ,,,,,,, ,   ,,,,,,cTRRRRRRRAcccc,,,,sc,                                                                       
                                                             ,RRTc,,cccTRRAscc,, ,,        ,,, ,,,   ,,,,,,,,,,,TRCccccc,,,,,cs,                                                                        
                                                              ,cTTc,ccccccccc,,,  ,       , ,,, ,,   ,,,,,,,,,,,,,,cc,,,,,,,cTc,                                                                        
                                                                ,cCscccccccc,,,,,,,,   ,       ,     ,,,,,,,,,,,,,,,,,   ,,ccc                                                                          
                                                                 ,cTCTsccccc,,,,,,,,,,,,,     ,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                           
                                                                   ,cccscccc,,,,,,,,,,,,   Trí    ,,, ,,,,,,,,,,,,,,,,,cTc,                                                                            
                                                                     cscscc,ccc,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                             
                                                                    ,Tscccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                  ,cTcccccccccc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                           
                                                                 ,cTsccccccccccc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                          
                                                                ,cCsccccccccccccc,c,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,,                                                                        
                                                                cscsccccccccccccc,,cccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,                                                                       
                                                               ,cscccccccccCACARRAAcc,ccccc,,,ccc,c,cTRRAAATc,,,,,,,,,,,,,,,,,,c,,                                                                      
                                                             ,TACTcccccccccRRRTccRRC,,,ccccc,c,ccccTARCCARRRRT,,,,,,,,,,,,,,,,,,,,,                                                                     
                                                             ,,,ccTcccccccTRRRAcTARRAc,,,,,,,,,,,cRRRc ,TRRRRRs,,,,,,,,,,,,,,,,,,,c,,                                                                   
                                                                 cCCTscccccccCRRRRRRT,,,,,,,,,,,,,cRRRAACTRRAc,,,,,,,,,,,,,,,,,,,,,,,                                                                   
                                                                  ,cTTTsccc,,,cTCTs,,,,,, , , ,,,  ,cTRRRRCc,  ,,,,,,,,,,,,,,,,,,                                                                       
                                                                     ,TCTTcccccc,,,,,,,,,,   , , ,     ,,,,  ,,,,,,,,,,,,cccc,,                                                                         
                                                                       ,cTTTTsccc,,,,,,,,,,   , , ,        ,,cc,,,,,ccsTTc,,                                                                            
                                                                         ,cTTTsscc,c,,,,,,cCc,,,,, ,,,  ,,,,,,,,ccsCCTc,                                                                                
                                                                           ,cTCsscccccc,,,cTc,,,,,,,,,,,,,ccccTsTTs,,                                                                                   
                                                                              ,CTTsTsscccccc,,,,,,,,,,,ccccccTTTc,                                                                                      
                                                                              ,cTTTsTTTTTsTsTcccccccccccTTTTTcc,,,,,                                                                                    
                                                                             ,,,,,,,ccsscTsTTTTTTTTTTTTTsccc,,,,,,,,                                                                                    
                                                                             ,,,,,,,,,,,,,,,,,ccc,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                             ,,,,,,,,cc,,,      ,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                           ,,,,,,,,,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                           ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                          ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,,,,,,,                                                                                   
                                                                         ,,, ,,,,,,ccc,,,,,,,,,,,,,,,,,,,,,cccc,,,,,                                                                                    
                                                                        ,,c,,,,,,,ccc,,,,,,,,,,,,,,,,,,,,,ccccc,,,,                                                                                     
                                                                         ,cc,,,,,,,,,,,, ,,,,,,,,,,,,,,,,,cccc,,,,,      ,                                                                              
                                                                         ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cccc,,, ,,,,,,csc                                                                             
                                                                          ,ccc,,,c,,,,,,,,,,,,,,,,,,,,,,,,,ccc,,,,,,cccc,,                                                                              
                                                                          ,TAc,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,, ,,c,,,                                                                                
                                                                           ,,  ,,c,,,,,,,,,,,,,,,,,,,,,,,,,,cc,, ,,c,,                                                                                  
                                                                              ,cccc,,,,,,,, ,,,,,,,,,,,,,,,,c,,,,,,,,                                                                                   
                                                                            ,csscc,c,c,,,,,, ,,,,,,,,,,,,,,,,cccc,,                                                                                     
                                                                         ,,cccTcccccc,,,,,,,,,,,,,,,,,,,,,,,cccc,                                                                                       
                                                                        ,ccccccsssccc,,,,,,,,,,, ,,,,,,,,,,,,,                                                                                          
                                                                       ,ccccc,ccssTcsccc,,,,,,,,,,,,,,,,,,                                                                                              
                                                                       ,cccc,,,ccccssTsTcc,,,,,,,,,,,,,,,                                                                                               
                                                                      ,,ccccccc,c,ccccccsc,,, ,,,,,,,,,,,                                                                                               
                                                                      ,,ccccccccccc,,,,cc,,,,,   ,,,,,,,,,                                                                                              
                                                                       ,cccccc,,cc,,,,ccc,,,,,,,,,,,,,,,,                                                                                               
                                                                        ,c,c,,,,,,,,,,cccc,,,,   ,,,,,,,,                                                                                               
                                                                         ,c,,,,,,,,,,,cccc,,,,  ,,,,,,,,,,,                                                                                             
                                                                         ,cc,,,,,,,,,,cccc,,,,   ,,,,,,,,,,,,                                                                                           
                                                                          ,,c,,,,,,,,,,cccc,,,,  ,,,,,,,,,,,,,                                                                                          
                                                                           ,,,,,,,,,,,,csCcc,,,    , ,,,,,,,,,                                                                                          
                                                                           ,ccc,,,,,ccccccTTcc,,,,, , ,,,,,,,,,                                                                                         
                                                                           ,cscccccTTTc,  ,cTsccc,,,,   ,,,,,c,                                                                                         
                                                                           ,cCATCCATc,     ,TTccccc,,,,,,,,,,c,                                                                                         
                                                                             ,ccccc,       ,cCTccc,,,,,,,,,,,c,                                                                                         
                                                                                            ,cTccc,,,,,,,,,,c,                                                                                          
                                                                                             ,cscc,,,,,,,,c,,                                                                                           
                                                                                              ,cTTTsTCTcscc,                                                                                            
                                                                                                ,ccc,,,,,,                                                                                                                                        
</PRE></DIV>
<DIV id=cat10><PRE>
                                         
                                                                                                                           ,cACc                                                                        
                                                                                                                        ,sARRRRRc,                                                                      
                                                               cARAAc                                                ,,CRRRRRRRRTc,                                                                     
                                                              cARRRRRRRT,                                     , ,  ,TRRRRRRRRRTccc,                                                                     
                                                             ,RRRRRRRRRRRRAc           ,,,,,,,,,,,,,,,,,,,,,,,   ,cRRRRRRRRRCcccc,                                                                      
                                                              sCTARRRRRRRRRRC,,     ,,,,,,,,,,,,,,,,,,,,,,,    ,TRRRRRRRRRAcccc,,,                                                                      
                                                              ,cccccCRRRRRRRRRRA,,,,,,,,,,,,,,,,,,,,,,,,,,  ,TRRRRRRARRRRRAcc,,c,,                                                                      
                                                               ,scccccARRRRARRRRRRRT,,,,,,,,,,,,,,,,,,    ,cRRRRRRRARRRTccc,,,,,c,                                                                      
                                                               ,csc,,ccTRRRRRRARRRRs, ,,     ,,, ,,,,,   ,,,cCRRRRRRRRRCcc,,,,,cc,                                                                      
                                                               ,cTc,,,cccTRRRRRRRT,   ,,  ,       ,,,  ,,,,,,,,cTRRRRAccc,,,,,,cc                                                                       
                                                                ,cTc,,,ccccARRRAc,    Trí   ,    ,,   ,,,,,,,,,,,cccccc,,,,,,cc,                                                                       
                                                                 ,CCc,,,ccsAAc,,,,,,,,,,,     ,   ,,, ,,,,,,,,,,,,,,,,,,,  ,,cs,                                                                        
                                                                  ,sTsc,,ccccc,,,,,,,,,,,,     ,     ,,,,,,,,,,,,,,,,,,,   ,cc,                                                                         
                                                                   ,cTTcc,cccc,,,,,,,,,,,,,         ,,, ,,,,,,,,,,,,,,,,,,,cc,                                                                          
                                                                     ,sCcccTc,,c,,,,,,,,,, , ,   , , ,   ,,,,,,,,,,,,,,,,ccc,                                                                           
                                                                      ,cTsccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,,                                                                            
                                                                        cTccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                            
                                                                       ,ccscccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                                      cCsccccccc,c,,,,,,,,,,,,,,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,c,,                                                                        
                                                                    ,cTsccccccccccc,,,,,,,,,,,,,,,,,,,,,cTCcc,,,,,,,,,,,,,,,,,cc,                                                                       
                                                                   ,cCTcccccccsAARRRTc,c,,,,,,,,,,,,,cCRRRRRAACc,,,,,,,,,,,,,,,cc,                                                                      
                                                                   ,ccscccccTARRCccARRs,,,,,,,,,,,,,cRRc,cCRRRRCc,,,,,,,,,,,,,,,,,,,                                                                    
                                                                  ,ccsccccccsARRCscARRCc,,,,,,,,,,,,TRR,,cARRRRC,,,,,,,,,,,,,,,,,,,c,,                                                                  
                                                                ,cCACcccccccc,cCRRRRRRA,,,,,, ,,, ,,,cARRRRRRAc,,,,,,,,,,,,,,,,,,,,,,,,                                                                 
                                                                 ,,ccccccccccc,,cTTCTc,,,,,           ,ccTcc,,  ,,,,,,,,,,,,,,,,,,                                                                      
                                                                    ,TCccccccccc,,,,,,,,,,,       , ,         ,,,,,,,,,,,,,,,,,cc,,                                                                     
                                                                     cTCTTcsccccccc,,,,,,,,,,,,  ,,, ,     ,,,cc,,,,,,,,ccsTcc,,,                                                                       
                                                                        ,cCTTcsccscc,,,,,,,,cRR,  , , ,,, ,,,,,,,,ccssTTTcc,                                                                            
                                                                           ,cCTTssccccc,,,,,,c,,,,,,,,,,,,,,,ccccTcTCCc,,                                                                               
                                                                             ,,cTTTccccccccc,,,,,,,,,,,,,,,cc,ccccccc,                                                                                  
                                                                                ,csTsTcscscscsccccccccccccccccssTc,                                                                                     
                                                                                  ,cTsssTsTsTsTsTsTsTTTTTTTTTTs,,,,                                                                                     
                                                                              ,,,, , ,,sTscscssTsTsTsssscccc,,,,,,,,                                                                                    
                                                                            ,cc,,,,,,,,,,,,,,,,,cc,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                           ,csc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                           ,cTTcccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                           ,cssTscc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                           ,ssccc,c,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                           ,cTsc,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,ccc,,                                                                                   
                                                                            ,cscc,,,,,, ,,,,,,,,,,,,,,, ,,,,,,ccsc,,,                                                                                   
                                                                              ,ccc,,,, ,,,,,,,,,,,,,,,,, ,,,,cccc,,,,                                                                                   
                                                                              ,ccc,,,,, ,,,,,,,,,,,,,,,,,,,,,,ccc,,,,                                                                                   
                                                                              ,sc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cCAs,,,,,                                                                                 
                                                                             cccc,,,,,, ,,,,,,,,,,, , ,,,,,,,,TRRTc,ccc,                                                                                
                                                                            ,scc,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccsAATcc,,                                                                                  
                                                                           ,ccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,cccccc,,                                                                                    
                                                                          ,ccsc,,c,,,,,,,  ,,,,,,,,,,,,,,,,,ccc,,                                                                                       
                                                                         ,ccccccc,,,,,,,,,,,,,,,,,,,,,,,,,ccc,                                                                                          
                                                                        ,ccccscccc,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                                       ,ccc,ccsssccc,,,,,,,,,,,,,,,,,,,,,,                                                                                              
                                                                      ,ccc,c,ccccssscc,,,,,,,,,,,,,,,,,,,                                                                                               
                                                                      ,cccc,c,ccccsTTssc,,,,,,,,,,,,,,,                                                                                                 
                                                                     ,cccccccc,c,c,ccccTc,,,,,,,,,,,,,,                                                                                                 
                                                                    ,sc,,,,cccccc,,,,cccc,, ,  ,,,,,,,,                                                                                                 
                                                                    ,cc,,,,,,,,,,,,,,cc,,,,,   ,,,,,,,,,                                                                                                
                                                                   ,cc,,,,,,,,,,,,,,cscc,,,,,,,,,,,,,,,,                                                                                                
                                                                  ,ccc,,,,,,,,,,,c,,,cccc,,,   ,,,,,,,,,,,                                                                                              
                                                                  ,cc,,,,,,,,,,,,,,  ,ccc,,,,   ,,,,,,,,,,,                                                                                             
                                                                 ,sccc,,,,,,,,,,,,,   ,sc,,,,,   ,,,,,,,,,,,,                                                                                           
                                                                 ,TTsc,,,,,,,,,cc,    ,TTc,,,       ,,,,,,,,,                                                                                           
                                                                  ,csTcc,,,ccccc,,     ,cTcc,,,,,, , , , ,,,,,                                                                                          
                                                                     ,ccccccc,,         ,cTTscc,c,,,,,, ,,,,,,,                                                                                         
                                                                        ,,,               ,cTTcccc,,,,,,,,,,c,                                                                                          
                                                                                           ,CTccc,,,,,,,,,,,c,                                                                                          
                                                                                           ,cTcc,,,,,,,,,,c,,                                                                                           
                                                                                             ,csc,,,ccccccc,                                                                                            
                                                                                               ,cTTccc,,,,                                                                                              
                                                                                                 ,,,                                                                                                                                               
</PRE></DIV>
<DIV id=cat11>
<PRE>
                                         
                                                                   ,CRRC,                                                    ,TRAT,                                                                     
                                                                 ,CRRRRRRRAc,                                             cARRRRRRRc,                                                                   
                                                                 cTCARRRRRRRAc,,   ,                             ,     ,cRRRRRRRRACT,                                                                   
                                                                 ,cccsRRRRRRRRRAc,  ,,,,,     ,               ,,,    cRRRRRRRRRAsccc,                                                                   
                                                                  ,scccCRRRRRRRRRAc,   ,,,,,,,,,,,,,,,,,,,,,,,    ,sARRRRRRRRRTcc,,,,                                                                   
                                                                  ,cs,,,cARRRRRRRRRRRTc,,,,,,,,,,,,,,,,,,,,,, ,,TRRRRRRRRRRRCc,,,,,,                                                                    
                                                                   cc,,,ccsARRRRRRRRRRA, ,,,   ,   ,,,,,,    ,cRRRRRRRRRRRAc,,,,,,,,                                                                    
                                                                   cT,,,,,ccTRRRRRRRRc, ,,,      ,,,, ,,,   ,,,cCRRRRRRRRscc,,, ,c,                                                                     
                                                                   cTT,,,,,cccCRRAc,,  ,,,     Trí      ,,,,,,,,,TRRRRCccc,,, ,,c,                                                                     
                                                                    cCT,,,,,ccccc,,,,,, ,,,,,          ,, ,,,,,,,,,,,ccccc,,,  ,cc,                                                                     
                                                                    ,TCT,,,,cccc,,,,,,,,,,,,,,       ,  ,,,,,,,,,,,,,,cc,,,  ,,cs,                                                                      
                                                                      cTc,,,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,    ,cc,                                                                       
                                                                       cTTccccc,,,,,,,,,,,,,,,,,,,,,,,,, ,,,,,,,,,,,,,,,,, ,,cc,                                                                        
                                                                        ,sTTscc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,                                                                         
                                                                         ,cTcccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,                                                                           
                                                                         ,ssscc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                           
                                                                       ,cTccccccc,,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                                      ,sTscccccc,cCARRRCc,,,,,,,,,,,,,,,,,TARACTc,,,,,,,,,,,,,c,                                                                        
                                                                    ,cTTsccccccsCRRRccCRRC,,,,,,,,,,,,,,cAACTRRRRAc,,,,,,,,,,,cc,,                                                                      
                                                                    ,cTscccccccsARRAccTRRRc,,,,,,,,,,,,cRRc  sRRRRRc,,,,,,,,,,,cc,                                                                      
                                                                   ,,ccscccccc,,,cCRRRRRRR,,,,,,,,,,,,,cRRRCACTRRAc,,,,,,,,,,,,,,,,                                                                     
                                                                 ,cCATTcccccccc,,,,cACCTT,, ,,,   ,     ,cARRRRCc,,,,,,,,,,,,,,,,,,,,                                                                   
                                                                ,,cccccsccccccccc,,,,,,,   ,,,             ,,c,,   ,,,,,,,,,,,,,,,,cc,,                                                                 
                                                                     ,cTscsccccccccc,,,,,,,,, ,,,,  , , ,       ,,c,,,,,,,,,,,,,,,,,,                                                                   
                                                                    ,cTCTTsTcccc,cccc,,,,,,,, ,Trí,  ,,,,,   ,,,,,,,,,,,,,,,,,,,,,,                                                                     
                                                                      ,,ccCTTTTcccccc,,,,,,,,,,,c,,,,,,,,,,,,,,,,,,,,cccccsccccc,,                                                                      
                                                                           ,cTTTTTTTcc,ccccccc,,,,,,,,,,,,,,,,,,cccccccccTTsc,,                                                                         
                                                                              ,cTTccccccccccccccccccc,cccc,,,,,,,cccsssc,,                                                                              
                                                                                ,,,cTTsscscscscscscccccccc,cccccccsc,,                                                                                  
                                                                             ,,,    ,cTTTsTsTsssscscscTsscccccTTc,,                                                                                     
                                                                           ,,c,,,,,,,,,sTscssssssTsTsTsTsTsTssc,,                                                                                       
                                                                           ,sccc,,,,,,,,,,,,,,,,ccccccc,,,,,,,,,,,,                                                                                     
                                                                          ,cscccsCTc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                          ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                         ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                         ,cccc,,,,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                         ,cTscc,,,,,,c,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                          ,cCcc,,,,,,,,  ,,,,,,,,,,,,,,,,,,,,,,,c,,,,                                                                                   
                                                                           ,,ccc,,,c,, ,,,,,,,,,,,,,,,,,,,,,,,ccc,,,,,                                                                                  
                                                                             cccccc,,,,,,,,,,,,,,,,,,,,,,  ,ccccc,,,,,,                                                                                 
                                                                           ,,cscc,,, ,,,,,,,,,,,,,,,,,,, ,,csscccc,,,,                                                                                  
                                                                          ,cTcc,,,  ,,,,,,,,,,,,,,,,,,,,,,,csc,ccc,,,                                                                                   
                                                                         ,cTsc,,,, ,,,,,,,,,,,,,,,,,,,,,,,,c,  ,,c,,,                                                                                   
                                                                         ,Ccc,,,,,,,, ,,,,,,,,,,,,,,,,,,,,c,    ,ss,,                                                                                   
                                                                        cTcc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,    ,,,,                                                                                    
                                                                       ,TTc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                                      ,ccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                             
                                                                      cTccccscc,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                              
                                                                     ,cTcccccscccc,,,,,,,,,,,,,,,,,,,,,,,                                                                                               
                                                                    ,cTcc,ccccssTcccc,,,,,,,,,,,, ,,,,,                                                                                                 
                                                                    ,Tcc,c,ccccTsTTTTscc,,,,,,,,,,,,,,                                                                                                  
                                                                   ,ccccccccccccccccccTTc,,,,,,,,,,,,,,                                                                                                 
                                                                   ccc,,,,,ccccc,,,,  ,cc,,, ,,,,,,,,,,                                                                                                 
                                                                  ,cc,,,,,,,,,,,,c,   ,cc,,,,,,,,,,,,,,,,                                                                                               
                                                                  ,,,,,,,,,,,,,,,cc  ,,cc,,,,, , ,,,,,,,,,,                                                                                             
                                                                 ,c,,,,,,,,,,,,,,cc,  ,cc,,,,,,  ,,,,,,,,,,,                                                                                            
                                                                 ,c,,,,,,,,,,,,,,,,   ,ccc,,,,     ,,,,,,,,,,                                                                                           
                                                                ,cTc,,,,,,,,,,ccc,     ,ccc,,,,     , ,,,,,,,,                                                                                          
                                                                ,TACTscc,cccccscc,      cTcc,,,,,,,,,, ,,,,,,,                                                                                          
                                                                 ,ccccscccccc,,         ,cTTsccccc,,,,,,,,,,c,,                                                                                         
                                                                                          ,TTTcccc,,,,,,,,,,cc                                                                                          
                                                                                           ,CCTcc,,,,,,,,,,cc,                                                                                          
                                                                                            ,cTc,,,,,,,cccc,                                                                                            
                                                                                             ,,ccccccccc,,,                                                                                             
                                                                                               ,,csc,,,                                                                                                 
</PRE></DIV>
<DIV id=cat12><PRE>
                                          
                                                                 ,cCATTc                                                                                                                                
                                                               ,cARRRRRRCc,                                                                                                                             
                                                               ,sTCARAAARRACc                                              ,cTCAC,                                                                      
                                                               ,ccccccCRAAARRCc,     ,                                 ,,TARRRRRRA,                                                                     
                                                                ,cc,cccsAAACARRCc,    , , , , , ,           ,,, ,    ,CARRRRAARCTc,                                                                     
                                                                ,cc,,,cccCAACAARAACc   ,,,,,,,,,,,,,,,,,,,,,,,    ,cTRRRAAAARAcc,c,                                                                     
                                                                ,cc,,,,,cccCACACARRRAs,  ,,,,,,,, , ,,,,,,,,, ,,sCRARAAAAACccc,,,,,                                                                     
                                                                 cc,,,,,,,cCRAAAARRRAc , ,         ,   ,    ,sRRRRAAAAARCccc,,,,,,                                                                      
                                                                 ,Tc,,,,,,ccTARRRCc,,   ,,,       ,,,  ,    ,,cARRAAAAAsccc,,,,,,,                                                                      
                                                                 ,ssc,,,,,,,,ccc,,,  , ,,,                 ,   ,cARRACccc,,,  ,,,                                                                       
                                                                  ,cs,,,,,,,cc,,,,,,,,,       Trí       , ,,,   ,,,ccccc,,,  ,,,,                                                                       
                                                                   cTsc,,,,,,,,,,,,,,,,,                 , , ,,,,,,,,c,,,,  ,,cc                                                                        
                                                                    ,csc,,,cc,,,,,, ,,, ,,, ,,,,,,,,,,, , , , , ,,,,,,,    ,cc,                                                                         
                                                                     ,cscccc,,,,,, ,,,,,,,,,,,,, , , ,,,,,,,,,,,,,,,,,,   ,,c,                                                                          
                                                                      ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                           
                                                                      ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                             
                                                                     ,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                   ,cTccc,,,,,,,,,,ccsc,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                 ,csTcc,c,,,,,,,csTAAAATc,,,,,,,,,,,,,,,,,cCCTc,,,,,,,,,,,,,                                                                       
                                                                 ,cccc,c,,,,,,,TRRRc,,sRAs,,,,,,,,,,,,,,cCCTTRRAcc,,,,,,,,,,,,                                                                     
                                                                ,,ccccc,,,,,,,,cTARTccCRRA, ,,,,,,, ,,cART, ,cRRRAc,,,,,,,,,cc,                                                                      
                                                              ,ccscccc,c,,,,,,,,,,TRRRRRAc, ,,,,  ,,  ,TAATsTARRRC,,,,,,,,,,,,,                                                                         
                                                             ,cTTcccccc,,,,,c,,,, ,,cccc,               ,TRRRRCc,,,,,,,,,,,,,,,,                                                                        
                                                                 ,cccccccccccc,,,,,                       ,c,,    ,,,,,,,,,,,,,,,,,                                                                
                                                                 ,Tsccccccccc,,,,,,,,     , , ,,,,             ,,,,,,,,,,,,,,,,,,,,                                                                
                                                                 ,,ccTsccccccccc,,,,,, ,,, ,  ,sTc,  , ,     ,,,,,,,,,,,,,,,,,                                                                        
                                                                     ,,csTscccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccccccccc,,                                                                         
                                                                        ,,,ccscccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,ccccccsccc,,,                                                                            
                                                                            ,,cccccccccccccccccccccc,,,,,,,,,,,,ccscc,,                                                                                 
                                                                               ,cscccccccccccccccccccccc,,,,ccccc,,                                                                                     
                                                                                 ,ccccccccccccccccccccccccccsc,,                                                                                        
                                                                       ,,,,cc,  ,,,,,,cccccccccccccccccccccc,,                                                                                          
                                                                       ,cc,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                        ,ccc,,,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                         ,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                          ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                          ,,,,,,,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                         ,,c,,,,,,,,,,,,,, , , , , ,,,,,,,,,,,,,                                                                                        
                                                                         ,cc,,,,,,,,,,,,, , , ,,, , , ,,,,,c,,,,                                                                                        
                                                                         ,cccc,,,,,,,,,  ,,, ,,, ,,, , , ,,c,,,,                                                                                        
                                                                         ,ccccc,,,,,,,, ,,,,,,,,,,, ,,, ,,c,, ,                                                                                         
                                                                           ,ccc,,,,,,, , , ,,, ,,,,,,,   ,,,,, ,                                                                                        
                                                                             ,cc,,,,,   ,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                             ccc,,,,,, ,,, ,,, ,,, ,,, , ,,,,,                                                                                          
                                                                            ,cccc,,,,   ,,,,,,,,,,,,, ,,,,,,,,                                                                                          
                                                                           ,ccc,,,,,,, , ,,,,,,,,, , ,,,,,,,,                                                                                           
                                                                           cTcc,,,,,,,,,,,,,,,,,, ,,,,,,,,,,,                                                                                           
                                                                         ,cccc,,,,,,,,,,,, , , ,,, ,,,,, ,,,                                                                                            
                                                                        ,ccc,,,,,,,,,,,   , , , ,,, , , ,,,                                                                                             
                                                                       ,ccc,,,,,,,,,,,,,   ,     ,,, ,  ,,,                                                                                             
                                                                     ,ccc,,,,   ,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                              
                                                                    ,ccc,,,, , ,,,,,,ccc,c,,,,,,,,,,,,,,,,                                                                                       
                                                                  ,cTcc,,,,   ,,,,,,,cc,ccsccccc,,,,, ,,,,,                                                                                         
                                                                 ,csccc,,,   ,,,,,,,,c,   ,ccc,,,, ,,, ,,,,                                                                                             
                                                                ,cscccc,, , , ,,,,,,c,    ,,c,,,,,, , ,,,,,,                                                                                            
                                                               ,,ccccc,,,,,,,,,,,,,c,     ,,,,,,,,,,,, ,,,,,                                                                                            
                                                                ,cccc,,,,,,,,,,,,,c,      ,,c,,,,,,,,   ,,,,,                                                                                           
                                                                 cscc,,,,,,,,,,,cc,       ,cc,,,,,,,   ,,,,,,                                                                                           
                                                                 ,ccc,,,,,,,,,,cc,,       ,csc,,,,,,,   ,,,,,,                                                                                          
                                                                 ,,cc,,,,,,,,,cc,,         ,cTcc,,,,,, , ,,,,,                                                                                          
                                                                  ,cccccc,,,,,c,,          ,ccccc,,,,,, , ,,,,,                                                                                         
                                                                   ,cccccccccc,            ,sscc,,,,,,,, ,,,,,,                                                                                         
                                                                       ,,,,,c,             ,sccc,,,,,,,,,,,,,,,                                                                                         
                                                                                           ,,cc,,,,,,,,,,,,,,,,                                                                                         
                                                                                             ccc,,,,,,,,,,,cc,                                                                                          
                                                                                             ,,cccccccccccc,,                                                                                           
                                                                                               ,,cc,,,,,,,,                                                                                                                                         
</PRE></DIV>
<DIV id=cat13><PRE>
                                         
                                                                ,TRRRATc,                                                                                                                               
                                                               ,sRRRARRRACc,                                                                                                                            
                                                               ,cTTARAAARRRAc,                                                                                                                          
                                                               ,ccccccAAACARRCc,                                          ,TCCCT,                                                                       
                                                               ,cc,,,ccTAACAARRCc,   ,   , , , ,                      ,cCAARRRRRRs,                                                                     
                                                               ,c,,,,,cccTAAAAAAAAC,   ,,,,,,,,,,,,,,,, , , , ,     ,cCRRRRAARRATc,                                                                     
                                                               ,cc,,,,,,cTARAACAARRRAc,, ,,,,,,,,,,,,,,,,,,,,    ,sAARRAAARATccc,,                                                                      
                                                                ,cc,,,,,cccCRAAAAARRRc, ,,,       , ,,,,,,,,,,cCAARRRAACAACcc,,,,,                                                                      
                                                                ,cc,,,,,,,,csARRRAc,,, ,,,         ,   ,    ,TRRRRAACAARAc,,,,,,,                                                                       
                                                                ,csc,,,,,,,cccc,,,,   ,,,,             ,,    ,cCRRAAAAATc,,,,,,,,                                                                       
                                                                 ,cTc,,,,,,ccc,,,,,,,,        Trí      ,       ,cARRACcc,,,, ,,,                                                                        
                                                                  ,cs,,,,,,,,,,,,,,,,,,,,                 ,,,   ,,,cccc,,   ,,c,                                                                        
                                                                   css,,,,,,,,,,,,,,,,,,,,,,         ,    ,, ,,,,,,,,,,,   ,,c,,                                                                        
                                                                    ,cccccc,,,,,,,, ,,,,, ,,, , , ,,,,,,,,,,, , ,,,,,,,   ,,c,                                                                          
                                                                     ,cccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,   ,,c,                                                                           
                                                                     ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                             
                                                                   ,cccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                              
                                                                  ,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                ,csc,,,,,,,,,,,,,,cCAATc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                               ,cscc,,,,,,,,,,,cCRRTccARAc,,,,,,,,,,,,,,,,TAACTcc,,,,,,,,,,                                                                         
                                                              ,cccc,,,,,,,,,,,,cCRRc,,cRRA,,,,,,,,,,,,,,cCsccCRRAc,,,,,,,,,,,                                                                       
                                                            ,cTsc,,,,,,,,,,,,,,,,cARRRRRRs, , ,,, , , ,cRR, ,TRRRs,,,,,,,,,c,                                                                         
                                                           ,,ccccccc,,,,,,,,,,,  ,,cTTTc,,         ,  ,,cAARRRRAsc,,,,,,,,,,,,                                                                          
                                                               ,ccccccccccc,,,,,,,   ,,                  ,cCATc,, ,,,,,,,,,,,,,                                                                         
                                                               ,TTcccccccccc,,,,cc,,,        ,       ,     ,,    ,,,,,,,,,,,,,,,,,                                                                
                                                               ,,ccssccccccccc,,,,,,,   ,     ,csc,   ,       ,,,,,,,,,,,,,,,,,,,                                                                  
                                                                   ,,csTcccccccccc,,,,,,,,,,,,,ccc, ,,,,,, ,,,,,,,,,,,,,,ccc,                                                                        
                                                                       ,,,,,ccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,ccccTscc,,                                                                            
                                                                        ,,,,,,cccccc,ccc,,,,,,,cc,,,,,,,,,,,,,cccccscc,,,                                                                               
                                                                        ,,,,,,ccccccccccccccc,ccccccccc,,,,,,,cccc,                                                                                     
                                                                         ,cc,,,,cccccccccccccccccccccccccccccc,,                                                                                        
                                                                         ,cc,,,,,,,ccccccccccccccccccccccccc,                                                                                           
                                                                         ,cc,,,,,,,,,,,,,,,ccccccccc,,,,,,,,,,                                                                                          
                                                                         ,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                        ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                        cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                       ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                      ,cccc,,,,,,,,,,,,,, , , ,,, ,,, ,,,,,,,,,                                                                                         
                                                                      ,ccccc,,,,,,,,,, , ,,,,,,,,,,, ,,,,,,,,,                                                                                          
                                                                      ,,ccscc,,,,,,,,   ,,, ,,,,,,, , ,,cc,,,                                                                                           
                                                                         ,ccc,,,,,,,,, ,,,,,,,,, ,,,,, ,,c,,,,                                                                                          
                                                                           ,cccc,,,,,  ,,,, ,,,,, ,,, , ,,,,,                                                                                           
                                                                            ,ccc,,,,,, ,,,,,,, , ,,, , ,,,,,,                                                                                           
                                                                             ccc,,,,, ,,,,, ,,,,, , , , ,,,,,                                                                                           
                                                                            ,ccc,,,,,, ,,,,,,, , , , , ,,,,,                                                                                            
                                                                            ,ccc,,,,,,,,,,,,,,,,,,,,, , ,,,,                                                                                            
                                                                            ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                                            ,cc,,,,,,,, ,,,   , , ,,, , ,,,                                                                                             
                                                                           ,,ccc,,,,,, ,,,,,,,,, , , , ,,,,,                                                                                            
                                                                           ,ccc,,,,,,   ,,,,,,,   , ,,,,,,,,                                                                                            
                                                                         ,cccc,,,,,,   ,,,,,,, ,,,,,,,,,,,,,                                                                                            
                                                                        ,cscccc,,,,   ,,,,,,,,,,,,,,,,,  ,,,                                                                                            
                                                                       ,cscccc,,,, , , ,,,,,,ccccc,,,, , ,,,                                                                                    
                                                                      ccccc,,,,,,   ,,,,,,,,sccc,,,,, , ,,,,,                                                                                      
                                                                    ,cscc,,,,,,,   , ,,,,,,cccc,,,,,,, ,,,,,,                                                                                           
                                                                    ,cscccc,,,,,, , , ,,,, ,cc,,,,,,,   ,,,,,                                                                                           
                                                                     ,cccccc,,,,,,,,,,,,,  ,cc,,,,,,   ,,,,,,,                                                                                          
                                                                      csccc,,,,,,,,,,,,,   ,ccc,,,,,,   ,,,,,,                                                                                          
                                                                      ,cccc,,,,,,,,,,c,    ,ccccc,,,,, , ,,,,,                                                                                          
                                                                       ,cTccccccccccc,     ,ccccc,,,,,, ,,,,,,                                                                                          
                                                                        cccccccccccc,      ,cccccc,,,,,, ,,,,,,                                                                                         
                                                                          ,,,,,,,,,,       ,ccccc,,,,,, ,,,,,,,                                                                                         
                                                                                           ,cscc,,,,,,,, , ,,,,                                                                                         
                                                                                            ,cc,,,,,,,,,,,,,,,,                                                                                         
                                                                                             ccc,,,,,,,,,,,,,,                                                                                          
                                                                                             ,,cccccccccccc,,                                                                                           
                                                                                               ,,cc,,,,,,,,                                                                                                                                     
</PRE></DIV>
<DIV id=cat14><PRE>
                                          
                                                                    ,cc,                                                                                                                                
                                                                  ,CRRRRCsc                                                                                                                             
                                                                 ,cCARARRRRAc,                                                                                                                          
                                                                 ,,ccTARAAARRTc,                                                                                                                        
                                                                  ,cc,cCARCAARRCc,                                                                                                                      
                                                                 ,,cc,,ccCRAAAAAACT,  , ,                                  ,sTCAAc,                                                                     
                                                                 ,,c,,,,,ccAAACAARRRc,   ,,,,,,,,,,, ,                 ,cCARRRRRRAc,                                                                    
                                                                 ,cc,,,,,cccTCACACARRRCc, ,,,,,,,,,,,,,,, ,,,,,      ,CARRRRAARCscc,                                                                    
                                                                 ,,cc,,,,,cccARAAAAARRAc,, ,,,,,,,,,,,,,,,,,,,   ,cAAARRAAAARAcccc,                                                                     
                                                                  ,cc,,,,,,,ccCRRRRTcc,,,,, , , , , , , , ,  ,cCRARRRAAAAACccc,,,,,                                                                     
                                                                  ,cc,,,,,,,,ccccc,,,, ,,,,,,,,    , ,   ,,,  ,ARRAAAAARAsc,,,,,,,                                                                      
                                                                   cTc,,,,,,,c,,,,,,,,,,,,,,,                   cARAAAAsc,,,,,,,c                                                                       
                                                                    ,sc,,,,,,,,,,,,,,,,,,,,         Trí         ,,cAAcc,,,, ,,,,                                                                       
                                                                    ,csc,,,,c,,,,,,,,,,,,,,,,,,             ,,, , ,,ccc,,,   ,c,                                                                        
                                                                     ,ccc,,cc,,,,,,,,,,, , , , ,,,,,,,,,,, ,,,,, , ,,,,,   ,,cc,                                                                        
                                                                      ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,,,,,,,   ,,c,,                                                                         
                                                                      ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                           
                                                                    ,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                             
                                                                   ,ccc,,,,,,,,,,,,,,,,,,,  ,,,,,,,,,,,,,,,,,,,,,,,,,,,c,                                                                               
                                                                 ,ccc,,,,,,,,,,,,,,,sCACCcc,,,,,,,,,, , ,,,,,,,,,,,,,,,,,                                                                               
                                                                ,cscc,,,,,,,,,,,,cTRRCccsRRC,,,,,,,,,,,,,,,,cTTsc,,,,,,,,,,                                                                             
                                                               ,ccc,,,,,,,,,,,,,,cARRc,,,TRCc,,,,,,,,,,,,,cCACCRRTc,,,,,,,,,                                                                        
                                                            ,,cTsc,,,,,,,,,,,,,,,,,cARRRRRRC,, ,,,,, ,,,,cRA, ,TRRRT,,,,,,,,,                                                                      
                                                            ,ccsccccc,,,,,,,,,,,,   ,cTTCTc,          ,,,cRRCcCARRRs,,,,,,,,,,                                                                      
                                                                ,ccccccccccc,,,,,,,,                      ,TARRRTc,  ,,,,,,,,,                                                                          
                                                                csscccccccccc,,,,cc,,,,       ,             ,,c,    ,,,,,,,,,,,                                                                         
                                                               ,,ccTTscccccccccc,,,,,,,    , ,  ,cCc,    ,       ,,,,,,,,,,,,,,,,,                                                                
                                                                   ,,csscc,cccccccc,,,,,,,,,,,, ,cCc, ,   ,   ,,,,,,,,,,,,,,,   ,                                                                 
                                                                       ,,,,,,cccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccccccc,                                                                       
                                                                       ,,,  ,,ccccccccccc,,,,,,,,,c,,,,,,,,,,,,,cccccsTc,,,                                                                             
                                                                       ,cc,,,,,,cccccccccccccc,cccccc,,,,,,,,,,ccscc,,                                                                                  
                                                                        ,,c,,,,,,,cccccccccccccccccccccccccccccc,,                                                                                      
                                                                         ,c,,,,,,,,ccccccccccccccccccccccsssc,,                                                                                         
                                                                         ,c,,,,,,,,,,,,,,,,cccccccccccccc,,                                                                                             
                                                                         ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                              
                                                                         ,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                             
                                                                        ,c,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                                        ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                             
                                                                      ,,ccc,,,,,,,,,,,,,,,,,,,,, , , , ,,,,                                                                                             
                                                                      ,cccc,,,,,,,,,,,,,,,, ,,, ,,,,, , ,,,                                                                                             
                                                                      ,ccccc,,,,,,,c,,,,,  , ,,,,,,,,, ,,,,                                                                                             
                                                                        ,cccc,,,,,,,,,,,, , , ,,,,, ,,, , ,                                                                                             
                                                                          ,ccccc,ccc,,,,,,,,,,,,,,,,,, ,,,                                                                                              
                                                                             ,,cccc,,,,,,,, , ,,,,, ,,,,,                                                                                               
                                                                               cccc,,,,,,,,,,, ,,,,, ,,,,,                                                                                              
                                                                             ,ccccc,,,,,,,, ,,, ,,, ,,,,,,,                                                                                             
                                                                           ,,ccccccc,,,,,,,,,,,, ,,,,,,, ,,,                                                                                            
                                                                          ,cTcccccc,,,,,, ,,,,,,, , ,,, ,,,                                                                                             
                                                                          ,ccccccc,,,,,,,,   , ,,,,,,, ,,,,,                                                                                            
                                                                          ,cccccc,ccc,,,,,,   , ,,,,,,,,,,,                                                                                             
                                                                          ,cccccccccc,,,,,,, , ,,,,,,, ,,,,,                                                                                            
                                                                           ,ccccccccc,,,,,, , , ,,,,, ,,,,,                                                                                             
                                                                            ,ccccccccc,,,,,  ,,,,,,,,,,,,,,,                                                                                            
                                                                             ,,,ccc,,,,,,,, ,,, ,,,,,,,,,,,,                                                                                            
                                                                           ,,c,,cc,,,,,,,, ,,, ,,,,,,,,,,,,,                                                                                      
                                                                           ,ccc,,,,,,,,,, , , ,,,,,,,,,,  ,,,                                                                                        
                                                                           ,cc,,,,,,,,,,,, , ,,,,,,,,,,, ,,,,                                                                                           
                                                                           ,ccc,,,,,,,,,,,,,,,,,,,,,,,,   ,,,                                                                                           
                                                                           ,ccc,,,,,,,,,,,,,,,,,,,,,,, , ,,,,                                                                                           
                                                                           ,ccc,,,,,,,,,, ,,,,,,,,,,,,,   ,,,,                                                                                          
                                                                           ,cc,,,,,,,,,,,,,,,,,cc,,,,,,,   ,,,                                                                                          
                                                                           ,cTsc,,,,,,,,,,,,,cccc,,,,,, , ,,,,                                                                                          
                                                                             ,cscc,,,,,,,,,,,cccc,,,,,,, ,,,,,                                                                                          
                                                                               ,ccc,,,,,,,,cccccc,,,,,, ,,,,,,                                                                                          
                                                                                 ,cc,,,,,  ,cc,,,,,,,, , ,,,,,,                                                                                         
                                                                                  ,,,,      ,cc,,,,,,,,,,,,,c,,                                                                                         
                                                                                             cc,,,,,,,,,,,,cc,                                                                                          
                                                                                             ,ccsccccccccc,,                                                                                            
                                                                                               ,,,,,,,,,,,                                                                                              
</PRE></DIV>
<DIV id=cat15><PRE>
                                          
                                                                   ,,c,                                                                                                                                 
                                                                 ,cCRRRCc,                                                                                                                              
                                                                 ,CRRAARRRCc                                                                                                                            
                                                                 ,TTCAACAARAAs,                                                                                                                         
                                                                 ,cccTARAAAARRAc,                                          ,cc,,                                                                        
                                                                 ,s,,,cTAAACAARRAc,   , ,                              ,csCARRRC,                                                                       
                                                                 ,c,,,,ccCAACACARRAAc   ,,,,,,,,,,           ,      ,cTARRRRRRRRc,                                                                      
                                                                 ,c,,,,,,csARAACAARRRAT,, ,,,,,,,,,,,,,,,,,,,     cCAARRAARATcsc,                                                                       
                                                                 ,cc,,,,,,,cTAAAAAARRAc,,, , ,     , ,,,,, ,  ,sAAARRAAAARCcc,,,,                                                                       
                                                                 ,sc,,,,,,,cccCRRRRTc,,,,,,,,,,     ,   ,,   cRRRRACACARAsc,,,,,                                                                        
                                                                 ,csc, ,,,,,,ccccc,,,,,,,,,,,            ,,  ,,ARRAAARATc,,,,,c,                                                                        
                                                                  ,cc,, ,,,,cc,,,,,,,,,,,          Trí   ,,    cARRRCc,,,, ,,,,                                                                        
                                                                   ,cc,, ,,,,,,,,,,,,,,,,,,                  ,   ,,ccc,,   ,,c,                                                                         
                                                                    ,cc,,,,,c,,,,,,,,,,,,,,,,,,,, ,,, ,,,,,,, ,,  ,,c,,   ,,cc,                                                                         
                                                                     ,ccc,,c,c,,,,,,,,,,,,,,,,,,,,,, , ,,,,, , , , ,,,   ,,c,                                                                           
                                                                      ccc,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,   ,,c,                                                                            
                                                                      ,c,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                             
                                                                    ,cc,,,,,,,,,,,,,,,,  ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                               
                                                                   ,ccc,,,,,,,,,,,,,,,,ccc,,,,,,,,,,,,,, ,,,,, ,,,,,,,,,                                                                                
                                                                 ,ccc,,,,,,,,,,,,,,,cTARRCTc,,,,,,,,,,,,,,,,,ccc,,,,,,,,,                                                                               
                                                                ,cTc,,,,,,,,,,,,,,cRRRc, cART,,,,,,,,,,,,,,cCACRRCc,,,,,,,                                                                              
                                                               ,cccc,,,,,,,,,,,,,,,sRRCccTRRRc,,,,,,,,,,,,TAT,,sRRRT,,,,,,,                                                                           
                                                             ,cccc,,,,,,,,,,,,,,   ,,TRRRRAAs, ,,,,, ,,,,,CAcccsCRRA,,,,,,,,                                                                        
                                                            ,TCTccc,c,c,,,,,,,,,,,,   ,csc,               ,cARRACTc,,,,,,,,,                                                                        
                                                            ,,,,,ccccccccccccc,,,,,,,,                      ,,csc,  ,,,,,,,,,,                                                                          
                                                                ccccccccccccccc,,,,,,,,,,         ,,,,, ,         ,,,,,,,,,,,,,,                                                                        
                                                               ,cTTTcccccccccccccc,,,,,,,  , , , ,cCs,     ,   ,,,,,,,,,,,,, ,,,                                                                  
                                                                  ,,cTTcccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccccc,                                                                       
                                                                     ,,ccscccccccccsccc,,,,,,,,,,,,,,,,,,,,,,,,,,ccccsscc,,,                                                                         
                                                                         ,,,,,,,,,,cccccccc,ccccccccc,,,,,,,,,,,,cccc,,                                                                                 
                                                                        ,,,, , ,   ,,csccccccccccccccccc,,,,,,cccc,,                                                                                    
                                                                        ,cc,,,,,,,, ,,ccccccccccccccccccccccccc,,                                                                                       
                                                                         ,,c,,,,,,,,,,,ccccccccccccccccssTcc,,                                                                                          
                                                                             ,,,,,,,,,,,,,,,,,ccccc,c,,                                                                                                 
                                                                             ,,c,c,,,,,,,,,,,,,,,,,,,,,,                                                                                                
                                                                            ,,,,,,c,,,,,,,,,,,,,,,,,,,,,,                                                                                               
                                                                           ,cc,,,c,,,,,,,,,,,,,,,,,,,,,,,                                                                                               
                                                                           ,ccc,cc,,,,,,,,,,,,,,,,,,,,,,,                                                                                               
                                                                            ,ccc,,,c,,,,,,,,,,,,,,,, ,,,                                                                                                
                                                                             ,,cc,,,,,,,,,,,,,, , , , ,,,,                                                                                              
                                                                               ,,,,,,,,,,,,,,, , , , , ,,,,                                                                                             
                                                                                ,,,,,,,,,,,,,,, ,,,,,,,,,,,                                                                                             
                                                                                ,ccccc,c,,,,,,,,,, , , ,,,,                                                                                             
                                                                             ,ccccccccc,,,,,,,,,,,,,, , ,,,                                                                                             
                                                                           ,cTcccccc,cc,,,,,,, ,,, ,,, , ,,,                                                                                            
                                                                          ,ccc,,ccccccc,,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                                         ,ccc,,,ccccccc,,,,,,,,,,, , ,,,,,,,                                                                                            
                                                                        cscc,,,,ccccccc,,,,,,,,,,,,,,,,,,,,,,                                                                                           
                                                                       ,csc,,,,,cccc,c,,,,,,   ,,,,, ,,, ,,,,                                                                                           
                                                                        ,ccc,,,,ccccc,,,,,,,, , , ,,,,, ,,,,,                                                                                           
                                                                        ,ccc,,,ccccc,,,,,,,,,,,,   ,,,,, ,,,                                                                                            
                                                                         ,Tcc,,ccccccccc,,,,,,,,, ,,,,,,,,,,                                                                                            
                                                                          ,ccccccccc,ccc,,,,,,,,,, , ,,,,,,,                                                                                            
                                                                           ,ccsccccccccc,,c,,,,,, , ,,,,,,,,                                                                                            
                                                                             ,cccccccccc,,,,,,,,,, , ,,,,,,,                                                                                        
                                                                              ,cccccccc,,,,,,,,,  ,,,,,,,,,,                                                                                         
                                                                               ,cccc,,,,,,,,,,,,,,,,,,,, ,,,                                                                                            
                                                                                ccc,,,,,,,,,,,,,, ,,,,,,  ,,,                                                                                           
                                                                               ,ccc,,,,,,,,,,,,, , ,,,,, ,,,,                                                                                           
                                                                               ,cc,,,,,,,,,,,,, ,,,,,,,   ,,,                                                                                           
                                                                                ,cc,,,,,,,,,,,,, ,,,,,,, ,,,,,                                                                                          
                                                                                 ,sc,,,,,,,,,,,,, ,,,,, ,,,,,,                                                                                          
                                                                                 ,csc,,,,,,,,,,,,,,,,,,, ,,,,,                                                                                          
                                                                                  ,csc,,,,,,,,,,,,,,,,, ,,,,,,                                                                                          
                                                                                   ,TTTcc,,,,,,,,,,,,, ,,,,,,,                                                                                          
                                                                                    ,cccTcc,,,,,,,,,,,,,,,,,c,                                                                                          
                                                                                       ,,ccTcc,,,,,,,,,,,ccc,,                                                                                          
                                                                                          ,,,,,cccccccccc,,                                                                                             
                                                                                                ,,,,                                                                                                                                              
 </PRE></DIV>
<DIV id=cat16><PRE>
                                           
                                                                  ,cTc,                                                                                                                                 
                                                                 ,TRRRACTc,                                                                                                                             
                                                                ,cCRRAARRRAT,                                              ,,,                                                                          
                                                                ,ccsCRAACARRRT,,                                       ,,TCRRAc,                                                                        
                                                                ,cc,ccAAACACRRRTc                                   ,,CARRRRRRC,,                                                                       
                                                                 ,cc,ccTARAACAARAAT,    ,,,,,,,,,,       , , ,    ,cTRRRRRRRCsc,                                                                        
                                                                 ,c,,,,ccCRAACACARRRCc,,, ,,,,,,,,,,,,,,,,,,,   cTAARAAAAcccc,,,                                                                        
                                                                 cc,,,,,,ccAAACACAARRRC,,, ,,,      ,,,,,,  ,cARARRAARACcc,,,,,                                                                         
                                                                 ,c,,,,,,,ccTARAARRTcc,,,,,,,         ,,  , ,TRRRAAARCcc,,,,,,,                                                                         
                                                                 ,cc,, ,,,,,,cCAccc,,,,,,,,,,,            ,,  ,CRRRAcc,,,, ,,,                                                                          
                                                                 ,csc,, ,,,,ccc,,,,,,,,,,,,,,     Trí          ,cAAT,,,  ,,c,                                                                          
                                                                  ,cc,,  ,,,,,,,,,,,,,,,,,,,                      ,cc,,  ,,c,,                                                                          
                                                                   ,sc,,,,,,,,,,,,,,,,,,,,, ,,,,, ,,,,,,,,,,,,,   ,,,,  ,,cc,                                                                           
                                                                    ,sc,,,,,,,,,,,,,,,,,,, , , ,,, , ,,,,, ,,, , ,,,   ,,c,                                                                             
                                                                     ,ccc,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                              
                                                                      ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                               
                                                                      ,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                     ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,,,,, ,,,,,,,,,                                                                                
                                                                   ,ccc,,,,,,,,,,,,,,,,cTCCTc,,,,,,,,,,,,,,,,,ccscc,,,,,,                                                                               
                                                                  ,cc,,,,,,,,,,,,,,,,cARATcCAAc,,,,,,,,,,,,,,CRACRAT,,,,,,,                                                                             
                                                                 ,ccc,,,,,,,,,,,,,,,cARRc  ,CRAc,,,,,,,,, ,cCAc,,CRRT,,,,,,,                                                                         
                                                                ,cccc,,,,,,,,,,,,,,,,,cAACCCARA, , ,,, , ,,cAAccCRRRc,,,,,,,                                                                       
                                                              ,cTcc,,,,,,,,,,,,,,,    ,,CRRTccc   ,         ,cARRATc, ,,,,,,,                                                                       
                                                             ,sCscc,,,,,,,,,,,,,,,,,,    ,,,,                 ,,c,   ,,,,,,,,,,,                                                                        
                                                             ,,,,cccccccccccccc,c,,,,,,,,       , ,   ,   ,       ,,,,,,,,,,  ,                                                                         
                                                                 ,scccccccccccccc,,,,,,,,,,,   , ,  ,CAc   ,     ,,,,,,,,cc,                                                                         
                                                                 cCTscccccccccccccccc,,,,,,,, ,,,,, ,cc,,,,,,,,,,,,,,cccc,,                                                                         
                                                                  ,,,ccTccccccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,cccc,                                                                             
                                                                       ,,cTTccccccccccccccccc,,,,,,,,,,,,,c,,,,,,,cc,                                                                                   
                                                                           ,cTTTcccccccccccccccccccccccccc,,,,ccc,,                                                                                     
                                                                               ,,cccTACcccccccccccccc,,,ccccccc,,                                                                                       
                                                                                   ,ccccccccccccccc,,,,,,,,,,,                                                                                          
                                                                                   ,c,,,,,,,,,,,cc,,,,,,,,,,,                                                                                           
                                                                                  ,,cc,,,,,,,,,,,,,,,,,,,,,,,,                                                                                          
                                                                                 ,cc,,,,,,,,, ,,,,,,,,,,,,,,,                                                                                           
                                                                                 ,cc,,,,,, , , ,,,,,   ,,,,,,                                                                                           
                                                                                 ,ccc,  , ,,, , ,,,   ,,,,,,                                                                                            
                                                                                 ,cTc,   , , ,,,,,   ,,,,,,                                                                                             
                                                                                 ,sTc,,   , , , , ,,,,,,,,,                                                                                             
                                                                                 ,ccc,,,,,,,,,   ,,,,,,,,                                                                                               
                                                                           ,cc,  ,ccccc,,,,,,,,,,,,cc,,   ,                                                                                             
                                                                        ,,ccc,,  ,cc,,,ccccc,,,,,cc,,   ,,,,                                                                                            
                                                                       ,scc,,,   ,,,,,,,ccccccccc,,,  , ,,,,                                                                                            
                                                                      ,scc,,,,  ,,cc,,,,,,,,,,,,,, ,,, ,,,,,                                                                                            
                                                                    ,,cc,,,,,,  ,,,,,,,,,,,,,,,,,,,,,,,,, ,,,                                                                                           
                                                                   ,,c,,,,,,,,  ,c,,,,,,,,,,,,,,,,,,,,,,,, ,,                                                                                           
                                                                   ,c,,,,,,,c,, ,cc,,,,,,,,,,,,,,,,,,,, ,,,,,                                                                                           
                                                                   ,,c,,,,,,,c,,,c,,,,,,,,,,,,,,,,,,,, , ,,,,                                                                                           
                                                                    ,cc,,,,,,,,,,c,,,,,,,,,,,,,,,,,,, , ,,,,,                                                                                           
                                                                    ,ccccc,,,,,,,,,c,,,,,,,,,,,,,,,,,,,, ,,,                                                                                            
                                                                    ,,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                           
                                                                      ,,cccccccccccc,,,,,,,,,,,,   , ,,,,,,,                                                                                            
                                                                        ,cccccccccc,,,,,,,,,,,,,,,, ,   ,,,,                                                                                            
                                                                          ,,cTscccc,,,,,,,,,,,,,,,,,,  ,,,,                                                                                         
                                                                              ,cccccc,,,,,,,,,,,,,,,,   ,,,                                                                                           
                                                                               ,cccc,,,,,,,,,,,,,,,,,  ,,,,                                                                                             
                                                                                cTccc,,,,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                                                ,cscccc,,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                                                 ,c,,,,,,,,,,,,,,,,,, , ,,,,                                                                                            
                                                                                     ,,,,,,,,,,,,,,,,, , ,,,                                                                                            
                                                                                    ,,c,,,,,,,,,,,,,,,, ,,,,                                                                                            
                                                                                   ,ccc,,,,,,,,,,,,,,, ,,,,,,                                                                                           
                                                                                   ,ccc,,,,,,,,,,,,,, ,,,,,,,                                                                                           
                                                                                    ,csc,,,,,,,,,,,,,, ,,,,,,                                                                                           
                                                                                     ,ccccc,,,,,,,,,,,,,,,c,,                                                                                           
                                                                                      ,cscc,,,,,,,,,,,,,cc,,                                                                                            
                                                                                       ,cscc,,,,,,,,,,,cc,                                                                                              
                                                                                        ,cTTccc,,,,,,,,                                                                                                 
                                                                                          ,,ccssTcc,,                                                                                                   
                                                                                              ,,,c,,,                                                                                                                                            
</PRE></DIV>
<DIV id=cat17><PRE>
                                          
                                                                           ,CAAc,                                                                                                                       
                                                                          cRRRRRACc,                                                                                                                    
                                                                         ,cTCARAARRAc                                                                                                                   
                                                                         ,ccccCAAAARRC,,  ,,                                                                                                            
                                                                         ,ccccCRRCACARRT,                                 ,sCTc,                                                                        
                                                                         ,cc,,cTARAACAARAT,    , ,                     ,cCRRRRRT,                                                                       
                                                                         ,c,,,,ccTRAACAARRAs,,  ,,,,,,,,,     ,,,    ,CARRRRRRCc,                                                                       
                                                                         ,cc,,,,,ccCAACACARRRC,, , ,,,,,,,,, ,,,  ,cTRRRRRCccsc,                                                                        
                                                                         ,c,,,,,,,cccCRAARRCsc,,,,,,,         , ,,ARRRAAAcc,,,,,                                                                        
                                                                         ,sc,, ,,,,,cARRscc,,,,,,,,,     , , ,   ,,CRRATc,,,,,,                                                                         
                                                                         ,sc,   ,,,,ccc,,,,,,,,,,,, ,,,             ,TRT,,,,cc,                                                                         
                                                                          ,c,,   ,,,,,,,,,,,,,,,,,,,,,     Trí      ,,,,,,,c,                                                                          
                                                                           ,c,   ,,,,,,,,,,,,,,,,,,,,,,,,,,   ,       ,  ,,cc,                                                                          
                                                                           cc,,,,,,,,,,,,,,,,,,,,,,,,, , ,,,,,,,,,,,    ,,cc,                                                                           
                                                                          ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, , ,,,                                                                             
                                                                         ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                         ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                        ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,, ,,,,,,,,,,,,,,, ,,,                                                                              
                                                                        ,cc,,,,,,,,,,,,,,,,,,,,,,cTTTc,,,,,,,,,,,,,,,,c,,,                                                                              
                                                                       ,cccc,,,,,,,,,,,,,,,,,,,sRRTsCRRc,,,,,,,,,,,,TRRRc,                                                                              
                                                    Trí                  ,cccc,,,,,,,,,,,,,,,,,,,TRRT, ,TRTc,,,,,,, ,cCTcCRRc,                 Trí                                                         
                                                                     ,cscc,,,,,,,,,,,,,,,,,,,,,TRRATCRRT,, ,,,   ,TAc,,ARs,                                                                         
                                                                    ,cccc,,,,,,,,,,,,,,,,,,,,   ,TARRCc,    ,     ,cRRRCc,,,                                                                         
                                                                   cTCcc,,,,,,,,,,,,,,,,,,,,,,,   ,,,              ,,Tc, ,,,,,                                                                          
                                                                   ,,,ccccc,,,,,,,,,,,,,,,,,,,,,,,,     , ,             ,,,,,,,                                                                         
                                                                      ,ccccccc,,,,,,,,,,,,,,,,,,,,,,   , ,  ,sAc      ,,,,,                                                                         
                                                                      ,ccsccccccccccccccccccc,,,,,,,, ,,,,,,,,c,,,,,,,,,c,,                                                                        
                                                                        ,,cTTsccccccccccccccccccc,,,,,,,,,,,,,,,,,,,,,cc,                                                                            
                                                                           ,,cTscccccccccccccccccc,,,,,,,,,,,,,,,,,,c,,                                                                                 
                                                                               ,cTssccccccccccccccccccccccccccc,,ccc,                                                                                   
                                                                                  ,,ccsccccccccccccccccccccccccccc,,                                                                                    
                                                                                        ,ccccc,,,c,c,ccccccssscc,,                                                                                      
                                                                                      ,,ccccc,,,,,,,,,,cc,,,,                                                                                           
                                                                                   ,ccccccccc,,,,,,,,,,,,                                                                                               
                                                                                   ,Tcccccccc,,,,,,,,,,,,,                                                                                              
                                                                                  ,cccccccccc,,, , ,  ,,,,,                                                                                             
                                                                                 ,ccccc,ccccc,,,      ,,,,,,                                                                                            
                                                                                 ,cccc,,,cccc,,, ,,,   ,,,,,     ,                                                                                      
                                                                                ,cccccc,,,,,,,,,, ,        ,,,,,,,,,,,,                                                                                 
                                                                                ,ccc,,,,,,,,,,,,,, ,         ,,,,, ,,,,,                                                                                
                                                         ,,,,                   ,,cc,,,,,,,,c,c,,,, ,   ,   ,,, ,,,,,,,,                                                                                
                                                         ccc,,,                  ,cc,,,,,,,,,,ccc,,,,,   ,   ,  ,,,, ,,,                                                                                
                                                        ,cc,,,c,,                 ,,c,,,,,,,,,,cccc,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                        ,,,,,,,c,,                 ,c,,,,,,,,,,,,,cccccc,c,c,,,,cccccc,                                                                                 
                                                       ,,,,,,,,,,,,                ,c,,,,,,,,,,,,,,,,,,,,,c,c,,,,,,                                                                                     
                                                       ,cc,,,,,,,,,,              ,,c,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                          
                                                       ,ccc,,,,,,,,,              ,,,,,,,,,,,,,,,,,,,,,,,,, ,,                                                                                          
                                                       ,ccc,,,,,,,,,,            ,,c,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                          
                                                       ,ccc,,,,,,,,,,,           ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                        ,ccc,,,,,,,,,,,,         ,cc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                           
                                                         cTcc,,,,,,,,,,,,,       ,ccc,,,,,,,,,,,,,,,,,,,,,,,,                                                                                           
                                                          ,ccc,,,,,,,,,,,,,,    ,ccc,ccc,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                            ,cccc,,,,,,,,,,,,,,,ccccccccc,,,,,,,,,,,,,,,, , ,                                                                                           
                                                              ,,cccc,,,,,,,,,,cccccccc,ccc,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                  ,,ccccccccccccccscccccccc,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                      ,,,,,,,,,,,,,cccccccccc,,,,,,,,,,,,,,,,,,                                                                                         
                                                                                    ,cscccccccc,,,,,,,,,,,,,,,,                                                                                         
                                                                                     ,ccccccccc,,,,c,,,,,,,,,,,,                                                                                        
                                                                                   ,ccccc,ccccc,,,,,,,,,,,,,,,,                                                                                         
                                                                                 ,,ccccc,,,ccc,,,,,,,,,,,,,,,,,,                                                                                        
                                                                                ,cscc,c,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                                cscc,,,,,,,c,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                                ,cccc,,,,,cc,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                                 ,cTcc,,,,cc,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                                   ,csscccc,c,,,,,,,,,,,,,,,,,,                                                                                         
                                                                                     ,,ccccssc,,,,,,,,,,,,,,,,,                                                                                         
                                                                                        ,,,ccsTTscc,,,,,,,,,,,,                                                                                         
                                                                                            ,,,cccsTcc,,,,,,,,,                                                                                         
                                                                                                  ,,csTsc,,,,,,,                                                                                        
                                                                                                     ,,ccsTCTTc,                                                                                        
                                                                                                          ,,,,,                                                                                         
</PRE></DIV>
<DIV id=cat18>
<PRE>
  
                                                                                      ccc,                                                                                                              
                                                                                    ,CRRRT,                                                                                                             
                                                                                   ,TRRARRAc,                                                                                                           
                                                                                   ,sTTAAARRT,                                                                                                          
                                                                                   ,ccTARCAARAc                                                                                                         
                                                                                  ,ccc,cCAAAARCc   ,                                                                                                    
                                                                                  ,c,,,cARACAARAT,  ,,,                   ,,,,                                                                          
                                                                                 ,cc,,,,cTAACAARRAc,   ,,,             ,cARRAc                                                                          
                                                                                  c,,,,,,,cTAAAARRRC,   ,,,,,,, ,,,  ,ARRRRRAc                                                                          
                                                                                 ,cc,,,,,,,TARARRAcc,,,,,,,,,,   , ,CRRRAcccc,                                                                          
                                                                                ,cc,, ,,,,cCRsccc,,,,,,,,,, ,      ,ARRTc,c,,                                                                           
                                                                             ,,ccTc,   ,,,cc,,,,,,,,,,,,,,,,,,,,     ,cc,,c,                                                                            
                                                                            ,cTcccc,,   ,,,,,,,,,,,,,,,,,,,,,,,  HuÃ¡ÂºÂ¥    ,,c,                                                                            
                                                                            ,cccccc,,, ,,,,,,,,,,,,,,,,,,,,,,, ,   ,    ,sc                                                                             
                                                                           ,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,     ,,,                                                                             
                                                                          ,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,,, ,                                                                                
                                                                         ,scccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                        ,ccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                         ,scccc,,,,,,,,,,,,,,,,,,,,,,,,,,   ,,,,,,,,,,,,,,,                                                                             
                                                                         ,cccccccc,,,,,,,,,,,,,,,,,,,,,,,ccc,,,,,,,, ,,,,,                                                                              
                                                                         ,cccccccc,,,,,,,,,,,,,,,,,,,,cTAAAACc,,,,,,, ,cTc,                                                                           
                                                                         ,,ccccccc,,,,,,,,,,,,,,,,,,,cCRT,,cRA,,,,,,,,cCRA,                                                                       
                                                                          ,cccc,c,,,,,,,,,,,,,,,,,,,,,sRRccTRC,,,,, ,,c,sRC                                                                          
                                                                         ,cccccc,,,,,,,,,,,,,,,,,,,,  ,cRRAsc,   ,   cARAAc                                                                             
                                                   Trí                     ccccc,,,,,,,,,,,,,,,,,,,,,,,  ,cc,         ,TAC,                                                                              
                                                                           csccc,,,,,,,,,,,,,,,,,,,,,,,,,               ,,                                                                         
                                                                           ,ccc,,,,,,,,,,,,,,,,,,,, ,,,,,,, ,    ,cc,   ,,                                                                          
                                                                            ,sTcccccccccccccccccccc,,,,,,,,, , ,,,,c,  ,,                   Trí                                                         
                                                                              ,cTsscccccccccc,,,c,ccc,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                                ,ccTcccccccccccc,c,,,,,,,,,,,,,,,,,,,c,,                                                                                
                                                                                  ,,ccscccccccccccccccccccc,,,,cccccc,,                                                                                 
                                                                                       ,ccccccccccccccccccccccccccc,,                                                                                   
                                                                                  ,,,,,,,,,,,,ccccc,,,,,,cccsscc,,                                                                                      
                                                                                 ,cc,c,,,,,,,,,ccc,,,,,,,,,,                                                                                            
                                                                                ,cccc,c,,,,,,,cccc,,,,,,,,,                                                                                             
                                                                                cTccc,,,,,,,,,ccc,,,,, , ,,                                                                                             
                                                                               ,csc,,,,,,,,,,,,cc,,,,   , ,                                                                                             
                                                                               ,cscc,,,,,,,,,,,,,,,,,, ,,,                                                                                              
                                                                              ,,cccc,,,,,,,,,,,,,,,,,,,                                                                                                 
                                                                               ,csc,,,,,,,,,,, ,,c,,,,,,,,                                                                                              
                                                                               ,csc,,,,,,,,,,,  ,ccc,,,,, ,                                                                                             
                                                         ,cc,,                   ,cc,,,,,,,,,,,, ,ccc,,,,, ,,,                                                                                          
                                                         ,TTTcc,,                 ,c,,,,,,,,,,,,  ,,c,,,,,, , ,,,,                                                                                      
                                                          ,csccccc,,,,            ,,,,,,,,,,,,,,,,,,,cc,,,,, , ,,,,,,,                                                                                  
                                                           ,ccccccccccc,         ,,,,,,,,,,,,,,,,,,,,,ccc,,,,   , ,,,,,                                                                                 
                                                            ,ccc,ccc,ccc,,,      ,c,,,,,,,,,,,,,,,,,,,,ccc,,,, ,   ,,,,                                                                                 
                                                             ,ssccccccccc,,,,    ,c,,,,,,,,,, ,,,,,,,,,,,ccc,,,,,,,,,,,                                                                                 
                                                              ,csscccccc,,,,,,   ,cc,,,,,,,,,,,,,,,,,,,,,,,ccccccccc,                                                                                   
                                                                ccscccccc,,,,,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                 ,cssccccc,,,,,,,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                   ,csccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                     ,csccc,,,,,,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                       ,,cccc,,,,,,,,,cc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                          ,ccccc,,,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                             ,,,ccccc,,,,,cccccccc,,,,,,,,,,,,,,,,,                                                                                   
                                                                                ,ccccccccccccccccccc,,,,,,,,,,,,,,,,                                                                                    
                                                                                cscccccccccccccccccc,,,,, , ,,,,,,,,                                                                                    
                                                                               ,cTcccccccccc,,,,,,cc,,,,,, ,,,,,,,,,                                                                                    
                                                                               ,cc,,ccccccc,,,,,  cc,,,,,,, ,,,,,,,,,                                                                                   
                                                                              ,ccc,,,,       ,,, ,cc,,,,,,,, ,,,,,,,,,                                                                                  
                                                                              ,ccc,,,,      ,,,,,,ccc,,,,,,,,,,,,,,,,,                                                                                  
                                                                              ,ccc,,,, , , ,,,,,,,,c,,,,,,,,,,,,,,,,,,                                                                                  
                                                                              ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                             ,,c,,,,,,,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                              ccccsTTTCTccTCTccc, ,,c,,,,,,,,,,,,,,,,,,                                                                                 
                                                                              ,TCARATCCCccTATccT,  ,csc,,,,,,,,,,,,,,,,                                                                                 
                                                                               ,CRRCccTcccTTTTc,   ,cTCTTcscccccccccTc,                                                                                 
                                                                                 ,CRRRRRTTRRAc,      ,,,,,,,,,,,,,,,,,                                                                                  
                                                                                   ,,,,,,,,,                                                                                                                                                     
</PRE></div>
<DIV id=cat19>
<PRE>
                                          
                                                                                               ,,,                                                                                                      
                                                                                              ,ARC,                                                                                                     
                                                                                             ,CRRAc,                                                                                                    
                                                                                           ,,cTAARAc                                                                                                    
                                                                                          ,,ccsCAARs,                                                                                                   
                                                                                         ,ccc,cAAAARC,                                                                                                  
                                                                                        ,ccc,,cARCARRc  ,            Trí                                                                                   
                                                                Trí                     ,cc,,,,cTACAARs, ,                                                                                              
                                                                                      ,,ccc,,,,cTAACARAc, ,          ,AAc                                                                               
                                                                                    ,,,cccc, ,,cTRAAARAT,, ,,,,,,, ,CRRRc                                                                               
                                                                                  ,,,,ccccc,  ,,ccARAsccc,,,,,,,  ,TRRRT,                                                                               
                                                                               ,,ccccccc,cc,  ,,cccc,,,,,,,,,,,, , ,cTc,                                                                                
                                                                              ,cccccc,,,,,,   ,,,,,,,,,,,,,,,,,,,    ,,                                                                                 
                                                                             ,ccccc,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,, Ren                                                                                    
                                                                            ,cccccc,,,,,c,,,,,,,,,,,,,,,,,,,,,,,, ,                                                                                     
                                                                           ,cccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,,,,,,,                                                                                  
                                                                          ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                         ,sccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                         ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                         ,cccc,,,,ccccccc,,,,,,,,,,,,,,,,,,,,,   ,,,,,,,,,                                                                              
                                                                         ,cccccc,,cccccc,,,,,,,,,,,,,,,,,,,,,,ccc,,,,,,,,                                                                           
                                                                          ,ccccc,,cccccc,,,,,,,,,,,,,,,,,,,,cARACCc,,,,,,                                                                          
                                                                          ,cscc,,,ccc,cc,,,,,,,,,,,,,,,,,,,cRRA,cRC,, ,cc                                                                           
                                                                           cscc,,,,c,,,,,,,,,,,,,,,,,,,,,,,,TRRAAAc, ,,cc                                                                               
                                                                           ,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,  ,cART,   ,cCc                                                                               
                                                                            ,ccccccccc,,,,,,,,,,,,,,,,,,,,,,  ,,     ,cc,                                                                          
                                                                             ,cccccccc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                              cTcccccccc,,,,,c,c,c,,,,,,,  ,,,,,   ,,,,,                                                                            
                                                                              ,,ccccccccccccccccccccccccc,,,,,,,,,,,,,,                                                                                 
                                                                                 ,cccccccccccccc,ccc,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                                ,,cccccccccccccccccc,,,,,,,,,,,,,,ccc,,                                                                                 
                                                                                ,,,ccccccccccccccccccccccc,,,,,,ccccc,                                                                                  
                                                                                ,,,,c,,,,,,cccccccccccccccccccccccc,                                                                                    
                                                                               ,,,,,,,,,,,,,,,,,,,,cc,,,,ccccc,,                                                                                        
                                                                             ,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                           
                                                                            ,ccccc,,,,,,,,,,,,,,,ccc,,,,,,,,                                                                                            
                                                                            ,cscc,,,,,,,,,,,,,,,ccc,,,, , ,,                                                                                            
                                                                            ,ccccc,,,,,,,,,,,, ,,c,,,, ,   ,                                                                                            
                                                                           ,ccsccc,,,,,,, , ,   ,,,,,,, ,,                                                                                              
                                                                            ,csccc,,,,,, ,,,,, ,,c,,,,,,                                                                                                
                                                                             ,cssc,,,,, , ,,,,  ,cc,,,,,, , ,,                                                                                          
                                                                              ,ccc,,,,,, ,,,,, ,,,cc,,,,,, ,                                                                                            
                                                               ,cc,,,,,         ,,,,,,, ,,, ,,,   ,cc,,,,,,,, , ,                                                                                       
                                                               ,TCTscsccc,,,,   ,c,,,,,  ,,, ,,,,, ,,cc,,,,, ,,,,,,,,,,,,                                                                               
                                                                ,,csTcccccc,cc,,,,,,,,,,, ,,, ,,,,, ,,ccc,,,,   ,,,,,,,,,,                                                                              
                                                                  ,ccscc,,,,,c,c,,,,,,,,,  ,,,,,,,,,  ,,cc,,,,,,     ,,,,,                                                                              
                                                                    ,csc,,,,,,,,,,,,,,,,,,, , , , , ,  ,,ccc,,,,, ,,,,,,,                                                                               
                                                                      ,ccc,c,c,,,,,,,,,,,,, ,, , ,,,,,,,,,,cccc,,,,ccc,,                                                                                
                                                                       ,cTccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,c,,,,                                                                                 
                                                                        ,,cTcccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                           ,csccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                             ,cTcc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                               ,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                 ,ccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                                ,cccccccccc,ccc,,,cc,,,,,,,,,,,,,,,,                                                                                 
                                                                                ,ccccccccccccccccscccc,c,,,,,,,,,,,,,                                                                                   
                                                                                csccccccccccccc,  ,,cc,,,,, , ,,,,,,,                                                                                   
                                                                               ,csccccccccccccc,   ,cc,,,,   ,,,,,,,,,                                                                                  
                                                                               ,cscccccccccccccc, ,,cc,,,,, ,,,,,,,,,,                                                                                  
                                                                               ,cTcccccccccccc,,,,,,cc,,,,,, ,,,,,,,,,                                                                                  
                                                                                 ,ccc,,,,,c,,,    ,,cc,,,,, ,,,,,,,,,,,                                                                                 
                                                                                 ,cccc,,,,,,,, , ,,,cc,,,,,,,,,,,,,,,,,                                                                                 
                                                                                  ,cccc,,,,,,,,,,,,,cc,,,,,,, ,,,,,,,,,                                                                                 
                                                                                  ,ccc,,,,,,,,csTTCTc,,,,,,,,,,,,,,,,,,,                                                                                
                                                                                  ,ccc,,,,ccccTARRRTc,,,,,,,,,,,,,,,,,,,                                                                                
                                                                                  ,cccccccccccccc,  ,cc,,,,,,,,,,,,,,,,,                                                                                
                                                                                  ccccc,c,ccccsc,    ,cc,,,,,,,,,,,,ccc,                                                                                
                                                                                 ,sTcccTTTCRAc,      ,cTTTscccccccccccc,                                                                                
                                                                                  csscARRRRCc          ,,,,,,,,,,,,,                                                                                    
                                                                                   ,cc,cc,                                                                                                                                                        
</PRE>
</DIV>
<DIV id=cat20>
<PRE>
                                         
                                                                                                                           ,                                                                            
                                                                                                                      ,,,,,,                                                                            
                                                                                                                   ,,,,,,,,,                                                                            
                                                                                                                 ,,,,,,,,,,                                                                             
                                                                                                               ,,,,,,,,,,,                                                                              
                                                                                                     ,,,,   ,,,,,,,,,,,,,                                                                               
                                                                                             ,,, ,,,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                                                          ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                                       ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                                    ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                                   ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                          Trí    ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,, Trí                                                                                
                                                                                 ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                                                ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                              ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                              ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                              ,cc,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                              ,cc,,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                              ,ccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                              ,ccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                                              ,Tcccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                                              ,cccccccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                                               ,ccccccccccccccccccc,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                                cccccccccccccccccccc,,c,,,,,,,,,,,,,,,,,,                                                                               
                                                                                cTcccccccccccccccccccccc,,,,,,,,,,,,,,,,,                                                                          
                                                                                ,cccccccccccccccccccccccc,,,,,,,,,cc,,,,,                                                                         
                                                                                ,csTcccccccccccccccccc,c,cccc,,,,c,ccc,,,                                                                          
                                                                                  ,cTsccccccccccccccccccccccccc,,,,,,c,,                                                                                
                                                                                     ,cscccccccccccccccccccccccc,c,,,,,                                                                                 
                                                                                ,,,    ,csccccccccccccccccccccccccccc,                                                                                  
                                                                            ,,,,,,,,,, ,,,,,,,,,,,,,,ccccccccccccccc,                                                                                   
                                                                           ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccTsc,                                                                                    
                                                                         ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                        ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                      ,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                      ,,c,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                      ,,,,,,,ccc,,,,,,,,,,,,,,,, , ,,,,,,,,, , ,,                                                                                       
                                                                      ,,cc,cccccc,,,,,, , ,,,,, , , ,,,,,,, ,,,,,                                                                                       
                                                                       ,cTcccsccc,,,,,,,,, ,,,,,,, , ,,,,,,,,,,,,,                                                                                      
                                                                        ,,,,,,cccc,,,,,,,,, ,,,,,,, ,,,,ccc,,,,,,,,                                                                                     
                                                                              ,ccc,,,,,,,,,,,,,,,,,, , ,,,c,,,,,,,                                                                                      
                                                                        ,,    ,ccc,,,,,,, ,,, ,,,,, , , ,,,,,,,,,,,,                                                                                    
                                                                       ,cTcc,,,ccc,,,,,,,,   ,,,,,,, ,,,,,,,,,,,,,,,,                                                                                   
                                                                       ,cccccc,,,,,,,,,,,,,   , , ,,,,,,,,,,,c,,,,,,,                                                                                   
                                                                         ,cccc,,,,,,,,,,,,,,   , , ,,,,,,,,,,,cc,,,,,,                                                                                  
                                                                          ,cccc,,,,,c,,,,,,,,,,,, ,,, ,,,,,,,,,cc,,,,,,,,                                                                               
                                                                            ,ccc,,,,,,,c,c,c,,,,,,,, , ,,,,,,,,,cc,,,,,,                                                                                
                                                                             ,ccc,,,,,,,,,,,c,,,,,,,,,,,,,,,,,,,,,ccc,,,                                                                                
                                                                               ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                                 
                                                                                ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                 ,cccc,c,,,,,c,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                 ,ccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                                 ,cccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                                                ,,ccc,,,,,c,,,,cccc,,,,,,,,,,,,,,,,,,                                                                              
                                                                                ,cccccc,,,,,,ccccccc,ccc,c,,,,,,,,,,,,                                                                                  
                                                                                csccccccc,,,cccc,,ccccc,,,,,,,, ,,,,,,                                                                                  
                                                                               ,cTcccccccccccccc,   cc,,,,,,   ,,,,,,,                                                                                  
                                                                               ,cscccccccccccccc,   cc,,,,, , ,,,,,,,,,                                                                                 
                                                                                ,ccc,c,ccccccc,,,, ,cc,,,,,, , ,,,,,,,,                                                                                 
                                                                                 ,ccc,,,,,,,,    ,,,cc,,,,,,,,,,,,,,,,,                                                                                 
                                                                                 ,cccc,,,,,, ,     ,cc,,,,,,,,,,,,,,,,,,                                                                                
                                                                                  ccccc,,,,,,,, ,,,,cc,,,,,,,,,,,,,,,,,,                                                                                
                                                                                  ,ccccc,,,,,,,,,,,ccc,,,,,,,,,,,,,,,,,,                                                                                
                                                                                  ccccc,,,,,,,,cTCsccc,,,,,,,,,,,,,,,,,,,                                                                               
                                                                                 ,cccccccccccccTAC, ,,c,,,,,,,,,,,,,,,,,,                                                                               
                                                                                 ,ccccccccccTTT,,    ,cc,,,,,,, ,,,,,cc,,                                                                               
                                                                                ,ccccTCAAATcc,,      ,,TTTccccccccccccc,                                                                                
                                                                                 ,cARRRCCc,            ,,,,,,,c,,,,,,                                                                                   
                                                                                  ,cc,                                                                                                                                                             
</PRE>
</DIV>
<DIV id=cat21>
<PRE>
                                          
                                                                                             ,,,,,                                                                                                      
                                                                                  ,,,,,,,,,,,,,,,,,,,,,,                                                                                                
                                                                     ,           ,,,,,,,,,,,,, ,,,,,,,,,,,,,,,  ,,,,,,                                                                                  
                                                                 ,,,,,,,,,,,,   ,,,,,,,,, ,,, ,,, ,   ,,,,,,,,,,,,,,,,,                                                                                 
                                                      Trí      ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,  Trí                                                                              
                                                                ,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,, , ,,, , ,,,,,,,,,,,,,,,,                                                                                
                                                                 ,c,,,,c,,,c,,,,,,,,,,,,,,,,,, ,,,,, , ,,,,,,,,,,,,,,,,,                                                                                
                                                                 ,,,c,,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                                  ,ccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                                  ,cTcccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                    ,cscccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                     ,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                       ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                      ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                                    ,ccc,,,,,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                 
                                                                   ,csc,,,c,,,,,,,,,c,c,c,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                       
                                                                  ,ccccccccccc,c,c,ccccccccc,c,ccc,,,,,c,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                                 ,ccc,c,ccccccccccc,c,ccccccccccccc,c,ccc,,,,,,,,,,,,,,,,,,,,,,,                                                                        
                                                               ,cTccccccc,cc,c,cccccccccccccccccccccccccc,,,,,,,,,,,,,,,,,,,,,                                                                    
                                                              cCCTscccccccccccccccccccccccccccccccccccc,,,,,,,,,c,,,,,,,,,,,,                                                                     
                                                              ,,,,,ccccccccccccccccccccccccccccccccc,cc,,,,,,,,cccccccccc,,,                                                                         
                                                                  ,cCsscccccccccccccc,,,,,c,c,c,,,,,,,,,,,ccc,ccccccsc,,,                                                                               
                                                                     ,,csTcccccccc,,,,,,,,,,,,,,,,,,,,,,,ccccccccTcc,                                                                                   
                                                                          ,cTcsc,,,,,,,,,,,,,,,,,,,,,,,,c,cccccsc,                                                                                      
                                                                             ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,cccc,                                                                                        
                                                                              ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                             ,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                            ,cc,,,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                           ,,c,,,,,,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                           ,c,,,,,,,ccc,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                           ,ccc,,,,,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                            ,cscc,,cccc,,,,,      , , , ,,, ,,,,,,,,,,                                                                                  
                                                                             ,cccccccc,,,,,,   ,,,   , , , ,,,,,,,,,,,                                                                                  
                                                                              ccccccccc,,,,,,,,,,,, ,   , , ,,,,,,,,,,,                                                                                 
                                                                              ,ccccccc,,,,,,,,,ccc,,,,,,     ,,,,, , ,                                                                                  
                                                                               ,cccccc,,,,,,, ,cc,,,,,,,,,,   ,,,,,,,,,                                                                                 
                                                                               ,,ccccc,,,,,,  ,cccc,,,,,,,,,,  ,,,,,,,,                                                                                 
                                                                                 ,ccc,,,,,,,, ,,ccc,,,,,,,,,,,,,,ccc,,                                                                                  
                                                                                 ,cccc,,,,,,,, ,,ccc,c,,,,,,,,,,,ccc,                                                                                   
                                                                                 ,ccccc,,,,,,,, ,,ccc,,,,,,,,,,,,,,,                                                                                    
                                                                                 ,ccc,,,,,,,,, , ,cccc,,,,,,,,,,,,,,                                                                                    
                                                                                 ,ccc,,,,,,,,,,   ,cccc,,,,,,,,,,,c,,                                                                                   
                                                                                 ,cccc,,,,,,,,,,  ,,cccc,,,,,,,,,,,,,                                                                                   
                                                                                 ,ccccc,,,,,,,,,,,,,cccccc,,,,,,,,,,,                                                                                   
                                                                                 ,cccc,,,,,,,,,,,,,,,ccccc,,,,,,,,,,,                                                                                   
                                                                                  cccc,,,,,,,,,,,,,,,,cccc,,,,,,,,,,,                                                                                   
                                                                                 ,cccc,,,,,,,,,,,,,,,,,ccc,c,,,,,,,,                                                                                
                                                                                ,ccccccc,,,,,,,,,,,,,,,,ccc,,,,,c,,,                                                                                 
                                                                               ,cscccccc,,,,,,,,,cccccccccccccccc,,,                                                                                    
                                                                              ,sscccccccc,,,,,ccccccccccccccccc,,,,,                                                                                    
                                                                              ,Tcccccccccccccccccccccccc,,,,,,,, ,,,,                                                                                   
                                                                              ,cc,,,,,,ccccccccc,,,,ccc,,,,,    ,,,,,,                                                                                  
                                                                              ,sc,,,,,,, ,,,,,,,   ,cc,,,,,,   , ,,,,,                                                                                  
                                                                             ,ccc,,,,,,     ,,,,   ,cc,,,,, ,,, ,,,,,,,                                                                                 
                                                                             ,cc,,,,,  ,   ,,,,,   ,ccc,,,,, ,,,,,,,,,,,                                                                                
                                                                             ,ccc,,,,,, , ,,,,,,,  ,ccc,,,,,,,, ,,,,,,,,,                                                                               
                                                                             ccc,,,,,,,,,,,,,,cc,  ,cc,,,,,,,,,,,,,,,,,,                                                                                
                                                                            ,cccc,,,,,,,,,,,ccTTc  ,ccc,,,,,,,,,,,,,,,,,,                                                                               
                                                                             ,cccc,,,,,,cccccTsc,  ,TTc,,,,,,,,,,,,,,,,,,                                                                               
                                                                              ,cc,c,c,ccccccTc,    ,cTTc,,,,, , ,,,,,,c,                                                                                
                                                                              ,ccccccTTccTTc,,       ,cCTc,,,,,,,,,,,,,                                                                                 
                                                                               ,cCAARRRsc,,            ,ccccccccc,,,,                                                                                   
                                                                                 ,sCCTc,                  ,,,,,,,,                                                                                      
</PRE>
</DIV>
<DIV id=cat22>
<PRE>
                                          
                                                           ,,,,,                                                                                                                                        
                                                          ,,,,,,,,,,,,                                                                                                                                  
                                                           ,,,,,,,,,,,,,,,        ,,,,,,,,,, ,                                                                                                          
                                                            ,,,,,,,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,                                                                                                     
                                                              ,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                                  
                                                               ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                               
                                                                ,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                              
                                                                 ,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                       Trí        ,,cc,,,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,      Trí                                                                                     
                                                                     ,,cccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                      cccccc,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                    ,cccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                   ,,ccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                   ,cccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                   ,cccccc,,,,,,,,,,,,,,,,,,,,Trí,,,,,,,,,,,,,,,,,                                                                                     
                                                                   ,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                   ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                   ,cccc,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                    ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                    ,cscccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                    ,ccc,ccccc,,,,,,,,,,,,,,,,,,,,,ccc,,,,,,,,,c,                                                                                  
                                                                     ,cccccc,,,,,,,,,,,,,,,,,,,,,cccc,,,,,,,,,,,,                                                                                   
                                                                      ,Tcccc,c,c,ccc,c,c,ccc,ccccccccc,,,,,,cc,                                                                                      
                                                                       ,cccccccccccccccccccccccccccc,,,,,,c,,,                                                                                      
                                                                       ,cTcccccccccccccccccccccccc,,,c,,,ccc,                                                                                           
                                                                        ,,scccccccccccc,c,,,,,,,,,,,,,,,cc,                                                                                             
                                                                          ,ccccccccc,,,,,,,,,,,,,,,,,,,,,,,                                                                                             
                                                                           ,cccsRAc,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                             ccssc,,,,,,,,,,c,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                                ,,,,,,,,,,,,c,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                                ,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                               ,,,,,,,,,,,,c,,,,,,, ,,,,,,,,,,,,,,,,,,                                                                                  
                                                                              ,,,,,,,,,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                              ,c,,,,,,,,,,,,,,,,,,,,,,, ,,, ,,, ,,,,,,                                                                                  
                                                                             ,,c,,,,,,,,,c,,,,,,,,,, , ,,, , , ,,,,,,                                                                                   
                                                                             ,,,,,,,,,,,,,,,,,,,,,, ,,,,,,,,,,,,,,,,    ,cc,,                                                                           
                                                                             ,,,,,,,,cc,,,,,,,,,,, , ,,,,,,, ,,,,,,,    ,ccc,,                                                                          
                                                                             ,,,,,,cccc,,,,,,,,,,,, ,,,,,,,,, , ,,,     ,cc,c,,,                                                                        
                                                                             ,,,,,csc,,,,,,,,,,,,,,, , , ,,,,,, ,,,     ,cccc,,,,                                                                       
                                                                             ,,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,,,     ,cccc,,,,,,                                                                     
                                                                             ,,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,        ,ccc,,,,,,,                                                                     
                                                                              ,,csccc,,,,,,,,,,,,,,,, , , , ,,,,,       ,cccc,,,,,,                                                                     
                                                                                ,,,,,c,,,,,,,,,,,,,,,, ,,,,,,,,,,,     ,cccccc,c,,,,                                                                    
                                                                                   ,ccc,c,,,,,,,,,,,,,,,,,,,,,,,,,     ,cccccccc,,,,,                                                                   
                                                                                   ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,     ,cccccc,,,,,,                                                                    
                                                                                    ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,     ccccc,,,,,,,                                                                    
                                                                                    ,ccccc,c,,,,,,,,,,,,,,,,,,,,,,,    ,cccccc,,,c,,                                                                    
                                                                                   ,ccccccccc,,,,,,,,,,,,,,,,,,,,,, ,,ccccc,,,,,cc,                                                                     
                                                                                  ,ccccccccccc,c,,,,,,,,,,,,,,,,,,,ccscccccc,,,c,,                                                                 
                                                                                 ,ccccccccccc,,,,,,,,,,,,,,,,,,,,,ccccccccccccc,,                                                                    
                                                                                cTccccccccccc,,,,,,,,,,,,ccccc,ccccccccccccsTc,                                                                         
                                                                                cTccccccccccc,,,,,,,,cccccccccccscscscsssc,,,                                                                           
                                                                               ,ccc,,,,,,ccccccc,,,,cccccccccc,,,                                                                                       
                                                                               ,ccc,,,,,   ,,,ccc,cccccccc,,,,,                                                                                         
                                                                               ,cccc,,,,       ,,,,ccc,,,,,,,,,,                                                                                        
                                                                               ,ccc,,,,,, , ,   ,,,,ccc,,,,,,,,,,,                                                                                      
                                                                               ,ccc,,,,,,,,,,,,,,,,cccccc,,,,, , ,,,                                                                                    
                                                                              ,,ccc,,,,,,,,,,,,,ccccccccc,,,,,,,, ,,                                                                                    
                                                                              ,ccccc,,,,,,,ccTTccccccccc,,,,,,,,,,,,                                                                                    
                                                                                csccc,c,cccccACccccccccc,,,,,,,,, ,,,                                                                                   
                                                                                cTcccccccccccccccccccccc,,,,,,,, , ,,,                                                                                  
                                                                                ,cccccccccccc,ccccscccccc,c,,,,,,,,,,                                                                                   
                                                                                 ,cccccc,c,,cCCT, ,cTTTTsccccc,ccc,,,                                                                                   
                                                                                  ,cTcsCACATTAC,    ,,,,ccccTcc,,,,                                                                                     
                                                                                   ,,sCRRRCc,              ,,,                                                                                          
                                                                                     ,,,,                                                                                                                                                           
</PRE>
</DIV>
<DIV id=cat23>
<PRE>
                                          
                                                                       ,,,,                                                                                                                             
                                                                       ,,c,,,,                                                                                                                          
                                                                         ,,,,,,,,                                                                                                                       
                                                                          ,,,,,,,,                                                                                                                      
                                                                          ,,,,,,,,,,                                                                                                                    
                                                                           ,c,,,,,,,,,   ,,,,,,,                                                                                                        
                                                                           ,cc,,,,,,,,,,,,,,,,,,,,,                                                                                                     
                                                                            cRc  ,,,,,,,,,,,,,,,,,,,,,                                                                                                  
                                                                            cRRA, ,,,,,,,,,,,,,,,,,,,,,,,                                                                                               
                                                                            ,cRR, ,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                             
                                               Minh Trí                      ,,cARC,,,,,,,,,,,,,,,,,,,,,,,,,,,,      Minh Trí                                                                             
                                                                          ,ccccCRC,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                          
                                                                        ,cssscccscc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                       ,csssccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                      ,cccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                     ,,ccccccccc,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                     ,ccccccc,c,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                     ,,scccccc,c,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                     ,csccccccccc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                     ,cTsccccccccc,c,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                      csccccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                      ,cCCcccccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,c,                                                                                     
                                                                       cRRccccccscc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,                                                                                      
                                                                       ,TAcccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                                      
                                                                         ,TTccccccccccccc,,,,,,,,,,,,,,,,,,,,,,c,                                                                                       
                                                                          ccccccccccccc,,,,,,,,,,,,,,,,,,,,c,cc,                                                                                        
                                                                          ,cTccccccccccccc,,,,,,,,,,,,ccccccccc                                                                                         
                                                                          ,csccsAAcccccccccccccccccccccsscccc,,                                                                                         
                                                                          ,cscARAsccccccccscssscccsccsscscc,                                                                                            
                                                                          ,sTTTTcccccccccccccscscscTssccc,                                                                                              
                                                                           ,csccccccssTTTsTsssTsTsscc,cc,                                                                                               
                                                                            ,TCTcsccc,,,,c,,,,,,,,,,,,,,,,,                                                                                             
                                                                             ,cTCscc,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                         
                                                                               ,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                                 ,c,,,,,,,,,c,,,,,,,,,,,,,,,,,,,c,,                                                                                     
                                                                                ,c,,,,,,,,,,cc,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                ,c,,,,,,,,,,,cc,,,,,,,,,,,,,,,,,,,c,                                                                                    
                                                                                ,c,,,,,,,,,,,cc,,,,,,,,,,,,,,,,,,,c,                                                                                    
                                                                                cc,,,,,,,,,,ccc,c,,,,,,,,,,,,,,,,,c,            ,,,,                                                                    
                                                                                ,c,,,,,,,,,ccc,,,,,,,,,,,,,,,, ,,,,            cTc,,,                                                                   
                                                                                cc,,,,,,,,,cc,,,,,,,,,,,,,,,,,,,,,,           ,cc,,,,                                                                   
                                                                                ,c,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,            cTcc,,,,                                                                  
                                                                                ,c,,,cTTTc,,,,,,,,,,,,,,,,,,, ,,,            ,sTcc,,c,,                                                                 
                                                                                ,,,,,ccscc,,,,,,,,,,,,,,,,,,,,,,             ,cTcc,,,,,,                                                                
                                                                                 ,c,cccc,,,,,,,,,,,,,,,,,,,,,,,             ,cscccccc,c,                                                                
                                                                                 ,cc,sTc,,,,,,,,,,,,,,,,,,,,,,,,            ,ccsccccccc,,                                                               
                                                                                 ,cc,,ccc,,,,,,,,,,,,,,,,,,,,,,,            ,cscscccccc,,                                                               
                                                                                 ,,c,,,c,,,,,,,,,,,,,,,,,,,,,,,,,           ,Tsccsccccc,,                                                               
                                                                                  ,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,           ,Tscccccccc,,                                                               
                                                                                   ,cccc,,,,,,,,,,,,,,,,,,,,,,,,,,         ,cTcccccccccc,                                                               
                                                                                   ,ccccccc,ccc,,,,,,,,,,,,,,,,,,,       ,sTTcccccccccc,,                                                               
                                                                                   ,,ccccccccccc,,,,,,,,,,,,,,,,,,,    ,cTTsccccccccccc,,                                                               
                                                                                    ,,cccccccccc,,,,,,,,,,,,,,,,,,,  ,csTsscccccccccc,                                                                  
                                                                                    ,ccccccccc,,,,,,,,,,,,,,,,,,,,,,,ccccccccccccscc,                                                                   
                                                                                    ,,ccc,ccccc,,,,,,,,,,,,,ccc,,,,,c,,,ccTTTTTTc,,                                                                     
                                                                                    ,ccc,ccccc,,,c,,,,,,,,ccsscccscTsscssCTTc,,                                                                         
                                                                                   ,,cccccc,,,,,,,,,,,,,,cccccccc,,,,,,                                                                                 
                                                                                   ,cccccc,,,,,,,,,,,,,,,ccccc,,                                                                                        
                                                                                   ,ccc,,,,,,,,   , ,,,,ccc,,,,                                                                                         
                                                                                   ,cccc,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                                   ,cccccc,,,,,,, , ,,,,,,,,,,,,                                                                                        
                                                                                   ,cTccccc,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                                    ,cTcccc,,,,,,,,,,,,,c,,,,,,,,,                                                                                      
                                                                                    ,cTccc,,,,,,,ccsTCTccc,,,,,,,,,,                                                                                    
                                                                                    ,cCcccc,,,,cCCsTRRRTc,,,,,,,,,,                                                                                     
                                                                                     cCscccccccTARTccccsc,,,,,,,,,,                                                                                     
                                                                                     ,TcccccTsscccccccccc,,,,,,,,,,                                                                                     
                                                                                     ,cssccccccccccccTTTTTsTTTcc,,                                                                                      
                                                                                     ,csscccc,,,,,ccTscccccccc,,                                                                                        
                                                                                      ,TcTAACTTCCRRA,                                                                                                   
                                                                                      ,CTsARRRRRRRC,                                                                                                    
                                                                                       ,TCTCAACTc,                                                                                                      
                                                                                        ,,,                                                                                                             
</PRE>
</DIV>
<DIV id=cat24>
<PRE>
                                          
                                                                                ,sCc                                                                                                                    
                                                                                ,RRT,,,                                                                                                                 
                                                                                ,TRT,,,,,                                                                                                               
                                                                                 cRRT, ,,,,                                                                                                             
                                                                                ,cRRR,,,,,,,                                                                                                            
                                                                                ,TRRAc,,,,,,,,,,,,                                                                                                      
                                                                                ,cRRRRs,,,,,,,,,,,,,,,,                                                                                                 
                                                                             ,,,,cRRRRC,,,,,,,,,,,,,,,,,,                                                                                               
                                                                            ,,,, cRRRRAc,,,,,,,,,,,,,,,,,,,                                                                                             
                                                                             ,,,,,cARRAc,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                               Minh Trí           ,,,,,,cccARRAc,,,,,,,,,,,,,,,,,,,,,,       Minh Trí                                                                                   
                                                                          ,,,,,ccscccccc,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                        ,,,,,,ccccccccsc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                      ,,,,,,ccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                     ,cc,,,cccc,c,,,,,c,ccc,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                     ,cc,,,,,c,,,,,,,c,cccccc,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                    ,cccccc,c,,,,,,,,,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                    ,ccc,c,c,ccc,ccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                    ,,ccccccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                     ,cTcccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                      cTcTTcccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                      ,ccRRAsccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                       ,sARRAccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                        ,ARRCccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                         ,ARRccccccccccccc,,c,,,,,,,,,,,,,,,,,,,cc,                                                                                     
                                                                          ,TTccccccscccccccc,c,,,,,,,,,,,,,,,,,ccc,                                                                                     
                                                                         ,ccccccccccccccscccccc,,,,,,,,,,,,,,,csc,                                                                                      
                                                                        ,cTTcccccccccccccccccc,,,,,,,,,,,,,ccTsc,                                                                                       
                                                                        ,cTccccccTRRAscccccccccccccc,,,,,ccssc,                                                                                         
                                                                         ,ccsccccsTCsccccccscccccscscccTCCc,                                                                                            
                                                                          ,cCsccccccccssTTTsscscscssTsTTc,                                                                                              
                                                                           ,cTTTccccccc,,,,,csTTsTsscc,,                                                                                                
                                                                            ,cTTTTTccc,,,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                                                ,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                          
                                                                                   ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                                    ,cc,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                                      
                                                                                    ,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                                     ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                                     ,ccc,,,,,,,c,,,,,,,,,, ,,,,,,                 ,,,c,                                                                
                                                                                   ,,ccc,,,,,,,,,,,,,,,,,,,, ,,,,                 ,scc,,                                                                
                                                                                   ,cccc,,,,,,,c,,,,,,,,,,,,,,,,                 ,ccc,,,,                                                               
                                                                                   ,cccc,,,,,,cc,,,,,,,,,,,,,,,,                ,cscc,,c,,                                                              
                                                                                  ,,cc,,cc,,,,,c,,,,,,,,,,,,,,                 ,ccccc,,cc,                                                              
                                                                                  ,cc,,,,c,,,,cc,,,,,,,,,,,,,,                 ,TTc,,,,,,,,                                                             
                                                                                  ,cc,,,,,cc,,ccc,,,,,,,,,,,,,,               ,cTcc,c,c,c,,                                                             
                                                                                  ,cc,,,,,,c,,,ccc,,,,,,,,,,,,,               ,ccccccccccc,                                                             
                                                                                 ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,               cTccccc,cccc,                                                             
                                                                                 ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,             ,cCcccccc,ccc,                                                             
                                                                                  ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,             ,cTccccc,ccc,,                                                             
                                                                                   ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,            ,ssscccccc,c,,                                                              
                                                                                   ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,        ,,cTsccccccc,ccc,                                                              
                                                                                    ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,      ,,sCTsccscscccccc,                                                               
                                                                                    ,cc,,,,,,,,,,,,,,,,,,,,,,,,,c,   ,,cTscccccccccccc,                                                                 
                                                                                     ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,,,ccccccsTc,                                                                  
                                                                                    ,,c,,,,,,,,,,,,,,,,,,,,,,,ccc,,,,,,,,,ccTTCsc,,                                                                     
                                                                                   ,,c,,,,,,,,,,,,,,,,,,,,,,,cTCTscccTcscsTCcc,                                                                         
                                                                                   ,c,,,,,,,,,,,,,,,,,,,,,,,csc,,,,,,,,                                                                                 
                                                                                   ,cc,,,,,,,,,,,,,,,,,,,,,cc,,                                                                                         
                                                                                   ,cc,,,,,,,,,,,,,   , ,,,c,                                                                                           
                                                                                   ,c,,,,,,,,,,,,,,,,,,, ,,,,                                                                                           
                                                                                   ,cc,,,,,,,,,,,,,,,,, ,,,,,,,                                                                                         
                                                                                    ,cc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                                     ,ccc,,,,,,,,,,,,,,,,,,,,,,,,                                                                                       
                                                                                      ,ccc,,,,,,,,,,,,,,,,,,,c,,,,                                                                                      
                                                                                       ,cc,,,,,,,,,,,,,,,cTCTcc,,                                                                                       
                                                                                        ,cc,,,,,,,,,,c,ccTRRT,,,,,                                                                                      
                                                                                         ,ccc,,,,,,cccccccACc,,,,                                                                                       
                                                                                          ,c,ccccccccsTRACccccc,                                                                                        
                                                                                         ,ccccccccccTTCAT,,,,                                                                                           
                                                                                         ,csccsAARRRc,                                                                                                  
                                                                                         ,TCTcRRRRC,                                                                                                    
                                                                                          ,csccc,                                                                                                                                                  
</PRE>
</DIV>
<DIV id=cat25>
<PRE>
                                         
                                                                                       ,Tc                                                                                                              
                                                                                     ,cRRRc,                                                                                                            
                                                                                    cARRRRRc,                                                                                                           
                                                                                   ,TRRRARRC,,,                                                                                                         
                                                                                 ,ccsRRARRRAc,,,,                                                                                                       
                                                                                ,c,,cRRRARRCc,,,,,,,                                                                                                    
                                                              ,cc,  ,         ,,,,,sRRRARRRCcc,,,,,,,,,                                                                                                 
                                                              ,ARRAc,,,,,,   ,,,,,,ARRARARRCcc,,,,,,,,,,,                                                                                               
                                                   Minh Trí       ,TRRRRT,,,,,,,,,,  cRRRRRARRRCccc,,,,,,,,,,,,       Minh Trí                                                                                
                                                               ,sRRRRRc,,,,, ,   ,TRRRRRRRRAcc,c,,,,,,,,,,,,,                                                                                           
                                                                 cTsRRc,,,,,,,,,,,,cTRRRRATcc,,,,,,,,,,,,,,,,,,                                                                                         
                                                                  ,cc,,,,, ,,,,,,,,cccccccccc,,,cc,,,,,,,,,,,,,,                                                                                        
                                                                   ,c,,,,,,,,,,,,,,,c,,,,,ccc,,,,c,,,,,,,,,,,,,,,                                                                                       
                                                                  ,c,,,,,,,,,,,,,,,,,,,,,ccc,, ,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                 ,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,c,,,,,,,,,,,,,,,,,,                                                                                    
                                                                 ,cc,,,,,,,,,,,,,,,,,,,,,,,,,c,cccc,,,,,,,,,,,,,,,,,                                                                                    
                                                                 ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                 ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                 ,Tc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                 ,ccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                 ,ccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                  ,cccccccccc,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                  ,cTcccc,cTACATc,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                  ,cTccccTARRRRRATcccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                   cRATccARRRRRRRAccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                   ,ARC,ccCRRRRRRAcccccccc,,,,,,,,,,,,,,,,,,,,,c,                                                                                       
                                                                    cATcc,,cTTRRCcccscccscccccccc,,,,,,,,,,,,,,,,                                                                                       
                                                                    ,cc,,,,,,,cccccccccscccccccccccccc,c,,,,,,,,                                                                                        
                                                                    ,,ccccccccccccccccccccccccccccscc,,,c,ccc,,                                                                                         
                                                                     ,cARAcccscccccccccccccccccccccssscssTTc,                                                                                           
                                                                       ,CCccccccccccTRAcccccccccccTsTTCCTc,                                                                                             
                                                                       ,cCTscccccccccTsccccccccsssc,,,,,,                                                                                               
                                                                         cCCTsTsscccccccccccccscc,,,,  ,,,,                                                                                             
                                                                          ,,cTTTTTTTTTccccccccc,,,,,,,,,,,,,,,                                                                                          
                                                                              ,,,,ccscscccccccccc,,,,,,,,,,,,,                                                                                          
                                                                                       ccccccccccccc,,,,,,,,,,                                                                                          
                                                                                      ,cTccccccccccc,,,,, ,,,,,                                                                                         
                                                                                    ,TCTcccccccssTcc,,,,,,,,,,,                                                                                         
                                                                                   ,TTTssccccccccccc,,,,,,,,,,                                                                                          
                                                                                   ,,ccccccccc,c,c,c,,,,,,,,,,                       ,,cc,,                                                             
                                                                                    ,,c,c,,,,cccc,cc,,,,,,,,,,                      ,ccccc,                                                             
                                                                                   ,cccc,,,,,,cc,,cc,, ,,,,,,,                     ,ccc,,c,                                                             
                                                                                  ,,cc,,,,,,,,,,,,c,,,,,,,,,,,                    csTc,,,c,,                                                            
                                                                                  ,ccc,,,,,,,,,,,,cc,,,,,,,,,,                   cTcc,,,,c,,                                                            
                                                                                  ,cscc,,,,,,,,,,,cc,,, ,,,,,,,                ,cccc,,,,,,,,,                                                           
                                                                                  ,ccccc,,,,,,,,,,cc,,,,,,,,,,,,               ,TCcc,,,,,,,c,                                                           
                                                                                  ,ccccc,,,,,,,,,,c,,,,,,,,,,,,               ,cTscc,,,,,,cc,                                                           
                                                                                  ,ccc,c,,,,,,,,,,,cc,,,,,,,,,,,              cTsccc,,,,,c,,,                                                           
                                                                                   ,Tccc,,,,,,,,,,,,ccscc,,,,,,,,            ,sCsccc,,,,,c,,                                                            
                                                                                   ,cccc,,,,,,,,,,,,,,,c,,,,,,,,,           ,ssTcccc,,,,,c,                                                             
                                                                                   ,cccc,,,,c,,,,,,,,,,,,,,,,,,,,         ,cCTccccc,cc,,cc,                                                             
                                                                                    ,Tsc,,,,,,,,,,,,,,,,,,,,,,,,,,      ,cCCTccccccccccc,,                                                              
                                                                                     csc,,,,,,,,,,,,,,,,,,,,,,,,,,,   ,cTTTcc,ccccccccc,                                                                
                                                                                     ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cccc,,,,,,cccsc,                                                                  
                                                                                     ,c,,,,,,,,,,,,,,,,,,,,,,,,cc,,,,,,,,,,,cccTsc,,                                                                    
                                                                                    ,cc,,,,,,,,,,,,,,,,,,,,,,,cTCTcccccTsssTcc,,                                                                        
                                                                                    ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                            
                                                                                   ,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                           
                                                                                    ,,c,,,,,,,,,,,,,, , ,,,,                                                                                            
                                                                                    ,cc,,,,,,,,,,,,,,,,,,,,,                                                                                            
                                                                                    ,cc,,,,,,,,,,,,,,,,,,,,,,,                                                                                          
                                                                                     ,cccccc,,,,,,,,,,,,,, ,,,,                                                                                         
                                                                                     ,,cccc,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                                      ,ccc,,,,,,,,,,,,,,,,,,,cc,                                                                                        
                                                                                       ,ccc,,,,,,,c,,,,,,,,ccsc,,                                                                                       
                                                                                        ,ccc,,,,,,,,,,,,,ccTTTc,                                                                                        
                                                                                         ,ccc,,,,,,,,,ccTCACc,,                                                                                         
                                                                                          ,c,,,,,,,ccsTATcc,,                                                                                           
                                                                                          ,ccccccccTCCTc,                                                                                               
                                                                                          cscccccsTCc,                                                                                                  
                                                                                         ,sTssTTRRs,                                                                                                    
                                                                                          ,TAATcc,                                                                                                      
                                                                                           ,,,,                                                                                                                                                   
</PRE>
</DIV>
<DIV id=cat26>
<PRE>
                                         
                                                                                                        ,,                                                                                              
                                                                                                    ,cCRRRc,                                                                                            
                                                                                                 ,,cARRRRRRC,                                                                                           
                                                                                             ,,,,cCRRRRARRRRT,                                                                                          
                                                       ,                               ,,,,,,,,,cRRRARARRRCCT,                                                                                          
                                                     ,RRRAT,                    ,,,,,,,,,,,,, ,CRRRAAAAARRTcc,                                                                                          
                                                     cRRRRRRRC,,   ,         ,,,,, ,,,,,,,,, ,sRRRARARRRCsccc,,                                                                                         
                                                     ,CRRRRRRRRTc,  ,,,     ,,,,  ,,,,,,,  ,cARRRAAARARRCcccc,,                                                                                         
                                                       cCRRRRRRRRRT,   ,,,,,,,,, ,,,,,,, ,cARRRRARARARATccc,,c,                                                                                         
                                                       ,csccARRRRRRRAc,,,,,,,,,,,,,,,,,  cRRRRRRRARARRAcccc,,cc,                                                                                        
                                                        ,ccc,TRRRRRRRRc  ,,,,,,,,, ,,,,,,,,,cARRRRRRRCcccc,,,cc,,                                                                                       
                                               Trí      ,ccc,cTRRRRC,, ,,,,,,,,,   ,,,,,,,,,,cccsRAccccc,,,,ccc,,                                                                                      
                                                          ,TTc,,cRRc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cccc,,,,,,cc,,,,     Trí                                                                              
                                                           ,cTs,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,,,,c,,,,,,                                                                                   
                                                             ,cTcc,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,,,,,,,                                                                                  
                                                              ,csc,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,,,,,,,                                                                                  
                                                               ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,,,,,,,,                                                                                  
                                                               ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                              ,ccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                              ,,TTccccccccccc,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                               ,cTcccssccccc,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                               ,Tsccccccccccc,c,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                               ,cccccccccccccc,,,c,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                               ,TCACACccccccccccc,csAAACCTc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                               ,TRRCARs,cccccccccsARRAARRRAsc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                cRRCARATsccccccccARRc,cARRRRAc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                ,sAAARRRcccccc,,,cCAAAARRRRRTc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                 ,cccTCsc,ccc,c,,,,cTCRRRRCc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                  ,ssc,,,,,,,,,c,c,,,,cccc,,,,,cccc,,,,,,,,,,,,,,ccccc,,                                                                                
                                                                   ,sTc,,,cc,,,,c,,,,,,,,,,,ccccc,,,,,,cccccccccscc,,                                                                                   
                                                                    ,cccccccCRCc,,,ccc,,,ccssccc,,,ccccccssTTCTc,                                                                                       
                                                                     ,csccccccccccccccccccscccccccccccccscTcc,,                                                                                         
                                                                       ,sCsscccccccccccccccccccccsccccsscc,,,,,,,                                                                                       
                                                                        ,cCTTsTsscscccccccccccccccscssc,,,,,,,,,,,,                                                                                     
                                                                           ,,TTTTTsTcccccccscscscssc,,,,,,,,,,,,,,,,                                                                                    
                                                                                ,,ccccscccscccc,c,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                                     ,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                                    ,cc,,,,,,,,,,,,,,,,,,,,,,,, ,,,,,,                                                                                  
                                                                                   ,,cc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                           ,,,,,,, ,ccc,,,,,,,,,,,,,,,,,,,ccc,,,,,,,,,,                                                                                 
                                                                         ,cTCCTc,,,ccc,,,,,,,,,,,,,,,,,,,,,ccc,,,,,,,,,                                                                                 
                                                                      ,cTcccccTcc,,cc,,,,,,,,,,,,,,,,,,,,,c,cc,,,,, ,,,               ,,cc,                                                             
                                                                     ,cCTccccTTsc,,c,,,,,  ,,,,,,,,,,,,,,,,,cc,,,, ,,,             ,,c,,,c,                                                             
                                                                     ,,cccTccssc,,ccc,,,, , ,,,,,,,,,,,,,,,,c,,,,,,,,,           ,cccc,,,,,                                                             
                                                                        ,,,,,,,,,cccc,,,,,,,,,,,,,,,,,,,,,,cc,,,,,,,,          ,cscc,,,,,,                                                              
                                                                                ,,ccc,,,,,,,, ,,,,,,,,,,,,ccc,,,,,,,,         ,TCscc,,,,,,                                                              
                                                                                  cc,,,,,,,,,,,,,,,,,,,,,,cc,,,, ,,,         cTTcccc,,,,,,                                                              
                                                                                 ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,       ,cTscccc,,,,cc,                                                              
                                                                                 ,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,, ,,,      ,cTcccc,,,,cc,                                                                
                                                                                  ,cccc,,,,,,,,,,,,,,,,,,,,,cc,,,,,,     ,sTscccc,,,ccc,                                                                
                                                                                   cTc,,,,,,,,,,,,,,,,,,,,,,ccccc,,    ,cTTccccc,,,csc,                                                                 
                                                                                   ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,c,,  ,,cTscc,,,,,,ccc,                                                                  
                                                                                    ,ccc,c,c,,,,,,,,,,,,,,,,,,,,,,,,,ccccc,,,,,,,c,,                                                                    
                                                                                     ,ccccccc,,,,,,,,,,,,,,,,,,,,,,,cc,,,,,,,,c,,                                                                       
                                                                                     ccssscc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,,                                                                         
                                                                                    ,cTccc,,,,,,,,,,,,,,,,,,,,,,,,,cccccc,,,                                                                            
                                                                                   ,csTcc,,, ,,, ,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                                   ,ccTcc,,   ,,,,,,,,,,,,,,,,,,c,,                                                                                     
                                                                                   ,cscc,,   ,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                                   ,csTcc,,,,,,,,,,,,,,,,,,,,                                                                                           
                                                                                   ,cTTsc,,,,,,,,,,,,,,,,,,,,,                                                                                          
                                                                                    ,cTTsc,,,,,,,,,,,,,,,,,,,,,,                                                                                        
                                                                                      ,ccsc,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                                        ,csc,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                         ,cTc,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                          cTTcc,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                          cTcscc,,,,,,,,,,,,,,,,,c,                                                                                     
                                                                                          cTTcscc,,,,,,,,,,,,,,,,,,                                                                                     
                                                                                           ,TTTTcc,ccc,,,,,,,,,cc,                                                                                      
                                                                                            ccTcTcc,ccc,c,,,cccTc                                                                                       
                                                                                              ,,cTcc,,,c,,ccTCc,                                                                                        
                                                                                                ,TTcc,,cccTTc,,                                                                                         
                                                                                                 ,,sTccsCCc,                                                                                            
                                                                                                    ,,TCT,                                                                                              
                                                                                                       ,                                                                                                                                          
</PRE>
</DIV>
<DIV id=cat27>
<PRE>
                                          
                                                                                                                     ,ccc,                                                                              
                                                                                                                  ,cTRRRRRT,                                                                            
                                                                                                                ,TRRRRRRRRRT,                                                                           
                                                       ,CCTs,,                                               ,,TRRRRARRRACTT,                                                                           
                                                      ,CRRRRRRAs,                       , ,,,,,,,,,,   ,,   ,TRRRRRARARRRccc,                                                                           
                                                      ,ARRRRRRRRRAT,,            , ,,,,,,,,,,,,,,,,,,,,   ,cARRRRRARARRAsccc,                                                                           
                                                       ,ARRRRRRRRRRRT,,       , ,,,,,,,,,,,,,,,,,,,,,   ,CRRRRRARARRRATcc,cc,                                                                           
                                                       ,cTssARRRRRRRRRAT,   ,,,,,,,,,,,,,,,,,,,,,,,  ,cARRRRRRARARRRRAc,,,cc,                                                                           
                                                        ,ccccTRRRRRRRRRRRRAc,,,,,,,,,,,,,,,,,,,,,,,,cARRRRRRRAAARRRRCccc,,cc,                                                                           
                                                         ,sccccccARRARARRRRRC, ,,,,,,,,,,,,,,,   ,,,,cCRRRRRRRRRRRCccc,c,,cc,                                                                           
                                                          ccccccccTRRARRRRRc, ,           ,,    ,,,,,,,,csRRRRRRAcccc,,,,,cc,                                                                           
                                                          ,TCc,,ccsRRRRRRT,  ,,,,,   ,   ,,,   ,,,,,,,,,,,,ccccscccc,,,,,,cs,                                                                           
                                               Trí         ,cTc,,,ccCRRC,  ,,,,,  Trí  ,,,,,,,,,,,,,,,,,,,,,,,cccc,,,,,,cc,                                                                            
                                                            ,TTsc,,ccccc,,,,,,,,        ,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,,,,sc                                                                             
                                                             ,cCTcccccc,,,,,,,,,,,,,,       ,,,,,,,,,,,,,,,,,,,,,,,   ,,cc,                                                                             
                                                               ,sCTcccc,,,,,,,,  , ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cTc,                                                                              
                                                                 ,TTscc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,ccc,                                                                               
                                                                   ccc,,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,,,                                                                              
                                                                   ,ccc,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                  ,cTccccc,ccccc,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                            
                                                                 ,csscccccccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                           
                                                                ,cTscccccc,ccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                         
                                                               ,sTscccTTTTCCTcccccccccccccc,,,cTCCCc,,c,,,,,,,,,,,,,,,,,,,,,,,,,                                                                        
                                                                csccccARRRRRAc,ccccccccccccccTRRRRRRCCTc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                       
                                                               ,ccccccARRTTARCccccccc,,,,,cTRRRc,,CRRRRRs,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                     
                                                             ,sATTcccsRRRCsARRCc,c,,,,,,,,,TRRC,,CRRRRRRc,,,,,,,,,,,,,,,,,,,,,,,,c,,                                                                    
                                                             ,ccTsTcccsTCRRRRCc,,,,,,,,,,,,,cTRRRRRRRRs,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                    
                                                                 cTTcc,,,cTCc,,,,,,,,,,,,,,, ,,TAAACc,,  ,,,,,,,,,,,,,,,,,,,,,,,                                                                        
                                                                  ,sCTccc,,,,,,,,,,,,,,,,,,,,   ,,,,   ,,,,,,,,,,,,,,,,,,,,cc,,,                                                                        
                                                                   ,,sTTsccc,,,,,,,,,,,,,,,,,,,,   ,,,cccc,,,,,,,,,,ccccccc,,,                                                                          
                                                                      cCTTscc,c,,,,CRRT,,,,,,,,,,,,,,,,,,,,,,cccccTTCCT,,                                                                               
                                                                       ,cCTscccc,,,cCCc,,,,,,,,,,,,,,,,ccccccssTTCsc,                                                                                   
                                                                         ,cTTssccccc,,,,c,c,c,,,c,c,,cccssscTsTTc,                                                                                      
                                                                           ,TCTTcccccccccccccccccccccccscscTsccc,,,                                                                                     
                                                                             ,cTTcccccscscscscssscTsTsTsTssc,,,,,,,,,                                                                                   
                                                                                cTcccccscTsTsTsTTTsTTTcc,,,,,,,,,,,,,,                                                                                  
                                                                                cTscc,c,,,cccc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                         ,,ccc,,,ccTcc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                         ,c,cccccc,,cc,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                                         ,,c,,,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                          ,cccc,,,scc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                           ,cc,,,,ccc,,,,,,,,,,,,,,,,,,,,,,,,cccccc,,,,,,,       ,,,,                                                                   
                                                                            ,cc,,,,,c,,,, ,,,,,,,,,,,,,,,,,,ccccc,,,,,,,,     ,,ccc,,                                                                   
                                                                             cccc,,,,,,  ,,,,,,,,,,,,,,,,,,,,ccc,, , ,      ,,,c,,,                                                                     
                                                                             ,cTTccc,,,,,,,,,,,,, ,,,,,,,,,,,,cccc,,,,,,,,,,,,,,,,,                                                                     
                                                                               ,ccccc,,,,,,,,,,,,,,,,,,,,,,,,c,,cTc,,,,,,,,,,,,,,                                                                       
                                                                                 ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,cTc,,,,,,,,,,c,                                                                        
                                                                                  ,ccc,,,,,,,,,,,, , ,,,,,,,,,,,,,cc,,,,,,,,,,,,                                                                        
                                                                                 ,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,   ,,,,,,                                                                          
                                                                                 ,cc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,cc,,  ,,,,,                                                                           
                                                                                  ,cccc,,,,,,,, ,,,,,,,,,,,,,,,,,cccc,,,,,c,                                                                            
                                                                                  ,ccc,,,,,,,,,, ,,,,, ,,,,,,,,,,,,csTcc,,                                                                              
                                                                                  ,cccccc,,,,,,,,,, ,,,,,,,,,,,,,,,,cc,,                                                                                
                                                                                   ,scccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                   
                                                                                   ,cccccc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                                   ,,sTccccc,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                                   ,ccccscsccccc,,,,,,,,,,,,,,,,,,                                                                                      
                                                                                   ,cc,ccccTsTcccc,,,,   ,,,,,,,,,                                                                                      
                                                                                  ,,c,,,,,ccccsccc,,,,, ,,,,,,,,,,,                                                                                     
                                                                                  ,,cc,,,,,,,ccccc,,,,   ,,,,,,,,,                                                                                      
                                                                                  ,cc,,,,,,,,,ccc,,,,,,  ,,,,,,,,,,                                                                                     
                                                                                 ,,c,,,,,,,,,,csc,,,,,   ,,,,,,,,,,                                                                                     
                                                                                  ,cc,,,,,,,,,cccc,,,,, ,,,,,,,,,,,                                                                                     
                                                                                  ,cc,,,,,,,,,,csc,,,,,  ,,,,,,,,,,,                                                                                    
                                                                                  ,cc,,,,,,,,,,cccc,,,, ,,,,,,,,,,,,                                                                                    
                                                                                  ,cTc,,,,,,,,,cccc,,,,, , ,,,,,,,,,,                                                                                   
                                                                                   cCccc,,,,,,,,ccc,,,,,, ,,,,,,,,,,,                                                                                   
                                                                                   ,Tccc,,,,,,,,cTcc,,,,,, ,,,,,,,,,,,                                                                                  
                                                                                   ,Tcc,,,,,,,,,ccccc,,,, ,,,,,,,,,,,,                                                                                  
                                                                                   ,cTTTsscccccccccc,,,,,,,,,,,,,,,,,,                                                                                  
                                                                                    ,,cc,,,,cc,,,,csc,,,,,,,,,,,,,ccT,                                                                                  
                                                                                                 ,cTc,,,,,,, ,,,,cTT,,                                                                                  
                                                                                                 ,cCc,,,,,,,,,,cTc,                                                                                     
                                                                                                  ,CCCTscc,,,ccc,                                                                                       
                                                                                                   ,,,,cccsTTc,                                                                                         
                                                                                                           ,,                                                                                           
</PRE>
</DIV>
<DIV id=cat28>
<PRE>
                                           
                                                                                                                          ,ccsCAT,                                                                      
                                                                                                                        ,cRRRRRRRA,,                                                                    
                                                           ,ccc,,                                                ,,  ,sCRRRRRRRACTc,                                                                    
                                                          ,RRRRRRCc,                                         ,,,   ,cRRRRRAAARRCccc,                                                                    
                                                         ,CRRRRRRRRRAT,                   ,    ,,,,,, ,   ,,,,   ,cARRRAAAARRRCcccc                                                                     
                                                         ,TRRRARARRRRRRTc,     ,   , , ,,,,,,,,,,,,,,,,,,,     cCRRRRAAAARRRCcc,,c,                                                                     
                                                          ,TCTRRRRAAARRRRACc,  ,,,,,,,,,,,,,,,,,,,,,,,,,,   ,cARRRRAAAAARRAcc,,,,cc                                                                     
                                                           cccccsARRAAARRRRRAAc,,, ,,,,,,,,,,,,,,,,,,, , ,TRRRRRAAAAAARRRTccc,,,,c,                                                                     
                                                           ,ccc,ccTRRARAAARRRRRRC,, , ,,,,,,, ,,, ,,  , ,,cRRRRRRAAARRRCcccc,,,,,c,                                                                     
                                                            ,Tcc,cccCRRRAAARRRRRc,              ,,   ,,,,,,,,cTRRRRRRAccccc,,,,,cc,                                                                     
                                                            ,TTc,,,cccARRARRRRT,  ,,,     ,,,  ,,,   ,,,,,,,,,,,ccARCcccc,,,,,,,c,,                                                                     
                                                             ,cc,,,,cccTRRRT,,   ,      Trí         ,,,,,,,,,,,,,cccccc,,,,,,,cc,                                                                      
                                                              cCTc,,cccsRRRc,,,,,,,,,,,         ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                       
                                                              ,CRAc,,,ccccc,,,,,,,,,,,             ,,, ,,,,,,,,,,,,,,,,, , ,,cc,                                                                        
                                                                ccTcc,,cccc,,,,,,,,,,,,,,,  ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                         
                                                                 ,cTcccccccc,,,,,,,,,,,,,,,,,,,,,,,, , ,,,,,,,,,,,,,,,,,,,,cc,                                                                          
                                                                   cCTcccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                           
                                                                    ,ccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                            
                                                                     ,ccccc,c,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                                    ,Tscccccc,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                        
                                                                   cTcccccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                       
                                                                 ,cTsccccccccTCCTc,,,c,,,,,,,,,,,,,,,sCACCTscc,,,,,,,,,,,,,,,,,c,,,                                                                     
                                                                ,cCsccccccccARRARRT,,,,,,,,,,,,,,,,cCRRARRRRCc,,,,,,,,,,,,,,,,,,,,,,                                                                    
                                                                ,csccccccsARRT,,CRRT,,,,,,,,,,,,,cCRRc  cRRRRRAc,,,,,,,,,,,,,,,,,,,c,,                                                                  
                                                                ,csccccccTRRRscTARRTc,,,,,,,,,,,,cARRs,cTTARRRCc,,,,,,,,,,,,,,,,,,,,,,,                                                                 
                                                             ,,TCTccccccc,ccARRRRRRT,,,,,, , ,,,,,,,TRRRRARRC,,,,,,,,,,,,,,,,,,,,,,,,c,,,                                                               
                                                             ,csccsccccccc,,,cCCTTc,,,, ,            ,sCCTs,,   ,,,,,,,,,,,,,,,,,,,,, , ,                                                               
                                                                 ,,ccccccccc,,,,,,,,,,,,,        ,           ,,,,,,,,,,,,,,,,,,,,,,,                                                                    
                                                                  cTCsccccccccc,,,,,,,,,,,,   ,,, ,,,     ,,,ccc,,,,,,,,,,,,ccccc,,,                                                                    
                                                                   ,csTTsccccccc,,,,,,,,,cRRc,  ,,,,,  , ,,,,,,,,,,,cccccTTTcc,,,                                                                       
                                                                      ,,sTTccccccccc,,,,,,sc,,,,,,,,,,,,,,,,,cccccccccTTTcc,                                                                            
                                                                         ,cTTTccccccccc,,,,,,,,,,,,,,,,,,,,,,cccccsTTTc,                                                                                
                                                                           ,cTCssccccccccccccc,,c,c,c,ccc,ccccccccc,,                                                                                   
                                                                              ,ccTcccscccccscccccccccccccccscscTcc,                                                                                     
                                                                                ,csTssscscscscccccscssscscTsTcc,,,,,,                                                                                   
                                                                              ,c,,,,,,,ccTcscTcTsTsssTcccc,,,,,,,,,,,,                                                                                  
                                                                             ,ccc,,,,,,,,,,,,,,c,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                             ,ccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                            ,cc,c,,,,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                                            ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                                           ,ccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                           ccccc,c,,,,,,,  ,,,,,,,,,,,,,,,,,,,,,,cc,,,,,,,,,                                                                            
                                                                          ,cTcccc,,,,cc,, , ,,,,,,,,,,,,, ,,,,,,ccc,,,,,,,,,                                                                            
                                                                           ,,Tsc,,,,,cc,,,, ,,,,,,,,,,,,,,,,,,,cccc,,,,,,,                                                                              
                                                                             ,cscc,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,c,c,,,,,,,,                                                                             
                                                                              ,ccc,ccccc,,,, ,,,,,,,,,,,,,,,,,,,,cccc,,,,,,,                                                                            
                                                                                  ,cTcc,,,,,,,,,,,,,,,,,,,,,,,,,,,,cTTc,,,,                                                                             
                                                                                   cscc,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,cCTc,,                                                                             
                                                                                  ,cTcc,,,,,, ,,,,,,,,,,, ,,,,,,,,,,  css,,,                                                                            
                                                                                  ,ccc,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,   cCCcc,                                                                           
                                                                                  ,cc,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,     ,cTc,                                                                           
                                                                                 ,cccc,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                 ,ccccc,,,,,,,,,,,,,, ,,,,,,,,,,,,,                                                                                     
                                                                                 ,cscccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                 ,scccccc,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                                ,ccscccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                cssccccccccc,,,,,,,,,,,,,,, ,,,,,,,                                                                                     
                                                                                cCccc,cccccsccccccccc,,,,,,,,, ,,,,,                                                                                    
                                                                               ,csc,,,c,ccccccccTccc,,,,,,,,,   ,,,,                                                                                    
                                                                               ,csc,,c,,,,,c,,cccccc,,,,,,,,,, ,,,,,                                                                                    
                                                                              ,sTcccc,,,,,,,,,,,,,cc,,,,,,,,,   ,,,,                                                                                    
                                                                              ,TTccc,,,,,,,,,,,,,,cc,,,,,,,,,,  ,,,,,                                                                                   
                                                                              cTTcc,c,,,,,,,,,,,,,ccc,,,,,, ,   ,,,,,                                                                                   
                                                                             ,cc,,,,,,,,,,,,,,,,,,csccc,,,,,,, ,,,,,,                                                                                   
                                                                             ,cc,,,,,,,,,,,,,,,,,,csccccc,,,,   ,,,,,,                                                                                  
                                                                             ,cc,,     ,,,,,,,,,,ccscccc,,,,,, ,,,,,,,                                                                                  
                                                                             ,ccc,, ,,,,,,,,,,,,ccccccc,,,,,,,, ,,,,,,                                                                                  
                                                                              ,cc,,,,,,,,,,,,,,c,ccscccc,,,,,, ,,,,,,,                                                                                  
                                                                              ,,cccc,,,,,,,,cc,,,,csccc,,,,,,,,,,,,,,,,                                                                                 
                                                                               ,cTTCCTsTsscc,,   ,cCcccc,,,,,,,,,,,,c,                                                                                  
                                                                                 ,,,,,,,,,,       csscc,,,,,,,,,,,,cc,                                                                                  
                                                                                                   ,cc,,,,,,,,,,,,cc,                                                                                   
                                                                                                    ,,,,,cc,c,cccc,                                                                                     
                                                                                                     ,CCccccccccc,                                                                                      
                                                                                                      ,,,                                                                                               
</PRE>
</DIV>
<DIV id=cat29>
<PRE>
                                          
                                                                                                                                ,                                                                       
                                                                                                                            ,cTARRT,                                                                    
                                                                                                                         ,cARRRRRRRC,                                                                   
                                                                                                                      ,,CARRRRRRRACTc                                                                   
                                                            cCTc,                                              ,,,   ,TRRRRRARRRTccc,                                                                   
                                                          ,cRRRRRAACc,                                      ,,,,   ,TRRRRARARATcc,cc,                                                                   
                                                          cRRRRRRRRRRAAc,                  , ,,,,,,,,,,,,,,,,    ,sRRRRAARARRRccc,,c,                                                                   
                                                          ,CRRRRRRRRRRRRRc,         , ,,,,,,,,,,,,,,,,,,,,,   ,cARRRRAAARRRRAcc,,,,,,                                                                   
                                                           cTscCRRRRARARRRRAT,,  ,,,,,,,,,,,,, ,,,,,,,,, ,,,cCRRRRRRARARRRATcc,,,,,c,                                                                   
                                                           ,ccccTARRRRRARRRRRRRCs,,,,,,,,,,,,,  ,,,,,    ,,,TRRRRRRRRARRRTccc,,,,,c,,                                                                   
                                                            cTcc,cccCRRRARARRRRRRRc,,    ,   ,,, ,,,,  ,,,,,,,cRRRRRRRRCcccc,,,,,,c,,                                                                   
                                                            ,cc,,,ccccARRARARRRRAc, ,,,     ,,, , ,,,,,,, ,,,,,,cccTRRTcccc,,,,,,cs,,                                                                   
                                                             ,cc,,,ccccTRRRRRRAc,            , ,       ,,,,,,,,,,,,,cccccc,,,,,,cTc,                                                                    
                                                              cTc,,,cccccCRRAc,,  , ,,,,,,,   ,   ,,,,,,,,,,,,,,,,,,,,,,,,, , ,,sc,                                                                     
                                                              ,TTc,,,,cccART,,,,,,,,,,,,,, Trí    ,,,,,,,,,,,,,,,,,,,,,   ,,cc,                                                                      
                                                               ,TCTc,,,,cccc,,,,,,,,,,,,,,,         ,,,,, ,,,,,,,,,,,,,,,,,,,,cc,                                                                       
                                                                 cCCc,,,cccc,c,,,,,,,,,, ,,,,,,,,,,,   ,,,,,,,,,,,,,,,,,,,,,ccc,                                                                        
                                                                  ,sTccccsc,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                         
                                                                   ,cTTscccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                                     ,csccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                        
                                                                      ,Tcccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                      
                                                                     ,csccccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                     
                                                                    cTTccccccccc,cc,,,,,,,,,,,,,,,,,,,,,cAACTTTcc,,,,,,,,,,,,,,,,,,,,                                                                   
                                                                   cTcscccccccsCAAACTc,,,,,,,,,,,,,,,,cCRRRRRRRAs,,,,,,,,,,,,,,,,,,,,,                                                                  
                                                                 ,cTsccccccccCRRATCRRc,,,,,,,,,,,,,,,CRR,  cRRRRRRc,,,,,,,,,,,,,,,,,,,,,                                                                
                                                                 ,csccccccccCRRC,,sARAc,,,,,,,,,,,,,cCRAc,cTTCRRRAc,,,,,,,,,,,,,,,,,,,,,,,                                                              
                                                                 ,cccccccccccCRRCARRRRA,,,,,,,,,,,,,,,cARRRRARRA,, ,,,,,,,,,,,,,,,,,,,,,,,,                                                             
                                                               ,cTTccccccccc,,cARRRRRCc,,,,     ,     ,,csAAATc   ,,,,,,,,,,,,,,,,,,,                                                                   
                                                              ,TCACTcccccccccc,,csccc, ,,,,,         ,     ,    ,,,,,,,,,,,,,,,,,,,,,,                                                                  
                                                              ,,  ,,ccsccccccccc,,,,,,,,,,,,       ,,,,       ,,ccc,,,,,,,,,,,ccccc,,,                                                                  
                                                                   cTTTscccccccscccc,,,,,,,,,AAc,  , , ,   ,,,,,,,,,,,,ccccccTcc,,,                                                                     
                                                                   ,,,cTTTscccccccccc,,,,,,,,AAc,,,,,,,,,,,,,,,,,,ccccccTTTcc,,                                                                         
                                                                        ,cCCssccccccccccc,,,,,,,,,,,,,,,,,,,,,,,ccccssssc,,                                                                             
                                                                          ,,cTCsscccccccccccccc,,,c,cccccc,,,,c,ccccsc,                                                                                 
                                                                             ,,ccscccccccccscscccccccccccc,ccccccsc,,                                                                                   
                                                                                cTTcscscscscccccccccccccccccTsTssc,,,                                                                                   
                                                                               ,,c,csTcssscscscssssTsssssTsTsTc,,,,,,,,,                                                                                
                                                                               ,c,,,,,,,ccccccccTsTsTccc,,,,,,,,,,,,,,,,,,                                                                              
                                                                              ,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                              
                                                                              ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                             ,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                            ,cccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                            ,csccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                            ,cssscccc,,,,,,,  ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                             
                                                                             ,,cTTcc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,,,,,,,,                                                                             
                                                                                ,cccc,,,,,,,,,,,,,,,,,,,,,,,, ,,ccc,,,,,,,                                                                              
                                                                                 ,,ccccc,,,,,,,,,,,,,,,,,, ,,,,ccc,,,,,,,,                                                                              
                                                                                  csscc,,,,,,,,,,,,,,,,,,,  ,,,,,,,   ,,,                                                                               
                                                                                 ,cTcccc,,,,,,,, ,,,,,,,,,,,,,,,,,,,,, ,                                                                                
                                                                                 ,TTccc,c,,,,,,,,,,,,,,,, ,,,,,,,,c,,,,,,                                                                               
                                                                                 ccTccc,cc,,,,,,,,,,,,,, , ,,,,,,,cccc,,                                                                                
                                                                                ,cscccccc,,,,,, ,,,,,,,,,,,,,,,,,,,,,,c,                                                                                
                                                                                cTcccccccc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                                cTscccccc,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                               ,cTcccccccc,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                               ,cTccccc,c,,,,,,,,,,,,,,,,,,,, ,,,,,                                                                                     
                                                                               ,cscccccc,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                      
                                                                              ,cscccccccc,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                     
                                                                              ,ccccccccscccccc,ccccc,,,,,,,,,,,,,,,                                                                                     
                                                                              ,TTcccc,,cccccTccccccc,,,,,,,,,,,,,,,,                                                                                    
                                                                              ,TTccccc,,,cccccc,,,cc,,,,,,,, ,,,,,,,                                                                                    
                                                                              cTsccccc,,,,,,,,,,  cc,,,,,,,   ,,,,,,                                                                                    
                                                                             ,cTsccc,c,,,,,,,,,,  ,c,,,,,,,,   ,,,,,,                                                                                   
                                                                             ,cTTcccccc,,,,,,,,,, cTc,,,,,,,,   ,,,,,                                                                                   
                                                                             ,cccc,,,,,,,,,,,,,,,,cTsccc,,,,,  ,,,,,,,                                                                                  
                                                                            ,cc,,,,,,   ,,,,,,,,,,csscccc,,,,   ,,,,,,                                                                                  
                                                                            ,ccc,,,  ,,,,,,,,,,,,,cTcccc,,,,,,,,,,,,,,                                                                                  
                                                                            ,cs,,,,,,,,,,,,,,,,,,,csccccc,,,, ,,,,,,,,                                                                                  
                                                                             ccc,,,,,,,,,,,,,cc,,,cTcccc,,,,,, ,,,,,,,                                                                                  
                                                                              cTTcccccc,,,,ccc,, ,cTsccc,,,,,,,,,,,,,,                                                                                  
                                                                               ccTTTcscTTTcc,,   ,cCcccc,,,,,, ,,,,,,,                                                                                  
                                                                                  ,,, ,,,,,       csc,,,,,,,,,,,,,,,c,                                                                                  
                                                                                                  ,ccc,,,,,,,,,,,,cTc,                                                                                  
                                                                                                   ,CCscccc,,,,ccTc,,                                                                                   
                                                                                                   ,,ccTTTTCCACTc,                                                                                      
                                                                                                          ,,,,,                                                                                                                                   
</PRE>
</DIV>
<DIV id=cat30>
<PRE>
                                          
                                                                                                                           ccTTc,                                                                       
                                                                                                                        ,cRRRRRRc,                                                                      
                                                                                                                     ,cARRRRRRRRsc,                                                                     
                                                                                                               ,,  ,cRRRRRRRRRATcc,                                                                     
                                                                                                            ,,,   ,ARRRRRRRRAscccc,                                                                     
                                                         ,cTCc,,                              , ,   , , ,,, ,   ,TRRRARARRATccc,,,,                                                                     
                                                        ,ARRRRRRAAs,                 , ,,,,,,,,,,,,,,,,,,,    ,CRRRRARARRRAccc,,,,                                                                      
                                                       ,CRRRRRRRRRRRACc,          ,,,,,,,,,,,,, ,,,,,,,,,  ,TRRRRRRARRRRRCscc,,,,,,                                                                     
                                                       ,sRRRRRRRRRRRRRRRAc,  ,,,,,,,,,,,,,,,,,,, ,,,,,,, ,CRRRRRRRARRRRAcc,,,,,,c,                                                                      
                                                        ,cCccTRRRRRRRRRRRRRRC,,,,,,,,,,,,,,,, ,,,,,,    ,,TRRRRRRRRRRAsccc,,,,,cc,                                                                      
                                                         ,cccccARRRRRRARRRRRRRRRc,,, ,,,,, , , , ,    ,,,,,,,cTRRRRRTcccc,,,,,,cc,                                                                      
                                                          ,cccccccTRRRRARARRRRRT,,,         ,,, ,,,,,,,,,,,,,,,,ccsccccc,,,,,,ccc,                                                                      
                                                          ,TTc,,ccccCRRRRRRRRRc, ,,, Trí      ,,,,,,,,,,,,,,,,,,,,c,,,, ,,,cc,                                                                       
                                                           ,scc,,cccccARRRRRAc, ,,,     , , ,   ,,,,,,,,,,,,,,,,,,,,,,,,    ,cc,                                                                        
                                                            cCsc,,,ccccTRRRT,,,,,,,,,,     ,         ,,,,,,,,,,,,,,,,,,, ,,,cc,                                                                         
                                                            ,TCTc,,,ccccccc,,,,,,,,,,,,,,         ,,,,,,,,,,,,,,,,,,,,,,,,csc,                                                                          
                                                              cCTc,,,,cccccc,,,,,,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                           
                                                               ,cCTc,,ccccccccc,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                           
                                                                 ,TCTTcccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                         
                                                                   ,ccscccccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                       
                                                                     csccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                      
                                                                    ,cTcccccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                    
                                                                   ,cTcccccccccc,,,c,c,,,,,,,,,,,,,,,,,,cCCCTCTc,,,,,,,,,,,,,,,,,,,,,,                                                                  
                                                                  ,cCcccccccccccTsc,,,,,,,,,,,,,,,,,,,cCRRRRRRRAT,,,,,,,,,,,,,,,,,,,c,,                                                                 
                                                                 ,cTsccccccccCTARRACc,,,,,,,,,,,,,,,,TAAc,,cRRRRRT,,,,,,,,,,,,,,,,,,,ccc,,                                                              
                                                                ,cCsccccccccCRRRccCRRAc,,,,,,,,,,,,,cRRR, cCTARRRc,,,,,,,,,,,,,,,,,,,,,,,,                                                              
                                                                 cTsccccccccTRRAccsARRA,,,,,,,,,,,,,,cCRRRRRRAAC,, ,,,,,,,,,,,,,,,,,,                                                                   
                                                                ccTccccccccccCRRRRRRRAc,,,, , , ,      ,cCAACc,   ,,,,,,,,,,,,,,,,cc,                                                                   
                                                              ,CAATccccccccc,,cTTRRRs,,,,,   ,     ,            ,,,,,,,,,,,cccccc,,,                                                                    
                                                              ,,,,ccTccccccccc,,,,cc,,,,,,,,,     ,,,,,,     ,,,cc,,,,,,ccTsTc,,                                                                        
                                                                  ,TCTcccccccsccc,,,,,,,,,,,,,,,,, , , ,    ,,,,,,,,cccTTTcc,                                                                           
                                                                   ,csCTTssccccccccc,,,,,,, ,RRC, ,,,,,,,,,,,,,,ccTcsTTTc,                                                                              
                                                                      ,,cTTTssccccccccc,,,,,,cc,,,,,,,,,,,,,,,,ccccssc,,                                                                                
                                                                          ,cTTTsccccccccccc,,,,,,cc,ccccc,ccc,ccccTT,                                                                                   
                                                                             ,,ccTcccccscscscccccccccccccccccccTTc,                                                                                     
                                                                                cTTsssscccssTsscscssTsTsTTTTTTT,,                                                                                       
                                                                               ,cc,,csTTcTsssTsTTTsTTTTTsccc,,,,,,                                                                                      
                                                                              ,cc,,,,,,,,,,,,,ccccc,,,,,,,,,,,,,,,,,                                                                                    
                                                                              ,c,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                              ,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                             ,,c,, ,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                             ,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                             ,,,,,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                            ,,c,,,,,,,,,,,,,, ,,,,,,,,,,,,,,, ,,,,,,,,,                                                                                 
                                                                             ,,,,,,,,,,,,,,, , ,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                             ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                             ,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,,,,,,,,,                                                                                  
                                                                              ,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,, ,,,,,,,,,                                                                                 
                                                                              ,c,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                              ,c,,,,,,,c,,,,,,, ,,,,,,,,,,,,,,,,,,,,,,,                                                                                 
                                                                              ,c,, ,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                              ,,,,, ,,ccc,,,,,,,,,,,,,,,,,,,,,, ,cc,,,                                                                                  
                                                                              ,c,,,,,,cc,,,,,,,,,,,,,,,,,,,,,,  ,TTc,,                                                                                  
                                                                              cTc,cccccc,,,,,,,,,,,,,,,,,,,,,,, ,csc,,,                                                                                 
                                                                               ,cTcccc,c,,,,,, ,,,,,,,,,,,,,,,  ,cRRc,,,                                                                                
                                                                                cTcccccc,,,,,,,,, , , , ,,,,,,,,,,TAAc,                                                                                 
                                                                               ,cTcc,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                  
                                                                              ,,ssccccccccc,,,,,,,,,,,,,,,,,, ,,,,,                                                                                     
                                                                              ,cTc,,,,,ccccccccccccccccc,,,, ,,,,,,,                                                                                    
                                                                              ,Tsc,,,,,,,,,,ccTc, ,ccc,,,,,,,,,,,,,,                                                                                    
                                                                              ,Tcc,,,,,,,,,,,ccc  ,sc,,,,,,,,,,,,,,,                                                                                    
                                                                             ,csccc,,,,,,,,,,,c,  ccc,,,,,  ,,,,,,,,,                                                                                   
                                                                            ,csTsc,,,,,,,,,,,,,,  csc,,,,,  ,,,,,,,,,                                                                                   
                                                                            ,cssTcc,c,,,,,,,,,,,, ,ccc,,,,,,, ,,,,,,,,                                                                                  
                                                                             csscccccc,,,,,,,,,c, ,ccc,,,,,, ,,,,,,,,,                                                                                  
                                                                            ,cTccccccc,,,,,,,,,,, ,,ccc,,,,   ,,,,,,,,,                                                                                 
                                                                             ccc,,,c,,,,,,,,,,,c, ,ccc,,,,,,  ,,,,,,,,,                                                                                 
                                                                             ,cTc,,,,,,,,,,,,,c,   cTcc,,,,,,,,,,,,,,,,                                                                                 
                                                                              cTc,,,,,,,,,,,,,,   ,csc,,,,,,,,,,,,,,,,,                                                                                 
                                                                              ,ccc,,,,,,,,,,c,    ,,scc,,,,,,,,,,,,,,,,                                                                                 
                                                                               ,TCccccc,,,,,,     ,ccc,,,,,, ,,,,,,,,,,                                                                                 
                                                                                ,cccccccccc,      cTscc,,,,,,,,,,,,ccc,                                                                                 
                                                                                        ,,        ,cTCccc,,,,,,ccTCCCc,                                                                                 
                                                                                                   ,cTCCCCTTTTCTTc,,,                                                                                   
                                                                                                     ,,,,,,ccc,,                                                                                                                                  
</PRE>
</DIV>
<DIV id=cat31>
<PRE>
                                         
                                                                                                                             ,,                                                                         
                                                                                                                          ,cCAAT,                                                                       
                                                                                                                       ,TARRRRRRTc,                                                                     
                                                                                                                ,   ,cARRRRRRRRAsc,                                                                     
                                                                                                             ,,,   cCRRRRRARRRCTcc,                                                                     
                                                         ,,,,                                 ,       , ,   ,,   ,TRRRRARRRRAcc,,,,                                                                     
                                                       ,cRRRAACCT,                   ,  ,,,,,,,,,,,,,,,,,,,,   cARRRRRARRRATcc,,,,,                                                                     
                                                       ,CRRRRRRRRRRAc,        ,   ,,,,,,,,,,,,,,,,,,,,,,,    ,ARRRRAAARRRTccc,,,,,,                                                                     
                                                       ,CRRRRRRRRRRRRRAT,      ,,,,,,,,,,,,,,,,,,,,,,,,,  ,cARRRARAAARRRAcccc,,,c,,                                                                     
                                                        cRRRRRRRRARRRRRRRRC,      ,,,,,,,,,,,,,,,,,,,   ,cARRRRRRAAARRRCccc,,,,cc,                                                                      
                                                        ,cTccTRRRRRRARARRRRRRRCc,,,,,,,,,,,,,,,,,,,, , ,,,ccsARRRRRRRAcccc,,,,,cc,                                                                      
                                                         ,cccccccARRRAAARARRRRRRc,,,, , ,,, ,,,,, ,  ,,,,,,,,,ccCRRRTcccc,,,,,,cs,                                                                      
                                                          ,Tcc,cccTRRRARARARRRCc,,,,     , ,,,   ,,,,,,,,,,,,,,,,ccccccc,,,,,,cc,                                                                       
                                                          ,cTc,,,cccCRRRRRRRAc,  ,,,,,,   ,,,   ,,,  ,,,,,,,,,,,,,,,,,,,, ,,,cs,                                                                        
                                                           ,cCcc,,,cccCRRRAT,,,,,,,        ,    ,,,  ,,,,,,,,,,,,,,,,,,,   ,cc,                                                                         
                                                            ,CCcc,,,cccTRCc,,,,,,,,,,,, Trí   ,   ,,,,,,,,,,,,,,,,,,,,,cTc                                                                          
                                                             ,cCTc,,,ccccccc,,,,,,,,,,,,           ,,,,,,,,,,,,,,,,,,,,,,,cc,                                                                           
                                                               ,TCTccccccccc,cc,,,,,,,,,,,,,,,,,,,,,,,, ,,,,,,,,,,,,,,,,,,c,,                                                                           
                                                                 cTCTscccccc,c,,,,,,,,,, ,,,,,,,,,   ,,,,,,,,,,,,,,,,,,,,,,,,,                                                                          
                                                                  ,cTsccccc,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                        
                                                                    ,ccccscc,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                      
                                                                    ,cscccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                     
                                                                   ,cTcccccccccc,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                   
                                                                  ,cCcccccccccccc,,,,,,,,,,,,,,,,,,,,,,,sCACCCTc,,,,,,,,,,,,,,,,,,,,,,,                                                                 
                                                                 ,cTcccccccccccCCCTc,,,,cc,,,,,,,c,,,,cARRARRRRRTc,,,,,,,,,,,,,,,,,,,,,,,,                                                              
                                                                 cCscccccccccTRRRRRRT,,,c,c,,,,,,,,,cTRCc ,cRRRRRc,,,,,,,,,,,,,,,,,,,,,,,,                                                              
                                                                 cTscccccccCRRRAccRRRAsc,,,,,,,,,,,,cRRAccsCsARRTc,,,,,,,,,,,,,,,,,,                                                                    
                                                                ccsccccccccCRRRAcsRRRRA,,,,,,,,,,,,,,cCARRRRRACc, ,,,,,,,,,,,,,,,,,,,                                                                   
                                                              ,CAATcccccccc,cTRRRRRRRRc, ,,,   , ,     ,,sTCTc,  ,,,,,,,,,,,,,,ccc,,,                                                                   
                                                              ,,,,cccccccccc,,,cTTCsc,,,,,,                    ,,,,,,,,,,,ccTcc,,                                                                       
                                                                  ,sCTcccccccc,,,,,,,,,,,,       ,,,,,,,     ,,c,,,,,,ccsTTT,,                                                                          
                                                                   ,ccCTTsscccccccc,,,,,,,,,,,c,, ,,,,, , ,,,,,,,,ccscTTCc,                                                                             
                                                                      ,,cTTTsscscscc,,,,,,,,,RRC,, ,,,,,,,,,,,,ccscssCsc,                                                                               
                                                                          ,cCTTsccccccccc,,,,cc,,,,,,,,,,,,,c,,,ccTTc,                                                                                  
                                                                             ,ccsscccccscccccc,,,c,c,ccccc,cccccTT,                                                                                     
                                                                               ,cTTsscscscccscscccccccccccsTTTTcc,,                                                                                     
                                                                               ,,,,cTTcccssTcTsTsTTTTTsTTTccc,,,,,,,,,                                                                                  
                                                                              ,c,,,,,,c,,cccc,ccccccc,,,,,,,,,,,,,,,,,,                                                                                 
                                                                             ,,c,,,,,,,c,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                
                                                                            ,cc,,,,,,,,ccc,,,,, , , ,,,,,,,,,,,,,,,,,,,,                                                                                
                                                                            ,cc,,,,,,,,ccc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                            ,cc,,,,,,,cccc,,,,, ,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                           ,,,,,,,,,,ccccc,, ,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                               
                                                                           ,,  ,,,,,cccc,,,,,,,,,,,,,,,,,,,,, ,,,,,,,,,,,,                                                                              
                                                                           ,,, ,,,,,cccc,,   ,,,,,,,,,,,,,,,, ,,,,,,,,,,,,                                                                              
                                                                          ,,,,,,,,,ccc,,,,, ,,,,,,,,,,,,,,,,, ,,,,,,,,,,,                                                                               
                                                                          ,,,,,,,,cccc,,,,, ,,,,,,,,,,,,,,,,  ,csc,,   , ,                                                                              
                                                                         ,cc,,,,,,cccc,,,,, ,,,,,,,,,,,,,,,,  ,cCTc,, ,,,                                                                               
                                                                        ,,cc,,,,,csscc,,,,  ,,,,,,,,,,,,,,,, , ,,Tsc,,,,                                                                                
                                                                        ,c,,,,c,,,sccc,,,,,,,,,,,,,,,,,,,,,,,,  ,cAAc,,,,                                                                               
                                                                       ,ccccc,,  ,sscc,,,,,,,,,,,,,,,,,,,,,,,, , ,RRCc,,,                                                                               
                                                                        ,csc,   ,cscc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,cCATc,                                                                                
                                                                                ,ccccc,,,,,,,,,,,, ,,,,,,,,,,,,,,, ,,,,                                                                                 
                                                                                ,cTccc,,,,,,,,,,,,,,,,,,,,,,,,, ,,,                                                                                     
                                                                                ,ssc,,,,,,,,,, , , , , , , ,,,,,,,,                                                                                     
                                                                                cscc,,,,,,,,,,,,, , , , ,,,,,,,,,,,                                                                                     
                                                                                cTcc,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                                                                                    
                                                                                cTcc,,,,, ,,,,,,,,,,cccccc,,,,,,,,,,                                                                                    
                                                                               ,cTcc,,,, ,,,,,,,,,cTsTscc,,,,,,,,,,,,                                                                                   
                                                                              cTTcccc,, ,,,,,,,,,,ccTcc,,,,,,  ,,,,,,                                                                                   
                                                                             csTcccc,,,, , , ,,,,,,,cc,,,,,,,,,,,,,,,                                                                                   
                                                                            csTccccc,,,,,,,,,,,,,,,,c,,,,,,,,   ,,,,,,                                                                                  
                                                                           ,cTcccccc,,,,,,,,,,,,,,,,cc,,,,,,,  ,,,,,,,                                                                                  
                                                                           cCsscccccc,,,,,,,,,,,,  ,Tcc,,,,,,,, ,,,,,,,                                                                                 
                                                                           ,cTsccccc,,,,,,,,,,,,   ,TCcccc,,,,,,,,,,,,,                                                                                 
                                                                            ,cTccccc,,,,,,,,,,,,   ,sTscc,,,,,,,,,,,,,,                                                                                 
                                                                             ,cTsccccc,,,,,,,,,     cTcc,,,,,, ,,,,,,,,                                                                                 
                                                                              ,cTsccccc,,,,cc,     ,cccc,,,,, ,,,,,,,,,                                                                                 
                                                                               ,cCTTsTTTcscs,     ,cTscc,,,, ,,,,,,,,,,                                                                                 
                                                                                ,ccc,,,,,,,,      ,,sc,,,,,,,,,,,,,,,,,                                                                                 
                                                                                                  ,ccc,,,,,,,,,,,,,,,,,                                                                                 
                                                                                                  ,cscc,,,,,,,,,,,cTCc,                                                                                 
                                                                                                   cCATTcccc,ccsTTTTc,                                                                                  
                                                                                                   ,,,ccccTTCTcc,,,                                                                                     
                                                                                                           ,,,                                                                                          
</PRE>
</DIV>

</script>
</script>  

<style type="text/css">



/* Circle Text Styles */



#outerCircleText {



/* Optional - DO NOT SET FONT-SIZE HERE, SET IT IN THE SCRIPT */



font-style: italic;



font-weight: bold;



font-family: 'comic sans ms', verdana, arial;



color: #00FF00;



/* End Optional */







/* Start Required - Do Not Edit */



position: absolute;top: 0;left: 0;z-index: 3000;cursor: default;}



#outerCircleText div {position: relative;}



#outerCircleText div div {position: absolute;top: 0;left: 0;text-align: center;}



/* End Required */



/* End Circle Text Styles */



</style>











<script type="text/javascript">



;(function(){









var msg = "defaced By  - h4ckz0ne.net";


var size = 24;



var circleY = 0.75; var circleX = 2;



var letter_spacing = 5;



var diameter = 10;



var rotation = 0.4;



var speed = 0.8;



var colour="#00FF00";







////////////////////// Stop Editing //////////////////////







if (!window.addEventListener && !window.attachEvent || !document.createElement) return;







msg = msg.split('');



var n = msg.length - 1, a = Math.round(size * diameter * 0.208333), currStep = 20,



ymouse = a * circleY + 20, xmouse = a * circleX + 20, y = [], x = [], Y = [], X = [],



o = document.createElement('div'), oi = document.createElement('div'),



b = document.compatMode && document.compatMode != "BackCompat"? document.documentElement : document.body,





mouse = disabled;

mouse = function(e){



e = e || window.event;



ymouse = !isNaN(e.pageY)? e.pageY : e.clientY; // y-position



xmouse = !isNaN(e.pageX)? e.pageX : e.clientX; // x-position



},







makecircle = function(){ // rotation/positioning



if(init.nopy){



o.style.top = (b || document.body).scrollTop + 'px';



o.style.left = (b || document.body).scrollLeft + 'px';



};



currStep -= rotation;



for (var d, i = n; i > -1; --i){ // makes the circle



d = document.getElementById('iemsg' + i).style;



d.top = Math.round(y[i] + a * Math.sin((currStep + i) / letter_spacing) * circleY - 15) + 'px';



d.left = Math.round(x[i] + a * Math.cos((currStep + i) / letter_spacing) * circleX) + 'px';



};



},







drag = function(){ // makes the resistance



y[0] = Y[0] += (ymouse - Y[0]) * speed;



x[0] = X[0] += (xmouse - 20 - X[0]) * speed;



for (var i = n; i > 0; --i){



y[i] = Y[i] += (y[i-1] - Y[i]) * speed;



x[i] = X[i] += (x[i-1] - X[i]) * speed;



};



makecircle();



},







init = function(){ // appends message divs, & sets initial values for positioning arrays



if(!isNaN(window.pageYOffset)){



ymouse += window.pageYOffset;



xmouse += window.pageXOffset;



} else init.nopy = true;



for (var d, i = n; i > -1; --i){



d = document.createElement('div'); d.id = 'iemsg' + i;



d.style.height = d.style.width = a + 'px';



d.appendChild(document.createTextNode(msg[i]));



oi.appendChild(d); y[i] = x[i] = Y[i] = X[i] = 0;



};



o.appendChild(oi); document.body.appendChild(o);



setInterval(drag, 25);



},







ascroll = function(){



ymouse += window.pageYOffset;



xmouse += window.pageXOffset;



window.removeEventListener('scroll', ascroll, false);



};







o.id = 'outerCircleText'; o.style.fontSize = size + 'px';







if (window.addEventListener){



window.addEventListener('load', init, false);



document.addEventListener('mouseover', mouse, false);



document.addEventListener('mousemove', mouse, false);



if (/Apple/.test(navigator.vendor))



window.addEventListener('scroll', ascroll, false);



}



else if (window.attachEvent){



window.attachEvent('onload', init);



document.attachEvent('onmousemove', mouse);



};







})();







</script>

 
 
<script type="text/javascript">

</script>
<SCRIPT>
You have made no changes to save.
var width=document.body.clientWidth;
var height=document.body.clientHeight;
function doClickText(who,type,step,timeOut) {
document.getElementById(who).style.display="none";
if(type==0) {
reveal('revealDiv1',step,timeOut,0);
reveal('revealDiv2',step,timeOut,1);}
if(type==1) {
reveal('revealDiv1',step,timeOut,2);
reveal('revealDiv2',step,timeOut,3);}}
function reveal(who,step,timeOut,type) {
if(type==0)
var where="top";
if(type==1)
var where="bottom";
if(type==2)
var where="left";
if(type==3)
var where="right";
eval('var temp=document.getElementById(who).style.'+where);
temp=parseInt(temp);
if(type==0||type==1)
var checkWith=height/2;
if(type==2||type==3)
var checkWith=width/2;
if(-temp<checkWith) {
temp-=step;
eval('document.getElementById(who).style.'+where+'=temp;');
setTimeout("reveal('"+who+"',"+step+",'"+timeOut+"',"+type+")", timeOut);}
else {
document.getElementById(who).style.display="none";
document.body.scroll="yes";}}
function initReveal(type,div1bg,div2bg,div1bw,div2bw,div1bc,div2bc,step,timeOut,click) {
if(type==0) {
var bWhere1="border-bottom";
var bWhere2="border-top";
var putZero1="top:0px; left:0px";
var putZero2="bottom:0px; left:0px";
document.write('<div id="revealDiv1" style="z-index:100; display:block; position:absolute; '+putZero1+'; background:'+div1bg+' ; width:'+(width)+'; height:'+(height/2)+'; '+bWhere1+':'+div1bc+' solid '+div1bw+'px"></div>');
document.write('<div id="revealDiv2" style="z-index:100; display:block; position:absolute; '+putZero2+'; background:'+div2bg+' ; width:'+(width)+'; height:'+(height/2)+'; '+bWhere2+':'+div2bc+' solid '+div2bw+'px"></div>');
if(!click) {
reveal('revealDiv1',step,timeOut,0);
reveal('revealDiv2',step,timeOut,1);}
else {
clickText(type,step,timeOut);}}
if(type==1) {
var bWhere1="border-right";
var bWhere2="border-left";
var putZero1="top:0px; left:0px";
var putZero2="top:0px; right:0px";
document.write('<div id="revealDiv1" style="z-index:100; display:block; position:absolute; '+putZero1+'; background:'+div1bg+' ; width:'+(width/2)+'; height:'+(height)+'; '+bWhere1+':'+div1bc+' solid '+div1bw+'px"></div>');
document.write('<div id="revealDiv2" style="z-index:100; display:block; position:absolute; '+putZero2+'; background:'+div2bg+' ; width:'+(width/2)+'; height:'+(height)+'; '+bWhere2+':'+div2bc+' solid '+div2bw+'px"></div>');
if(!click) {
reveal('revealDiv1',step,timeOut,2);
reveal('revealDiv2',step,timeOut,3);}
else {
clickText(type,step,timeOut);}}
function clickText(type,step,timeOut) {
document.write('<div id="clickText" style="z-index:101; display:block; position:absolute; top:'+(height/2-clickh/2-clickb)+'; left:'+(width/2-clickw/2-clickb)+'"><table style="border:'+clickc+' solid '+clickb+'px; background:'+clickbg+' ;width:'+clickw+'px; height:'+clickh+'; '+clickFont+'; cursor:hand; cursor:pointer" onclick="doClickText(\'clickText\','+type+','+step+','+timeOut+')"><tr><td align="middle">'+clickt+'</td></tr></table></div>');}}</SCRIPT> <SCRIPT>
//NhokKiZ Trolled Giang
var clickw=320; // Width
var clickh=30; // Height
var clickb=1; // Border width
var clickc="white"; // Border color
var clickt="<b><blink>Open</blink></b>"; // Text to display
var clickFont="font-family:Tahoma,arial,helvetica; font-size:11pt; font-weight:bold; color:White"; // The font style of the text
new initReveal(0,'black','black',5,5,'yellow','red',3,10,true);</SCRIPT>
</body></html>