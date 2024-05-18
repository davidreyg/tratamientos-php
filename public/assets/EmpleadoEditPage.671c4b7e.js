import{aG as P,aH as U,aS as S,U as j,X as $,aT as O,j as g,r as G,Z as X,$ as d,aU as N,a0 as Z,aV as z,G as H,o as _,d as E,w as x,aW as F,at as q,a4 as a,ab as W,a1 as n,aX as Y,e as J,ac as s,aY as K,a9 as ee,aZ as ae,aR as oe,ax as re,aj as le,ad as se,af as ne}from"./index.0b61b42a.js";import{_ as te}from"./SkeletonForm.a34e76f0.js";import{u as ie}from"./cargoFetchAllQuery.46b29788.js";import{u as ce}from"./establecimientoFetchAllQuery.87bb6dd9.js";import"./EstablecimientoApi.f30e0dee.js";function ue(r,t){const f=async()=>(await S.fetchById(r)).data().data,{data:i,isLoading:m,isSuccess:l,isError:v,isFetching:p,refetch:b}=P([U.EMPLEADOS_ALL,r],f,{enabled:t});return{data:i,isLoading:m,isSuccess:l,isError:v,isFetching:p,refetch:b}}function de(){return j(({data:r,id:t})=>S.update(r,t))}const me=$({__name:"EmpleadoEditForm",props:{empleado:{type:Object,required:!0}},emits:["submit","cancel"],setup(r,{emit:t}){const f=t,i=r,{data:m}=O(),l=g(()=>m.value?m.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),v=G({limit:0}),{data:p}=ce(v),b=g(()=>p.value?p.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),{data:y}=ie(),A=g(()=>y.value?y.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),D=g(()=>{const e=l.value.find(o=>o.value==Number(h.tipo_documento_id));return e?e.label==="DNI":!1}),T=X().shape({nombres:d().trim().required().label("Nombres"),apellido_paterno:d().trim().required().label("Apellido Paterno"),apellido_materno:d().trim().required().label("Apellido Materno"),tipo_documento_id:d().required().label("Tipo de Documento"),direccion:d().trim().required().label("Direccion"),numero_documento:N().typeError("Debe ingresar un n\xFAmero").required().label("N\xFAmero de Documento"),fecha_nacimiento:d().trim().required().label("Fecha de Nacimiento"),telefono:N().typeError("Tel\xE9fono debe ser un numero").integer().positive().required().label("Tel\xE9fono"),edad:N().typeError("Edad debe ser un numero").integer().positive().required().label("Edad"),sexo:d().required().label("Sexo")}),{handleSubmit:k,setErrors:C,values:h,setFieldValue:c,resetForm:Q}=Z({validationSchema:T,initialValues:i.empleado}),{isLoading:B,mutate:L}=de(),M=k(async e=>{L({data:e,id:i.empleado.id},{onSuccess:()=>{f("submit")},onError:o=>{C(o.data.errors)}})},e=>console.log(e)),{fetch:V,reniec:u,isLoading:w}=z(),R=async()=>{if(await V(h.numero_documento),u.value){c("nombres",u.value.nombres),c("apellido_paterno",u.value.apellido_paterno),c("apellido_materno",u.value.apellido_materno),c("direccion",u.value.direccion),c("sexo",u.value.sexo==="1"?"Masculino":"Femenino");var e=u.value.fecha_nacimiento.split("/");const o=ae.local(Number(e[2]),Number(e[1]),Number(e[0]));o.isValid&&c("fecha_nacimiento",o.toISODate())}else Q()},{calcularEdad:I}=oe();return H(()=>h.fecha_nacimiento,e=>{e&&c("edad",I(e))}),(e,o)=>(_(),E(ee,{loading:n(B),onSubmit:n(M),onCancel:o[0]||(o[0]=be=>e.$emit("cancel"))},{default:x(()=>[l.value.length>0?(_(),E(F,{key:0,options:l.value,name:"tipo_documento_id",class:"col-xs-12 col-sm-4",label:"Tipo de Documento",loading:!1,required:""},null,8,["options"])):q("",!0),a(s,{name:"numero_documento",label:"N\xB0 de Documento",class:"col-xs-12 col-sm-4",required:""},{after:x(()=>[D.value?(_(),E(W,{key:0,round:"",dense:"",icon:"search",color:"primary",loading:n(w),onClick:R},{default:x(()=>[a(Y,null,{default:x(()=>[J(" Buscar en RENIEC ")]),_:1})]),_:1},8,["loading"])):q("",!0)]),_:1}),a(F,{options:b.value,name:"establecimiento_id",class:"col-xs-12 col-sm-4",label:"Establecimiento",loading:!1,required:""},null,8,["options"]),a(F,{options:A.value,name:"cargo_id",class:"col-xs-12 col-sm-4",label:"Cargo",loading:!1,required:""},null,8,["options"]),a(s,{name:"nombres",label:"Nombres",class:"col-xs-12 col-sm-4",required:""}),a(s,{name:"apellido_paterno",label:"Apellido Paterno",class:"col-xs-12 col-sm-4",required:""}),a(s,{name:"apellido_materno",label:"Apellido Materno",class:"col-xs-12 col-sm-4",required:""}),a(s,{required:"",class:"col-xs-12 col-sm-4",name:"fecha_nacimiento",label:"Fecha Nacimiento",type:"date"}),a(s,{name:"direccion",label:"Direcci\xF3n",class:"col-xs-12 col-sm-4",required:""}),a(s,{name:"telefono",label:"Tel\xE9fono",class:"col-xs-12 col-sm-4",required:""}),a(s,{name:"edad",label:"Edad",class:"col-xs-12 col-sm-4",required:""}),a(K,{required:"",options:[{label:"Masculino",value:"Masculino"},{label:"Femenino",value:"Femenino"}],name:"sexo",label:"Sexo",class:"col-xs-12 col-sm-8"})]),_:1},8,["loading","onSubmit"]))}}),pe={class:"row"},ge=$({__name:"EmpleadoEditPage",props:{id:{type:Number,required:!0}},setup(r){const t=r,f=re(),{data:i,isSuccess:m,isFetching:l}=ue(t.id,!0),v=()=>{ne.success("Registro actualizado correctamente"),f.back()};return(p,b)=>(_(),le("div",pe,[n(l)?(_(),E(se,{key:0,class:"col-12 q-pa-lg"},{default:x(()=>[a(te,{class:"col-12",inputs:2})]),_:1})):q("",!0),n(m)&&!n(l)&&n(i)?(_(),E(me,{key:1,empleado:n(i),onSubmit:v,onCancel:b[0]||(b[0]=y=>p.$router.back())},null,8,["empleado"])):q("",!0)]))}});export{ge as default};
