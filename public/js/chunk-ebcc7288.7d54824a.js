(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-ebcc7288"],{bb51:function(t,s,a){"use strict";a.r(s);var e=function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",[t.isSignedIn?a("site-services"):a("site-intro")],1)},i=[],n=a("5530"),l=function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{staticClass:"large-hero"},[a("img",{staticClass:"large-hero__image",attrs:{src:"/images/background4.jpg",alt:"university photo"}}),a("div",{staticClass:"large-hero__text text-center"},[a("h1",{staticClass:" mb-3"},[t._v("علم و تعلم")]),a("p",{staticClass:"text-md"},[t._v(" هدفنا هو رفع السوية العلمية في المدارس الحكومية بتزويدها بالأساتذة الأكفاء لتغطية النقص الحاصل في الكادر التدريسي ومساعدة طلاب الجامعات في موادهم الجامعية من قبل زملائهم في السنوات الأعلى بمقابل مادي بسيط وتفعيل نظام التعليم بالتبادل ")]),a("router-link",{staticClass:"btn btn-secondary btn-md mt-1 mx-2 ",attrs:{to:"/signin"}},[t._v("تسجيل الدخول")]),a("router-link",{staticClass:"btn btn-primary btn-md  mt-1 mx-2",attrs:{to:"/signup"}},[t._v("تسجيل حساب")])],1)])},o=[],r={},c=r,u=a("2877"),p=Object(u["a"])(c,l,o,!1,null,null,null),m=p.exports,g=function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{staticClass:"mb-4 "},[a("div",{staticClass:"container-fluid"},[a("div",{staticClass:"row"},t._l(t.sections,(function(t){return a("div",{key:t.title,staticClass:"col-md-4 m-0 p-0"},[a("layout-item",{attrs:{bgImg:t.bg,title:t.title,paragraph:t.paragraph,link:t.link,color:t.color,soon:t.soon}})],1)})),0)])])},_=[],d=function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{staticClass:"card p-3 d-felx flex-column"},[a("img",{staticClass:"card__icon mt-4 mb-3",attrs:{src:t.icon}}),a("h4",{staticClass:"text-center mt-2 mb-3"},[t._v(" "+t._s(t.title)+" ")]),a("p",{staticClass:"card__paragraph"},[t._v(" "+t._s(t.paragraph)+" ")]),a("router-link",{staticClass:"btn btn-outline-primary mt-auto ",attrs:{to:t.link}},[t._v("الذهاب ")])],1)},b=[],h={props:["icon","title","paragraph","link"]},v=h,f=Object(u["a"])(v,d,b,!1,null,null,null),C=f.exports,y=a("e581"),k={components:{serviceCard:C,layoutItem:y["a"]},data:function(){return{sections:[{bg:"/images/layout-school-section.jpg",title:" قسم المدارس",paragraph:"عندك يوم أو يومين فراغ ببرنامجك ، شو رأيك تدرس بوحدة من المدارس اللي حواليك بالمواد اللي بتختارها ؟",link:"/teaching-schools",color:"primary",soon:!1},{bg:"/images/layout-univirsity-section.jpg",title:" قسم الجامعات",paragraph:"التشبيك ما بين طلاب الجامعات لمساعدة بعضهم البعض في موادهم الجامعية",link:"/university-services",color:"light",soon:!1},{bg:"/images/layout-collaboration-section.jpg",title:"علم و تعلم",paragraph:"عم تدور على حدا يعلمك شي  (one to one)؟ وبنفس الوقت قادر تعلم شي هو بحاجتو\n          هون رح تلاقي طلبك .\n          ",link:"/show-teachers",color:"secondary",soon:!0}]}}},x=k,j=Object(u["a"])(x,g,_,!1,null,null,null),w=j.exports,I=a("2f62"),O={name:"Home",components:{siteIntro:m,siteServices:w},computed:Object(n["a"])({},Object(I["d"])({isSignedIn:function(t){return t.Auth.isSignedIn}}))},S=O,E=Object(u["a"])(S,e,i,!1,null,null,null);s["default"]=E.exports},e581:function(t,s,a){"use strict";var e=function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{class:"layout-item text-"+t.colorShould},[a("img",{staticClass:"layout-item__bg",attrs:{src:t.bgImg}}),a("div",{staticClass:"layout-item__content p-1 d-flex flex-column"},[a("h3",{staticClass:"layout-item__title"},[t._v(t._s(t.title))]),a("p",{staticClass:"layout-item__paragraph"},[t._v(t._s(t.paragraph))]),a("router-link",{class:"btn btn-outline-"+t.colorShould+" "+(1==t.soon?"disabled":"")+" mt-auto",attrs:{type:"button",to:t.link}},[t._v(t._s(1==t.soon?"soon":"Explore"))])],1)])},i=[],n={props:["bgImg","title","paragraph","link","color","soon"],computed:{colorShould:function(){return"light"==this.color?"dark":"light"}}},l=n,o=a("2877"),r=Object(o["a"])(l,e,i,!1,null,null,null);s["a"]=r.exports}}]);
//# sourceMappingURL=chunk-ebcc7288.7d54824a.js.map