(()=>{"use strict";var e={493:(e,t,r)=>{e.exports=r.p+"f7df4e3a8f15acf8ad43.png"},616:(e,t,r)=>{e.exports=r.p+"7bf4dbbe5b551f804771.png"}},t={};function r(u){var n=t[u];if(void 0!==n)return n.exports;var i=t[u]={exports:{}};return e[u](i,i.exports,r),i.exports}r.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),(()=>{var e;r.g.importScripts&&(e=r.g.location+"");var t=r.g.document;if(!e&&t&&(t.currentScript&&(e=t.currentScript.src),!e)){var u=t.getElementsByTagName("script");u.length&&(e=u[u.length-1].src)}if(!e)throw new Error("Automatic publicPath is not supported in this browser");e=e.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),r.p=e})(),(()=>{r(616);var e=r(493),t=new Image;t.src=e;var u={priceIn:250,priceOut:170,volumeNeed:420,volumeOut:95,mixtureType:9,mixtureWeight:30,mixturePrice:285,mixtureWidth:1.5},n=document.querySelector(".price__in input"),i=document.querySelector(".price__out input"),c=document.querySelector(".volume__need input"),o=document.querySelector(".volume__out input"),l=document.querySelector(".mixture__type input"),a=document.querySelector(".mixture__weight input"),m=document.querySelector(".mixture__price input"),d=document.querySelector(".mixture__width input"),p=document.querySelector(".sht-calc__cost-num"),s=document.querySelector(".sht-calc__costMixture-num"),v=document.querySelector(".sht-calc__need-num"),x=document.querySelector(".sht-calc__time-num"),h=document.querySelector(".sht-calc__needPay-num"),y=document.querySelector(".sht-calc__income-num");function _(e,t,r){isNaN(r.target.value)&&(u[e]=0),r.target.value>99999&&(u[e]=99999,t.value=99999),r.target.value&&!isNaN(parseFloat(r.target.value))&&(u[e]=Math.abs(parseFloat(r.target.value)),r.target.value=Math.abs(parseFloat(r.target.value))),b()}function g(e){return new Intl.NumberFormat("ru-Ru",{currency:"rub",style:"currency",minimumFractionDigits:0}).format(e)}function b(){p.textContent=g(parseInt(u.priceIn*u.volumeNeed*100)/100),s.textContent=g(0===u.mixtureWidth||0===u.mixtureType?0:Math.round(u.volumeNeed*u.mixtureWidth*u.mixtureType/u.mixtureWeight)*u.mixturePrice),v.textContent=0===u.mixtureWidth||0===u.mixtureType?0:Math.round(u.volumeNeed*u.mixtureWidth*u.mixtureType/u.mixtureWeight),x.textContent=0===u.volumeOut?0:Math.ceil(u.volumeNeed/u.volumeOut),h.textContent=g(Math.ceil(u.priceOut*u.volumeNeed)),y.textContent=g(parseInt(u.priceIn*u.volumeNeed*100)/100-Math.ceil(u.priceOut*u.volumeNeed))}n.addEventListener("input",_.bind(null,"priceIn",n)),i.addEventListener("input",_.bind(null,"priceOut",i)),c.addEventListener("input",_.bind(null,"volumeNeed",c)),o.addEventListener("input",_.bind(null,"volumeOut",o)),a.addEventListener("input",_.bind(null,"mixtureWeight",a)),m.addEventListener("input",_.bind(null,"mixturePrice",m)),d.addEventListener("input",_.bind(null,"mixtureWidth",d)),t.addEventListener("click",(function(){9===u.mixtureType?(u.mixtureType=18.3,l.value="ЦПС"):(u.mixtureType=9,l.value="Гипс"),b()})),document.querySelector(".mixture__type").appendChild(t),document.querySelector(".sht-calc__mixplaster").addEventListener("click",(function(){window.open("https://mixplaster.com","_blank")})),b()})()})();