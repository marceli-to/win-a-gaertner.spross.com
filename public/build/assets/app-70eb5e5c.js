(function(){document.addEventListener("DOMContentLoaded",function(){document.querySelectorAll("form").forEach(e=>{e.addEventListener("submit",function(t){window.scrollTo({top:0,behavior:"smooth"})})}),document.querySelectorAll("input").forEach(e=>{e.addEventListener("focus",function(){const t=this.parentElement,i=t.querySelector(".js-label"),u=document.querySelectorAll(".js-label-group"),a=t.querySelector(".js-error");i&&(i.classList.remove("hidden"),i.classList.remove("!text-copper")),this.type=="radio"&&u&&u.forEach(m=>{m.classList.remove("!text-copper")}),a&&a.classList.add("hidden"),this.classList.remove("!border-copper/50")})})})})();const s=["Baumcutter?","Leafbläser?","Treeschneider?","Plantpfleger?","Staudentrimmer?"];let o=s.length-1,r=s[o].length,n=!0,l=!1,c;const p=100,h=50,f=2e3,g=f/2;function L(){c=document.getElementById("typewriter"),c&&d()}function d(){const e=s[o];if(l){l=!1,n=!1,o=(o+1)%s.length,setTimeout(d,g);return}n?r--:r++,c.textContent=e.substring(0,r);let t=n?h:p;!n&&r===e.length?(t=f,n=!0):n&&r===0&&(l=!0),setTimeout(d,t)}document.addEventListener("DOMContentLoaded",function(){setTimeout(L,1e3)});