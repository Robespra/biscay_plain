import React from 'react'
import Header from '../components/header'
import Footer from '../components/footer'
import { Link } from "gatsby"
let pathPrefix = `/`

const Kelisto = () => (
<div>
<Header/>
<div className="kelisto_bg">
<div className="hero_project_img">
    <img className="kelisto_img" src={require('../images/kelisto/case_kelisto_1.png')} alt="kelisto hero case study"/>
    </div>
<div className="hero_project_title_block">

        <h1 className="project-title">kelisto.es</h1>
        <div className="skills_underline_orange"></div>
    </div>
    
  <div className="row align-left hero_dtls">
        <div className="small-11 medium-8 columns">
        <div className="row align-left padding5_bottom">
            <div className="small-11 medium-6 columns">
                <h3 className="">Client</h3>
                <h2 className="project-title">kelisto.es</h2>
            </div>
            <div className="small-11 medium-6 columns">
                <h3 className="">Year</h3>
                <h2 className="project-title">2013/2015</h2>
            </div>
        </div>
        <div className="row align-left padding5_bottom">
            <div className="small-11 medium-10 columns">
                <h3 className="">Case</h3>
                <h2 className="project-title">Designing for a data heavy application</h2>

            </div>
        </div>
        <div className="row align-left padding5_bottom">
            <div className="small-11 medium-10 columns">
                <h3 className="">Scope</h3>
                <h2 className="project-title">Price comparators, ecommerce & content, CRO, UI/UX improvements, Front-end Dev</h2>

            </div>
        </div>
        </div>
    </div>

  
</div>

<div className="section">
<div className="row align-center padding5_top">

    <div className="small-11 medium-9 columns padding5_top">

        <h3 className="project-title">Overview</h3>

        <h4 className="padding5_top">skills I grew in this project</h4>
                <div className="skills_underline_orange"></div>
        <div className="row align-left">
        <div className="small-11 medium-5 columns ">
                        <ul className="no_bullet padding10_bottom">
                        <li className="checked twolines">conversion metrics</li>
                        <li className="checked twolines">communication skills</li>
                        <li className="checked twolines">observation and listening</li>
                        <li className="checked twolines">behavior design</li>
                        <li className="checked twolines">coding/front-end</li>
                        <li className="checked twolines">asking good questions</li>
                        <li className="checked twolines">copywriting</li>
                        <li className="checked twolines">conversion-optimization design</li>

                        </ul>
        </div>  
        <div className="small-11 medium-5 columns ">
                            <ul className="no_bullet padding10_bottom">
                           <li className="checked twolines">funnel acquisition metrics</li>     
                        <li className="checked twolines">revenue model</li>
                        <li className="checked twolines">business</li>
                        <li className="checked twolines">retention/engagement metrics</li>
                        <li className="checked twolines">financial metrics</li>
                        <li className="checked twolines">management skills</li>
                        <li className="checked twolines">cross-functional skills</li>
                        <li className="checked twolines">psychology</li>

                                </ul>
        </div> 
                      </div> 
</div> 
</div> 

<div className="row align-center padding5_top">
 <div className="small-11 medium-9 columns padding5_top">
 <p className="text-left content-project padding5_top">I worked full time as product designer for kelisto.es. kelisto is a price comparators for insurances, energy, finance and communication. Each of these area was a specific product including its own vertical subproducts. Alongside the comparators was a solid news platforms, a community of users designed for traffic generation and a customer account. I joined the project in the very early design phases. I accepted the challenge of designing multiple and various products in a short spare of time and setting up a process for design involving both business and development.</p>

<img src={require('../images/kelisto/numbers_kelisto.svg')} alt="kelisto metrics"/>

 <p className="text-left content-project">List of the <strong>products</strong> designed for kelisto :</p>
 <ul className="no_bullet">
            <li className="checked"> <strong>8 </strong>responsive price comparision products + own products vertical subproducts</li>
            <li className="checked"><strong>Responsive</strong> Customer Account Dashboard (CAM)</li>            
            <li className="checked">Responsive <strong>Community product</strong></li>
            <li className="checked">Responsive <strong>News</strong> Content Management</li>
        </ul>



<h3 className="project-title padding10_top">Strategy for multiple product launch</h3>
        <p className="text-left content-project">It is always difficult for me to answer when I am asked to describe my design process because it depends on the actual company setup I am working with. The overall phases I follow are the same in most projects but evil is in the detail. In Kelisto I have been the only designer within multiple business and dev team members for more than one year during the most critical moment : official launch. I have learnt to adapt my process to this very specific context and diverse teams involved. I knew it was not going to be easy so I did my best to deliver well designed and conversion-optimized products. Alongside I was working on setting up a lean design process with the company. </p>
        <img className="lazy padding5_top" src={require('../images/kelisto/case_kelisto_3_ci.jpg')} alt="kelisto ci case study"/>
        <p className="caption">car insurance product</p>
        <h3 className="project-title padding10_top">Design Process</h3>
        <img className="lazy padding5_top" src={require('../images/kelisto/process.svg')} alt="kelisto metrics"/>
<p className="caption">This is the process I am following in most of my projects. I like to get to code early as it facilitates prototyping and hand-off to developers.</p>

        <h4 className="project-title padding5_top">1/ Research and KPI's</h4>
        <p className="text-left content-project">Just before landing in the price comparator business, I finalized a conversion-increase project for a retail ecommerce website in London. Price comparision was way more complex but I somehow felt challenged by the huge scope of this project. For every product I designed in kelisto, the very first step was to sit with the product manager in order to understand the purpose of the product and how success will be measured. I basically learnt to ask the correct questions :
            </p>
            <ul className="no_bullet">
        <li className="checked">What’s the story of how this product got to this point?</li>
<li className="checked">What are upcoming goals and risks for this product?</li>
<li className="checked">What information or element will be the top priority in your product?</li>
<li className="checked">Who are your target users? Why?</li>
<li className="checked">List the products/process inspiration</li>
<li className="checked twolines">How will we measure performance and success of this product? What are the kpi's of this product?</li>
<li className="checked twolines">What are the closest competitors to Kelisto? What would be your strategy ?</li>
</ul>


    <h6 className="project-title padding5_top">Deliverables / Methods</h6>
    proto-persona, field studies (for existing products), benchmarking, surveys, data mining and analytics
   
        <h4 className="project-title padding10_top">2/ Information Architecture</h4>

        <p className="text-left content-project">During this phase I explored and assess multiple solutions. Alongside with the product manager we decided on new design directions and opportunities. Most of the time our goal was to offer our users a process similar to most of the competitor and try to identify one killer feature to prioritize. After a couple of session working on wireframes I eventually started to code early a potential prototype. I liked to start coding as soon as possible because it is way easier to make decision with a product in context and I would also save time in development (I was also in charge of implementing the solution). One of my priority was to get the copy as soon as possible, it is not as easy as it seems. Working on a prototype will make this first priority.</p>
        <p className="text-left content-project">
         Once we agreed on the beta version with business stakeholders, we started to prioritize and plan features development with the engineers (yes, dev stories). The prototype allowed us to discuss technical feasibility, performance issues, which third party frameworks to use, what types of animations were possible... At this point, we usually iterate again including technical contraints in our plans and adjusting the prototype.

        </p>
        <img className="padding10_top lazy" src={require('../images/kelisto/case_kelisto_flowchart.jpg')} alt="kelisto comms case study flowchart"/>
    <p className="caption"> I validated flowcharts with business and started mocking-up products on this basis.</p>
    <img className="padding10_top lazy" src={require('../images/kelisto/case_kelisto_process_wireframes.jpg')} alt="kelisto comms case study wireframes"/>
    <p className="caption"> Wireframes</p>



        <h6 className="project-title">Deliverables / Inputs</h6>
     flow chart, customer journey map, user-flows, content, copy, wireframes and ideally coded prototype without design. Features priorization matrix.
     <h6 className="project-title padding5_top">tools</h6>
     Axure, Sketch, Invision
     <h4 className="project-title padding10_top">3/ Visual Design</h4>
     <img className="padding10_top lazy" src={require('../images/kelisto/case_kelisto_process_finaldesign_comms.jpg')} alt="kelisto comms case study final design"/>
    <p className="caption">Final design ready to be uploaded and shared in Invision for feedback! Once validated I quickly move to HTML/CSS/JS protoyping</p>
        <p className="text-left content-project">Having the features priorized and planned gave me the opportunity to spend more time working on the prototype. Prototyping present your work in a more dynamic and iterative way. Once I finalized a realistic version of the prototype I liked to run some usability testing with friends, colleagues or directly running guerrilla testing. At this time more iteration are required with business stakeholders and engineers but we were getting closer to what the final product would be. In this phase I usually worked thinking in what will come next : development and the hand-off of the prototype to the dev team. I therefore tried to be as specific as possible with the design requirement so the development hand-off would be smooth and straightforward.</p>

        <h5 className="project-title padding5_top">Designing for data-heavy products</h5>
        <p className="text-left content-project">The products I designed for Insurances, Energy or Communications involved a lot of information to be displayed to the users. To do so I had to consider and implement basic design principles for every single page :</p>

            <ul className="no_bullet">
                <li className="checked">Visual Hierarchy, repetition and pattern breaking</li>
                <li className="checked">Data-visualisation</li>
                <li className="checked">Responsive-ness</li>
                <li className="checked">Hick’s law</li>
                <li className="checked">Getstalt principles</li>
                <li className="checked">Affordance</li>
                <li className="checked">IxD</li>
                <li className="checked">Copy</li>
        </ul>


        <h6 className="project-title padding5_top">Forms and tables design</h6>
         <p className="text-left content-project">Most of the products I designed were made of a form and a result table. As the amount of data to be entered by the user was huge I have focused in implementing forms best practices (keeping them as short and logical as possible, grouping fields, using a single column layout and inline validation, displaying clear call to action, providing visible and clear error messages...) so the user could provide the required information without leaving the process. </p>

        <h4 className="project-title padding5_top">Forms and tables</h4>
         <p className="text-left content-project">Most of the products I designed were made of a form and a result table. As the amount of data to be entered by the user was huge I have focused in implementing forms best practices (keeping them as short and logical as possible, grouping fields, using a single column layout and inline validation, displaying clear call to action, providing visible and clear error messages...) so the user could provide the required information without leaving the process.. </p>
          <img className="padding10_top lazy" src={require('../images/kelisto/case_kelisto_3_energy.jpg')} alt="kelisto energy case study"/>
    
    <p className="caption">energy product form</p>


        <p className="text-left content-project">Tables were designed to provide price comparison results. All the entry process was meaningless without the ability to visualize the results that fits their needs. These tables had to convert and be responsive. When designing the tables, I paid attention to various factors that made easy to use (density display, quick views, basic filtering...) so we could make sure user would find enough information to make a decision.</p>

        <h6 className="project-title padding5_top">Deliverables / Methods</h6>
        product validation prototype in Invision (feedback collection and iteration); high fidelity prototype (HTML/CSS/JS).
        <h4 className="project-title padding10_top">4/ Development</h4>
        <p className="text-left content-project">Getting to work. I always liked to work closely with engineers. They have blunt statements about the product. Their inputs are always valuable and we can directly explore design possibilities.</p>

        <h5 className="project-title padding5_top">Breaking the classic design waterfall process</h5>

        <p className="text-left content-project">I did my best to integrate design in agile methodology by getting to code as early as possible. Static designs waterfall makes less and less sense in this multi-devices age. I still use static Sketch design to solve specific problems but I definitely like to code as soon as possible. 
        Once the final prototype was tested and approved I started to implement it with a back end developer. In the case of having a back-end developer working on both front and back development I provided as much information as possible with regards to design specs. At this point, iteration was still necessary for small details. I learnt to share design feedback early and often with engineers and stakeholders. I also allocated some time to do front-end work as well in order to make sure the product was fully responsive, fast, accessible and compatible with all the browsers.
        </p>

        <h5 className="project-title padding5_top">Facilitating design hand-off to devs</h5>
        <p className="text-left content-project">
            As our products launches was constantly growing, I considered how we could potentialy help engineers with design tasks and save time when shippping product to production. We needed to think about enabling engineers to continue scaling the design on their own. I started to design a styleguide that would become later a design system. I also tried to document as much as possible the rationalization of design decisions or data inputs. We tend to forget the steps we followed when designing and monitoring various products - documentation is key, kids !.
            <Link to="https://robespra.github.io/kelisto-styleguide/" target="_blank" rel="noopener">see the styleguide<span className="target_blank"></span></Link> 
        </p>
        <img className="padding10_top lazy" src={require('../images/kelisto/case_kelisto_2.jpg')} alt="kelisto lab case study"/>
       
        <p className="caption">styleguide - first step toward a design system</p>
        
        <h6 className="project-title padding5_top">Deliverables / Methods</h6>
     Integration in Rails environment, github, css3 Sass, compass, susy grids, coffeescript, code refactoring, performance reports, accessibility reports, web-mobile browsers compatibility testing validation with browserstack, early usability testing
        <h4 className="project-title padding10_top">5/ Testing & Iteration</h4>
        <p className="text-left content-project">Front-end testing for compatibility was the last step of the development phase. Once the product passed all our tests in the testing environment we shipped it to production. It was just the beggining of a new phase : the post go-live iteration. At this point we run more guerilla testing, getting feedback from everyone : customer support, content team, sales, users... </p>
            <p className="text-left content-project">
        I then priorized changes or features that popped-up during the development phase or the testing. Monitoring conversions with product manager allowed us to list some improvements to be implemented (visual design, bugs, new features...). The list was prioritized by putting the easy tasks that result in quick wins at the top. </p>
        <h5 className="project-title padding5_top">Guerilla testing / Field Studies</h5>
         <p className="text-left content-project">In order to gain insight on existing product about to be redesigned or brand new products, I run a couple of interviews and testing sessions with final users. I basically asked each participant to complete a series of tasks while verbalizing their thoughts. I observed, took notes, then produced a consolidated document to be reviewed with the product managers. My goal was to validate some of the pain points I observed from testing the product myself.</p>

         <h5 className="project-title padding5_top">Increasing conversion</h5>
         <p className="text-left content-project">Once the products were launched a new iteration phases started in order to make sure the conversion was optimal. To do so we validated assumptions by setting up a/b testing. Each product or sub-product launch was combined with a specific <strong>landing page</strong> optimized for SEO and conversion. We monitored closely the landing page conversion and prepared a couple of a/b tests.</p>
         <h6 className="project-title">Helping users to make a decision</h6>
        <p className="text-left content-project">Insurance or Communication buying decisions are consided as pondered decisions. Users usually need the right amount of information in order to make a decision. When working on results pages for these products, I made research on how we could help ease the mental processing and help user make decisions. This research process involved both psychologic tendencies and design research. When designing solution that could potentially increase sells, I took into consideration the following points:</p>

        <p className="text-left content-project"><strong>Customization</strong> leads to better conversion. User need to get the offer that suits their needs. This as also an impact on the number of choices displayed = less is more conversion.</p>
        <p className="text-left content-project"><strong>Real time support </strong>and <strong>humanization</strong> lead to better conversion</p>
        <p className="text-left content-project"><strong>Social Proof</strong> definitely leads to better conversion</p>
        <p className="text-left content-project"><strong>Authority</strong> through expert advices and high-quality content leads to better conversion</p>
        <p className="text-left content-project"><strong>Completion</strong> status leads to better conversion</p>
        <p className="text-left content-project"><strong>Round pricing</strong> for complex products (e.g : health insurance) leads to better conversion</p>
        <p className="text-left content-project"><strong>Scarcity</strong> has to be used with caution but it also leads to better conversion</p>



        <h5 className="project-title padding5_top">Selling ux enhancement to stakeholders</h5>
         <p className="text-left content-project">
             
             Unfortunately I quickly realized that it was hard to sell UX improvement in an already busy features list to be developped. How to deal with UX design as polish on a finished product?</p>

        <p className="text-left content-project">It makes integrating UX design into the lean/agile process very difficult, but it's a pretty common situation most designers have to face. How to deal with it ? Communication and metrics.  
         </p>
         <strong className="padding5_top">Communication</strong>
        <p className="text-left content-project">Communicating conceptual ideas, detailed designs, and design rationale both verbally and visually to exec team helped demystifying design process. To do so, I created a lab in order to sell ideas, always focusing on the value these new features would bring.</p>
        <img className="lazy" src={require('../images/kelisto/case_kelisto_6_lab.jpg')} alt="kelisto lab case study"/>
        
         <p className="caption padding5_bottom">when selling ux improvements to product stakeholders communication is key. to do so I created a dedicated page for improvements always focusing on the rationalization and the value these new features would bring.</p>

         <img className="lazy" src={require('../images/kelisto/case_kelisto_7_lab.jpg')} alt="kelisto lab case study"/>
      
         <p className="caption padding5_bottom">structure was the same for every single improvement : as-is; to-be and improvement rationalization</p>
         <img className="lazy" src={require('../images/kelisto/case_kelisto_8_lab.jpg')} alt="kelisto lab case study"/>
        <p className="caption padding5_bottom">it is sometimes easier for stakeholders to take decision in context. I sometimes prepared interactive images mixing current page and prototype. before (as-is) / after (to-be : prototype)</p>



        <strong>Bring the data</strong>

<p className="text-left content-project">Following-up and iterate the design solutions you offer will also create trust with stackholders, showing that you also aim to generate more revenue, not just paint a shinny product. In this particular situation, being a UX designer with code skills made the process not easier but faster. The very first step of dealing with business stakeholders is to bring the data. Not only conversion but also converting UX to tangible metrics as much as I could.
    <a href="https://robespra.github.io/kelisto-lab/#/" target="_blank" rel="noopener">see the idea lab<span className="target_blank"></span></a>
</p>


<h6 className="project-title">Deliverables / Methods</h6>
usability benchmarking, online assessments, surveys, A/B testing, usability checklist, UX-UI Checklist, Heuristic analisis, setup of Inspectlet / HotJar, Mixpanel, Google Analytics, Intercom, SWOT Analysis of current product


<img className="padding10_top lazy" src={require('../images/kelisto/case_kelisto_4_cam.jpg')} alt="kelisto lab case study"/>
<p className="caption padding5_bottom">this project also included Customer Account Management design</p>

<h4 className="project-title padding10_top">Where did this process fail?</h4>
<p className="text-left content-project">The scope of the project was so huge and despite the fact that an additional UX designer joined the team at some point I realized I was facing an bigger and common issue : the organization was not design inclusive. We had to fight (a lot) for small improvements and get the organization understand that don't only care for how product look. We launched so many products in a short period of time that our engineers were sometimes left alone with the design. The styleguide needed to be turned into a design system which required much of a time I did not have. There were little room left for iteration (optimizing current products and fixing design mistakes I made). Design was somehow lost between business and back-end teams. If I were to start all over again (and I happily would!) I would make sure we take time to setup a consistent data-driven design system and process from the very beggining. I learnt that before setting up a design system it was important to grow a design culture within the organization first.</p>  
<img className="padding10_top lazy" src={require('../images/kelisto/numbers_kelisto.svg')} alt="kelisto hero case study figures"/>

 <h4 className="padding5_top">skills I grew in this project</h4>
        <div className="skills_underline_orange"></div>
<div className="row align-left">
<div className="small-11 medium-5 columns ">
        <ul className="no_bullet padding10_bottom">
        <li className="checked twolines">conversion metrics</li>
        <li className="checked twolines">communication skills</li>
        <li className="checked twolines">observation and listening</li>
        <li className="checked twolines">behavior design</li>
        <li className="checked twolines">coding/front-end</li>
        <li className="checked twolines">selling UX</li>

        </ul>
</div>  
        <div className="small-11 medium-5 columns ">
            <ul className="no_bullet padding10_bottom">
        <li className="checked twolines">revenue model</li>
        <li className="checked twolines">resource allocation</li>
        <li className="checked twolines">service design</li>
        <li className="checked twolines">falicitation skills</li>
        <li className="checked twolines">systems design</li>
        <li className="checked twolines">visual design/illustration</li>

                </ul>
</div> 
      </div>   
</div> 
</div>
</div>

<Footer/>
</div>






)




export default Kelisto