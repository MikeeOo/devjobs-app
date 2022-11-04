import {Route, Routes} from "react-router-dom";

import Default from "../layouts/Default";

import JobOffersMainPage from "../pages/JobOffersMainPage";
import AddJobOfferPage from "../pages/AddJobOfferPage";
import YourOffersPage from "../pages/YourOffersPage";
import YourApplicationsPage from "../pages/YourApplicationsPage";

import LoginPage from "../pages/LoginPage";
import RegisterPage from "../pages/RegisterPage";

const Router = (): JSX.Element => {

  return (
      <>
          <Routes>

              <Route path="/" element={<Default/>}>

                  <Route index element={<JobOffersMainPage/>}/>
                  <Route path="/add-job" element={<AddJobOfferPage/>}/>
                  <Route path="/your-offers" element={<YourOffersPage/>}/>
                  <Route path="/your-applications" element={<YourApplicationsPage/>}/>
                  <Route path="/login" element={<LoginPage/>}/>
                  <Route path="/register" element={<RegisterPage/>}/>
              </Route>
          </Routes>
      </>
  );
};

export default Router;