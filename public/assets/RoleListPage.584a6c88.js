import{aE as p,a_ as _,d,u as o,h as n,j as c,v as t,G as f,ay as g,x as i,a4 as y,az as m,K as h,b3 as b,B as R,b0 as k}from"./index.80fb9679.js";import{_ as v}from"./BaseTable.7281b0a1.js";import{Q as L}from"./QueryTypes.707bd378.js";import{R as Q}from"./RoleApi.c274cfb1.js";import"./QTable.b828e675.js";import"./QSelect.6ee785ba.js";import"./rtl.b51694b1.js";class w{static async run(a){try{return(await Q.fetchAll(a)).data().data}catch(e){throw p.error("Hubo un error al traer los roles..."),e}}}function A(){const r=async()=>await w.run({include:"privileges"}),{data:a,isLoading:e,refetch:s,error:l}=_([L.ROLES_ALL],r);return{roles:a,isRolesLoading:e,rolesError:l,refetch:s}}const C=d({__name:"RolesTable",emits:["destroy","editPrivileges"],setup(r){const a=[{name:"name",align:"left",label:"Nombre",field:"name"},{name:"display_name",align:"center",label:"Nombre Display",field:"display_name"},{name:"actions",align:"center",label:"Acciones",field:"actions"}],{roles:e,isRolesLoading:s}=A();return(l,N)=>o(e)&&!o(s)?(n(),c(v,{key:0,columns:a,data:o(e),"row-key":"id","show-grid-toggle":!1,loading:o(s)},{actions:t(({key:u})=>[f((n(),c(g,{clickable:"",onClick:x=>l.$router.push({name:"roles.privilegios",params:{id:u}})},{default:t(()=>[i(m,{avatar:""},{default:t(()=>[i(y,{name:"fas fa-clipboard-list",color:"secondary"})]),_:1}),i(m,null,{default:t(()=>[h("Privilegios")]),_:1})]),_:2},1032,["onClick"])),[[k]]),i(b)]),_:1},8,["data","loading"])):R("",!0)}}),V=d({__name:"RoleListPage",setup(r){return(a,e)=>(n(),c(C))}});export{V as default};
