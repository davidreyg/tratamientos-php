import{W as f,Y as m,$,a0 as q,b0 as S,aU as C,a1 as k,ag as v,o as u,ak as x,a5 as r,w as P,ad as g,aj as i,aS as w,f as N,a2 as c,aa as h,e as E}from"./index.f707d301.js";import{P as y}from"./PaqueteApi.31b32201.js";import{_ as B}from"./ExamenCardList.8aa04fd3.js";import"./examenFetchAllQuery.02b4bc94.js";import"./BaseCheckBoxGroup.7522293b.js";class V{static async run(a){try{await y.create(a)}catch(e){throw e}}}function F(){return f(t=>V.run(t))}const M={class:"row"},T={class:"col-12"},U={class:"col-12 row q-col-gutter-sm"},j=m({__name:"PaqueteCreateForm",emits:["submit","cancel"],setup(t,{emit:a}){const e=a,o=$().shape({nombre:q().trim().min(2).required().label("Nombre"),examen_ids:S().of(C().required()).required().label("Examenes")}),{handleSubmit:l,setErrors:d}=k({validationSchema:o,initialValues:{examen_ids:[]}}),{isLoading:_,mutate:p}=F(),b=l(async n=>{p(n,{onSuccess:()=>{v.success(),e("submit")},onError:s=>{d(s.data.errors)}})});return(n,s)=>(u(),x("div",M,[r(h,{class:"col-xs-12 col-sm-10",loading:c(_),onSubmit:c(b),onCancel:s[0]||(s[0]=A=>n.$emit("cancel"))},{default:P(()=>[r(g,{name:"nombre",label:"Nombre",class:"col-12"}),i("div",T,[r(w,{spaced:""}),N(" Examenes")]),i("div",U,[r(B)])]),_:1},8,["loading","onSubmit"])]))}}),D=m({__name:"PaqueteCreatePage",setup(t){return(a,e)=>(u(),E(j,{onSubmit:e[0]||(e[0]=o=>a.$router.back()),onCancel:e[1]||(e[1]=o=>a.$router.back())}))}});export{D as default};
