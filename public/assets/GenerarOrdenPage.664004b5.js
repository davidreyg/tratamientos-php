import{Y as f,o as p,e as $,w as o,a5 as e,ad as l,aa as D,r as _,f as g,am as m,al as F,aj as b,a$ as S,b0 as T,b1 as B,aR as E,k as N,$ as L,aS as Q,a0 as k,a1 as V,aG as v,b2 as A,ak as G,aU as I,ab as O,ac as R,a2 as c,b3 as j,b4 as M,b5 as h}from"./index.1b248b2f.js";const U=f({__name:"OrdenCreateForm",setup(t){return console.log("first"),(a,n)=>(p(),$(D,null,{default:o(()=>[e(l,{name:"diagnostico",label:"Diagnostico",class:"col-xs-12 col-sm-4",required:""}),e(l,{name:"CI10",label:"CI10",class:"col-xs-12 col-sm-4",required:""}),e(l,{name:"CPN",label:"CPN",class:"col-xs-12 col-sm-4",required:""}),e(l,{name:"EG",label:"EG",class:"col-xs-12 col-sm-4",required:""}),e(l,{name:"codigo_atencion",label:"Codigo de Atenci\xF3n",class:"col-xs-12 col-sm-4",required:""}),e(l,{name:"fecha_registro",label:"Fecha de Registro",class:"col-xs-12 col-sm-4",type:"date",required:""})]),_:1}))}}),z=b("div",{class:"text-h6"},"Mails",-1),Y=b("div",{class:"text-h6"},"Movies",-1),H=f({__name:"DatosOrdenTab",setup(t){const a=_("new");return(n,s)=>(p(),$(F,{modelValue:a.value,"onUpdate:modelValue":s[0]||(s[0]=u=>a.value=u),animated:""},{default:o(()=>[e(m,{name:"mails"},{default:o(()=>[z,g(" Lorem ipsum dolor sit amet consectetur adipisicing elit. ")]),_:1}),e(m,{name:"new"},{default:o(()=>[e(U)]),_:1}),e(m,{name:"movies"},{default:o(()=>[Y,g(" Lorem ipsum dolor sit amet consectetur adipisicing elit. ")]),_:1})]),_:1},8,["modelValue"]))}}),C=S("laboratorio-form",()=>{const t=_(),a=_(!1);function n(){t.value=void 0}function s(r){t.value=r}async function u(r){a.value=!0;try{t.value=void 0,t.value=await T.run(r),a.value=!1}catch(d){throw a.value=!1,d}}return{paciente:t,isPacienteLoading:a,$reset:n,setPaciente:s,fetchPaciente:u}}),J={class:"row q-col-gutter-md"},K={class:"col-12"},X=f({__name:"GenerarOrdenPage",setup(t){const{fetchPaciente:a,$reset:n}=C(),{paciente:s,isPacienteLoading:u}=B(C()),{data:r}=E(),d=N(()=>r.value?r.value.map(i=>({label:i.nombre,value:i.id})):[]),w=L().shape({numero_documento:Q().typeError("Debe ingresar un n\xFAmero").min(8).required().label("N\xFAmero de Documento"),tipo_documento_id:k().required().label("Tipo de Documento")}),{handleSubmit:P}=V({validationSchema:w}),q=P(async i=>{await a(i.numero_documento),s.value?v.fire({title:"Exito!",text:"Paciente encontrado correctamente!",icon:"success"}):v.fire({title:"Informaci\xF3n!",text:"No se encontro el paciente indicado!",icon:"info"})});return A(()=>{if(window.confirm("Esta seguro de salir? Tiene cambios sin guardar!"))n();else return!1}),(i,x)=>(p(),G("div",J,[e(j,{class:"col-12 row q-col-gutter-lg items-start justify-center",onSubmit:c(q)},{default:o(()=>[e(I,{options:d.value,name:"tipo_documento_id",class:"col-xs-12 col-sm-4",label:"Tipo de Documento",loading:!1,required:""},null,8,["options"]),e(l,{name:"numero_documento",label:"N\xB0 de Documento",class:"col-xs-12 col-sm-4",required:""}),e(O,{class:"col-auto justify-center"},{default:o(()=>[e(R,{color:"primary",outline:"",size:"lg",icon:"search",label:"Buscar","no-caps":"",type:"submit",loading:c(u)},null,8,["loading"])]),_:1})]),_:1},8,["onSubmit"]),b("div",K,[e(h,{icon:"fas fa-person",label:"Datos del Paciente",caption:"Editar / Crear",class:"bg-purple-2"},{default:o(()=>[e(M,{class:"bg-purple-1",paciente:c(s),onCancel:c(n),onSubmit:x[0]||(x[0]=y=>c(a)(y))},null,8,["paciente","onCancel"])]),_:1}),e(h,{icon:"fas fa-vials",label:"Datos de la Orden de Lab.",caption:"Editar / Crear"},{default:o(()=>[e(H,{paciente:c(s),onCancel:c(n)},null,8,["paciente","onCancel"])]),_:1})])]))}});export{X as default};