import React from 'react'
import Header from '../components/header'
import Footer from '../components/footer'
import { Link } from "gatsby"
let pathPrefix = `/`

const Convy = () => (
<div>
<Header/>
<div className="convy_bg">
<div className="hero_project_img">
    <div className="phone_container">
<div className="isometric">
<div className="mobile_phone">

<img src={require('../images/convy/mobile_phone.svg')} alt="convy optimization case study"/>
</div> 
</div> 
</div> 

    
    {/* <img src={require('../images/convy/intro_top_convy.jpg')} alt="convy case study hero image"/> */}
  </div>
    <div className="hero_project_title_block">
        <h1 className="project-title">Helping companies to convert more with convy consulting</h1>
        <div className="skills_underline_orange"></div>
    </div>
   
  <div className="row align-left hero_dtls">
        <div className="small-11 medium-8 columns">
        <div className="row align-left padding5_bottom">
            <div className="small-11 medium-6 columns">
                <h3 className="">Clients</h3>
                <h2 className="project-title">Telco, Insurance, Finance</h2>
            </div>
            <div className="small-11 medium-6 columns">
                <h3 className="">Year</h3>
                <h2 className="project-title">2018/2019</h2>
            </div>
        </div>
        <div className="row align-left padding5_bottom">
            <div className="small-11 medium-10 columns">
                <h3 className="">Case</h3>
                <h2 className="project-title">Conversion Rate Optimization</h2>

            </div>
        </div>
        <div className="row align-left padding5_bottom">
            <div className="small-11 medium-10 columns">
                <h3 className="">Scope</h3>
                <h2 className="project-title">CRO, Analytics, UI/UX improvements, Front-end Dev</h2>

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

  <div className="row">
  <div className="phone_container">
<div className="isometric">
<div className="mobile_phone">

<img src={require('../images/convy/mobile_phone.svg')} alt="convy optimization case study"/>
</div> 
</div> 
</div> 

  <div className="phone_container">
<div className="isometric">
<div className="mobile_phone">
<img src={require('../images/convy/mobile_phone2.svg')} alt="convy optimization case study"/>
</div> 
</div> 
</div> 
</div>

<div className="row align-center padding5_top">
 <div className="small-11 medium-9 columns padding5_top">
 <p className="text-left content-project padding5_top">With Convy we are helping clients getting more quality conversion and profits. We help companies optimize their app or site revenue using proven marketing webdesign methodologies.</p>

        <h3 className="project-title padding10_top">Process</h3>

        <h4 className="project-title">1_Business analysis and goal definition</h4>
        <p className="text-left content-project">Our process is not linear but most of the time the goal of the first meeting we have with the client is to determine the goals and kpi. Our question is simple : for this products, what do you want the 
        <strong> user</strong> to<strong> achieve</strong>? It is not always a product sale or a transaction. It can be more iteraction with the produt (reviews, comments), more engagement, landing pages, a review of the onboarding process, form submitions, signups, social media shares... In this phases we make a list of the key landing pages and funnels for one or multiple products take as much information on them by collecting data or organizing interviews with relevant stakeholders. We aim to take a picture of the current product. We also have a look at the market and what the competitors do. This information allows us to iterate the business goals based on the value they actually add to the business. We learned that sometimes data mining helped us and the businesses to validate or change the assumptions we have.</p>
         <img className="padding5_top lazy" src={require('../images/convy/case_convy4.jpg')} alt="convy optimization case study"/>
         <p className="caption padding5_bottom">defining KPIs helps us understand the product and foresee the design strategy to implement</p>

<h6 className="project-title">Deliverables / Methods</h6>
        Business analysis output presentation, list of expected output areas (funnels, landing pages...), products KPIs, objectives priorization, SWOT analysis, Strategic Orientation Draft

        <h4 className="project-title padding10_top">2_Funnels review</h4>
            <h5 className="project-title">Qualitative review</h5>
            <p className="text-left content-project">
            Once the business goals have been clearly identified we just run and document an heuristic evaluation of the current conversion funnels in order to achieve this goal. We take notes of the pain points of the process in multiple areas (Information Architecture, Visual Design, Navigation, Functionality & features, Interaction Design, Content) and where it could potentialy be improved. 
        We usually involve users in order to get their feedback when using the product. We also have a look at what the competitors do for a similar process and what the user think about it.</p>
         <img className="padding5_top lazy" src={require('../images/convy/case_convy2.jpg')} alt="convy optimization case study"/>
         <p className="caption padding5_bottom">Our reviews are business (behavior design) and performance oriented</p>
             <h6 className="project-title">Deliverables / Methods</h6>
            Strategic Orientation Documentation Suite including : persona, usability testing, customer feedback, field study, benchmarking survey, current user journey, hotjar and our special google analytics setup for call-to-action tracking from an UI perspective. For some specific project we expanded the data source outside the product including inputs from the CRM systems, Social media posts, call center logs and online surveys. 

            <h5 className="project-title padding5_top">Quantitative review</h5>
            <p className="text-left content-project">We have close look to the analytics of the funnels. We implement trackers in order to get to know what people are doing in the funnel. We measure <strong>qualified</strong> and <strong>unique visits</strong> to the product including our target user (people that can actually be interested to complete the process - excluding some tourists users from other locations for example). We also list the conversion rate based on the traffic sources for this specific product (Referring, Social Medias, Ads, Content, Searches...). At this point we have already some assumptions and design hypothesis to discuss with business.</p>

             <h6 className="project-title">Deliverables / Methods</h6>
        Analytics, mixpanel. 

 <h4 className="project-title padding10_top">3_Optimization</h4>



 <p className="text-left content-project">We provide educated design decisions based on the product data collected so far, our experience and our large testing database. These decisions are discussed and validated by business stakeholders. We start to implement our a/b testing or create a prototype with suggested changes if we suggested a radical product change. Getting to code and using it for design exploration is always better than static design. It allows people to see the process in context and take better decisions. Our clients save money on development and redesign costs when we start working on prototype. Once the tests are implemented we monitor closely each conversion rate.</p>
        <img className="padding5_top lazy" src={require('../images/convy/case_convy1.jpg')} alt="convy optimization case study"/>
        <p className="caption padding5_bottom">front-end checklist is an efficient first step in performance review</p>
        <p className="text-left content-project">
        Some of the most common optimization we implemented for our a/b tests were related to :
        </p>

<p className="text-left content-project">
        <ul className="no_bullet">
            <li className="checked">Visual hierarchy, negative space, Fitts law.</li>
            <li className="checked">Missing progressive disclosure (too much text)</li>            
            <li className="checked">Hick's law : too many alternatives</li>
            <li className="checked">Too complex forms</li>
            <li className="checked">Missing affordance</li>
            <li className="checked">Missing authority / social proof</li>
            <li className="checked">Responsiveness of website in mobile phones</li>
            <li className="checked">Missing progress and status</li>
            <li className="checked twolines">We are creatures of habit : basic processes not being defaulted (payment methods, checkout...)</li>
            <li className="checked">Lack of scarcity</li>
            <li className="checked twolines">Lack of personality and emotion</li>
        </ul>
        </p>
       
        <h6 className="project-title">Deliverables / Methods</h6>
        Product design decisions rationalization documentation, a/b testing, prototypes

<h4 className="project-title padding10_top">4_Iteration</h4>
		<img className="padding5_top lazy" src={require('../images/convy/optimization_review&iteration.svg')} alt="convy optimization iteration table"/>
         <p className="caption padding5_bottom">metrics update after change implementation</p>
        <p className="text-left content-project">A month or two after the testing implementation, we share the metrics from the test phases with business stakeholders, collect feedbacks from everybody (users and business) and monitor the impact various areas (transactions, adoption, sales, traffic, retention, conversion, market share, branding, product satisfaction...). We then decide on what comes next. We like to work as a partner of the client success and make sure their revenue keep growing. We also list all the implemented tests and improvements. Most company forget to document the output, it is the last phase of our process. Improving UX and conversion is a continuous process.</p>




  <h4 className="project-title padding10_top">MVPs for start-ups</h4>
        <p className="text-left content-project">We help our clients launching new digital products in all the phases of the conception of their MVP from framing (Product definition, Business Canvas, User interviews) definition of the competitive landscape, value proposition / identified opportunities, profitability model / metrics and growth perspective to technology and Key features for MVP (Buyer user journey and features, features priorization, Selected features for MVP vs Competition, technical effort estimation). </p>
         <img className="padding5_top lazy" src={require('../images/convy/case_convy3.jpg')} alt="convy optimization case study"/>
        <p className="caption padding5_bottom">working document mixing user journey and associated features for priorization</p>
        <p className="text-left content-project">We bring the product to reality with the following process :</p>
        <ul className="no_bullet">
            <li className="list-space">1/ Low-fi (sketch prototype including onboarding),</li>
            <li className="list-space">2/ Hi-fi prototype (using the Sketch Mirror app),</li>            
            <li className="list-space">3/ Interaction Design via the InVision Craft extension for Sketch,</li>
            <li className="list-space">4/ Test with users and adjusted backlog.</li>
        </ul>
<div className="padding5_both"></div>
<h4 className="padding5_top">skills I grew in this project</h4>
                <div className="skills_underline_orange"></div>
<div className="row align-left padding10_bottom">
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


</div>
<Footer/>
</div>

)




export default Convy