
// <li className="nav-item">
    //     <a href="{{ URL('roles') }}" className="nav-link active">
        //         <i className="nav-icon fas fa-home"></i>
        //         <p>Role</p>
        //     </a>
    // </li>

// @extends('layouts.app')
//
// @section('content')
    // <script src="{{ URL::asset('js\angular\role_controller.js') }}?v=<?php echo time() ?>"
    // type="text/javascript"></script>
    // <div ng-app="LaravelApp" ng-controller="roleController">
        //     <div class="row">
            //         <div class="col-12">
                //             <div class="card">
                    //
                    //                 <div class="card-body table-responsive p-0">
                        //                     <table class="table table-hover text-nowrap">
                            //                         <thead>
                            //                         <tr>
                                //                             <th class="center-content">#</th>
                                //                             <th>Name</th>
                                //                             <th>Delete</th>
                                //                         </tr>
                            //                         </thead>
                            //                         <tbody>
                            //                         <tr ng-repeat="t in data">
                                //                             <td class="center-content" ng-bind="t.id"></td>
                                //                             <td>
                                    //                                 <input type="text" class="form-control" id="role"
                                    //                                        ng-model="t.name" placeholder="Enter role">
                                    //                             </td>
                                //                             <td>
                                    //                                 <button type="button" class="btn btn-danger"
                                    //                                         ng-click="openDeleteConfirmationModal(t)"
                                    //                                         ng-show="t.id" data-toggle="modal"
                                    //                                         data-target="#deleteConfirmation">Delete
                                    //                                 </button>
                                    //                             </td>
                                //                         </tr>
                            //                         </tbody>
                            //                     </table>
                        //                     <div class="row p-6">
                            //                         <div class="col-12">
                                //                             <button type="button" class="btn btn-secondary" ng-click="Add()">Add Role</button>
                                //                             <button type="button" class="btn btn-info" ng-click="Save()">Save</button>
                                //                         </div>
                            //                     </div>
                        //                 </div>
                    //             </div>
                //         </div>
            //     </div>
        // </div>
    // @endsection


// app.controller('roleController', function($scope, $http, $window)
// {
//     $scope.loading = false;
//     $scope.data = [];
//
//     $scope.init = function ()
//     {
//         $scope.loading = true;
//         $http.get(url + 'api/settings_roles/get_all_roles')
//             .then(function (response)
//             {
//                 $scope.data = response.data;
//                 $scope.loading = false;
//             })
//             .catch(function ()
//             {
//                 $scope.loading = false;
//             });
//     };
//
//     $scope.Add = function ()
//     {
//         $scope.data.push(
//             {
//                 id: '',
//                 name: '',
//             });
//     };
//
//     $scope.init();
// });

// public function index()
// {
//     return view('role');
// }
//
// public function getAllRoles()
// {
//     return Role::all();
// }

// Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index']);
// Route::get('/api/settings_roles/get_all_roles', [App\Http\Controllers\RoleController::class, 'getAllRoles']);

// class CreateRoleTable extends Migration
// {
//     /**
//      * Run the migrations.
//      *
//      * @return void
//      */
//     public function up()
// {
//     Schema::create('role', function (Blueprint $table) {
//     $table->engine = "InnoDB";
//
//     $table->increments('id');
//     $table->string('name');
//
//     $table->timestamps();
// });
// }
//
//     /**
//      * Reverse the migrations.
//      *
//      * @return void
//      */
//     public function down()
// {
//     DB::statement('SET FOREIGN_KEY_CHECKS = 0');
//     Schema::dropIfExists('role');
//     DB::statement('SET FOREIGN_KEY_CHECKS = 1');
// }
// }

// protected $table = 'role';
//
// protected $fillable = [
//     'name'
// ];
