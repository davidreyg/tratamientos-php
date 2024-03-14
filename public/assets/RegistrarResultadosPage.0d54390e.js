import{aE as Z,aF as K,Y as E,a1 as P,H as T,o as d,e as y,w as r,ak as $,a_ as j,aZ as L,bc as W,av as U,au as h,ad as q,aU as F,aj as N,a5 as a,ac as w,ab as D,bd as X,a2 as u,b1 as H,r as k,k as I,b4 as R,be as ee,$ as S,aY as ae,bf as oe,aS as C,a0 as x,aa as te,aO as ne,aJ as B,aN as le,aI as ie,a$ as J,Q as se,aV as z,f as G,am as A,al as re,aR as ce,aG as M,b0 as de,b2 as ue,b3 as Q}from"./index.4de37196.js";import{u as me}from"./ExamenCardList.cd77e745.js";import{O as pe,u as O,_ as be}from"./laboratorio.store.cd16b8fc.js";import{u as fe}from"./establecimientoFetchAllQuery.5a0b8b02.js";import"./BaseCheckBoxGroup.0eabbe9b.js";import"./paqueteFetchAllQuery.bca6b3bc.js";import"./PaqueteApi.ddfa6ee5.js";function _e(m){const f=async()=>(await pe.fetchAll(m.value)).data(),{data:i,isLoading:p,isSuccess:s,isError:l,isFetching:b,refetch:_}=Z([K.ORDEN_ALL,m==null?void 0:m.value],f,{keepPreviousData:!0});return{data:i,isLoading:p,isSuccess:s,isError:l,isFetching:b,refetch:_}}const ve={key:4},ye={class:"row"},ge=E({__name:"ResultadoFormDinamico",props:{fields:{type:Array,required:!0},examens:{type:Array,required:!0},initialValues:{type:Object,required:!1,default:void 0},validationSchema:{type:Object,required:!0}},emits:["submit","cancel"],setup(m){const f=m,{handleSubmit:i,setFieldValue:p,values:s}=P({validationSchema:f.validationSchema,initialValues:f.initialValues}),l=i(async t=>{console.log(t)}),b=t=>{let n="";switch(t){case"examen_id":n="col-3";break;case"resultado":n="col-2";break;case"unidad_id":n="col-2";break;case"fecha":n="col-3";break}return n},_=t=>{let n;return!!s.pivot[t].minimo&&!!s.pivot[t].minimo&&(n=`Min: ${s.pivot[t].minimo} - Max: ${s.pivot[t].maximo}`),n},v=t=>{let n;return!!s.pivot[t].minimo&&!!s.pivot[t].minimo&&(s.pivot[t].resultado>s.pivot[t].minimo&&s.pivot[t].resultado<s.pivot[t].maximo?n="positive":n="negative"),n};return f.fields.forEach((t,n)=>{T(()=>s.pivot[n].unidad_id,c=>{const o=f.examens.find(e=>e.id==s.pivot[n].examen_id);if(!!o&&!!c){const e=o.pivot.find(Y=>Y.unidad_id===c),g="pivot["+n+"].minimo",V="pivot["+n+"].maximo";e&&(p(g,e.minimo),p(V,e.maximo))}},{deep:!0,immediate:!0})}),(t,n)=>(d(),y(H,{onSubmit:X(u(l),["prevent"])},{default:r(()=>[(d(!0),$(L,null,j(m.fields,(c,o)=>(d(),$("div",{key:o,class:"row q-col-gutter-sm q-mb-md"},[(d(!0),$(L,null,j(c,(e,g)=>(d(),$("div",{key:g,class:W(b(e.name))},[e.name==="resultado"?U(t.$slots,"resultado",{key:0,index:o},()=>[a(q,{label:e.label,type:e.type,name:`pivot[${o}].${e.name}`,color:v(o),required:""},null,8,["label","type","name","color"])]):h("",!0),e.name==="fecha_resultado"?(d(),y(q,{key:1,label:e.label,type:e.type,name:`pivot[${o}].${e.name}`,required:""},null,8,["label","type","name"])):h("",!0),e.type==="select"&&e.name==="examen_id"?(d(),y(F,{key:2,label:e.label,name:`pivot[${o}].${e.name}`,options:e.options||[],required:"",borderless:"",readonly:"",outlined:!1},null,8,["label","name","options"])):h("",!0),e.type==="select"&&e.name==="unidad_id"?(d(),y(F,{key:3,label:e.label,name:`pivot[${o}].${e.name}`,options:e.options||[],hint:_(o),required:""},null,8,["label","name","options","hint"])):h("",!0),e.name==="actions"?(d(),$("div",ve," botones- falta ")):h("",!0)],2))),128))]))),128)),N("div",ye,[a(D,{class:"col-12 justify-end q-pa-none q-pt-md"},{default:r(()=>[a(w,{label:"Cancelar",color:"primary","no-caps":"",outline:"",onClick:n[0]||(n[0]=c=>t.$emit("cancel"))}),a(w,{label:"Guardar",type:"submit",icon:"fas fa-floppy-disk",color:"primary","no-caps":""})]),_:1})])]),_:3},8,["onSubmit"]))}}),he=E({__name:"RegistrarResultadosForm",props:{orden:{type:Object,required:!0}},emits:["submit","cancel"],setup(m){const f=k({limit:0}),{data:i}=me(f),p=I(()=>i.value?i.value.map(v=>({label:v.nombre,value:Number(v.id)})):[]),s=m,l=k([]),b=k(),_=k();return T(()=>i.value,v=>{if(v){l.value=s.orden.pivot.map(c=>{let o=[];const e=v.find(g=>Number(g.id)==c.examen_id);return o=[{label:"Examen",name:"examen_id",type:"select",options:p.value},{label:"Resultado",name:"resultado",type:"string"},{label:"Unidad",name:"unidad_id",type:"select",options:e?e.unidads.data.map(g=>({label:g.nombre,value:Number(g.id)})):[]},{label:"Fecha",name:"fecha_resultado",type:"date"},{label:"Acciones",name:"actions",type:"array"}],o});const t=R().of(ee(()=>{let c={};return c={examen_id:oe().required().label("Examen"),resultado:C().positive().required().transform((o,e)=>e===""?void 0:o).typeError("Debe ingresar un numero").label("Resultado"),fecha_resultado:x().required().label("Fecha"),unidad_id:C().required().label("Unidad"),minimo:C(),maximo:C()},S().shape(c)}));b.value=S().shape({pivot:t});const n=s.orden.pivot.map(c=>{var o;return{examen_id:c.examen_id,resultado:c.resultado,fecha_resultado:(o=c.fecha_resultado)!=null?o:ae.now().toISODate(),unidad_id:c.unidad_id}});_.value={pivot:n}}},{immediate:!0}),(v,t)=>l.value.length>0&&b.value&&u(i)?(d(),y(ge,{key:0,fields:l.value,"validation-schema":b.value,"initial-values":_.value,examens:u(i),onCancel:t[0]||(t[0]=n=>v.$emit("cancel"))},null,8,["fields","validation-schema","initial-values","examens"])):h("",!0)}}),qe=E({__name:"OrdenDatosForm",props:{orden:{type:Object,required:!0}},emits:["cancel"],setup(m){const f=m,{data:i}=fe(),p=I(()=>i.value?i.value.map(l=>({label:l.nombre,value:Number(l.id)})):[]),s=S().shape({diagnostico:x().trim().min(2).required().label("Diagnostico"),CI10:x().trim().min(2).required().label("CI10"),CPN:x().trim().min(2).required().label("CPN"),EG:x().trim().min(2).required().label("EG"),codigo_atencion:x().trim().min(2).required().label("Codigo de Atencion"),fecha_registro:x().trim().required().label("Fecha de Registro"),medico:x().trim().required().label("M\xE9dico"),examen_ids:R().of(C().required()).required().label("Examenes"),paquete_ids:R().of(C().required()).required().label("Paquetes"),establecimiento_id:C().label("Establecimiento Institucional"),establecimiento_otro:x().label("Otro Establecimiento")});return P({validationSchema:s,initialValues:f.orden}),(l,b)=>(d(),y(te,null,{actions:r(()=>[a(D,{class:"col-12 justify-end q-pa-none q-pt-md"},{default:r(()=>[a(w,{label:"Cancelar",color:"primary","no-caps":"",outline:"",onClick:b[0]||(b[0]=_=>l.$emit("cancel"))})]),_:1})]),default:r(()=>[a(q,{name:"medico",label:"Medico",class:"col-xs-12 col-sm-6",required:"",readonly:"",borderless:"",outlined:!1}),m.orden.establecimiento_id?(d(),y(F,{key:0,options:p.value,name:"establecimiento_id",class:"col-xs-12 col-sm-6",label:"Establecimiento Institucional",loading:!1,required:"",readonly:"",borderless:"",outlined:!1},null,8,["options"])):(d(),y(q,{key:1,name:"establecimiento_otro",label:"Otro establecimiento",class:"col-xs-12 col-sm-6",required:"",readonly:"",borderless:"",outlined:!1})),a(q,{name:"diagnostico",label:"Diagnostico",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1}),a(q,{name:"CI10",label:"CI10",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1}),a(q,{name:"CPN",label:"CPN",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1}),a(q,{name:"EG",label:"EG",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1}),a(q,{name:"codigo_atencion",label:"Codigo de Atenci\xF3n",class:"col-xs-12 col-sm-4",required:"",readonly:"",borderless:"",outlined:!1}),a(q,{name:"fecha_registro",label:"Fecha de Registro",class:"col-xs-12 col-sm-4",type:"date",required:"",readonly:"",borderless:"",outlined:!1})]),_:1}))}}),xe=E({__name:"OrdenTable",props:{ordens:{type:Array,required:!0}},setup(m){const{formatDate:f}=ie(),i=[{name:"fecha_registro",align:"left",label:"Fecha Registro",field:"fecha_registro",format:p=>f(p)},{name:"medico",align:"center",label:"Medico",field:"medico"},{name:"codigo_atencion",align:"center",label:"Codigo Atenci\xF3n",field:"codigo_atencion"},{name:"estado",align:"center",label:"Estado",field:"estado"},{name:"actions",align:"right",label:"Acciones",field:"actions"}];return(p,s)=>(d(),y(u(le),{rows:m.ordens,columns:i,"row-key":"id"},{"body-cell-estado":r(l=>[a(B,{props:l},{default:r(()=>[a(ne,{color:l.row.estado_detalle.color,label:l.row.estado_detalle.label},null,8,["color","label"])]),_:2},1032,["props"])]),"body-cell-actions":r(l=>[a(B,{props:l,class:"text-right"},{default:r(()=>[a(D,{align:"right",class:"q-pa-none q-ma-none"},{default:r(()=>[U(p.$slots,"actions",{id:Number(l.key),estado:l.row.estado})]),_:2},1024)]),_:2},1032,["props"])]),_:3},8,["rows"]))}}),$e={key:0,class:"col-12 row justify-center"},Ce={class:"col-auto"},ke=N("div",{class:"col-12 text-center text-h6"}," Lo sentimos. \xA1No se encontr\xF3 ninguna orden!. Porfavor registre uno para empezar. ",-1),we={key:1},Ee=E({__name:"DatosOrdenTab",props:{paciente:{type:Object,required:!0}},setup(m){const f=m,{ordenSeleccionada:i,isOrdenLoading:p}=J(O()),{fetchOrdenById:s}=O(),l=k({search:`paciente_id:${f.paciente.id};estado:0,1`,searchJoin:"and",limit:0}),{data:b}=_e(l),_=k("list"),v=k(),t=async c=>{v.value=c,await s(c),i.value&&(_.value="view")},n=()=>{i.value=void 0};return T(()=>i.value,c=>{c||(_.value="list")}),(c,o)=>m.paciente?(d(),y(re,{key:0,modelValue:_.value,"onUpdate:modelValue":o[0]||(o[0]=e=>_.value=e),animated:""},{default:r(()=>[a(A,{name:"list"},{default:r(()=>[u(b)&&u(b).data.length===0?(d(),$("div",$e,[N("div",Ce,[a(se,{name:"fas fa-face-frown",size:"xl"})]),ke,a(w,{class:"q-mt-lg",color:"primary",icon:"fas fa-plus","no-caps":"",label:"Registrar nueva orden",outline:"",to:"/laboratorio/registrar-orden"})])):u(b)?(d(),$("div",we,[a(xe,{ordens:u(b).data},{actions:r(({id:e,estado:g})=>[a(w,{color:"primary",icon:"fas fa-file-signature",round:"",flat:"",size:"sm",loading:u(p)&&v.value===e,onClick:V=>t(e)},{default:r(()=>[a(z,null,{default:r(()=>[G("Registrar resultados.")]),_:1})]),_:2},1032,["loading","onClick"]),g===0?(d(),y(w,{key:0,color:"positive",icon:"fas fa-check-double",round:"",flat:"",size:"sm"},{default:r(()=>[a(z,null,{default:r(()=>[G("Confirmar registro.")]),_:1})]),_:1})):h("",!0)]),_:1},8,["ordens"])])):h("",!0)]),_:1}),a(A,{name:"new"},{default:r(()=>[a(be,{"paciente-id":Number(m.paciente.id)},null,8,["paciente-id"])]),_:1}),a(A,{name:"view"},{default:r(()=>[u(i)?(d(),y(qe,{key:0,orden:u(i),onCancel:n},null,8,["orden"])):h("",!0)]),_:1})]),_:1},8,["modelValue"])):h("",!0)}}),Fe={class:"row q-col-gutter-md"},Se={class:"col-12"},Te=E({__name:"RegistrarResultadosPage",setup(m){const{fetchPaciente:f,$reset:i}=O(),{paciente:p,isPacienteLoading:s,ordenSeleccionada:l}=J(O()),{data:b}=ce(),_=I(()=>b.value?b.value.map(o=>({label:o.nombre,value:o.id})):[]),v=S().shape({numero_documento:C().typeError("Debe ingresar un n\xFAmero").min(8).required().label("N\xFAmero de Documento"),tipo_documento_id:x().required().label("Tipo de Documento")}),{handleSubmit:t}=P({validationSchema:v}),n=t(async o=>{i(),await f(o.numero_documento),p.value?M.fire({title:"Exito!",text:"Paciente encontrado correctamente!",icon:"success"}):M.fire({title:"Informaci\xF3n!",text:"No se encontro el paciente indicado!",icon:"info"})}),c=()=>{l.value=void 0};return de(()=>{if(window.confirm("Esta seguro de salir? Tiene cambios sin guardar!"))i();else return!1}),(o,e)=>(d(),$("div",Fe,[a(H,{class:"col-12 row q-col-gutter-lg items-start justify-center",onSubmit:u(n)},{default:r(()=>[a(F,{options:_.value,name:"tipo_documento_id",class:"col-xs-12 col-sm-4",label:"Tipo de Documento",loading:!1,required:""},null,8,["options"]),a(q,{name:"numero_documento",label:"N\xB0 de Documento",class:"col-xs-12 col-sm-4",required:""}),a(D,{class:"col-auto justify-center"},{default:r(()=>[a(w,{color:"primary",outline:"",size:"lg",icon:"search",label:"Buscar","no-caps":"",type:"submit",loading:u(s)},null,8,["loading"])]),_:1})]),_:1},8,["onSubmit"]),N("div",Se,[a(Q,{icon:"fas fa-person",label:"Datos del Paciente",caption:"Editar / Crear",class:"bg-purple-2"},{default:r(()=>[a(ue,{class:"bg-purple-1",paciente:u(p),onCancel:u(i),onSubmit:e[0]||(e[0]=g=>u(f)(g))},null,8,["paciente","onCancel"])]),_:1}),u(p)?(d(),y(Q,{key:0,icon:"fas fa-vials",label:"Datos de la Orden de Lab.",caption:"Editar / Crear"},{default:r(()=>[a(Ee,{paciente:u(p),onCancel:u(i)},null,8,["paciente","onCancel"])]),_:1})):h("",!0),u(l)?(d(),y(Q,{key:1,icon:"fas fa-file-signature",label:"Registrar resultados.",caption:"Editar / Crear"},{default:r(()=>[a(he,{orden:u(l),onCancel:c},null,8,["orden"])]),_:1})):h("",!0)])]))}});export{Te as default};
