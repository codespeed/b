'use strict';

(function () {
    var eprosesoApp = angular.module("eprosesoApp");


    var ReportController = function ($scope,$http, $routeParams,$location,$timeout)
    {
         //common error function
         //$scope.reportby = "d";
        /*$scope.viewReportBy= function(){
            window.alert('kl');
        };*/
        //common error function
      var onError = function (error) {
            $scope.error = error.data;
        };

         $scope.clients_expired_list = []; //declare an empty array
         $http.get("/clients/expired").success(function(response){ 
                $scope.clients_expired_list =  response;
                 angular.forEach($scope.clients_expired_list, function(value, key){
                      $http.put("/clients/expired/update",{"application_id":value._id}).then(
                        function(response){ 
                       } 
                    ,onError);

                });
        });
         
        $scope.hasReport = false;
        $scope.reportURL = "http://ec2-54-186-5-126.us-west-2.compute.amazonaws.com/b/report/view.php";
        $scope.reportDaily = "http://ec2-54-186-5-126.us-west-2.compute.amazonaws.com/b/report/daily.php";
        $scope.reportMonthly = "http://ec2-54-186-5-126.us-west-2.compute.amazonaws.com/b/report/monthly.php";
        $scope.reportYearly = "http://ec2-54-186-5-126.us-west-2.compute.amazonaws.com/b/report/yearly.php";
        $scope.lblReport = "";
        $scope.reports = [];
        $scope.daily = false;
        $scope.monthly = false;
        $scope.yearly = false;

        $scope.searchReport = function(){
          $scope.hasReport = false;
          $scope.reportURL = "http://ec2-54-186-5-126.us-west-2.compute.amazonaws.com/b/report/view.php";
          $scope.lblReport = "";
          $scope.daily = false;
          $scope.monthly = false;
          $scope.yearly = false;

          if($scope.reportby=="d"){
            var date = $scope.m + "-" + $scope.d + "-" + $scope.y;
            $http.get("/healthcards/daily/"+date).success(function(response){ 
                $scope.reports = response; 
                if($scope.reports.length > 0){
                  $scope.hasReport = true;
                  //$scope.reportURL = "http://ec2-54-186-5-126.us-west-2.compute.amazonaws.com/report/view.php?d="+date;
                  $scope.lblReport = "Daily Report ("+$scope.m+" "+$scope.d+", "+$scope.y+")";
                  $scope.totalRecords = $scope.reports.length;
                  $scope.daily = true;
                  $scope.monthly = false;
                  $scope.yearly = false;
                  $scope.reportDaily = "http://ec2-54-186-5-126.us-west-2.compute.amazonaws.com/b/report/daily.php?d="+date;

                }
              
                 
            },onError);

          }else if($scope.reportby == "m"){
             $http.get("/healthcards/monthly/"+$scope.m+"/"+$scope.y).success(function(response){ 
                 $scope.reports = response; 
                if($scope.reports.length > 0){
                  $scope.hasReport = true;
                  //$scope.reportURL = "http://ec2-54-186-5-126.us-west-2.compute.amazonaws.com/report/view.php?m="+$scope.m+"&y="+$scope.y;
                 $scope.lblReport = "Monthly Report ("+$scope.m+" "+$scope.y+")";
                 $scope.totalRecords = $scope.reports.length;
                  $scope.daily = false;
                  $scope.monthly = true;
                  $scope.yearly = false;
                  $scope.reportMonthly = "http://ec2-54-186-5-126.us-west-2.compute.amazonaws.com/b/report/monthly.php?m="+$scope.m+"&y="+$scope.y;

                }

            },onError);

          }else if($scope.reportby == 'y'){
             $http.get("/healthcards/yearly/"+$scope.y).success(function(response){ 
                 $scope.reports = response; 
                if($scope.reports.length > 0){
                  $scope.hasReport = true;
                  //$scope.reportURL = "http://ec2-54-186-5-126.us-west-2.compute.amazonaws.com/report/view.php?y="+$scope.y;
                  $scope.lblReport = "Yearly Report ("+$scope.y+")";
                  $scope.totalRecords = $scope.reports.length;
                  $scope.daily = false;
                  $scope.monthly = false;
                  $scope.yearly = true;
                  $scope.reportYearly = "http://ec2-54-186-5-126.us-west-2.compute.amazonaws.com/b/report/yearly.php?y="+$scope.y;
                }

            },onError);

          }
        
        };
       /* $scope.sortreport = function(keyname){
                $scope.sortKey = keyname;   //set the sortKey to the param passed
                $scope.reverse = !$scope.reverse; //if true make it false and vice versa
        };*/

        $scope.selectReport = function() {
         // $scope.hasReport = false;
      };

    
    }

    eprosesoApp.controller('ReportController', ReportController);

}());

