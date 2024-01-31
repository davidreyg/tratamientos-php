import{_ as A}from"./EmptyList.77f6c389.js";import{_ as F}from"./BasePage.2a141dec.js";import{h as P,m as u,D as S,K as $,q as f,A as a,B as t,a5 as w,am as g,O as m,al as b,b7 as q,H as I,b9 as k,E as y,C as c,ak as x,ap as L,b8 as O,aq as E,aW as N,u as l,bx as C,F as T,ar as G}from"./index.8e1e529b.js";import{Q,_ as V}from"./BaseTable.01e650dc.js";import{u as M}from"./useLuxonFormat.a1fe62c3.js";import{u as j,a as R}from"./index.1c9af67c.js";import{P as D}from"./PeriodApi.1278f97e.js";import{Q as H}from"./QueryTypes.b72dec59.js";import"./QPage.29776a48.js";import"./QSelect.0d489ee9.js";import"./QField.57308312.js";import"./rtl.b51694b1.js";import"./datetime.b26a663f.js";class K{static async run(o){try{await D.destroyPeriod(o)}catch(i){throw i}}}class U{static async run(){try{return(await D.fetchAllPeriods()).data().data}catch(o){throw o}}}function W(){return j(n=>K.run(n))}function Y(){const n=async()=>await U.run(),{data:o,isLoading:i,isSuccess:r,isError:_,isFetching:v,refetch:p}=R([H.PERIODS_ALL],n);return{arrPeriods:o,isLoading:i,isSuccess:r,isError:_,isFetching:v,refetch:p}}const B=P({__name:"PeriodsTableActions",props:{id:{type:String,required:!0}},emits:["destroy","edit","groups"],setup(n){return(o,i)=>(u(),S(I,null,[$((u(),f(b,{clickable:"",onClick:i[0]||(i[0]=r=>o.$emit("edit",n.id))},{default:a(()=>[t(g,{avatar:""},{default:a(()=>[t(w,{name:"fas fa-pen-to-square"})]),_:1}),t(g,null,{default:a(()=>[m("Editar")]),_:1})]),_:1})),[[k]]),t(q),$((u(),f(b,{clickable:"",onClick:i[1]||(i[1]=r=>o.$emit("destroy",n.id))},{default:a(()=>[t(g,{avatar:""},{default:a(()=>[t(w,{name:"fas fa-trash-can"})]),_:1}),t(g,null,{default:a(()=>[m("Eliminar")]),_:1})]),_:1})),[[k]]),$((u(),f(b,{clickable:"",onClick:i[2]||(i[2]=r=>o.$emit("groups",n.id))},{default:a(()=>[t(g,{avatar:""},{default:a(()=>[t(w,{name:"fas fa-people-roof"})]),_:1}),t(g,null,{default:a(()=>[m("Gestionar goles")]),_:1})]),_:1})),[[k]])],64))}}),z={class:"q-pa-xs col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-style-transition"},J={class:"text-h6 text-bold"},X={class:"text-subtitle2"},Z={class:"q-mt-md"},ee={class:"col-12 text-left text-subtitle1"},te={class:"col-12 text-left text-subtitle1"},ae=P({__name:"PeriodsTable",props:{loading:{type:Boolean,required:!1,default:!1},data:{type:Array,required:!0}},emits:["destroyOne","edit","groups"],setup(n,{emit:o}){const i=o,{formatDate:r}=M(),_=[{name:"name",align:"left",label:"Nombre",field:"name"},{name:"description",align:"center",label:"Descripci\xF3n",field:"description"},{name:"start_at",align:"center",label:"Fecha Inicio",field:"start_at",format:s=>r(s)},{name:"end_at",align:"center",label:"Fecha Fin",field:"end_at",format:s=>r(s)},{name:"is_active",align:"center",label:"Estado",field:"is_active"},{name:"actions",align:"center",label:"",field:"actions"}],{mutateAsync:v}=W(),p=s=>{C.fire({title:"\xBFEst\xE1 seguro de eliminar este registro?",text:"No podra rehacer los cambios!",icon:"warning",showCancelButton:!0,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:"Si",cancelButtonText:"No",showLoaderOnConfirm:!0,preConfirm:async()=>{await v(s,{onSuccess:async()=>{i("destroyOne",s)},onError:()=>{C.hideLoading()}})},allowOutsideClick:()=>!C.isLoading()})};return(s,d)=>(u(),f(V,{grid:"",columns:_,data:n.data,loading:n.loading,"row-key":"id"},{cell_is_active:a(({props:e})=>[t(Q,{color:e.value?"positive":"negative",rounded:"",class:"q-mr-sm"},null,8,["color"]),m(y(e.value?"Activo":"Inactivo"),1)]),actions:a(({key:e})=>[t(B,{id:e,onEdit:h=>s.$emit("edit",e),onDestroy:h=>p(e),onGroups:h=>s.$emit("groups",e)},null,8,["id","onEdit","onDestroy","onGroups"])]),item:a(({props:e})=>[c("div",z,[t(E,{class:"shadow-12"},{default:a(()=>[t(x,null,{default:a(()=>[c("div",J,y(e.row.name),1),c("div",X,y(e.row.description||"-"),1),c("div",Z,[t(Q,{color:e.row.is_active?"positive":"negative",rounded:"",class:"q-mr-sm"},null,8,["color"]),m(y(e.row.is_active?"Activo":"Inactivo"),1)]),t(L,{round:"",flat:"",color:"primary",icon:"fas fa-ellipsis",class:"absolute",style:{top:"0",right:"12px",transform:"translateY(15%)"}},{default:a(()=>[t(O,{self:"top start",fit:"","transition-show":"flip-right","transition-hide":"jump-up"},{default:a(()=>[t(E,{class:"my-card",flat:""},{default:a(()=>[t(N,{style:{"min-width":"100px"},dense:""},{default:a(()=>[t(B,{id:e.key,onEdit:h=>s.$emit("edit",e.key),onDestroy:h=>p(e.key),onGroups:h=>s.$emit("groups",e.key)},null,8,["id","onEdit","onDestroy","onGroups"])]),_:2},1024)]),_:2},1024)]),_:2},1024)]),_:2},1024)]),_:2},1024),t(x,{class:""},{default:a(()=>[c("div",ee,[m(" Inicio: "),c("span",null,y(l(r)(e.row.start_at)),1)]),c("div",te,[m(" Fin: "),c("span",null,y(l(r)(e.row.end_at)),1)])]),_:2},1024)]),_:2},1024)])]),_:1},8,["data","loading"]))}}),ye=P({__name:"PeriodIndex",setup(n){const{arrPeriods:o,isFetching:i,isSuccess:r,isLoading:_,refetch:v}=Y(),p=()=>{G.success("Registro eliminado correctamente."),v.value()};return(s,d)=>(u(),f(F,{title:"Periodos",loading:l(_),"with-add":"",onAdd:d[3]||(d[3]=e=>s.$router.push({name:"periods.create"}))},{content:a(()=>[l(r)&&l(o)&&l(o).length>0?(u(),f(ae,{key:0,data:l(o),loading:l(i),onEdit:d[0]||(d[0]=e=>s.$router.push({name:"periods.edit",params:{id:e}})),onGroups:d[1]||(d[1]=e=>s.$router.push({name:"periods.gols",params:{id:e}})),onDestroyOne:p},null,8,["data","loading"])):l(r)&&!l(i)&&l(o)&&l(o).length===0?(u(),f(A,{key:1,class:"row justify-center",onAdd:d[2]||(d[2]=e=>s.$router.push({name:"periods.create"}))})):T("",!0)]),_:1},8,["loading"]))}});export{ye as default};
