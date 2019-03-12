import React from 'react'
import { Link } from "gatsby"
import form from './formData'




const Footer = ({ siteTitle }) => (
    <div className="footer_bg">
    
<div className="row align-center">
	<div className="small-11 columns padding10_top padding5_bottom">
	  <h2 className="">That's all, folks ! let's get in touch. </h2>
	                 <div className="skills_underline_orange"></div>
	                <p className="padding5_top">Let's create great experiences and make your project generate more revenue. I am currently available for projects in Europe.</p>
	                <p>Get in touch with me by filling the form below. You can also directly  <a href="https://calendly.com/uxpages/30min" target="_blank" rel="noopener" className="link_underlined"> schedule a call <span className="target_blank"></span></a></p>
	</div>

	<div className="small-11 medium-6 columns white border-radius-left-side">
		<form name="contactForm" id="contactForm" method="post" className="topBefore padding5_top">
			<label for="email"><span className="label-form">Leave your e-mail...</span></label>
			<input id="email" type="email" name="Email" required/>
			 <label className="label-form padding5_top" for="message"><span>Write your message...</span></label>
			<textarea id="message" className="" name="Message" cols="1" rows="6"></textarea>
			
			<input id='send-button' className="submitBtn" type="submit" value="Send"/>
		</form>


       
	</div>

<div className="small-11 medium-5 columns orange border-radius-right-side">
            <Link to="mailto:&#104;&#111;&#108;&#097;&#064;&#117;&#120;&#112;&#097;&#103;&#101;&#115;&#046;&#099;&#111;&#109;" className="email_footer">&#104;&#111;&#108;&#097;&#064;&#117;&#120;&#112;&#097;&#103;&#101;&#115;&#046;&#099;&#111;&#109;</Link>
<p></p>


<Link to="#" target="_blank" rel="noopener">
<img className="icon-svg svgicon-instagram" src={require('../images/svgicon-instagram.svg')} alt="uxpages research"/>
</Link>
<Link to="https://github.com/Robespra" target="_blank" rel="noopener">
<img className="icon-svg svgicon-github" src={require('../images/svgicon-github.svg')} alt="uxpages research"/>
</Link>

</div>
</div>

<div className="bottom-navbar">

	<div className="container">
	
		<div className="row align-center">
		
		<Link className="menu__item" to="#recent_work"><span className="menu__item-name">case studies</span></Link>
		<Link className="menu__item" to="#skills"><span className="menu__item-name">capabilities</span></Link>
		<Link className="menu__item" to="#side_project"><span className="menu__item-name">side project</span></Link>
		<Link className="menu__item" to="#contactForm"><span className="menu__item-name">contact</span></Link>
		</div>
	</div>
</div>



<footer>
    <div className="row large-unstack align-center">
      <div className="column">
        <small>&copy; 2019 uxpages eirl</small>
      </div>
    </div>
</footer>

      
    </div>
    
    )
    
    
    export default Footer