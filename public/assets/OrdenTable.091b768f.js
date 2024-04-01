import{Y as F,o as g,e as x,w as b,a5 as l,ad as h,b3 as ae,aj as D,aE as se,aF as ne,W as re,b4 as de,b5 as ce,f as j,at as T,a2 as d,b6 as me,a3 as ue,b7 as be,av as L,b8 as ve,k as G,a1 as _e,ag as pe,H as B,ak as I,aK as H,a7 as z,a8 as W,aW as S,au as O,ab as J,aX as K,ac as M,x as fe,b9 as he,aQ as X,a$ as Y,ba as ge,r as P,bb as R,bc as Z,$ as U,a_ as ye,bd as V,aU as w,a0 as ee,be as k,bf as qe,aM as xe,aI as $e}from"./index.418160ac.js";import{O as te}from"./OrdenApi.daf5e516.js";import{_ as Ee}from"./BaseTable.28933ffe.js";const we=D("div",{class:"col-12 text-bold text-italic"},"Datos Generales:",-1),De=D("div",{class:"col-12 text-bold text-italic"}," Datos del Establecimiento de Origen: ",-1),Ne=D("div",{class:"col-12 text-bold text-italic"},"Datos del Medico:",-1),Ce=D("div",{class:"col-12 text-bold text-italic"},"Datos del paciente:",-1),Ue=F({__name:"OrdenDatosForm",props:{orden:{type:Object,required:!0}},setup(i){return(q,u)=>(g(),x(ae,{class:"row"},{default:b(()=>[we,l(h,{name:"diagnostico",label:"Diagnostico",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:i.orden.diagnostico},null,8,["value"]),l(h,{name:"CI10",label:"CI10",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:i.orden.CI10},null,8,["value"]),l(h,{name:"CPN",label:"CPN",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:i.orden.CPN},null,8,["value"]),l(h,{name:"EG",label:"EG",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:i.orden.EG},null,8,["value"]),l(h,{name:"codigo_atencion",label:"Codigo de Atenci\xF3n",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:i.orden.codigo_atencion},null,8,["value"]),l(h,{name:"fecha_registro",label:"Fecha de Registro",class:"col-xs-12 col-sm-4",type:"date",required:"",readonly:"",borderless:"",outlined:!1,value:i.orden.fecha_registro},null,8,["value"]),De,l(h,{name:"establecimiento_tipo",class:"col-xs-12 col-sm-4",label:"Tipo de Establecimiento",required:"",readonly:"",borderless:"",outlined:!1,value:i.orden.establecimiento?"Jurisdiccion":"Externo"},null,8,["value"]),l(h,{name:"establecimiento_id",class:"col-xs-12 col-sm-8",label:"Establecimiento Origen",required:"",readonly:"",borderless:"",outlined:!1,value:i.orden.establecimiento?i.orden.establecimiento.data.nombre:i.orden.establecimiento_otro},null,8,["value"]),Ne,l(h,{name:"medico",label:"Nombre",class:"col-xs-12 col-sm-6",required:"",readonly:"",borderless:"",outlined:!1,value:i.orden.medico},null,8,["value"]),Ce,l(h,{name:"paciente",label:"Nombre",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:i.orden.paciente.data.nombre_completo},null,8,["value"]),l(h,{name:"documento",label:"N\xB0 de Documento",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1,value:i.orden.paciente.data.numero_documento},null,8,["value"])]),_:1}))}});function Ve(i){const q=async()=>(await te.fetchAll(i.value)).data(),{data:u,isLoading:r,isSuccess:y,isError:v,isFetching:$,refetch:m}=se([ne.ORDEN_ALL,i==null?void 0:i.value],q,{keepPreviousData:!0});return{data:u,isLoading:r,isSuccess:y,isError:v,isFetching:$,refetch:m}}function ke(){return re(({id:i,data:q})=>te.updateExamens(i,q))}const Oe=F({__name:"BaseCheckBox",props:{name:{type:String,required:!0},label:{type:String,required:!0}},setup(i){const u=de(i,"name"),{value:r,handleChange:y,errorMessage:v}=ce(u);return($,m)=>(g(),x(ve,{color:"black",borderless:"",error:!!d(v),"bottom-slots":"","hide-bottom-space":!d(v)},{error:b(()=>[j(T(d(v)),1)]),default:b(()=>[l(be,me($.$attrs,{modelValue:d(r),"onUpdate:modelValue":[m[0]||(m[0]=a=>ue(r)?r.value=a:null),m[1]||(m[1]=a=>d(y)(a))],label:i.label}),null,16,["modelValue","label"]),L($.$slots,"default")]),_:3},8,["error","hide-bottom-space"]))}}),Fe={class:"row q-col-gutter-sm q-mb-sm"},Se={class:"row q-col-gutter-sm q-mb-sm"},Re={key:0,class:"row q-mt-md"},Ae={class:"row"},Qe=F({__name:"ResultadoFormDinamico",props:{fields:{type:Array,required:!0},examens:{type:Array,required:!0},items:{type:Array,required:!0},ordenId:{type:Number,required:!0},initialValues:{type:Object,required:!1,default:void 0},validationSchema:{type:Object,required:!0},withObservaciones:{type:Boolean,required:!0}},emits:["submit","cancel"],setup(i,{emit:q}){const u=q,r=i,y=G(()=>r.examens?r.examens.map(s=>({label:s.nombre,value:Number(s.id)})):[]),v=G(()=>r.items.map(s=>({label:s.nombre,value:Number(s.id)}))),{handleSubmit:$,setFieldValue:m,values:a}=_e({validationSchema:r.validationSchema,initialValues:r.initialValues}),{mutateAsync:A,reset:o,isLoading:e}=ke(),c=$(async(s,{setErrors:n})=>{await A({id:r.ordenId,data:s},{onSuccess:()=>{pe.success("Resultados actualizados correctamente"),u("submit"),o.value()},onError:f=>{o.value(),n(f.data.errors)}})},s=>console.log(s)),_=s=>{let n;return!!a.pivot[s].minimo&&!!a.pivot[s].minimo&&(n=`Min: ${a.pivot[s].minimo} - Max: ${a.pivot[s].maximo}`),n},Q=s=>{let n;return!!a.pivot[s].minimo&&!!a.pivot[s].minimo&&(a.pivot[s].resultado>a.pivot[s].minimo&&a.pivot[s].resultado<a.pivot[s].maximo?n="green-2":n="red-2"),n},ie=s=>{const n="pivot["+s+"].is_canceled",f=a.pivot[s].is_canceled;a.pivot[s].has_items&&a.pivot[s].items.forEach(p=>{const E="item_orden["+p.pivot_index+"].is_canceled";m(E,!f)}),m(n,!f)};return r.fields.forEach((s,n)=>{B(()=>a.pivot[n].unidad_id,f=>{if(f){const t=r.examens.find(p=>p.id==a.pivot[n].examen_id);if(!!t&&!!f){const p=t.pivot.find(C=>C.unidad_id===f),E="pivot["+n+"].minimo",N="pivot["+n+"].maximo";p&&(m(E,p.minimo),m(N,p.maximo))}}},{deep:!0,immediate:!0}),B(()=>a.pivot[n].is_canceled,f=>{const t="pivot["+n+"].minimo",p="pivot["+n+"].maximo";f&&(m(t,void 0),m(p,void 0)),a.pivot[n].items.forEach(N=>{const C="item_orden["+N.pivot_index+"].is_canceled";m(C,f)})},{deep:!0,immediate:!0}),B(()=>a.pivot[n].is_enabled,f=>{const t="pivot["+n+"].minimo",p="pivot["+n+"].maximo",E="pivot["+n+"].resultado",N="pivot["+n+"].unidad_id",C="pivot["+n+"].motivo";f||(m(t,void 0),m(p,void 0),m(E,null),m(N,null),m(C,null),a.pivot[n].items.forEach(le=>{const oe="item_orden["+le.pivot_index+"].is_enabled";m(oe,f)}))},{deep:!0,immediate:!0})}),(s,n)=>(g(),x(ae,{onSubmit:ge(d(c),["prevent"])},{default:b(()=>[l(X,{bordered:""},{default:b(()=>[(g(!0),I(Y,null,H(i.examens,(f,t)=>(g(),x(z,{key:t},{default:b(()=>[l(W,null,{default:b(()=>[D("div",Fe,[l(S,{label:"Examen",name:`pivot[${t}].examen_id`,options:y.value,class:"col-4",required:"",borderless:"",readonly:"",outlined:!1},null,8,["name","options"]),d(a).pivot[t].is_canceled?(g(),x(h,{key:0,name:`pivot[${t}].motivo`,label:"Motivo",class:"col-4",required:"",disable:!d(a).pivot[t].is_enabled},null,8,["name","disable"])):O("",!0),d(a).pivot[t].is_canceled?O("",!0):(g(),x(h,{key:1,name:`pivot[${t}].resultado`,"bg-color":Q(t),label:"Resultado",class:"col-2",required:"",disable:!d(a).pivot[t].is_enabled},null,8,["name","bg-color","disable"])),!d(a).pivot[t].is_canceled&&!d(a).pivot[t].has_items?(g(),x(S,{key:2,label:"Unidad",name:`pivot[${t}].unidad_id`,options:d(a).pivot[t].unidads,hint:_(t),class:"col-2",required:"",disable:!d(a).pivot[t].is_enabled},null,8,["name","options","hint","disable"])):O("",!0),l(h,{label:"Fecha",type:"date",name:`pivot[${t}].fecha_resultado`,required:"",class:"col-2",disable:!d(a).pivot[t].is_enabled},null,8,["name","disable"]),l(J,{class:"col-2 self-center justify-center"},{default:b(()=>[l(Oe,{name:`pivot[${t}].is_enabled`,label:"",dense:""},{default:b(()=>[l(K,null,{default:b(()=>[j(T(d(a).pivot[t].is_enabled?"Deshabilitar.":"Habilitar."),1)]),_:2},1024)]),_:2},1032,["name"]),l(M,{icon:d(a).pivot[t].is_canceled?"fas fa-pen":"fas fa-ban",color:d(a).pivot[t].is_canceled?"warning":"negative",disable:!d(a).pivot[t].is_enabled,round:"",flat:"",size:"sm",onClick:p=>ie(t)},{default:b(()=>[l(K,null,{default:b(()=>[j(T(d(a).pivot[t].is_canceled?"Registrar datos.":"Cancelar examen."),1)]),_:2},1024)]),_:2},1032,["icon","color","disable","onClick"])]),_:2},1024)]),fe(l(X,{bordered:""},{default:b(()=>[(g(!0),I(Y,null,H(d(a).pivot[t].items,(p,E)=>(g(),x(z,{key:E},{default:b(()=>[l(W,null,{default:b(()=>[D("div",Se,[l(S,{label:"Item",name:`item_orden[${p.pivot_index}].item_id`,options:v.value,class:"col-4",required:"",borderless:"",readonly:"",outlined:!1},null,8,["name","options"]),l(h,{name:`item_orden[${p.pivot_index}].resultado`,label:"Resultado",class:"col-2",required:"",disable:!d(a).pivot[t].is_enabled},null,8,["name","disable"]),l(S,{label:"Unidad",name:`item_orden[${p.pivot_index}].unidad_id`,options:d(a).item_orden[p.pivot_index].unidads,class:"col-2",required:"",disable:!d(a).pivot[t].is_enabled},null,8,["name","options","disable"])])]),_:2},1024)]),_:2},1024))),128))]),_:2},1536),[[he,d(a).pivot[t].is_enabled&&!d(a).pivot[t].is_canceled]])]),_:2},1024)]),_:2},1024))),128))]),_:1}),i.withObservaciones?(g(),I("div",Re,[l(h,{label:"Observaciones",type:"textarea",name:"observaciones",class:"col-12"})])):O("",!0),D("div",Ae,[l(J,{class:"col-12 justify-end q-pa-none q-pt-md"},{default:b(()=>[l(M,{label:"Cancelar",color:"primary","no-caps":"",outline:"",onClick:n[0]||(n[0]=f=>s.$emit("cancel"))}),l(M,{label:"Guardar",type:"submit",icon:"fas fa-floppy-disk",color:"primary",loading:d(e),"no-caps":""},null,8,["loading"])]),_:1})])]),_:1},8,["onSubmit"]))}}),je=F({__name:"RegistrarResultadosForm",props:{orden:{type:Object,required:!0},withObservaciones:{type:Boolean,required:!1,default:!1}},emits:["submit","cancel"],setup(i){const q=G(()=>u.orden.examens.data?u.orden.examens.data.map(o=>({label:o.nombre,value:Number(o.id)})):[]),u=i,r=P([]),y=P(),v=P();r.value=u.orden.pivot.map(o=>{let e=[];const c=u.orden.examens.data.find(_=>Number(_.id)==o.examen_id);return e=[{label:"Examen",name:"examen_id",type:"select",options:q.value},{label:"Resultado",name:"resultado",type:"string"},{label:"Unidad",name:"unidad_id",type:"select",options:c?c.unidads.data.map(_=>({label:_.nombre,value:Number(_.id)})):[]},{label:"Fecha",name:"fecha_resultado",type:"date"},{label:"Acciones",name:"actions",type:"array"}],e});const $=R().of(Z(()=>{let o={};return o={examen_id:V().required().label("Examen"),resultado:w().positive().when(["is_enabled","is_canceled","has_items"],{is:(e,c)=>e&&!c,then:e=>e.required(),otherwise:e=>e.nullable()}).transform((e,c)=>c===""?void 0:e).typeError("Debe ingresar un numero").label("Resultado"),fecha_resultado:ee().required().label("Fecha"),unidad_id:w().when(["is_enabled","is_canceled","has_items"],{is:(e,c,_)=>e&&!c&&!_,then:e=>e.required(),otherwise:e=>e.nullable()}).label("Unidad"),is_canceled:k().required().label("Cancelado?"),is_enabled:k().required().label("Hablitad?"),has_items:k().required().label("Tiene items?"),motivo:ee().when(["is_enabled","is_canceled"],{is:!0,then:e=>e.required(),otherwise:e=>e.nullable()}).label("Motivo"),minimo:w(),maximo:w(),unidads:R(),items:R()},U().shape(o)})),m=R().of(Z(()=>{let o={};return o={item_id:V().required().label("Item"),examen_id:V().required().label("Examen"),resultado:w().positive().when(["is_enabled","is_canceled"],{is:(e,c)=>e&&!c,then:e=>e.required(),otherwise:e=>e.nullable()}).transform((e,c)=>c===""?void 0:e).typeError("Debe ingresar un numero").label("Resultado"),unidad_id:w().when(["is_enabled","is_canceled"],{is:(e,c)=>e&&!c,then:e=>e.required(),otherwise:e=>e.nullable()}).label("Unidad"),minimo:w(),maximo:w(),is_canceled:k().required().label("Cancelado?"),is_enabled:k().required().label("Habilitado?")},U().shape(o)}));y.value=U().shape({pivot:$,item_orden:m});const a=u.orden.pivot.map(o=>{var c;const e=u.orden.examens.data.find(_=>Number(_.id)==o.examen_id);return{examen_id:o.examen_id,resultado:o.resultado,fecha_resultado:(c=o.fecha_resultado)!=null?c:ye.now().toISODate(),unidad_id:o.unidad_id,is_canceled:o.is_canceled,is_enabled:!0,has_items:e?e.items.data.length>0:!1,motivo:o.motivo,unidads:e?e.unidads.data.map(_=>({label:_.nombre,value:Number(_.id)})):[],items:u.orden.items.data.map((_,Q)=>({pivot_index:Q,examen_id:_.examen_id})).filter(_=>_.examen_id===Number(e==null?void 0:e.id))}}),A=u.orden.item_orden.map(o=>{const e=u.orden.items.data.find(c=>Number(c.id)==o.item_id);return{item_id:o.item_id,examen_id:e==null?void 0:e.examen_id,resultado:o.resultado,unidad_id:o.unidad_id,is_canceled:o.is_canceled,is_enabled:!0,unidads:e?e.unidads.data.map(c=>({label:c.nombre,value:Number(c.id)})):[]}});return v.value={pivot:a,item_orden:A,observaciones:u.orden.observaciones},(o,e)=>r.value.length>0&&y.value?(g(),x(Qe,{key:0,fields:r.value,"validation-schema":y.value,"initial-values":v.value,"orden-id":Number(i.orden.id),examens:u.orden.examens.data,items:u.orden.items.data,"with-observaciones":i.withObservaciones,onCancel:e[0]||(e[0]=c=>o.$emit("cancel")),onSubmit:e[1]||(e[1]=c=>o.$emit("submit"))},null,8,["fields","validation-schema","initial-values","orden-id","examens","items","with-observaciones"])):O("",!0)}}),Te=F({__name:"OrdenTable",props:{ordens:{type:Array,required:!0},loading:{type:Boolean,required:!1,default:!1},serverPagination:{type:Object,default:void 0}},emits:["request"],setup(i){const{formatDate:q}=$e(),u=[{name:"index",label:"#",field:"index"},{name:"codigo_atencion",align:"center",label:"Codigo Atenci\xF3n",field:"codigo_atencion"},{name:"documento",align:"center",label:"N\xB0 Documento",field:r=>r.paciente.data.numero_documento},{name:"nombre_completo",align:"center",label:"Paciente",field:r=>r.paciente.data.nombre_completo},{name:"medico",align:"center",label:"Medico",field:"medico"},{name:"fecha_registro",align:"left",label:"Fecha Registro",field:"fecha_registro",format:r=>q(r)},{name:"diagnostico",align:"center",label:"Diagnostico",field:"diagnostico"},{name:"estado",align:"center",label:"Estado",field:"estado",sortable:!0},{name:"actions",align:"right",label:"Acciones",field:"actions"}];return(r,y)=>(g(),x(Ee,{data:i.ordens,columns:u,loading:i.loading,"row-key":"id","server-pagination":i.serverPagination,onRequest:y[0]||(y[0]=v=>r.$emit("request",v))},{top:b(()=>[L(r.$slots,"top")]),"body-cell-estado":b(({props:v})=>[l(xe,{props:v},{default:b(()=>[l(qe,{color:v.row.estado_detalle.color,label:v.row.estado_detalle.label},null,8,["color","label"])]),_:2},1032,["props"])]),customActions:b(({props:v})=>[L(r.$slots,"custom-actions",{props:v})]),_:3},8,["data","loading","server-pagination"]))}});export{Te as _,Ue as a,je as b,Ve as u};