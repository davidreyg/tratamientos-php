import{W as _,Y as m,$ as f,a0 as $,a1 as C,ag as S,o as c,ak as k,a5 as r,w as g,ad as v,a2 as i,aa as R,e as N}from"./index.747a1a42.js";import{R as w}from"./RespuestaApi.4798ebd4.js";function B(){return _(t=>w.create(t))}const E={class:"row"},x=m({__name:"RespuestaCreateForm",emits:["submit","cancel"],setup(t,{emit:a}){const e=a,o=f().shape({nombre:$().trim().min(2).required().label("Nombre")}),{handleSubmit:u,setErrors:l}=C({validationSchema:o}),{isLoading:p,mutate:b}=B(),d=u(async n=>{b(n,{onSuccess:()=>{S.success(),e("submit")},onError:s=>{l(s.data.errors)}})});return(n,s)=>(c(),k("div",E,[r(R,{class:"col-xs-12 col-sm-10",loading:i(p),onSubmit:i(d),onCancel:s[0]||(s[0]=y=>n.$emit("cancel"))},{default:g(()=>[r(v,{name:"nombre",label:"Nombre",class:"col-12"})]),_:1},8,["loading","onSubmit"])]))}}),h=m({__name:"RespuestaCreatePage",setup(t){return(a,e)=>(c(),N(x,{onSubmit:e[0]||(e[0]=o=>a.$router.back()),onCancel:e[1]||(e[1]=o=>a.$router.back())}))}});export{h as default};
