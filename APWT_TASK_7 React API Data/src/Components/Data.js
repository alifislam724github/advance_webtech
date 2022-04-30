import React, { useState, useEffect } from "react";
import axios from "axios";

import { useHistory } from "react-router-dom";


const Data = (props) => {
    let history = useHistory();

    const [products, setProducts] = useState([]);

    useEffect(() => {

        // axios.get("product/list")
        axios.get("http://127.0.0.1:8000/api/studentList")
            .then(resp => {

                setProducts(resp.data);

            }).catch(err => {
                console.log(err);
                console.log("not found");
            });
    }, []);



    return (

        <div>

            <h1> Student List From Data Base</h1>
            <ul>
                <table style={{ backgroundColor: "red", margin: 30, padding: 30, borderColor: "coral" }}>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    {
                        products.map(p => (
                            <tr>
                                <td>{p.id}</td>
                                <td>{p.name}</td>
                                <td>{p.email}</td>
                                <td>{p.phone}</td>
                                <td>{p.address}</td>

                            </tr>

                        ))
                    }
                </table>
            </ul>
        </div>

    )
}
export default Data;