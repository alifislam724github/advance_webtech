import React from "react";
const StudentProps = (props) => {
    return (
        <div>
            <p>
                Student id:<b>{props.id}</b>; Name:<b>{props.name}</b>; Cgpa: <b>{props.cgpa}</b>
            </p>
        </div>
    )
}
export default StudentProps;