import React from 'react'
import { Link } from "gatsby"
import { Helmet } from "react-helmet"





class Header extends React.Component {
  constructor(props) {
    super(props)
  
    this.state = {
      hasScrolled: false
    }
  }
  componentDidMount() {
    window.addEventListener('scroll', this.handleScroll)
}
handleScroll = (event) => {
  const scrollTop = window.pageYOffset

  if (scrollTop > 50) {
    this.setState({ hasScrolled: true })
  } else {
    this.setState({ hasScrolled: false })
  }
}
  render() {
    return (
      
      <div className={this.state.hasScrolled ? 'Header HeaderScrolled' : 'Header'}>
      
      <Helmet>
          <meta charSet="utf-8" />
          <title>uxpages.com</title>
          <link rel="canonical" to="https://biscayplain.com" />
        </Helmet>

        





      </div>

    )
  }
}




export default Header
