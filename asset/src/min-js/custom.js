!function(){function n(e){return document.querySelector(e)}var e=window.innerWidth,t=n(".sidebar-btn"),i=n(".sidebar-close"),l=n("#sidebar-default");n("#sidebar-container");e<1200&&(t.style.display="inline-block",i.style.display="inline-block");var a=!!l.dataset.expand;function r(){if(1==a){var e=-300,t=setInterval(function(){0==e?clearInterval(t):(e+=4,l.style.left=e+"px")},1);l.setAttribute("data-expand","false"),a=!1,n(".maincontent").style.filter="blur(7px)"}else if(0==a){l.style.left="-300px";e=0,t=setInterval(function(){-300==e?clearInterval(t):(e-=4,l.style.left=e+"px")},1);l.setAttribute("data-expand","true"),a=!0,n(".maincontent").style.filter="blur(0px)"}}t.addEventListener("click",function(){r()}),i.addEventListener("click",function(){r()})}();