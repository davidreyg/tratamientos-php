import{W as ie,Y as Q,o as b,e as y,w as h,a5 as o,ad as v,bc as ee,aj as k,b7 as oe,b8 as se,f as P,at as T,a2 as l,b9 as ne,a3 as re,be as de,av as ue,bb as ce,k as G,a1 as me,ag as be,H as V,ak as D,aK as H,a7 as z,a8 as W,aW as S,au as q,ab as J,aX as K,ac as j,x as ve,bf as pe,aQ as X,a$ as Y,bg as _e,r as A,b0 as F,bh as Z,$ as L,a_ as fe,bi as B,aU as w,a0 as I,bj as M}from"./index.1470aaf9.js";import{O as he}from"./OrdenApi.df0e7909.js";function ye(){return ie(({id:r,data:C})=>he.updateExamens(r,C))}const qe=k("div",{class:"col-12 text-bold text-italic"},"Datos Generales:",-1),ge=k("div",{class:"col-12 text-bold text-italic"}," Datos del Establecimiento de Origen: ",-1),$e=k("div",{class:"col-12 text-bold text-italic"},"Datos del Medico:",-1),we=k("div",{class:"col-12 text-bold text-italic"},"Datos del paciente:",-1),Be=Q({__name:"OrdenDatosForm",props:{orden:{type:Object,required:!0}},setup(r){return(C,p)=>(b(),y(ee,{class:"row"},{default:h(()=>[qe,o(v,{name:"diagnostico",label:"Diagnostico",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:r.orden.diagnostico},null,8,["value"]),o(v,{name:"CI10",label:"CI10",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:r.orden.CI10},null,8,["value"]),o(v,{name:"CPN",label:"CPN",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:r.orden.CPN},null,8,["value"]),o(v,{name:"EG",label:"EG",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:r.orden.EG},null,8,["value"]),o(v,{name:"codigo_atencion",label:"Codigo de Atenci\xF3n",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:r.orden.codigo_atencion},null,8,["value"]),o(v,{name:"fecha_registro",label:"Fecha de Registro",class:"col-xs-12 col-sm-4",type:"date",required:"",readonly:"",borderless:"",outlined:!1,value:r.orden.fecha_registro},null,8,["value"]),ge,o(v,{name:"establecimiento_tipo",class:"col-xs-12 col-sm-4",label:"Tipo de Establecimiento",required:"",readonly:"",borderless:"",outlined:!1,value:r.orden.establecimiento?"Jurisdiccion":"Externo"},null,8,["value"]),o(v,{name:"establecimiento_id",class:"col-xs-12 col-sm-8",label:"Establecimiento Origen",required:"",readonly:"",borderless:"",outlined:!1,value:r.orden.establecimiento?r.orden.establecimiento.data.nombre:r.orden.establecimiento_otro},null,8,["value"]),$e,o(v,{name:"medico",label:"Nombre",class:"col-xs-12 col-sm-6",required:"",readonly:"",borderless:"",outlined:!1,value:r.orden.medico},null,8,["value"]),we,o(v,{name:"paciente",label:"Nombre",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:r.orden.paciente.data.nombre_completo},null,8,["value"]),o(v,{name:"documento",label:"N\xB0 de Documento",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:r.orden.paciente.data.numero_documento},null,8,["value"])]),_:1}))}}),Ce=Q({__name:"BaseCheckBox",props:{name:{type:String,required:!0},label:{type:String,required:!0}},setup(r){const p=oe(r,"name"),{value:f,handleChange:E,errorMessage:g}=se(p);return(N,c)=>(b(),y(ce,{color:"black",borderless:"",error:!!l(g),"bottom-slots":"","hide-bottom-space":!l(g)},{error:h(()=>[P(T(l(g)),1)]),default:h(()=>[o(de,ne(N.$attrs,{modelValue:l(f),"onUpdate:modelValue":[c[0]||(c[0]=a=>re(f)?f.value=a:null),c[1]||(c[1]=a=>l(E)(a))],label:r.label}),null,16,["modelValue","label"]),ue(N.$slots,"default")]),_:3},8,["error","hide-bottom-space"]))}}),Ee={class:"row q-col-gutter-sm q-mb-sm"},ke={key:0,class:"col-4 row q-col-gutter-sm"},Ne={key:1,class:"col-4 row q-col-gutter-sm"},xe={key:2,class:"col-4 row q-col-gutter-sm"},De={class:"row q-col-gutter-sm q-mb-sm"},Re={key:0,class:"row q-mt-md"},Oe={class:"row"},Se=Q({__name:"ResultadoFormDinamico",props:{fields:{type:Array,required:!0},examens:{type:Array,required:!0},items:{type:Array,required:!0},ordenId:{type:Number,required:!0},initialValues:{type:Object,required:!1,default:void 0},validationSchema:{type:Object,required:!0},withObservaciones:{type:Boolean,required:!0}},emits:["submit","cancel"],setup(r,{emit:C}){const p=C,f=r,E=G(()=>f.examens?f.examens.map(s=>({label:s.nombre,value:Number(s.id)})):[]),g=G(()=>f.items.map(s=>({label:s.nombre,value:Number(s.id)}))),{handleSubmit:N,setFieldValue:c,values:a}=me({validationSchema:f.validationSchema,initialValues:f.initialValues}),{mutateAsync:U,reset:i,isLoading:e}=ye(),d=N(async(s,{setErrors:n})=>{await U({id:f.ordenId,data:s},{onSuccess:()=>{be.success("Resultados actualizados correctamente"),p("submit"),i.value()},onError:m=>{i.value(),n(m.data.errors)}})},s=>console.log(s)),u=s=>{let n;return!!a.pivot[s].minimo&&!!a.pivot[s].minimo&&(n=`Min: ${a.pivot[s].minimo} - Max: ${a.pivot[s].maximo}`),n},x=s=>{let n;return!!a.pivot[s].minimo&&!!a.pivot[s].minimo&&(a.pivot[s].resultado>a.pivot[s].minimo&&a.pivot[s].resultado<a.pivot[s].maximo?n="green-2":n="red-2"),n},ae=s=>{const n="pivot["+s+"].is_canceled",m=a.pivot[s].is_canceled;a.pivot[s].has_items&&a.pivot[s].items.forEach(_=>{const $="item_orden["+_.pivot_index+"].is_canceled";c($,!m)}),c(n,!m)};return f.fields.forEach((s,n)=>{V(()=>a.pivot[n].unidad_id,m=>{if(m){const t=f.examens.find(_=>_.id==a.pivot[n].examen_id);if(!!t&&!!m){const _=t.pivot.find(O=>O.unidad_id===m),$="pivot["+n+"].minimo",R="pivot["+n+"].maximo";_&&(c($,_.minimo),c(R,_.maximo))}}},{deep:!0,immediate:!0}),V(()=>a.pivot[n].is_canceled,m=>{const t="pivot["+n+"].minimo",_="pivot["+n+"].maximo";m&&(c(t,void 0),c(_,void 0)),a.pivot[n].items.forEach(R=>{const O="item_orden["+R.pivot_index+"].is_canceled";c(O,m)})},{deep:!0,immediate:!0}),V(()=>a.pivot[n].is_enabled,m=>{const t="pivot["+n+"].minimo",_="pivot["+n+"].maximo",$="pivot["+n+"].resultado",R="pivot["+n+"].unidad_id",O="pivot["+n+"].motivo";m||(c(t,void 0),c(_,void 0),c($,null),c(R,null),c(O,null),a.pivot[n].items.forEach(te=>{const le="item_orden["+te.pivot_index+"].is_enabled";c(le,m)}))},{deep:!0,immediate:!0})}),(s,n)=>(b(),y(ee,{onSubmit:_e(l(d),["prevent"])},{default:h(()=>[o(X,{bordered:""},{default:h(()=>[(b(!0),D(Y,null,H(r.examens,(m,t)=>(b(),y(z,{key:t},{default:h(()=>[o(W,null,{default:h(()=>[k("div",Ee,[o(S,{label:"Examen",name:`pivot[${t}].examen_id`,options:E.value,class:"col-4",required:"",borderless:"",readonly:"",outlined:!1},null,8,["name","options"]),m.tipo.toLowerCase()==="string"?(b(),D("div",ke,[l(a).pivot[t].is_canceled?q("",!0):(b(),y(v,{key:0,name:`pivot[${t}].resultado`,"bg-color":x(t),label:"Resultado",class:"col-12",required:"",disable:!l(a).pivot[t].is_enabled},null,8,["name","bg-color","disable"])),l(a).pivot[t].is_canceled?(b(),y(v,{key:1,name:`pivot[${t}].motivo`,label:"Motivo",class:"col-12",required:"",disable:!l(a).pivot[t].is_enabled},null,8,["name","disable"])):q("",!0)])):m.tipo.toLowerCase()==="unidad"?(b(),D("div",Ne,[l(a).pivot[t].is_canceled?q("",!0):(b(),y(v,{key:0,name:`pivot[${t}].resultado`,"bg-color":x(t),label:"Resultado",class:"col-6",required:"",disable:!l(a).pivot[t].is_enabled},null,8,["name","bg-color","disable"])),!l(a).pivot[t].is_canceled&&!l(a).pivot[t].has_items?(b(),y(S,{key:1,label:"Unidad",name:`pivot[${t}].unidad_id`,options:l(a).pivot[t].unidads,hint:u(t),class:"col-6",required:"",disable:!l(a).pivot[t].is_enabled},null,8,["name","options","hint","disable"])):q("",!0),l(a).pivot[t].is_canceled?(b(),y(v,{key:2,name:`pivot[${t}].motivo`,label:"Motivo",class:"col-12",required:"",disable:!l(a).pivot[t].is_enabled},null,8,["name","disable"])):q("",!0)])):m.tipo.toLowerCase()==="respuesta"?(b(),D("div",xe,[l(a).pivot[t].is_canceled?q("",!0):(b(),y(S,{key:0,label:"Respuesta",name:`pivot[${t}].respuesta_id`,options:l(a).pivot[t].respuestas,class:"col-12",required:"",disable:!l(a).pivot[t].is_enabled},null,8,["name","options","disable"])),l(a).pivot[t].is_canceled?(b(),y(v,{key:1,name:`pivot[${t}].motivo`,label:"Motivo",class:"col-12",required:"",disable:!l(a).pivot[t].is_enabled},null,8,["name","disable"])):q("",!0)])):q("",!0),o(v,{label:"Fecha",type:"date",name:`pivot[${t}].fecha_resultado`,required:"",class:"col-2",disable:!l(a).pivot[t].is_enabled},null,8,["name","disable"]),o(J,{class:"col-2 self-center justify-center"},{default:h(()=>[o(Ce,{name:`pivot[${t}].is_enabled`,label:"",dense:""},{default:h(()=>[o(K,null,{default:h(()=>[P(T(l(a).pivot[t].is_enabled?"Deshabilitar.":"Habilitar."),1)]),_:2},1024)]),_:2},1032,["name"]),o(j,{icon:l(a).pivot[t].is_canceled?"fas fa-pen":"fas fa-ban",color:l(a).pivot[t].is_canceled?"warning":"negative",disable:!l(a).pivot[t].is_enabled,round:"",flat:"",size:"sm",onClick:_=>ae(t)},{default:h(()=>[o(K,null,{default:h(()=>[P(T(l(a).pivot[t].is_canceled?"Registrar datos.":"Cancelar examen."),1)]),_:2},1024)]),_:2},1032,["icon","color","disable","onClick"])]),_:2},1024)]),ve(o(X,{bordered:""},{default:h(()=>[(b(!0),D(Y,null,H(l(a).pivot[t].items,(_,$)=>(b(),y(z,{key:$},{default:h(()=>[o(W,null,{default:h(()=>[k("div",De,[o(S,{label:"Item",name:`item_orden[${_.pivot_index}].item_id`,options:g.value,class:"col-4",required:"",borderless:"",readonly:"",outlined:!1},null,8,["name","options"]),o(v,{name:`item_orden[${_.pivot_index}].resultado`,label:"Resultado",class:"col-2",required:"",disable:!l(a).pivot[t].is_enabled},null,8,["name","disable"]),o(S,{label:"Unidad",name:`item_orden[${_.pivot_index}].unidad_id`,options:l(a).item_orden[_.pivot_index].unidads,class:"col-2",required:"",disable:!l(a).pivot[t].is_enabled},null,8,["name","options","disable"])])]),_:2},1024)]),_:2},1024))),128))]),_:2},1536),[[pe,l(a).pivot[t].is_enabled&&!l(a).pivot[t].is_canceled]])]),_:2},1024)]),_:2},1024))),128))]),_:1}),r.withObservaciones?(b(),D("div",Re,[o(v,{label:"Observaciones",type:"textarea",name:"observaciones",class:"col-12"})])):q("",!0),k("div",Oe,[o(J,{class:"col-12 justify-end q-pa-none q-pt-md"},{default:h(()=>[o(j,{label:"Cancelar",color:"primary","no-caps":"",outline:"",onClick:n[0]||(n[0]=m=>s.$emit("cancel"))}),o(j,{label:"Guardar",type:"submit",icon:"fas fa-floppy-disk",color:"primary",loading:l(e),"no-caps":""},null,8,["loading"])]),_:1})])]),_:1},8,["onSubmit"]))}}),Qe=Q({__name:"RegistrarResultadosForm",props:{orden:{type:Object,required:!0},withObservaciones:{type:Boolean,required:!1,default:!1}},emits:["submit","cancel"],setup(r){const C=G(()=>p.orden.examens.data?p.orden.examens.data.map(i=>({label:i.nombre,value:Number(i.id)})):[]),p=r,f=A([]),E=A(),g=A();f.value=p.orden.pivot.map(i=>{let e=[];const d=p.orden.examens.data.find(u=>Number(u.id)==i.examen_id);return e=[{label:"Examen",name:"examen_id",type:"select",options:C.value},{label:"Resultado",name:"resultado",type:"string"},{label:"Unidad",name:"unidad_id",type:"select",options:d?d.unidads.data.map(u=>({label:u.nombre,value:Number(u.id)})):[]},{label:"Fecha",name:"fecha_resultado",type:"date"},{label:"Acciones",name:"actions",type:"array"}],e});const N=F().of(Z(()=>{let i={};return i={examen_id:B().required().label("Examen"),resultado:B().when(["tipo"],{is:e=>e=="unidad",then:()=>w().positive().typeError("Debe ingresar un numero").label("Resultado")}).when(["tipo"],{is:e=>e==="string",then:()=>I().trim().label("Resultado")}).when(["tipo"],{is:e=>e==="respuesta",then:()=>I().trim().label("Resultado")}).when(["is_enabled","is_canceled","tipo"],{is:(e,d,u)=>e&&!d&&u.toLowerCase()!=="respuesta",then:e=>e.required(),otherwise:e=>e.nullable()}).transform((e,d)=>d===""?void 0:e),fecha_resultado:I().required().label("Fecha"),unidad_id:w().when(["is_enabled","is_canceled","has_items","tipo"],{is:(e,d,u,x)=>e&&!d&&!u&&x==="unidad",then:e=>e.required(),otherwise:e=>e.nullable()}).label("Unidad"),is_canceled:M().required().label("Cancelado?"),is_enabled:M().required().label("Hablitad?"),has_items:M().required().label("Tiene items?"),motivo:I().when(["is_enabled","is_canceled"],{is:!0,then:e=>e.required(),otherwise:e=>e.nullable()}).label("Motivo"),minimo:w(),maximo:w(),unidads:F(),items:F(),respuestas:F(),tipo:I().required().label("Tipo")},L().shape(i)})),c=F().of(Z(()=>{let i={};return i={item_id:B().required().label("Item"),examen_id:B().required().label("Examen"),resultado:w().positive().when(["is_enabled","is_canceled"],{is:(e,d)=>e&&!d,then:e=>e.required(),otherwise:e=>e.nullable()}).transform((e,d)=>d===""?void 0:e).typeError("Debe ingresar un numero").label("Resultado"),unidad_id:w().when(["is_enabled","is_canceled"],{is:(e,d)=>e&&!d,then:e=>e.required(),otherwise:e=>e.nullable()}).label("Unidad"),minimo:w(),maximo:w(),is_canceled:M().required().label("Cancelado?"),is_enabled:M().required().label("Habilitado?")},L().shape(i)}));E.value=L().shape({pivot:N,item_orden:c});const a=p.orden.pivot.map(i=>{var d;const e=p.orden.examens.data.find(u=>Number(u.id)==i.examen_id);return{examen_id:i.examen_id,resultado:i.resultado,fecha_resultado:(d=i.fecha_resultado)!=null?d:fe.now().toISODate(),unidad_id:i.unidad_id,respuesta_id:i.respuesta_id,is_canceled:i.is_canceled,is_enabled:!0,has_items:e?e.items.data.length>0:!1,tipo:e&&e.tipo.toLowerCase(),motivo:i.motivo,unidads:e?e.unidads.data.map(u=>({label:u.nombre,value:Number(u.id)})):[],respuestas:e?e.respuestas.data.map(u=>({label:u.nombre,value:Number(u.id)})):[],items:p.orden.items.data.map((u,x)=>({pivot_index:x,examen_id:u.examen_id})).filter(u=>u.examen_id===Number(e==null?void 0:e.id))}}),U=p.orden.item_orden.map(i=>{const e=p.orden.items.data.find(d=>Number(d.id)==i.item_id);return{item_id:i.item_id,examen_id:e==null?void 0:e.examen_id,resultado:i.resultado,unidad_id:i.unidad_id,is_canceled:i.is_canceled,is_enabled:!0,unidads:e?e.unidads.data.map(d=>({label:d.nombre,value:Number(d.id)})):[]}});return g.value={pivot:a,item_orden:U,observaciones:p.orden.observaciones},(i,e)=>f.value.length>0&&E.value?(b(),y(Se,{key:0,fields:f.value,"validation-schema":E.value,"initial-values":g.value,"orden-id":Number(r.orden.id),examens:p.orden.examens.data,items:p.orden.items.data,"with-observaciones":r.withObservaciones,onCancel:e[0]||(e[0]=d=>i.$emit("cancel")),onSubmit:e[1]||(e[1]=d=>i.$emit("submit"))},null,8,["fields","validation-schema","initial-values","orden-id","examens","items","with-observaciones"])):q("",!0)}});export{Be as _,Qe as a};