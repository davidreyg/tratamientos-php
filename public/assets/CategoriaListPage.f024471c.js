import{U as h,X as g,o as s,aj as B,v as C,d,w as n,a4 as a,Q as y,a7 as l,e as v,a6 as _,aC as E,aD as O,aE as b,aF as f,a1 as w,af as x}from"./index.0b61b42a.js";import{C as D}from"./CategoriaApi.d622634b.js";import{_ as k}from"./BaseTable.15a0ffee.js";import{u as N}from"./categoriaFetchAllQuery.8519a498.js";function Q(){return h(e=>D.destroy(e))}const S=g({__name:"CategoriaTableActions",props:{id:{type:String,required:!0}},emits:["destroy","edit"],setup(e){return(r,t)=>(s(),B(O,null,[C((s(),d(_,{clickable:"",onClick:t[0]||(t[0]=i=>r.$emit("edit",e.id))},{default:n(()=>[a(l,{avatar:""},{default:n(()=>[a(y,{name:"fas fa-pen-to-square",color:"warning"})]),_:1}),a(l,null,{default:n(()=>[v("Editar")]),_:1})]),_:1})),[[b]]),a(E),C((s(),d(_,{clickable:"",onClick:t[1]||(t[1]=i=>r.$emit("destroy",e.id))},{default:n(()=>[a(l,{avatar:""},{default:n(()=>[a(y,{name:"fas fa-trash-can",color:"negative"})]),_:1}),a(l,null,{default:n(()=>[v("Eliminar")]),_:1})]),_:1})),[[b]])],64))}}),A=g({__name:"CategoriaTable",props:{loading:{type:Boolean,required:!1,default:!1},data:{type:Array,required:!0},serverPagination:{type:Object,default:void 0}},emits:["destroyOne","edit"],setup(e,{emit:r}){const t=r,i=[{name:"nombre",align:"left",label:"Nombre",field:"nombre",sortable:!0},{name:"actions",align:"right",label:"",field:"actions"}],{mutateAsync:u}=Q(),c=o=>{f.fire({title:"\xBFEst\xE1 seguro de eliminar este registro?",text:"No podra deshacer los cambios!",icon:"warning",showCancelButton:!0,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:"Si",cancelButtonText:"No",showLoaderOnConfirm:!0,preConfirm:async()=>{await u(o,{onSuccess:async()=>{t("destroyOne",o)},onError:()=>{f.hideLoading()}})},allowOutsideClick:()=>!f.isLoading()})};return(o,p)=>(s(),d(k,{columns:i,data:e.data,loading:e.loading,"row-key":"id","server-pagination":e.serverPagination,"show-grid-toggle":!1},{actions:n(({key:m})=>[a(S,{id:m,onEdit:$=>o.$emit("edit",m),onDestroy:$=>c(m)},null,8,["id","onEdit","onDestroy"])]),_:1},8,["data","loading","server-pagination"]))}}),P=g({__name:"CategoriaListPage",setup(e){const{data:r,isFetching:t,refetch:i}=N(),u=()=>{x.success("Registro eliminado correctamente."),i.value()};return(c,o)=>(s(),d(A,{data:w(r)||[],loading:w(t),onEdit:o[0]||(o[0]=p=>c.$router.push({name:"categorias.edit",params:{id:p}})),onDestroyOne:u},null,8,["data","loading"]))}});export{P as default};
