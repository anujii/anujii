<!doctype html>
<html lang="en" ng-app="epta" id="ng-app" xmlns:ng="http://angularjs.org">
<head>
	<style type="text/css">
		[ng-cloak] {
			display: none;
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Anujii</title>
	<link rel="stylesheet" href="/vendor/bootstrap/bootstrap.css"/>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lte IE 8]>
	<script>
		document.createElement('ng-include');
		document.createElement('ng-pluralize');
		document.createElement('ng-view');
		document.createElement('ng:include');
		document.createElement('ng:pluralize');
		document.createElement('ng:view');
	</script>
	<![endif]-->
	<!--[if lt IE 8]>
	<script src="/vendor/json/json2.js"></script>
	<![endif]-->
</head>
<body ng-cloak="">

<div ng-view></div>

<!-- In production use:
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
  -->
<script src="/vendor/angular/angular.js"></script>
<script src="/vendor/angular/angular-resource.js"></script>
<script src="/vendor/underscore/underscore.js"></script>

<script src="/js/app.js"></script>
<script src="/js/services.js"></script>
<script src="/js/controllers.js"></script>
<script src="/js/filters.js"></script>
<script src="/js/directives.js"></script>
</body>
</html>