import {Route, Routes} from "react-router-dom";

import Default from "./layouts/Default";
import JobOffersMainPage from "./pages/JobOffersMainPage";
import AddJobOfferPage from "./pages/AddJobOfferPage";
import YourOffersPage from "./pages/YourOffersPage";
import YourApplicationsPage from "./pages/YourApplicationsPage";



function App() {
  return (
    <div>

        <Routes>

            <Route path="/" element={<Default/>}>

                <Route index element={<JobOffersMainPage/>}/>
                <Route path="/add-job" element={<AddJobOfferPage/>}/>
                <Route path="/your-offers" element={<YourOffersPage/>}/>
                <Route path="/your-applications" element={<YourApplicationsPage/>}/>
            </Route>
        </Routes>
    </div>
  );
}

export default App;
