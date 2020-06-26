import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Dutylist extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Привет еще раз</div>

                            <div className="card-body">Я компонент React! =)</div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}


if (document.getElementById('react')) {
    ReactDOM.render(<Dutylist />, document.getElementById('react'));
}
