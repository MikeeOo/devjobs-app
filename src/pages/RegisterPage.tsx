import {Formik, Form, Field} from "formik";
import {registerSchema} from "../yup/validation";

const RegisterPage = (): JSX.Element => {

  return (
      <>

          <Formik onSubmit={(values) => {
              console.log(values);

          }}
                  validationSchema={registerSchema}
                  initialValues={{
                      email: "",
                      newPassword: "",
                      confirmNewPassword: "",
                  }}>

              <Form>

                  <label>Email Address: </label>
                  <Field name="email"
                         type="email" autoComplete="username" placeholder="email address"/>

                  <label>Password: </label>
                  <Field name="newPassword"
                         type="password" autoComplete="new-password" placeholder="password"/>

                  <label>Repeat Password: </label>
                  <Field name="confirmNewPassword"
                         type="password" autoComplete="new-password" placeholder="confirm password"/>

                  <button type="submit">Register</button>
              </Form>
          </Formik>
    </>
  );
};

export default RegisterPage;