import{W as ve,Y as X,k as c,$ as M,a0 as k,aV as n,b0 as be,b6 as O,a1 as _e,r as B,b7 as T,ag as w,o as l,ak as u,a5 as a,w as i,aX as m,ad as h,a2 as o,aj as p,b8 as j,ac as C,at as L,au as v,aQ as P,a9 as I,f as Y,aE as z,aK as D,e as $,a8 as K,a7 as W,aa as fe}from"./index.cb32cbc7.js";import{u as he}from"./categoriaFetchAllQuery.85fdc56f.js";import{E as $e}from"./ExamenApi.cd14626e.js";import{u as ge,a as qe,b as ye}from"./unidadTiposFetchAllQuery.f58b68a0.js";import{u as ke}from"./operadoresFetchAllQuery.f77dd1ee.js";import{u as Ce}from"./unidadFetchAllQuery.e5b29af3.js";import{_ as xe}from"./BaseCheckBox.9aec897f.js";import"./CategoriaApi.a4103a46.js";import"./UnidadApi.e9700d89.js";function we(){return ve(x=>$e.create(x))}const Ue={class:"row"},Ee={key:0,class:"col-xs-12 col-sm-12"},Se={class:"row"},Qe={key:0,class:"text-red text-italic"},Fe={class:"row q-col-gutter-sm q-mb-sm"},Ne={class:"col-auto self-center"},Ve={key:1,class:"col-xs-12 col-sm-12"},Ae={class:"row"},Re={key:0,class:"text-red text-italic"},Me={class:"row q-col-gutter-sm q-mb-sm"},Oe={class:"col-4 self-center"},Be=X({__name:"ExamenCreateForm",emits:["submit","cancel"],setup(x,{emit:g}){const d=g,{data:q}=he(),G=c(()=>q.value?q.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),{data:U}=ge(),H=c(()=>U.value?Object.values(U.value).map(e=>({label:e,value:e})):[]),{data:E}=Ce(),S=c(()=>E.value?Object.values(E.value).map(e=>({label:e.nombre,value:Number(e.id)})):[]),{data:Q}=qe(),F=c(()=>Q.value?Object.values(Q.value).map(e=>({label:e.nombre,value:Number(e.id)})):[]),{data:N}=ye(),J=c(()=>N.value?Object.values(N.value).map(e=>({label:e,value:e})):[]),{data:V}=ke(),Z=c(()=>V.value?Object.entries(V.value).map(([e,s])=>({label:`${s} (${e})`,value:e})):[]),ee=M().shape({nombre:k().trim().min(2).required().label("Nombre"),codigo:n().typeError("Codigo debe ser un numero").positive().required().label("Codigo"),tipo:k().trim().min(2).required().label("Tipo"),categoria_id:n().required().label("Categoria"),is_active:be().required().label("\xBFActivo?"),precio:n().typeError("Precio debe ser un numero").positive().required().label("Precio"),pivot:O().when(["tipo"],{is:e=>e==="unidad",then:e=>e.required().min(1),otherwise:e=>e.nullable()}).of(M({unidad_id:n().typeError("Unidad debe ser un numero").positive().required().label("Unidad"),minimo:n().typeError("Minimo debe ser un numero").min(0).required().label("Minimo"),maximo:n().typeError("Maximo debe ser un numero").positive().when(["tipo"],{is:e=>e==="multivalor",then:e=>e.required(),otherwise:e=>e.nullable()}).label("Maximo"),tipo:k().required().label("Tipo"),operador:k().when(["tipo"],{is:e=>e==="operador",then:e=>e.required(),otherwise:e=>e.nullable()}).label("Operador")})).label("Unidades"),respuesta_ids:O().when(["tipo"],{is:e=>e==="respuesta",then:e=>e.required().min(1),otherwise:e=>e.nullable()}).of(n().required()).label("Respuestas")}),{handleSubmit:ae,setErrors:se,values:b,errors:y}=_e({validationSchema:ee}),_=B(),f=B(),{remove:oe,push:te,fields:A}=T("pivot"),{remove:re,push:le,fields:R}=T("respuesta_ids"),ie=e=>{if(A.value.some(r=>r.value.unidad_id===e.value)){w.warn("Ya has agregado este item");return}te({unidad_id:Number(e.value)}),_.value=void 0},ne=e=>{if(R.value.some(r=>r.value===e.value)){w.warn("Ya has agregado este item");return}le(Number(e.value)),f.value=void 0},{isLoading:ue,mutate:de,reset:ce}=we(),me=ae(async e=>{de(e,{onSuccess:()=>{w.success(),d("submit")},onError:s=>{ce.value(),se(s.data.errors)}})},e=>{console.log(e.errors)});return(e,s)=>(l(),u("div",Ue,[a(fe,{class:"col-xs-12 col-sm-10",loading:o(ue),onSubmit:o(me),onCancel:s[4]||(s[4]=r=>e.$emit("cancel"))},{default:i(()=>[a(m,{options:G.value,name:"categoria_id",label:"Categoria",class:"col-xs-12 col-sm-6"},null,8,["options"]),a(h,{name:"codigo",label:"Codigo",class:"col-xs-12 col-sm-6"}),a(h,{name:"nombre",label:"Nombre",class:"col-xs-12 col-sm-9"}),a(h,{name:"precio",label:"Precio",class:"col-xs-12 col-sm-3"}),a(xe,{name:"is_active",label:"\xBFActivo?",class:"col-xs-12 col-sm-6"}),a(m,{options:H.value,name:"tipo",label:"Tipo",class:"col-xs-12 col-sm-6"},null,8,["options"]),o(b).tipo==="unidad"?(l(),u("div",Ee,[p("div",Se,[a(j,{modelValue:_.value,"onUpdate:modelValue":s[1]||(s[1]=r=>_.value=r),options:S.value,borderless:"",dense:"",label:"Unidades",class:"col-4 q-mb-md"},{after:i(()=>[a(C,{disable:!_.value,round:"",dense:"",icon:"add",color:"positive",onClick:s[0]||(s[0]=r=>ie(_.value))},null,8,["disable"])]),_:1},8,["modelValue","options"])]),o(y).pivot?(l(),u("div",Qe,L(o(y).pivot),1)):v("",!0),a(P,{bordered:""},{default:i(()=>[a(I,{header:""},{default:i(()=>[Y("Seleccionar Unidades")]),_:1}),(l(!0),u(z,null,D(o(A),(r,t)=>(l(),$(W,{key:t},{default:i(()=>[a(K,null,{default:i(()=>[p("div",Fe,[a(m,{label:"Unidades",name:`pivot[${t}].unidad_id`,options:S.value,class:"col-2",required:""},null,8,["name","options"]),o(b).pivot[t].tipo==="operador"?(l(),$(m,{key:0,name:`pivot[${t}].operador`,options:Z.value,label:"Operador",class:"col-3"},null,8,["name","options"])):v("",!0),a(h,{name:`pivot[${t}].minimo`,label:o(b).pivot[t].tipo==="multivalor"?"Minimo":"Valor",class:"col-3"},null,8,["name","label"]),o(b).pivot[t].tipo==="multivalor"?(l(),$(h,{key:1,name:`pivot[${t}].maximo`,label:"Maximo",class:"col-3"},null,8,["name"])):v("",!0),a(m,{options:J.value,name:`pivot[${t}].tipo`,label:"Tipo",class:"col-3"},null,8,["options","name"]),p("div",Ne,[a(C,{icon:"fas fa-trash-can",color:"negative",round:"",flat:"",size:"sm",onClick:pe=>o(oe)(t)},null,8,["onClick"])])])]),_:2},1024)]),_:2},1024))),128))]),_:1})])):v("",!0),o(b).tipo==="respuesta"?(l(),u("div",Ve,[p("div",Ae,[a(j,{modelValue:f.value,"onUpdate:modelValue":s[3]||(s[3]=r=>f.value=r),options:F.value,borderless:"",dense:"",label:"Respuesta",class:"col-4 q-mb-md"},{after:i(()=>[a(C,{disable:!f.value,round:"",dense:"",icon:"add",color:"positive",onClick:s[2]||(s[2]=r=>ne(f.value))},null,8,["disable"])]),_:1},8,["modelValue","options"])]),o(y).respuesta_ids?(l(),u("div",Re,L(o(y).respuesta_ids),1)):v("",!0),a(P,{bordered:""},{default:i(()=>[a(I,{header:""},{default:i(()=>[Y("Seleccionar Respuestas")]),_:1}),(l(!0),u(z,null,D(o(R),(r,t)=>(l(),$(W,{key:t},{default:i(()=>[a(K,null,{default:i(()=>[p("div",Me,[a(m,{label:"Respuesta",name:`respuesta_ids[${t}]`,options:F.value,class:"col-8",required:""},null,8,["name","options"]),p("div",Oe,[a(C,{icon:"fas fa-trash-can",color:"negative",round:"",flat:"",size:"sm",onClick:pe=>o(re)(t)},null,8,["onClick"])])])]),_:2},1024)]),_:2},1024))),128))]),_:1})])):v("",!0)]),_:1},8,["loading","onSubmit"])]))}}),We=X({__name:"ExamenCreatePage",setup(x){return(g,d)=>(l(),$(Be,{onSubmit:d[0]||(d[0]=q=>g.$router.back()),onCancel:d[1]||(d[1]=q=>g.$router.back())}))}});export{We as default};
