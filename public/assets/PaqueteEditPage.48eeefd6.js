import{aE as E,aF as S,W as x,Y as q,$ as P,a0 as w,a1 as F,r as N,o as m,e as d,w as b,a5 as _,ad as v,aj as h,aS as Q,f as B,a2 as s,au as f,aa as C,ay as T,ak as V,ae as A,ag as L}from"./index.a85a2474.js";import{_ as U}from"./SkeletonForm.3a275675.js";import{u as j}from"./examenFetchAllQuery.8d71c4e3.js";import{P as g}from"./PaqueteApi.83c7aa2a.js";import{_ as I}from"./ExamenCardList.6fac4337.js";import"./ExamenApi.b9b2180d.js";import"./BaseCheckBoxGroup.1171d2cd.js";class M{static async run(e){try{return(await g.fetchOne(e)).data().data}catch(t){throw t}}}class O{static async run(e,t){try{await g.update(e,t)}catch(r){throw r}}}function R(a,e){const t=async()=>await M.run(a),{data:r,isLoading:n,isSuccess:c,isError:i,isFetching:u,refetch:o}=E([S.PAQUETE_ALL,a],t,{enabled:e});return{data:r,isLoading:n,isSuccess:c,isError:i,isFetching:u,refetch:o}}function z(){return x(({data:a,id:e})=>O.run(a,e))}const J={class:"col-12"},W={class:"col-12 row q-col-gutter-sm"},Y=q({__name:"PaqueteEditForm",props:{paquete:{type:Object,required:!0}},emits:["submit","cancel"],setup(a,{emit:e}){const t=a,r=e,n=P().shape({nombre:w().trim().min(2).required().label("Nombre")}),{handleSubmit:c,setErrors:i}=F({validationSchema:n,initialValues:t.paquete}),u=N({limit:0,search:"is_active:1",searchJoin:"and"}),{data:o}=j(u),{isLoading:y,mutate:$}=z(),k=c(async p=>{$({data:p,id:t.paquete.id},{onSuccess:()=>{r("submit")},onError:l=>{i(l.data.errors)}})});return(p,l)=>(m(),d(C,{loading:s(y),onSubmit:s(k),onCancel:l[0]||(l[0]=G=>p.$emit("cancel"))},{default:b(()=>[_(v,{name:"nombre",label:"Nombre",class:"col-12"}),h("div",J,[_(Q,{spaced:""}),B(" Examenes")]),h("div",W,[s(o)?(m(),d(I,{key:0,examens:s(o)},null,8,["examens"])):f("",!0)])]),_:1},8,["loading","onSubmit"]))}}),D={class:"row"},se=q({__name:"PaqueteEditPage",props:{id:{type:Number,required:!0}},setup(a){const e=a,t=T(),{data:r,isSuccess:n,isFetching:c}=R(e.id,!0),i=()=>{L.success("Registro actualizado correctamente"),t.back()};return(u,o)=>(m(),V("div",D,[s(c)?(m(),d(A,{key:0,class:"col-xs-12 col-sm-10 q-pa-lg"},{default:b(()=>[_(U,{class:"col-12",inputs:2})]),_:1})):f("",!0),s(n)&&!s(c)&&s(r)?(m(),d(Y,{key:1,class:"col-xs-12 col-sm-10",paquete:s(r),gol:s(r),onSubmit:i,onCancel:o[0]||(o[0]=y=>u.$router.back())},null,8,["paquete","gol"])):f("",!0)]))}});export{se as default};
