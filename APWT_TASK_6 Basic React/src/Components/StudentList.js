import React from "react";
// import Head from "./Head"
import StudentProps from "./StudentProps"
import { Link } from "react-router-dom";

import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'
import StudentDetail1 from './StudentDetail1';

const StudentList = () => {
    return (
        <div>
            <h1>Student List</h1>
            <div>
                <StudentProps id="1" name="MArfy" cgpa="4" />  <Link to="/student/:1">Student Details of 1</Link>
                <StudentProps id="2" name="Marfy" cgpa="4" /><Link to="/student2/:2">Student Details of 2</Link>
                <StudentProps id="3" name="Mehedi" cgpa="4" /><Link to="/student3/:3">Student Details of 3</Link>
            </div>

        </div>
    )
}
export default StudentList;