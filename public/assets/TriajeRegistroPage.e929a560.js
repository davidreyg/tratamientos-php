var se=Object.defineProperty;var oe=(e,a,i)=>a in e?se(e,a,{enumerable:!0,configurable:!0,writable:!0,value:i}):e[a]=i;var L=(e,a,i)=>(oe(e,typeof a!="symbol"?a+"":a,i),i);import{W as O,b6 as A,aE as J,aF as W,a as re,Y as j,a1 as P,ag as Z,o as m,e as h,w as y,ak as S,a_ as w,ad as k,aZ as q,a2 as _,aa as K,r as $,H as R,b7 as X,b8 as ee,$ as T,b9 as ae,aY as le,au as D,ba as te,aS as V,x as M,a5 as f,Q as U,a8 as I,f as G,a7 as H,aP as ue,aH as Y,aG as F,aI as ce,bb as ie,bc as B,ac as ne,am as Q,al as de,aR as me,k as fe,a0 as pe,bd as be,aU as ve,ab as ge,be as ye,aj as _e,bf as he,bg as z}from"./index.39fb80a1.js";import{_ as Se}from"./BaseTable.4045ae94.js";function $e(){return O(e=>A.create(e))}function je(){return O(e=>A.delete(e))}function xe(e,a){const i=async()=>(await A.findById(e)).data().data,{data:c,isLoading:l,isSuccess:s,isError:n,isFetching:t,refetch:p}=J([W.TRIAJE_ALL,e],i,{enabled:a});return{data:c,isLoading:l,isSuccess:s,isError:n,isFetching:t,refetch:p}}function qe(){return O(({data:e,id:a})=>A.update(e,a))}const N=class{static async fetchAll(a){return await N._api.get(N._endpoint,a)}};let E=N;L(E,"_api",re),L(E,"_endpoint","/signos");function Te(e){const a=async()=>(await E.fetchAll(e==null?void 0:e.value)).data().data,{data:i,isLoading:c,isSuccess:l,isError:s,isFetching:n,refetch:t}=J([W.SIGNO_ALL],a);return{data:i,isLoading:c,isSuccess:l,isError:s,isFetching:n,refetch:t}}const we=j({__name:"FormDinamico",props:{fields:{type:Array,required:!0},initialValues:{type:Object,required:!1,default:void 0},validationSchema:{type:Object,required:!0}},emits:["submit","cancel"],setup(e,{emit:a}){const i=a,c=e,{handleSubmit:l,setErrors:s,resetForm:n}=P({validationSchema:c.validationSchema,initialValues:c.initialValues}),{mutateAsync:t,reset:p,isLoading:g}=$e(),o=l(async b=>{await t(b,{onSuccess:()=>{Z.success(),i("submit")},onError:d=>{p.value(),s(d.data.errors)}})}),u=()=>{n(),i("cancel")};return(b,d)=>(m(),h(K,{loading:_(g),onSubmit:_(o),onCancel:u},{default:y(()=>[(m(!0),S(q,null,w(e.fields.filter(r=>r.type!=="array"),(r,v)=>(m(),h(k,{key:v,name:r.name,label:r.label,suffix:r.suffix,type:r.type,"stack-label":!0,class:"col-xs-12 col-sm-4"},null,8,["name","label","suffix","type"]))),128)),(m(!0),S(q,null,w(e.fields.filter(r=>r.type==="array"),(r,v)=>(m(),S("div",{key:v,class:"col-12 row q-col-gutter-md"},[(m(!0),S(q,null,w(r.fields,(x,C)=>(m(),h(k,{key:C,name:`pivot[${C}].valor`,label:x.label,suffix:x.suffix,"stack-label":!0,class:"col-xs-12 col-sm-4"},null,8,["name","label","suffix"]))),128))]))),128))]),_:1},8,["loading","onSubmit"]))}}),Ce=j({__name:"TriajeCreateForm",props:{pacienteId:{type:Number,required:!0}},emits:["submit","cancel"],setup(e){const a=e,i=$({search:"estado:1"}),{data:c}=Te(i),l=$([]),s=$(),n=$();return R(()=>c.value,t=>{if(t){const p=t.map(b=>({label:b.nombre,name:b.nombre,type:"number",suffix:b.unidad}));l.value=[{name:"fecha_registro",label:"Fecha Registro",type:"date"},{name:"pivot",label:"Signos",type:"array",fields:p}];const g=X().of(ee(b=>{const d=t.find(v=>v.id==b.signo_id);let r={};return d&&(r={signo_id:te().when([],{is:()=>d.is_required,then:v=>v.required(),otherwise:v=>v.optional()}).label("Id del signo"),valor:V().positive().when([],{is:()=>d.is_required,then:v=>v.required(),otherwise:v=>v.optional()}).transform((v,x)=>x===""?void 0:v).typeError("Debe ingresar un numero").label(d.nombre)}),T().shape(r)})),o=T().shape({fecha_registro:ae().required().label("Fecha Registro")}).required();s.value=o.concat(T().shape({pivot:g}));const u=t.map(b=>({signo_id:b.id,valor:void 0}));n.value={fecha_registro:le.now().toISODate(),paciente_id:a.pacienteId,pivot:u}}},{immediate:!0}),(t,p)=>l.value.length>0&&s.value?(m(),h(we,{key:0,fields:l.value,"validation-schema":s.value,"initial-values":n.value,onCancel:p[0]||(p[0]=g=>t.$emit("cancel")),onSubmit:p[1]||(p[1]=g=>t.$emit("submit"))},null,8,["fields","validation-schema","initial-values"])):D("",!0)}}),Ee=j({__name:"FormDinamicoEdit",props:{fields:{type:Array,required:!0},initialValues:{type:Object,required:!1,default:void 0},validationSchema:{type:Object,required:!0},triajeId:{type:Number,required:!0}},emits:["submit","cancel"],setup(e,{emit:a}){const i=a,c=e,{handleSubmit:l,setErrors:s,resetForm:n}=P({validationSchema:c.validationSchema,initialValues:c.initialValues}),{mutateAsync:t,reset:p,isLoading:g}=qe(),o=l(async b=>{await t({data:b,id:c.triajeId},{onSuccess:()=>{Z.success(),i("submit")},onError:d=>{p.value(),s(d.data.errors)}})}),u=()=>{n(),i("cancel")};return(b,d)=>(m(),h(K,{loading:_(g),onSubmit:_(o),onCancel:u},{default:y(()=>[(m(!0),S(q,null,w(e.fields.filter(r=>r.type!=="array"),(r,v)=>(m(),h(k,{key:v,name:r.name,label:r.label,suffix:r.suffix,type:r.type,"stack-label":!0,class:"col-xs-12 col-sm-4"},null,8,["name","label","suffix","type"]))),128)),(m(!0),S(q,null,w(e.fields.filter(r=>r.type==="array"),(r,v)=>(m(),S("div",{key:v,class:"col-12 row q-col-gutter-md"},[(m(!0),S(q,null,w(r.fields,(x,C)=>(m(),h(k,{key:C,name:`pivot[${C}].valor`,label:x.label,suffix:x.suffix,"stack-label":!0,class:"col-xs-12 col-sm-4"},null,8,["name","label","suffix"]))),128))]))),128))]),_:1},8,["loading","onSubmit"]))}}),Fe=j({__name:"TriajeEditForm",props:{triajeId:{type:Number,required:!0}},emits:["submit","cancel"],setup(e){const a=e,{data:i}=xe(a.triajeId,!0),c=$([]),l=$(),s=$();return R(()=>i.value,n=>{if(n){const t=n.signos.data.map(o=>({label:o.nombre,name:o.nombre,type:"number",suffix:o.unidad}));c.value=[{name:"fecha_registro",label:"Fecha Registro",type:"date"},{name:"pivot",label:"Signos",type:"array",fields:t}];const p=X().of(ee(o=>{const u=n.signos.data.find(d=>d.id==o.signo_id);let b={};return u&&(b={signo_id:te().when([],{is:()=>u.is_required,then:d=>d.required(),otherwise:d=>d.optional()}).label("Id del signo"),valor:V().positive().when([],{is:()=>u.is_required,then:d=>d.required(),otherwise:d=>d.optional()}).transform((d,r)=>r===""?void 0:d).typeError("Debe ingresar un numero").label(u.nombre)}),T().shape(b)})),g=T().shape({fecha_registro:ae().required().label("Fecha Registro")}).required();l.value=g.concat(T().shape({pivot:p})),s.value={fecha_registro:n.fecha_registro,paciente_id:n.paciente_id,pivot:n.pivot}}},{immediate:!0}),(n,t)=>c.value.length>0&&l.value?(m(),h(Ee,{key:0,fields:c.value,"validation-schema":l.value,"initial-values":s.value,"triaje-id":e.triajeId,onCancel:t[0]||(t[0]=p=>n.$emit("cancel")),onSubmit:t[1]||(t[1]=p=>n.$emit("submit"))},null,8,["fields","validation-schema","initial-values","triaje-id"])):D("",!0)}}),ke=j({__name:"TriajesTableActions",props:{id:{type:String,required:!0}},emits:["destroy","edit"],setup(e){return(a,i)=>(m(),S(q,null,[M((m(),h(H,{clickable:"",onClick:i[0]||(i[0]=c=>a.$emit("edit",e.id))},{default:y(()=>[f(I,{avatar:""},{default:y(()=>[f(U,{name:"fas fa-pen-to-square",color:"warning"})]),_:1}),f(I,null,{default:y(()=>[G("Editar")]),_:1})]),_:1})),[[Y]]),f(ue),M((m(),h(H,{clickable:"",onClick:i[1]||(i[1]=c=>a.$emit("destroy",e.id))},{default:y(()=>[f(I,{avatar:""},{default:y(()=>[f(U,{name:"fas fa-trash-can",color:"negative"})]),_:1}),f(I,null,{default:y(()=>[G("Eliminar")]),_:1})]),_:1})),[[Y]])],64))}}),De=j({__name:"TriajesTable",props:{loading:{type:Boolean,required:!1,default:!1},data:{type:Array,required:!0},serverPagination:{type:Object,default:void 0}},emits:["destroyOne","edit"],setup(e,{emit:a}){const i=a,{formatDate:c}=ce(),l=[{name:"fecha_registro",align:"left",label:"Fecha de Registro",field:"fecha_registro",format:t=>c(t),sortable:!0},{name:"actions",align:"right",label:"Acciones",field:"actions"}],{mutateAsync:s}=je(),n=t=>{F.fire({title:"\xBFEst\xE1 seguro de eliminar este registro?",text:"No podra deshacer los cambios!",icon:"warning",showCancelButton:!0,confirmButtonColor:"#3085d6",cancelButtonColor:"#d33",confirmButtonText:"Si",cancelButtonText:"No",showLoaderOnConfirm:!0,preConfirm:async()=>{await s(t,{onSuccess:async()=>{i("destroyOne",t)},onError:()=>{F.hideLoading()}})},allowOutsideClick:()=>!F.isLoading()})};return(t,p)=>(m(),h(Se,{columns:l,data:e.data,loading:e.loading,"row-key":"id","show-grid-toggle":!1},{actions:y(({key:g})=>[f(ke,{id:g,onEdit:o=>t.$emit("edit",g),onDestroy:o=>n(g)},null,8,["id","onEdit","onDestroy"])]),_:1},8,["data","loading"]))}}),Ie=j({__name:"TriajeTab",setup(e){const{paciente:a,triajesDelPaciente:i,isTriajesLoading:c}=ie(B()),{fetchTriajesDelPaciente:l}=B(),s=$("list"),n=$(),t=async()=>{a.value&&(await l(a.value.id),s.value="list")},p=async g=>{s.value="edit",n.value=Number(g)};return(g,o)=>_(a)?(m(),h(de,{key:0,modelValue:s.value,"onUpdate:modelValue":o[4]||(o[4]=u=>s.value=u),animated:"",class:""},{default:y(()=>[f(Q,{name:"list"},{default:y(()=>[f(ne,{color:"primary",icon:"add",outline:"",label:"Nuevo",class:"q-mb-md",onClick:o[0]||(o[0]=u=>s.value="new")}),f(De,{data:_(i),loading:_(c),onDestroyOne:o[1]||(o[1]=u=>_(l)(_(a).id)),onEdit:p},null,8,["data","loading"])]),_:1}),f(Q,{name:"new"},{default:y(()=>[f(Ce,{"paciente-id":Number(_(a).id),onCancel:o[2]||(o[2]=u=>s.value="list"),onSubmit:t},null,8,["paciente-id"])]),_:1}),f(Q,{name:"edit"},{default:y(()=>[n.value?(m(),h(Fe,{key:0,"triaje-id":n.value,onCancel:o[3]||(o[3]=u=>s.value="list"),onSubmit:t},null,8,["triaje-id"])):D("",!0)]),_:1})]),_:1},8,["modelValue"])):D("",!0)}}),Be={class:"row q-col-gutter-md"},Ne={class:"col-12"},Oe=j({__name:"TriajeRegistroPage",setup(e){const{fetchPaciente:a,$reset:i,fetchTriajesDelPaciente:c}=B(),{paciente:l,isPacienteLoading:s}=ie(B()),{data:n}=me(),t=fe(()=>n.value?n.value.map(u=>({label:u.nombre,value:u.id})):[]),p=T().shape({numero_documento:V().typeError("Debe ingresar un n\xFAmero").min(8).required().label("N\xFAmero de Documento"),tipo_documento_id:pe().required().label("Tipo de Documento")}),{handleSubmit:g}=P({validationSchema:p}),o=g(async u=>{await a(u.numero_documento),l.value?F.fire({title:"Exito!",text:"Paciente encontrado correctamente!",icon:"success"}):F.fire({title:"Informaci\xF3n!",text:"No se encontro el paciente indicado!",icon:"info"})});return be(()=>{i()}),R(()=>l.value,async u=>{u&&(console.log("hay paciente, debeiramos buscar su triaje"),await c(u.id))}),(u,b)=>(m(),S("div",Be,[f(ye,{class:"col-12 row q-col-gutter-lg items-start justify-center",onSubmit:_(o)},{default:y(()=>[f(ve,{options:t.value,name:"tipo_documento_id",class:"col-xs-12 col-sm-4",label:"Tipo de Documento",loading:!1,required:""},null,8,["options"]),f(k,{name:"numero_documento",label:"N\xB0 de Documento",class:"col-xs-12 col-sm-4",required:""}),f(ge,{class:"col-auto justify-center"},{default:y(()=>[f(ne,{color:"primary",outline:"",size:"lg",icon:"search",label:"Buscar","no-caps":"",type:"submit",loading:_(s)},null,8,["loading"])]),_:1})]),_:1},8,["onSubmit"]),_e("div",Ne,[f(z,{icon:"fas fa-person",label:"Datos del Paciente",caption:"Editar / Crear"},{default:y(()=>[f(he,{paciente:_(l),onCancel:_(i),onSubmit:b[0]||(b[0]=d=>_(a)(d))},null,8,["paciente","onCancel"])]),_:1}),_(l)?(m(),h(z,{key:0,icon:"fas fa-stethoscope",label:"Triaje",caption:"Editar / Crear"},{default:y(()=>[f(Ie)]),_:1})):D("",!0)])]))}});export{Oe as default};
