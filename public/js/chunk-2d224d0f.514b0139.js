(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d224d0f"],{e26b:function(e,t,a){"use strict";a.r(t);var r=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"search-large-hero"},[a("img",{staticClass:"search-large-hero__bg",attrs:{src:"/images/teach-materials-bar.jpg"}}),a("div",{staticClass:"search-large-hero__content"},[a("h1",{staticClass:"text-center mt-4"},[e._v("المواد المراد تدريسها")]),a("p",{staticClass:"mt-2"},[e._v(" يمكنك اختيار المواد التي تتقنها في كليتك لتدرسها لغيرك من الطلاب ")]),a("multiselect",{staticClass:"search-large-hero__searchbox",attrs:{"track-by":"id",searchable:!1,"close-on-select":!0,hideSelected:!0,multiple:!0,label:"name","tag-placeholder":"اختر المواد المراد تدريسها",value:"id",options:e.materialsModel},model:{value:e.pickedMaterials,callback:function(t){e.pickedMaterials=t},expression:"pickedMaterials"}}),a("button",{staticClass:"btn btn-primary search-large-hero__btn",on:{click:e.submit}},[e._v(" تأكيد ")])],1)])},s=[],c=(a("d81d"),a("96cf"),a("1da1")),n=a("50ba"),i={mounted:function(){this.getMaterials()},data:function(){return{materialsModel:[],pickedMaterials:[]}},methods:{submit:function(){var e=this;return Object(c["a"])(regeneratorRuntime.mark((function t(){return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:0==e.materialsModel.length?alert("اختر مواد"):Object(n["a"])().post("subject/select",{subject:e.pickedMaterials.map((function(e){return e.id}))}).then((function(){e.$router.push("/university-services/teaching-materials/complete-teacher-info")}));case 1:case"end":return t.stop()}}),t)})))()},getMaterials:function(){var e=this;return Object(c["a"])(regeneratorRuntime.mark((function t(){var a,r;return regeneratorRuntime.wrap((function(t){while(1)switch(t.prev=t.next){case 0:return t.next=2,Object(n["a"])().get("subject/select");case 2:a=t.sent,r=a.data,[],e.materialsModel=r.subjects;case 6:case"end":return t.stop()}}),t)})))()}}},l=i,o=a("2877"),u=Object(o["a"])(l,r,s,!1,null,null,null);t["default"]=u.exports}}]);
//# sourceMappingURL=chunk-2d224d0f.514b0139.js.map