import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Example from './components/Example';

export default class Dashboard extends Component {
    render() {
        return (
            <div class="content">
                <Example />
            </div>   
        );
    }
}

if (document.getElementById('dashboard-root')) {
    ReactDOM.render(<Dashboard />, document.getElementById('dashboard-root'));
}