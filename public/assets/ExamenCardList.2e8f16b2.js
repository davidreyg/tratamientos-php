var x=Object.defineProperty;var g=(t,e,s)=>e in t?x(t,e,{enumerable:!0,configurable:!0,writable:!0,value:s}):t[e]=s;var d=(t,e,s)=>(g(t,typeof e!="symbol"?e+"":e,s),s);import{a as h,aE as y,aF as C,Y as b,k,o as u,ak as p,aK as v,a5 as m,w as _,a6 as E,aj as L,at as Q,ae as w,a$ as B}from"./index.56bc56d2.js";import{_ as F}from"./BaseCheckBoxGroup.4875acef.js";const o=class{static async fetchAll(e){return await o._api.get(o._endpoint,e)}};let i=o;d(i,"_api",h),d(i,"_endpoint","/examens");function V(t){const e=async()=>(await i.fetchAll(t==null?void 0:t.value)).data().data,{data:s,isLoading:c,isSuccess:r,isError:a,isFetching:n,refetch:l}=y([C.EXAMEN_ALL],e);return{data:s,isLoading:c,isSuccess:r,isError:a,isFetching:n,refetch:l}}const N={class:"q-mb-sm text-overline"},$=b({__name:"ExamenCardList",props:{examens:{type:Array,required:!0}},setup(t){const e=t,s=k(()=>e.examens.map(a=>a.categoria.data).filter((a,n,l)=>l.findIndex(f=>f.id===a.id)===n).map(a=>({...a}))),c=r=>e.examens?e.examens.filter(a=>a.categoria_id==r).map(a=>({label:a.nombre,value:Number(a.id)})):[];return(r,a)=>(u(!0),p(B,null,v(s.value,n=>(u(),p("div",{key:n.id,class:"col-xs-12 col-sm-6"},[m(w,null,{default:_(()=>[m(E,null,{default:_(()=>[L("div",N,Q(n.nombre),1),m(F,{size:"xs",style:{"font-size":"small"},dense:"",name:"examen_ids",label:"Examen",options:c(n.id)},null,8,["options"])]),_:2},1024)]),_:2},1024)]))),128))}});export{$ as _,V as u};
