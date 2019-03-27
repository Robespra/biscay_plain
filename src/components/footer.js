import React from 'react'
import { Link } from "gatsby"
import form from './formData'




const Footer = () => (
	<footer>
			<div className="expanded row align-left">
				<div className="columns small-3">
				<small><Link className="menu__item" to="#recent_work"><span className="menu__item-name">Get in touch</span></Link></small>
				</div>
				<div className="columns small-3">
				<small><Link className="menu__item" to="#skills"><span className="menu__item-name">Suggest your article</span></Link></small>
				</div>
				<div className="columns small-3">
				<small><Link className="menu__item" to="#side_project"><span className="menu__item-name">Privacy policy</span></Link></small>
				</div>
				<div className="columns small-3">
					<small>&copy; BiscayPlain 2011-2019</small>
				</div>
			</div>
	</footer>

    
    )
    
export default Footer