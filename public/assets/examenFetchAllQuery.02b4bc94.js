var d=Object.defineProperty;var f=(a,t,s)=>t in a?d(a,t,{enumerable:!0,configurable:!0,writable:!0,value:s}):a[t]=s;var i=(a,t,s)=>(f(a,typeof t!="symbol"?t+"":t,s),s);import{a as h,aE as p,aF as g}from"./index.f707d301.js";const c=class{static async fetchAll(t){return await c._api.get(c._endpoint,t)}};let e=c;i(e,"_api",h),i(e,"_endpoint","/examens");function Q(a){const t=async()=>(await e.fetchAll(a==null?void 0:a.value)).data().data,{data:s,isLoading:n,isSuccess:r,isError:o,isFetching:l,refetch:u}=p([g.EXAMEN_ALL],t);return{data:s,isLoading:n,isSuccess:r,isError:o,isFetching:l,refetch:u}}export{Q as u};
