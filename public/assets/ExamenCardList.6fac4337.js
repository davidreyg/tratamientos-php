import{Y as p,k as _,o as r,ak as o,aK as x,a5 as n,w as i,a6 as f,aj as b,at as g,ae as y,a$ as C}from"./index.a85a2474.js";import{_ as k}from"./BaseCheckBoxGroup.1171d2cd.js";const v={class:"q-mb-sm text-overline"},E=p({__name:"ExamenCardList",props:{examens:{type:Array,required:!0}},setup(l){const s=l,m=_(()=>s.examens.map(e=>e.categoria.data).filter((e,a,d)=>d.findIndex(u=>u.id===e.id)===a).map(e=>({...e}))),c=t=>s.examens?s.examens.filter(e=>e.categoria_id==t).map(e=>({label:e.nombre,value:Number(e.id)})):[];return(t,e)=>(r(!0),o(C,null,x(m.value,a=>(r(),o("div",{key:a.id,class:"col-xs-12 col-sm-6"},[n(y,null,{default:i(()=>[n(f,null,{default:i(()=>[b("div",v,g(a.nombre),1),n(k,{size:"xs",style:{"font-size":"small"},dense:"",name:"examen_ids",label:"Examen",options:c(a.id)},null,8,["options"])]),_:2},1024)]),_:2},1024)]))),128))}});export{E as _};
