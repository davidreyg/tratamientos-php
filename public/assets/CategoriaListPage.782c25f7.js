import{W as $,aD as B,aE as A,Y as g,o as d,ak as O,x as y,e as u,w as r,a5 as o,Q as C,a8 as c,f as _,a7 as h,aF as x,aG as Q,aH as v,aI as f,a2 as w,ag as k}from"./index.1c6b0b02.js";import{C as b}from"./CategoriaApi.16bcb5c1.js";import{_ as D}from"./BaseTable.ca2e7696.js";function L(){return $(e=>b.destroy(e))}function S(){const e=async()=>(await b.fetchAll()).data().data,{data:n,isLoading:a,isSuccess:i,isError:s,isFetching:l,refetch:t}=B([A.CATEGORIA_ALL],e);return{data:n,isLoading:a,isSuccess:i,isError:s,isFetching:l,refetch:t}}const T=g({__name:"CategoriaTableActions",props:{id:{type:String,required:!0}},emits:["destroy","edit"],setup(e){return(n,a)=>(d(),O(Q,null,[y((d(),u(h,{clickable:"",onClick:a[0]||(a[0]=i=>n.$emit("edit",e.id))},{default:r(()=>[o(c,{avatar:""},{default:r(()=>[o(C,{name:"fas fa-pen-to-square",color:"warning"})]),_:1}),o(c,null,{default:r(()=>[_("Editar")]),_:1})]),_:1})),[[v]]),o(x),y((d(),u(h,{clickable:"",onClick:a[1]||(a[1]=i=>n.$emit("destroy",e.id))},{default:r(()=>[o(c,{avatar:""},{default:r(()=>[o(C,{name:"fas fa-trash-can",color:"negative"})]),_:1}),o(c,null,{default:r(()=>[_("Eliminar")]),_:1})]),_:1})),[[v]])],64))}}),F=g({__name:"CategoriaTable",props:{loading:{type:Boolean,required:!1,default:!1},data:{type:Array,required:!0},serverPagination:{type:Object,default:void 0}},emits:["destroyOne","edit"],setup(e,{emit:n}){const a=n,i=[{name:"nombre",align:"left",label:"Nombre",field:"nombre",sortable:!0},{name:"actions",align:"right",label:"",field:"actions"}],{mutateAsync:s}=L(),l=t=>{f.fire({title:"\xBFEst\xE1 seguro de eliminar este registro?",text:"No podra deshacer los cambios!",icon:"warning",showCancelButton:!0,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:"Si",cancelButtonText:"No",showLoaderOnConfirm:!0,preConfirm:async()=>{await s(t,{onSuccess:async()=>{a("destroyOne",t)},onError:()=>{f.hideLoading()}})},allowOutsideClick:()=>!f.isLoading()})};return(t,p)=>(d(),u(D,{columns:i,data:e.data,loading:e.loading,"row-key":"id","server-pagination":e.serverPagination,"show-grid-toggle":!1},{actions:r(({key:m})=>[o(T,{id:m,onEdit:E=>t.$emit("edit",m),onDestroy:E=>l(m)},null,8,["id","onEdit","onDestroy"])]),_:1},8,["data","loading","server-pagination"]))}}),P=g({__name:"CategoriaListPage",setup(e){const{data:n,isFetching:a,refetch:i}=S(),s=()=>{k.success("Registro eliminado correctamente."),i.value()};return(l,t)=>(d(),u(F,{data:w(n)||[],loading:w(a),onEdit:t[0]||(t[0]=p=>l.$router.push({name:"categorias.edit",params:{id:p}})),onDestroyOne:s},null,8,["data","loading"]))}});export{P as default};
