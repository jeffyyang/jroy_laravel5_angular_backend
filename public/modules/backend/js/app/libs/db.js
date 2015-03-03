app.controller('DbListCtrl', ['$scope','dbFactory','$state','$rootScope', function($scope, dbFactory,$state,$rootScope) {

    //初始化选项
    dbFactory.all().then(function(items){
        $scope.items = items;
    });

    //备份数据库
    $scope.backup = function() {
        $rootScope.loading = 'active';
        dbFactory.backup().then(function(status){
            $rootScope.loading = '';
            if(status){
                $scope.message = '备份成功';
                $state.go($state.current, {}, {reload: true});
            }
        });
    }

    //删除备份
    $scope.delete = function($name) {
        if(confirm('确认删除?')){
            angular.forEach($scope.items, function(item, i, _){
                if(item.name == $name.name){
                     _.splice(i, 1);
                }
            });
            //数据库删除
            dbFactory.delete($name.name).then(function(){return true;});
        }
    }

    //恢复备份
    $scope.restore = function($name) {
        if(confirm('确认恢复?')){
            $rootScope.loading = 'active';
            //数据库删除
            dbFactory.restore($name.name).then(function(status){
                $rootScope.loading = '';
                if(status) {$scope.message = '数据库恢复成功！';}
            });
        }
    }
}]);

app.factory('dbFactory', ['$http', function($http){

    var factory = {};
    factory.all = function (){
        return $http.get(backend_url + '/db/all').then(function (resp){
            return resp.data.data;
        });
    };

    factory.backup = function (){
        return $http.get(backend_url + '/db/backup').then(function (resp){
            return resp.data.status;
        });
    };

    factory.delete = function (name){
        return $http.get(backend_url + '/db/delete?name='+name).then(function (resp){
            return resp.data.status;
        });
    };

    factory.restore = function (name){
        return $http.get(backend_url + '/db/restore?name='+name).then(function (resp){
            return resp.data.status;
        });
    };

    return factory;
}]);



