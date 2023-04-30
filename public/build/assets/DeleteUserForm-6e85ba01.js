import{m as $,p as C,q as B,h as D,o as p,c as S,a as o,w as r,i as u,s as m,b as e,T as f,n as x,u as c,r as v,g as V,x as E,f as g,y as _,v as U,z as A,d as y,A as T}from"./app-a93891e0.js";import{_ as h}from"./DangerButton-2f9a921e.js";import{_ as N,a as z,b as K}from"./TextInput-3fb4ac1d.js";const M={class:"fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50","scroll-region":""},O=e("div",{class:"absolute inset-0 bg-gray-500 opacity-75"},null,-1),P=[O],W={__name:"Modal",props:{show:{type:Boolean,default:!1},maxWidth:{type:String,default:"2xl"},closeable:{type:Boolean,default:!0}},emits:["close"],setup(a,{emit:l}){const t=a;$(()=>t.show,()=>{t.show?document.body.style.overflow="hidden":document.body.style.overflow=null});const s=()=>{t.closeable&&l("close")},i=n=>{n.key==="Escape"&&t.show&&s()};C(()=>document.addEventListener("keydown",i)),B(()=>{document.removeEventListener("keydown",i),document.body.style.overflow=null});const d=D(()=>({sm:"sm:max-w-sm",md:"sm:max-w-md",lg:"sm:max-w-lg",xl:"sm:max-w-xl","2xl":"sm:max-w-2xl"})[t.maxWidth]);return(n,b)=>(p(),S(E,{to:"body"},[o(f,{"leave-active-class":"duration-200"},{default:r(()=>[u(e("div",M,[o(f,{"enter-active-class":"ease-out duration-300","enter-from-class":"opacity-0","enter-to-class":"opacity-100","leave-active-class":"ease-in duration-200","leave-from-class":"opacity-100","leave-to-class":"opacity-0"},{default:r(()=>[u(e("div",{class:"fixed inset-0 transform transition-all",onClick:s},P,512),[[m,a.show]])]),_:1}),o(f,{"enter-active-class":"ease-out duration-300","enter-from-class":"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95","enter-to-class":"opacity-100 translate-y-0 sm:scale-100","leave-active-class":"ease-in duration-200","leave-from-class":"opacity-100 translate-y-0 sm:scale-100","leave-to-class":"opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"},{default:r(()=>[u(e("div",{class:x(["mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:mx-auto",c(d)])},[a.show?v(n.$slots,"default",{key:0}):V("",!0)],2),[[m,a.show]])]),_:3})],512),[[m,a.show]])]),_:3})]))}},F=["type"],I={__name:"SecondaryButton",props:{type:{type:String,default:"button"}},setup(a){return(l,t)=>(p(),g("button",{type:a.type,class:"inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150"},[v(l.$slots,"default")],8,F))}},L={class:"space-y-6"},j=e("header",null,[e("h2",{class:"text-lg font-medium text-gray-900"},"Delete Account"),e("p",{class:"mt-1 text-sm text-gray-600"}," Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain. ")],-1),q={class:"p-6"},G=e("h2",{class:"text-lg font-medium text-gray-900"}," Are you sure you want to delete your account? ",-1),H=e("p",{class:"mt-1 text-sm text-gray-600"}," Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account. ",-1),J={class:"mt-6"},Q={class:"mt-6 flex justify-end"},Z={__name:"DeleteUserForm",setup(a){const l=_(!1),t=_(null),s=U({password:""}),i=()=>{l.value=!0,A(()=>t.value.focus())},d=()=>{s.delete(route("profile.destroy"),{preserveScroll:!0,onSuccess:()=>n(),onError:()=>t.value.focus(),onFinish:()=>s.reset()})},n=()=>{l.value=!1,s.reset()};return(b,w)=>(p(),g("section",L,[j,o(h,{onClick:i},{default:r(()=>[y("Delete Account")]),_:1}),o(W,{show:l.value,onClose:n},{default:r(()=>[e("div",q,[G,H,e("div",J,[o(N,{for:"password",value:"Password",class:"sr-only"}),o(z,{id:"password",ref_key:"passwordInput",ref:t,modelValue:c(s).password,"onUpdate:modelValue":w[0]||(w[0]=k=>c(s).password=k),type:"password",class:"mt-1 block w-3/4",placeholder:"Password",onKeyup:T(d,["enter"])},null,8,["modelValue","onKeyup"]),o(K,{message:c(s).errors.password,class:"mt-2"},null,8,["message"])]),e("div",Q,[o(I,{onClick:n},{default:r(()=>[y(" Cancel ")]),_:1}),o(h,{class:x(["ml-3",{"opacity-25":c(s).processing}]),disabled:c(s).processing,onClick:d},{default:r(()=>[y(" Delete Account ")]),_:1},8,["class","disabled"])])])]),_:1},8,["show"])]))}};export{Z as default};
