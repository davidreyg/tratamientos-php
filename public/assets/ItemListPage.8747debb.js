import{U as I,aG as $,aH as B,X as p,o as u,aj as O,v as y,d as f,w as r,a4 as o,Q as v,a7 as m,e as h,a6 as _,aC as Q,aD as T,aE as b,aF as g,r as x,a1 as w,af as A}from"./index.ddaffeba.js";import{I as C}from"./ItemApi.b2488c9f.js";import{_ as D}from"./BaseTable.fcb0392f.js";function L(){return I(e=>C.destroy(e))}function S(e){const a=async()=>(await C.fetchAll(e==null?void 0:e.value)).data().data,{data:t,isLoading:i,isSuccess:s,isError:l,isFetching:n,refetch:d}=$([B.ITEM_ALL],a);return{data:t,isLoading:i,isSuccess:s,isError:l,isFetching:n,refetch:d}}const k=p({__name:"ItemTableActions",props:{id:{type:String,required:!0}},emits:["destroy","edit"],setup(e){return(a,t)=>(u(),O(T,null,[y((u(),f(_,{clickable:"",onClick:t[0]||(t[0]=i=>a.$emit("edit",e.id))},{default:r(()=>[o(m,{avatar:""},{default:r(()=>[o(v,{name:"fas fa-pen-to-square",color:"warning"})]),_:1}),o(m,null,{default:r(()=>[h("Editar")]),_:1})]),_:1})),[[b]]),o(Q),y((u(),f(_,{clickable:"",onClick:t[1]||(t[1]=i=>a.$emit("destroy",e.id))},{default:r(()=>[o(m,{avatar:""},{default:r(()=>[o(v,{name:"fas fa-trash-can",color:"negative"})]),_:1}),o(m,null,{default:r(()=>[h("Eliminar")]),_:1})]),_:1})),[[b]])],64))}}),F=p({__name:"ItemTable",props:{loading:{type:Boolean,required:!1,default:!1},data:{type:Array,required:!0},serverPagination:{type:Object,default:void 0}},emits:["destroyOne","edit"],setup(e,{emit:a}){const t=a,i=[{name:"nombre",align:"left",label:"Nombre",field:"nombre",sortable:!0},{name:"tipo",align:"center",label:"Tipo",field:"tipo",sortable:!0},{name:"actions",align:"right",label:"",field:"actions"}],{mutateAsync:s}=L(),l=n=>{g.fire({title:"\xBFEst\xE1 seguro de eliminar este registro?",text:"No podra deshacer los cambios!",icon:"warning",showCancelButton:!0,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:"Si",cancelButtonText:"No",showLoaderOnConfirm:!0,preConfirm:async()=>{await s(n,{onSuccess:async()=>{t("destroyOne",n)},onError:()=>{g.hideLoading()}})},allowOutsideClick:()=>!g.isLoading()})};return(n,d)=>(u(),f(D,{columns:i,data:e.data,loading:e.loading,"row-key":"id","server-pagination":e.serverPagination,"show-grid-toggle":!1},{actions:r(({key:c})=>[o(k,{id:c,onEdit:E=>n.$emit("edit",c),onDestroy:E=>l(c)},null,8,["id","onEdit","onDestroy"])]),_:1},8,["data","loading","server-pagination"]))}}),j=p({__name:"ItemListPage",setup(e){const a=x({limit:0,searchJoin:"and"}),{data:t,isFetching:i,refetch:s}=S(a),l=()=>{A.success("Registro eliminado correctamente."),s.value()};return(n,d)=>(u(),f(F,{data:w(t)||[],loading:w(i),onEdit:d[0]||(d[0]=c=>n.$router.push({name:"items.edit",params:{id:c}})),onDestroyOne:l},null,8,["data","loading"]))}});export{j as default};