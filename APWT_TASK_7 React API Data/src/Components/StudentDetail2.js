import React from "react";
import { useParams } from "react-router-dom";

const StudentDetail2 = () => {

    const { id } = useParams();
    return (

        <div>
            <h1>Student Details of id {id}</h1>
            <h1>Name: Marfy</h1>
            <h1>Dept: CSE</h1>
            <h1>Contact:456</h1>
        </div>
    )
}
export default StudentDetail2; 