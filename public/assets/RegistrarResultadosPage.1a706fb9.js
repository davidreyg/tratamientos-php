import{Y as S,b1 as T,r as f,b2 as $,H as I,o as r,ak as P,aj as q,a5 as a,w as e,am as v,a2 as t,e as u,ac as g,aX as y,f as k,au as c,ae as b,a6 as C,b5 as p,al as z,ag as A}from"./index.d215a0e8.js";import{u as D,a as F,_ as U,b as j,c as G}from"./OrdenTable.d4e6a7ba.js";import{u as h}from"./laboratorio.store.b1e5eaea.js";import"./BaseTable.b5a45280.js";const H={class:"row q-col-gutter-md"},J={class:"col-12"},Z=S({__name:"RegistrarResultadosPage",setup(M){const{$reset:N,fetchOrdenById:R}=h(),{ordenSeleccionada:o,isOrdenLoading:O}=T(h()),Q=f({search:"estado:0",searchJoin:"and",limit:0}),d=f(),{data:m,refetch:w}=D(Q),l=f("list"),x=async s=>{d.value=s,await R(s),o.value&&(l.value="edit-examens")},{mutateAsync:B,isLoading:V}=F(),E=async s=>{d.value=s,await B(s,{onSuccess:()=>{A.success("La orden se REGISTRO correctamente."),w.value(),l.value="list"},onError:i=>{console.log(i)}})},_=()=>{o.value=void 0};return $(()=>{N()}),I(()=>o.value,s=>{s||(l.value="list")}),(s,i)=>(r(),P("div",H,[q("div",J,[a(z,{modelValue:l.value,"onUpdate:modelValue":i[0]||(i[0]=n=>l.value=n),animated:""},{default:e(()=>[a(v,{name:"list"},{default:e(()=>[t(m)?(r(),u(U,{key:0,ordens:t(m).data},{"custom-actions":e(({props:n})=>[a(g,{color:"primary",icon:"fas fa-file-signature",round:"",flat:"",size:"sm",loading:t(O)&&d.value===Number(n.key),onClick:L=>x(Number(n.key))},{default:e(()=>[a(y,null,{default:e(()=>[k("Editar resultados.")]),_:1})]),_:2},1032,["loading","onClick"]),n.row.estado===0?(r(),u(g,{key:0,color:"positive",icon:"fas fa-check-double",round:"",flat:"",size:"sm",loading:t(V)&&d.value===Number(n.key),onClick:L=>E(Number(n.key))},{default:e(()=>[a(y,null,{default:e(()=>[k("Confirmar registro.")]),_:1})]),_:2},1032,["loading","onClick"])):c("",!0)]),_:1},8,["ordens"])):c("",!0)]),_:1}),a(v,{name:"edit-examens"},{default:e(()=>[t(o)?(r(),u(p,{key:0,icon:"fas fa-file-signature",label:"Datos de la orden."},{default:e(()=>[a(b,{class:"my-card"},{default:e(()=>[a(C,null,{default:e(()=>[a(j,{orden:t(o)},null,8,["orden"])]),_:1})]),_:1})]),_:1})):c("",!0),t(o)?(r(),u(p,{key:1,icon:"fas fa-vials",label:"Registrar resultados.",caption:"Editar / Crear","default-opened":""},{default:e(()=>[a(b,{class:"my-card"},{default:e(()=>[a(C,null,{default:e(()=>[a(G,{orden:t(o),onCancel:_,onSubmit:_},null,8,["orden"])]),_:1})]),_:1})]),_:1})):c("",!0)]),_:1})]),_:1},8,["modelValue"])])]))}});export{Z as default};
