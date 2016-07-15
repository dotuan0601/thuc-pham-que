<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>List agency</h1>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#/detail" class="btn right">Add</a>
                <table class="shopping-cart">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>
                    <tr ng-repeat="agency in agencies">
                        <td><span ng-bind="agency.id"></span></td>
                        <td><span ng-bind="agency.name"></span></td>
                        <td><span ng-bind="agency.email"></span></td>
                        <td><span ng-bind="agency.phone"></span></td>
                        <td class="actions">
                            <a href="#/detail/{{agency.id}}" class="btn btn-xs btn-grey"><i
                                        class="glyphicon glyphicon-pencil"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-grey" ng-click="remove(agency)"><i
                                        class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>