
// 实例一个模块，用来专门管理所有的控制器
angular.module('Controllers', [])

.controller('DemoController', ['$scope', function ($scope) {
	console.log('启动了');
}]);
