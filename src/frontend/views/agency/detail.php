<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><span ng-bind="title"></span> agency</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="basic-login">
                    <form role="form" ng-submit="save()">
                        <div class="form-group">
                            <label for="agency-name"><i class="icon-user"></i> <b>Name</b></label>
                            <input class="form-control" id="agency-name" type="text" placeholder=""
                                   ng-model="agency.name">
                        </div>
                        <div class="form-group">
                            <label for="agency-email"><i class="icon-user"></i> <b>Email</b></label>
                            <input class="form-control" id="agency-email" type="text" placeholder=""
                                   ng-model="agency.email">
                        </div>
                        <div class="form-group">
                            <label for="agency-phone"><i class="icon-user"></i> <b>Phone</b></label>
                            <input class="form-control" id="agency-phone" type="text" placeholder=""
                                   ng-model="agency.phone">
                        </div>
                        <div class="form-group">
                            <a href="#/list" class="btn btn-grey">Back to list</a>
                            <button type="submit" class="btn pull-right">Save</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>