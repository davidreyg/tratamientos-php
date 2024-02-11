var g=Object.defineProperty;var y=(t,e,a)=>e in t?g(t,e,{enumerable:!0,configurable:!0,writable:!0,value:a}):t[e]=a;var d=(t,e,a)=>(y(t,typeof e!="symbol"?e+"":e,a),a);import{a as h,ar as w,aH as v,aI as b,a8 as _,ad as i,o as p,e as u,w as n,l as L,ai as k,ag as l,v as $,aj as m,f as C,aJ as Q,aE as N,aL as R}from"./index.92769849.js";import{_ as P}from"./BaseTable.f31784e8.js";const s=class{static async fetchAll(e){return await s._api.get(s._endpoint,e)}static async fetchRolePrivilegios(e){return await s._api.get(`${s._endpoint}/${e}/privilegios`)}static async store(e){return await s._api.post(s._endpoint,e)}static async destroy(e){return await s._api.delete(`${s._endpoint}/${e}`)}};let r=s;d(r,"_api",h),d(r,"_endpoint","/roles");class x{static async run(e){try{return(await r.fetchAll(e)).data().data}catch(a){throw w.error("Hubo un error al traer los roles..."),a}}}function I(){const t=async()=>await x.run({include:"privileges"}),{data:e,isLoading:a,refetch:o,error:c}=v([b.ROLES_ALL],t);return{roles:e,isRolesLoading:a,rolesError:c,refetch:o}}const T=_({__name:"RolesTable",emits:["destroy","editPrivileges"],setup(t){const e=[{name:"name",align:"left",label:"Nombre",field:"name"},{name:"display_name",align:"center",label:"Nombre Display",field:"display_name"},{name:"actions",align:"center",label:"Acciones",field:"actions"}],{roles:a,isRolesLoading:o}=I();return(c,A)=>i(a)&&!i(o)?(p(),u(P,{key:0,columns:e,data:i(a),"row-key":"id","show-grid-toggle":!1,loading:i(o)},{actions:n(({key:f})=>[L((p(),u(k,{clickable:"",onClick:E=>c.$router.push({name:"roles.privilegios",params:{id:f}})},{default:n(()=>[l(m,{avatar:""},{default:n(()=>[l($,{name:"fas fa-clipboard-list",color:"secondary"})]),_:1}),l(m,null,{default:n(()=>[C("Privilegios")]),_:1})]),_:2},1032,["onClick"])),[[R]]),l(Q)]),_:1},8,["data","loading"])):N("",!0)}}),D=_({__name:"RoleListPage",setup(t){return(e,a)=>(p(),u(T))}});export{D as default};
