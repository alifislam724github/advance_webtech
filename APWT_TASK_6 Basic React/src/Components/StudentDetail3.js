import React from "react";
import { useParams } from "react-router-dom";

const StudentDetail3 = () => {

    const { id } = useParams();
    return (

        <div>
            <h1>Student Details of id {id}</h1>
            <h1>Name: Mehedi</h1>
            <h1>Dept: CoE</h1>
            <h1>Contact:123</h1>
        </div>
    )
}
export default StudentDetail3; 