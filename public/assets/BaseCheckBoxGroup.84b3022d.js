import{Y as u,b1 as d,b2 as m,o as b,e as c,w as p,f,at as g,a2 as e,a5 as y,b3 as V,a3 as k,bf as h,b5 as x}from"./index.822d49dc.js";const q=u({__name:"BaseCheckBoxGroup",props:{name:{type:String,required:!0},label:{type:String,required:!0},options:{type:Array,required:!0}},emits:["update"],setup(s){const l=d(s,"name"),{value:r,handleChange:i,errorMessage:a}=m(l,void 0);return(n,o)=>(b(),c(x,{color:"black",borderless:"",error:!!e(a),"bottom-slots":"","hide-bottom-space":!e(a)},{error:p(()=>[f(g(e(a)),1)]),default:p(()=>[y(h,V({modelValue:e(r),"onUpdate:modelValue":o[0]||(o[0]=t=>k(r)?r.value=t:null),options:s.options,type:"checkbox"},n.$attrs,{"onUpdate:modelValue":o[1]||(o[1]=t=>{e(i)(t),n.$emit("update",t)})}),null,16,["modelValue","options"])]),_:1},8,["error","hide-bottom-space"]))}});export{q as _};