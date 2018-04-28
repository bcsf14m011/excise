<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;}

.topnav {
  margin-left:4.8%;
  margin-right:4.8%;
  overflow: hidden;
  background-color:#2E4B7A;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 50px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: none;
  color: white;
}

.topnav .icon {
  display: none;
}





.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}



@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}


.square {
    float:left;
    position: relative;
    width: 20%;
    padding-bottom: 20%; /* = width for a 1:1 aspect ratio */
    margin:1.66%;
    overflow:hidden;
  background-color:#2E4B7A;
  margin-left:5%;
}
.square1 {
    float:left;
    position: relative;
    width: 20%;
    padding-bottom: 20%; /* = width for a 1:1 aspect ratio */
    margin:1.66%;
    overflow:hidden;
  background-color:white;
  margin-left:1%;
}
.square2 {
    float:left;
    position: relative;
    width: 20%;
    padding-bottom: 20%; /* = width for a 1:1 aspect ratio */
    margin:1.66%;
    overflow:hidden;
  background-color:white;
  margin-left:5%;
}
.square3 {
    float:left;
    position: relative;
    width: 100%;
    /* = width for a 1:1 aspect ratio */
    margin:1.66%;
    overflow:hidden;
  background-color:white;
  margin-left:5%;
  
}
.square4 {
    float:left;
    position: relative;
   width: 40%;
    padding-bottom: 1%;
   
    margin:1.66%;
    overflow:hidden;
  background-color:white;
  margin-left:5%;
  border:2px solid white;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  
  
}


.content {
    position:absolute;
    height:80%; /* = 100% - 2*10% padding */
    width:90%; /* = 100% - 2*5% padding */
    padding: 10% 5%;
  color:white;
  margin-top:35%;
  
}
.content1 {
    position:absolute;
    height:80%; /* = 100% - 2*10% padding */
    width:90%; /* = 100% - 2*5% padding */
    padding: 10% 5%;
  color:white;
  
  
}
.content1 {
    position:absolute;
    height:80%; /* = 100% - 2*10% padding */
    width:90%; /* = 100% - 2*5% padding */
    padding: 10% 5%;
  color:black;
  
  
}

.content1 .rs{
    width:100%;
    height:80%;
   
}
#footer-sub{
    background-color: #f3f7f8;
    border-top: 1px solid #dbdbdb;
}

#footer-main{
    background-color: #012b72;
}

#footer-sub h5{
    color:#565656;
    margin-top: 25px;
}

#footer-sub ul{
    list-style: none;
    margin-top: 20px;
}

#footer-sub hr{
    margin: 5px;

}

#footer-sub ul li{
margin-left: -3px;
}

#footer-sub a:link {
    text-decoration: none;
    color:#565656;
    font-size: 12px;
}

#footer-sub a:visited {
    text-decoration: none;
    color:#565656;
}


#footer-sub a:hover {
    text-decoration: none;
    color: blue;
}


#footer-sub a:active {
    text-decoration: none;
    color:#565656;
}

.vertical-line{
    border-right: 1px solid #dbdbdb;
    margin: 8px;
    padding: 0px;
}

.glyphicon {
    font-size: 35px;
     color:#6d6c6c;
}

#sub-two{
    margin: 0px;
    padding: 0px;
}

#sub-two .vertical-line h4{
    color:#6d6c6c;
}


#footer-main ul{
    list-style: none;
  margin-left:18%;
}

#footer-main ul li{
    float:left;
    text-decoration: none;
    padding-left: 40px;
    margin-top: 17px;
  
}

#footer-main a:link {
    color:white;
    font-size: 12px;
}

#footer-main a:visited {
    color:white;
}


#footer-main a:hover {
    text-decoration: none;
    color: #00b9f5;
}


#footer-main a:active {
    color:white;
}

.glyphicon-search{
    font-size: 20px;
}

#social-menu{
    float: right;
   margin-right: 60px;
}

#side-padding{
    padding: 0px;
    margin: 0px;
}

.p1:hover {
    background-color: #3368BD;
}
</
</style>
</head>
<body>
<div class="logo" style="padding-top:20px;padding-left:90px">
<img src="img/logo.png" />

</div>

<br><br>




<div class="topnav" id="myTopnav" style= "padding-left:50px">
  <a href="#home" class="active">About Us</a>
  <a href="/appeal">Lodge Appeal</a>
  <a href="#contact">Services</a>
  <a href="#financials">Financials</a>
  <a href="#financials">Media Room</a>
 
  <a href="#about">Tax Calculator</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<script type="text/javascript">
!function(g,i,m,f,d,k,e){new(function(){});var c={D:m.PI,s:m.max,q:m.min,Z:m.ceil,Y:m.floor,vb:m.abs,zb:m.sin,mc:m.cos,ee:m.tan,Af:m.atan,nc:m.sqrt,p:m.pow,Xd:m.random,z:m.round},h={Ze:function(a){return-c.mc(a*c.D)/2+.5},yb:function(a){return a},af:function(a){return a*a},yd:function(a){return-a*(a-2)},bf:function(a){return(a*=2)<1?1/2*a*a:-1/2*(--a*(a-2)-1)},ef:function(a){return a*a*a},gf:function(a){return(a-=1)*a*a+1},of:function(a){return(a*=2)<1?1/2*a*a*a:1/2*((a-=2)*a*a+2)},Df:function(a){return a*a*a*a},qf:function(a){return-((a-=1)*a*a*a-1)},rf:function(a){return(a*=2)<1?1/2*a*a*a*a:-1/2*((a-=2)*a*a*a-2)},tf:function(a){return a*a*a*a*a},vf:function(a){return(a-=1)*a*a*a*a+1},zf:function(a){return(a*=2)<1?1/2*a*a*a*a*a:1/2*((a-=2)*a*a*a*a+2)},Bf:function(a){return 1-c.mc(c.D/2*a)},nf:function(a){return c.zb(c.D/2*a)},Ae:function(a){return-1/2*(c.mc(c.D*a)-1)},ze:function(a){return a==0?0:c.p(2,10*(a-1))},xe:function(a){return a==1?1:-c.p(2,-10*a)+1},ve:function(a){return a==0||a==1?a:(a*=2)<1?1/2*c.p(2,10*(a-1)):1/2*(-c.p(2,-10*--a)+2)},we:function(a){return-(c.nc(1-a*a)-1)},ye:function(a){return c.nc(1-(a-=1)*a)},Be:function(a){return(a*=2)<1?-1/2*(c.nc(1-a*a)-1):1/2*(c.nc(1-(a-=2)*a)+1)},Ce:function(a){if(!a||a==1)return a;var b=.3,d=.075;return-(c.p(2,10*(a-=1))*c.zb((a-d)*2*c.D/b))},De:function(a){if(!a||a==1)return a;var b=.3,d=.075;return c.p(2,-10*a)*c.zb((a-d)*2*c.D/b)+1},Me:function(a){if(!a||a==1)return a;var b=.45,d=.1125;return(a*=2)<1?-.5*c.p(2,10*(a-=1))*c.zb((a-d)*2*c.D/b):c.p(2,-10*(a-=1))*c.zb((a-d)*2*c.D/b)*.5+1},Fe:function(a){var b=1.70158;return a*a*((b+1)*a-b)},Se:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},Qe:function(a){var b=1.70158;return(a*=2)<1?1/2*a*a*(((b*=1.525)+1)*a-b):1/2*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},Kd:function(a){return 1-h.gd(1-a)},gd:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},Le:function(a){return a<1/2?h.Kd(a*2)*.5:h.gd(a*2-1)*.5+.5},Vf:c.Z,Rg:c.Y};var b=new function(){var j=this,vb=/\S+/g,F=1,pb=2,sb=3,rb=4,Z=5,G,r=0,n=0,A=0,H=navigator,fb=H.appName,p=H.userAgent,q=parseFloat;function Eb(){if(!G){G={hd:"ontouchstart"in g||"createTouch"in i};var a;if(H.pointerEnabled||(a=H.msPointerEnabled))G.wd=a?"msTouchAction":"touchAction"}return G}function u(h){if(!r){r=-1;if(fb=="Microsoft Internet Explorer"&&!!g.attachEvent&&!!g.ActiveXObject){var e=p.indexOf("MSIE");r=F;n=q(p.substring(e+5,p.indexOf(";",e)));/*@cc_on@*/}else if(fb=="Netscape"&&!!g.addEventListener){var d=p.indexOf("Firefox"),b=p.indexOf("Safari"),f=p.indexOf("Chrome"),c=p.indexOf("AppleWebKit");if(d>=0){r=pb;n=q(p.substring(d+8))}else if(b>=0){var i=p.substring(0,b).lastIndexOf("/");r=f>=0?rb:sb;n=q(p.substring(i+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(p);if(a){r=F;n=q(a[1])}}if(c>=0)A=q(p.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(p);if(a){r=Z;n=q(a[2])}}}return h==r}function v(){return u(F)}function xb(){return u(pb)}function qb(){return u(sb)}function ub(){return u(Z)}function mb(){return qb()&&A>534&&A<535}function I(){u();return A>537||n>42||r==F&&n>=11}function nb(a){var b,c;return function(g){if(!b){b=d;var f=a.substr(0,1).toUpperCase()+a.substr(1);l([a].concat(["WebKit","ms","Moz","O","webkit"]),function(h,d){var b=a;if(d)b=h+f;if(g.style[b]!=e)return c=b})}return c}}function lb(b){var a;return function(c){a=a||nb(b)(c)||b;return a}}var L=lb("transform");function eb(a){return{}.toString.call(a)}var bb={};l(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){bb["[object "+a+"]"]=a.toLowerCase()});function l(b,d){var a,c;if(eb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function E(a){return a==f?String(a):bb[eb(a)]||"object"}function cb(a){for(var b in a)return d}function B(a){try{return E(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function jb(b,a){setTimeout(b,a||0)}function ab(b,d,c){var a=!b||b=="inherit"?"":b;l(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a&&(c+=(!a.indexOf(" ")?"":" ")+a);return c}function gb(a,b){if(a===e)a=b;return a}j.fd=Eb;j.xd=v;j.Rf=xb;j.Qf=qb;j.Jf=I;nb("transform");j.id=function(){return n};j.xg=function(){u();return A};j.Ab=jb;j.R=gb;j.cb=function(a,b){b.call(a);return z({},a)};function U(a){a.constructor===U.caller&&a.v&&a.v.apply(a,U.caller.arguments)}j.v=U;j.Ob=function(a){if(j.ug(a))a=i.getElementById(a);return a};function t(a){return a||g.event}j.sg=t;j.Vb=function(b){b=t(b);var a=b.target||b.srcElement||i;if(a.nodeType==3)a=j.ed(a);return a};j.ue=function(a){a=t(a);return a.relatedTarget||a.toElement};j.de=function(a){a=t(a);return a.which||([0,1,3,0,2])[a.button]||a.charCode||a.keyCode};j.kd=function(a){a=t(a);return{x:a.clientX||0,y:a.clientY||0}};j.yg=function(b,a){return b.x>=a.x&&b.x<=a.x+a.w&&b.y>=a.y&&b.y<=a.y+a.h};j.be=function(c,e){var a=b.lg(e),d=b.kd(c);return j.yg(d,a)};function w(c,d,a){if(a!==e)c.style[d]=a==e?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&g.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,f);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function X(b,c,a,d){if(a===e){a=q(w(b,c));isNaN(a)&&(a=f);return a}if(a==f)a="";else d&&(a+="px");w(b,c,a)}function m(c,a){var d=a?X:w,b;if(a&4)b=lb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function zb(a){return q(a.style.opacity||"1")}function Bb(b,a){b.style.opacity=a==1?"":c.z(a*100)/100}var N={Q:["rotate"],nb:["rotateX"],ob:["rotateY"],bc:["skewX"],cc:["skewY"]};if(!I())N=z(N,{V:["scaleX",2],U:["scaleY",2],pb:["translateZ",1]});function M(c,a){var b="";if(a){if(v()&&n&&n<10){delete a.nb;delete a.ob;delete a.pb}l(a,function(d,c){var a=N[c];if(a){var e=a[1]||0;if(O[c]!=d)b+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(I()){if(a.xb||a.ub||a.pb!=e)b+=" translate3d("+(a.xb||0)+"px,"+(a.ub||0)+"px,"+(a.pb||0)+"px)";if(a.V==e)a.V=1;if(a.U==e)a.U=1;if(a.V!=1||a.U!=1)b+=" scale3d("+a.V+", "+a.U+", 1)"}}c.style[L(c)]=b}j.hg=m("transformOrigin",4);j.Dg=m("backfaceVisibility",4);m("transformStyle",4);j.eg=m("perspective",6);j.fg=m("perspectiveOrigin",4);j.gg=function(b,a){if(v()&&n<9)b.style.zoom=a==1?"":a;else{var c=L(b),f=a==1?"":"scale("+a+")",e=b.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=ab(e,[g],f);b.style[c]=d}};j.mb=function(a,d,b,c){a=j.Ob(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};j.Hb=function(a,c,d,b){a=j.Ob(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};j.ec=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=k};j.mg=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};j.eb=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};j.og=function(a,b){if(b==e)return a.textContent||a.innerText;var c=i.createTextNode(b);j.Zb(a);a.appendChild(c)};j.lg=function(b){var a=b.getBoundingClientRect();return{x:a.left,y:a.top,w:a.right-a.left,h:a.bottom-a.top}};j.Xb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function db(a,c,e,b){b=b||"u";for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(C(a,b)==c)return a;if(!e){var d=db(a,c,e,b);if(d)return d}}}j.pe=db;function S(a,d,g,b){b=b||"u";var c=[];for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){C(a,b)==d&&c.push(a);if(!g){var e=S(a,d,g,b);if(e.length)c=c.concat(e)}}return c}j.rg=function(b,a){return b.getElementsByTagName(a)};j.lb=function(a,f,d,g){d=d||"u";var e;do{if(a.nodeType==1){var c;d&&(c=C(a,d));if(c&&c==gb(f,c)||g==a.tagName){e=a;break}}a=b.ed(a)}while(a&&a!=i.body);return e};j.tg=function(a){return W(["INPUT","TEXTAREA","SELECT"])[a.tagName]};function z(){var f=arguments,d,c,b,a,h=1&f[0],g=1+h;d=f[g-1]||{};for(;g<f.length;g++)if(c=f[g])for(b in c){a=c[b];if(a!==e){a=c[b];var i=d[b];d[b]=h&&(B(i)||B(a))?z(h,{},i,a):a}}return d}j.O=z;function V(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(B(a)&&B(b)){a=V(a,b);e=!cb(a)}!e&&(d[c]=a)}}return d}j.Zd=function(a){return E(a)=="function"};j.wg=function(a){return E(a)=="array"};j.ug=function(a){return E(a)=="string"};j.dc=function(a){return!isNaN(q(a))&&isFinite(a)};j.c=l;j.ce=B;function Q(a){return i.createElement(a)}j.Kc=function(){return Q("DIV")};j.Pf=function(){return Q("SPAN")};j.Hf=function(){};function D(b,c,a){if(a==e)return b.getAttribute(c);b.setAttribute(c,a)}function C(a,b){return D(a,b)||D(a,"data-"+b)}j.o=D;j.N=C;j.u=function(d,b,c){var a=j.le(C(d,b));if(isNaN(a))a=c;return a};function x(b,a){return D(b,"class",a)||""}function W(b){var a={};l(b,function(b){if(b!=e)a[b]=b});return a}function kb(b,a){return b.match(a||vb)}function P(b,a){return W(kb(b||"",a))}j.re=W;j.Kf=kb;j.Lf=function(a){a&&(a=a.toLowerCase());return a};function Y(b,c){var a="";l(c,function(c){a&&(a+=b);a+=c});return a}function J(a,c,b){x(a,Y(" ",z(V(P(x(a)),P(c)),P(b))))}j.ed=function(a){return a.parentNode};j.rb=function(a){j.Bb(a,"none")};j.ab=function(a,b){j.Bb(a,b?"none":"")};j.ag=function(b,a){b.removeAttribute(a)};j.Sf=function(d,a){if(a)d.style.clip="rect("+c.z(a.g||a.I||0)+"px "+c.z(a.m)+"px "+c.z(a.n)+"px "+c.z(a.i||a.G||0)+"px)";else if(a!==e){var h=d.style.cssText,g=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],f=ab(h,g,"");b.ud(d,f)}};j.Wf=function(b,a){if(a)b.style.backgroundColor="rgba("+c.z(a.td)+","+c.z(a.zd)+","+c.z(a.qd)+","+a.B+")"};j.Kb=function(){return+new Date};j.jb=function(b,a){b.appendChild(a)};j.hc=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};j.Jb=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};j.Cg=function(a,b){l(a,function(a){j.Jb(a,b)})};j.Zb=function(a){j.Cg(j.Xb(a,d),a)};function hb(){l([].slice.call(arguments,0),function(a){if(j.wg(a))hb.apply(f,a);else a&&a.l()})}j.l=hb;j.md=function(a,b){var c=j.ed(a);if(b&1){j.S(a,(j.J(c)-j.J(a))/2);j.sd(a,f)}if(b&2){j.X(a,(j.F(c)-j.F(a))/2);j.Wd(a,f)}};var R={g:f,m:f,n:f,i:f,A:f,C:f};j.Yg=function(a){var b=j.Kc();s(b,{Ud:"block",Ib:j.Db(a),g:0,i:0,A:0,C:0});var d=j.Sd(a,R);j.hc(b,a);j.jb(b,a);var e=j.Sd(a,R),c={};l(d,function(b,a){if(b==e[a])c[a]=b});s(b,R);s(b,c);s(a,{g:0,i:0});return c};j.le=q;j.ke=function(b,a){var c=i.body;while(a&&b!==a&&c!==a)a=a.parentNode;return b===a};function T(d,c,b){var a=d.cloneNode(!c);!b&&j.ag(a,"id");return a}j.Cb=T;j.Gb=function(e,f){var a=new Image;function b(e,d){j.Hb(a,"load",b);j.Hb(a,"abort",c);j.Hb(a,"error",c);f&&f(a,d)}function c(a){b(a,d)}if(ub()&&n<11.6||!e)b(!e);else{j.mb(a,"load",b);j.mb(a,"abort",c);j.mb(a,"error",c);a.src=e}};j.Lg=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}l(d,function(a){j.Gb(a.src,b)});b()};j.Kg=function(a,g,i,h){if(h)a=T(a);var c=S(a,g);if(!c.length)c=b.rg(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=T(i);x(e,x(d));b.ud(e,d.style.cssText);b.hc(e,d);b.Jb(d)}return a};function Cb(){var a=this;b.cb(a,o);var d,q="",s=["av","pv","ds","dn"],f=[],r,n=0,k=0,h=0;function m(){J(d,r,(f[h||k&2||k]||"")+" "+(f[n]||""));j.wc(d,h?"none":"")}function c(){n=0;a.K(g,"mouseup",c);a.K(i,"mouseup",c);a.K(i,"touchend",c);a.K(i,"touchcancel",c);a.K(g,"blur",c);m()}function p(b){if(h)j.ec(b);else{n=4;m();a.a(g,"mouseup",c);a.a(i,"mouseup",c);a.a(i,"touchend",c);a.a(i,"touchcancel",c);a.a(g,"blur",c)}}a.Gg=function(a){if(a===e)return k;k=a&2||a&1;m()};a.Fc=function(a){if(a===e)return!h;h=a?0:3;m()};a.v=function(e){a.W=d=j.Ob(e);D(d,"data-jssor-button","1");var c=b.Kf(x(d));if(c)q=c.shift();l(s,function(a){f.push(q+a)});r=Y(" ",f);f.unshift("");a.a(d,"mousedown",p);a.a(d,"touchstart",p)};b.v(a)}j.zc=function(a){return new Cb(a)};j.Lb=w;j.gc=m("overflow");j.wc=m("pointerEvents");j.X=m("top",2);j.sd=m("right",2);j.Wd=m("bottom",2);j.S=m("left",2);j.J=m("width",2);j.F=m("height",2);m("marginLeft",2);m("marginTop",2);j.Db=m("position");j.Bb=m("display");j.M=m("zIndex",1);j.Wg=function(b,a,c){if(a!=e)Bb(b,a,c);else return zb(b)};j.ud=function(a,b){if(b!=e)a.style.cssText=b;else return a.style.cssText};j.Mg=function(b,a){if(a===e){a=w(b,"backgroundImage")||"";var c=/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a)||[];return c[1]}w(b,"backgroundImage",a?"url('"+a+"')":"")};var K;j.Bg=K={B:j.Wg,g:j.X,m:j.sd,n:j.Wd,i:j.S,A:j.J,C:j.F,Ib:j.Db,Ud:j.Bb,gb:j.M};j.Sd=function(c,b){var a={};l(b,function(d,b){if(K[b])a[b]=K[b](c)});return a};function s(b,h){var a=I(),d=mb(),g=L(b);function c(l,a){a=a||{};var h=a.pb||0,i=(a.nb||0)%360,j=(a.ob||0)%360,k=(a.Q||0)%360,c=a.V,d=a.U,f=a.gh;if(c==e)c=1;if(d==e)d=1;if(f==e)f=1;var b=new yb(a.xb,a.ub,h);b.Jc(c,d,f);b.Fg(a.bc,a.cc);b.nb(i);b.ob(j);b.Qg(k);b.Wb(a.G,a.I);l.style[g]=b.Ug()}s=function(g,b){b=b||{};var i=b.G,k=b.I,h;l(K,function(a,c){h=b[c];h!==e&&a(g,h)});j.Sf(g,b.f);j.Wf(g,b.wb);if(!a){i!=e&&j.S(g,(b.Ed||0)+i);k!=e&&j.X(g,(b.Dd||0)+k)}if(b.Gf)if(d)jb(j.eb(f,M,g,b));else if(a)c(g,b);else M(g,b)};j.L=s;s(b,h)}j.Ef=M;j.L=s;function yb(j,k,n){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,j||0,k||0,n||0,1],i=c.zb,h=c.mc,l=c.ee;function g(a){return a*c.D/180}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(f,(a||b).concat(c))}d.Jc=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.Wb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.nb=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([1,0,0,0,0,d,f,0,0,-f,d,0,0,0,0,1])}};d.ob=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,0,-f,0,0,1,0,0,f,0,d,0,0,0,0,1])}};d.Qg=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,f,0,0,-f,d,0,0,0,0,1,0,0,0,0,1])}};d.Fg=function(a,c){if(a||c){j=g(a);k=g(c);b=e([1,l(k),0,0,l(j),1,0,0,0,0,1,0,0,0,0,1])}};d.Ug=function(){return"matrix3d("+b.join(",")+")"}}var O={Ed:0,Dd:0,G:0,I:0,bb:1,V:1,U:1,Q:0,nb:0,ob:0,xb:0,ub:0,pb:0,bc:0,cc:0};j.Qc=function(c,d){var a=c||{};if(c)if(b.Zd(c))a={R:a};else if(b.Zd(c.f))a.f={R:c.f};a.R=a.R||d;if(a.f)a.f.R=a.f.R||d;if(a.wb)a.wb.R=a.wb.R||d;return a};function ib(c,a){var b={};l(c,function(c,d){var f=c;if(a[d]!=e)if(j.dc(c))f=c+a[d];else f=ib(c,a[d]);b[d]=f});return b}j.Ie=ib;j.Hd=function(o,j,s,t,E,F,p){var a=j;if(o){a={};for(var i in j){var G=F[i]||1,B=E[i]||[0,1],g=(s-B[0])/B[1];g=c.q(c.s(g,0),1);g=g*G;var y=c.Y(g);if(g!=y)g-=y;var k=t.R||h.yb,m,C=o[i],r=j[i];if(b.dc(r)){k=t[i]||k;var D=k(g);m=C+r*D}else{m=z({vc:{}},o[i]);var A=t[i]||{};l(r.vc||r,function(d,a){k=A[a]||A.R||k;var c=k(g),b=d*c;m.vc[a]=b;m[a]+=b})}a[i]=m}var x=l(j,function(b,a){return O[a]!=e});x&&l(O,function(c,b){if(a[b]==e&&o[b]!==e)a[b]=o[b]});if(x){if(a.bb)a.V=a.U=a.bb;a.Yb=p.Yb;a.Sb=p.Sb;if(v()&&n>=11&&(j.G||j.I)&&s!=0&&s!=1)a.Q=a.Q||1e-8;a.Gf=d}}if(j.f&&p.Wb){var q=a.f.vc,w=(q.g||0)+(q.n||0),u=(q.i||0)+(q.m||0);a.i=(a.i||0)+u;a.g=(a.g||0)+w;a.f.i-=u;a.f.m-=u;a.f.g-=w;a.f.n-=w}if(a.f&&!a.f.g&&!a.f.i&&!a.f.I&&!a.f.G&&a.f.m==p.Yb&&a.f.n==p.Sb)a.f=f;return a}};function o(){var a=this,f,e=[],c=[];function k(a,b){e.push({Rb:a,Tb:b})}function j(a,c){b.c(e,function(b,d){b.Rb==a&&b.Tb===c&&e.splice(d,1)})}function i(){e=[]}function h(){b.c(c,function(a){b.Hb(a.Id,a.Rb,a.Tb,a.Jd)});c=[]}a.bd=function(){return f};a.a=function(e,a,d,f){b.mb(e,a,d,f);c.push({Id:e,Rb:a,Tb:d,Jd:f})};a.K=function(e,a,d,f){b.c(c,function(g,h){if(g.Id===e&&g.Rb==a&&g.Tb===d&&g.Jd==f){b.Hb(e,a,d,f);c.splice(h,1)}})};a.Ld=h;a.Sc=a.addEventListener=k;a.removeEventListener=j;a.j=function(a){var c=[].slice.call(arguments,1);b.c(e,function(b){b.Rb==a&&b.Tb.apply(g,c)})};a.l=function(){if(!f){f=d;h();i()}}}var l=function(C,D,i,m,R,Q){C=C||0;var a=this,p,n,o,s,F=0,O=1,L,M,K,G,B=0,j=0,r=0,A,l,f,h,q,z,u=[],y,I=k,J,H=k;function T(a){f+=a;h+=a;l+=a;j+=a;r+=a;B+=a}function x(x){var k=x;if(q)if(!z&&(k>=h||k<f)||z&&k>=f)k=((k-f)%q+q)%q+f;if(!A||s||j!=k){var g=c.q(k,h);g=c.s(g,f);if(i.rc)g=h-g+f;if(!A||s||g!=r){if(Q){var w=(g-l)/(D||1),o=b.Hd(R,Q,w,L,K,M,i);if(y)b.c(o,function(b,a){y[a]&&y[a](m,b)});else b.L(m,o);var n;if(J){toDisablePointerEventsByAnimation=g>f&&g<h;if(toDisablePointerEventsByAnimation!=H)n=H=toDisablePointerEventsByAnimation}if(!n&&o.B!=e){var p=o.B<.001;if(p!=I)n=I=p}if(n!=e){n&&b.wc(m,"none");!n&&b.wc(m,b.o(m,"data-events"))}}var v=r,t=r=g;b.c(u,function(b,c){var a=!A&&z||k<=j?u[u.length-c-1]:b;a.H(g-B)});j=k;A=d;a.Mc(v-l,t-l);a.Nb(v,t)}}}function E(a,b,d){b&&a.Mb(h);if(!d){f=c.q(f,a.qc()+B);h=c.s(h,a.sb()+B)}u.push(a)}var v=g.requestAnimationFrame||g.webkitRequestAnimationFrame||g.mozRequestAnimationFrame||g.msRequestAnimationFrame;if(b.Qf()&&b.id()<7||!v)v=function(a){b.Ab(a,i.ib)};function N(){if(p){var d=b.Kb(),e=c.q(d-F,i.Qd),a=j+e*o*O;F=d;if(a*o>=n*o)a=n;x(a);if(!s&&a*o>=n*o)P(G);else v(N)}}function w(e,g,i){if(!p){p=d;s=i;G=g;e=c.s(e,f);e=c.q(e,h);n=e;o=n<j?-1:1;a.Oc();F=b.Kb();v(N)}}function P(b){if(p){s=p=G=k;a.Pc();b&&b()}}a.Rd=function(a,b,c){w(a?j+a:h,b,c)};a.pc=w;a.Xe=function(a,b){w(h,a,b)};a.E=P;a.Vd=function(){return j};a.Bd=function(){return n};a.k=function(){return r};a.H=x;a.wf=function(){x(h,d)};a.Rc=function(){return p};a.nd=function(a){O=a};a.Mb=T;a.P=function(a,b){E(a,0,b)};a.Tc=function(a){E(a,1)};a.ad=function(a){h+=a};a.qc=function(){return f};a.sb=function(){return h};a.Nb=a.Oc=a.Pc=a.Mc=b.Hf;a.Uc=b.Kb();i=b.O({ib:16,Qd:50},i);m&&(J=b.o(m,"data-inactive"));q=i.sc;z=i.kf;y=i.jf;f=l=C;h=C+D;M=i.z||{};K=i.Yd||{};L=b.Qc(i.T)};var n={cf:"data-scale",Ub:"data-autocenter",Wc:"data-nofreeze",Cd:"data-nodrag"},q=new function(){var a=this;a.Xc=function(c,a,e,d){(d||!b.o(c,a))&&b.o(c,a,e)};a.Yc=function(a){var c=b.u(a,n.Ub);b.md(a,c)}},s=new function(){var h=this;function g(b,a,c){c.push(a);b[a]=b[a]||[];b[a].push(c)}h.lf=function(d){for(var e=[],a,b=0;b<d.qb;b++)for(a=0;a<d.db;a++)g(e,c.Z(1e5*c.Xd())%13,[b,a]);return e}},u=function(m,r,p,u,z,A){var a=this,v,g,e,y=0,x=u.mf,q,i=8;function t(a){if(a.g)a.I=a.g;if(a.i)a.G=a.i;b.c(a,function(a){b.ce(a)&&t(a)})}function j(g,e,f){var a={ib:e,Cc:1,Ab:0,db:1,qb:1,B:0,bb:0,f:0,Wb:k,Ec:k,rc:k,uf:s.lf,he:{xf:0,yf:0},T:h.yb,z:{},kc:[],Yd:{}};b.O(a,g);if(a.qb==0)a.qb=c.z(a.db*f);t(a);a.T=b.Qc(a.T,h.yb);a.We=c.Z(a.Cc/a.ib);a.Cf=function(c,b){c/=a.db;b/=a.qb;var f=c+"x"+b;if(!a.kc[f]){a.kc[f]={A:c,C:b};for(var d=0;d<a.db;d++)for(var e=0;e<a.qb;e++)a.kc[f][e+","+d]={g:e*b,m:d*c+c,n:e*b+b,i:d*c}}return a.kc[f]};if(a.Gc){a.Gc=j(a.Gc,e,f);a.Ec=d}return a}function n(z,i,a,v,n,l){var y=this,t,u={},h={},m=[],f,e,r,p=a.he.xf||0,q=a.he.yf||0,g=a.Cf(n,l),o=B(a),C=o.length-1,s=a.Cc+a.Ab*C,w=v+s,j=a.Ec,x;w+=50;function B(a){var b=a.uf(a);return a.rc?b.reverse():b}y.se=w;y.jc=function(d){d-=v;var e=d<s;if(e||x){x=e;if(!j)d=s-d;var f=c.Z(d/a.ib);b.c(h,function(a,e){var d=c.s(f,a.q);d=c.q(d,a.length-1);if(a.ae!=d){if(!a.ae&&!j)b.ab(m[e]);else d==a.s&&j&&b.rb(m[e]);a.ae=d;b.L(m[e],a[d])}})}};i=b.Cb(i);A(i,0,0);b.c(o,function(i,m){b.c(i,function(G){var I=G[0],H=G[1],v=I+","+H,o=k,s=k,x=k;if(p&&H%2){if(p&3)o=!o;if(p&12)s=!s;if(p&16)x=!x}if(q&&I%2){if(q&3)o=!o;if(q&12)s=!s;if(q&16)x=!x}a.g=a.g||a.f&4;a.n=a.n||a.f&8;a.i=a.i||a.f&1;a.m=a.m||a.f&2;var E=s?a.n:a.g,B=s?a.g:a.n,D=o?a.m:a.i,C=o?a.i:a.m;a.f=E||B||D||C;r={};e={I:0,G:0,B:1,A:n,C:l};f=b.O({},e);t=b.O({},g[v]);if(a.B)e.B=2-a.B;if(a.gb){e.gb=a.gb;f.gb=0}var K=a.db*a.qb>1||a.f;if(a.bb||a.Q){var J=d;if(J){e.bb=a.bb?a.bb-1:1;f.bb=1;var N=a.Q||0;e.Q=N*360*(x?-1:1);f.Q=0}}if(K){var i=t.vc={};if(a.f){var w=a.fh||1;if(E&&B){i.g=g.C/2*w;i.n=-i.g}else if(E)i.n=-g.C*w;else if(B)i.g=g.C*w;if(D&&C){i.i=g.A/2*w;i.m=-i.i}else if(D)i.m=-g.A*w;else if(C)i.i=g.A*w}r.f=t;f.f=g[v]}var L=o?1:-1,M=s?1:-1;if(a.x)e.G+=n*a.x*L;if(a.y)e.I+=l*a.y*M;b.c(e,function(a,c){if(b.dc(a))if(a!=f[c])r[c]=a-f[c]});u[v]=j?f:e;var F=a.We,A=c.z(m*a.Ab/a.ib);h[v]=new Array(A);h[v].q=A;h[v].s=A+F-1;for(var z=0;z<=F;z++){var y=b.Hd(f,r,z/F,a.T,a.Yd,a.z,{Wb:a.Wb,Yb:n,Sb:l});y.gb=y.gb||1;h[v].push(y)}})});o.reverse();b.c(o,function(a){b.c(a,function(c){var f=c[0],e=c[1],d=f+","+e,a=i;if(e||f)a=b.Cb(i);b.L(a,u[d]);b.gc(a,"hidden");b.Db(a,"absolute");z.Re(a);m[d]=a;b.ab(a,!j)})})}function w(){var a=this,b=0;l.call(a,0,v);a.Nb=function(c,a){if(a-b>i){b=a;e&&e.jc(a);g&&g.jc(a)}};a.Hc=q}a.Oe=function(){var a=0,b=u.ic,d=b.length;if(x)a=y++%d;else a=c.Y(c.Xd()*d);b[a]&&(b[a].Eb=a);return b[a]};a.Ne=function(x,y,k,l,b,t){a.tb();q=b;b=j(b,i,t);var h=l.qe,f=k.qe;h["no-image"]=!l.ne;f["no-image"]=!k.ne;var o=h,s=f,w=b,d=b.Gc||j({},i,t);if(!b.Ec){o=f;s=h}var u=d.Mb||0;g=new n(m,s,d,c.s(u-d.ib,0),r,p);e=new n(m,o,w,c.s(d.ib-u,0),r,p);g.jc(0);e.jc(0);v=c.s(g.se,e.se);a.Eb=x};a.tb=function(){m.tb();g=f;e=f};a.Ge=function(){var a=f;if(e)a=new w;return a};if(z&&b.xg()<537)i=16;o.call(a);l.call(a,-1e7,1e7)},r={Nc:1},t=function(){var a=this,D=b.cb(a,o),h,v,C,B,m,l=0,g,s,p,z,A,i,k,u,t,x,j;function y(a){j[a]&&j[a].Gg(a==l)}function w(b){a.j(r.Nc,b*s)}a.Ic=function(a){if(a!=m){var d=l,b=c.Y(a/s);l=b;m=a;y(d);y(b)}};a.Bc=function(a){b.ab(h,a)};a.Ac=function(I){b.l(j);m=e;a.Ld();x=[];j=[];b.Zb(h);v=c.Z(I/s);l=0;var H=u+z,y=t+A,r=c.Z(v/p)-1;C=u+H*(!i?r:p-1);B=t+y*(i?r:p-1);b.J(h,C);b.F(h,B);for(var n=0;n<v;n++){var D=b.Pf();b.og(D,n+1);var o=b.Kg(k,"numbertemplate",D,d);b.Db(o,"absolute");var G=n%(r+1),E=c.Y(n/(r+1)),F=g.lc&&!i?r-G:G;b.S(o,(!i?F:E)*H);b.X(o,(i?F:E)*y);b.jb(h,o);x[n]=o;g.yc&1&&a.a(o,"click",b.eb(f,w,n));g.yc&2&&a.a(o,"mouseenter",b.eb(f,w,n));j[n]=b.zc(o)}q.Yc(h)};a.v=function(d,c){a.W=h=b.Ob(d);a.Dc=g=b.O({ge:10,je:10,yc:1},c);k=b.pe(h,"prototype");u=b.J(k);t=b.F(k);b.Jb(k,h);s=g.oe||1;p=g.qb||1;z=g.ge;A=g.je;i=g.Ee&2;g.kb&&q.Xc(h,n.Ub,g.kb)};a.l=function(){b.l(j,D)};b.v(a)},v=function(){var a=this,v=b.cb(a,o),e,c,g,l,s,k,h,m,j,i;function p(b){a.j(r.Nc,b,d)}function u(a){b.ab(e,a);b.ab(c,a)}function t(){j.Fc((g.Qb||!l.ff(h))&&k>1);i.Fc((g.Qb||!l.pf(h))&&k>1)}a.Ic=function(c,a,b){h=a;!b&&t()};a.Bc=u;a.Ac=function(g){k=g;h=0;if(!s){a.a(e,"click",b.eb(f,p,-m));a.a(c,"click",b.eb(f,p,m));j=b.zc(e);i=b.zc(c);b.o(e,n.Wc,1);b.o(c,n.Wc,1);s=d}};a.v=function(f,d,h,i){a.Dc=g=b.O({oe:1},h);e=f;c=d;if(g.lc){e=d;c=f}m=g.oe;l=i;if(g.kb){q.Xc(e,n.Ub,g.kb);q.Xc(c,n.Ub,g.kb)}q.Yc(e);q.Yc(c)};a.l=function(){b.l(j,i,v)};b.v(a)};function p(e,d,c){var a=this;b.cb(a,o);l.call(a,0,c.Fb);a.uc=0;a.Vc=c.Fb}p.Zc=21;p.ac=24;var w=function(){var a=this,gb=b.cb(a,o);l.call(a,0,0);var e,t,fb=[h.yb,h.Ze,h.af,h.yd,h.bf,h.ef,h.gf,h.of,h.Df,h.qf,h.rf,h.tf,h.vf,h.zf,h.Bf,h.nf,h.Ae,h.ze,h.xe,h.ve,h.we,h.ye,h.Be,h.Ce,h.De,h.Me,h.Fe,h.Se,h.Qe,h.Kd,h.gd,h.Le,h.Vf,h.Rg],R={},H,E,u=new l(0,0),I=[],y=[],G,r=0;function K(d,c){var a={};b.c(d,function(d,f){var e=R[f];if(e){if(b.ce(d))d=K(d,c||f=="e");else if(c)if(b.dc(d))d=fb[d];a[e]=d}});return a}function L(c,f){var e=[],d=b.u(c,"play");if(f&&d){var g=new w(c,t,{Nf:d});P.push(g);a.a(g,p.Zc,Y);a.a(g,p.ac,T)}else b.c(b.Xb(c),function(a){e=e.concat(L(a,f+1))});if(!f&&(!j||j&16)||f&&(!d||!(d&16))){var h=H[b.u(c,"t")];h&&e.push({W:c,Hc:h})}return e}function Q(c,e){var a=I[c];if(a==f){a=I[c]={hb:c,cd:[],te:[]};var d=0;!b.c(y,function(a,b){d=b;return a.hb>c})&&d++;y.splice(d,0,a)}return a}function cb(o,p,g){var a,e;if(E){var k=E[b.u(o,"c")];if(k){a=Q(k.r,0);a.cg=k.e||0}}b.c(p,function(h){var f=b.O(d,{},K(h)),i=b.Qc(f.T);delete f.T;if(f.i){f.G=f.i;i.G=i.i;delete f.i}if(f.g){f.I=f.g;i.I=i.g;delete f.g}var m={T:i,Yb:g.A,Sb:g.C},j=new l(h.b,h.d,m,o,g,f);r=c.s(r,h.b+h.d);if(a){if(!e)e=new l(h.b,0);e.P(j)}else{var k=Q(h.b,h.b+h.d);k.cd.push(j)}if(f.wb)g.wb={td:0,zd:0,qd:0,B:0};g=b.Ie(g,f)});if(a&&e){e.wf();var h=e,i,j=e.qc(),m=e.sb(),n=c.s(m,a.cg);if(a.hb<m){if(a.hb>j){h=new l(j,a.hb-j);h.P(e,d)}else h=f;i=new l(a.hb,n-j,{sc:n-a.hb,kf:d});i.P(e,d)}h&&a.cd.push(h);i&&a.te.push(i)}return g}function bb(a){b.c(a,function(d){var a=d.W,f=b.J(a),e=b.F(a),c={i:b.S(a),g:b.X(a),G:0,I:0,B:1,gb:b.M(a)||0,Q:0,nb:0,ob:0,V:1,U:1,xb:0,ub:0,pb:0,bc:0,cc:0,A:f,C:e,f:{g:0,m:f,n:e,i:0}};c.Ed=c.i;c.Dd=c.g;cb(a,d.Hc,c)})}function eb(f,e,g){var c=f.b-e;if(c){var b=new l(e,c);b.P(u,d);b.Mb(g);a.P(b)}a.ad(f.d);return c}function db(e){var c=u.qc(),d=0;b.c(e,function(e,f){e=b.O({d:3e3},e);eb(e,c,d);c=e.b;d+=e.d;if(!f||e.t==2){a.uc=c;a.Vc=c+e.d}})}function D(g,e,d){var f=e.length;if(f>4)for(var j=c.Z(f/4),a=0;a<j;a++){var h=e.slice(a*4,c.q(a*4+4,f)),i=new l(h[0].hb,0);D(i,h,d);g.P(i)}else b.c(e,function(a){b.c(d?a.te:a.cd,function(a){d&&a.ad(r-a.sb());g.P(a)})})}var j,J,v=0,g,B,m,M,C,P=[],A=[],s,F,n;function z(a){return a&2||a&4&&b.fd().hd}function Z(){if(!C){g&8&&a.a(i,"keydown",S);if(g&32){a.a(i,"mousedown",x);a.a(i,"touchstart",x)}C=d}}function X(){a.K(i,"keydown",S);a.K(i,"mousedown",x);a.K(i,"touchstart",x);C=k}function N(b){if(!s||b){s=d;a.E();b&&v&&a.H(0);a.nd(1);a.Xe();Z();a.j(p.Zc,a)}}function q(){if(!F&&(s||a.k())){F=d;a.E();a.Vd()>a.uc&&a.H(a.uc);a.nd(m||1);a.pc(0)}}function U(){!n&&q()}function O(c){var b=c;if(c<0&&a.k())b=1;if(b!=v){v=b;J&&a.j(p.ac,a,v)}}function S(a){g&8&&b.de(a)==27&&q()}function W(a){if(n&&b.ue(a)!==f){n=k;g&16&&b.Ab(U,160)}}function x(a){g&32&&!b.ke(e,b.Vb(a))&&q()}function V(a){if(!n){n=d;if(j&1)b.be(a,e)&&N()}}function ab(i){var h=b.Vb(i),a=b.lb(h,f,f,"A"),c=a&&(b.tg(a)||a===e||b.ke(e,a));if(s&&z(g))!c&&q();else if(z(j))!c&&N(d)}function Y(b){var a=b.ng();childSlideoPlaying=A[a];childSlideoPlaying!==b&&A[a]&&A[a].dg();A[a]=b}function T(b,c){a.j(p.ac,b,c)}a.ng=function(){return M||""};a.dg=q;a.Oc=function(){O(1)};a.Pc=function(){s=k;F=k;O(-1);!a.k()&&X()};a.Nb=function(){!n&&B&&a.Vd()>a.Vc&&q()};a.v=function(l,h,f){e=l;t=h;j=f.Nf;G=f.vg;H=t.ic;E=t.ch;var k={g:"y",i:"x",n:"m",m:"t",Q:"r",nb:"rX",ob:"rY",V:"sX",U:"sY",xb:"tX",ub:"tY",pb:"tZ",bc:"kX",cc:"kY",B:"o",T:"e",gb:"i",f:"c",wb:"bc",td:"re",zd:"gr",qd:"bl"};b.c(k,function(b,a){R[b]=a});bb(L(e,0));D(u,y);if(j){a.P(u);G=d;B=b.u(e,"idle");(z(j)||z(g))&&a.a(e,"click",ab);if((j&1||B)&&!b.fd().hd){a.a(e,"mouseenter",V);a.a(e,"mouseleave",W)}g=b.u(e,"rollback");m=b.N(e,"speed")||"";if(m.substr(0,1)=="x")m=m.substr(1);m=b.le(m);M=b.N(e,"group");J=b.u(e,"pause")}var i=t.bh||[],c=i[b.u(e,"b")]||[];c=c.concat({b:r,d:c.length?0:f.Fb||B||0});db(c);G&&a.ad(1e8);r=a.sb();D(a,y,d);a.H(-1);a.H(b.u(e,"begin")||0)};a.l=function(){b.l(gb,P);a.E();a.H(-1)};b.v(a)},j=(g.module||{}).exports=function(){var a=this,vc=b.cb(a,o),Kb="data-jssor-slider",Ac="data-jssor-thumb",u,m,R,Hb,eb,sb,Z,M,K,P,Sb,xc=1,oc=1,Ec=1,dc=1,Gc={},x,U,Ub,Yb,Xb,Ib,Gb,Fb,bb,C=[],fc,t=-1,gc,q,I,H,L,kb,lb,F,J,hb,S,z,W,jb,Y=[],jc,lc,Hc,s,rb,Cb,nb,ab,X,ec,Bb,Mb,hc,G,Zb=0,db=0,Q=Number.MAX_VALUE,N=Number.MIN_VALUE,D,ib,fb,T=1,Rb=0,mb,B,zb,yb,O,wb,xb,A,V,ob,y,Jb,Vb=b.fd(),Ab=Vb.hd,w=[],E,tb,cb,ac,yc,Fc,ub;function Eb(){return!T&&X&12}function zc(){return Rb||!T&&X&3}function Db(){return!B&&!Eb()&&!y.Rc()}function Qc(){return!zc()&&Db()}function Cc(){return z||R}function Jc(){return Cc()&2?lb:kb}function Nb(a,c,d){b.S(a,c);b.X(a,d)}function tc(c,b){var a=Cc(),d=(kb*b+Zb)*(a&1),e=(lb*b+Zb)*(a&2)/2;Nb(c,d,e)}function qc(b,f){if(B&&!(D&1)){var e=b,d;if(b<N){e=N;d=-1}if(b>Q){e=Q;d=1}if(d){var a=b-e;if(f){a=c.Af(a)*2/c.D;a=c.p(a*d,1.6)}else{a=c.p(a*d,.625);a=c.ee(a*c.D/2)}b=e+a*d}}return b}function Lc(a){return qc(a,d)}function dd(a){return qc(a)}function vb(a,b){if(!(D&1)){var c=a-Q+(b||0),d=N-a+(b||0);if(c>0&&c>d)a=Q;else if(d>0)a=N}return a}function mc(a){return!(D&1)&&a-N<.0001}function kc(a){return!(D&1)&&Q-a<.0001}function pb(a){return!(D&1)&&(a-N<.0001||Q-a<.0001)}function Ob(c,a,d){!ub&&b.c(Y,function(b){b.Ic(c,a,d)})}function sc(b){var a=b,d=pb(b);if(d)a=vb(a);else{b=v(b);a=b}a=c.Y(a);a=c.s(a,0);return a}function ad(a){if(a!=t){w[t];fc=t;t=a;gc=w[t]}}function Oc(){z=0;var b=A.k(),d=sc(b);Ob(d,b);if(pb(b)||b==c.Y(b)){if(s&2&&(ab>0&&d==q-1||ab<0&&!d))s=0;ad(d);a.j(j.qg,t,fc)}}function bc(a,b){if(q&&(!b||!y.Rc())){y.E();y.Lc(a,a)}}function qb(a){if(q){a=v(a);a=vb(a);bc(a)}else Ob(0,0)}function Tc(){var b=j.me||0,a=ib;j.me|=a;return W=a&~b}function Pc(){if(W){j.me&=~ib;W=0}}function Uc(){var a=b.Kc();b.L(a,bb);return a}function v(b,a){a=a||q||1;return(b%a+a)%a}function uc(c,a,b){s&8&&(s=0);Wb(c,Bb,a,b)}function Pb(){b.c(Y,function(a){a.Bc(a.Dc.ah<=T)})}function cd(c){if(!T&&(b.ue(c)||!b.be(c,u))){T=1;Pb();if(!B){X&12&&Bc();w[t]&&w[t].fc()}a.j(j.pg)}}function bd(){if(T){T=0;Pb();B||!(X&12)||Dc()}a.j(j.kg)}function Ic(){b.c(C,function(a){b.L(a,bb);b.gc(a,"hidden");b.rb(a)});b.L(U,bb)}function Qb(b,a){Wb(b,a,d)}function Wb(g,h,l,p){if(q&&(!B||m.Fd)&&!Eb()){var f=A.k(),a=g;if(l){a=f+g;if(D&2){if(mc(f)&&g<0)a=Q;if(kc(f)&&g>0)a=N}}if(!(D&1))if(p)a=v(a);else a=vb(a,.5);if(l&&!pb(a))a=c.z(a);var j=(a-f)%q;a=f+j;if(h==e)h=Bb;var b=c.vb(j),i=0;if(b){if(b<1)b=c.p(b,.5);if(b>1){var o=Jc(),n=(R&1?Gb:Fb)/o;b=c.q(b,n*1.5)}i=h*b}ub=d;y.E();ub=k;y.Lc(f,a,i)}}function Mc(e,h,o){var l=this,i={g:2,m:1,n:2,i:1},m={g:"top",m:"right",n:"bottom",i:"left"},g,a,f,j,k={};l.W=e;l.tc=function(q,l,u){var p,s=q,r=l;if(!f){f=b.Yg(e);g=e.parentNode;j={Jc:b.u(e,n.cf,1),kb:b.u(e,n.Ub)};b.c(m,function(c,a){k[a]=b.u(e,"data-scale-"+c,1)});a=e;if(h){a=b.Cb(g,d);b.L(a,{g:0,i:0});b.jb(a,e);b.jb(g,a)}}if(o){p=c.s(q,l);if(h)if(u>=0&&u<1){var w=c.q(q,l);p=c.q(p/w,1/(1-u))*w}}else s=r=p=c.p(K<P?l:q,j.Jc);var x=h?1.001:1,t=p*x;h&&(dc=t);b.gg(a,t);b.J(g,f.A*s);b.F(g,f.C*r);var v=b.xd()&&b.id()<9?t:1,y=(s-v)*f.A/2,z=(r-v)*f.C/2;b.S(a,y);b.X(a,z);b.c(f,function(d,a){if(i[a]&&d){var e=(i[a]&1)*c.p(q,k[a])*d+(i[a]&2)*c.p(l,k[a])*d/2;b.Bg[a](g,e)}});b.md(g,j.kb)}}function Yc(){var a=this;l.call(a,0,0,{sc:q});b.c(w,function(b){a.Tc(b);b.Mb(G/F)})}function Xc(){var a=this,b=Jb.W;l.call(a,-1,2,{T:h.yb,jf:{Ib:tc},sc:q,rc:Cb},b,{Ib:1},{Ib:-2})}function Zc(){var b=this;l.call(b,-1e8,2e8);b.Nb=function(e,b){if(c.vb(b-e)>1e-5){var g=b,f=b;if(c.Y(b)!=b&&b>e&&(D&1||b>db))f++;var h=sc(f);Ob(h,g,d);a.j(j.Ff,v(g),v(e),b,e)}}}function Nc(o,n){var b=this,g,i,e,c,h;l.call(b,-1e8,2e8,{Qd:100});b.Oc=function(){mb=d;a.j(j.ig,v(A.k()),V.k())};b.Pc=function(){mb=k;c=k;a.j(j.jg,v(A.k()),V.k());!B&&Oc()};b.Nb=function(f,b){var a=b;if(c)a=h;else if(e){var d=b/e;a=m.ie(d)*(i-g)+g}a=Lc(a);V.H(a)};b.Lc=function(a,c,h,f){B=k;e=h||1;g=a;i=c;ub=d;V.H(a);ub=k;b.H(0);b.pc(e,f)};b.If=function(){c=d;c&&b.Rd(f,f,d)};b.Mf=function(a){h=a};V=new Zc;V.P(o);V.P(n)}function Kc(){var c=this,a=Uc();b.M(a,0);c.W=a;c.Re=function(c){b.jb(a,c);b.ab(a)};c.tb=function(){b.rb(a);b.Zb(a)}}function Wc(n,h){var g=this,hb=b.cb(g,o),x,C=0,T,ib=n,B=b.u(ib,"data-fillmode",m.Of),F,r,z=[],S,L,P,O,i,u,y,Q;l.call(g,-J,J+1,{sc:D&1?q:e,rc:Cb});function G(a){x&&x.l();Rb-=C;C=0;R(n,a,0);O=d;x=new eb.fb(n,eb,{Fb:b.u(n,"idle",ec),vg:!s});x.Sc(p.ac,X)}function Y(){x.Uc<eb.Uc&&G()}function X(b,a){C+=a;Rb+=a;if(h==t)!C&&g.fc()}function N(n,p,m){if(!L){L=d;if(r&&m){var e=m.width,c=m.height,l=e,i=c;if(e&&c&&B){if(B&3&&(!(B&4)||e>I||c>H)){var f=k,o=I/H*c/e;if(B&1)f=o>1;else if(B&2)f=o<1;l=f?e*H/c:I;i=f?H:c*I/e}b.J(r,l);b.F(r,i);b.X(r,(H-i)/2);b.S(r,(I-l)/2)}b.Db(r,"absolute");a.j(j.Tf,h)}}p.vd(k);n&&n(g)}function W(f,b,c,e){if(e==y&&t==h&&s&&Db()&&!g.bd()){var a=v(f);E.Ne(a,h,b,g,c,H/I);b.Uf();ob.Mb(a-ob.qc()-1);ob.H(a);bc(a,d)}}function cb(b){if(b==y&&t==h&&Db()&&!g.bd()){if(!i){var a=f;if(E)if(E.Eb==h)a=E.Ge();else E.tb();Y();i=new Vc(n,h,a,x);i.zg(u)}!i.Rc()&&i.jd()}}function K(a,d,k){if(a==h){if(a!=d)w[d]&&w[d].pd();else!k&&i&&i.Xf();u&&u.Fc();y=b.Kb();g.Gb(b.eb(f,cb,y))}else{var j=c.q(h,a),e=c.s(h,a),n=c.q(e-j,j+q-e),l=J+m.Yf-1;(!P||n<=l)&&g.Gb()}}function db(){if(t==h&&i){i.E();u&&u.Zf();u&&u.bg();i.od()}}function gb(){t==h&&i&&i.E()}function Z(b){!fb&&a.j(j.Ag,h,b)}g.vd=function(a){if(Q!=a){Q=a;a&&b.jb(n,F);!a&&b.Jb(F)}};g.Gb=function(e,c){c=c||g;if(z.length&&!L){c.vd(d);if(!S){S=d;a.j(j.Sg,h);b.c(z,function(a){if(!b.o(a,"src")){a.src=b.N(a,"src2")||"";b.Bb(a,b.o(a,"data-display"))}})}b.Lg(z,r,b.eb(f,N,e,c))}else N(e,c)};g.Tg=function(){if(Qc())if(q==1){g.pd();K(h,h)}else{var a;if(E)a=E.Oe(q);if(a){y=b.Kb();var c=h+ab,d=w[v(c)];return d.Gb(b.eb(f,W,c,d,a,y),g)}else(D||!pb(A.k())||!pb(A.k()+ab))&&Qb(ab)}};g.fc=function(){K(h,h,d)};g.pd=function(){u&&u.Zf();u&&u.bg();g.Ad();i&&i.Vg();i=f;G()};g.Uf=function(){b.rb(n)};g.Ad=function(){b.ab(n)};function R(a,h,c){if(b.o(a,Kb))return;if(!O){b.o(a,"data-events",b.wc(a));b.o(a,"data-display",b.Bb(a));b.hg(a,b.N(a,"data-to"));b.Dg(a,b.N(a,"data-bf"));b.eg(a,b.u(a,"data-p"));b.fg(a,b.N(a,"po"));if(a.tagName=="IMG"){z.push(a);if(!b.o(a,"src")){P=d;b.rb(a)}}var e=b.Mg(a);if(e){var f=new Image;b.N(f,"src2",e);z.push(f)}c&&b.M(a,(b.M(a)||0)+1)}var g=b.Xb(a);b.c(g,function(d){if(c<2&&!r)if(b.N(d,"u")=="image"){r=d;r.border=0;b.L(r,bb);b.L(a,bb)}R(d,h,c+1)})}g.Mc=function(c,b){var a=J-b;tc(T,a)};g.Eb=h;var M=b.pe(n,"thumb",d);if(M){b.Cb(M);b.rb(M)}b.ab(n);F=b.Cb(U);b.M(F,1e3);g.a(n,"click",Z);G(d);g.ne=r;g.qe=n;T=n;g.a(a,203,K);g.a(a,28,gb);g.a(a,24,db);g.l=function(){b.l(hb,x,i)}}function Vc(F,h,q,r){var c=this,D=b.cb(c,o),i=0,u=0,g,m,f,e,n,x,v,y=w[h];l.call(c,0,0);function A(){c.jd()}function C(a){v=a;c.E();c.jd()}function z(){}c.jd=function(){if(!B&&!mb&&!v&&t==h&&!c.bd()){var k=c.k();if(!k)if(g&&!n){n=d;c.od(d);a.j(j.Xg,h,u,i,u,g,e)}a.j(j.Td,h,k,i,m,f,e);if(!Eb()){var l;if(k==e)s&&b.Ab(y.Tg,20);else{if(k==f)l=e;else if(!k)l=f;else l=c.Bd();(k!=f||!zc())&&c.pc(l,A)}}}};c.Xf=function(){f==e&&f==c.k()&&c.H(m)};c.Vg=function(){E&&E.Eb==h&&E.tb();var b=c.k();b<e&&a.j(j.Td,h,-b-1,i,m,f,e)};c.od=function(a){q&&b.gc(S,a&&q.Hc.dh?"":"hidden")};c.Mc=function(c,b){if(n&&b>=g){n=k;y.Ad();E.tb();a.j(j.Og,h,g,i,u,g,e)}a.j(j.Ng,h,b,i,m,f,e)};c.zg=function(a){if(a&&!x){x=a;a.Sc($JssorPlayer$.df,C)}};c.a(r,p.Zc,z);q&&c.Tc(q);g=c.sb();c.Tc(r);m=g+r.uc;e=c.sb();f=s?g+r.Vc:e;c.l=function(){D.l();c.E()}}function cc(){ac=mb;yc=y.Bd();cb=A.k();tb=dd(cb)}function Dc(){cc();if(B||Eb()){y.E();a.j(j.Pg)}}function Bc(f){if(Db()){var b=A.k(),a=tb,e=0;if(f&&c.vb(O)>=m.Md){a=b;e=xb}a=c.Z(a);a=vb(a+e,.5);var d=c.vb(a-b);if(d<1&&m.ie!=h.yb)d=c.p(d,.5);if((!fb||!f)&&ac)y.pc(yc);else if(b==a)gc.fc();else y.Lc(b,a,d*Bb)}}function wc(a){!b.lb(b.Vb(a),e,n.Cd)&&b.ec(a)}function nc(b){zb=k;B=d;Dc();if(!ac)z=0;a.j(j.Jg,v(cb),cb,b)}function Sc(a){rc(a,1)}function rc(c,d){O=0;wb=0;xb=0;Ec=dc;if(d){var h=c.touches[0];yb={x:h.clientX,y:h.clientY}}else yb=b.kd(c);var f=b.Vb(c),g=b.lb(f,"1",Ac);if((!g||g===u)&&!W&&(!d||c.touches.length==1)){jb=b.lb(f,e,n.Cd)||!ib||!Tc();a.a(i,d?"touchmove":"mousemove",Tb);zb=!jb&&b.lb(f,e,n.Wc);!zb&&!jb&&nc(c,d)}}function Tb(a){var e,f;a=b.sg(a);if(a.type!="mousemove")if(a.touches.length==1){f=a.touches[0];e={x:f.clientX,y:f.clientY}}else gb();else e=b.kd(a);if(e){var i=e.x-yb.x,j=e.y-yb.y,g=c.vb(i),h=c.vb(j);if(z||g>1.5||h>1.5)if(zb)nc(a,f);else{if(c.Y(tb)!=tb)z=z||R&W;if((i||j)&&!z){if(W==3)if(h>g)z=2;else z=1;else z=W;if(Ab&&z==1&&h>g*2.4)jb=d}var l=i,k=kb;if(z==2){l=j;k=lb}(O-wb)*nb<-1.5&&(xb=0);(O-wb)*nb>1.5&&(xb=-1);wb=O;O=l;Fc=tb-O*nb/k/Ec*m.Ig;if(O&&z&&!jb){b.ec(a);y.If(d);y.Mf(Fc)}}}}function gb(){Pc();a.K(i,"mousemove",Tb);a.K(i,"touchmove",Tb);fb=O;if(B){fb&&s&8&&(s=0);y.E();B=k;var b=A.k();a.j(j.Hg,v(b),b,v(cb),cb);X&12&&cc();Bc(d)}}function ed(a){var c=b.Vb(a),f=b.lb(c,"1",Kb);if(u===f)if(fb){b.mg(a);var d=b.lb(c,e,"data-jssor-button","A");d&&b.ec(a)}else s&4&&(s=0)}a.Pb=function(a){if(a==e)return s;if(a!=s){s=a;s&&w[t]&&w[t].fc()}};a.Yb=function(){return K};a.Sb=function(){return P};a.Eg=function(b){if(b==e)return Sb||K;a.tc(b,b/K*P)};a.tc=function(c,a,d){b.J(u,c);b.F(u,a);xc=c/K;oc=a/P;b.c(Gc,function(a){a.tc(xc,oc,d)});if(!Sb){b.hc(S,x);b.X(S,0);b.S(S,0)}Sb=c};a.ff=mc;a.pf=kc;a.Rd=function(){a.Pb(s||1)};function Rc(){Vb.wd&&b.Lb(x,Vb.wd,([f,"pan-y","pan-x","auto"])[ib]||"");a.a(u,"click",ed,d);a.a(u,"mouseleave",cd);a.a(u,"mouseenter",bd);a.a(u,"mousedown",rc);a.a(u,"touchstart",Sc);a.a(u,"dragstart",wc);a.a(u,"selectstart",wc);a.a(g,"mouseup",gb);a.a(i,"mouseup",gb);a.a(i,"touchend",gb);a.a(i,"touchcancel",gb);a.a(g,"blur",gb);m.oc&&a.a(i,"keydown",function(c){var a=b.de(c);if(a==37||a==39){s&8&&(s=0);uc(m.oc*(a-38)*nb,d)}})}function ic(f){vc.Ld();C=[];w=[];var g=b.Xb(x),j=b.re(["DIV","A","LI"]);b.c(g,function(a){j[a.tagName.toUpperCase()]&&!b.N(a,"u")&&b.Bb(a)!="none"&&C.push(a);b.M(a,(b.M(a)||0)+1)});q=C.length;if(q){var a=R&1?Gb:Fb;Ic();G=m.Ye;if(G==e)G=(a-F+L)/2;hb=a/F;J=c.q(q,m.db||q,c.Z(hb));D=J<q?m.Qb:0;if(q*F-L<=a){hb=q-L/F;G=(a-F+L)/2;Zb=(a-F*q+L)/2}if(Hb){Mb=Hb.fb;hc=!G&&J==1&&q>1&&Mb&&(!b.xd()||b.id()>=9)}if(!(D&1)){db=G/F;if(db>q-1){db=q-1;G=db*F}N=db;Q=N+q-hb-L/F}ib=(J>1||G?R:-1)&m.xc;if(hc)E=new Mb(Jb,I,H,Hb,Ab,Nb);for(var d=0;d<C.length;d++){var h=C[d],i=new Wc(h,d);w.push(i)}ob=new Xc;A=new Yc;y=new Nc(A,ob);Rc()}b.c(Y,function(a){a.Ac(q,w);f&&a.Sc(r.Nc,uc)})}a.v=function(c,g){a.W=u=b.Ob(c);K=b.J(u);P=b.F(u);m=b.O({Of:0,Yf:1,oc:1,dd:0,Pb:0,Qb:1,ld:d,Fd:d,sf:1,fe:3e3,Od:1,Nd:500,ie:h.yd,Md:20,Ig:1,rd:0,Ve:1,Pd:1,xc:1},g);m.ld=m.ld&&b.Jf();if(m.Fb!=e)m.fe=m.Fb;if(m.Te!=e)m.db=m.Te;if(m.Pe!=e)m.Ye=m.Pe;s=m.Pb&63;!m.Ve;ab=m.sf;X=m.Od;X&=Ab?10:5;ec=m.fe;Bb=m.Nd;R=m.Pd&3;rb=b.Lf(b.o(u,"dir"))=="rtl";Cb=rb&&(R==1||m.xc&1);nb=Cb?-1:1;Hb=m.Ke;eb=b.O({fb:p},m.Zg);sb=m.Ue;Z=m.Je;M=m.hh;var f=b.Xb(u);b.c(f,function(a,d){var c=b.N(a,"u");if(c=="loading")U=a;else{if(c=="slides"){x=a;b.Lb(x,"margin",0);b.Lb(x,"padding",0)}if(c=="navigator")Ub=a;if(c=="arrowleft")Yb=a;if(c=="arrowright")Xb=a;if(c=="thumbnavigator")Ib=a;if(a.tagName!="STYLE"&&a.tagName!="SCRIPT")Gc[c||d]=new Mc(a,c=="slides",b.re(["slides","thumbnavigator"])[c])}});U&&b.Jb(U);U=U||b.Kc(i);Gb=b.J(x);Fb=b.F(x);I=m.He||Gb;H=m.hf||Fb;bb={A:I,C:H,g:0,i:0,Ud:"block",Ib:"absolute"};L=m.rd;kb=I+L;lb=H+L;F=R&1?kb:lb;Jb=new Kc;if(m.ld&&(!b.Rf()||Ab))Nb=function(a,c,d){b.Ef(a,{xb:c,ub:d})};b.o(u,Kb,"1");b.M(x,b.M(x)||0);b.Db(x,"absolute");S=b.Cb(x,d);b.Lb(S,"pointerEvents","none");b.hc(S,x);b.jb(S,Jb.W);b.gc(x,"hidden");if(Ub&&sb){sb.lc=rb;jc=new sb.fb(Ub,sb,K,P);Y.push(jc)}if(Z&&Yb&&Xb){Z.lc=rb;Z.Qb=m.Qb;lc=new Z.fb(Yb,Xb,Z,a);Y.push(lc)}if(Ib&&M){M.dd=m.dd;M.oc=M.oc||0;M.lc=rb;Hc=new M.fb(Ib,M,U);!M.eh&&b.o(Ib,Ac,"1");Y.push(Hc)}ic(d);a.tc(K,P);Pb();qb(v(m.dd));b.Lb(u,"visibility","visible")};a.l=function(){s=0;b.l(w,Y,vc);b.Zb(u)};b.v(a)};j.Ag=21;j.Jg=22;j.Hg=23;j.ig=24;j.jg=25;j.Sg=26;j.Tf=27;j.Pg=28;j.kg=31;j.pg=32;j.Ff=202;j.qg=203;j.Xg=206;j.Og=207;j.Ng=208;j.Td=209;jssor_1_slider_init=function(){var d=[{Cc:800,B:2}],e={Pb:1,Ke:{fb:u,ic:d,mf:1},Je:{fb:v},Ue:{fb:t}},c=new j("jssor_1",e),f=1220;function a(){var d=c.W.parentNode,b=d.clientWidth;if(b){var e=m.min(f||b,b);c.Eg(e)}else g.setTimeout(a,30)}a();b.mb(g,"load",a);b.mb(g,"resize",a);b.mb(g,"orientationchange",a)}}(window,document,Math,null,true,false)
</script>
<style>
.jssorl-009-spin img{animation-name:jssorl-009-spin;animation-duration:1.6s;animation-iteration-count:infinite;animation-timing-function:linear}@keyframes jssorl-009-spin{from{transform:rotate(0);}to{transform:rotate(360deg);}}.jssorb051 .i{position:absolute;cursor:pointer}.jssorb051 .i .b{fill:#fff;fill-opacity:.5}.jssorb051 .i:hover .b{fill-opacity:.7}.jssorb051 .iav .b{fill-opacity:1}.jssorb051 .i.idn{opacity:.3}.jssora051{display:block;position:absolute;cursor:pointer}.jssora051 .a{fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10}.jssora051:hover{opacity:.8}.jssora051.jssora051dn{opacity:.5}.jssora051.jssora051ds{opacity:.3;pointer-events:none}
</style>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1220px;height:380px;overflow:hidden;visibility:hidden;">
<!-- Loading Screen -->
<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
</div>
<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1220px;height:380px;overflow:hidden;">
<div data-p="200.00">
<img data-u="image" src="img/b1.jpg" />
</div>
<div data-p="200.00">
<img data-u="image" src="img/b2.jpg" />
</div>
<div data-p="200.00">
<img data-u="image" src="img/b3.jpg" />
</div>


</div>
<!-- Bullet Navigator -->
<div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
<div data-u="prototype" class="i" style="width:16px;height:16px;">
<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
<circle class="b" cx="8000" cy="8000" r="5800"></circle>
</svg>
</div>
</div>
<!-- Arrow Navigator -->
<div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
</svg>
</div>
<div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
</svg>
</div>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->

<div class="square4">
<hr color="#3368BD" size="6" width="100%" style="margin-top:-0.2%;"/>
<table height="50" width="20%" style="margin-left:4%;margin-top:-2%">
<th bgcolor="#2E4B7A"  > <font color="white">NEWS</font></th>
</table>
    <div class="content2" style="margin-top:1%">
  
  <p>Mar | Very Sad News</p>
  
  <p style="margin-top:-3%;">18 </p>
  <hr color="blue" size="3" width="99%"/>
  <p>Sep | Last Date 30th Sept 2018 To Accept Token Without</p>
  <p style="margin-top:-3%;">20 </p>
  <hr color="blue" size="3" width="99%"/>
  
        
  
       
    </div>
</div>

<div class="square4">
<hr color="#3368BD" size="6" width="100%" style="margin-top:-0.2%;"/>
<table height="50" width="40%" style="margin-left:4%;margin-top:-2%">
<th bgcolor="#2E4B7A"  > <font color="white">Announcement</font></th>
</table>
    <div class="content2" style="margin-top:-2%">
   
  <p>Attention To Those Who Are Making FALSE NUMBER PLATES</p>
  
  <hr color="blue" size="1" width="99%"/>
  <p>Crackdown is being launched against Luxury House</p>
  
  <hr color="blue" size="1" width="99%"/>
  <p>Computerization of all Districts of Punjab</p>
  
  <hr color="blue" size="1" width="99%"/>
  
        
  
       
    </div>
</div

<br>
<br>
<hr color="#3368BD" size="6" width="90%"/>
<table height="40" width="350" style="margin-left:8%;margin-top:-1%">
<th bgcolor="#2E4B7A"  > <font color="white">COLLECTION OF PROVISIONAL TAXES</font></th>
</table>


<br><br>

<script type="text/javascript">
!function(g,i,m,f,d,k,e){new(function(){});var c={z:m.PI,F:m.max,s:m.min,jc:m.ceil,jb:m.floor,kb:m.abs,lb:m.sin,Qb:m.cos,jd:m.tan,mf:m.atan,Vb:m.sqrt,o:m.pow,D:m.round},h={nf:function(a){return-c.Qb(a*c.z)/2+.5},fc:function(a){return a},of:function(a){return a*a},td:function(a){return-a*(a-2)},pf:function(a){return(a*=2)<1?1/2*a*a:-1/2*(--a*(a-2)-1)},qf:function(a){return a*a*a},rf:function(a){return(a-=1)*a*a+1},tf:function(a){return(a*=2)<1?1/2*a*a*a:1/2*((a-=2)*a*a+2)},Ff:function(a){return a*a*a*a},uf:function(a){return-((a-=1)*a*a*a-1)},vf:function(a){return(a*=2)<1?1/2*a*a*a*a:-1/2*((a-=2)*a*a*a-2)},wf:function(a){return a*a*a*a*a},xf:function(a){return(a-=1)*a*a*a*a+1},yf:function(a){return(a*=2)<1?1/2*a*a*a*a*a:1/2*((a-=2)*a*a*a*a+2)},zf:function(a){return 1-c.Qb(c.z/2*a)},Af:function(a){return c.lb(c.z/2*a)},Bf:function(a){return-1/2*(c.Qb(c.z*a)-1)},Cf:function(a){return a==0?0:c.o(2,10*(a-1))},Df:function(a){return a==1?1:-c.o(2,-10*a)+1},Ef:function(a){return a==0||a==1?a:(a*=2)<1?1/2*c.o(2,10*(a-1)):1/2*(-c.o(2,-10*--a)+2)},ff:function(a){return-(c.Vb(1-a*a)-1)},ef:function(a){return c.Vb(1-(a-=1)*a)},df:function(a){return(a*=2)<1?-1/2*(c.Vb(1-a*a)-1):1/2*(c.Vb(1-(a-=2)*a)+1)},cf:function(a){if(!a||a==1)return a;var b=.3,d=.075;return-(c.o(2,10*(a-=1))*c.lb((a-d)*2*c.z/b))},Fe:function(a){if(!a||a==1)return a;var b=.3,d=.075;return c.o(2,-10*a)*c.lb((a-d)*2*c.z/b)+1},Ge:function(a){if(!a||a==1)return a;var b=.45,d=.1125;return(a*=2)<1?-.5*c.o(2,10*(a-=1))*c.lb((a-d)*2*c.z/b):c.o(2,-10*(a-=1))*c.lb((a-d)*2*c.z/b)*.5+1},He:function(a){var b=1.70158;return a*a*((b+1)*a-b)},Ie:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},Je:function(a){var b=1.70158;return(a*=2)<1?1/2*a*a*(((b*=1.525)+1)*a-b):1/2*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},sd:function(a){return 1-h.Sc(1-a)},Sc:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},Ke:function(a){return a<1/2?h.sd(a*2)*.5:h.Sc(a*2-1)*.5+.5},Le:c.jc,Me:c.jb};var b=new function(){var j=this,vb=/\S+/g,F=1,pb=2,sb=3,rb=4,Z=5,G,r=0,n=0,A=0,H=navigator,fb=H.appName,p=H.userAgent,q=parseFloat;function Eb(){if(!G){G={Vc:"ontouchstart"in g||"createTouch"in i};var a;if(H.pointerEnabled||(a=H.msPointerEnabled))G.Nd=a?"msTouchAction":"touchAction"}return G}function u(h){if(!r){r=-1;if(fb=="Microsoft Internet Explorer"&&!!g.attachEvent&&!!g.ActiveXObject){var e=p.indexOf("MSIE");r=F;n=q(p.substring(e+5,p.indexOf(";",e)));/*@cc_on@*/}else if(fb=="Netscape"&&!!g.addEventListener){var d=p.indexOf("Firefox"),b=p.indexOf("Safari"),f=p.indexOf("Chrome"),c=p.indexOf("AppleWebKit");if(d>=0){r=pb;n=q(p.substring(d+8))}else if(b>=0){var i=p.substring(0,b).lastIndexOf("/");r=f>=0?rb:sb;n=q(p.substring(i+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(p);if(a){r=F;n=q(a[1])}}if(c>=0)A=q(p.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(p);if(a){r=Z;n=q(a[2])}}}return h==r}function v(){return u(F)}function xb(){return u(pb)}function qb(){return u(sb)}function ub(){return u(Z)}function mb(){return qb()&&A>534&&A<535}function I(){u();return A>537||n>42||r==F&&n>=11}function nb(a){var b,c;return function(g){if(!b){b=d;var f=a.substr(0,1).toUpperCase()+a.substr(1);l([a].concat(["WebKit","ms","Moz","O","webkit"]),function(h,d){var b=a;if(d)b=h+f;if(g.style[b]!=e)return c=b})}return c}}function lb(b){var a;return function(c){a=a||nb(b)(c)||b;return a}}var L=lb("transform");function eb(a){return{}.toString.call(a)}var bb={};l(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){bb["[object "+a+"]"]=a.toLowerCase()});function l(b,d){var a,c;if(eb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function E(a){return a==f?String(a):bb[eb(a)]||"object"}function cb(a){for(var b in a)return d}function B(a){try{return E(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function jb(b,a){setTimeout(b,a||0)}function ab(b,d,c){var a=!b||b=="inherit"?"":b;l(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a&&(c+=(!a.indexOf(" ")?"":" ")+a);return c}function gb(a,b){if(a===e)a=b;return a}j.Xc=Eb;j.Od=v;j.sg=xb;j.pg=qb;j.fg=I;nb("transform");j.Oc=function(){return n};j.ec=jb;j.H=gb;j.cb=function(a,b){b.call(a);return z({},a)};function U(a){a.constructor===U.caller&&a.u&&a.u.apply(a,U.caller.arguments)}j.u=U;j.Mb=function(a){if(j.lg(a))a=i.getElementById(a);return a};function t(a){return a||g.event}j.mg=t;j.sb=function(b){b=t(b);var a=b.target||b.srcElement||i;if(a.nodeType==3)a=j.xc(a);return a};j.Md=function(a){a=t(a);return a.relatedTarget||a.toElement};j.Ld=function(a){a=t(a);return a.which||([0,1,3,0,2])[a.button]||a.charCode||a.keyCode};j.oc=function(a){a=t(a);return{x:a.clientX||0,y:a.clientY||0}};j.ng=function(b,a){return b.x>=a.x&&b.x<=a.x+a.w&&b.y>=a.y&&b.y<=a.y+a.h};j.Kd=function(c,e){var a=b.dg(e),d=b.oc(c);return j.ng(d,a)};function w(c,d,a){if(a!==e)c.style[d]=a==e?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&g.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,f);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function X(b,c,a,d){if(a===e){a=q(w(b,c));isNaN(a)&&(a=f);return a}if(a==f)a="";else d&&(a+="px");w(b,c,a)}function m(c,a){var d=a?X:w,b;if(a&4)b=lb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function zb(a){return q(a.style.opacity||"1")}function Bb(b,a){b.style.opacity=a==1?"":c.D(a*100)/100}var N={S:["rotate"],bb:["rotateX"],db:["rotateY"],Ob:["skewX"],Rb:["skewY"]};if(!I())N=z(N,{N:["scaleX",2],O:["scaleY",2],Z:["translateZ",1]});function M(c,a){var b="";if(a){if(v()&&n&&n<10){delete a.bb;delete a.db;delete a.Z}l(a,function(d,c){var a=N[c];if(a){var e=a[1]||0;if(O[c]!=d)b+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(I()){if(a.eb||a.fb||a.Z!=e)b+=" translate3d("+(a.eb||0)+"px,"+(a.fb||0)+"px,"+(a.Z||0)+"px)";if(a.N==e)a.N=1;if(a.O==e)a.O=1;if(a.N!=1||a.O!=1)b+=" scale3d("+a.N+", "+a.O+", 1)"}}c.style[L(c)]=b}j.Mf=m("transformOrigin",4);j.Nf=m("backfaceVisibility",4);m("transformStyle",4);j.Pf=m("perspective",6);j.Qf=m("perspectiveOrigin",4);j.Sf=function(b,a){if(v()&&n<9)b.style.zoom=a==1?"":a;else{var c=L(b),f=a==1?"":"scale("+a+")",e=b.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=ab(e,[g],f);b.style[c]=d}};j.Y=function(a,d,b,c){a=j.Mb(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};j.Bb=function(a,c,d,b){a=j.Mb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};j.Yb=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=k};j.Uf=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};j.ib=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};j.dg=function(b){var a=b.getBoundingClientRect();return{x:a.left,y:a.top,w:a.right-a.left,h:a.bottom-a.top}};j.Fb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function db(a,c,e,b){b=b||"u";for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(C(a,b)==c)return a;if(!e){var d=db(a,c,e,b);if(d)return d}}}j.Xf=db;j.ab=function(a,f,d,g){d=d||"u";var e;do{if(a.nodeType==1){var c;d&&(c=C(a,d));if(c&&c==gb(f,c)||g==a.tagName){e=a;break}}a=b.xc(a)}while(a&&a!=i.body);return e};j.Jf=function(a){return W(["INPUT","TEXTAREA","SELECT"])[a.tagName]};function z(){var f=arguments,d,c,b,a,h=1&f[0],g=1+h;d=f[g-1]||{};for(;g<f.length;g++)if(c=f[g])for(b in c){a=c[b];if(a!==e){a=c[b];var i=d[b];d[b]=h&&(B(i)||B(a))?z(h,{},i,a):a}}return d}j.mb=z;function V(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(B(a)&&B(b)){a=V(a,b);e=!cb(a)}!e&&(d[c]=a)}}return d}j.cd=function(a){return E(a)=="function"};j.eg=function(a){return E(a)=="array"};j.lg=function(a){return E(a)=="string"};j.vc=function(a){return!isNaN(q(a))&&isFinite(a)};j.c=l;j.lf=B;function Q(a){return i.createElement(a)}j.tc=function(){return Q("DIV")};j.Wf=function(){};function D(b,c,a){if(a==e)return b.getAttribute(c);b.setAttribute(c,a)}function C(a,b){return D(a,b)||D(a,"data-"+b)}j.n=D;j.G=C;j.m=function(d,b,c){var a=j.Zc(C(d,b));if(isNaN(a))a=c;return a};function x(b,a){return D(b,"class",a)||""}function W(b){var a={};l(b,function(b){if(b!=e)a[b]=b});return a}function kb(b,a){return b.match(a||vb)}function P(b,a){return W(kb(b||"",a))}j.ld=W;j.Lf=kb;j.Kf=function(a){a&&(a=a.toLowerCase());return a};function Y(b,c){var a="";l(c,function(c){a&&(a+=b);a+=c});return a}function J(a,c,b){x(a,Y(" ",z(V(P(x(a)),P(c)),P(b))))}j.xc=function(a){return a.parentNode};j.pb=function(a){j.ob(a,"none")};j.hc=function(a,b){j.ob(a,b?"none":"")};j.rg=function(b,a){b.removeAttribute(a)};j.gg=function(d,a){if(a)d.style.clip="rect("+c.D(a.g||a.v||0)+"px "+c.D(a.p)+"px "+c.D(a.q)+"px "+c.D(a.i||a.C||0)+"px)";else if(a!==e){var h=d.style.cssText,g=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],f=ab(h,g,"");b.qg(d,f)}};j.Ee=function(b,a){if(a)b.style.backgroundColor="rgba("+c.D(a.qd)+","+c.D(a.kd)+","+c.D(a.xd)+","+a.M+")"};j.yb=function(){return+new Date};j.xb=function(b,a){b.appendChild(a)};j.kc=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};j.lc=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};j.Re=function(a,b){l(a,function(a){j.lc(a,b)})};j.ae=function(a){j.Re(j.Fb(a,d),a)};function hb(){l([].slice.call(arguments,0),function(a){if(j.eg(a))hb.apply(f,a);else a&&a.l()})}j.l=hb;j.Qd=function(a,b){var c=j.xc(a);if(b&1){j.U(a,(j.K(c)-j.K(a))/2);j.rd(a,f)}if(b&2){j.V(a,(j.L(c)-j.L(a))/2);j.vd(a,f)}};var R={g:f,p:f,q:f,i:f,Q:f,R:f};j.se=function(a){var b=j.tc();s(b,{md:"block",zb:j.Wb(a),g:0,i:0,Q:0,R:0});var d=j.id(a,R);j.kc(b,a);j.xb(b,a);var e=j.id(a,R),c={};l(d,function(b,a){if(b==e[a])c[a]=b});s(b,R);s(b,c);s(a,{g:0,i:0});return c};j.Zc=q;j.Id=function(b,a){var c=i.body;while(a&&b!==a&&c!==a)a=a.parentNode;return b===a};function T(d,c,b){var a=d.cloneNode(!c);!b&&j.rg(a,"id");return a}j.gc=T;j.Gb=function(e,f){var a=new Image;function b(e,d){j.Bb(a,"load",b);j.Bb(a,"abort",c);j.Bb(a,"error",c);f&&f(a,d)}function c(a){b(a,d)}if(ub()&&n<11.6||!e)b(!e);else{j.Y(a,"load",b);j.Y(a,"abort",c);j.Y(a,"error",c);a.src=e}};j.me=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}l(d,function(a){j.Gb(a.src,b)});b()};function Cb(){var a=this;b.cb(a,o);var d,q="",s=["av","pv","ds","dn"],f=[],r,n=0,k=0,h=0;function m(){J(d,r,(f[h||k&2||k]||"")+" "+(f[n]||""));j.Kb(d,h?"none":"")}function c(){n=0;a.J(g,"mouseup",c);a.J(i,"mouseup",c);a.J(i,"touchend",c);a.J(i,"touchcancel",c);a.J(g,"blur",c);m()}function p(b){if(h)j.Yb(b);else{n=4;m();a.a(g,"mouseup",c);a.a(i,"mouseup",c);a.a(i,"touchend",c);a.a(i,"touchcancel",c);a.a(g,"blur",c)}}a.uc=function(a){if(a===e)return!h;h=a?0:3;m()};a.u=function(e){a.P=d=j.Mb(e);D(d,"data-jssor-button","1");var c=b.Lf(x(d));if(c)q=c.shift();l(s,function(a){f.push(q+a)});r=Y(" ",f);f.unshift("");a.a(d,"mousedown",p);a.a(d,"touchstart",p)};b.u(a)}j.Zd=function(a){return new Cb(a)};j.Hb=w;j.zc=m("overflow");j.Kb=m("pointerEvents");j.V=m("top",2);j.rd=m("right",2);j.vd=m("bottom",2);j.U=m("left",2);j.K=m("width",2);j.L=m("height",2);m("marginLeft",2);m("marginTop",2);j.Wb=m("position");j.ob=m("display");j.E=m("zIndex",1);j.ve=function(b,a,c){if(a!=e)Bb(b,a,c);else return zb(b)};j.qg=function(a,b){if(b!=e)a.style.cssText=b;else return a.style.cssText};j.Ce=function(b,a){if(a===e){a=w(b,"backgroundImage")||"";var c=/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a)||[];return c[1]}w(b,"backgroundImage",a?"url('"+a+"')":"")};var K;j.xe=K={M:j.ve,g:j.V,p:j.rd,q:j.vd,i:j.U,Q:j.K,R:j.L,zb:j.Wb,md:j.ob,Eb:j.E};j.id=function(c,b){var a={};l(b,function(d,b){if(K[b])a[b]=K[b](c)});return a};function s(b,h){var a=I(),d=mb(),g=L(b);function c(l,a){a=a||{};var h=a.Z||0,i=(a.bb||0)%360,j=(a.db||0)%360,k=(a.S||0)%360,c=a.N,d=a.O,f=a.Bg;if(c==e)c=1;if(d==e)d=1;if(f==e)f=1;var b=new yb(a.eb,a.fb,h);b.qc(c,d,f);b.ke(a.Ob,a.Rb);b.bb(i);b.db(j);b.ie(k);b.dc(a.C,a.v);l.style[g]=b.de()}s=function(g,b){b=b||{};var i=b.C,k=b.v,h;l(K,function(a,c){h=b[c];h!==e&&a(g,h)});j.gg(g,b.f);j.Ee(g,b.gb);if(!a){i!=e&&j.U(g,(b.Td||0)+i);k!=e&&j.V(g,(b.Pd||0)+k)}if(b.fe)if(d)jb(j.ib(f,M,g,b));else if(a)c(g,b);else M(g,b)};j.T=s;s(b,h)}j.ee=M;j.T=s;function yb(j,k,n){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,j||0,k||0,n||0,1],i=c.lb,h=c.Qb,l=c.jd;function g(a){return a*c.z/180}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(f,(a||b).concat(c))}d.qc=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.dc=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.bb=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([1,0,0,0,0,d,f,0,0,-f,d,0,0,0,0,1])}};d.db=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,0,-f,0,0,1,0,0,f,0,d,0,0,0,0,1])}};d.ie=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,f,0,0,-f,d,0,0,0,0,1,0,0,0,0,1])}};d.ke=function(a,c){if(a||c){j=g(a);k=g(c);b=e([1,l(k),0,0,l(j),1,0,0,0,0,1,0,0,0,0,1])}};d.de=function(){return"matrix3d("+b.join(",")+")"}}var O={Td:0,Pd:0,C:0,v:0,rb:1,N:1,O:1,S:0,bb:0,db:0,eb:0,fb:0,Z:0,Ob:0,Rb:0};j.Rd=function(c,d){var a=c||{};if(c)if(b.cd(c))a={H:a};else if(b.cd(c.f))a.f={H:c.f};a.H=a.H||d;if(a.f)a.f.H=a.f.H||d;if(a.gb)a.gb.H=a.gb.H||d;return a};function ib(c,a){var b={};l(c,function(c,d){var f=c;if(a[d]!=e)if(j.vc(c))f=c+a[d];else f=ib(c,a[d]);b[d]=f});return b}j.oe=ib;j.Be=function(o,j,s,t,E,F,p){var a=j;if(o){a={};for(var i in j){var G=F[i]||1,B=E[i]||[0,1],g=(s-B[0])/B[1];g=c.s(c.F(g,0),1);g=g*G;var y=c.jb(g);if(g!=y)g-=y;var k=t.H||h.fc,m,C=o[i],r=j[i];if(b.vc(r)){k=t[i]||k;var D=k(g);m=C+r*D}else{m=z({Pb:{}},o[i]);var A=t[i]||{};l(r.Pb||r,function(d,a){k=A[a]||A.H||k;var c=k(g),b=d*c;m.Pb[a]=b;m[a]+=b})}a[i]=m}var x=l(j,function(b,a){return O[a]!=e});x&&l(O,function(c,b){if(a[b]==e&&o[b]!==e)a[b]=o[b]});if(x){if(a.rb)a.N=a.O=a.rb;a.tb=p.tb;a.ub=p.ub;if(v()&&n>=11&&(j.C||j.v)&&s!=0&&s!=1)a.S=a.S||1e-8;a.fe=d}}if(j.f&&p.dc){var q=a.f.Pb,w=(q.g||0)+(q.q||0),u=(q.i||0)+(q.p||0);a.i=(a.i||0)+u;a.g=(a.g||0)+w;a.f.i-=u;a.f.p-=u;a.f.g-=w;a.f.q-=w}if(a.f&&!a.f.g&&!a.f.i&&!a.f.v&&!a.f.C&&a.f.p==p.tb&&a.f.q==p.ub)a.f=f;return a}};function o(){var a=this,f,e=[],c=[];function k(a,b){e.push({vb:a,wb:b})}function j(a,c){b.c(e,function(b,d){b.vb==a&&b.wb===c&&e.splice(d,1)})}function i(){e=[]}function h(){b.c(c,function(a){b.Bb(a.Ed,a.vb,a.wb,a.Dd)});c=[]}a.Ac=function(){return f};a.a=function(e,a,d,f){b.Y(e,a,d,f);c.push({Ed:e,vb:a,wb:d,Dd:f})};a.J=function(e,a,d,f){b.c(c,function(g,h){if(g.Ed===e&&g.vb==a&&g.wb===d&&g.Dd==f){b.Bb(e,a,d,f);c.splice(h,1)}})};a.ye=h;a.Dc=a.addEventListener=k;a.removeEventListener=j;a.j=function(a){var c=[].slice.call(arguments,1);b.c(e,function(b){b.vb==a&&b.wb.apply(g,c)})};a.l=function(){if(!f){f=d;h();i()}}}var l=function(C,D,i,m,R,Q){C=C||0;var a=this,p,n,o,s,F=0,O=1,L,M,K,G,B=0,j=0,r=0,A,l,f,h,q,z,u=[],y,I=k,J,H=k;function T(a){f+=a;h+=a;l+=a;j+=a;r+=a;B+=a}function x(x){var k=x;if(q)if(!z&&(k>=h||k<f)||z&&k>=f)k=((k-f)%q+q)%q+f;if(!A||s||j!=k){var g=c.s(k,h);g=c.F(g,f);if(i.Gc)g=h-g+f;if(!A||s||g!=r){if(Q){var w=(g-l)/(D||1),o=b.Be(R,Q,w,L,K,M,i);if(y)b.c(o,function(b,a){y[a]&&y[a](m,b)});else b.T(m,o);var n;if(J){toDisablePointerEventsByAnimation=g>f&&g<h;if(toDisablePointerEventsByAnimation!=H)n=H=toDisablePointerEventsByAnimation}if(!n&&o.M!=e){var p=o.M<.001;if(p!=I)n=I=p}if(n!=e){n&&b.Kb(m,"none");!n&&b.Kb(m,b.n(m,"data-events"))}}var v=r,t=r=g;b.c(u,function(b,c){var a=!A&&z||k<=j?u[u.length-c-1]:b;a.A(g-B)});j=k;A=d;a.Hc(v-l,t-l);a.Cb(v,t)}}}function E(a,b,d){b&&a.cc(h);if(!d){f=c.s(f,a.bc()+B);h=c.F(h,a.nb()+B)}u.push(a)}var v=g.requestAnimationFrame||g.webkitRequestAnimationFrame||g.mozRequestAnimationFrame||g.msRequestAnimationFrame;if(b.pg()&&b.Oc()<7||!v)v=function(a){b.ec(a,i.Sd)};function N(){if(p){var d=b.yb(),e=c.s(d-F,i.Yd),a=j+e*o*O;F=d;if(a*o>=n*o)a=n;x(a);if(!s&&a*o>=n*o)P(G);else v(N)}}function w(e,g,i){if(!p){p=d;s=i;G=g;e=c.F(e,f);e=c.s(e,h);n=e;o=n<j?-1:1;a.Jc();F=b.yb();v(N)}}function P(b){if(p){s=p=G=k;a.Mc();b&&b()}}a.Xd=function(a,b,c){w(a?j+a:h,b,c)};a.Xb=w;a.ge=function(a,b){w(h,a,b)};a.B=P;a.be=function(){return j};a.Ad=function(){return n};a.k=function(){return r};a.A=x;a.we=function(){x(h,d)};a.Pc=function(){return p};a.zd=function(a){O=a};a.cc=T;a.I=function(a,b){E(a,0,b)};a.Nc=function(a){E(a,1)};a.Lc=function(a){h+=a};a.bc=function(){return f};a.nb=function(){return h};a.Cb=a.Jc=a.Mc=a.Hc=b.Wf;a.Kc=b.yb();i=b.mb({Sd:16,Yd:50},i);m&&(J=b.n(m,"data-inactive"));q=i.Sb;z=i.Ae;y=i.ze;f=l=C;h=C+D;M=i.D||{};K=i.ue||{};L=b.Rd(i.X)};var n={te:"data-scale",Nb:"data-autocenter",Fc:"data-nofreeze",nd:"data-nodrag"},q=new function(){var a=this;a.od=function(c,a,e,d){(d||!b.n(c,a))&&b.n(c,a,e)};a.pd=function(a){var c=b.m(a,n.Nb);b.Qd(a,c)}};new(function(){});var r={ud:1};var t=function(){var a=this,v=b.cb(a,o),e,c,g,l,s,k,h,m,j,i;function p(b){a.j(r.ud,b,d)}function u(a){b.hc(e,a);b.hc(c,a)}function t(){j.uc((g.Jb||!l.ne(h))&&k>1);i.uc((g.Jb||!l.re(h))&&k>1)}a.Tc=function(c,a,b){h=a;!b&&t()};a.Qc=u;a.Cc=function(g){k=g;h=0;if(!s){a.a(e,"click",b.ib(f,p,-m));a.a(c,"click",b.ib(f,p,m));j=b.Zd(e);i=b.Zd(c);b.n(e,n.Fc,1);b.n(c,n.Fc,1);s=d}};a.u=function(f,d,h,i){a.Ic=g=b.mb({pe:1},h);e=f;c=d;if(g.Ec){e=d;c=f}m=g.pe;l=i;if(g.Ib){q.od(e,n.Nb,g.Ib);q.od(c,n.Nb,g.Ib)}q.pd(e);q.pd(c)};a.l=function(){b.l(j,i,v)};b.u(a)};function p(e,d,c){var a=this;b.cb(a,o);l.call(a,0,c.Db);a.ac=0;a.pc=c.Db}p.sc=21;p.Ub=24;var u=function(){var a=this,gb=b.cb(a,o);l.call(a,0,0);var e,t,fb=[h.fc,h.nf,h.of,h.td,h.pf,h.qf,h.rf,h.tf,h.Ff,h.uf,h.vf,h.wf,h.xf,h.yf,h.zf,h.Af,h.Bf,h.Cf,h.Df,h.Ef,h.ff,h.ef,h.df,h.cf,h.Fe,h.Ge,h.He,h.Ie,h.Je,h.sd,h.Sc,h.Ke,h.Le,h.Me],R={},H,E,v=new l(0,0),I=[],y=[],G,r=0;function K(d,c){var a={};b.c(d,function(d,f){var e=R[f];if(e){if(b.lf(d))d=K(d,c||f=="e");else if(c)if(b.vc(d))d=fb[d];a[e]=d}});return a}function L(c,f){var e=[],d=b.m(c,"play");if(f&&d){var g=new u(c,t,{De:d});P.push(g);a.a(g,p.sc,Y);a.a(g,p.Ub,T)}else b.c(b.Fb(c),function(a){e=e.concat(L(a,f+1))});if(!f&&(!j||j&16)||f&&(!d||!(d&16))){var h=H[b.m(c,"t")];h&&e.push({P:c,Uc:h})}return e}function Q(c,e){var a=I[c];if(a==f){a=I[c]={W:c,yc:[],ed:[]};var d=0;!b.c(y,function(a,b){d=b;return a.W>c})&&d++;y.splice(d,0,a)}return a}function cb(o,p,g){var a,e;if(E){var k=E[b.m(o,"c")];if(k){a=Q(k.r,0);a.bg=k.e||0}}b.c(p,function(h){var f=b.mb(d,{},K(h)),i=b.Rd(f.X);delete f.X;if(f.i){f.C=f.i;i.C=i.i;delete f.i}if(f.g){f.v=f.g;i.v=i.g;delete f.g}var m={X:i,tb:g.Q,ub:g.R},j=new l(h.b,h.d,m,o,g,f);r=c.F(r,h.b+h.d);if(a){if(!e)e=new l(h.b,0);e.I(j)}else{var k=Q(h.b,h.b+h.d);k.yc.push(j)}if(f.gb)g.gb={qd:0,kd:0,xd:0,M:0};g=b.oe(g,f)});if(a&&e){e.we();var h=e,i,j=e.bc(),m=e.nb(),n=c.F(m,a.bg);if(a.W<m){if(a.W>j){h=new l(j,a.W-j);h.I(e,d)}else h=f;i=new l(a.W,n-j,{Sb:n-a.W,Ae:d});i.I(e,d)}h&&a.yc.push(h);i&&a.ed.push(i)}return g}function bb(a){b.c(a,function(d){var a=d.P,f=b.K(a),e=b.L(a),c={i:b.U(a),g:b.V(a),C:0,v:0,M:1,Eb:b.E(a)||0,S:0,bb:0,db:0,N:1,O:1,eb:0,fb:0,Z:0,Ob:0,Rb:0,Q:f,R:e,f:{g:0,p:f,q:e,i:0}};c.Td=c.i;c.Pd=c.g;cb(a,d.Uc,c)})}function eb(f,e,g){var c=f.b-e;if(c){var b=new l(e,c);b.I(v,d);b.cc(g);a.I(b)}a.Lc(f.d);return c}function db(e){var c=v.bc(),d=0;b.c(e,function(e,f){e=b.mb({d:3e3},e);eb(e,c,d);c=e.b;d+=e.d;if(!f||e.t==2){a.ac=c;a.pc=c+e.d}})}function D(g,e,d){var f=e.length;if(f>4)for(var j=c.jc(f/4),a=0;a<j;a++){var h=e.slice(a*4,c.s(a*4+4,f)),i=new l(h[0].W,0);D(i,h,d);g.I(i)}else b.c(e,function(a){b.c(d?a.ed:a.yc,function(a){d&&a.Lc(r-a.nb());g.I(a)})})}var j,J,w=0,g,B,m,M,C,P=[],A=[],s,F,n;function z(a){return a&2||a&4&&b.Xc().Vc}function Z(){if(!C){g&8&&a.a(i,"keydown",S);if(g&32){a.a(i,"mousedown",x);a.a(i,"touchstart",x)}C=d}}function X(){a.J(i,"keydown",S);a.J(i,"mousedown",x);a.J(i,"touchstart",x);C=k}function N(b){if(!s||b){s=d;a.B();b&&w&&a.A(0);a.zd(1);a.ge();Z();a.j(p.sc,a)}}function q(){if(!F&&(s||a.k())){F=d;a.B();a.be()>a.ac&&a.A(a.ac);a.zd(m||1);a.Xb(0)}}function U(){!n&&q()}function O(c){var b=c;if(c<0&&a.k())b=1;if(b!=w){w=b;J&&a.j(p.Ub,a,w)}}function S(a){g&8&&b.Ld(a)==27&&q()}function W(a){if(n&&b.Md(a)!==f){n=k;g&16&&b.ec(U,160)}}function x(a){g&32&&!b.Id(e,b.sb(a))&&q()}function V(a){if(!n){n=d;if(j&1)b.Kd(a,e)&&N()}}function ab(i){var h=b.sb(i),a=b.ab(h,f,f,"A"),c=a&&(b.Jf(a)||a===e||b.Id(e,a));if(s&&z(g))!c&&q();else if(z(j))!c&&N(d)}function Y(b){var a=b.ag();childSlideoPlaying=A[a];childSlideoPlaying!==b&&A[a]&&A[a].Zf();A[a]=b}function T(b,c){a.j(p.Ub,b,c)}a.ag=function(){return M||""};a.Zf=q;a.Jc=function(){O(1)};a.Mc=function(){s=k;F=k;O(-1);!a.k()&&X()};a.Cb=function(){!n&&B&&a.be()>a.pc&&q()};a.u=function(l,h,f){e=l;t=h;j=f.De;G=f.Yf;H=t.hd;E=t.yg;var k={g:"y",i:"x",q:"m",p:"t",S:"r",bb:"rX",db:"rY",N:"sX",O:"sY",eb:"tX",fb:"tY",Z:"tZ",Ob:"kX",Rb:"kY",M:"o",X:"e",Eb:"i",f:"c",gb:"bc",qd:"re",kd:"gr",xd:"bl"};b.c(k,function(b,a){R[b]=a});bb(L(e,0));D(v,y);if(j){a.I(v);G=d;B=b.m(e,"idle");(z(j)||z(g))&&a.a(e,"click",ab);if((j&1||B)&&!b.Xc().Vc){a.a(e,"mouseenter",V);a.a(e,"mouseleave",W)}g=b.m(e,"rollback");m=b.G(e,"speed")||"";if(m.substr(0,1)=="x")m=m.substr(1);m=b.Zc(m);M=b.G(e,"group");J=b.m(e,"pause")}var i=t.wg||[],c=i[b.m(e,"b")]||[];c=c.concat({b:r,d:c.length?0:f.Db||B||0});db(c);G&&a.Lc(1e8);r=a.nb();D(a,y,d);a.A(-1);a.A(b.m(e,"begin")||0)};a.l=function(){b.l(gb,P);a.B();a.A(-1)};b.u(a)},j=(g.module||{}).exports=function(){var a=this,vc=b.cb(a,o),Kb="data-jssor-slider",Ac="data-jssor-thumb",u,m,R,Hb,eb,sb,Z,M,K,P,Sb,xc=1,oc=1,Ec=1,dc=1,Gc={},x,U,Ub,Yb,Xb,Ib,Gb,Fb,bb,C=[],fc,t=-1,gc,q,I,H,L,kb,lb,F,J,hb,S,z,W,jb,Y=[],jc,lc,Hc,s,rb,Cb,nb,ab,X,ec,Bb,Mb,hc,G,Zb=0,db=0,Q=Number.MAX_VALUE,N=Number.MIN_VALUE,D,ib,fb,T=1,Rb=0,mb,B,zb,yb,O,wb,xb,A,V,ob,y,Jb,Vb=b.Xc(),Ab=Vb.Vc,w=[],E,tb,cb,ac,yc,Fc,ub;function Eb(){return!T&&X&12}function zc(){return Rb||!T&&X&3}function Db(){return!B&&!Eb()&&!y.Pc()}function Qc(){return!zc()&&Db()}function Cc(){return z||R}function Jc(){return Cc()&2?lb:kb}function Nb(a,c,d){b.U(a,c);b.V(a,d)}function tc(c,b){var a=Cc(),d=(kb*b+Zb)*(a&1),e=(lb*b+Zb)*(a&2)/2;Nb(c,d,e)}function qc(b,f){if(B&&!(D&1)){var e=b,d;if(b<N){e=N;d=-1}if(b>Q){e=Q;d=1}if(d){var a=b-e;if(f){a=c.mf(a)*2/c.z;a=c.o(a*d,1.6)}else{a=c.o(a*d,.625);a=c.jd(a*c.z/2)}b=e+a*d}}return b}function Lc(a){return qc(a,d)}function dd(a){return qc(a)}function vb(a,b){if(!(D&1)){var c=a-Q+(b||0),d=N-a+(b||0);if(c>0&&c>d)a=Q;else if(d>0)a=N}return a}function mc(a){return!(D&1)&&a-N<.0001}function kc(a){return!(D&1)&&Q-a<.0001}function pb(a){return!(D&1)&&(a-N<.0001||Q-a<.0001)}function Ob(c,a,d){!ub&&b.c(Y,function(b){b.Tc(c,a,d)})}function sc(b){var a=b,d=pb(b);if(d)a=vb(a);else{b=v(b);a=b}a=c.jb(a);a=c.F(a,0);return a}function ad(a){if(a!=t){w[t];fc=t;t=a;gc=w[t]}}function Oc(){z=0;var b=A.k(),d=sc(b);Ob(d,b);if(pb(b)||b==c.jb(b)){if(s&2&&(ab>0&&d==q-1||ab<0&&!d))s=0;ad(d);a.j(j.Vf,t,fc)}}function bc(a,b){if(q&&(!b||!y.Pc())){y.B();y.mc(a,a)}}function qb(a){if(q){a=v(a);a=vb(a);bc(a)}else Ob(0,0)}function Tc(){var b=j.Wd||0,a=ib;j.Wd|=a;return W=a&~b}function Pc(){if(W){j.Wd&=~ib;W=0}}function Uc(){var a=b.tc();b.T(a,bb);return a}function v(b,a){a=a||q||1;return(b%a+a)%a}function uc(c,a,b){s&8&&(s=0);Wb(c,Bb,a,b)}function Pb(){b.c(Y,function(a){a.Qc(a.Ic.Ag<=T)})}function cd(c){if(!T&&(b.Md(c)||!b.Kd(c,u))){T=1;Pb();if(!B){X&12&&Bc();w[t]&&w[t].Zb()}a.j(j.Tf)}}function bd(){if(T){T=0;Pb();B||!(X&12)||Dc()}a.j(j.Of)}function Ic(){b.c(C,function(a){b.T(a,bb);b.zc(a,"hidden");b.pb(a)});b.T(U,bb)}function Qb(b,a){Wb(b,a,d)}function Wb(g,h,l,p){if(q&&(!B||m.Ud)&&!Eb()){var f=A.k(),a=g;if(l){a=f+g;if(D&2){if(mc(f)&&g<0)a=Q;if(kc(f)&&g>0)a=N}}if(!(D&1))if(p)a=v(a);else a=vb(a,.5);if(l&&!pb(a))a=c.D(a);var j=(a-f)%q;a=f+j;if(h==e)h=Bb;var b=c.kb(j),i=0;if(b){if(b<1)b=c.o(b,.5);if(b>1){var o=Jc(),n=(R&1?Gb:Fb)/o;b=c.s(b,n*1.5)}i=h*b}ub=d;y.B();ub=k;y.mc(f,a,i)}}function Mc(e,h,o){var l=this,i={g:2,p:1,q:2,i:1},m={g:"top",p:"right",q:"bottom",i:"left"},g,a,f,j,k={};l.P=e;l.Lb=function(q,l,u){var p,s=q,r=l;if(!f){f=b.se(e);g=e.parentNode;j={qc:b.m(e,n.te,1),Ib:b.m(e,n.Nb)};b.c(m,function(c,a){k[a]=b.m(e,"data-scale-"+c,1)});a=e;if(h){a=b.gc(g,d);b.T(a,{g:0,i:0});b.xb(a,e);b.xb(g,a)}}if(o){p=c.F(q,l);if(h)if(u>=0&&u<1){var w=c.s(q,l);p=c.s(p/w,1/(1-u))*w}}else s=r=p=c.o(K<P?l:q,j.qc);var x=h?1.001:1,t=p*x;h&&(dc=t);b.Sf(a,t);b.K(g,f.Q*s);b.L(g,f.R*r);var v=b.Od()&&b.Oc()<9?t:1,y=(s-v)*f.Q/2,z=(r-v)*f.R/2;b.U(a,y);b.V(a,z);b.c(f,function(d,a){if(i[a]&&d){var e=(i[a]&1)*c.o(q,k[a])*d+(i[a]&2)*c.o(l,k[a])*d/2;b.xe[a](g,e)}});b.Qd(g,j.Ib)}}function Yc(){var a=this;l.call(a,0,0,{Sb:q});b.c(w,function(b){a.Nc(b);b.cc(G/F)})}function Xc(){var a=this,b=Jb.P;l.call(a,-1,2,{X:h.fc,ze:{zb:tc},Sb:q,Gc:Cb},b,{zb:1},{zb:-2})}function Zc(){var b=this;l.call(b,-1e8,2e8);b.Cb=function(e,b){if(c.kb(b-e)>1e-5){var g=b,f=b;if(c.jb(b)!=b&&b>e&&(D&1||b>db))f++;var h=sc(f);Ob(h,g,d);a.j(j.Rf,v(g),v(e),b,e)}}}function Nc(o,n){var b=this,g,i,e,c,h;l.call(b,-1e8,2e8,{Yd:100});b.Jc=function(){mb=d;a.j(j.jg,v(A.k()),V.k())};b.Mc=function(){mb=k;c=k;a.j(j.ig,v(A.k()),V.k());!B&&Oc()};b.Cb=function(f,b){var a=b;if(c)a=h;else if(e){var d=b/e;a=m.yd(d)*(i-g)+g}a=Lc(a);V.A(a)};b.mc=function(a,c,h,f){B=k;e=h||1;g=a;i=c;ub=d;V.A(a);ub=k;b.A(0);b.Xb(e,f)};b.og=function(){c=d;c&&b.Xd(f,f,d)};b.hg=function(a){h=a};V=new Zc;V.I(o);V.I(n)}function Kc(){var c=this,a=Uc();b.E(a,0);c.P=a;c.ic=function(){b.pb(a);b.ae(a)}}function Wc(n,h){var g=this,hb=b.cb(g,o),x,C=0,T,ib=n,B=b.m(ib,"data-fillmode",m.kg),F,r,z=[],S,L,P,O,i,u,y,Q;l.call(g,-J,J+1,{Sb:D&1?q:e,Gc:Cb});function G(a){x&&x.l();Rb-=C;C=0;R(n,a,0);O=d;x=new eb.hb(n,eb,{Db:b.m(n,"idle",ec),Yf:!s});x.Dc(p.Ub,X)}function Y(){x.Kc<eb.Kc&&G()}function X(b,a){C+=a;Rb+=a;if(h==t)!C&&g.Zb()}function N(n,p,m){if(!L){L=d;if(r&&m){var e=m.width,c=m.height,l=e,i=c;if(e&&c&&B){if(B&3&&(!(B&4)||e>I||c>H)){var f=k,o=I/H*c/e;if(B&1)f=o>1;else if(B&2)f=o<1;l=f?e*H/c:I;i=f?H:c*I/e}b.K(r,l);b.L(r,i);b.V(r,(H-i)/2);b.U(r,(I-l)/2)}b.Wb(r,"absolute");a.j(j.If,h)}}p.Jd(k);n&&n(g)}function W(f,b,c,e){if(e==y&&t==h&&s&&Db()&&!g.Ac()){var a=v(f);E.ce(a,h,b,g,c,H/I);b.cg();ob.cc(a-ob.bc()-1);ob.A(a);bc(a,d)}}function cb(b){if(b==y&&t==h&&Db()&&!g.Ac()){if(!i){var a=f;if(E)if(E.qb==h)a=E.le();else E.ic();Y();i=new Vc(n,h,a,x);i.Gf(u)}!i.Pc()&&i.Rc()}}function K(a,d,k){if(a==h){if(a!=d)w[d]&&w[d].Hd();else!k&&i&&i.sf();u&&u.uc();y=b.yb();g.Gb(b.ib(f,cb,y))}else{var j=c.s(h,a),e=c.F(h,a),n=c.s(e-j,j+q-e),l=J+m.bf-1;(!P||n<=l)&&g.Gb()}}function db(){if(t==h&&i){i.B();u&&u.af();u&&u.Ze();i.Fd()}}function gb(){t==h&&i&&i.B()}function Z(b){!fb&&a.j(j.Ye,h,b)}g.Jd=function(a){if(Q!=a){Q=a;a&&b.xb(n,F);!a&&b.lc(F)}};g.Gb=function(e,c){c=c||g;if(z.length&&!L){c.Jd(d);if(!S){S=d;a.j(j.Xe,h);b.c(z,function(a){if(!b.n(a,"src")){a.src=b.G(a,"src2")||"";b.ob(a,b.n(a,"data-display"))}})}b.me(z,r,b.ib(f,N,e,c))}else N(e,c)};g.We=function(){if(Qc())if(q==1){g.Hd();K(h,h)}else{var a;if(E)a=E.je(q);if(a){y=b.yb();var c=h+ab,d=w[v(c)];return d.Gb(b.ib(f,W,c,d,a,y),g)}else(D||!pb(A.k())||!pb(A.k()+ab))&&Qb(ab)}};g.Zb=function(){K(h,h,d)};g.Hd=function(){u&&u.af();u&&u.Ze();g.Cd();i&&i.Ve();i=f;G()};g.cg=function(){b.pb(n)};g.Cd=function(){b.hc(n)};function R(a,h,c){if(b.n(a,Kb))return;if(!O){b.n(a,"data-events",b.Kb(a));b.n(a,"data-display",b.ob(a));b.Mf(a,b.G(a,"data-to"));b.Nf(a,b.G(a,"data-bf"));b.Pf(a,b.m(a,"data-p"));b.Qf(a,b.G(a,"po"));if(a.tagName=="IMG"){z.push(a);if(!b.n(a,"src")){P=d;b.pb(a)}}var e=b.Ce(a);if(e){var f=new Image;b.G(f,"src2",e);z.push(f)}c&&b.E(a,(b.E(a)||0)+1)}var g=b.Fb(a);b.c(g,function(d){if(c<2&&!r)if(b.G(d,"u")=="image"){r=d;r.border=0;b.T(r,bb);b.T(a,bb)}R(d,h,c+1)})}g.Hc=function(c,b){var a=J-b;tc(T,a)};g.qb=h;var M=b.Xf(n,"thumb",d);if(M){b.gc(M);b.pb(M)}b.hc(n);F=b.gc(U);b.E(F,1e3);g.a(n,"click",Z);G(d);T=n;g.a(a,203,K);g.a(a,28,gb);g.a(a,24,db);g.l=function(){b.l(hb,x,i)}}function Vc(F,h,q,r){var c=this,D=b.cb(c,o),i=0,u=0,g,m,f,e,n,x,v,y=w[h];l.call(c,0,0);function A(){c.Rc()}function C(a){v=a;c.B();c.Rc()}function z(){}c.Rc=function(){if(!B&&!mb&&!v&&t==h&&!c.Ac()){var k=c.k();if(!k)if(g&&!n){n=d;c.Fd(d);a.j(j.Ue,h,u,i,u,g,e)}a.j(j.Bd,h,k,i,m,f,e);if(!Eb()){var l;if(k==e)s&&b.ec(y.We,20);else{if(k==f)l=e;else if(!k)l=f;else l=c.Ad();(k!=f||!zc())&&c.Xb(l,A)}}}};c.sf=function(){f==e&&f==c.k()&&c.A(m)};c.Ve=function(){E&&E.qb==h&&E.ic();var b=c.k();b<e&&a.j(j.Bd,h,-b-1,i,m,f,e)};c.Fd=function(a){q&&b.zc(S,a&&q.Uc.xg?"":"hidden")};c.Hc=function(c,b){if(n&&b>=g){n=k;y.Cd();E.ic();a.j(j.Te,h,g,i,u,g,e)}a.j(j.Se,h,b,i,m,f,e)};c.Gf=function(a){if(a&&!x){x=a;a.Dc($JssorPlayer$.qe,C)}};c.a(r,p.sc,z);q&&c.Nc(q);g=c.nb();c.Nc(r);m=g+r.ac;e=c.nb();f=s?g+r.pc:e;c.l=function(){D.l();c.B()}}function cc(){ac=mb;yc=y.Ad();cb=A.k();tb=dd(cb)}function Dc(){cc();if(B||Eb()){y.B();a.j(j.Hf)}}function Bc(f){if(Db()){var b=A.k(),a=tb,e=0;if(f&&c.kb(O)>=m.gd){a=b;e=xb}a=c.jc(a);a=vb(a+e,.5);var d=c.kb(a-b);if(d<1&&m.yd!=h.fc)d=c.o(d,.5);if((!fb||!f)&&ac)y.Xb(yc);else if(b==a)gc.Zb();else y.mc(b,a,d*Bb)}}function wc(a){!b.ab(b.sb(a),e,n.nd)&&b.Yb(a)}function nc(b){zb=k;B=d;Dc();if(!ac)z=0;a.j(j.Qe,v(cb),cb,b)}function Sc(a){rc(a,1)}function rc(c,d){O=0;wb=0;xb=0;Ec=dc;if(d){var h=c.touches[0];yb={x:h.clientX,y:h.clientY}}else yb=b.oc(c);var f=b.sb(c),g=b.ab(f,"1",Ac);if((!g||g===u)&&!W&&(!d||c.touches.length==1)){jb=b.ab(f,e,n.nd)||!ib||!Tc();a.a(i,d?"touchmove":"mousemove",Tb);zb=!jb&&b.ab(f,e,n.Fc);!zb&&!jb&&nc(c,d)}}function Tb(a){var e,f;a=b.mg(a);if(a.type!="mousemove")if(a.touches.length==1){f=a.touches[0];e={x:f.clientX,y:f.clientY}}else gb();else e=b.oc(a);if(e){var i=e.x-yb.x,j=e.y-yb.y,g=c.kb(i),h=c.kb(j);if(z||g>1.5||h>1.5)if(zb)nc(a,f);else{if(c.jb(tb)!=tb)z=z||R&W;if((i||j)&&!z){if(W==3)if(h>g)z=2;else z=1;else z=W;if(Ab&&z==1&&h>g*2.4)jb=d}var l=i,k=kb;if(z==2){l=j;k=lb}(O-wb)*nb<-1.5&&(xb=0);(O-wb)*nb>1.5&&(xb=-1);wb=O;O=l;Fc=tb-O*nb/k/Ec*m.Pe;if(O&&z&&!jb){b.Yb(a);y.og(d);y.hg(Fc)}}}}function gb(){Pc();a.J(i,"mousemove",Tb);a.J(i,"touchmove",Tb);fb=O;if(B){fb&&s&8&&(s=0);y.B();B=k;var b=A.k();a.j(j.Oe,v(b),b,v(cb),cb);X&12&&cc();Bc(d)}}function ed(a){var c=b.sb(a),f=b.ab(c,"1",Kb);if(u===f)if(fb){b.Uf(a);var d=b.ab(c,e,"data-jssor-button","A");d&&b.Yb(a)}else s&4&&(s=0)}a.Ab=function(a){if(a==e)return s;if(a!=s){s=a;s&&w[t]&&w[t].Zb()}};a.tb=function(){return K};a.ub=function(){return P};a.Ne=function(b){if(b==e)return Sb||K;a.Lb(b,b/K*P)};a.Lb=function(c,a,d){b.K(u,c);b.L(u,a);xc=c/K;oc=a/P;b.c(Gc,function(a){a.Lb(xc,oc,d)});if(!Sb){b.kc(S,x);b.V(S,0);b.U(S,0)}Sb=c};a.ne=mc;a.re=kc;a.Xd=function(){a.Ab(s||1)};function Rc(){Vb.Nd&&b.Hb(x,Vb.Nd,([f,"pan-y","pan-x","auto"])[ib]||"");a.a(u,"click",ed,d);a.a(u,"mouseleave",cd);a.a(u,"mouseenter",bd);a.a(u,"mousedown",rc);a.a(u,"touchstart",Sc);a.a(u,"dragstart",wc);a.a(u,"selectstart",wc);a.a(g,"mouseup",gb);a.a(i,"mouseup",gb);a.a(i,"touchend",gb);a.a(i,"touchcancel",gb);a.a(g,"blur",gb);m.Tb&&a.a(i,"keydown",function(c){var a=b.Ld(c);if(a==37||a==39){s&8&&(s=0);uc(m.Tb*(a-38)*nb,d)}})}function ic(f){vc.ye();C=[];w=[];var g=b.Fb(x),j=b.ld(["DIV","A","LI"]);b.c(g,function(a){j[a.tagName.toUpperCase()]&&!b.G(a,"u")&&b.ob(a)!="none"&&C.push(a);b.E(a,(b.E(a)||0)+1)});q=C.length;if(q){var a=R&1?Gb:Fb;Ic();G=m.wd;if(G==e)G=(a-F+L)/2;hb=a/F;J=c.s(q,m.Bc||q,c.jc(hb));D=J<q?m.Jb:0;if(q*F-L<=a){hb=q-L/F;G=(a-F+L)/2;Zb=(a-F*q+L)/2}if(Hb){Mb=Hb.hb;hc=!G&&J==1&&q>1&&Mb&&(!b.Od()||b.Oc()>=9)}if(!(D&1)){db=G/F;if(db>q-1){db=q-1;G=db*F}N=db;Q=N+q-hb-L/F}ib=(J>1||G?R:-1)&m.rc;if(hc)E=new Mb(Jb,I,H,Hb,Ab,Nb);for(var d=0;d<C.length;d++){var h=C[d],i=new Wc(h,d);w.push(i)}ob=new Xc;A=new Yc;y=new Nc(A,ob);Rc()}b.c(Y,function(a){a.Cc(q,w);f&&a.Dc(r.ud,uc)})}a.u=function(c,g){a.P=u=b.Mb(c);K=b.K(u);P=b.L(u);m=b.mb({kg:0,bf:1,Tb:1,Yc:0,Ab:0,Jb:1,Wc:d,Ud:d,ad:1,bd:3e3,fd:1,wc:500,yd:h.td,gd:20,Pe:1,nc:0,kf:1,dd:1,rc:1},g);m.Wc=m.Wc&&b.fg();if(m.Db!=e)m.bd=m.Db;if(m.jf!=e)m.Bc=m.jf;if(m.hf!=e)m.wd=m.hf;s=m.Ab&63;!m.kf;ab=m.ad;X=m.fd;X&=Ab?10:5;ec=m.bd;Bb=m.wc;R=m.dd&3;rb=b.Kf(b.n(u,"dir"))=="rtl";Cb=rb&&(R==1||m.rc&1);nb=Cb?-1:1;Hb=m.zg;eb=b.mb({hb:p},m.tg);sb=m.vg;Z=m.gf;M=m.Cg;var f=b.Fb(u);b.c(f,function(a,d){var c=b.G(a,"u");if(c=="loading")U=a;else{if(c=="slides"){x=a;b.Hb(x,"margin",0);b.Hb(x,"padding",0)}if(c=="navigator")Ub=a;if(c=="arrowleft")Yb=a;if(c=="arrowright")Xb=a;if(c=="thumbnavigator")Ib=a;if(a.tagName!="STYLE"&&a.tagName!="SCRIPT")Gc[c||d]=new Mc(a,c=="slides",b.ld(["slides","thumbnavigator"])[c])}});U&&b.lc(U);U=U||b.tc(i);Gb=b.K(x);Fb=b.L(x);I=m.Vd||Gb;H=m.he||Fb;bb={Q:I,R:H,g:0,i:0,md:"block",zb:"absolute"};L=m.nc;kb=I+L;lb=H+L;F=R&1?kb:lb;Jb=new Kc;if(m.Wc&&(!b.sg()||Ab))Nb=function(a,c,d){b.ee(a,{eb:c,fb:d})};b.n(u,Kb,"1");b.E(x,b.E(x)||0);b.Wb(x,"absolute");S=b.gc(x,d);b.Hb(S,"pointerEvents","none");b.kc(S,x);b.xb(S,Jb.P);b.zc(x,"hidden");if(Ub&&sb){sb.Ec=rb;jc=new sb.hb(Ub,sb,K,P);Y.push(jc)}if(Z&&Yb&&Xb){Z.Ec=rb;Z.Jb=m.Jb;lc=new Z.hb(Yb,Xb,Z,a);Y.push(lc)}if(Ib&&M){M.Yc=m.Yc;M.Tb=M.Tb||0;M.Ec=rb;Hc=new M.hb(Ib,M,U);!M.ug&&b.n(Ib,Ac,"1");Y.push(Hc)}ic(d);a.Lb(K,P);Pb();qb(v(m.Yc));b.Hb(u,"visibility","visible")};a.l=function(){s=0;b.l(w,Y,vc);b.ae(u)};b.u(a)};j.Ye=21;j.Qe=22;j.Oe=23;j.jg=24;j.ig=25;j.Xe=26;j.If=27;j.Hf=28;j.Of=31;j.Tf=32;j.Rf=202;j.Vf=203;j.Ue=206;j.Te=207;j.Se=208;j.Bd=209;jssor_2_slider_init=function(){var d={Ab:0,ad:5,wc:160,Vd:270,nc:60,wd:1,gf:{hb:t}},c=new j("jssor_2",d),e=910;function a(){var d=c.P.parentNode,b=d.clientWidth;if(b){var f=m.min(e||b,b);c.Ne(f)}else g.setTimeout(a,30)}a();b.Y(g,"load",a);b.Y(g,"resize",a);b.Y(g,"orientationchange",a)}}(window,document,Math,null,true,false)
</script>
<style>
.jssorl-009-spin img{animation-name:jssorl-009-spin;animation-duration:1.6s;animation-iteration-count:infinite;animation-timing-function:linear}@keyframes jssorl-009-spin{from{transform:rotate(0);}to{transform:rotate(360deg);}}.jssora082{display:block;position:absolute;cursor:pointer}.jssora082 .c{fill:#fff;fill-opacity:.5;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.3}.jssora082 .a{fill:#000;opacity:.8}.jssora082:hover .c{fill-opacity:.3}.jssora082:hover .a{opacity:1}.jssora082.jssora082dn{opacity:.5}.jssora082.jssora082ds{opacity:.3;pointer-events:none}
</style>
<div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:910px;height:180px;overflow:hidden;visibility:hidden;">
<!-- Loading Screen -->
<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
</div>
<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1000px;height:180px;overflow:hidden;">
<div data-p="56.25">
<img data-u="image" src="img/s1.png" />
</div>
<div data-p="56.25">
<img data-u="image" src="img/s2.png" />
</div>
<div data-p="56.25">
<img data-u="image" src="img/s3.png" />
</div>
<div data-p="56.25">
<img data-u="image" src="img/s4.png" />
</div>
<div data-p="56.25">
<img data-u="image" src="img/s5.png" />
</div>
<div data-p="56.25">
<img data-u="image" src="img/s6.png" />
</div>
<div data-p="56.25">
<img data-u="image" src="img/s7.png" />
</div>
<div data-p="56.25">
<img data-u="image" src="img/s8.png" />
</div>
<div data-p="56.25">
<img data-u="image" src="img/s9.png" />
</div>
</div>
<!-- Arrow Navigator -->
<div data-u="arrowleft" class="jssora082" style="width:30px;height:40px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
<svg viewbox="2000 0 12000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
<path class="c" d="M4800,14080h6400c528,0,960-432,960-960V2880c0-528-432-960-960-960H4800c-528,0-960,432-960,960 v10240C3840,13648,4272,14080,4800,14080z"></path>
<path class="a" d="M6860.8,8102.7l1693.9,1693.9c28.9,28.9,63.2,43.4,102.7,43.4s73.8-14.5,102.7-43.4l379-379 c28.9-28.9,43.4-63.2,43.4-102.7c0-39.6-14.5-73.8-43.4-102.7L7926.9,8000l1212.2-1212.2c28.9-28.9,43.4-63.2,43.4-102.7 c0-39.6-14.5-73.8-43.4-102.7l-379-379c-28.9-28.9-63.2-43.4-102.7-43.4s-73.8,14.5-102.7,43.4L6860.8,7897.3 c-28.9,28.9-43.4,63.2-43.4,102.7S6831.9,8073.8,6860.8,8102.7L6860.8,8102.7z"></path>
</svg>
</div>
<div data-u="arrowright" class="jssora082" style="width:30px;height:40px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
<svg viewbox="2000 0 12000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
<path class="c" d="M11200,14080H4800c-528,0-960-432-960-960V2880c0-528,432-960,960-960h6400 c528,0,960,432,960,960v10240C12160,13648,11728,14080,11200,14080z"></path>
<path class="a" d="M9139.2,8102.7L7445.3,9796.6c-28.9,28.9-63.2,43.4-102.7,43.4c-39.6,0-73.8-14.5-102.7-43.4 l-379-379c-28.9-28.9-43.4-63.2-43.4-102.7c0-39.6,14.5-73.8,43.4-102.7L8073.1,8000L6860.8,6787.8 c-28.9-28.9-43.4-63.2-43.4-102.7c0-39.6,14.5-73.8,43.4-102.7l379-379c28.9-28.9,63.2-43.4,102.7-43.4 c39.6,0,73.8,14.5,102.7,43.4l1693.9,1693.9c28.9,28.9,43.4,63.2,43.4,102.7S9168.1,8073.8,9139.2,8102.7L9139.2,8102.7z"></path>
</svg>
</div>
</div>
<script type="text/javascript">jssor_2_slider_init();</script>
<!-- #endregion Jssor Slider End -->

<br>
<br>
<div style="z-index:1">
<div class="square">
    <div class="content" >
  <font size="7px">
        SERVICES
    </font>
    </div>
</div>

<div class="square1">
    <div class="content1">
        <img class="rs" src="img/v5.jpg">
      <table height="40" >
<th bgcolor="#2E4B7A"  > <font color="white" size="4" align="center">UIPT Property Tax Calculator</font></th>
</table>
       
    </div>
</div>
<div class="square1">
    <div class="content1">
        <img class="rs" src="img/v3.jpg">
    <table height="40" >
<th bgcolor="#2E4B7A"  > <font color="white" size="4" align="center">UIPT Property Tax Calculator</font></th>
</table>
       
    </div>
</div>
<div class="square1">
    <div class="content1">
        <img class="rs" src="img/v2.jpg">
    <table height="40" >
<th bgcolor="#2E4B7A"  > <font color="white" size="4" align="center">Motor Vehicle Tax Calculator</font></th>
</table>
       
    </div>
</div>
<div class="square2">
    <div class="content1">
        <img class="rs" src="img/v6.jpg">
    <table height="40" >
<th bgcolor="#2E4B7A"  > <font color="white" size="4" align="center">Online Verification of PT10 Challan</font></th>
</table>
       
    </div>
</div>
<div class="square1">
    <div class="content1">
        <img class="rs" src="img/v7.jpg">
    <table height="50" width="245" >
<th bgcolor="#2E4B7A"  > <font color="white" size="4" align="center">Cotton Fee MIS</font></th>
</table>
       
    </div>
</div>
<div class="square1">
    <div class="content1">
        <img class="rs" src="img/v8.jpg">
    <table height="50" width="245" >
<th bgcolor="#2E4B7A"  > <font color="white" size="4" align="center">Professional Tax Self Assesment</font></th>
</table>
       
    </div>
</div>
<div class="square1">
    <div class="content1">
        <img class="rs" src="img/v8.jpg">
    <table height="50" width="245" >
<th bgcolor="#2E4B7A"  > <font color="white" size="4" align="center">E-Auction of Registration Mark</font></th>
</table>
       
    </div>
  
</div>

<div class="square3">
   
      <div style="min-height: 50px;margin-right:10%" id="footer-main">

<ul>
    <li><a href=""><b>FEEDBACK</b></a></li>
    <li><a href=""><b>CAREERS</b></a></li>
    <li><a href=""><b>TENDERS</b></a></li>
    <li><a href=""><b>DOWNLOADS</b></a></li>
    <li><a href=""><b>CONTACT US</b></a></li>
    <li><a href=""><b>SITEMAP</b></a></li>
</ul>




       
   
  
</div>

    <div style="min-height: 50px;margin-right:10%">

<p style="background-color:grey;margin-top:-10px;padding-bottom: 1%;padding-top:10px;padding-left:20%">

Copyright © 2016 Excise, Taxation & Narcotics Control Department, Government of The Punjab</p>




       
   
  
</div>

</div>





</body>
</html>

