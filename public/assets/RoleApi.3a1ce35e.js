var r=Object.defineProperty;var c=(s,t,i)=>t in s?r(s,t,{enumerable:!0,configurable:!0,writable:!0,value:i}):s[t]=i;var e=(s,t,i)=>(c(s,typeof t!="symbol"?t+"":t,i),i);import{s as p}from"./index.8e1e529b.js";const a=class{static async fetchAll(t){return await a._api.get(a._endpoint,t)}static async store(t){return await a._api.post(a._endpoint,t)}static async destroy(t){return await a._api.delete(`${a._endpoint}/${t}`)}};let n=a;e(n,"_api",p),e(n,"_endpoint","/roles");export{n as R};
