(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d20f025"],{b298:function(e,t,r){"use strict";r.r(t);var a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("wrapper",{attrs:{"wraper-width":"soft"}},[r("p",{staticClass:"text-right mt-4"},[e._v(" الأساتذة المقترحين من أجل مادة "+e._s(e.$route.query.materialName)+" ")]),r("p",{staticClass:"text-right"},[e._v(" العودة الى "),r("router-link",{attrs:{to:"/university-services/show-teachers"}},[e._v("صفحة البحث ")])],1),r("p",{staticClass:"text-right"},[e._v(" أو"),r("router-link",{attrs:{to:"/university-services/show-univirsities-teachers"}},[e._v(" ابحث ")]),e._v(" عن أساتذة خارج جامعتك صفحة البحث ")],1),r("div",{staticClass:"row my-4"},e._l(e.teachers,(function(e){return r("div",{key:e.id,staticClass:"col-lg-4 col-sm-2"},[r("teacherCard",{attrs:{profile:e}})],1)})),0)])},s=[],i=(r("d81d"),r("96cf"),r("1da1")),n=r("50ba"),c=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"card profile-card profile-card--lg-fixed-height"},[void 0!=e.profile.image?r("img",{staticClass:"profile-card__image",attrs:{src:e.$fullUrl(e.profile.image)}}):e._e(),r("h3",{staticClass:"profile-card__name mt-2"},[e._v(e._s(e.profile.name))]),r("p",{staticClass:"profile-card__detail"},[e._v(e._s(e.profile.collage))]),r("p",{staticClass:"mt-auto"},[r("b",{},[e._v("تقييم:")]),e._v(" "+e._s(e.profile.rate))]),r("b-button",{staticClass:"m-0 mx-n2",attrs:{size:"sm",variant:"primary"},on:{click:function(t){return e.showInfo(e.profile.id)}}},[e._v(" عرض الملف الشخصي ")])],1)},l=[],o={props:["profile"],methods:{showInfo:function(e){this.$router.push({path:"/profile-info",query:{userId:e}})}}},u=o,p=r("2877"),f=Object(p["a"])(u,c,l,!1,null,null,null),h=f.exports,d={components:{teacherCard:h},data:function(){return{teachers:[]}},mounted:function(){this.getResults()},methods:{getResults:function(){var e=this;return Object(i["a"])(regeneratorRuntime.mark((function t(){var r,a;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:return t.next=2,Object(n["a"])().post("teacher/request",null,{params:{subject:e.$route.query.materialId}});case 2:r=t.sent,a=r.data,e.teachers=a.TeachersNames,e.teachers=e.teachers.map((function(e){return{image:e.user_image,id:e.user_id,name:e.full_name,rate:e.rate,collage:e.college}}));case 6:case"end":return t.stop()}}),t)})))()}}},m=d,_=Object(p["a"])(m,a,s,!1,null,null,null);t["default"]=_.exports}}]);
//# sourceMappingURL=chunk-2d20f025.716e381d.js.map