import React from 'react'
import { Link } from "gatsby"
import Header from '../components/header'
import Footer from '../components/footer'
import form from '../components/formData'
let pathPrefix = `/`
export default () => (
<div className="body_full">

<Header/>

<div className="row expanded body_full">

    <div className="small-12 medium-8 columns">
        <div className="row full-left-pannel">
        <Link to="/"><img className="logo_bp" src={require('../images/biscay_plain_logo.svg')} alt="biscay plain logo"/></Link>
            <div className="small-12 columns">
                <h2>Weekly picks for people interested in creativity</h2>
                <h5>Get 5 free articles and guides in your inbox every Saturday morning ☕</h5>
                    <form name="contactForm" id="contactForm" method="post" className=" row topBefore padding5_top">
                        <div className="small-12 medium-4 columns underlined_submit">
                            <input id="email" type="email" name="Email" placeholder="Leave your e-mail..." required/>
                        </div>
                        <div className="small-12 medium-4 columns underlined_submit">
                            <input id='send-button' className="submitBtn" type="submit" value="Subscribe"/>
                        </div>
                        <div className="small-12 columns no-spam">
                            <small>No spam, no fuss. Unsubscribe anytime.</small>
                        </div>
                    </form>
            </div>
            <div className="footer-medium columns small-12 align-self-bottom">
                <div className="row">
                    <div className="small-12 columns align-self-bottom">
                        <Footer/>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
    <div className="small-12 medium-4 columns align-self-middle publications">
    {/* <div className="circ">
            <img src={require('../images/animated_topography.svg')} alt="test" />
        </div> */}
        <div class="phone">
		<div class="notch"></div>
		<div class="censor"></div>
		<div class="camera"></div>
		<div class="speaker"></div>
		<div class="screen">
			<div class="inner">
            <small>LATEST WEEKLY ISSUE</small>
        <div className="skills_underline_orange"></div>
        <div className="callout_publications">
            <a href="http://digest.bps.org.uk/2006/03/be-creative-dont-even-think-about-it.html" target="_blank" rel="noopener" onclick="track('Click-see-article-solitude','Click-see-article-solitude')"><h3>Be creative: Don't even think about it<span className="target_blank"></span></h3></a>
            <p>Not thinking about a problem for a while doesn’t just give you a fresh perspective, it also allows your more creative unconscious to get to work as it.</p>
        </div>

        <div className="callout_publications">
            <a href="https://medium.com/@neilstevenson77/inside-the-brain-machine-neuroscience-changed-how-i-think-about-creativity-86f49503bbc8#.w9hy85syc" target="_blank" rel="noopener" onclick="track('Click-see-article-five','Click-see-article-five')"><h3>What Makes a Genius? <span className="target_blank"></span></h3></a>
            <p>Inside the brain machine : neuroscience changed how I think about creativity</p>
        </div>
        <div className="callout_publications">
            <a href="http://blogs.scientificamerican.com/beautiful-minds/the-real-neuroscience-of-creativity/" target="_blank" rel="noopener" onclick="track('Click-see-article-five','Click-see-article-five')"><h3>The real neuroscience of creativity<span className="target_blank"></span></h3></a>
            <p>Dr. Newberg’s main area of study was enlightenment: he’d been putting Buddhist monks and other spiritual leaders into the machine to see whether their moments of transcendence had a physiological basis. But right now, he was looking for patterns in the brains of creative people.</p>
        </div>
        <div className="callout_publications">
        <Link className="menu__item" to="/books/" onclick="track('Click-see-article-empathy','Click-see-article-empathy')"><h3>Weekly book selection<span className="target_blank"></span></h3></Link>
                    <p>Our weekly creative reading recommendation.</p>
        </div>
			</div>
		</div>
	</div>
        
        
        
    </div>
    <div className="footer-mobile columns small-12 align-self-bottom">
        <div className="row">
            <div className="small-12 columns align-self-bottom">
            <div className="expanded row align-left">
				<div className="columns small-6">
				<small><Link className="menu__item" to="/contact/"><span className="menu__item-name">Get in touch</span></Link></small>
				</div>
				<div className="columns small-6">
				<small><Link className="menu__item" to="/submissions/"><span className="menu__item-name">Suggest your article</span></Link></small>
				</div>
				<div className="columns small-6">
				<small><Link className="menu__item" to="/legal/"><span className="menu__item-name">Privacy policy</span></Link></small>
				</div>
				<div className="columns small-6">
					<small>&copy; BiscayPlain 2011-2020</small>
				</div>
			</div>
            </div>
        </div>
    </div>
 </div>
    

</div>

) 

