<div class="wrap">
    <div class="main">
        <div class="contact">
            <div class="contact-form">
                <h2>List agence</h2>
                <a href="#/detail" class="btn right">Add</a>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="agence in agences">
                        <td><span ng-bind="agence.id"></span></td>
                        <td><span ng-bind="agence.name"></span></td>
                        <td><span ng-bind="agence.email"></span></td>
                        <td><span ng-bind="agence.phone"></span></td>
                        <td>
                            <a href="#/detail/@{{agence.id}}" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger" ng-click="remove(agence)">Remove</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>