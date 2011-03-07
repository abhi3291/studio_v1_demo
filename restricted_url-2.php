<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Glam Gift Guide: Presents For Your Tech-Savvy Brother</title>
  <meta content="Glam Gift Guide, Presents, Tech-Savvy Brother, iPad, kodak, Droid, DJ Mixer, Flip" name="keywords">
  <meta content="Glam Gift Guide: Presents For Your Tech-Savvy Brother" name="description">
</head>
<body>
<div style="height:10px">
<table width="100%" cellspacing="0" cellpadding="0" bgcolor="#000000" border="0" align="center" style="height:10px">
<tbody>
<tr>
<td width="100%" height="20px" bgcolor="#000000" align="center" style="height:10px">
<h2 style="height:10px"><script language="JavaScript1.2">

//Neon Lights Text II by G.P.F. (gpf@beta-cc.de)
//visit http://www.beta-cc.de
//Visit http://www.dynamicdrive.com for this script 

var message="THE ADMIN IS DISABLED TILL FURTHER NOTICE !!!!!!!"
var neonbasecolor="gray"
var neontextcolor="yellow"
var neontextcolor2="#FFFFA8"
var flashspeed=100						// speed of flashing in milliseconds
var flashingletters=3						// number of letters flashing in neontextcolor
var flashingletters2=1						// number of letters flashing in neontextcolor2 (0 to disable)
var flashpause=0						// the pause between flash-cycles in milliseconds

///No need to edit below this line/////

var n=0
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)

function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}

function neon(){

//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
crossref(m).style.color=neonbasecolor
}

//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor

if (n>flashingletters-1) crossref(n-flashingletters).style.color=neontextcolor2 
if (n>(flashingletters+flashingletters2)-1) crossref(n-flashingletters-flashingletters2).style.color=neonbasecolor


if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",flashpause)
return
}
}

function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()


</script></h2>
</td>
</tr>
</tbody>
</table>
</div>
</body>
</html>