import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    render() {
        return (
            <div class="content">
                <div class="col s12 m5">
                    <div class="card-panel teal">
                        <span class="white-text">
                            React Test
                        </span>
                    </div>
                </div>
            </div>   
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
