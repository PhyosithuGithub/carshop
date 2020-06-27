<div class="panel-group" id="accordion">
    <!--div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                </span>&nbsp;Users</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Articles</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">News</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Newsletters</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Comments</a>
                            <span class="badge">42</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div-->
    <div class="panel-heading">
        <h4 class="panel-title">
            <b>Admin Dashboard</b><hr/>
        </h4>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                </span>&nbsp;Category</a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <!--tr>
                        <td>
                            <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                        </td>
                    </tr-->
                    <tr>
                        <td>
                            <a href="{{url('admin/category/create')}}">Add Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{url('admin/category')}}">Manage Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{url('admin/car/create')}}">Add Car</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="{{url('admin/car')}}">Manage Car</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                </span>&nbsp;Users</a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                     <!--tr>
                        <td>
                            <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                        </td>
                    </tr-->
                    {{-- <tr>
                        <td>
                            <a href="#">Change Password</a>
                        </td>
                    </tr> --}}
                   
                    <tr>
                        <td>
                        <a href="{{url('admin/roles/create')}}">Add Role</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a href="{{url('admin/users')}}">Views User</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                </span>&nbsp;Reports</a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="#">Registered User</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">View Ordered</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">Customer Feedback</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>