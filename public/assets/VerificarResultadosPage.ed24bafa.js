import{W as $,Y as F,ba as A,r as u,bb as P,H as q,o as r,ak as C,aj as z,a5 as a,w as e,am as k,a2 as n,e as l,ac as b,aY as g,f as p,au as d,ae as h,a6 as w,bi as B,al as D,aG as f,ag as M}from"./index.822d49dc.js";import{_ as U,a as Y}from"./RegistrarResultadosForm.661b4916.js";import{u as j,_ as G}from"./OrdenTable.6d5a6fc0.js";import{O as H}from"./OrdenApi.5298003c.js";import{u as O}from"./laboratorio.store.732864b1.js";import"./operadoresFetchAllQuery.73970322.js";import"./UnidadApi.7d2c2a45.js";import"./BaseCheckBox.8dbddfe1.js";import"./BaseTable.b0153d26.js";function J(){return $(m=>H.verificar(m))}const W={class:"row q-col-gutter-md"},K={class:"col-12"},X={key:2},le=F({__name:"VerificarResultadosPage",setup(m){const{$reset:V,fetchOrdenById:x}=O(),{ordenSeleccionada:s,isOrdenLoading:N}=A(O()),E=u({search:"estado:1",searchJoin:"and",limit:0}),c=u(),{data:_,refetch:I}=j(E),i=u("list"),L=async o=>{c.value=o,await x(o),s.value&&(i.value="edit-examens")},{mutateAsync:Q,isLoading:S}=J(),T=async o=>{c.value=o,f.fire({title:"\xBFEst\xE1 seguro de culminar la VERIFICACION?",text:"No podra deshacer los cambios!",icon:"warning",showCancelButton:!0,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:"Si",cancelButtonText:"No",showLoaderOnConfirm:!0,preConfirm:async()=>{await Q(o,{onSuccess:async()=>{M.success("La orden se VERIFICO correctamente."),I.value(),i.value="list"},onError:()=>{f.hideLoading()}})},allowOutsideClick:()=>!f.isLoading()})},v=()=>{s.value=void 0};return P(()=>{V()}),q(()=>s.value,o=>{o||(i.value="list")}),(o,y)=>(r(),C("div",W,[z("div",K,[a(D,{modelValue:i.value,"onUpdate:modelValue":y[0]||(y[0]=t=>i.value=t),animated:""},{default:e(()=>[a(k,{name:"list"},{default:e(()=>[n(_)?(r(),l(G,{key:0,ordens:n(_).data},{"custom-actions":e(({props:t})=>[t.row.estado!==2?(r(),l(b,{key:0,color:"primary",icon:"fas fa-file-signature",round:"",flat:"",size:"sm",loading:n(N)&&c.value===Number(t.key),onClick:R=>L(Number(t.key))},{default:e(()=>[a(g,null,{default:e(()=>[p("Editar resultados.")]),_:1})]),_:2},1032,["loading","onClick"])):d("",!0),t.row.estado===1?(r(),l(b,{key:1,color:"positive",icon:"fas fa-thumbs-up",round:"",flat:"",size:"sm",loading:n(S)&&c.value===Number(t.key),onClick:R=>T(Number(t.key))},{default:e(()=>[a(g,null,{default:e(()=>[p("Verificar orden.")]),_:1})]),_:2},1032,["loading","onClick"])):(r(),C("div",X))]),_:1},8,["ordens"])):d("",!0)]),_:1}),a(k,{name:"edit-examens"},{default:e(()=>[n(s)?(r(),l(B,{key:0,icon:"fas fa-file-signature",label:"Datos de la orden."},{default:e(()=>[a(h,{class:"my-card"},{default:e(()=>[a(w,null,{default:e(()=>[a(U,{orden:n(s)},null,8,["orden"])]),_:1})]),_:1})]),_:1})):d("",!0),n(s)?(r(),l(B,{key:1,icon:"fas fa-vials",label:"Registrar resultados.",caption:"Editar / Crear","default-opened":""},{default:e(()=>[a(h,{class:"my-card"},{default:e(()=>[a(w,null,{default:e(()=>[a(Y,{orden:n(s),"with-observaciones":"",onCancel:v,onSubmit:v},null,8,["orden"])]),_:1})]),_:1})]),_:1})):d("",!0)]),_:1})]),_:1},8,["modelValue"])])]))}});export{le as default};
