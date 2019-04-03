import React from 'react'
import { Link } from "gatsby"
import Header from '../components/header'
import Footer from '../components/footer'
let pathPrefix = `/`



const IndexPage = () => (
<div className="body_full">

<Header/>

<div className="row expanded body_full">

    <div className="small-12 medium-8 columns">
        <div className="row full-left-pannel">
        <img className="logo_bp" src={require('../images/biscay_plain_logo.svg')} alt="biscay plain logo"/>
            <div className="small-12 columns">
                <h2>Weekly picks for people interested in creativity</h2>
                <h5>Get 5 free articles and guides in your inbox every Friday<a>        See sample <span className="target_blank"></span></a></h5>
                    <form name="contactForm" id="contactForm" method="post" className=" row topBefore padding5_top">
                        <div className="small-8 columns">
                            <input id="email" type="email" name="Email" placeholder="Leave your e-mail..." required/>
                            <small>No spam, no fuss. Unsubscribe anytime.</small>
                        </div>
                        <div className="small-4 columns">
                            <input id='send-button' className="submitBtn" type="submit" value="Subscribe"/>
                        </div>
                        
                    </form>
            </div>
            <div className="columns small-12 align-self-bottom">
                <div className="row">
                    <div className="small-12 columns align-self-bottom">
                        <Footer/>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
    <div className="small-12 medium-4 columns align-self-middle">
    {/* <div className="circ">
            <img src={require('../images/animated_topography.svg')} alt="test" />
        </div> */}
        <small>LATEST WEEKLY ISSUE</small>
        <div className="skills_underline_orange"></div>
        <div className="callout_publications">
            <a href="http://convy.io/read/articles/good_emails" target="_blank" rel="noopener" onclick="track('Click-see-article-solitude','Click-see-article-solitude')"><h3>5 Tips To Make Emails That Convert<span className="target_blank"></span></h3></a>
            <p>Email design is hard. In this article we will review 5 rules that unsure email good conversion.</p>
        </div>

        <div className="callout_publications">
            <a href="http://www.mekacreative.io/blog/articles/the_five_paradoxes_of_creativity" target="_blank" rel="noopener" onclick="track('Click-see-article-five','Click-see-article-five')"><h3>The five paradoxes of creativity <span className="target_blank"></span></h3></a>
            <p>Understanding creativity means discerning the different paradoxes that compose it.</p>
        </div>
        <div className="callout_publications">
            <a href="http://convy.io/read/articles/attractive_digital" target="_blank" rel="noopener" onclick="track('Click-see-article-five','Click-see-article-five')"><h3>5 Pro Tips To Make Your Product More Attractive<span className="target_blank"></span></h3></a>
            <p>Reaction to digital product appearances are fast, unconscious and will affect the way users engage with it. In this article we will share ways to ensure your product provides a great first impression.</p>
        </div>
        <div className="callout_publications">
            <a href="http://www.mekacreative.io/blog/articles/empathy_and_creativity" target="_blank" rel="noopener" onclick="track('Click-see-article-empathy','Click-see-article-empathy')"><h3>Empathy and creativity<span className="target_blank"></span></h3></a>
                    <p>This phenomenon is the basis of human links and artistic communication.</p>
        </div>
        
        
    </div>
    
 </div>
    
</div>

) 
export default IndexPage
