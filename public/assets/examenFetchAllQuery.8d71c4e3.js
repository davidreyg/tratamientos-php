import{aE as o,aF as u}from"./index.a85a2474.js";import{E}from"./ExamenApi.b9b2180d.js";function h(a){const t=async()=>(await E.fetchAll(a==null?void 0:a.value)).data().data,{data:s,isLoading:e,isSuccess:r,isError:c,isFetching:i,refetch:n}=o([u.EXAMEN_ALL],t);return{data:s,isLoading:e,isSuccess:r,isError:c,isFetching:i,refetch:n}}export{h as u};
