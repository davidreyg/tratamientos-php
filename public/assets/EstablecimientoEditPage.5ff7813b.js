import{aG as x,aH as C,U as q,X as $,Z as k,$ as f,aU as g,a_ as B,a0 as F,o as b,d as _,w as S,a4 as t,ac as u,a1 as o,a9 as L,ax as N,aj as T,ad as v,at as y,af as I}from"./index.ddaffeba.js";import{_ as w}from"./SkeletonForm.7322d735.js";import{E as h}from"./EstablecimientoApi.0ae636f8.js";import{_ as Q}from"./BaseCheckBox.37207ce4.js";function R(e,a){const s=async()=>(await h.fetchOne(e)).data().data,{data:i,isLoading:c,isSuccess:r,isError:l,isFetching:m,refetch:n}=x([C.ESTABLECIMIENTO_ALL,e],s,{enabled:a});return{data:i,isLoading:c,isSuccess:r,isError:l,isFetching:m,refetch:n}}function U(){return q(({data:e,id:a})=>h.update(e,a))}const A=$({__name:"EstablecimientoEditForm",props:{establecimiento:{type:Object,required:!0}},emits:["submit","cancel"],setup(e,{emit:a}){const s=e,i=a,c=k().shape({nombre:f().trim().min(2).required().label("Nombre"),codigo:g().typeError("Codigo debe ser un numero").integer().positive().required().label("Codigo"),direccion:f().trim().min(2).max(60).required().label("Direccion"),telefono:g().typeError("Tel\xE9fono debe ser un numero").integer().positive().nullable().label("Telefono"),ris:f().trim().min(2).max(60).required().label("RIS"),has_lab:B().required().label("\xBFLaboratorio?")}),{handleSubmit:r,setErrors:l}=F({validationSchema:c,initialValues:s.establecimiento}),{isLoading:m,mutate:n}=U(),E=r(async p=>{n({data:p,id:s.establecimiento.id},{onSuccess:()=>{i("submit")},onError:d=>{l(d.data.errors)}})});return(p,d)=>(b(),_(L,{loading:o(m),onSubmit:o(E),onCancel:d[0]||(d[0]=O=>p.$emit("cancel"))},{default:S(()=>[t(u,{name:"nombre",label:"Nombre",class:"col-12"}),t(u,{name:"codigo",label:"Codigo",class:"col-6"}),t(u,{name:"telefono",label:"Telefono",class:"col-6"}),t(u,{name:"direccion",label:"Direccion",class:"col-12"}),t(u,{name:"ris",label:"RIS",class:"col-6"}),t(Q,{name:"has_lab",label:"\xBFTiene Laboratorio?",class:"col-6"})]),_:1},8,["loading","onSubmit"]))}}),M={class:"row"},G=$({__name:"EstablecimientoEditPage",props:{id:{type:Number,required:!0}},setup(e){const a=e,s=N(),{data:i,isSuccess:c,isFetching:r}=R(a.id,!0),l=()=>{I.success("Registro actualizado correctamente"),s.back()};return(m,n)=>(b(),T("div",M,[o(r)?(b(),_(v,{key:0,class:"col-xs-12 col-sm-10 q-pa-lg"},{default:S(()=>[t(w,{class:"col-12",inputs:4})]),_:1})):y("",!0),o(c)&&!o(r)&&o(i)?(b(),_(A,{key:1,class:"col-xs-12 col-sm-10",establecimiento:o(i),onSubmit:l,onCancel:n[0]||(n[0]=E=>m.$router.back())},null,8,["establecimiento"])):y("",!0)]))}});export{G as default};