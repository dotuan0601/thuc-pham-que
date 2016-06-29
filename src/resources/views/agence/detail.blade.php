<div class="wrap">
    <div class="main">
        <div class="contact">
            <div class="contact-form">
                <h2><span ng-bind="title"></span> agence</h2>
                <form name="detailForm">
                    <div>
                        <span><label>Name</label></span>
                        <span><input name="name" type="text" class="textbox" ng-model="agence.name"></span>
                    </div>
                    <div>
                        <span><label>Email</label></span>
                        <span><input name="email" type="text" class="textbox" ng-model="agence.email"></span>
                    </div>
                    <div>
                        <span><label>Phone</label></span>
                        <span><input name="phone" type="text" class="textbox" ng-model="agence.phone"></span>
                    </div>
                    <div>
                        <a href="#/list" class="btn black">Back to list</a>
                        <button class="btn" ng-click="save()">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>