import {NavLink} from "react-router-dom";


const Header = (): JSX.Element => {



  return(
      <>
          <NavLink to="/">Job Offers</NavLink>
          <NavLink to="/add-job">Add Job</NavLink>
          <NavLink to="/your-offers">Your Offers</NavLink>
          <NavLink to="/your-applications">Your Applications</NavLink>
      </>
  )
}

export default Header
