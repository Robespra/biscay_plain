import React from 'react'
import { Link } from "gatsby"
import form from './formData'




const Footer = ({ siteTitle }) => (
    <div className="small-12 footer_bg align-center">
<footer>
    <div className="row align-center">
		<Link className="menu__item" to="/"><img src={require('../images/uxpages_logo.svg')} alt="test" /></Link>
		<Link className="menu__item" to="#recent_work"><span className="menu__item-name">case studies</span></Link>
		<Link className="menu__item" to="#skills"><span className="menu__item-name">capabilities</span></Link>
		<Link className="menu__item" to="#side_project"><span className="menu__item-name">side project</span></Link>
		<Link className="menu__item" to="#contactForm"><span className="menu__item-name">contact</span></Link>
      <div className="column">
        <small>&copy; 2019 uxpages eirl</small>
      </div>
    </div>
</footer>

      
    </div>
    
    )
    
    
    export default Footer