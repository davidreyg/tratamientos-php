import{aG as r,aH as l}from"./index.ddaffeba.js";import{E}from"./EstablecimientoApi.0ae636f8.js";function u(t){const a=async()=>(await E.fetchAll(t==null?void 0:t.value)).data().data,{data:s,isLoading:e,isSuccess:i,isError:c,isFetching:o,refetch:n}=r([l.ESTABLECIMIENTO_ALL],a);return{data:s,isLoading:e,isSuccess:i,isError:c,isFetching:o,refetch:n}}export{u};