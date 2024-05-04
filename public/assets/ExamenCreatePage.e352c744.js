import{W as de,Y as K,k as g,$ as R,a0 as F,aV as n,b0 as ce,b1 as M,a1 as me,r as A,b2 as B,ag as C,o as l,ak as u,a5 as s,w as r,aX as h,ad as v,a2 as t,aj as c,b3 as j,ac as $,at as L,au as x,aQ as P,a9 as T,f as I,aE as O,aK as Y,e as k,a8 as z,a7 as D,aa as pe}from"./index.c8292963.js";import{u as ve}from"./categoriaFetchAllQuery.1bb289be.js";import{E as be}from"./ExamenApi.6a42cf46.js";import{u as _e,a as fe}from"./respuestaFetchAllQuery.850e19de.js";import{u as ge}from"./unidadFetchAllQuery.e159dcb5.js";import"./CategoriaApi.6dbb760e.js";import"./UnidadApi.c7042b08.js";function he(){return de(q=>be.create(q))}const $e={class:"row"},xe={key:0,class:"col-xs-12 col-sm-12"},qe={class:"row"},Ce={key:0,class:"text-red text-italic"},ke={class:"row q-col-gutter-sm q-mb-sm"},ye={class:"col-auto self-center"},Ue={key:1,class:"col-xs-12 col-sm-12"},Ee={class:"row"},Se={key:0,class:"text-red text-italic"},we={class:"row q-col-gutter-sm q-mb-sm"},Ne={class:"col-4 self-center"},Qe=K({__name:"ExamenCreateForm",emits:["submit","cancel"],setup(q,{emit:b}){const d=b,{data:_}=ve(),W=g(()=>_.value?_.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),{data:y}=_e(),X=g(()=>y.value?Object.values(y.value).map(e=>({label:e,value:e})):[]),{data:U}=ge(),E=g(()=>U.value?Object.values(U.value).map(e=>({label:e.nombre,value:Number(e.id)})):[]),{data:S}=fe(),w=g(()=>S.value?Object.values(S.value).map(e=>({label:e.nombre,value:Number(e.id)})):[]),G=R().shape({nombre:F().trim().min(2).required().label("Nombre"),codigo:n().typeError("Codigo debe ser un numero").positive().required().label("Codigo"),tipo:F().trim().min(2).required().label("Tipo"),categoria_id:n().required().label("Categoria"),is_active:ce().required().label("\xBFActivo?"),precio:n().typeError("Precio debe ser un numero").positive().required().label("Precio"),pivot:M().when(["tipo"],{is:e=>e==="unidad",then:e=>e.required().min(1),otherwise:e=>e.nullable()}).of(R({unidad_id:n().typeError("Unidad debe ser un numero").positive().required().label("Unidad"),minimo:n().typeError("Minimo debe ser un numero").positive().required().label("Minimo"),maximo:n().typeError("Maximo debe ser un numero").positive().required().label("Maximo")})).label("Unidades"),respuesta_ids:M().when(["tipo"],{is:e=>e==="respuesta",then:e=>e.required().min(1),otherwise:e=>e.nullable()}).of(n().required()).label("Respuestas")}),{handleSubmit:H,setErrors:J,values:N,errors:f}=me({validationSchema:G}),m=A(),p=A(),{remove:Z,push:ee,fields:Q}=B("pivot"),{remove:se,push:ae,fields:V}=B("respuesta_ids"),oe=e=>{if(Q.value.some(o=>o.value.unidad_id===e.value)){C.warn("Ya has agregado este item");return}ee({unidad_id:Number(e.value)}),m.value=void 0},te=e=>{if(V.value.some(o=>o.value===e.value)){C.warn("Ya has agregado este item");return}ae(Number(e.value)),p.value=void 0},{isLoading:re,mutate:le,reset:ie}=he(),ne=H(async e=>{le(e,{onSuccess:()=>{C.success(),d("submit")},onError:a=>{ie.value(),J(a.data.errors)}})},e=>{console.log(e.errors)});return(e,a)=>(l(),u("div",$e,[s(pe,{class:"col-xs-12 col-sm-10",loading:t(re),onSubmit:t(ne),onCancel:a[4]||(a[4]=o=>e.$emit("cancel"))},{default:r(()=>[s(h,{options:W.value,name:"categoria_id",label:"Categoria",class:"col-xs-12 col-sm-6"},null,8,["options"]),s(v,{name:"codigo",label:"Codigo",class:"col-xs-12 col-sm-6"}),s(v,{name:"nombre",label:"Nombre",class:"col-xs-12 col-sm-9"}),s(v,{name:"precio",label:"Precio",class:"col-xs-12 col-sm-3"}),s(h,{options:X.value,name:"tipo",label:"Tipo",class:"col-xs-12 col-sm-6"},null,8,["options"]),t(N).tipo==="unidad"?(l(),u("div",xe,[c("div",qe,[s(j,{modelValue:m.value,"onUpdate:modelValue":a[1]||(a[1]=o=>m.value=o),options:E.value,borderless:"",dense:"",name:"unidadees1",label:"Unidades",class:"col-4 q-mb-md"},{after:r(()=>[s($,{disable:!m.value,round:"",dense:"",icon:"add",color:"positive",onClick:a[0]||(a[0]=o=>oe(m.value))},null,8,["disable"])]),_:1},8,["modelValue","options"])]),t(f).pivot?(l(),u("div",Ce,L(t(f).pivot),1)):x("",!0),s(P,{bordered:""},{default:r(()=>[s(T,{header:""},{default:r(()=>[I("Seleccionar Unidades")]),_:1}),(l(!0),u(O,null,Y(t(Q),(o,i)=>(l(),k(D,{key:i},{default:r(()=>[s(z,null,{default:r(()=>[c("div",ke,[s(h,{label:"Unidades",name:`pivot[${i}].unidad_id`,options:E.value,class:"col-3",required:""},null,8,["name","options"]),s(v,{name:`pivot[${i}].minimo`,label:"Minimo",class:"col-4"},null,8,["name"]),s(v,{name:`pivot[${i}].maximo`,label:"Maximo",class:"col-4"},null,8,["name"]),c("div",ye,[s($,{icon:"fas fa-trash-can",color:"negative",round:"",flat:"",size:"sm",onClick:ue=>t(Z)(i)},null,8,["onClick"])])])]),_:2},1024)]),_:2},1024))),128))]),_:1})])):x("",!0),t(N).tipo==="respuesta"?(l(),u("div",Ue,[c("div",Ee,[s(j,{modelValue:p.value,"onUpdate:modelValue":a[3]||(a[3]=o=>p.value=o),options:w.value,borderless:"",dense:"",name:"respuestas1",label:"Respuesta",class:"col-4 q-mb-md"},{after:r(()=>[s($,{disable:!p.value,round:"",dense:"",icon:"add",color:"positive",onClick:a[2]||(a[2]=o=>te(p.value))},null,8,["disable"])]),_:1},8,["modelValue","options"])]),t(f).respuesta_ids?(l(),u("div",Se,L(t(f).respuesta_ids),1)):x("",!0),s(P,{bordered:""},{default:r(()=>[s(T,{header:""},{default:r(()=>[I("Seleccionar Respuestas")]),_:1}),(l(!0),u(O,null,Y(t(V),(o,i)=>(l(),k(D,{key:i},{default:r(()=>[s(z,null,{default:r(()=>[c("div",we,[s(h,{label:"Respuesta",name:`respuesta_ids[${i}]`,options:w.value,class:"col-8",required:""},null,8,["name","options"]),c("div",Ne,[s($,{icon:"fas fa-trash-can",color:"negative",round:"",flat:"",size:"sm",onClick:ue=>t(se)(i)},null,8,["onClick"])])])]),_:2},1024)]),_:2},1024))),128))]),_:1})])):x("",!0)]),_:1},8,["loading","onSubmit"])]))}}),Le=K({__name:"ExamenCreatePage",setup(q){return(b,d)=>(l(),k(Qe,{onSubmit:d[0]||(d[0]=_=>b.$router.back()),onCancel:d[1]||(d[1]=_=>b.$router.back())}))}});export{Le as default};
