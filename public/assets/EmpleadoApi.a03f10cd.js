var c=Object.defineProperty;var p=(i,t,e)=>t in i?c(i,t,{enumerable:!0,configurable:!0,writable:!0,value:e}):i[t]=e;var s=(i,t,e)=>(p(i,typeof t!="symbol"?t+"":t,e),e);import{s as d}from"./index.10e45f7e.js";const a=class{static fetchAll(t){return a._api.get(`${a._endpoint}`,t)}static async create(t){await a._api.post(`${a._endpoint}`,t)}static async update(t,e){await a._api.patch(`${a._endpoint}/${e}`,t)}static async delete(t){await a._api.delete(`${a._endpoint}/${t}`)}static async fetchById(t){return await a._api.get(`${a._endpoint}/${t}`)}};let n=a;s(n,"_api",d),s(n,"_endpoint","/empleados");export{n as E};
