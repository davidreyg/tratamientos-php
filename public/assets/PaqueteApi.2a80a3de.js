var c=Object.defineProperty;var p=(i,t,n)=>t in i?c(i,t,{enumerable:!0,configurable:!0,writable:!0,value:n}):i[t]=n;var s=(i,t,n)=>(p(i,typeof t!="symbol"?t+"":t,n),n);import{a as r}from"./index.56bc56d2.js";const a=class{static async fetchAll(){return await a._api.get(a._endpoint)}static async fetchOne(t){return await a._api.get(`${a._endpoint}/${t}`)}static async create(t){return await a._api.post(a._endpoint,t)}static async destroy(t){return await a._api.delete(`${a._endpoint}/${t}`)}static async update(t,n){return await a._api.patch(`${a._endpoint}/${n}`,t)}};let e=a;s(e,"_api",r),s(e,"_endpoint","/paquetes");export{e as P};