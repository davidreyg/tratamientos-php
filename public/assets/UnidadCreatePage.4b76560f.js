import{W as p,Y as m,$ as f,a0 as $,a1 as C,ag as S,o as c,ak as k,a5 as r,w as U,ad as g,a2 as i,aa as v,e as N}from"./index.c8292963.js";import{U as w}from"./UnidadApi.c7042b08.js";function B(){return p(s=>w.create(s))}const E={class:"row"},x=m({__name:"UnidadCreateForm",emits:["submit","cancel"],setup(s,{emit:a}){const e=a,n=f().shape({nombre:$().trim().min(2).required().label("Nombre")}),{handleSubmit:u,setErrors:l}=C({validationSchema:n}),{isLoading:d,mutate:b}=B(),_=u(async o=>{b(o,{onSuccess:()=>{S.success(),e("submit")},onError:t=>{l(t.data.errors)}})});return(o,t)=>(c(),k("div",E,[r(v,{class:"col-xs-12 col-sm-10",loading:i(d),onSubmit:i(_),onCancel:t[0]||(t[0]=y=>o.$emit("cancel"))},{default:U(()=>[r(g,{name:"nombre",label:"Nombre",class:"col-12"})]),_:1},8,["loading","onSubmit"])]))}}),h=m({__name:"UnidadCreatePage",setup(s){return(a,e)=>(c(),N(x,{onSubmit:e[0]||(e[0]=n=>a.$router.back()),onCancel:e[1]||(e[1]=n=>a.$router.back())}))}});export{h as default};
