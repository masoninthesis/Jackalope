(function(){function a(){e=window.innerWidth;t=window.innerHeight;o={x:e/2,y:t/2};n=document.getElementById("large-header");n.style.height=t+"px";r=document.getElementById("demo-canvas");r.width=e;r.height=t;i=r.getContext("2d");s=[];for(var u=0;u<e;u+=e/20)for(var a=0;a<t;a+=t/20){var f=u+Math.random()*e/20,l=a+Math.random()*t/20,c={x:f,originX:f,y:l,originY:l};s.push(c)}for(var h=0;h<s.length;h++){var p=[],d=s[h];for(var v=0;v<s.length;v++){var m=s[v];if(d!=m){var b=!1;for(var w=0;w<5;w++)if(!b&&p[w]==undefined){p[w]=m;b=!0}for(var w=0;w<5;w++)if(!b&&y(d,m)<y(d,p[w])){p[w]=m;b=!0}}}d.closest=p}for(var h in s){var E=new g(s[h],2+Math.random()*2,"rgba(255,255,255,0.3)");s[h].circle=E}}function f(){"ontouchstart"in window||window.addEventListener("mousemove",l);window.addEventListener("scroll",c);window.addEventListener("resize",h)}function l(e){var t=posy=0;if(e.pageX||e.pageY){t=e.pageX;posy=e.pageY}else if(e.clientX||e.clientY){t=e.clientX+document.body.scrollLeft+document.documentElement.scrollLeft;posy=e.clientY+document.body.scrollTop+document.documentElement.scrollTop}o.x=t;o.y=posy}function c(){document.body.scrollTop>t?u=!1:u=!0}function h(){e=window.innerWidth;t=window.innerHeight;n.style.height=t+"px";r.width=e;r.height=t}function p(){d();for(var e in s)v(s[e])}function d(){if(u){i.clearRect(0,0,e,t);for(var n in s){if(Math.abs(y(o,s[n]))<4e3){s[n].active=.3;s[n].circle.active=.6}else if(Math.abs(y(o,s[n]))<2e4){s[n].active=.1;s[n].circle.active=.3}else if(Math.abs(y(o,s[n]))<4e4){s[n].active=.02;s[n].circle.active=.1}else{s[n].active=0;s[n].circle.active=0}m(s[n]);s[n].circle.draw()}}requestAnimationFrame(d)}function v(e){TweenLite.to(e,1+1*Math.random(),{x:e.originX-50+Math.random()*100,y:e.originY-50+Math.random()*100,ease:Circ.easeInOut,onComplete:function(){v(e)}})}function m(e){if(!e.active)return;for(var t in e.closest){i.beginPath();i.moveTo(e.x,e.y);i.lineTo(e.closest[t].x,e.closest[t].y);i.strokeStyle="rgba(156,217,249,"+e.active+")";i.stroke()}}function g(e,t,n){var r=this;(function(){r.pos=e||null;r.radius=t||null;r.color=n||null})();this.draw=function(){if(!r.active)return;i.beginPath();i.arc(r.pos.x,r.pos.y,r.radius,0,2*Math.PI,!1);i.fillStyle="rgba(156,217,249,"+r.active+")";i.fill()}}function y(e,t){return Math.pow(e.x-t.x,2)+Math.pow(e.y-t.y,2)}var e,t,n,r,i,s,o,u=!0;a();p();f()})();