import {Link} from "react-router-dom";


const LoginPage = (): JSX.Element => {



  return (
      <>
          <div>Login</div>
          <div><Link to="/register">Register</Link></div>
      </>
  );
};

export default LoginPage;