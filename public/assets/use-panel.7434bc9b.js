import{az as O,aA as C,aB as M,aC as R,aD as $,aE as U,aF as T,aG as k,aH as L,a2 as E,aI as G,aJ as D,j as W,f as m,d as H,g as J,W as b,T as Q,aK as Z,X as F,n as ee,aL as te}from"./index.7154a952.js";function ne(t){const i=[.06,6,50];return typeof t=="string"&&t.length&&t.split(":").forEach((u,d)=>{const r=parseFloat(u);r&&(i[d]=r)}),i}var ie=O({name:"touch-swipe",beforeMount(t,{value:i,arg:u,modifiers:d}){if(d.mouse!==!0&&C.has.touch!==!0)return;const r=d.mouseCapture===!0?"Capture":"",e={handler:i,sensitivity:ne(u),direction:M(d),noop:R,mouseStart(a){$(a,e)&&U(a)&&(T(e,"temp",[[document,"mousemove","move",`notPassive${r}`],[document,"mouseup","end","notPassiveCapture"]]),e.start(a,!0))},touchStart(a){if($(a,e)){const c=a.target;T(e,"temp",[[c,"touchmove","move","notPassiveCapture"],[c,"touchcancel","end","notPassiveCapture"],[c,"touchend","end","notPassiveCapture"]]),e.start(a)}},start(a,c){C.is.firefox===!0&&k(t,!0);const f=L(a);e.event={x:f.left,y:f.top,time:Date.now(),mouse:c===!0,dir:!1}},move(a){if(e.event===void 0)return;if(e.event.dir!==!1){E(a);return}const c=Date.now()-e.event.time;if(c===0)return;const f=L(a),h=f.left-e.event.x,l=Math.abs(h),g=f.top-e.event.y,s=Math.abs(g);if(e.event.mouse!==!0){if(l<e.sensitivity[1]&&s<e.sensitivity[1]){e.end(a);return}}else if(window.getSelection().toString()!==""){e.end(a);return}else if(l<e.sensitivity[2]&&s<e.sensitivity[2])return;const v=l/c,y=s/c;e.direction.vertical===!0&&l<s&&l<100&&y>e.sensitivity[0]&&(e.event.dir=g<0?"up":"down"),e.direction.horizontal===!0&&l>s&&s<100&&v>e.sensitivity[0]&&(e.event.dir=h<0?"left":"right"),e.direction.up===!0&&l<s&&g<0&&l<100&&y>e.sensitivity[0]&&(e.event.dir="up"),e.direction.down===!0&&l<s&&g>0&&l<100&&y>e.sensitivity[0]&&(e.event.dir="down"),e.direction.left===!0&&l>s&&h<0&&s<100&&v>e.sensitivity[0]&&(e.event.dir="left"),e.direction.right===!0&&l>s&&h>0&&s<100&&v>e.sensitivity[0]&&(e.event.dir="right"),e.event.dir!==!1?(E(a),e.event.mouse===!0&&(document.body.classList.add("no-pointer-events--children"),document.body.classList.add("non-selectable"),G(),e.styleCleanup=A=>{e.styleCleanup=void 0,document.body.classList.remove("non-selectable");const P=()=>{document.body.classList.remove("no-pointer-events--children")};A===!0?setTimeout(P,50):P()}),e.handler({evt:a,touch:e.event.mouse!==!0,mouse:e.event.mouse,direction:e.event.dir,duration:c,distance:{x:l,y:s}})):e.end(a)},end(a){e.event!==void 0&&(D(e,"temp"),C.is.firefox===!0&&k(t,!1),e.styleCleanup!==void 0&&e.styleCleanup(!0),a!==void 0&&e.event.dir!==!1&&E(a),e.event=void 0)}};if(t.__qtouchswipe=e,d.mouse===!0){const a=d.mouseCapture===!0||d.mousecapture===!0?"Capture":"";T(e,"main",[[t,"mousedown","mouseStart",`passive${a}`]])}C.has.touch===!0&&T(e,"main",[[t,"touchstart","touchStart",`passive${d.capture===!0?"Capture":""}`],[t,"touchmove","noop","notPassiveCapture"]])},updated(t,i){const u=t.__qtouchswipe;u!==void 0&&(i.oldValue!==i.value&&(typeof i.value!="function"&&u.end(),u.handler=i.value),u.direction=M(i.modifiers))},beforeUnmount(t){const i=t.__qtouchswipe;i!==void 0&&(D(i,"main"),D(i,"temp"),C.is.firefox===!0&&k(t,!1),i.styleCleanup!==void 0&&i.styleCleanup(),delete t.__qtouchswipe)}});function ae(){const t=new Map;return{getCache:function(i,u){return t[i]===void 0?t[i]=u:t[i]},getCacheWithFn:function(i,u){return t[i]===void 0?t[i]=u():t[i]}}}const re={name:{required:!0},disable:Boolean},z={setup(t,{slots:i}){return()=>b("div",{class:"q-panel scroll",role:"tabpanel"},F(i.default))}},se={modelValue:{required:!0},animated:Boolean,infinite:Boolean,swipeable:Boolean,vertical:Boolean,transitionPrev:String,transitionNext:String,transitionDuration:{type:[String,Number],default:300},keepAlive:Boolean,keepAliveInclude:[String,Array,RegExp],keepAliveExclude:[String,Array,RegExp],keepAliveMax:Number},ue=["update:modelValue","beforeTransition","transition"];function le(){const{props:t,emit:i,proxy:u}=J(),{getCacheWithFn:d}=ae();let r,e;const a=W(null),c=W(null);function f(n){const o=t.vertical===!0?"up":"left";x((u.$q.lang.rtl===!0?-1:1)*(n.direction===o?1:-1))}const h=m(()=>[[ie,f,void 0,{horizontal:t.vertical!==!0,vertical:t.vertical,mouse:!0}]]),l=m(()=>t.transitionPrev||`slide-${t.vertical===!0?"down":"right"}`),g=m(()=>t.transitionNext||`slide-${t.vertical===!0?"up":"left"}`),s=m(()=>`--q-transition-duration: ${t.transitionDuration}ms`),v=m(()=>typeof t.modelValue=="string"||typeof t.modelValue=="number"?t.modelValue:String(t.modelValue)),y=m(()=>({include:t.keepAliveInclude,exclude:t.keepAliveExclude,max:t.keepAliveMax})),A=m(()=>t.keepAliveInclude!==void 0||t.keepAliveExclude!==void 0);H(()=>t.modelValue,(n,o)=>{const p=S(n)===!0?q(n):-1;e!==!0&&B(p===-1?0:p<q(o)?-1:1),a.value!==p&&(a.value=p,i("beforeTransition",n,o),ee(()=>{i("transition",n,o)}))});function P(){x(1)}function V(){x(-1)}function _(n){i("update:modelValue",n)}function S(n){return n!=null&&n!==""}function q(n){return r.findIndex(o=>o.props.name===n&&o.props.disable!==""&&o.props.disable!==!0)}function K(){return r.filter(n=>n.props.disable!==""&&n.props.disable!==!0)}function B(n){const o=n!==0&&t.animated===!0&&a.value!==-1?"q-transition--"+(n===-1?l.value:g.value):null;c.value!==o&&(c.value=o)}function x(n,o=a.value){let p=o+n;for(;p>-1&&p<r.length;){const w=r[p];if(w!==void 0&&w.props.disable!==""&&w.props.disable!==!0){B(n),e=!0,i("update:modelValue",w.props.name),setTimeout(()=>{e=!1});return}p+=n}t.infinite===!0&&r.length!==0&&o!==-1&&o!==r.length&&x(n,n===-1?r.length:-1)}function N(){const n=q(t.modelValue);return a.value!==n&&(a.value=n),!0}function I(){const n=S(t.modelValue)===!0&&N()&&r[a.value];return t.keepAlive===!0?[b(te,y.value,[b(A.value===!0?d(v.value,()=>({...z,name:v.value})):z,{key:v.value,style:s.value},()=>n)])]:[b("div",{class:"q-panel scroll",style:s.value,key:v.value,role:"tabpanel"},[n])]}function X(){if(r.length!==0)return t.animated===!0?[b(Q,{name:c.value},I)]:I()}function Y(n){return r=Z(F(n.default,[])).filter(o=>o.props!==null&&o.props.slot===void 0&&S(o.props.name)===!0),r.length}function j(){return r}return Object.assign(u,{next:P,previous:V,goTo:_}),{panelIndex:a,panelDirectives:h,updatePanelsList:Y,updatePanelIndex:N,getPanelContent:X,getEnabledPanels:K,getPanels:j,isValidPanelName:S,keepAliveProps:y,needsUniqueKeepAliveWrapper:A,goToPanelByOffset:x,goToPanel:_,nextPanel:P,previousPanel:V}}export{se as a,ue as b,le as c,ae as d,re as u};