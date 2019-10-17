import React from 'react';
import ReactDOM from 'react-dom';

function DutyList() {
   return (
       <div className="container">
           <div class="jumbotron">
                <h1 class="display-4">Welcome</h1>
                <p class="lead">Hi! I'm a react component! =)</p>
            </div>
       </div>
   );
}

export default DutyList;

if (document.getElementById('dutylist')) {
    ReactDOM.render(<DutyList />, document.getElementById('dutylist'));
}