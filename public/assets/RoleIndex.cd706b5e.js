import{_}from"./BasePage.21cf7fc1.js";import{_ as y}from"./BaseTable.e96286b1.js";import{ar as l,h as i,u as a,q as c,F as h,m as u,A as R,B as g}from"./index.7154a952.js";import{u as L,a as w}from"./index.171e870f.js";import{R as m}from"./RoleApi.c1adfa34.js";import{Q as A}from"./QueryTypes.b72dec59.js";import"./QPage.7980e1dc.js";import"./QSelect.ac7e71a8.js";import"./QField.527885b8.js";import"./rtl.b51694b1.js";class b{static async run(t){try{await m.destroy(t)}catch(e){throw e}}}class k{static async run(t){try{return(await m.fetchAll(t)).data().data}catch(e){throw l.error("Hubo un error al traer los roles..."),e}}}function x(){return L(o=>b.run(o))}function D(){const o=async()=>await k.run({include:"privileges"}),{data:t,isLoading:e,refetch:r,error:s}=w([A.ROLES_ALL],o);return{roles:t,isRolesLoading:e,rolesError:s,refetch:r}}const N=i({__name:"RolesTable",setup(o){const t=[{name:"name",align:"left",label:"Nombre",field:"name"},{name:"display_name",align:"center",label:"Nombre Display",field:"display_name"},{name:"actions",align:"center",label:"Acciones",field:"actions"}],{roles:e,isRolesLoading:r,refetch:s}=D(),{mutate:d,isLoading:p}=x(),f=n=>{d(n,{onSuccess:()=>{l.success("Exito!"),s.value()}})};return(n,$)=>a(e)&&!a(r)?(u(),c(y,{key:0,columns:t,data:a(e),"row-key":"id",loading:a(r)||a(p),onDestroyOne:f},null,8,["data","loading"])):h("",!0)}}),V=i({__name:"RoleIndex",setup(o){return(t,e)=>(u(),c(_,{title:"Gestion de Roles",loading:!1,"with-add":"",onAdd:e[0]||(e[0]=r=>t.$router.push({name:"roles.create"}))},{content:R(()=>[g(N)]),_:1}))}});export{V as default};