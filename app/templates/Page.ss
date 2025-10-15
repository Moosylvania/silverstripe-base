<!DOCTYPE html>
<html lang="$ContentLocale.ATT" dir="$i18nScriptDirection.ATT">
	<head>
        <% include MetaHead %>
	</head>
	<body class="$URLSegment $ClassName $Action <% if $isSearchEngine %>search<% end_if %>">
        <main class="main" id="main" v-cloak>
			<% include Header %>
			$Layout
			<% include Footer %>
        </main>
		<script type="module" src="$Vite('app/client/src/js/app.js')"></script>
        <% yield 'Analytics' %>
	</body>
</html>
