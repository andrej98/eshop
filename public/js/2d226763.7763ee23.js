(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["2d226763"],{e981:function(e,t,n){"use strict";n.r(t);var a=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"q-my-xl"},[n("q-table",{attrs:{data:e.serverData,"row-key":"name",pagination:e.serverPagination,loading:e.loading,columns:e.columns,title:"List of products","binary-state-sort":""},on:{"update:pagination":function(t){e.serverPagination=t},request:e.request},scopedSlots:e._u([{key:"body",fn:function(t){return n("q-tr",{attrs:{props:t}},[n("q-td",{key:"id",attrs:{props:t}},[n("span",[e._v(e._s(t.row.id))])]),n("q-td",{key:"name",attrs:{props:t}},[n("router-link",{attrs:{to:"/products/"+t.row.id}},[n("span",[e._v(e._s(t.row.name))])])],1),n("q-td",{key:"price",attrs:{props:t}},[n("span",[e._v(e._s(t.row.price)+"€")])]),n("q-td",{staticClass:"text-right"},[n("div",[n("q-btn",{staticClass:"q-mr-xs",attrs:{round:"",icon:"edit"},on:{click:function(n){e.$router.push("/products/"+t.row.id+"/edit")}}}),n("q-btn",{attrs:{round:"",icon:"delete"},on:{click:function(n){e.destroy(t.row.id,t.row.name,t.row.__index)}}})],1)])],1)}}])})],1)},o=[];a._withStripped=!0;var i=n("bc3a"),r=n.n(i),s={data:function(){return{columns:[{name:"id",label:"ID",field:"id",sortable:!1,align:"left"},{name:"name",label:"Name",field:"name",sortable:!0,align:"left"},{name:"price",label:"Price",field:"price",sortable:!0,align:"left"},{name:"actions",label:"Actions",sortable:!1,align:"right"}],selected:[],loading:!1,serverPagination:{page:1,rowsNumber:10,rowsPerPage:5,sortBy:"name",descending:!1},serverData:[]}},methods:{request:function(e){var t=this,n=e.pagination;this.loading=!0,r.a.get("http://127.0.0.1:8000/api/products/list/".concat(n.page,"?rowsPerPage=").concat(n.rowsPerPage,"&sortBy=").concat(n.sortBy,"&descending=").concat(n.descending),{headers:{Accept:"application/json"}}).then(function(e){var a=e.data;t.serverPagination=n,t.serverPagination.rowsNumber=a.rowsNumber,t.serverData=a.rows,t.loading=!1}).catch(function(e){console.log(e),t.loading=!1})},destroy:function(e,t,n){var a=this;this.$q.dialog({title:"Delete",message:"Are you sure to delete "+t+"?",color:"primary",ok:!0,cancel:!0}).then(function(){r.a.delete("http://127.0.0.1:8000/api/products/".concat(e),{headers:{Accept:"application/json"}}).then(function(){a.request({pagination:a.serverPagination,filter:a.filter}),a.$q.notify({type:"positive",timeout:2e3,message:"The product has been deleted."})}).catch(function(e){a.$q.notify({type:"negative",timeout:2e3,message:"An error has been occured."}),console.log(e)})}).catch(function(){})}},mounted:function(){this.request({pagination:this.serverPagination,filter:this.filter})}},c=s,l=n("2877"),d=Object(l["a"])(c,a,o,!1,null,null,null);d.options.__file="Index.vue";t["default"]=d.exports}}]);