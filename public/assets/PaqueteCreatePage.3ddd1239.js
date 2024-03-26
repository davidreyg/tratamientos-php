import{W as q,Y as l,$ as C,a0 as S,bb as h,aU as k,a1 as v,r as y,ag as N,o as i,ak as P,a5 as c,w as g,ad as w,aj as u,aS as E,f as V,a2 as r,e as d,au as B,aa as F}from"./index.56bc56d2.js";import{u as A,_ as M}from"./ExamenCardList.2e8f16b2.js";import{P as Q}from"./PaqueteApi.2a80a3de.js";import"./BaseCheckBoxGroup.4875acef.js";class T{static async run(a){try{await Q.create(a)}catch(e){throw e}}}function U(){return q(s=>T.run(s))}const j={class:"row"},J={class:"col-12"},L={class:"col-12 row q-col-gutter-sm"},W=l({__name:"PaqueteCreateForm",emits:["submit","cancel"],setup(s,{emit:a}){const e=a,o=C().shape({nombre:S().trim().min(2).required().label("Nombre"),examen_ids:h().of(k().required()).required().label("Examenes")}),{handleSubmit:_,setErrors:b}=v({validationSchema:o,initialValues:{examen_ids:[]}}),f=y({limit:0,search:"is_active:1",searchJoin:"and"}),{data:m}=A(f),{isLoading:p,mutate:$}=U(),x=_(async n=>{$(n,{onSuccess:()=>{N.success(),e("submit")},onError:t=>{b(t.data.errors)}})});return(n,t)=>(i(),P("div",j,[c(F,{class:"col-xs-12 col-sm-10",loading:r(p),onSubmit:r(x),onCancel:t[0]||(t[0]=Y=>n.$emit("cancel"))},{default:g(()=>[c(w,{name:"nombre",label:"Nombre",class:"col-12"}),u("div",J,[c(E,{spaced:""}),V(" Examenes")]),u("div",L,[r(m)?(i(),d(M,{key:0,examens:r(m)},null,8,["examens"])):B("",!0)])]),_:1},8,["loading","onSubmit"])]))}}),I=l({__name:"PaqueteCreatePage",setup(s){return(a,e)=>(i(),d(W,{onSubmit:e[0]||(e[0]=o=>a.$router.back()),onCancel:e[1]||(e[1]=o=>a.$router.back())}))}});export{I as default};
