import{aE as o,aF as u}from"./index.aead979f.js";import{P as i}from"./PaqueteApi.84f21d74.js";class h{static async run(){try{return(await i.fetchAll()).data().data}catch(e){throw e}}}function y(){const t=async()=>await h.run(),{data:e,isLoading:a,isSuccess:s,isError:r,isFetching:c,refetch:n}=o([u.PAQUETE_ALL],t);return{data:e,isLoading:a,isSuccess:s,isError:r,isFetching:c,refetch:n}}export{y as u};