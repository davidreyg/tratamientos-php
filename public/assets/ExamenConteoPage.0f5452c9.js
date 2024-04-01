import{aE as h,aF as C,Y as g,k as Q,o as l,ak as u,aK as f,a5 as d,w as i,a6 as w,aj as v,at as m,aQ as L,a$ as _,e as y,a8 as x,f as p,a7 as A,ae as B,r as N,ac as S,a2 as E,au as F}from"./index.418160ac.js";import{O as b}from"./OrdenApi.daf5e516.js";function V(){const n=async()=>(await b.exportConteoExamens()).data(),{data:o,isLoading:c,isSuccess:r,isError:s,isFetching:e,refetch:t}=h([C.EXAMEN_ALL,"conteo"],n,{enabled:!1});return{data:o,isLoading:c,isSuccess:r,isError:s,isFetching:e,refetch:t}}function I(n){const o=async()=>(await b.getConteoExamens(n.value)).data().data,{data:c,isLoading:r,isSuccess:s,isError:e,isFetching:t,refetch:a}=h([C.EXAMEN_ALL,"conteo",n==null?void 0:n.value],o);return{data:c,isLoading:r,isSuccess:s,isError:e,isFetching:t,refetch:a}}const O={class:"q-mb-sm text-overline"},T=g({__name:"ExamenConteoCard",props:{examens:{type:Array,required:!0}},setup(n){const o=n,c=Q(()=>o.examens.map(e=>e.categoria.data).filter((e,t,a)=>a.findIndex(k=>k.id===e.id)===t).map(e=>({...e}))),r=s=>o.examens.filter(e=>e.categoria_id==s);return(s,e)=>(l(!0),u(_,null,f(c.value,t=>(l(),u("div",{key:t.id,class:"col-xs-12 col-sm-6"},[d(B,null,{default:i(()=>[d(w,null,{default:i(()=>[v("div",O,m(t.nombre),1),d(L,{dense:""},{default:i(()=>[(l(!0),u(_,null,f(r(t.id),a=>(l(),y(A,{key:a.id,dense:""},{default:i(()=>[d(x,null,{default:i(()=>[p(m(a.nombre),1)]),_:2},1024),d(x,{side:"",class:"text-bold"},{default:i(()=>[p(m(a.ordens_count),1)]),_:2},1024)]),_:2},1024))),128))]),_:2},1024)]),_:2},1024)]),_:2},1024)]))),128))}}),$={class:"row q-col-gutter-md"},j={class:"col-12"},U=g({__name:"ExamenConteoPage",setup(n){const o=N({}),{data:c}=I(o),{refetch:r,data:s}=V(),e=async()=>{if(await r.value(),s.value){const t=window.URL.createObjectURL(new Blob([s.value])),a=document.createElement("a");a.href=t,a.setAttribute("download","conteo_examenes.xlsx"),document.body.appendChild(a),a.click(),document.body.removeChild(a)}};return(t,a)=>(l(),u("div",$,[v("div",j,[d(S,{color:"positive",icon:"fas fa-file-excel",label:"Exportar a excel","no-caps":"",onClick:e})]),E(c)?(l(),y(T,{key:0,examens:E(c)},null,8,["examens"])):F("",!0)]))}});export{U as default};
