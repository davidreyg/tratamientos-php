import{U as $,X as g,o as s,aj as h,v as y,d as c,w as o,a4 as a,Q as v,a7 as l,e as _,a6 as S,aC as B,aD as E,aE as b,aF as f,a1 as w,af as O}from"./index.ddaffeba.js";import{S as x}from"./SeccionApi.fb2c47e8.js";import{_ as D}from"./BaseTable.fcb0392f.js";import{u as k}from"./seccionFetchAllQuery.54902bf1.js";function N(){return $(e=>x.destroy(e))}const Q=g({__name:"SeccionTableActions",props:{id:{type:String,required:!0}},emits:["destroy","edit"],setup(e){return(i,t)=>(s(),h(E,null,[y((s(),c(S,{clickable:"",onClick:t[0]||(t[0]=r=>i.$emit("edit",e.id))},{default:o(()=>[a(l,{avatar:""},{default:o(()=>[a(v,{name:"fas fa-pen-to-square",color:"warning"})]),_:1}),a(l,null,{default:o(()=>[_("Editar")]),_:1})]),_:1})),[[b]]),a(B),y((s(),c(S,{clickable:"",onClick:t[1]||(t[1]=r=>i.$emit("destroy",e.id))},{default:o(()=>[a(l,{avatar:""},{default:o(()=>[a(v,{name:"fas fa-trash-can",color:"negative"})]),_:1}),a(l,null,{default:o(()=>[_("Eliminar")]),_:1})]),_:1})),[[b]])],64))}}),A=g({__name:"SeccionTable",props:{loading:{type:Boolean,required:!1,default:!1},data:{type:Array,required:!0},serverPagination:{type:Object,default:void 0}},emits:["destroyOne","edit"],setup(e,{emit:i}){const t=i,r=[{name:"nombre",align:"left",label:"Nombre",field:"nombre",sortable:!0},{name:"actions",align:"right",label:"",field:"actions"}],{mutateAsync:d}=N(),u=n=>{f.fire({title:"\xBFEst\xE1 seguro de eliminar este registro?",text:"No podra deshacer los cambios!",icon:"warning",showCancelButton:!0,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:"Si",cancelButtonText:"No",showLoaderOnConfirm:!0,preConfirm:async()=>{await d(n,{onSuccess:async()=>{t("destroyOne",n)},onError:()=>{f.hideLoading()}})},allowOutsideClick:()=>!f.isLoading()})};return(n,p)=>(s(),c(D,{columns:r,data:e.data,loading:e.loading,"row-key":"id","server-pagination":e.serverPagination,"show-grid-toggle":!1},{actions:o(({key:m})=>[a(Q,{id:m,onEdit:C=>n.$emit("edit",m),onDestroy:C=>u(m)},null,8,["id","onEdit","onDestroy"])]),_:1},8,["data","loading","server-pagination"]))}}),P=g({__name:"SeccionListPage",setup(e){const{data:i,isFetching:t,refetch:r}=k(),d=()=>{O.success("Registro eliminado correctamente."),r.value()};return(u,n)=>(s(),c(A,{data:w(i)||[],loading:w(t),onEdit:n[0]||(n[0]=p=>u.$router.push({name:"seccions.edit",params:{id:p}})),onDestroyOne:d},null,8,["data","loading"]))}});export{P as default};