var p=Object.defineProperty;var o=(i,t,e)=>t in i?p(i,t,{enumerable:!0,configurable:!0,writable:!0,value:e}):i[t]=e;var s=(i,t,e)=>(o(i,typeof t!="symbol"?t+"":t,e),e);import{a as c}from"./index.d3351ac8.js";const a=class{static fetchAll(t){return a._api.get(`${a._endpoint}`,t)}static fetchById(t){return a._api.get(`${a._endpoint}/${t}`)}static fetchResultadosPDF(t){return a._api.withOptions({responseType:"blob"}).get(`${a._endpoint}/${t}/resultados-pdf`)}static fetchOrdenPDF(t){return a._api.withOptions({responseType:"blob"}).get(`${a._endpoint}/${t}/orden-pdf`)}static async create(t){await a._api.post(a._endpoint,t)}static async updateExamens(t,e){await a._api.patch(`${a._endpoint}/${t}/examens`,e)}static async update(t,e){await a._api.patch(`${a._endpoint}/${t}`,e)}static async destroy(t){await a._api.delete(`${a._endpoint}/${t}`)}static async registrar(t){await a._api.patch(`${a._endpoint}/${t}/registrar`)}static async verificar(t){await a._api.patch(`${a._endpoint}/${t}/verificar`)}static async getConteoExamens(t){return await a._api.get("reportes/conteo-examens",t)}static async exportConteoExamens(){return await a._api.withOptions({responseType:"blob"}).post("excel/conteo-examens")}};let n=a;s(n,"_api",c),s(n,"_endpoint","/ordens");export{n as O};
