import React from 'react'
import { Link } from "gatsby"
import InteracVid from '../images/meka/interaction_meka.mp4'
import Header from '../components/header'
import Footer from '../components/footer'
let pathPrefix = `/`



const IndexPage = () => (
<div className="body_full">

    <Header/>

    <div className="row expanded align-center align-middle body_full">
        <div className="small-12 medium-8 columns">
        <h2>Learn how creativity works and improve</h2>
        <h3>Get our 5 articles and guides in your inbox every week</h3>
            <form name="contactForm" id="contactForm" method="post" className="topBefore padding5_top">
                <label for="email"><span className="label-form">Leave your e-mail...</span></label>
                <input id="email" type="email" name="Email" required/>

                <input id='send-button' className="submitBtn" type="submit" value="Subscribe"/>
                <small>No spam, no fuss. Unsubscribe anytime.</small>
            </form>
        </div>
        <div className="small-12 medium-4 columns align-self-middle">
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

    <Footer/>


</div>

) 
export default IndexPage
