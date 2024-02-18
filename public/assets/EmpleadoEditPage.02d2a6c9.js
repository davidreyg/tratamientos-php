import{aD as R,aE as I,aP as S,S as O,W as $,aQ as U,k as g,Y as W,Z as d,aR as y,$ as j,aS as z,G,o as _,e as E,w as x,aT as N,as as h,a3 as a,aa as H,a0 as r,aU as X,f as Y,ab as m,ah as Z,aV as J,aW as K,a8 as ee,aX as ae,aH as oe,ax as se,ai as le,ac as re,ae as ne}from"./index.6499fb8a.js";import{_ as te}from"./SkeletonForm.5f8ca1d5.js";import{u as ie,a as ce}from"./establecimientoFetchAllQuery.cf696c9a.js";function ue(s,n){const f=async()=>(await S.fetchById(s)).data().data,{data:t,isLoading:p,isSuccess:l,isError:b,isFetching:v,refetch:i}=R([I.EMPLEADOS_ALL,s],f,{enabled:n});return{data:t,isLoading:p,isSuccess:l,isError:b,isFetching:v,refetch:i}}function de(){return O(({data:s,id:n})=>S.update(s,n))}const me={class:"col-xs-12 col-sm-4"},pe=$({__name:"EmpleadoEditForm",props:{empleado:{type:Object,required:!0}},emits:["submit","cancel"],setup(s,{emit:n}){const f=n,t=s,{data:p}=U(),l=g(()=>p.value?p.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),{data:b}=ie(),v=g(()=>b.value?b.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),{data:i}=ce(),F=g(()=>i.value?i.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),A=g(()=>{const e=l.value.find(o=>o.value==Number(q.tipo_documento_id));return e?e.label==="DNI":!1}),D=W().shape({nombres:d().trim().required().label("Nombres"),apellido_paterno:d().trim().required().label("Apellido Paterno"),apellido_materno:d().trim().required().label("Apellido Materno"),tipo_documento_id:d().required().label("Tipo de Documento"),direccion:d().trim().required().label("Direccion"),numero_documento:y().typeError("Debe ingresar un n\xFAmero").required().label("N\xFAmero de Documento"),fecha_nacimiento:d().trim().required().label("Fecha de Nacimiento"),telefono:y().typeError("Tel\xE9fono debe ser un numero").integer().positive().required().label("Tel\xE9fono"),edad:y().typeError("Edad debe ser un numero").integer().positive().required().label("Edad"),sexo:d().required().label("Sexo")}),{handleSubmit:k,setErrors:Q,values:q,setFieldValue:c,resetForm:T}=j({validationSchema:D,initialValues:t.empleado}),{isLoading:C,mutate:B}=de(),L=k(async e=>{B({data:e,id:t.empleado.id},{onSuccess:()=>{f("submit")},onError:o=>{Q(o.data.errors)}})},e=>console.log(e)),{fetch:M,reniec:u,isLoading:V}=z(),w=async()=>{if(await M(q.numero_documento),u.value){c("nombres",u.value.nombres),c("apellido_paterno",u.value.apellido_paterno),c("apellido_materno",u.value.apellido_materno),c("direccion",u.value.direccion),c("sexo",u.value.sexo==="1"?"Masculino":"Femenino");var e=u.value.fecha_nacimiento.split("/");const o=ae.local(Number(e[2]),Number(e[1]),Number(e[0]));o.isValid&&c("fecha_nacimiento",o.toISODate())}else T()},{calcularEdad:P}=oe();return G(()=>q.fecha_nacimiento,e=>{e&&c("edad",P(e))}),(e,o)=>(_(),E(ee,{loading:r(C),onSubmit:r(L),onCancel:o[0]||(o[0]=_e=>e.$emit("cancel"))},{default:x(()=>[l.value.length>0?(_(),E(N,{key:0,options:l.value,name:"tipo_documento_id",class:"col-xs-12 col-sm-4",label:"Tipo de Documento",loading:!1,required:""},null,8,["options"])):h("",!0),a(m,{name:"numero_documento",label:"N\xB0 de Documento",class:"col-xs-12 col-sm-4",required:""},{after:x(()=>[A.value?(_(),E(H,{key:0,round:"",dense:"",icon:"search",color:"primary",loading:r(V),onClick:w},{default:x(()=>[a(X,null,{default:x(()=>[Y(" Buscar en RENIEC ")]),_:1})]),_:1},8,["loading"])):h("",!0)]),_:1}),a(N,{options:v.value,name:"establecimiento_id",class:"col-xs-12 col-sm-4",label:"Establecimiento",loading:!1,required:""},null,8,["options"]),a(N,{options:F.value,name:"cargo_id",class:"col-xs-12 col-sm-4",label:"Cargo",loading:!1,required:""},null,8,["options"]),a(m,{name:"nombres",label:"Nombres",class:"col-xs-12 col-sm-4",required:""}),a(m,{name:"apellido_paterno",label:"Apellido Paterno",class:"col-xs-12 col-sm-4",required:""}),a(m,{name:"apellido_materno",label:"Apellido Materno",class:"col-xs-12 col-sm-4",required:""}),Z("div",me,[a(J,{required:"",name:"fecha_nacimiento",label:"Fecha Nacimiento"})]),a(m,{name:"direccion",label:"Direcci\xF3n",class:"col-xs-12 col-sm-4",required:""}),a(m,{name:"telefono",label:"Tel\xE9fono",class:"col-xs-12 col-sm-4",required:""}),a(m,{name:"edad",label:"Edad",class:"col-xs-12 col-sm-4",required:""}),a(K,{required:"",options:[{label:"Masculino",value:"Masculino"},{label:"Femenino",value:"Femenino"}],name:"sexo",label:"Sexo",class:"col-xs-12 col-sm-8"})]),_:1},8,["loading","onSubmit"]))}}),be={class:"row"},Ee=$({__name:"EmpleadoEditPage",props:{id:{type:Number,required:!0}},setup(s){const n=s,f=se(),{data:t,isSuccess:p,isFetching:l}=ue(n.id,!0),b=()=>{ne.success("Registro actualizado correctamente"),f.back()};return(v,i)=>(_(),le("div",be,[r(l)?(_(),E(re,{key:0,class:"col-12 q-pa-lg"},{default:x(()=>[a(te,{class:"col-12",inputs:2})]),_:1})):h("",!0),r(p)&&!r(l)&&r(t)?(_(),E(pe,{key:1,empleado:r(t),onSubmit:b,onCancel:i[0]||(i[0]=F=>v.$router.back())},null,8,["empleado"])):h("",!0)]))}});export{Ee as default};
