var l=Object.defineProperty;var d=(a,t,s)=>t in a?l(a,t,{enumerable:!0,configurable:!0,writable:!0,value:s}):a[t]=s;var r=(a,t,s)=>(d(a,typeof t!="symbol"?t+"":t,s),s);import{a as f,aE as h,aF as p}from"./index.2f4e1c46.js";const c=class{static fetchAll(t){return c._api.get(`${c._endpoint}`,t)}};let e=c;r(e,"_api",f),r(e,"_endpoint","/establecimientos");function g(){const a=async()=>(await e.fetchAll()).data().data,{data:t,isLoading:s,isSuccess:n,isError:i,isFetching:u,refetch:o}=h([p.ESTABLECIMIENTO_ALL],a);return{data:t,isLoading:s,isSuccess:n,isError:i,isFetching:u,refetch:o}}export{g as u};
