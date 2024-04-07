import{aE as J,aF as X,W as Y,Y as M,r as E,k as z,$ as K,a0 as p,b0 as T,aU as A,a1 as Z,ag as ee,H as j,o as _,e as y,w as t,a5 as a,ad as g,aW as ae,aX as O,f as C,ac as F,aj as B,aS as te,a2 as n,au as N,aa as ie,b1 as se,b2 as oe,ak as ne,am as D,ae as le,a6 as re,b3 as ue,al as ce}from"./index.1470aaf9.js";import{u as de}from"./establecimientoFetchAllQuery.7c14b499.js";import{u as me,_ as fe}from"./ExamenCardList.1396456d.js";import{O as W}from"./OrdenApi.df0e7909.js";import{u as _e}from"./paqueteFetchAllQuery.4049becd.js";import{_ as be}from"./BaseCheckBoxGroup.c4476c53.js";import{u as ve,_ as pe}from"./OrdenTable.3abc6db4.js";import{u as G}from"./laboratorio.store.d629d27f.js";import"./PaqueteApi.af453ad1.js";import"./BaseTable.1600205b.js";function ge(h,q){const s=async()=>(await W.fetchById(h.value)).data().data,{data:l,isLoading:d,isSuccess:r,isError:u,isFetching:$,refetch:x}=J([X.ORDEN_ALL,h.value],s,{enabled:q});return{data:l,isLoading:d,isSuccess:r,isError:u,isFetching:$,refetch:x}}function ye(){return Y(({id:h,data:q})=>W.update(h,q))}const he={class:"col-12"},qe={class:"col-12"},xe={class:"col-12 row q-col-gutter-sm"},Ee=M({__name:"OrdenEditForm",props:{orden:{type:Object,required:!0}},emits:["submit","cancel"],setup(h,{emit:q}){const s=h,l=q,d=E({limit:0,search:"is_active:1",searchJoin:"and"}),{data:r}=me(d),{data:u}=_e(),$=z(()=>u.value?u.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),{data:x}=de(),Q=z(()=>x.value?x.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),S=K().shape({diagnostico:p().trim().min(2).required().label("Diagnostico"),CI10:p().trim().min(2).required().label("CI10"),CPN:p().trim().min(2).required().label("CPN"),EG:p().trim().min(2).required().label("EG"),codigo_atencion:p().trim().min(2).required().label("Codigo de Atencion"),fecha_registro:p().trim().required().label("Fecha de Registro"),medico:p().trim().required().label("M\xE9dico"),examen_ids:T().of(A().required()).required().label("Examenes"),item_ids:T().of(A().required()).required().label("Items"),paquete_ids:T().of(A().required()).required().label("Paquetes"),establecimiento_id:A().when([],{is:()=>v.value===!0,then:e=>e.required(),otherwise:e=>e.nullable()}).label("Establecimiento Institucional"),establecimiento_otro:p().when([],{is:()=>v.value===!1,then:e=>e.required(),otherwise:e=>e.nullable()}).label("Otro Establecimiento")}),{values:P,setFieldValue:b,handleSubmit:V}=Z({validationSchema:S,initialValues:{...s.orden,paquete_ids:[]}}),v=E(!!s.orden.establecimiento_id),{mutateAsync:L,reset:o,isLoading:I}=ye(),m=V(async(e,{setErrors:i,resetForm:c})=>{await L({id:s.orden.id,data:e},{onSuccess:()=>{ee.success("Orden Actualizada correctamente."),c(),l("submit")},onError:f=>{o.value(),i(f.data.errors)}})},e=>{console.log(e)});j(()=>P.examen_ids,e=>{var i;if(e){const c=(i=u.value)==null?void 0:i.filter(k=>k.examen_ids.every(w=>e.includes(w)));b("paquete_ids",(c==null?void 0:c.map(k=>Number(k.id)))||[]);let f=[];r.value&&(f=[],e.forEach(k=>{const w=r.value.find(R=>Number(R.id)===k);if(w&&w.items.data.length>0){const R=w.items.data.map(H=>Number(H.id));f.push(...R)}}),b("item_ids",[...new Set(f)]),console.log(P.item_ids))}});const U=e=>{var i;if(e){const c=(i=u.value)==null?void 0:i.filter(f=>e.includes(Number(f.id))).map(f=>f.examen_ids).flat();b("examen_ids",[...new Set(c)])}};return(e,i)=>(_(),y(ie,{loading:n(I),onSubmit:n(m),onCancel:i[2]||(i[2]=c=>e.$emit("cancel"))},{default:t(()=>[a(g,{name:"medico",label:"Medico",class:"col-xs-12 col-sm-6",required:""}),v.value?(_(),y(ae,{key:0,options:Q.value,name:"establecimiento_id",class:"col-xs-12 col-sm-6",label:"Establecimiento Institucional",loading:!1,required:""},{after:t(()=>[a(F,{round:"",flat:"",icon:"fas fa-building-circle-arrow-right",color:"primary",onClick:i[0]||(i[0]=c=>v.value=!1)},{default:t(()=>[a(O,null,{default:t(()=>[C(" Otro establecimiento ")]),_:1})]),_:1})]),_:1},8,["options"])):(_(),y(g,{key:1,name:"establecimiento_otro",label:"Otro establecimiento",class:"col-xs-12 col-sm-6",required:""},{after:t(()=>[a(F,{round:"",flat:"",icon:"fas fa-building-circle-xmark",color:"negative",onClick:i[1]||(i[1]=c=>v.value=!0)},{default:t(()=>[a(O,null,{default:t(()=>[C(" Establecimiento institucional")]),_:1})]),_:1})]),_:1})),a(g,{name:"diagnostico",label:"Diagnostico",class:"col-xs-12 col-sm-4",required:""}),a(g,{name:"CI10",label:"CI10",class:"col-xs-12 col-sm-4",required:""}),a(g,{name:"CPN",label:"CPN",class:"col-xs-12 col-sm-4",required:""}),a(g,{name:"EG",label:"EG",class:"col-xs-12 col-sm-4",required:""}),a(g,{name:"codigo_atencion",label:"Codigo de Atenci\xF3n",class:"col-xs-12 col-sm-4",required:""}),a(g,{name:"fecha_registro",label:"Fecha de Registro",class:"col-xs-12 col-sm-4",type:"date",required:""}),B("div",he,[a(te,{spaced:""}),C(" Paquetes")]),B("div",qe,[a(be,{name:"paquete_ids",label:"Paquetes",options:$.value,onUpdate:U},null,8,["options"])]),B("div",xe,[n(r)?(_(),y(fe,{key:0,examens:n(r)},null,8,["examens"])):N("",!0)])]),_:1},8,["loading","onSubmit"]))}}),Ce={class:"row q-col-gutter-md"},$e={class:"col-12"},Be=M({__name:"OrdenListPage",setup(h){const{$reset:q}=G(),{ordenSeleccionada:s}=se(G()),l=E({}),d=E(0),r=E(""),{data:u,isFetching:$,refetch:x}=ve(l),{data:Q,isFetching:S,refetch:P}=ge(d,!!d.value),b=E("list"),V=o=>{l.value.page=o.pagination.page,l.value.limit=o.pagination.rowsPerPage,l.value.search=o.filter,l.value.orderBy=o.pagination.sortBy,l.value.sortedBy=o.pagination.descending?"desc":"asc"},v=async()=>{s.value=void 0,await x.value()},L=async o=>{s.value=void 0,d.value=o,r.value="edit",await P.value(),Q.value&&(s.value=Q.value,b.value="edit-orden")};return oe(()=>{q()}),j(()=>s.value,o=>{o||(b.value="list")}),(o,I)=>(_(),ne("div",Ce,[B("div",$e,[a(ce,{modelValue:b.value,"onUpdate:modelValue":I[0]||(I[0]=m=>b.value=m),animated:""},{default:t(()=>[a(D,{name:"list"},{default:t(()=>[n(u)?(_(),y(pe,{key:0,ordens:n(u).data,"server-pagination":n(u).meta.pagination,loading:n($),onRequest:V},{"custom-actions":t(({props:m})=>[m.row.estado===0?(_(),y(F,{key:0,color:"warning",icon:"fas fa-edit",round:"",flat:"",size:"sm",loading:r.value==="edit"&&n(S)&&d.value===Number(m.key),onClick:U=>L(Number(m.key))},{default:t(()=>[a(O,null,{default:t(()=>[C("Editar Orden.")]),_:1})]),_:2},1032,["loading","onClick"])):N("",!0),a(F,{color:"primary",icon:"fas fa-eye",round:"",flat:"",size:"sm",loading:r.value==="view"&&n(S)&&d.value===Number(m.key)},{default:t(()=>[a(O,null,{default:t(()=>[C("Visualizar Orden.")]),_:1})]),_:2},1032,["loading"]),m.row.estado===2?(_(),y(F,{key:1,color:"info",icon:"fas fa-print",round:"",flat:"",size:"sm"},{default:t(()=>[a(O,null,{default:t(()=>[C("Imprimir.")]),_:1})]),_:1})):N("",!0)]),_:1},8,["ordens","server-pagination","loading"])):N("",!0)]),_:1}),a(D,{name:"edit-orden"},{default:t(()=>[n(s)?(_(),y(ue,{key:0,icon:"fas fa-file-signature",label:"Datos de la orden."},{default:t(()=>[a(le,{class:"my-card"},{default:t(()=>[a(re,null,{default:t(()=>[a(Ee,{orden:n(s),onSubmit:v,onCancel:v},null,8,["orden"])]),_:1})]),_:1})]),_:1})):N("",!0)]),_:1})]),_:1},8,["modelValue"])])]))}});export{Be as default};