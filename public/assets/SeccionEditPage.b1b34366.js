import{aG as $,aH as h,U as C,X as b,Z as k,$ as E,a0 as N,o as l,d as p,w as S,a4 as y,ac as x,a1 as s,a9 as F,ax as q,aj as v,ad as w,at as _,af as B}from"./index.0b61b42a.js";import{_ as L}from"./SkeletonForm.a34e76f0.js";import{S as g}from"./SeccionApi.3b53209c.js";function Q(e,t){const o=async()=>(await g.fetchOne(e)).data().data,{data:a,isLoading:r,isSuccess:c,isError:i,isFetching:u,refetch:n}=$([h.SECCION_ALL,e],o,{enabled:t});return{data:a,isLoading:r,isSuccess:c,isError:i,isFetching:u,refetch:n}}function O(){return C(({data:e,id:t})=>g.update(e,t))}const U=b({__name:"SeccionEditForm",props:{seccion:{type:Object,required:!0}},emits:["submit","cancel"],setup(e,{emit:t}){const o=e,a=t,r=k().shape({nombre:E().trim().min(2).required().label("Nombre")}),{handleSubmit:c,setErrors:i}=N({validationSchema:r,initialValues:o.seccion}),{isLoading:u,mutate:n}=O(),f=c(async d=>{n({data:d,id:o.seccion.id},{onSuccess:()=>{a("submit")},onError:m=>{i(m.data.errors)}})});return(d,m)=>(l(),p(F,{loading:s(u),onSubmit:s(f),onCancel:m[0]||(m[0]=j=>d.$emit("cancel"))},{default:S(()=>[y(x,{name:"nombre",label:"Nombre",class:"col-12"})]),_:1},8,["loading","onSubmit"]))}}),V={class:"row"},R=b({__name:"SeccionEditPage",props:{id:{type:Number,required:!0}},setup(e){const t=e,o=q(),{data:a,isSuccess:r,isFetching:c}=Q(t.id,!0),i=()=>{B.success("Registro actualizado correctamente"),o.back()};return(u,n)=>(l(),v("div",V,[s(c)?(l(),p(w,{key:0,class:"col-xs-12 col-sm-10 q-pa-lg"},{default:S(()=>[y(L,{class:"col-12",inputs:1})]),_:1})):_("",!0),s(r)&&!s(c)&&s(a)?(l(),p(U,{key:1,class:"col-xs-12 col-sm-10",seccion:s(a),gol:s(a),onSubmit:i,onCancel:n[0]||(n[0]=f=>u.$router.back())},null,8,["seccion","gol"])):_("",!0)]))}});export{R as default};
