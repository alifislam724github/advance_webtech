import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
// import App from './App';
import reportWebVitals from './reportWebVitals';
import Home from './Components/Home';
// import Profile from './Components/Profile';
import Contact from './Components/Contact';
import Foot from "./Components/Foot";
import Head from './Components/Head';
import Student from './Components/Student';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'
import StudentDetail1 from './Components/StudentDetail1';
import StudentDetail2 from './Components/StudentDetail2';
import StudentDetail3 from './Components/StudentDetail3';
import Data from './Components/Data';

ReactDOM.render(
  <React.StrictMode>
    {/* <App /> */}
    <Router>
      <Head />
      <Switch>
        <Route exact path="/">
          <Home />
        </Route>
        {/* <Route exact path="/profile">
          <Profile />
        </Route> */}
        <Route exact path="/contact">
          <Contact />
        </Route>
        <Route exact path="/student">
          <Student />
        </Route>
        <Route exact path="/student/:id">
          <StudentDetail1 />
        </Route>
        <Route exact path="/student2/:id">
          <StudentDetail2 />
        </Route>
        <Route exact path="/student3/:id">
          <StudentDetail3 />
        </Route>
        <Route exact path="/data/">
          <Data />
        </Route>

      </Switch>


      <Foot />
    </Router>
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();