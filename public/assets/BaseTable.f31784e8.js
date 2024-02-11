import{a8 as $,r as d,E as N,o as u,e as c,w as a,ag as t,aM as p,aN as k,au as r,v,aO as P,an as y,aE as h,aP as T,ap as V,aQ as E,ad as j,aR as I,aS as O,aT as S,ai as q,aj as f,f as b,aJ as x,l as z,aL as G}from"./index.92769849.js";const R={class:"my-table-details"},U={class:"col-12 q-mb-md"},A={class:"row justify-between q-col-gutter-sm"},D={class:"col-md-auto col-sm-auto col-xs-12"},K={class:"col-md-6 col-sm-auto col-xs-12"},M=$({__name:"BaseTable",props:{columns:{type:Array,required:!0},loading:{type:Boolean,required:!1,default:!1},data:{type:Array,required:!0},rowKey:{type:String,required:!0},selection:{type:String,required:!1,default:"none"},showGridToggle:{type:Boolean,required:!1,default:!0},grid:{type:Boolean,required:!1,default:!1},serverPagination:{type:Object,default:void 0}},emits:["destroyOne","edit","request"],setup(i,{emit:Q}){const w=i,_=Q,m=d([]),g=d(""),n=d(w.grid),s=d({page:1,rowsPerPage:6,sortBy:"id",descending:!1,rowsNumber:void 0}),B=l=>{_("request",l),s.value=l.pagination};return N(()=>w.serverPagination,l=>{l&&s.value&&(s.value.rowsNumber=l.total,s.value.totalPages=l.total_pages,s.value.page=l.current_page,s.value.rowsPerPage=l.per_page)},{immediate:!0}),(l,o)=>(u(),c(j(I),{selected:m.value,"onUpdate:selected":o[2]||(o[2]=e=>m.value=e),pagination:s.value,"onUpdate:pagination":o[3]||(o[3]=e=>s.value=e),rows:i.data,grid:n.value,columns:i.columns,selection:i.selection,filter:g.value,"row-key":i.rowKey,separator:"horizontal",loading:i.loading,"rows-per-page-options":[6,10,20,50,0],onRequest:B},{"body-cell-is_active":a(e=>[t(k,{props:e},{default:a(()=>[p(l.$slots,"cell_is_active",{props:e},()=>[r("div",null,[t(O,{color:"purple",label:e.value},null,8,["label"])]),r("div",R,S(e.row.details),1)])]),_:2},1032,["props"])]),top:a(()=>[r("div",U,[r("div",A,[r("div",D,[t(P,{modelValue:g.value,"onUpdate:modelValue":o[0]||(o[0]=e=>g.value=e),borderless:"",dense:"",outlined:"",debounce:"300",placeholder:"Buscar..."},{append:a(()=>[t(v,{name:"fas fa-magnifying-glass"})]),_:1},8,["modelValue"])]),r("div",K,[i.showGridToggle?(u(),c(y,{key:0,flat:"",padding:"0",class:"q-mr-md",icon:n.value?"fas fa-table":"fas fa-grip",size:"lg",color:"primary",onClick:o[1]||(o[1]=e=>n.value=!n.value)},null,8,["icon"])):h("",!0),m.value.length>0?(u(),c(y,{key:1,color:"negative",icon:"far fa-trash-can",label:"Eliminar","no-caps":""})):h("",!0)])])])]),"body-cell-actions":a(e=>[t(k,{class:"text-right"},{default:a(()=>[t(y,{round:"",flat:"",color:"primary",icon:"fas fa-ellipsis"},{default:a(()=>[t(T,{self:"top start",fit:"","transition-show":"flip-right","transition-hide":"jump-up"},{default:a(()=>[t(V,{class:"my-card",flat:""},{default:a(()=>[t(E,{style:{"min-width":"100px"}},{default:a(()=>[p(l.$slots,"actions",{key:e.key},()=>[t(q,{clickable:"",onClick:C=>l.$emit("edit",e.key)},{default:a(()=>[t(f,{avatar:""},{default:a(()=>[t(v,{name:"fas fa-pen-to-square"})]),_:1}),t(f,null,{default:a(()=>[b("Editar")]),_:1})]),_:2},1032,["onClick"]),t(x),z((u(),c(q,{clickable:"",onClick:C=>l.$emit("destroyOne",e.key)},{default:a(()=>[t(f,{avatar:""},{default:a(()=>[t(v,{name:"fas fa-trash-can"})]),_:1}),t(f,null,{default:a(()=>[b("Eliminar")]),_:1})]),_:2},1032,["onClick"])),[[G]])])]),_:2},1024)]),_:2},1024)]),_:2},1024)]),_:2},1024)]),_:2},1024)]),item:a(e=>[p(l.$slots,"item",{props:e},()=>[b(" haz tu propia card... ")])]),_:3},8,["selected","pagination","rows","grid","columns","selection","filter","row-key","loading"]))}});export{M as _};
