import{aH as c,aI as n}from"./index.d3351ac8.js";import{U as u}from"./UnidadApi.53af3e20.js";function f(){const e=async()=>(await u.fetchAllOperadores()).data().data,{data:r,isLoading:a,isSuccess:s,isError:t,isFetching:o,refetch:i}=c([n.UNIDAD_ALL,"operadores"],e);return{data:r,isLoading:a,isSuccess:s,isError:t,isFetching:o,refetch:i}}export{f as u};