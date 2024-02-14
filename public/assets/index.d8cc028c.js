import{au as j,av as V,aw as O,ax as H,ay as z,az as Z,aA as E,aB as k,aC as U,a1 as N,aD as ee,aE as $,e as B,c as b,w as M,Y as F,n as G,S as T,T as te,aF as ne,U as I,aG as ie,Q as J,ad as ae,ae as oe,af as se}from"./index.c50cd903.js";function re(t){const n=[.06,6,50];return typeof t=="string"&&t.length&&t.split(":").forEach((u,v)=>{const o=parseFloat(u);o&&(n[v]=o)}),n}var ue=j({name:"touch-swipe",beforeMount(t,{value:n,arg:u,modifiers:v}){if(v.mouse!==!0&&V.has.touch!==!0)return;const o=v.mouseCapture===!0?"Capture":"",e={handler:n,sensitivity:re(u),direction:O(v),noop:H,mouseStart(i){z(i,e)&&Z(i)&&(E(e,"temp",[[document,"mousemove","move",`notPassive${o}`],[document,"mouseup","end","notPassiveCapture"]]),e.start(i,!0))},touchStart(i){if(z(i,e)){const s=i.target;E(e,"temp",[[s,"touchmove","move","notPassiveCapture"],[s,"touchcancel","end","notPassiveCapture"],[s,"touchend","end","notPassiveCapture"]]),e.start(i)}},start(i,s){V.is.firefox===!0&&k(t,!0);const f=U(i);e.event={x:f.left,y:f.top,time:Date.now(),mouse:s===!0,dir:!1}},move(i){if(e.event===void 0)return;if(e.event.dir!==!1){N(i);return}const s=Date.now()-e.event.time;if(s===0)return;const f=U(i),y=f.left-e.event.x,c=Math.abs(y),P=f.top-e.event.y,l=Math.abs(P);if(e.event.mouse!==!0){if(c<e.sensitivity[1]&&l<e.sensitivity[1]){e.end(i);return}}else if(window.getSelection().toString()!==""){e.end(i);return}else if(c<e.sensitivity[2]&&l<e.sensitivity[2])return;const d=c/s,m=l/s;e.direction.vertical===!0&&c<l&&c<100&&m>e.sensitivity[0]&&(e.event.dir=P<0?"up":"down"),e.direction.horizontal===!0&&c>l&&l<100&&d>e.sensitivity[0]&&(e.event.dir=y<0?"left":"right"),e.direction.up===!0&&c<l&&P<0&&c<100&&m>e.sensitivity[0]&&(e.event.dir="up"),e.direction.down===!0&&c<l&&P>0&&c<100&&m>e.sensitivity[0]&&(e.event.dir="down"),e.direction.left===!0&&c>l&&y<0&&l<100&&d>e.sensitivity[0]&&(e.event.dir="left"),e.direction.right===!0&&c>l&&y>0&&l<100&&d>e.sensitivity[0]&&(e.event.dir="right"),e.event.dir!==!1?(N(i),e.event.mouse===!0&&(document.body.classList.add("no-pointer-events--children"),document.body.classList.add("non-selectable"),ee(),e.styleCleanup=h=>{e.styleCleanup=void 0,document.body.classList.remove("non-selectable");const x=()=>{document.body.classList.remove("no-pointer-events--children")};h===!0?setTimeout(x,50):x()}),e.handler({evt:i,touch:e.event.mouse!==!0,mouse:e.event.mouse,direction:e.event.dir,duration:s,distance:{x:c,y:l}})):e.end(i)},end(i){e.event!==void 0&&($(e,"temp"),V.is.firefox===!0&&k(t,!1),e.styleCleanup!==void 0&&e.styleCleanup(!0),i!==void 0&&e.event.dir!==!1&&N(i),e.event=void 0)}};if(t.__qtouchswipe=e,v.mouse===!0){const i=v.mouseCapture===!0||v.mousecapture===!0?"Capture":"";E(e,"main",[[t,"mousedown","mouseStart",`passive${i}`]])}V.has.touch===!0&&E(e,"main",[[t,"touchstart","touchStart",`passive${v.capture===!0?"Capture":""}`],[t,"touchmove","noop","notPassiveCapture"]])},updated(t,n){const u=t.__qtouchswipe;u!==void 0&&(n.oldValue!==n.value&&(typeof n.value!="function"&&u.end(),u.handler=n.value),u.direction=O(n.modifiers))},beforeUnmount(t){const n=t.__qtouchswipe;n!==void 0&&($(n,"main"),$(n,"temp"),V.is.firefox===!0&&k(t,!1),n.styleCleanup!==void 0&&n.styleCleanup(),delete t.__qtouchswipe)}});function le(){const t=new Map;return{getCache:function(n,u){return t[n]===void 0?t[n]=u:t[n]},getCacheWithFn:function(n,u){return t[n]===void 0?t[n]=u():t[n]}}}const ce={name:{required:!0},disable:Boolean},Y={setup(t,{slots:n}){return()=>T("div",{class:"q-panel scroll",role:"tabpanel"},I(n.default))}},de={modelValue:{required:!0},animated:Boolean,infinite:Boolean,swipeable:Boolean,vertical:Boolean,transitionPrev:String,transitionNext:String,transitionDuration:{type:[String,Number],default:300},keepAlive:Boolean,keepAliveInclude:[String,Array,RegExp],keepAliveExclude:[String,Array,RegExp],keepAliveMax:Number},pe=["update:modelValue","beforeTransition","transition"];function ve(){const{props:t,emit:n,proxy:u}=F(),{getCacheWithFn:v}=le();let o,e;const i=B(null),s=B(null);function f(a){const r=t.vertical===!0?"up":"left";D((u.$q.lang.rtl===!0?-1:1)*(a.direction===r?1:-1))}const y=b(()=>[[ue,f,void 0,{horizontal:t.vertical!==!0,vertical:t.vertical,mouse:!0}]]),c=b(()=>t.transitionPrev||`slide-${t.vertical===!0?"down":"right"}`),P=b(()=>t.transitionNext||`slide-${t.vertical===!0?"up":"left"}`),l=b(()=>`--q-transition-duration: ${t.transitionDuration}ms`),d=b(()=>typeof t.modelValue=="string"||typeof t.modelValue=="number"?t.modelValue:String(t.modelValue)),m=b(()=>({include:t.keepAliveInclude,exclude:t.keepAliveExclude,max:t.keepAliveMax})),h=b(()=>t.keepAliveInclude!==void 0||t.keepAliveExclude!==void 0);M(()=>t.modelValue,(a,r)=>{const g=p(a)===!0?C(a):-1;e!==!0&&w(g===-1?0:g<C(r)?-1:1),i.value!==g&&(i.value=g,n("beforeTransition",a,r),G(()=>{n("transition",a,r)}))});function x(){D(1)}function q(){D(-1)}function A(a){n("update:modelValue",a)}function p(a){return a!=null&&a!==""}function C(a){return o.findIndex(r=>r.props.name===a&&r.props.disable!==""&&r.props.disable!==!0)}function S(){return o.filter(a=>a.props.disable!==""&&a.props.disable!==!0)}function w(a){const r=a!==0&&t.animated===!0&&i.value!==-1?"q-transition--"+(a===-1?c.value:P.value):null;s.value!==r&&(s.value=r)}function D(a,r=i.value){let g=r+a;for(;g>-1&&g<o.length;){const _=o[g];if(_!==void 0&&_.props.disable!==""&&_.props.disable!==!0){w(a),e=!0,n("update:modelValue",_.props.name),setTimeout(()=>{e=!1});return}g+=a}t.infinite===!0&&o.length!==0&&r!==-1&&r!==o.length&&D(a,a===-1?o.length:-1)}function Q(){const a=C(t.modelValue);return i.value!==a&&(i.value=a),!0}function W(){const a=p(t.modelValue)===!0&&Q()&&o[i.value];return t.keepAlive===!0?[T(ie,m.value,[T(h.value===!0?v(d.value,()=>({...Y,name:d.value})):Y,{key:d.value,style:l.value},()=>a)])]:[T("div",{class:"q-panel scroll",style:l.value,key:d.value,role:"tabpanel"},[a])]}function K(){if(o.length!==0)return t.animated===!0?[T(te,{name:s.value},W)]:W()}function X(a){return o=ne(I(a.default,[])).filter(r=>r.props!==null&&r.props.slot===void 0&&p(r.props.name)===!0),o.length}function R(){return o}return Object.assign(u,{next:x,previous:q,goTo:A}),{panelIndex:i,panelDirectives:y,updatePanelsList:X,updatePanelIndex:Q,getPanelContent:K,getEnabledPanels:S,getPanels:R,isValidPanelName:p,keepAliveProps:m,needsUniqueKeepAliveWrapper:h,goToPanelByOffset:D,goToPanel:A,nextPanel:x,previousPanel:q}}var ge=J({name:"QTabPanel",props:ce,setup(t,{slots:n}){return()=>T("div",{class:"q-tab-panel",role:"tabpanel"},I(n.default))}}),be=J({name:"QTabPanels",props:{...de,...ae},emits:pe,setup(t,{slots:n}){const u=F(),v=oe(t,u.proxy.$q),{updatePanelsList:o,getPanelContent:e,panelDirectives:i}=ve(),s=b(()=>"q-tab-panels q-panel-parent"+(v.value===!0?" q-tab-panels--dark q-dark":""));return()=>(o(n),se("div",{class:s.value},e(),"pan",t.swipeable,()=>i.value))}});const L=typeof window!="undefined"&&typeof document!="undefined";typeof WorkerGlobalScope!="undefined"&&globalThis instanceof WorkerGlobalScope;const fe=t=>typeof t!="undefined";L&&window.document;L&&window.navigator;L&&window.location;function me(t){return JSON.parse(JSON.stringify(t))}function ye(t,n,u,v={}){var o,e,i;const{clone:s=!1,passive:f=!1,eventName:y,deep:c=!1,defaultValue:P,shouldEmit:l}=v,d=F(),m=u||(d==null?void 0:d.emit)||((o=d==null?void 0:d.$emit)==null?void 0:o.bind(d))||((i=(e=d==null?void 0:d.proxy)==null?void 0:e.$emit)==null?void 0:i.bind(d==null?void 0:d.proxy));let h=y;n||(n="modelValue"),h=h||`update:${n.toString()}`;const x=p=>s?typeof s=="function"?s(p):me(p):p,q=()=>fe(t[n])?x(t[n]):P,A=p=>{l?l(p)&&m(h,p):m(h,p)};if(f){const p=q(),C=B(p);let S=!1;return M(()=>t[n],w=>{S||(S=!0,C.value=x(w),G(()=>S=!1))}),M(C,w=>{!S&&(w!==t[n]||c)&&A(w)},{deep:c}),C}else return b({get(){return q()},set(p){A(p)}})}export{be as Q,ge as a,ye as u};
