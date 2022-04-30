import React, { Component } from "react";

class ShowMessage extends Component {
    constructor() {
        super()
        this.state = {
            message: 'This is contact us page'
        }
    }
    changeMessage() {
        this.setState({
            message: 'Our address is Puran Dhaka'
        })
    }
    render() {
        return (
            <div>
                <h1>{this.state.message}</h1>
                <button onClick={() => this.changeMessage()}>Click</button>
            </div>
        )
    }

}

export default ShowMessage; 