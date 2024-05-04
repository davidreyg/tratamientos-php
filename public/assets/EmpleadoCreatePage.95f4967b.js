import{aT as L,W as P,Y as N,aU as I,k as m,r as R,$ as U,a0 as s,aV as b,a1 as W,ag as Y,aW as j,H,o as v,e as x,w as d,a5 as a,aX as _,ac as O,a2 as f,aY as X,f as Z,au as z,ad as t,aj as G,aZ as J,a_ as K,aa as ee,a$ as ae,aS as oe}from"./index.e07e8f59.js";import{u as re}from"./cargoFetchAllQuery.d1b7d9ed.js";import{u as le}from"./establecimientoFetchAllQuery.31c9ed23.js";import"./EstablecimientoApi.571268bd.js";class ne{static async run(i){try{await L.create(i)}catch(r){throw r}}}function se(){return P(c=>ne.run(c))}const te={class:"col-xs-12 col-sm-4"},ie=N({__name:"EmpleadoCreateForm",emits:["submit","cancel"],setup(c,{emit:i}){const r=i,{data:u}=I(),q=m(()=>u.value?u.value.map(e=>({label:e.nombre,value:e.id})):[]),$=R({limit:0}),{data:g}=le($),h=m(()=>g.value?g.value.map(e=>({label:e.nombre,value:e.id})):[]),{data:E}=re(),F=m(()=>E.value?E.value.map(e=>({label:e.nombre,value:e.id})):[]),y=m(()=>{const e=q.value.find(o=>o.value==Number(p.tipo_documento_id));return e?e.label==="DNI":!1}),C=U().shape({nombres:s().trim().required().label("Nombres"),apellido_paterno:s().trim().required().label("Apellido Paterno"),apellido_materno:s().trim().required().label("Apellido Materno"),tipo_documento_id:s().required().label("Tipo de Documento"),direccion:s().trim().required().label("Direccion"),numero_documento:b().typeError("Debe ingresar un n\xFAmero").required().label("N\xFAmero de Documento"),fecha_nacimiento:s().trim().required().label("Fecha de Nacimiento"),telefono:b().typeError("Tel\xE9fono debe ser un numero").integer().positive().required().label("Tel\xE9fono"),edad:b().typeError("Edad debe ser un numero").integer().positive().required().label("Edad"),sexo:s().required().label("Sexo")}),{handleSubmit:S,setErrors:T,values:p,setFieldValue:l,resetForm:A}=W({validationSchema:C}),{isLoading:D,mutate:k}=se(),M=S(async e=>{k(e,{onSuccess:()=>{Y.success(),r("submit")},onError:o=>{T(o.data.errors)}})},e=>console.log(e)),{fetch:V,reniec:n,isLoading:w}=j(),B=async()=>{if(await V(p.numero_documento),n.value){l("nombres",n.value.nombres),l("apellido_paterno",n.value.apellido_paterno),l("apellido_materno",n.value.apellido_materno),l("direccion",n.value.direccion),l("sexo",n.value.sexo==="1"?"Masculino":"Femenino");var e=n.value.fecha_nacimiento.split("/");const o=ae.local(Number(e[2]),Number(e[1]),Number(e[0]));o.isValid&&l("fecha_nacimiento",o.toISODate())}else A()},{calcularEdad:Q}=oe();return H(()=>p.fecha_nacimiento,e=>{e&&l("edad",Q(e))}),(e,o)=>(v(),x(ee,{loading:f(D),onSubmit:f(M),onCancel:o[0]||(o[0]=ce=>e.$emit("cancel"))},{default:d(()=>[a(_,{options:q.value,name:"tipo_documento_id",class:"col-xs-12 col-sm-4",label:"Tipo de Documento",loading:!1,required:""},null,8,["options"]),a(t,{name:"numero_documento",label:"N\xB0 de Documento",class:"col-xs-12 col-sm-4",required:""},{after:d(()=>[y.value?(v(),x(O,{key:0,round:"",dense:"",icon:"search",color:"primary",loading:f(w),onClick:B},{default:d(()=>[a(X,null,{default:d(()=>[Z(" Buscar en RENIEC ")]),_:1})]),_:1},8,["loading"])):z("",!0)]),_:1}),a(_,{options:h.value,name:"establecimiento_id",class:"col-xs-12 col-sm-4",label:"Establecimiento",loading:!1,required:""},null,8,["options"]),a(_,{options:F.value,name:"cargo_id",class:"col-xs-12 col-sm-4",label:"Cargo",loading:!1,required:""},null,8,["options"]),a(t,{name:"nombres",label:"Nombres",class:"col-xs-12 col-sm-4",required:""}),a(t,{name:"apellido_paterno",label:"Apellido Paterno",class:"col-xs-12 col-sm-4",required:""}),a(t,{name:"apellido_materno",label:"Apellido Materno",class:"col-xs-12 col-sm-4",required:""}),G("div",te,[a(J,{required:"",name:"fecha_nacimiento",label:"Fecha Nacimiento"})]),a(t,{name:"direccion",label:"Direcci\xF3n",class:"col-xs-12 col-sm-4",required:""}),a(t,{name:"telefono",label:"Tel\xE9fono",class:"col-xs-12 col-sm-4",required:""}),a(t,{name:"edad",label:"Edad",class:"col-xs-12 col-sm-4",required:""}),a(K,{required:"",options:[{label:"Masculino",value:"Masculino"},{label:"Femenino",value:"Femenino"}],name:"sexo",label:"Sexo",class:"col-xs-12 col-sm-8"})]),_:1},8,["loading","onSubmit"]))}}),be=N({__name:"EmpleadoCreatePage",setup(c){return(i,r)=>(v(),x(ie,{onSubmit:r[0]||(r[0]=u=>i.$router.back()),onCancel:r[1]||(r[1]=u=>i.$router.back())}))}});export{be as default};
