import{W as le,Y as G,o as b,e as f,w as y,a5 as d,ad as p,bh as ee,aj as k,k as T,a1 as ne,ag as re,H as L,ak as D,aK as H,a7 as V,a8 as P,aX as R,a2 as s,au as q,ab as z,aY as Y,f as J,at as K,ac as A,x as de,b9 as me,aQ as W,aG as X,aL as ue,bj as ce,r as B,b1 as O,bk as Z,$ as Q,a$ as be,bl as I,aV as $,a0 as w,b0 as F}from"./index.1c6b0b02.js";import{O as pe}from"./OrdenApi.2f1508d0.js";import{_ as _e}from"./BaseCheckBox.eb5bcf2c.js";function ve(){return le(({id:u,data:N})=>pe.updateExamens(u,N))}const fe=k("div",{class:"col-12 text-bold text-italic"},"Datos Generales:",-1),he=k("div",{class:"col-12 text-bold text-italic"}," Datos del Establecimiento de Origen: ",-1),ye=k("div",{class:"col-12 text-bold text-italic"},"Datos del Medico:",-1),qe=k("div",{class:"col-12 text-bold text-italic"},"Datos del paciente:",-1),Ie=G({__name:"OrdenDatosForm",props:{orden:{type:Object,required:!0}},setup(u){return(N,v)=>(b(),f(ee,{class:"row"},{default:y(()=>[fe,d(p,{name:"diagnostico",label:"Diagnostico",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:u.orden.diagnostico},null,8,["value"]),d(p,{name:"CI10",label:"CI10",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:u.orden.CI10},null,8,["value"]),d(p,{name:"CPN",label:"CPN",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:u.orden.CPN},null,8,["value"]),d(p,{name:"EG",label:"EG",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:u.orden.EG},null,8,["value"]),d(p,{name:"codigo_atencion",label:"Codigo de Atenci\xF3n",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:u.orden.codigo_atencion},null,8,["value"]),d(p,{name:"fecha_registro",label:"Fecha de Registro",class:"col-xs-12 col-sm-4",type:"date",required:"",readonly:"",borderless:"",outlined:!1,value:u.orden.fecha_registro},null,8,["value"]),he,d(p,{name:"establecimiento_tipo",class:"col-xs-12 col-sm-4",label:"Tipo de Establecimiento",required:"",readonly:"",borderless:"",outlined:!1,value:u.orden.establecimiento?"Jurisdiccion":"Externo"},null,8,["value"]),d(p,{name:"establecimiento_id",class:"col-xs-12 col-sm-8",label:"Establecimiento Origen",required:"",readonly:"",borderless:"",outlined:!1,value:u.orden.establecimiento?u.orden.establecimiento.data.nombre:u.orden.establecimiento_otro},null,8,["value"]),ye,d(p,{name:"medico",label:"Nombre",class:"col-xs-12 col-sm-6",required:"",readonly:"",borderless:"",outlined:!1,value:u.orden.medico},null,8,["value"]),qe,d(p,{name:"paciente",label:"Nombre",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:u.orden.paciente.data.nombre_completo},null,8,["value"]),d(p,{name:"documento",label:"N\xB0 de Documento",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:u.orden.paciente.data.numero_documento},null,8,["value"])]),_:1}))}}),ge={class:"row q-col-gutter-sm q-mb-sm"},$e={key:0,class:"col-4 row q-col-gutter-sm"},we={key:1,class:"col-4 row q-col-gutter-sm"},Ce={key:2,class:"col-4 row q-col-gutter-sm"},Ee={class:"row q-col-gutter-sm q-mb-sm"},ke={key:0,class:"row q-mt-md"},Ne={class:"row"},xe=G({__name:"ResultadoFormDinamico",props:{fields:{type:Array,required:!0},examens:{type:Array,required:!0},items:{type:Array,required:!0},ordenId:{type:Number,required:!0},initialValues:{type:Object,required:!1,default:void 0},validationSchema:{type:Object,required:!0},withObservaciones:{type:Boolean,required:!0}},emits:["submit","cancel"],setup(u,{emit:N}){const v=N,h=u,S=T(()=>h.examens?h.examens.map(t=>({label:t.nombre,value:Number(t.id)})):[]),M=T(()=>h.items.map(t=>({label:t.nombre,value:Number(t.id)}))),{handleSubmit:U,setFieldValue:_,values:a}=ne({validationSchema:h.validationSchema,initialValues:h.initialValues}),{mutateAsync:j,reset:l,isLoading:e}=ve(),r=U(async(t,{setErrors:o})=>{await j({id:h.ordenId,data:t},{onSuccess:()=>{re.success("Resultados actualizados correctamente"),v("submit"),l.value()},onError:c=>{l.value(),o(c.data.errors)}})},t=>console.log(t)),m=t=>{let o;return!!a.pivot[t].minimo&&!!a.pivot[t].minimo&&(o=`Min: ${a.pivot[t].minimo} - Max: ${a.pivot[t].maximo}`),o},x=t=>{let o;return!!a.pivot[t].minimo&&!!a.pivot[t].minimo&&(a.pivot[t].resultado>a.pivot[t].minimo&&a.pivot[t].resultado<a.pivot[t].maximo?o="green-2":o="red-2"),o},ae=t=>{let o;return!!a.item_orden[t].minimo&&!!a.item_orden[t].minimo&&(o=`Min: ${a.item_orden[t].minimo} - Max: ${a.item_orden[t].maximo}`),o},ie=t=>{let o;return!!a.item_orden[t].minimo&&!!a.item_orden[t].minimo&&(a.item_orden[t].resultado>a.item_orden[t].minimo&&a.item_orden[t].resultado<a.item_orden[t].maximo?o="green-2":o="red-2"),o},te=t=>{const o="pivot["+t+"].is_canceled",c=a.pivot[t].is_canceled;a.pivot[t].has_items&&a.pivot[t].items.forEach(n=>{const g="item_orden["+n.pivot_index+"].is_canceled";_(g,!c)}),_(o,!c)};return h.fields.forEach((t,o)=>{L(()=>a.pivot[o].unidad_id,c=>{if(c){const i=h.examens.find(n=>n.id==a.pivot[o].examen_id);if(!!i&&!!c){const n=i.pivot.find(E=>E.unidad_id===c),g="pivot["+o+"].minimo",C="pivot["+o+"].maximo";n&&(_(g,n.minimo),_(C,n.maximo))}}},{deep:!0,immediate:!0}),L(()=>a.pivot[o].is_canceled,c=>{const i="pivot["+o+"].minimo",n="pivot["+o+"].maximo";c&&(_(i,void 0),_(n,void 0)),a.pivot[o].items.forEach(C=>{const E="item_orden["+C.pivot_index+"].is_canceled";_(E,c)})},{deep:!0,immediate:!0}),L(()=>a.pivot[o].is_enabled,c=>{const i="pivot["+o+"].minimo",n="pivot["+o+"].maximo",g="pivot["+o+"].resultado",C="pivot["+o+"].unidad_id",E="pivot["+o+"].motivo";c||(_(i,void 0),_(n,void 0),_(g,null),_(C,null),_(E,null),a.pivot[o].items.forEach(oe=>{const se="item_orden["+oe.pivot_index+"].is_enabled";_(se,c)}))},{deep:!0,immediate:!0})}),h.items.forEach((t,o)=>{L(()=>a.item_orden[o].unidad_id,c=>{if(c){const i=h.items.find(n=>n.id==a.item_orden[o].item_id);if(!!i&&!!c){const n=i.pivot.find(E=>E.unidad_id===c),g="item_orden["+o+"].minimo",C="item_orden["+o+"].maximo";n&&(_(g,n.minimo),_(C,n.maximo))}}},{deep:!0,immediate:!0})}),(t,o)=>(b(),f(ee,{onSubmit:ce(s(r),["prevent"])},{default:y(()=>[d(W,{bordered:""},{default:y(()=>[(b(!0),D(X,null,H(u.examens,(c,i)=>(b(),f(V,{key:i},{default:y(()=>[d(P,null,{default:y(()=>[k("div",ge,[d(R,{label:"Examen",name:`pivot[${i}].examen_id`,options:S.value,class:"col-4",required:"",borderless:"",readonly:"",outlined:!1},null,8,["name","options"]),c.tipo.toLowerCase()==="string"?(b(),D("div",$e,[s(a).pivot[i].is_canceled?q("",!0):(b(),f(p,{key:0,name:`pivot[${i}].resultado`,"bg-color":x(i),label:"Resultado",class:"col-12",required:"",disable:!s(a).pivot[i].is_enabled},null,8,["name","bg-color","disable"])),s(a).pivot[i].is_canceled?(b(),f(p,{key:1,name:`pivot[${i}].motivo`,label:"Motivo",class:"col-12",required:"",disable:!s(a).pivot[i].is_enabled},null,8,["name","disable"])):q("",!0)])):c.tipo.toLowerCase()==="unidad"?(b(),D("div",we,[s(a).pivot[i].is_canceled?q("",!0):(b(),f(p,{key:0,name:`pivot[${i}].resultado`,"bg-color":x(i),label:"Resultado",class:"col-6",required:"",disable:!s(a).pivot[i].is_enabled},null,8,["name","bg-color","disable"])),!s(a).pivot[i].is_canceled&&!s(a).pivot[i].has_items?(b(),f(R,{key:1,label:"Unidad",name:`pivot[${i}].unidad_id`,options:s(a).pivot[i].unidads,hint:m(i),class:"col-6",required:"",disable:!s(a).pivot[i].is_enabled},null,8,["name","options","hint","disable"])):q("",!0),s(a).pivot[i].is_canceled?(b(),f(p,{key:2,name:`pivot[${i}].motivo`,label:"Motivo",class:"col-12",required:"",disable:!s(a).pivot[i].is_enabled},null,8,["name","disable"])):q("",!0)])):c.tipo.toLowerCase()==="respuesta"?(b(),D("div",Ce,[s(a).pivot[i].is_canceled?q("",!0):(b(),f(R,{key:0,label:"Respuesta",name:`pivot[${i}].respuesta_id`,options:s(a).pivot[i].respuestas,class:"col-12",required:"",disable:!s(a).pivot[i].is_enabled},null,8,["name","options","disable"])),s(a).pivot[i].is_canceled?(b(),f(p,{key:1,name:`pivot[${i}].motivo`,label:"Motivo",class:"col-12",required:"",disable:!s(a).pivot[i].is_enabled},null,8,["name","disable"])):q("",!0)])):q("",!0),d(p,{label:"Fecha",type:"date",name:`pivot[${i}].fecha_resultado`,required:"",class:"col-2",disable:!s(a).pivot[i].is_enabled},null,8,["name","disable"]),d(z,{class:"col-2 self-center justify-center"},{default:y(()=>[d(_e,{name:`pivot[${i}].is_enabled`,label:"",dense:""},{default:y(()=>[d(Y,null,{default:y(()=>[J(K(s(a).pivot[i].is_enabled?"Deshabilitar.":"Habilitar."),1)]),_:2},1024)]),_:2},1032,["name"]),d(A,{icon:s(a).pivot[i].is_canceled?"fas fa-pen":"fas fa-ban",color:s(a).pivot[i].is_canceled?"warning":"negative",disable:!s(a).pivot[i].is_enabled,round:"",flat:"",size:"sm",onClick:n=>te(i)},{default:y(()=>[d(Y,null,{default:y(()=>[J(K(s(a).pivot[i].is_canceled?"Registrar datos.":"Cancelar examen."),1)]),_:2},1024)]),_:2},1032,["icon","color","disable","onClick"])]),_:2},1024)]),de(d(W,{bordered:""},{default:y(()=>[(b(!0),D(X,null,H(s(a).pivot[i].items,(n,g)=>(b(),f(V,{key:g},{default:y(()=>[d(P,null,{default:y(()=>[k("div",Ee,[d(R,{label:"Item",name:`item_orden[${n.pivot_index}].item_id`,options:M.value,class:"col-4",required:"",borderless:"",readonly:"",outlined:!1},null,8,["name","options"]),s(a).item_orden[n.pivot_index].tipo!=="respuesta"?(b(),f(p,{key:0,name:`item_orden[${n.pivot_index}].resultado`,label:"Resultado",class:ue(s(a).item_orden[n.pivot_index].tipo==="unidad"?"col-2":"col-4"),required:"",disable:!s(a).pivot[i].is_enabled,"bg-color":ie(n.pivot_index)},null,8,["name","class","disable","bg-color"])):q("",!0),s(a).item_orden[n.pivot_index].tipo==="unidad"?(b(),f(R,{key:1,label:"Unidad",name:`item_orden[${n.pivot_index}].unidad_id`,options:s(a).item_orden[n.pivot_index].unidads,class:"col-2",required:"",disable:!s(a).pivot[i].is_enabled,hint:ae(n.pivot_index)},null,8,["name","options","disable","hint"])):q("",!0),s(a).item_orden[n.pivot_index].tipo==="respuesta"?(b(),f(R,{key:2,label:"Respuesta",name:`item_orden[${n.pivot_index}].respuesta_id`,options:s(a).item_orden[n.pivot_index].respuestas,class:"col-4",required:"",disable:!s(a).pivot[i].is_enabled},null,8,["name","options","disable"])):q("",!0)])]),_:2},1024)]),_:2},1024))),128))]),_:2},1536),[[me,s(a).pivot[i].is_enabled&&!s(a).pivot[i].is_canceled]])]),_:2},1024)]),_:2},1024))),128))]),_:1}),u.withObservaciones?(b(),D("div",ke,[d(p,{label:"Observaciones",type:"textarea",name:"observaciones",class:"col-12"})])):q("",!0),k("div",Ne,[d(z,{class:"col-12 justify-end q-pa-none q-pt-md"},{default:y(()=>[d(A,{label:"Cancelar",color:"primary","no-caps":"",outline:"",onClick:o[0]||(o[0]=c=>t.$emit("cancel"))}),d(A,{label:"Guardar",type:"submit",icon:"fas fa-floppy-disk",color:"primary",loading:s(e),"no-caps":""},null,8,["loading"])]),_:1})])]),_:1},8,["onSubmit"]))}}),Fe=G({__name:"RegistrarResultadosForm",props:{orden:{type:Object,required:!0},withObservaciones:{type:Boolean,required:!1,default:!1}},emits:["submit","cancel"],setup(u){const N=T(()=>v.orden.examens.data?v.orden.examens.data.map(l=>({label:l.nombre,value:Number(l.id)})):[]),v=u,h=B([]),S=B(),M=B();h.value=v.orden.pivot.map(l=>{let e=[];const r=v.orden.examens.data.find(m=>Number(m.id)==l.examen_id);return e=[{label:"Examen",name:"examen_id",type:"select",options:N.value},{label:"Resultado",name:"resultado",type:"string"},{label:"Unidad",name:"unidad_id",type:"select",options:r?r.unidads.data.map(m=>({label:m.nombre,value:Number(m.id)})):[]},{label:"Fecha",name:"fecha_resultado",type:"date"},{label:"Acciones",name:"actions",type:"array"}],e});const U=O().of(Z(()=>{let l={};return l={examen_id:I().required().label("Examen"),resultado:I().when(["tipo"],{is:e=>e=="unidad",then:()=>$().positive().typeError("Debe ingresar un numero").label("Resultado")}).when(["tipo"],{is:e=>e==="string",then:()=>w().trim().label("Resultado")}).when(["tipo"],{is:e=>e==="respuesta",then:()=>w().trim().label("Resultado")}).when(["is_enabled","is_canceled","tipo"],{is:(e,r,m)=>e&&!r&&m.toLowerCase()!=="respuesta",then:e=>e.required(),otherwise:e=>e.nullable()}).transform((e,r)=>r===""?void 0:e),fecha_resultado:w().required().label("Fecha"),unidad_id:$().when(["is_enabled","is_canceled","has_items","tipo"],{is:(e,r,m,x)=>e&&!r&&!m&&x==="unidad",then:e=>e.required(),otherwise:e=>e.nullable()}).label("Unidad"),is_canceled:F().required().label("Cancelado?"),is_enabled:F().required().label("Hablitad?"),has_items:F().required().label("Tiene items?"),motivo:w().when(["is_enabled","is_canceled"],{is:!0,then:e=>e.required(),otherwise:e=>e.nullable()}).label("Motivo"),minimo:$(),maximo:$(),unidads:O(),items:O(),respuestas:O(),tipo:w().required().label("Tipo")},Q().shape(l)})),_=O().of(Z(()=>{let l={};return l={item_id:I().required().label("Item"),examen_id:I().required().label("Examen"),resultado:I().when(["tipo"],{is:e=>e=="unidad",then:()=>$().positive().typeError("Debe ingresar un numero").label("Resultado")}).when(["tipo"],{is:e=>e==="string",then:()=>w().trim().label("Resultado")}).when(["tipo"],{is:e=>e==="respuesta",then:()=>w().trim().label("Resultado")}).when(["is_enabled","is_canceled","tipo"],{is:(e,r,m)=>e&&!r&&m.toLowerCase()!=="respuesta",then:e=>e.required(),otherwise:e=>e.nullable()}).transform((e,r)=>r===""?void 0:e),unidad_id:$().when(["is_enabled","is_canceled","tipo"],{is:(e,r,m)=>e&&!r&&m==="unidad",then:e=>e.required(),otherwise:e=>e.nullable()}).label("Unidad"),minimo:$(),maximo:$(),is_canceled:F().required().label("Cancelado?"),is_enabled:F().required().label("Habilitado?"),respuestas:O(),tipo:w().required().label("Tipo")},Q().shape(l)}));S.value=Q().shape({pivot:U,item_orden:_});const a=v.orden.pivot.map(l=>{var r;const e=v.orden.examens.data.find(m=>Number(m.id)==l.examen_id);return{examen_id:l.examen_id,resultado:l.resultado,fecha_resultado:(r=l.fecha_resultado)!=null?r:be.now().toISODate(),unidad_id:l.unidad_id,respuesta_id:l.respuesta_id,is_canceled:l.is_canceled,is_enabled:!0,has_items:e?e.items.data.length>0:!1,tipo:e&&e.tipo.toLowerCase(),motivo:l.motivo,unidads:e?e.unidads.data.map(m=>({label:m.nombre,value:Number(m.id)})):[],respuestas:e?e.respuestas.data.map(m=>({label:m.nombre,value:Number(m.id)})):[],items:v.orden.items.data.map((m,x)=>({pivot_index:x,examen_id:m.examen_id})).filter(m=>m.examen_id===Number(e==null?void 0:e.id))}}),j=v.orden.item_orden.map(l=>{const e=v.orden.items.data.find(r=>Number(r.id)==l.item_id);return{item_id:l.item_id,examen_id:e==null?void 0:e.examen_id,resultado:l.resultado,unidad_id:l.unidad_id,respuesta_id:l.respuesta_id,is_canceled:l.is_canceled,is_enabled:!0,tipo:e&&e.tipo.toLowerCase(),unidads:e?e.unidads.data.map(r=>({label:r.nombre,value:Number(r.id)})):[],respuestas:e?e.respuestas.data.map(r=>({label:r.nombre,value:Number(r.id)})):[]}});return M.value={pivot:a,item_orden:j,observaciones:v.orden.observaciones},(l,e)=>h.value.length>0&&S.value?(b(),f(xe,{key:0,fields:h.value,"validation-schema":S.value,"initial-values":M.value,"orden-id":Number(u.orden.id),examens:v.orden.examens.data,items:v.orden.items.data,"with-observaciones":u.withObservaciones,onCancel:e[0]||(e[0]=r=>l.$emit("cancel")),onSubmit:e[1]||(e[1]=r=>l.$emit("submit"))},null,8,["fields","validation-schema","initial-values","orden-id","examens","items","with-observaciones"])):q("",!0)}});export{Ie as _,Fe as a};