import{aB as m,o as a,e as o,w as r,ac as i,au as l,a5 as s,ar as c,aC as p}from"./index.d3351ac8.js";import{_ as f}from"./BasePage.e2af9819.js";import"./QPage.91ab4e01.js";const C={__name:"ItemIndex",setup(d){return(e,t)=>{const u=m("router-view");return a(),o(f,{title:e.$route.meta.title,loading:!1},{"top-right":r(()=>[e.$route.meta.action==="new"?(a(),o(i,{key:0,color:"primary",label:"Nuevo","icon-right":"fas fa-file-circle-plus","no-caps":"",outline:"",onClick:t[0]||(t[0]=n=>e.$router.push({name:"items.create"}))})):l("",!0),e.$route.meta.action==="back"?(a(),o(i,{key:1,color:"primary",label:"Atr\xE1s","icon-right":"fas fa-arrow-left","no-caps":"",outline:"",onClick:t[1]||(t[1]=n=>e.$router.back())})):l("",!0)]),content:r(()=>[s(u,null,{default:r(({Component:n})=>[s(c,{mode:"out-in","enter-active-class":"animated fadeIn","leave-active-class":"animated fadeOut",duration:150},{default:r(()=>[(a(),o(p(n),{key:e.$route.fullPath}))]),_:2},1024)]),_:1})]),_:1},8,["title"])}}};export{C as default};