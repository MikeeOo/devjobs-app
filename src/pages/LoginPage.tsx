import { signInWithEmailAndPassword , signOut } from "firebase/auth";
import {auth} from "../config/firebase";

import {Formik, Form, Field} from "formik";
import {loginSchema} from "../yup/validation";

import {Link} from "react-router-dom";

interface IValues {
    email: string;
    currentPassword: string;
}

const LoginPage = (): JSX.Element => {

    const values: IValues = {
        email: "",
        currentPassword: "",
    }

  return (
      <>

          <Formik onSubmit={(values) => {
              console.log(values);
              signInWithEmailAndPassword(auth, values.email, values.currentPassword)
                  .then(user => console.log(user));
          }}
                  validationSchema={loginSchema}
                  initialValues={values}>
              
              <Form>

                  <label>Email Address: </label>
                  <Field name="email" type="email" autoComplete="username"/>

                  <label>Password: </label>
                  <Field name="currentPassword" type="password" autoComplete="current-password"/>

                  <button type="submit">Login</button>
              </Form>
          </Formik>

          <button onClick={() => signOut(auth)}>Log Out</button>

          <Link to="/register">Register</Link>
      </>
  );
};

export default LoginPage;