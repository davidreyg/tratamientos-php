import{D as i}from"./datetime.b26a663f.js";import{_ as S}from"./BaseCheckBox.247ce6e4.js";import{_ as m}from"./BaseDatePicker.ea74c138.js";import{u as q,_ as l,a as y}from"./BaseInput.5767a8ad.js";import{c as C,a as d,f as u,b as D,d as v}from"./index.esm.4940542b.js";import{u as w}from"./index.1c9af67c.js";import{h as P,m as g,q as x,A as _,z as B,u as t,B as r,C as p}from"./index.8e1e529b.js";import{P as I}from"./PeriodApi.1278f97e.js";class N{static async run(s){try{await I.savePeriod(s)}catch(n){throw n}}}function k(){return w(o=>N.run(o))}const E={class:"col-6"},A={class:"col-6"},G=P({__name:"PeriodCreateForm",emits:["submit","cancel"],setup(o,{emit:s}){const n=s,f=C().shape({name:d().trim().min(2).required().label("Nombre"),description:d().trim().notRequired().min(2).nullable().transform(e=>e||null).label("Descripci\xF3n"),start_at:u().min(i.now().toISODate()).required().label("Fecha inicio"),end_at:u().min(D("start_at",{map(e){return i.fromJSDate(e).plus({day:1}).toJSDate()}}),"Fecha fin debe ser mayor a la Fecha de  Inicio").required().label("Fecha fin"),is_active:v().required().label("Estado")}),{handleSubmit:b,setErrors:h}=q({validationSchema:f}),{isLoading:c,mutate:$}=k(),F=b(async e=>{$(e,{onSuccess:async()=>{n("submit")},onError:a=>{a.data.errors&&h(a.data.errors)}})});return(e,a)=>(g(),x(y,{loading:t(c),onSubmit:t(F),onCancel:a[0]||(a[0]=J=>e.$emit("cancel"))},{actions:_(()=>[B(e.$slots,"actions",{isLoading:t(c)})]),default:_(()=>[r(l,{name:"name",label:"Nombre",required:"",class:"col-12"}),r(l,{name:"description",label:"Description",type:"textarea",class:"col-12"}),p("div",E,[r(m,{required:"",name:"start_at",label:"Fecha de Inicio","min-date":t(i).now()},null,8,["min-date"])]),p("div",A,[r(m,{required:"",name:"end_at",label:"Fecha Fin","min-date":t(i).now()},null,8,["min-date"])]),r(S,{name:"is_active",label:"Iniciar periodo",class:"col-xs-12 col-sm-6"})]),_:3},8,["loading","onSubmit"]))}});export{G as _};
