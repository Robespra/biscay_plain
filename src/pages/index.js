import React from 'react'
import { Link } from "gatsby"
import InteracVid from '../images/meka/interaction_meka.mp4'
import Header from '../components/header'
import Footer from '../components/footer'
let pathPrefix = `/`



const IndexPage = () => (
<div>


<Header/>

<div className="row align-middle hero_block">
	<div className="small-12 medium-6 columns hero_pctre">
		<img src={require('../images/z3.jpg')} alt="pages charly espra jeremy robertttt aqui está?"/>
	</div>
	<div className="small-12 medium-6 columns">
	    <h1 className="hidden-h1">uxpages ux pages</h1>
	    <h2 className="hero_line">Hi there ! Good to have you here.</h2>
        <h2 className="hero_line">I design digital products from UX strategy to implementation</h2>
    </div>
</div>


<div id="recent_work" className="row align-center">
    <div className="small-11 columns last-prjct padding5_both">
        <div className="row prjct-dtls">
            <div className="small-11 columns dtls-text">
                <h3>Helping companies to convert more with convy</h3>
                <div className="skills_underline_orange"></div>
            </div>
            <div className="small-11 medium-4 columns dtls-text">
            <p>Conversion Optimization Design</p>
            <p>you may be interested in :</p>
            <ul className="no_bullet">
                <li className="checked">UX Design Consultancy</li>
                <li className="checked">Design Optimization</li>
                <li className="checked">Analytics</li>
                <li className="checked">a/b Testing</li>
            </ul>
            </div>
            <div className="small-11 medium-8 columns prjct-img_block_pstn-relative_opposite">
                <div className="prjct-img_block_opposite">
                    <div className="prjct-img_block_inner_pstn-relative_opposite">
                    <img className="prjct-large-bg lazy" src={require('../images/prjctimg3_convy.jpg')} alt="convy"/>
                        <Link className="project__item-btn" to="/convy/" onclick="track('Click-see-project-convy','Click-see-project-convy')"><h5 className="gradient_effect">see case study</h5></Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div className="small-11 columns last-prjct padding5_both">
        <div className="row prjct-dtls">
            <div className="small-11 columns dtls-text">
                <h3>Designing a chatbot and a dashboard for mēkācreative.io</h3>
                <div className="skills_underline_orange"></div>
                </div>
                <div className="small-11 medium-4 columns dtls-text">
                        <p>(in progress)</p>
                        <p>Mixing psychology, machine learning and conversational ui.</p>
                        <p>you may be interested in : </p>
                    <ul className="no_bullet">
                            <li className="checked">Conversational design</li>
                            <li className="checked">Gamification</li>
                            <li className="checked">Product strategy</li>
                            </ul>
                </div>
                    <div className="small-11 medium-8 columns prjct-img_block_pstn-relative_opposite">
                    <div className="prjct-img_block_opposite">
                        <div className="prjct-img_block_inner_pstn-relative_opposite">
                        <video className="prjct-large-bg lazy" width="100%" height="auto" loop autoPlay muted>
                            <source src={InteracVid} type="video/mp4"/>
                        </video>
                            <Link className="project__item-btn" to="/meka/" onclick="track('Click-see-project-meka','Click-see-project-meka')"><h5 className="gradient_effect">see case study</h5></Link>  
                        </div>
                    </div>
                </div>
        </div>        
    </div>

    <div className="small-11 columns last-prjct padding5_both">
        <div className="row prjct-dtls ">
            <div className="small-11 columns dtls-text">
                <h3>Multiple products development with kelisto.es</h3>
                <div className="skills_underline_orange"></div>
                </div>
            <div className="small-11 medium-4 columns dtls-text">
                    
                    <p>[SPANISH] 2 years project. Finance, Insurance, Comms & Energy Price comparators. Ecommerce & content.</p>
                    <p>you may be interested in : </p>
                    <ul className="no_bullet">
                            <li className="checked">Visual design</li>
                            <li className="checked">UI/UX</li>
                            <li className="checked">Front-end development</li>
                            <li className="checked twolines">Stakeholders / dev team processes</li>
                            <li className="checked twolines">Conversion-optimization design</li>
                            </ul>
                </div>
                <div className="small-11 medium-8 columns prjct-img_block_pstn-relative_opposite">
                    <div className="prjct-img_block_opposite">
                        <div className="prjct-img_block_inner_pstn-relative_opposite">
                            <img className="prjct-large-bg lazy" src={require('../images/prjctimg3_kelisto.jpg')} alt="kelisto hero case study"/>
                            <div className="prjct-img_block_inner_pstn-absolute_opposite">
                            
                
                            </div>
                            <img src={require('../images/kelisto/numbers_kelisto.svg')} alt="kelisto hero case study"/>
                            <Link className="project__item-btn" to="/kelisto/" onclick="track('Click-see-project-kelisto','Click-see-project-kelisto')"><h5 className="gradient_effect">see case study</h5></Link>  
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div className="small-11 columns last-prjct padding5_both">
        <div className="row last-prjct-dtls ">
            <div className="small-11 columns dtls-text">
                <h3>Starting from scratch with sharemos.com</h3>
                <div className="skills_underline_orange"></div>
            </div>
            <div className="small-11 medium-4 columns dtls-text">
                <div className="dtls-text-p">
                <p>[ENG / SPANISH - project in progress] Two-side marketplace.
                    Rent whatever you need from people like you. Wherever.</p>
                    <p>you may be interested in :</p> 
                    <ul className="no_bullet">
                        <li className="checked">MVP</li>
                        <li className="checked">Branding/visual design</li>
                        <li className="checked">UX UI</li>
                        <li className="checked">Front-end code</li>
                        <li className="checked">Android App design</li>
                        </ul>
                </div>
            </div>
            <div className="small-11 medium-8 columns prjct-img_block_pstn-relative_opposite">
                <div className="prjct-img_block_opposite">
                    <div className="prjct-img_block_inner_pstn-relative_opposite">
                        <img className="prjct-large-bg lazy" src={require('../images/prjctimg3_sharemos.jpg')} alt="kelisto hero case study"/>
                        <div className="prjct-img_block_inner_pstn-absolute_opposite">
                            
                        </div>
                        <Link className="project__item-btn" to="/sharemos/" onclick="track('Click-see-project-sharemos','Click-see-project-sharemos')"><h5 className="gradient_effect">see case study</h5></Link> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="skills" className="row align-center padding5_top">
    <div className="small-11 columns">
        <h2>how can I help you ?</h2>
        <h3>I started designing <span className="skills_highlight">user interface </span>in 1999 and have progressively expanded my skillset to <span className="skills_highlight">strategic product-oriented UX design.</span> Product design is not an art guided solely by creativity and intuition : I do believe in <span className="skills_highlight">lean customer development and metrics.</span>
        </h3>
        <div className="row align-left">
        <div className="small-5 columns border-skills"></div>
        <div className="small-5 columns"></div>
        <div className="small-11 columns">
        <h2>areas of expertise</h2>
        </div>
        </div>
        <div className="row align-left padding5_both">
        <div className="small-11 medium-2 large-1 columns">
        <img className="icon-svg svgicon-assessment" src={require('../images/svgicon-assessment.svg')} alt="uxpages research"/>
            </div>
            <div className="small-11 medium-9 large-5 columns">
                <h4>research</h4>
                <div className="skills_underline_orange"></div>
                <ul className="no_bullet">
                <li className="checked">research strategy</li>
                <li className="checked">usability studies</li>
                <li className="checked">heuristic review</li>
                <li className="checked">personas</li>
                <li className="checked">design research/strategy</li>
                <li className="checked">benchmarking</li>
                <li className="checked">behaviour design</li>
                 <li className="checked">quantitative UX research</li>
                </ul>
            </div>
            <div className="small-11 medium-2 large-1 columns">
            <img className="icon-svg svgicon-vision" src={require('../images/svgicon-vision.svg')} alt="uxpages research"/>
            </div>
            <div className="small-11 medium-9 large-5 columns">
                <h4>ideation</h4>
                <div className="skills_underline_orange"></div>
                <ul className="no_bullet">
                <li className="checked">information architecture</li>
                <li className="checked">storytelling / user journey</li>
                <li className="checked">wireframes</li>
                <li className="checked">prototyping</li>
                <li className="checked">art direction / branding</li>
                <li className="checked">system design</li>
                <li className="checked">holistic & multidisciplinary approach</li>
                <li className="checked">tools: sketch, marvel, floid (framer), after effect (IxD)</li>
                </ul>
            </div>
            <div className="small-11 medium-2 large-1 columns padding5_top">
            <img className="icon-svg svgicon-business_obj" src={require('../images/svgicon-business_obj.svg')} alt="uxpages research"/>
            </div>
            <div className="small-11 medium-9 large-5 columns padding5_top">
                <h4>design for business</h4>
                <div className="skills_underline_orange"></div>
                <ul className="no_bullet">
                <li className="checked">conversion of kpis into design strategy</li>
                <li className="checked">behaviour design</li>
                <li className="checked">conversion optimization design</li>
                <li className="checked twolines">product roadmap strategy / resource allocation</li>
                <li className="checked">QA & iteration</li>
                <li className="checked twolines">cross-cultural skills (I speak spanish, english and french)</li>
                <li className="checked">cross-functional skills</li>
                <li className="checked twolines">Design complexity management and facilitation</li>

                
                </ul>
            </div>
            <div className="small-11 medium-2 large-1 columns padding5_top">
            <img className="icon-svg svgicon-execution" src={require('../images/svgicon-execution.svg')} alt="uxpages research"/>
            </div>
            <div className="small-11 medium-9 large-5 columns padding5_top">
                <h4>implementation</h4>
                <div className="skills_underline_orange"></div>
                <ul className="no_bullet">
                <li className="checked">design system for various UI platforms</li>
                <li className="checked">streamlined design handoff to dev</li>
                <li className="checked">visual design & illustration</li>
                <li className="checked ">svg vectors drawing / iconography</li>
                <li className="checked">front integration (ror, angular, react, php)</li>
                <li className="checked">sass/less css preprocessors</li>
                <li className="checked">javascript (jquery, angular2, react)</li>
                <li className="checked">css frameworks</li>
                <li className="checked twolines">collaborative work in cross-departmental teams</li>
                <li className="checked">project management (agile dev)</li>
                <li className="checked">GIT</li>
                
                </ul>
            </div>
            <div className="small-11 medium-11 columns padding10_top"> 
                <h2 className="">currently learning...</h2>
                <div className="skills_underline_orange"></div> 
                <div className="show-for-medium medium-1 columns padding5_bottom"></div>
                <div className="row align-left">
                    <div className="small-4 columns padding5_bottom ">
                    <img className="icon-svg svgicon-chef-hat" src={require('../images/svgicon-chef-hat.svg')} alt="uxpages research"/>
                      Thai cuisine!
                    </div>
                    <div className="small-4 columns padding5_bottom">
                    <img className="icon-svg svgicon-figma" src={require('../images/svgicon-figma.svg')} alt="uxpages research"/>
                      Figma
                    </div>
                    <div className="small-4 columns padding5_bottom">
                    <img className="icon-svg svgicon-virtual_reality" src={require('../images/svgicon-virtual_reality.svg')} alt="uxpages research"/>
                      VR
                    </div>
                </div>
        </div> 

        </div>
    </div>
</div>








<div className="row align-center padding5_top">
	<div className="small-11 medium-11 columns">
		<h2 id="side_project">side projects</h2>
		<div className="skills_underline_orange"></div>
		<div className="small-11 medium-11 columns">
			<div className="alpe_rouge_container">
				<div className="alpe_rouge_bg-text"></div>
				<div className="alpe_rouge_text_h2">
					{/* <h2>I also like to work with my hands.</h2> */}
				</div>
				<div className="alpe_rouge_text_descrip_container">
					<div className="alpe_rouge_text_descrip_container_text">
						<p>Alongside my design activities I like to paint and play music.</p>
						<Link to="#" onclick="track('Click-see-alperouge','Click-see-alperouge')">see the stuff I crafted (currently updating website...) <span className="target_blank"></span></Link>
					</div>
				</div>
				<div className="alpe_rouge_img">
					<img src={require('../images/idee_alperouge.jpg')} alt="alpe rouge espra pages"/>
				</div>

		</div>
	</div>
</div>
</div>




<div id="fourth" className="row align-center padding5_both">
	<div className="small-11 columns">
		<div className="row">
			<div className="small-11 medium-4 columns">
				<small>LATEST PUBLICATIONS</small>
				<h2>journal</h2>
				<div className="skills_underline_orange"></div>
			</div>
			<div className="small-11 medium-8 columns">
				<div className="callout_publications">
					<small> 23/02/2019</small>
					<a href="http://convy.io/read/articles/good_emails" target="_blank" rel="noopener" onclick="track('Click-see-article-solitude','Click-see-article-solitude')"><h3>5 Tips To Make Emails That Convert<span className="target_blank"></span></h3></a>
					<p>Email design is hard. In this article we will review 5 rules that unsure email good conversion.</p>
				</div>
				<div className="callout_publications">
					<small> 03/01/2019</small>
					<a href="http://www.mekacreative.io/blog/articles/the_five_paradoxes_of_creativity" target="_blank" rel="noopener" onclick="track('Click-see-article-five','Click-see-article-five')"><h3>The five paradoxes of creativity <span className="target_blank"></span></h3></a>
					<p>Understanding creativity means discerning the different paradoxes that compose it.</p>
				</div>
				<div className="callout_publications">
					<small> 23/12/2018</small>
					<a href="http://convy.io/read/articles/attractive_digital" target="_blank" rel="noopener" onclick="track('Click-see-article-five','Click-see-article-five')"><h3>5 Pro Tips To Make Your Product More Attractive<span className="target_blank"></span></h3></a>
					<p>Reaction to digital product appearances are fast, unconscious and will affect the way users engage with it. In this article we will share ways to ensure your product provides a great first impression.</p>
				</div>
				<div className="callout_publications">
					<small> 11/12/2018</small>
					<a href="http://www.mekacreative.io/blog/articles/empathy_and_creativity" target="_blank" rel="noopener" onclick="track('Click-see-article-empathy','Click-see-article-empathy')"><h3>Empathy and creativity<span className="target_blank"></span></h3></a>
					<p>This phenomenon is the basis of human links and artistic communication.</p>
				</div>
			</div>
		</div>
	</div>
</div>











<Footer/>


</div>

) 
export default IndexPage
