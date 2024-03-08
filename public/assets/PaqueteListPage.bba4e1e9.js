import{W as q,Y as g,o as s,ak as C,x as y,e as d,w as i,a5 as n,Q as v,a8 as l,f as w,a7 as _,aP as $,aZ as B,aH as b,aG as f,a2 as P,ag as E}from"./index.5981ee4f.js";import{P as k}from"./PaqueteApi.88b634d4.js";import{_ as x}from"./BaseTable.ee8281dd.js";import{u as D}from"./paqueteFetchAllQuery.4fa931e6.js";class O{static async run(a){try{await k.destroy(a)}catch(t){throw t}}}function N(){return q(e=>O.run(e))}const Q=g({__name:"PaqueteTableActions",props:{id:{type:String,required:!0}},emits:["destroy","edit"],setup(e){return(a,t)=>(s(),C(B,null,[y((s(),d(_,{clickable:"",onClick:t[0]||(t[0]=r=>a.$emit("edit",e.id))},{default:i(()=>[n(l,{avatar:""},{default:i(()=>[n(v,{name:"fas fa-pen-to-square",color:"warning"})]),_:1}),n(l,null,{default:i(()=>[w("Editar")]),_:1})]),_:1})),[[b]]),n($),y((s(),d(_,{clickable:"",onClick:t[1]||(t[1]=r=>a.$emit("destroy",e.id))},{default:i(()=>[n(l,{avatar:""},{default:i(()=>[n(v,{name:"fas fa-trash-can",color:"negative"})]),_:1}),n(l,null,{default:i(()=>[w("Eliminar")]),_:1})]),_:1})),[[b]])],64))}}),S=g({__name:"PaqueteTable",props:{loading:{type:Boolean,required:!1,default:!1},data:{type:Array,required:!0},serverPagination:{type:Object,default:void 0}},emits:["destroyOne","edit"],setup(e,{emit:a}){const t=a,r=[{name:"nombre",align:"left",label:"Nombre",field:"nombre",sortable:!0},{name:"digitos",align:"center",label:"Digitos",field:"digitos"},{name:"actions",align:"right",label:"",field:"actions"}],{mutateAsync:u}=N(),c=o=>{f.fire({title:"\xBFEst\xE1 seguro de eliminar este registro?",text:"No podra deshacer los cambios!",icon:"warning",showCancelButton:!0,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:"Si",cancelButtonText:"No",showLoaderOnConfirm:!0,preConfirm:async()=>{await u(o,{onSuccess:async()=>{t("destroyOne",o)},onError:()=>{f.hideLoading()}})},allowOutsideClick:()=>!f.isLoading()})};return(o,p)=>(s(),d(x,{columns:r,data:e.data,loading:e.loading,"row-key":"id","server-pagination":e.serverPagination,"show-grid-toggle":!1},{actions:i(({key:m})=>[n(Q,{id:m,onEdit:h=>o.$emit("edit",m),onDestroy:h=>c(m)},null,8,["id","onEdit","onDestroy"])]),_:1},8,["data","loading","server-pagination"]))}}),I=g({__name:"PaqueteListPage",setup(e){const{data:a,isFetching:t,refetch:r}=D(),u=()=>{E.success("Registro eliminado correctamente."),r.value()};return(c,o)=>(s(),d(S,{data:P(a)||[],loading:P(t),onEdit:o[0]||(o[0]=p=>c.$router.push({name:"paquetes.edit",params:{id:p}})),onDestroyOne:u},null,8,["data","loading"]))}});export{I as default};
