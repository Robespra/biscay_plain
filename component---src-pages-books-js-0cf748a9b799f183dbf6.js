(window.webpackJsonp=window.webpackJsonp||[]).push([[3],{"+qB+":function(e,a,t){"use strict";t("YbXK"),t("cFtU"),t("rzGZ"),t("Dq+y"),t("8npG"),t("q1tI");"undefined"!=typeof window&&(window.onload=function(){var e=document.getElementById("send-button"),a=function(e){var a=e.entries(),t=Array.from(a).reduce((function(e,a){var t=a[0],n=a[1];return e[t]=n,"email"===t&&(e._replyTo=n),e}),{});return JSON.stringify(t)},t=document.getElementById("contactForm");t&&t.addEventListener("submit",(function(t){var n=this;t.preventDefault(),e.value="Sending...",function(e){return fetch("https://formspree.io/mnbblykm",{method:"POST",body:a(e),headers:{"Content-Type":"application/json"}}).then((function(e){return e.json()}))}(new FormData(this)).then((function(a){e.value="Thank you!",n.reset()}))}))})},BAUC:function(e,a){e.exports="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIyLjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAzNTAuNSAzNi42IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzNTAuNSAzNi42OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6I0ZEQTA4NTt9Cjwvc3R5bGU+CjxnPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTE1LjUsMzYuMkgwVjAuOGgxMy44YzIuNCwwLDQuNSwwLjMsNi4yLDAuOFMyMy4xLDMsMjMuOSw0YzEuNSwxLjgsMi40LDMuOSwyLjQsNi4yYzAsMi44LTAuOCw0LjgtMi43LDYuMgoJCWMtMC42LDAuNC0xLDAuNy0xLjMsMC44cy0wLjcsMC4zLTEuMywwLjZjMi4zLDAuNCwzLjksMS40LDUuMiwzYzEuMywxLjUsMiwzLjQsMiw1LjZjMCwyLjUtMC44LDQuNi0yLjUsNi41CgkJQzIzLjgsMzUuMSwyMC40LDM2LjIsMTUuNSwzNi4yeiBNNy45LDE1LjFoMy44YzIuMywwLDMuOC0wLjMsNC45LTAuN2MxLjEtMC40LDEuNS0xLjUsMS41LTMuMXMtMC40LTIuNy0xLjQtMy4xCgkJYy0xLTAuNi0yLjctMC43LTQuOS0wLjdIOEw3LjksMTUuMUw3LjksMTUuMXogTTcuOSwyOS40aDUuNWMyLjMsMCwzLjktMC4zLDUuMS0wLjhjMS4xLTAuNiwxLjctMS43LDEuNy0zLjJjMC0xLjctMC42LTIuNy0xLjgtMy4yCgkJYy0xLjMtMC42LTMuMS0wLjgtNS44LTAuOEg4TDcuOSwyOS40eiIvPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTM0LjksMC44aDcuOXYzNS40aC03LjlWMC44eiIvPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTU5LjgsNy45Yy0wLjcsMC42LTEuMSwxLjQtMS4xLDIuNXMwLjQsMS44LDEuNCwyLjRzMy4xLDEuMyw2LjUsMi4xYzMuNCwwLjgsNS45LDIuMSw3LjksMy43CgkJYzEuOCwxLjcsMi44LDQuMSwyLjgsNy4yYzAsMy4yLTEuMSw1LjgtMy41LDcuN2MtMi40LDItNS41LDMtOS40LDNjLTUuNiwwLTEwLjctMi4xLTE1LjItNi4ybDQuNi01LjhjMy44LDMuNCw3LjMsNS4xLDEwLjUsNS4xCgkJYzEuNCwwLDIuNS0wLjMsMy40LTFjMC44LTAuNiwxLjMtMS40LDEuMy0yLjVzLTAuNC0yLTEuMy0yLjVjLTAuOC0wLjYtMi43LTEuMy01LjItMS44Yy00LjEtMS03LjItMi4zLTktMy44CgkJYy0yLTEuNS0yLjgtNC4xLTIuOC03LjVzMS4zLTUuOSwzLjctNy43YzIuNC0xLjgsNS41LTIuNyw5LTIuN2MyLjQsMCw0LjgsMC40LDcsMS4zYzIuNCwwLjgsNC40LDIsNi4yLDMuNGwtMy45LDUuOAoJCWMtMy4xLTIuNC02LjItMy41LTkuNi0zLjVDNjEuNiw2LjksNjAuNiw3LjIsNTkuOCw3Ljl6Ii8+Cgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMTAwLjEsMjkuMmMzLjksMCw3LTEuNSw5LjYtNC42bDUuMSw1LjJjLTQuMSw0LjUtOC43LDYuOC0xNC4yLDYuOHMtMTAtMS43LTEzLjUtNS4yCgkJYy0zLjUtMy40LTUuMy03LjctNS4zLTEzLjFjMC01LjIsMS44LTkuNiw1LjMtMTMuMXM4LTUuMiwxMy4yLTUuMmM1LjgsMCwxMC43LDIuMywxNC42LDYuNmwtNC45LDUuNmMtMi41LTMuMS01LjYtNC42LTkuMy00LjYKCQljLTMsMC01LjUsMS03LjYsM1M5MCwxNS4xLDkwLDE4LjVjMCwzLjQsMSw1LjksMyw3LjlDOTQuOSwyOC4yLDk3LjMsMjkuMiwxMDAuMSwyOS4yeiIvPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTE0NS44LDM2LjJsLTMuMi03LjZoLTE0LjhsLTMuMiw3LjZoLTguNGwxNS4zLTM1LjRoNy42bDE1LjIsMzUuNEgxNDUuOHogTTEzNS4xLDExLjNsLTQuNSwxMC4zaDguOQoJCUwxMzUuMSwxMS4zeiIvPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTE3MS4xLDM2LjJoLTcuOVYyMi4zTDE1MC44LDAuOGg4LjZMMTY3LDE0bDcuNi0xMy4yaDguNkwxNzEsMjIuMkwxNzEuMSwzNi4yTDE3MS4xLDM2LjJ6Ii8+Cgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjI0LjksNGMyLjUsMi4xLDMuNyw1LjMsMy43LDkuN3MtMS4zLDcuNi0zLjgsOS42cy02LjUsMy4xLTExLjcsMy4xaC00LjZ2OS44aC03LjlWMC44aDEyLjUKCQlDMjE4LjQsMC44LDIyMi41LDEuOSwyMjQuOSw0eiBNMjE5LjEsMTcuOWMxLTEuMSwxLjQtMi43LDEuNC00LjZjMC0yLTAuNi0zLjUtMS44LTQuNHMtMy4xLTEuMy01LjgtMS4zaC00LjV2MTJoNS4zCgkJQzIxNi40LDE5LjUsMjE4LjEsMTguOSwyMTkuMSwxNy45eiIvPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTIzNC44LDM2LjJWMC44aDcuOXYyOC40aDE1djdIMjM0Ljh6Ii8+Cgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjg4LjcsMzYuMmwtMy4yLTcuNmgtMTQuOGwtMy4yLDcuNmgtOC40bDE1LjMtMzUuNGg3LjZsMTUuMiwzNS40SDI4OC43eiBNMjc4LDExLjNsLTQuNSwxMC4zaDguOUwyNzgsMTEuM3oiCgkJLz4KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0zMDEuMiwwLjhoNy45djM1LjRoLTcuOVYwLjh6Ii8+Cgk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzQyLjYsMC44aDcuOXYzNS40aC03LjlMMzI1LjcsMTR2MjIuMmgtNy45VjAuOGg3LjVsMTcuMywyMi44VjAuOHoiLz4KPC9nPgo8L3N2Zz4K"},LbRr:function(e,a,t){"use strict";var n=t("q1tI"),l=t.n(n),s=t("Wbzz"),m=t("WXbE"),c=t.n(m);a.a=function(){return l.a.createElement("div",{className:"row"},l.a.createElement("div",{className:"small-12"},l.a.createElement(s.a,{to:"/"},l.a.createElement("img",{className:"logo_bp",src:t("BAUC"),alt:"biscay plain logo"}))),l.a.createElement("img",{src:c.a,className:"topo_img",alt:"topo"}))}},"W/9C":function(e,a,t){"use strict";var n=t("q1tI"),l=t.n(n),s=t("Wbzz");t("nEz2");a.a=function(){return l.a.createElement("footer",null,l.a.createElement("div",{className:"row align-left mtxl mbl"},l.a.createElement("div",{className:"small-11 column"},l.a.createElement(s.a,{to:"/"},l.a.createElement("img",{src:t("BAUC"),alt:"biscay plain logo"}))),l.a.createElement("div",{className:"small-11 column ptm"},l.a.createElement("h2",null,"Monthly picks for people interested in creativity"))),l.a.createElement("div",{className:"row align-center mbl"},l.a.createElement("div",{className:"column small-3"},l.a.createElement("small",null,l.a.createElement(s.a,{className:"menu__item",to:"/contact/"},l.a.createElement("span",{className:"menu__item-name text-align-center"},"Get in touch")))),l.a.createElement("div",{className:"column small-3"},l.a.createElement("small",null,l.a.createElement(s.a,{className:"menu__item",to:"/contact/"},l.a.createElement("span",{className:"menu__item-name text-align-center"},"Suggest your article")))),l.a.createElement("div",{className:"column small-3"},l.a.createElement("small",null,l.a.createElement(s.a,{className:"menu__item",to:"/legal/"},l.a.createElement("span",{className:"menu__item-name text-align-center"},"Privacy policy"))))))}},WXbE:function(e,a,t){e.exports=t.p+"static/animated_topography-66297f627ef2ede75af6e087d63d2824.svg"},Wbzz:function(e,a,t){"use strict";var n=t("q1tI"),l=t.n(n),s=t("+ZDr"),m=t.n(s);t.d(a,"a",(function(){return m.a}));t("lw3w"),t("emEt").default.enqueue,l.a.createContext({})},ZsSW:function(e,a,t){"use strict";t.r(a);var n=t("q1tI"),l=t.n(n),s=t("Wbzz"),m=t("FWHX"),c=t.n(m),r=t("LbRr"),o=t("W/9C");t("WXbE");a.default=function(){return l.a.createElement(c.a,null,l.a.createElement(r.a,null),l.a.createElement("div",{className:"container"},l.a.createElement("div",{className:"row align-center padding10_bottom"},l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement("h1",null,"Books"),l.a.createElement("div",{className:"row mtxl mbxl"},l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.es/Joan-Miro-Work-Like-Gardener/dp/1616896280",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Joan Miro. I Work Like A Gardener ",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/dp/0385480016",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Bird by Bird: Some Instructions on Writing and Life",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/dp/1439156816",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"On Writing: A Memoir of the Craft",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/dp/161180308X",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Writing Down the Bones: Freeing the Writer Within",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/dp/0307273601",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Daily Rituals: How Artists Work",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/dp/0307352153",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Quiet: The Power of Introverts in a World That Can't Stop Talking",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/dp/1455586692",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Deep Work: Rules for Focused Success in a Distracted World",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/dp/1455509124",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"So Good They Can't Ignore You: Why Skills Trump Passion in the Quest for Work You Love",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Rising Strong: The Reckoning. The Rumble. The Revolution.",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/dp/0195019199",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"A Pattern Language: Towns, Buildings, Construction (Center for Environmental Structure Series)",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/exec/obidos/ASIN/1585429201/wwwaustinkleo-20/ref=nosim/",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Drawing on the Right Side of the Brain: The Definitive, 4th Edition ",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/Teenage-Liberation-Handbook-School-Education/dp/0962959170/ref=as_li_ss_tl?s=books&ie=UTF8&qid=1492491828&sr=1-1&keywords=teenage+liberation+handbook&linkCode=sl1&tag=goiren-20&linkId=7748d9de22f874e5870bc32094e9ced0",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"The Teenage Liberation Handbook: How to Quit School and Get a Real Life and Education",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/Choose-Yourself-James-Altucher/dp/1490313370/ref=as_li_ss_tl?s=books&ie=UTF8&qid=1492491705&sr=1-1&keywords=choose+yourself&linkCode=sl1&tag=goiren-20&linkId=e9c3b5d89a09d97d9d41597de83d49ad",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Choose Yourself!",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/Imagineering-Workout-Disney-Imagineers/dp/0786855541/ref=as_li_ss_tl?s=books&ie=UTF8&qid=1492491371&sr=1-3&keywords=disney+imagineering+books&linkCode=sl1&tag=goiren-20&linkId=8bf97ab18693e16db116ec7a9590fa5b",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"The Imagineering Workout (A Walt Disney Imagineering Book)",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/gp/product/0970601980/ref=as_li_ss_tl?ie=UTF8&linkCode=sl1&tag=karslucon-20&linkId=T6VYQOS6EBGB4MUA",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Now You See It: Simple Visualization Techniques for Quantitative Analysis",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/exec/obidos/ASIN/0520021614/etherarnewanduse",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Toward a Psychology of Art: Collected Essays",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/exec/obidos/ASIN/0471285528/etherarnewanduse",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Principles of Form and Design",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/gp/product/0812993012/ref=as_li_qf_sp_asin_il_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=0812993012&linkCode=as2&tag=desigpatte-20&linkId=GPYFL7FIIO4Z5XP4",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Creativity, Inc.: Overcoming the Unseen Forces That Stand in the Way of True Inspiration",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/Steal-Like-Artist-Things-Creative/dp/0761169253",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Steal Like an Artist: 10 Things Nobody Told You About Being Creative",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.cambridge.org/es/academic/subjects/psychology/cognition/cambridge-handbook-creativity-2nd-edition?format=PB",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},l.a.createElement("span",{className:"target_blank"}),"The Cambridge Handbook of Creativity"))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.iberlibro.com/9782865890149/enfants-saturne-psychologie-comportement-artistes-2865890147/plp",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Les enfants de saturne - psychologie et comportement des artistes de l antiquite a la revolution fra: Psychologie et comportement des artistes de ... à la Révolution française (Histoire de l'art)",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.es/Art-Visual-Perception-Psychology-Creative/dp/0520243838",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Art and Visual Perception, Second Edition: A Psychology of the Creative Eye",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.es/Neuropsychologie-art-Th%C3%A9ories-applications-cliniques/dp/2353272282",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Neuropsychologie et art : Théories et applications cliniques",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.fr/Du-vrai-beau-bien-neuronale/dp/2738119042",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Du vrai, du beau, du bien: Une nouvelle approche neuronale",l.a.createElement("span",{className:"target_blank"})))),l.a.createElement("div",{className:"small-12 medium-8 columns"},l.a.createElement(s.a,{to:"https://www.amazon.com/gp/product/0970601980/ref=as_li_ss_tl?ie=UTF8&linkCode=sl1&tag=karslucon-20&linkId=T6VYQOS6EBGB4MUA",target:"_blank",rel:"noopener"},l.a.createElement("h5",{className:""},"Now You See It: Simple Visualization Techniques for Quantitative Analysis",l.a.createElement("span",{className:"target_blank"}))))))),l.a.createElement(o.a,null)))}},lw3w:function(e,a,t){var n;e.exports=(n=t("rzlk"))&&n.default||n},nEz2:function(e,a,t){"use strict";var n=t("q1tI"),l=t.n(n),s=t("Wbzz");t("+qB+");a.a=function(){return l.a.createElement("form",{action:"https://formspree.io/mnbblykm",name:"contactForm",id:"contactForm",method:"post",className:" row topBefore padding5_top"},l.a.createElement("div",{className:"small-7 medium-4 columns textfield_submit"},l.a.createElement("input",{id:"email",className:"unsent",type:"email",name:"Email",placeholder:"Leave your e-mail...",required:!0})),l.a.createElement("div",{className:"small-5 medium-3 columns btn_submit"},l.a.createElement("input",{id:"send-button",className:"submitBtn",type:"submit",value:"Subscribe"})),l.a.createElement("div",{className:"small-12 columns no-spam"},l.a.createElement("small",null,"No spam, no fuss. Unsubscribe anytime. ",l.a.createElement(s.a,{to:"/legal/"},"Privacy policy"))))}},rzlk:function(e,a,t){"use strict";t.r(a);t("E5k/");var n=t("q1tI"),l=t.n(n),s=t("IOVJ");a.default=function(e){var a=e.location,t=e.pageResources;return t?l.a.createElement(s.a,Object.assign({location:a,pageResources:t},t.json)):null}}}]);
//# sourceMappingURL=component---src-pages-books-js-0cf748a9b799f183dbf6.js.map