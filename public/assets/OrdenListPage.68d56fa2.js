import{Y as N,b0 as O,r as f,b1 as P,H as R,o as l,ak as T,aj as L,a5 as e,w as a,am as p,a2 as o,e as i,ac as g,aX as v,f as y,au as d,ae as b,a6 as k,b2 as B,al as S}from"./index.56bc56d2.js";import{u as $,_ as z,a as E,b as F}from"./OrdenTable.80c247b1.js";import{u as h}from"./laboratorio.store.6c89e3bf.js";import"./BaseTable.fed7cd80.js";const I={class:"row q-col-gutter-md"},D={class:"col-12"},Y=N({__name:"OrdenListPage",setup(j){const{$reset:C}=h(),{ordenSeleccionada:s,isOrdenLoading:Q}=O(h()),n=f({}),V=f(),{data:u,isFetching:w}=$(n),c=f("list"),x=t=>{n.value.page=t.pagination.page,n.value.limit=t.pagination.rowsPerPage,n.value.search=t.filter,n.value.orderBy=t.pagination.sortBy,n.value.sortedBy=t.pagination.descending?"desc":"asc"},m=()=>{s.value=void 0};return P(()=>{C()}),R(()=>s.value,t=>{t||(c.value="list")}),(t,_)=>(l(),T("div",I,[L("div",D,[e(S,{modelValue:c.value,"onUpdate:modelValue":_[0]||(_[0]=r=>c.value=r),animated:""},{default:a(()=>[e(p,{name:"list"},{default:a(()=>[o(u)?(l(),i(z,{key:0,ordens:o(u).data,"server-pagination":o(u).meta.pagination,loading:o(w),onRequest:x},{"custom-actions":a(({props:r})=>[e(g,{color:"primary",icon:"fas fa-eye",round:"",flat:"",size:"sm",loading:o(Q)&&V.value===Number(r.key)},{default:a(()=>[e(v,null,{default:a(()=>[y("Visualizar Orden.")]),_:1})]),_:2},1032,["loading"]),r.row.estado===2?(l(),i(g,{key:0,color:"info",icon:"fas fa-print",round:"",flat:"",size:"sm"},{default:a(()=>[e(v,null,{default:a(()=>[y("Imprimir.")]),_:1})]),_:1})):d("",!0)]),_:1},8,["ordens","server-pagination","loading"])):d("",!0)]),_:1}),e(p,{name:"edit-examens"},{default:a(()=>[o(s)?(l(),i(B,{key:0,icon:"fas fa-file-signature",label:"Datos de la orden."},{default:a(()=>[e(b,{class:"my-card"},{default:a(()=>[e(k,null,{default:a(()=>[e(E,{orden:o(s)},null,8,["orden"])]),_:1})]),_:1})]),_:1})):d("",!0),o(s)?(l(),i(B,{key:1,icon:"fas fa-vials",label:"Registrar resultados.",caption:"Editar / Crear","default-opened":""},{default:a(()=>[e(b,{class:"my-card"},{default:a(()=>[e(k,null,{default:a(()=>[e(F,{orden:o(s),"with-observaciones":"",onCancel:m,onSubmit:m},null,8,["orden"])]),_:1})]),_:1})]),_:1})):d("",!0)]),_:1})]),_:1},8,["modelValue"])])]))}});export{Y as default};