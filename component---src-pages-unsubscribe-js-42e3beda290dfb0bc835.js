(window.webpackJsonp=window.webpackJsonp||[]).push([[9],{v32E:function(e,a,t){"use strict";t.r(a);var l=t("q1tI"),n=t.n(l),s=t("TJpk"),m=t("Wbzz"),r=t("FWHX"),c=t.n(r);var i=function(e){var a,t;function l(a){var t;return(t=e.call(this,a)||this).submitForm=t.submitForm.bind(function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(t)),t.state={status:""},t}t=e,(a=l).prototype=Object.create(t.prototype),a.prototype.constructor=a,a.__proto__=t;var s=l.prototype;return s.render=function(){var e=this.state.status;return n.a.createElement("form",{onSubmit:this.submitForm,action:"https://formspree.io/mnbblykm",method:"POST",className:"row topBefore padding5_top"},n.a.createElement("div",{className:"small-11 columns"},n.a.createElement("input",{type:"email",className:"login-box-input",name:"Unsubscribe",id:"userEmail",required:!0,"data-error":"NEW ERROR MESSAGE",placeholder:"name@email.com"})),n.a.createElement("div",{className:"small-11 columns padding5_top"},"SUCCESS"===e?n.a.createElement("input",{className:"button",type:"submit",id:"send_message",name:"submit",value:"Your email has been removed."}):n.a.createElement("input",{className:"button",type:"submit",id:"send_message",name:"submit",value:"Unsubscribe"}),"ERROR"===e&&n.a.createElement("input",{className:"button",type:"submit",id:"send_message",name:"submit",value:"Ooops! There was an error."})))},s.submitForm=function(e){var a=this;e.preventDefault();var t=e.target,l=new FormData(t),n=new XMLHttpRequest;n.open(t.method,t.action),n.setRequestHeader("Accept","application/json"),n.onreadystatechange=function(){n.readyState===XMLHttpRequest.DONE&&(200===n.status?(t.reset(),a.setState({status:"SUCCESS"})):a.setState({status:"ERROR"}))},n.send(l)},l}(n.a.Component),o=t("WXbE"),u=t.n(o);a.default=function(){return n.a.createElement("div",null,n.a.createElement(c.a,null,n.a.createElement(s.Helmet,null,n.a.createElement("meta",{charSet:"utf-8"}),n.a.createElement("title",null,"Biscaypla.in - Monthly picks for people interested in creativity"),n.a.createElement("meta",{name:"description",content:"Biscay Plain provides 5 free articles, book recommendations and guides about creativity in your inbox every last Sunday morning of the month"}),n.a.createElement("link",{rel:"canonical",href:"https://biscaypla.in/unsubscribe"})),n.a.createElement("div",{className:"body_full"},n.a.createElement("h1",{className:"hidden-h1"},"Biscay Plain - Unsubscribe"),n.a.createElement("img",{src:u.a,className:"topo_img",alt:"topo"}),n.a.createElement("div",{className:"row expanded body_full"},n.a.createElement("div",{className:"small-12 medium-8 columns"},n.a.createElement("div",{className:"row full-left-pannel"},n.a.createElement("div",{className:"small-12"},n.a.createElement(m.a,{to:"/"},n.a.createElement("img",{className:"logo_bp",src:t("BAUC"),alt:"biscay plain logo"}))),n.a.createElement("div",{className:"small-12 columns"},n.a.createElement("h2",null,"You will be missed..."),n.a.createElement("h5",null,"Unsuscribe from our email list"),n.a.createElement("p",null,"If you'd no longer like to receive email from convy please enter your email address below. Your request will be effective within the next 24 hours."),n.a.createElement(i,null)))),n.a.createElement("div",{className:"footer-medium columns small-12 align-self-bottom"},n.a.createElement("div",{className:"row align-center"},n.a.createElement("div",{className:"column small-3"},n.a.createElement("small",null,n.a.createElement(m.a,{className:"menu__item",to:"#"},n.a.createElement("span",{className:"menu__item-name"},"Get in touch")))),n.a.createElement("div",{className:"column small-3"},n.a.createElement("small",null,n.a.createElement(m.a,{className:"menu__item",to:"#"},n.a.createElement("span",{className:"menu__item-name"},"Suggest your article")))),n.a.createElement("div",{className:"column small-3"},n.a.createElement("small",null,n.a.createElement(m.a,{className:"menu__item",to:"/legal/"},n.a.createElement("span",{className:"menu__item-name"},"Privacy policy")))),n.a.createElement("div",{className:"column small-3"},n.a.createElement("small",null,"© BiscayPlain 2011-2021"))))))))}}}]);
//# sourceMappingURL=component---src-pages-unsubscribe-js-42e3beda290dfb0bc835.js.map