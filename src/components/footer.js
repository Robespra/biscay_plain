import React from 'react';
import { Link } from 'gatsby';
import Header from '../components/header';
import form from './formData';
export default () => (
	<footer>
			<div className="expanded row align-left">
			<div className="columns small-3">
				<small><Link className="menu__item" to={`/contact/`}><span className="menu__item-name">Get in touch</span></Link></small>
				</div>
				<div className="columns small-3">
				<small><Link className="menu__item" to="/submissions/"><span className="menu__item-name">Suggest your article</span></Link></small>
				</div>
				<div className="columns small-3">
				<small><Link className="menu__item" to="/legal/"><span className="menu__item-name">Privacy policy</span></Link></small>
				</div>
				<div className="columns small-3">
					<small>&copy; BiscayPlain 2011-2020</small>
				</div>
			</div>
	</footer>

    
    )
    
