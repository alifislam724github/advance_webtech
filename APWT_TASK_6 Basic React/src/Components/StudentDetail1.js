import React from "react";
import { useParams } from "react-router-dom";

const StudentDetail1 = () => {

    const { id } = useParams();
    return (

        <div>
            <h1>Student Details of id {id}</h1>
            <h1>Name: Marfy</h1>
            <h1>Dept: EEE</h1>
            <h1>Contact:123</h1>
        </div>
    )
}
export default StudentDetail1; 