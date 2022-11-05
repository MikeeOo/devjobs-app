import {Link} from "react-router-dom";
import {Formik, Form, Field} from "formik";
import {loginSchema} from "../yup/validation";

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

          }}
                  validationSchema={loginSchema}
                  initialValues={values}>
              
              <Form>

                  <label>Email Address: </label>
                  <Field name="currentPassword" type="email" autoComplete="username"/>

                  <label>Password: </label>
                  <Field name="password" type="password" autoComplete="current-password"/>
              </Form>
          </Formik>

          <Link to="/register">Register</Link>
      </>
  );
};

export default LoginPage;