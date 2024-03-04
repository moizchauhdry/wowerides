import{J as O,v as z,m as W,f,a as l,u as o,w as m,F as y,o as v,X as D,b as s,t as c,e as K,d as g,p as P,l as B,g as M}from"./app-484fdd66.js";import{_ as R}from"./AuthenticatedLayout-155c377a.js";import{_,a as i,b as n}from"./TextInput-144404d8.js";import{_ as X}from"./PrimaryButton-6bcbd8fa.js";import{u as Z,S as G,Z as H,E as J}from"./index-e5741af6.js";import{s as S}from"./default.css_vue_type_style_index_0_src_true_lang-7ac0b894.js";import{_ as Q}from"./SuccessButton-19fcc3e7.js";import{_ as N}from"./DangerButton-db518822.js";import"./ApplicationLogo-4f393ddb.js";const q={class:"font-semibold text-xl text-gray-800 leading-tight"},Y={class:"py-12"},ee={class:"max-w-7xl mx-auto sm:px-6 lg:px-8"},oe={class:"bg-white overflow-hidden shadow-sm sm:rounded-lg"},le={class:"p-6 text-gray-900"},te=s("h3",{class:"text-2xl font-bold text-center"}," Work Order - Customer Information",-1),se=s("hr",{class:"w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700"},null,-1),ae={class:"grid gap-4 lg:grid-cols-4 md:grid-cols-2 grid-rows-1"},de=s("h4",{class:"text-2xl font-bold text-center"},"Work Order - Item Information",-1),_e=s("hr",{class:"w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700"},null,-1),ie={class:"grid gap-4 lg:grid-cols-3 md:grid-cols-2 grid-rows-1"},ne=s("h4",{class:"text-2xl font-bold text-center"},"Work Order - Invoicing",-1),re=s("hr",{class:"w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700"},null,-1),ue={class:"grid gap-4 lg:grid-cols-1 md:grid-cols-1 grid-rows-1"},me={class:"grid gap-1 lg:grid-cols-8 md:grid-cols-8 grid-rows-1"},we={class:"col-span-2"},ce={class:"col-span-3"},pe={class:"col-span-1"},ge={class:"col-span-1"},be={class:"col-span-1"},fe={key:0,class:"grid gap-4 lg:grid-cols-1 md:grid-cols-1 grid-rows-1"},ve={class:"grid gap-4 lg:grid-cols-1 md:grid-cols-1 grid-rows-1"},ye={class:"justify-self-end"},Ve={class:"border p-4",style:{width:"250px"}},xe={class:"flex justify-between mb-4"},he=s("div",{class:"font-bold"}," SUBTOTAL ",-1),Ue={class:"font-bold"},ke={class:"flex justify-between mb-4"},Te=s("div",{class:"font-bold"}," DISCOUNT ",-1),$e={class:"font-bold"},Ce={class:"flex justify-between mb-4"},Oe=s("div",null,"TAX RATE",-1),Se={class:"flex justify-between mb-4"},Ne=s("div",null,"TAX TOTAL",-1),Ie={class:"flex justify-between mb-4 bg-blue-100 p-2"},Ae=s("div",{class:"font-bold"}," GRAND TOTAL ",-1),Ee={class:"font-bold"},Fe={class:"flex items-center gap-2"},Xe={__name:"Detail",props:{edit_mode:Boolean,work_order:Object},setup(Le){var x,h,U,k,T,$,C;const t=O().props.work_order,p=O().props.edit_mode;var I=[{value:1,label:"Service and Labor"},{value:2,label:"Parts and Materials"}],A=[{value:1,label:"Pending"},{value:2,label:"Pickup"}];const e=z({wo_id:t==null?void 0:t.id,wo_title:t==null?void 0:t.wo_title,wo_customer_name:t==null?void 0:t.wo_customer_name,wo_bike_category:t==null?void 0:t.wo_bike_category,wo_bike_model:t==null?void 0:t.wo_bike_model,wo_bike_color:t==null?void 0:t.wo_bike_color,wo_sr_no:t==null?void 0:t.wo_sr_no,wo_po_no:t==null?void 0:t.wo_po_no,wo_bike_warranty:t==null?void 0:t.wo_bike_warranty,wo_return_date:t==null?void 0:t.wo_return_date,wo_status:t==null?void 0:t.wo_status,wo_notes:t==null?void 0:t.wo_notes,wo_addr_customer_name:(x=t==null?void 0:t.billing_address)==null?void 0:x.wo_addr_customer_name,wo_addr_str_address:(h=t==null?void 0:t.billing_address)==null?void 0:h.wo_addr_str_address,wo_addr_city:(U=t==null?void 0:t.billing_address)==null?void 0:U.wo_addr_city,wo_addr_state:(k=t==null?void 0:t.billing_address)==null?void 0:k.wo_addr_state,wo_addr_zipcode:(T=t==null?void 0:t.billing_address)==null?void 0:T.wo_addr_zipcode,wo_addr_phone:($=t==null?void 0:t.billing_address)==null?void 0:$.wo_addr_phone,wo_addr_email:(C=t==null?void 0:t.billing_address)==null?void 0:C.wo_addr_email,wo_items:t==null?void 0:t.items,wo_subtotal:0,wo_discount:t==null?void 0:t.wo_discount,wo_tax_rate:5,wo_tax_total:0,wo_grand_total:0}),E=()=>{e.post(route("work-order.update"))},F=()=>{e.wo_items.push({wo_item_category_id:"",wo_item_name:"",wo_item_hours:"",wo_item_rate:""})},L=u=>{e.wo_items.splice(u,1),b()},b=()=>{e.wo_subtotal=0,e.wo_discount||(e.wo_discount=0),e.wo_items.forEach(u=>{e.wo_subtotal+=parseFloat(u.wo_item_line_total)}),e.wo_tax_total=parseFloat(e.wo_subtotal-e.wo_discount)*(e.wo_tax_rate/100),console.log(e.wo_discount),e.wo_grand_total=e.wo_subtotal-e.wo_discount+e.wo_tax_total},V=u=>{const d=e.wo_items[u],a=d.wo_item_hours*d.wo_item_rate;d.wo_item_line_total=a.toFixed(2),b()},j=Z({onUpdate:({editor:u})=>{e.wo_notes=u.getHTML()},editorProps:{attributes:{class:"border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm p-2 min-h-[12rem]"}},content:e.wo_notes,extensions:[G]});return W(()=>{p||(e.wo_items=[{wo_item_category_id:"",wo_item_name:"",wo_item_hours:"",wo_item_rate:""}]),p&&b()}),(u,d)=>(v(),f(y,null,[l(o(D),{title:o(p)?"Edit Work Order":"Create Work Order"},null,8,["title"]),l(R,null,{header:m(()=>[s("h2",q,c(o(p)?"Edit":"Create")+" Work Order ",1)]),default:m(()=>[s("div",Y,[s("div",ee,[s("div",oe,[s("div",le,[s("form",{onSubmit:d[19]||(d[19]=K(a=>E(),["prevent"])),class:"mt-6 space-y-3"},[te,se,s("div",ae,[s("div",null,[l(_,{for:"wo_addr_customer_name",value:"Customer Name"}),l(i,{id:"wo_addr_customer_name",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_addr_customer_name,"onUpdate:modelValue":d[0]||(d[0]=a=>o(e).wo_addr_customer_name=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_addr_customer_name},null,8,["message"])]),s("div",null,[l(_,{for:"wo_addr_str_address",value:"Street Address"}),l(i,{id:"wo_addr_str_address",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_addr_str_address,"onUpdate:modelValue":d[1]||(d[1]=a=>o(e).wo_addr_str_address=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_addr_str_address},null,8,["message"])]),s("div",null,[l(_,{for:"city",value:"City"}),l(i,{id:"wo_addr_city",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_addr_city,"onUpdate:modelValue":d[2]||(d[2]=a=>o(e).wo_addr_city=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_addr_city},null,8,["message"])]),s("div",null,[l(_,{for:"state",value:"State"}),l(i,{id:"wo_addr_state",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_addr_state,"onUpdate:modelValue":d[3]||(d[3]=a=>o(e).wo_addr_state=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_addr_state},null,8,["message"])]),s("div",null,[l(_,{for:"zipcode",value:"Zipcode"}),l(i,{id:"wo_addr_zipcode",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_addr_zipcode,"onUpdate:modelValue":d[4]||(d[4]=a=>o(e).wo_addr_zipcode=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_addr_zipcode},null,8,["message"])]),s("div",null,[l(_,{for:"phone",value:"Phone"}),l(i,{id:"phone",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_addr_phone,"onUpdate:modelValue":d[5]||(d[5]=a=>o(e).wo_addr_phone=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_addr_phone},null,8,["message"])]),s("div",null,[l(_,{for:"email",value:"Email"}),l(i,{id:"email",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_addr_email,"onUpdate:modelValue":d[6]||(d[6]=a=>o(e).wo_addr_email=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_addr_email},null,8,["message"])])]),de,_e,s("div",ie,[s("div",null,[l(_,{for:"wo_title",value:"Job Title"}),l(i,{id:"wo_title",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_title,"onUpdate:modelValue":d[7]||(d[7]=a=>o(e).wo_title=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_title},null,8,["message"])]),s("div",null,[l(_,{for:"wo_bike_category",value:"Category"}),l(i,{id:"wo_bike_category",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_bike_category,"onUpdate:modelValue":d[8]||(d[8]=a=>o(e).wo_bike_category=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_bike_category},null,8,["message"])]),s("div",null,[l(_,{for:"wo_bike_model",value:"Model"}),l(i,{id:"wo_bike_model",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_bike_model,"onUpdate:modelValue":d[9]||(d[9]=a=>o(e).wo_bike_model=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_bike_model},null,8,["message"])]),s("div",null,[l(_,{for:"wo_bike_color",value:"Color"}),l(i,{id:"wo_bike_color",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_bike_color,"onUpdate:modelValue":d[10]||(d[10]=a=>o(e).wo_bike_color=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_bike_color},null,8,["message"])]),s("div",null,[l(_,{for:"wo_sr_no",value:"Serial Number"}),l(i,{id:"wo_sr_no",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_sr_no,"onUpdate:modelValue":d[11]||(d[11]=a=>o(e).wo_sr_no=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_sr_no},null,8,["message"])]),s("div",null,[l(_,{for:"wo_po_no",value:"PO Number"}),l(i,{id:"wo_po_no",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_po_no,"onUpdate:modelValue":d[12]||(d[12]=a=>o(e).wo_po_no=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_po_no},null,8,["message"])]),s("div",null,[l(_,{for:"wo_bike_warranty",value:"Warranty"}),l(i,{id:"wo_bike_warranty",type:"text",class:"mt-1 block w-full",modelValue:o(e).wo_bike_warranty,"onUpdate:modelValue":d[13]||(d[13]=a=>o(e).wo_bike_warranty=a)},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_bike_warranty},null,8,["message"])]),s("div",null,[l(_,{for:"wo_return_date",value:"Return Date",class:"mb-1"}),l(o(H),{modelValue:o(e).wo_return_date,"onUpdate:modelValue":d[14]||(d[14]=a=>o(e).wo_return_date=a),teleport:!0},null,8,["modelValue"]),l(n,{class:"mt-2",message:o(e).errors.wo_return_date},null,8,["message"])]),s("div",null,[l(_,{for:"wo_status",value:"Status"}),l(o(S),{style:{"margin-top":"3px !important"},modelValue:o(e).wo_status,"onUpdate:modelValue":d[15]||(d[15]=a=>o(e).wo_status=a),options:o(A)},null,8,["modelValue","options"]),l(n,{class:"mt-2",message:o(e).errors.wo_status},null,8,["message"])]),s("div",null,[l(_,{for:"wo_notes",value:"Notes"}),l(o(J),{editor:o(j)},null,8,["editor"]),l(n,{class:"mt-2",message:o(e).errors.wo_notes},null,8,["message"])])]),ne,re,s("div",ue,[s("div",null,[l(Q,{disabled:o(e).processing,onClick:d[16]||(d[16]=a=>F()),type:"button",class:"float-right"},{default:m(()=>[g(" Add Item ")]),_:1},8,["disabled"])])]),(v(!0),f(y,null,P(o(e).wo_items,(a,w)=>(v(),f(y,{key:a.id},[s("div",me,[s("div",we,[l(_,{value:"Item Category #"+(w+1)},null,8,["value"]),l(o(S),{style:{"margin-top":"3px !important"},modelValue:a.wo_item_category_id,"onUpdate:modelValue":r=>a.wo_item_category_id=r,options:o(I)},null,8,["modelValue","onUpdate:modelValue","options"])]),s("div",ce,[l(_,{for:"item_name",value:"Item Name"}),l(i,{id:"wo_item_name",type:"text",class:"mt-1 block w-full",modelValue:a.wo_item_name,"onUpdate:modelValue":r=>a.wo_item_name=r},null,8,["modelValue","onUpdate:modelValue"])]),s("div",pe,[l(_,{for:"wo_item_hours",value:a.wo_item_category_id==1?"Hours":"Quantity"},null,8,["value"]),l(i,{id:"wo_item_hours",type:"number",class:"mt-1 block w-full",modelValue:a.wo_item_hours,"onUpdate:modelValue":r=>a.wo_item_hours=r,onKeyup:r=>V(w)},null,8,["modelValue","onUpdate:modelValue","onKeyup"])]),s("div",ge,[l(_,{for:"wo_item_rate",value:"Rate"}),l(i,{id:"wo_item_rate",type:"number",class:"mt-1 block w-full",modelValue:a.wo_item_rate,"onUpdate:modelValue":r=>a.wo_item_rate=r,onKeyup:r=>V(w)},null,8,["modelValue","onUpdate:modelValue","onKeyup"])]),s("div",be,[l(_,{for:"line_total",value:"Line Total"}),l(i,{disabled:"",id:"line_total",type:"number",class:"mt-1 block w-full",modelValue:a.wo_item_line_total,"onUpdate:modelValue":r=>a.wo_item_line_total=r},null,8,["modelValue","onUpdate:modelValue"])])]),w===o(e).wo_items.length-1&&w!=0?(v(),f("div",fe,[s("div",null,[l(N,{disabled:o(e).processing,type:"button",class:"float-right text-xs",onClick:r=>L(w)},{default:m(()=>[g(" Remove ")]),_:2},1032,["disabled","onClick"])])])):M("",!0)],64))),128)),s("div",ve,[s("div",ye,[s("div",Ve,[s("div",xe,[he,s("div",Ue," $"+c(o(e).wo_subtotal.toFixed(2)),1)]),s("div",ke,[Te,s("div",$e,[g(" $ "),l(i,{type:"number",class:"ml-1 w-20",modelValue:o(e).wo_discount,"onUpdate:modelValue":d[17]||(d[17]=a=>o(e).wo_discount=a),onKeyup:d[18]||(d[18]=a=>b())},null,8,["modelValue"])])]),s("div",Ce,[Oe,s("div",null,c(o(e).wo_tax_rate)+"%",1)]),s("div",Se,[Ne,s("div",null," $"+c(o(e).wo_tax_total.toFixed(2)),1)]),s("div",Ie,[Ae,s("div",Ee," $"+c(o(e).wo_grand_total.toFixed(2)),1)])])])]),s("div",Fe,[l(X,{disabled:o(e).processing},{default:m(()=>[g(c(o(p)?"Update":"Save"),1)]),_:1},8,["disabled"]),l(o(B),{href:u.route("work-order.index")},{default:m(()=>[l(N,{disabled:o(e).processing},{default:m(()=>[g(" Cancel ")]),_:1},8,["disabled"])]),_:1},8,["href"])])],32)])])])])]),_:1})],64))}};export{Xe as default};
