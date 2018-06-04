<!DOCTYPE HTML>
<html class="no-js" lang="en">
	<head>
		{% include '../partials/head.twig' %}
	</head>
	<body>
		<div class="site">
			<div class="site__content">
                {% include '../pages/admin.php' %}
			</div>

			<div class="site__sidenav">
				{% include '../partials/sidenav.php' %}
			</div>

			{% block js %}
                <script src="./assets/js/lib.js"></script>
                <script src="./assets/js/app.js"></script>
            {% endblock %}
		</div>
	</body>
</html>
