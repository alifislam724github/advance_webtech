import React from "react";
import { Link } from "react-router-dom";

const Head = () => {
    return (
        <div>
            <Link to="/">Home</Link>
            <Link to="/contact">Contact</Link>
            <Link to="/student">Student List</Link>
        </div>
    )
}

export default Head;