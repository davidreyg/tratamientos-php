import{bo as $,W as f,Y as m,$ as g,a0 as C,aU as D,a1 as k,ag as S,o as u,ak as v,a5 as r,w as T,ad as i,a2 as c,aa as w,e as y}from"./index.418160ac.js";class N{static async run(a){try{await $.create(a)}catch(e){throw e}}}function B(){return f(t=>N.run(t))}const E={class:"row"},h=m({__name:"TipoDocumentoCreateForm",emits:["submit","cancel"],setup(t,{emit:a}){const e=a,s=g().shape({nombre:C().trim().min(2).required().label("Nombre"),digitos:D().typeError("Debe ingresar un numero").required().integer().positive().label("Digitos")}),{handleSubmit:l,setErrors:b}=k({validationSchema:s}),{isLoading:p,mutate:d}=B(),_=l(async n=>{d(n,{onSuccess:()=>{S.success(),e("submit")},onError:o=>{b(o.data.errors)}})});return(n,o)=>(u(),v("div",E,[r(w,{class:"col-sm-6 col-xs-12 col-md-5",loading:c(p),onSubmit:c(_),onCancel:o[0]||(o[0]=x=>n.$emit("cancel"))},{default:T(()=>[r(i,{name:"nombre",label:"Nombre",class:"col-12"}),r(i,{name:"digitos",label:"N\xB0 Digitos",class:"col-12"})]),_:1},8,["loading","onSubmit"])]))}}),F=m({__name:"TipoDocumentoCreatePage",setup(t){return(a,e)=>(u(),y(h,{onSubmit:e[0]||(e[0]=s=>a.$router.back()),onCancel:e[1]||(e[1]=s=>a.$router.back())}))}});export{F as default};