import{aH as R,aI as O,aT as $,W as U,Y as S,aU as j,k as E,r as H,$ as W,a0 as u,aV as N,a1 as Y,aW as z,H as X,o as _,e as g,w as x,aX as F,au as q,a5 as a,ac as Z,a2 as l,aY as G,f as J,ad as d,aj as K,aZ as ee,a_ as ae,aa as oe,a$ as se,aS as re,ay as le,ak as ne,ae as te,ag as ie}from"./index.e07e8f59.js";import{_ as ce}from"./SkeletonForm.69637e03.js";import{u as ue}from"./cargoFetchAllQuery.d1b7d9ed.js";import{u as de}from"./establecimientoFetchAllQuery.31c9ed23.js";import"./EstablecimientoApi.571268bd.js";function me(s,n){const f=async()=>(await $.fetchById(s)).data().data,{data:t,isLoading:m,isSuccess:r,isError:v,isFetching:p,refetch:b}=R([O.EMPLEADOS_ALL,s],f,{enabled:n});return{data:t,isLoading:m,isSuccess:r,isError:v,isFetching:p,refetch:b}}function pe(){return U(({data:s,id:n})=>$.update(s,n))}const be={class:"col-xs-12 col-sm-4"},_e=S({__name:"EmpleadoEditForm",props:{empleado:{type:Object,required:!0}},emits:["submit","cancel"],setup(s,{emit:n}){const f=n,t=s,{data:m}=j(),r=E(()=>m.value?m.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),v=H({limit:0}),{data:p}=de(v),b=E(()=>p.value?p.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),{data:y}=ue(),k=E(()=>y.value?y.value.map(e=>({label:e.nombre,value:Number(e.id)})):[]),A=E(()=>{const e=r.value.find(o=>o.value==Number(h.tipo_documento_id));return e?e.label==="DNI":!1}),D=W().shape({nombres:u().trim().required().label("Nombres"),apellido_paterno:u().trim().required().label("Apellido Paterno"),apellido_materno:u().trim().required().label("Apellido Materno"),tipo_documento_id:u().required().label("Tipo de Documento"),direccion:u().trim().required().label("Direccion"),numero_documento:N().typeError("Debe ingresar un n\xFAmero").required().label("N\xFAmero de Documento"),fecha_nacimiento:u().trim().required().label("Fecha de Nacimiento"),telefono:N().typeError("Tel\xE9fono debe ser un numero").integer().positive().required().label("Tel\xE9fono"),edad:N().typeError("Edad debe ser un numero").integer().positive().required().label("Edad"),sexo:u().required().label("Sexo")}),{handleSubmit:T,setErrors:C,values:h,setFieldValue:i,resetForm:Q}=Y({validationSchema:D,initialValues:t.empleado}),{isLoading:B,mutate:L}=pe(),M=T(async e=>{L({data:e,id:t.empleado.id},{onSuccess:()=>{f("submit")},onError:o=>{C(o.data.errors)}})},e=>console.log(e)),{fetch:V,reniec:c,isLoading:w}=z(),I=async()=>{if(await V(h.numero_documento),c.value){i("nombres",c.value.nombres),i("apellido_paterno",c.value.apellido_paterno),i("apellido_materno",c.value.apellido_materno),i("direccion",c.value.direccion),i("sexo",c.value.sexo==="1"?"Masculino":"Femenino");var e=c.value.fecha_nacimiento.split("/");const o=se.local(Number(e[2]),Number(e[1]),Number(e[0]));o.isValid&&i("fecha_nacimiento",o.toISODate())}else Q()},{calcularEdad:P}=re();return X(()=>h.fecha_nacimiento,e=>{e&&i("edad",P(e))}),(e,o)=>(_(),g(oe,{loading:l(B),onSubmit:l(M),onCancel:o[0]||(o[0]=ve=>e.$emit("cancel"))},{default:x(()=>[r.value.length>0?(_(),g(F,{key:0,options:r.value,name:"tipo_documento_id",class:"col-xs-12 col-sm-4",label:"Tipo de Documento",loading:!1,required:""},null,8,["options"])):q("",!0),a(d,{name:"numero_documento",label:"N\xB0 de Documento",class:"col-xs-12 col-sm-4",required:""},{after:x(()=>[A.value?(_(),g(Z,{key:0,round:"",dense:"",icon:"search",color:"primary",loading:l(w),onClick:I},{default:x(()=>[a(G,null,{default:x(()=>[J(" Buscar en RENIEC ")]),_:1})]),_:1},8,["loading"])):q("",!0)]),_:1}),a(F,{options:b.value,name:"establecimiento_id",class:"col-xs-12 col-sm-4",label:"Establecimiento",loading:!1,required:""},null,8,["options"]),a(F,{options:k.value,name:"cargo_id",class:"col-xs-12 col-sm-4",label:"Cargo",loading:!1,required:""},null,8,["options"]),a(d,{name:"nombres",label:"Nombres",class:"col-xs-12 col-sm-4",required:""}),a(d,{name:"apellido_paterno",label:"Apellido Paterno",class:"col-xs-12 col-sm-4",required:""}),a(d,{name:"apellido_materno",label:"Apellido Materno",class:"col-xs-12 col-sm-4",required:""}),K("div",be,[a(ee,{required:"",name:"fecha_nacimiento",label:"Fecha Nacimiento"})]),a(d,{name:"direccion",label:"Direcci\xF3n",class:"col-xs-12 col-sm-4",required:""}),a(d,{name:"telefono",label:"Tel\xE9fono",class:"col-xs-12 col-sm-4",required:""}),a(d,{name:"edad",label:"Edad",class:"col-xs-12 col-sm-4",required:""}),a(ae,{required:"",options:[{label:"Masculino",value:"Masculino"},{label:"Femenino",value:"Femenino"}],name:"sexo",label:"Sexo",class:"col-xs-12 col-sm-8"})]),_:1},8,["loading","onSubmit"]))}}),fe={class:"row"},he=S({__name:"EmpleadoEditPage",props:{id:{type:Number,required:!0}},setup(s){const n=s,f=le(),{data:t,isSuccess:m,isFetching:r}=me(n.id,!0),v=()=>{ie.success("Registro actualizado correctamente"),f.back()};return(p,b)=>(_(),ne("div",fe,[l(r)?(_(),g(te,{key:0,class:"col-12 q-pa-lg"},{default:x(()=>[a(ce,{class:"col-12",inputs:2})]),_:1})):q("",!0),l(m)&&!l(r)&&l(t)?(_(),g(_e,{key:1,empleado:l(t),onSubmit:v,onCancel:b[0]||(b[0]=y=>p.$router.back())},null,8,["empleado"])):q("",!0)]))}});export{he as default};
