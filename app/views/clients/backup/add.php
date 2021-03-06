
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add New Client
            <!-- <small>advanced tables</small> -->
            <input type="hidden" id="action" value="category-add">
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</li>
            <li>Clients</li>
            <li class="active">Add</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

    
          <div class="row">
            <div class="col-xs-8">

          
                    
         
              
              <div class="box box-success">

             <div class="box-header with-border">
                  <h3 class="box-title">Client Details</h3>
                </div>
                
                <!-- form start -->
                <form data-action="add" class="form-horizontal" id="save-form" onsubmit="return false;"  enctype="multipart/form-data" method="post" >

                  <div class="box-body">
                     <div class="col-xs-10">
                     

                <div class="form-group">
                      <label  class="col-sm-3 control-label">Image <span class="text-red">*</span></label>
                      <div class="col-sm-7">
                        <input type="file" class="form-control" id="image" name="image"  accept="image/x-png, image/gif, image/jpeg" >
                      </div>
                    </div>

                       <!--  <div class="form-group">
                      <label  class="col-sm-3 control-label"></label>
                      <div class="col-sm-7">
                        <img src="images/default.png" alt="" width="150px" height="150px" id="image-preview">
                      </div>
                    </div> -->

                   <div class="form-group">
                      <label  class="col-sm-3 control-label">Lastname <span class="text-red">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" ng-model="client.lastname" id="lastname" name="lastname">
                      </div>
                    </div>


                       <div class="form-group">
                      <label  class="col-sm-3 control-label">Firstname <span class="text-red">*</span></label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" ng-model="client.firstname" id="firstname" name="firstname">
                      </div>
                    </div>


                         <div class="form-group">
                      <label  class="col-sm-3 control-label">Middlename</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" ng-model="client.middlename" id="middlename" name="middlename">
                      </div>
                    </div>

                    <div class="form-group">
                    <label  class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-7">
                    <div class="radio">
                      <label>
                        <input  type="radio" name="gender" ng-model="client.gender" value="male" checked>
                        Male
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="gender" ng-model="client.gender" value="female">
                        Female
                      </label>
                  </div>
                  </div>
                  </div>


                  <div class="form-group">
                  <label  class="col-sm-3 control-label">Birth of Date</label>
                  <div class="col-sm-7">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" id="birthofdate" ng-model="client.birthofdate" class="form-control input-date" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask="">
                </div>
                </div>
              </div>


                  

                     <div class="form-group">
                      <label  class="col-sm-3 control-label">Civil Status</label>
                      <div class="col-sm-7">
                       <select class="form-control" ng-model="client.civilstatus" id="civilstatus" name="civilstatus">
                          <option value="single" selected>Single</option>
                          <option value="married">Married</option>
                          <option value="widowed">widowed</option>
                       </select>
                      </div>
                    </div>

                       

                           <div class="form-group">
                      <label  class="col-sm-3 control-label">Nationality</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" ng-model="client.nationality" id="nationality" name="office_location">
                      </div>
                    </div>


                <div class="form-group">
                    <label  class="col-sm-3 control-label">Residence</label>
                    <div class="col-sm-7">
                      <textarea class="form-control" id="residence" ng-model="client.residence" rows="3"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Contact No</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" ng-model="client.contactno" id="contactno" name="contactnumber">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Nickname</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" ng-model="client.nickname" id="nickname" name="nickname">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Establishment</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" ng-model="client.establishment" id="establishment" name="establishment">
                  </div>
                </div>


                <h5>In case of emergency</h5>
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Name</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" ng-model="client.icoe_name" id="icoe_name" name="icoe_name">
                  </div>
                </div>

                <div class="form-group">
                  <label  class="col-sm-3 control-label">Relation</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" ng-model="client.icoe_relation" id="icoe_relation" name="icoe_relation">
                  </div>
                </div>


                <div class="form-group">
                    <label  class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-7">
                      <textarea class="form-control" id="icoe_address" ng-model="client.icoe_address" rows="3"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Contact No</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" ng-model="client.icoe_contactno" id="icoe_contactno" name="icoe_contactno">
                  </div>
                </div>

                <!--  <h5>Account Login</h5> -->


                 <div class="form-group" style="display:none;">
                  <label  class="col-sm-3 control-label">Username</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" ng-model="client.username" id="username" name="username">
                  </div>
                </div>

                <div class="form-group" style="display:none;">
                  <label  class="col-sm-3 control-label">Password</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" ng-model="client.password" id="password" name="password">
                  </div>
                </div>


                




                       
                  

                    </div>

              




      



                    
                  </div><!-- /.box-body -->

              

          
            </form>

              
              </div>

                <div class="box box-success">

             <div class="box-header with-border">
                  <h3 class="box-title">Health Certificate Application Information</h3>
                </div>
               
                  <div class="box-body">
dd
                  </div>

                      <div class="box-footer">
                    <div class="col-xs-10">
                     <div class="form-group">
                     <label  class="col-sm-2 control-label"></label>
                   <button class="btn btn-md btn-success btn-flat btn-save" ng-click="addClient(client)">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#/clients"  class="btn btn-md btn-default btn-flat">Cancel</a>
                    </div>
                    </div>
                   
                  </div>
            </div>




          


           
         

          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
